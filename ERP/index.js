const camera_ui_btn = document.querySelector("#camera-ui-btn");
const camera_btn = document.querySelector("#camera-btn");
const photo_canvas = document.querySelector("#photo-canvas")
/**
 * @type {HTMLElement} camera_ui
 */
const camera_ui = document.querySelector(".camera-ui");
const video = document.querySelector("#camera-preview");
const barcode = document.querySelector(".barcode");
const preview_image = document.querySelector("#preview-image");
const confirm_btn = document.querySelector("#confirm");
const temp_image = document.querySelector("#temp-image");
const scan_btn = document.querySelector("#scan-btn");
const sn = document.querySelector("#sn")

const data = {
    image: null,
    barcode: null
}

camera_ui_btn.addEventListener("click", async () => {


    const constraints = {
        video: {
            facingMode: 'environment',
            width: { ideal: 1280 },
            height: { ideal: 720 }
        }
    };

    try {
        stream = await navigator.mediaDevices.getUserMedia(constraints);
        window.stream = stream;
        video.srcObject = stream;
        const track = stream.getVideoTracks()[0];
        track.applyConstraints({
            advanced: [{ torch: true }]
        });
        camera_ui.classList.add("show");
    } catch (err) {
        alert('無法啟用相機，請確認權限或瀏覽器支援性');
    }

})

function adaptiveEnhance(imgData, segments = 3, contrast = 30) {
    let data = imgData.data;
    let width = imgData.width;
    let height = imgData.height;
    let segW = Math.floor(width / segments);

    for (let seg = 0; seg < segments; seg++) {
        // 取每區塊的亮度平均
        let sum = 0, count = 0;
        for (let y = 0; y < height; y++) {
            for (let x = seg * segW; x < (seg + 1) * segW && x < width; x++) {
                let idx = (y * width + x) * 4;
                let gray = 0.299 * data[idx] + 0.587 * data[idx + 1] + 0.114 * data[idx + 2];
                sum += gray;
                count++;
            }
        }
        let avg = sum / count;
        let factor = (259 * (contrast + 255)) / (255 * (259 - contrast));
        // 再針對每像素做局部增強
        for (let y = 0; y < height; y++) {
            for (let x = seg * segW; x < (seg + 1) * segW && x < width; x++) {
                let idx = (y * width + x) * 4;
                let gray = 0.299 * data[idx] + 0.587 * data[idx + 1] + 0.114 * data[idx + 2];
                // 相對區塊平均亮度做對比拉伸
                gray = factor * (gray - avg) + avg;
                gray = Math.max(0, Math.min(255, gray));
                data[idx] = data[idx + 1] = data[idx + 2] = gray;
            }
        }
    }
    return imgData;
}

camera_btn.addEventListener('click', () => {
    photo_canvas.width = video.videoWidth;
    photo_canvas.height = video.videoHeight;
    photo_canvas.getContext('2d').drawImage(video, 0, 0);

    const dataURL = photo_canvas.toDataURL('image/png');
    temp_image.src = dataURL;
    temp_image.classList.remove("d-none");
    data.image = dataURL;
});



let scanning = false;
scan_btn.addEventListener('click', async () => {

    if (scanning === false) {
        startBarcodeScanning()
    } else {
        scanning = false;
        scan_btn.classList.remove("scanning");
        if (barcode.innerText === "辨識中") {
            barcode.classList.remove("show");
        }
    }


});

const sleep = (ms) => {
    return new Promise(res => setTimeout(res, ms))
}

async function startBarcodeScanning() {
    scanning = true;
    const img = document.createElement('img');
    while (scanning) {
        if (!scanning) return;
        scan_btn.classList.add("scanning");
        photo_canvas.width = video.videoWidth;
        photo_canvas.height = video.videoHeight;
        photo_canvas.getContext('2d').drawImage(video, 0, 0);

        // 用 video 實際顯示的 CSS 寬高去算 barcode-area 在畫面上的比例
        const videoRect = video.getBoundingClientRect();
        const barcodeArea = document.querySelector('.barcode-area');
        const barcodeRect = barcodeArea.getBoundingClientRect();

        // 計算 Y 軸、寬高的比例
        const scaleY = video.videoHeight / videoRect.height;
        const scaleX = video.videoWidth / videoRect.width;

        // barcode-area 區域在 video 畫面的相對位置
        const cropX = (barcodeRect.left - videoRect.left) * scaleX;
        const cropY = (barcodeRect.top - videoRect.top) * scaleY;
        const cropW = barcodeRect.width * scaleX;
        const cropH = barcodeRect.height * scaleY;

        // 新 canvas 裁切
        const cropCanvas = document.createElement('canvas');
        cropCanvas.width = cropW;
        cropCanvas.height = cropH;
        cropCanvas.getContext('2d').drawImage(
            photo_canvas,
            cropX, cropY, cropW, cropH,
            0, 0, cropW, cropH
        );
        let ctx = cropCanvas.getContext('2d');
        let imgData = ctx.getImageData(0, 0, cropCanvas.width, cropCanvas.height);
        imgData = adaptiveEnhance(imgData, 3, 30); // 三區段、對比+30
        ctx.putImageData(imgData, 0, 0);

        try {
            const codeReader = new ZXing.BrowserBarcodeReader();
            const dataURL = cropCanvas.toDataURL('image/png');
            img.src = dataURL;
            // temp_image.src = dataURL;
            // temp_image.classList.remove("d-none");
            await new Promise(res => {
                img.onload = async () => {
                    try {
                        const result = await codeReader.decodeFromImageElement(img, { TRY_HARDER: true });
                        barcode.classList.add("show");
                        barcode.innerText = result.text;
                        data.barcode = result.text;
                        scanning = false;
                        scan_btn.classList.remove("scanning")
                        res(true)
                    } catch (err) {
                        console.error('條碼辨識錯誤:', err);
                        barcode.innerText = "辨識中";
                        data.barcode = null;
                        barcode.classList.add("show");
                        res(false)
                    }
                }
            })
            await sleep(200)

        } catch (err) {
            console.error('條碼辨識錯誤:', err);
        }


    }
}



confirm_btn.addEventListener("click", () => {
    camera_ui.classList.remove("show");
    if (data.image) {
        preview_image.src = data.image;
    }
    if (data.barcode) {
        sn.value = data.barcode;
    }
    if (window.stream) {
        window.stream.getTracks().forEach(track => track.stop());
        window.stream = null;
    }

    preview_image.classList.remove("d-none");
    barcode.classList.remove("show");
    barcode.innerText = "辨識中";
    scanning = false;
    scan_btn.classList.remove("scanning");
    temp_image.classList.add("d-none");
})

