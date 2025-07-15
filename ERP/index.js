const camera_ui_btn = document.querySelector("#camera-ui-btn");
const camera_btn = document.querySelector("#camera-btn");
const photo_canvas = document.querySelector("#photo-canvas")
/**
 * @type {HTMLElement} camera_ui
 */
const camera_ui = document.querySelector(".camera-ui");
const video = document.querySelector("#camera-preview");
const barcode = document.querySelector(".barcode")



camera_ui_btn.addEventListener("click", async () => {

    try {
        stream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } });
        video.srcObject = stream;
        camera_ui.classList.add("show");
    } catch (err) {
        alert('無法啟用相機，請確認權限或瀏覽器支援性');
    }

})


camera_btn.addEventListener('click', async () => {

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

    try {
        const codeReader = new ZXing.BrowserBarcodeReader();
        const img = document.createElement('img');
        img.src = cropCanvas.toDataURL('image/png');
        img.onload = async () => {
            // document.body.append(img);
            // img.style="width:100vw;z-index:99999999999999;position:fixed;top:0;left:0"
            try {
                const result = await codeReader.decodeFromImageElement(img);
                barcode.classList.add("show");
                barcode.innerText = result.text;
            } catch (err) {
                console.error('條碼辨識錯誤:', err);
                alert('辨識失敗，請重新圈選或拍照');
            }
        }
    } catch (err) {
        console.error('條碼辨識錯誤:', err);
        alert('辨識失敗，請重新圈選或拍照');
    }

});