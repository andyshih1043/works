var basefile = "dsyadmin.php";
var ctrl_id = "c";
var func_id = "f";
var webroot = "http://s.hzes.cn/";
var apifile = "api.php";
var lang= new Array();

function get_url(ctrl,func,ext){var url = "http://s.hzes.cn/dsyadmin.php?c="+ctrl;if(func){url+="&f="+func;};if(ext){url+="&"+ext};return url;}
function api_url(ctrl,func,ext){var url = "http://s.hzes.cn/api.php?c="+ctrl;if(func){url+="&f="+func;};if(ext){url+="&"+ext};url+="&_noCache="+Math.random();return url;};
function api_plugin_url(id,func,ext){var url = "http://s.hzes.cn/api.php?c=plugin&f=index&id="+id+"&exec="+func;if(ext){url+="&"+ext};url+="&_noCache="+Math.random();return url;};
/*! jQuery v3.4.1 | (c) JS Foundation and other contributors | jquery.org/license */
!function(e,t){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=e.document?t(e,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return t(e)}:t(e)}("undefined"!=typeof window?window:this,function(C,e){"use strict";var t=[],E=C.document,r=Object.getPrototypeOf,s=t.slice,g=t.concat,u=t.push,i=t.indexOf,n={},o=n.toString,v=n.hasOwnProperty,a=v.toString,l=a.call(Object),y={},m=function(e){return"function"==typeof e&&"number"!=typeof e.nodeType},x=function(e){return null!=e&&e===e.window},c={type:!0,src:!0,nonce:!0,noModule:!0};function b(e,t,n){var r,i,o=(n=n||E).createElement("script");if(o.text=e,t)for(r in c)(i=t[r]||t.getAttribute&&t.getAttribute(r))&&o.setAttribute(r,i);n.head.appendChild(o).parentNode.removeChild(o)}function w(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?n[o.call(e)]||"object":typeof e}var f="3.4.1",k=function(e,t){return new k.fn.init(e,t)},p=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;function d(e){var t=!!e&&"length"in e&&e.length,n=w(e);return!m(e)&&!x(e)&&("array"===n||0===t||"number"==typeof t&&0<t&&t-1 in e)}k.fn=k.prototype={jquery:f,constructor:k,length:0,toArray:function(){return s.call(this)},get:function(e){return null==e?s.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=k.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return k.each(this,e)},map:function(n){return this.pushStack(k.map(this,function(e,t){return n.call(e,t,e)}))},slice:function(){return this.pushStack(s.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(0<=n&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:u,sort:t.sort,splice:t.splice},k.extend=k.fn.extend=function(){var e,t,n,r,i,o,a=arguments[0]||{},s=1,u=arguments.length,l=!1;for("boolean"==typeof a&&(l=a,a=arguments[s]||{},s++),"object"==typeof a||m(a)||(a={}),s===u&&(a=this,s--);s<u;s++)if(null!=(e=arguments[s]))for(t in e)r=e[t],"__proto__"!==t&&a!==r&&(l&&r&&(k.isPlainObject(r)||(i=Array.isArray(r)))?(n=a[t],o=i&&!Array.isArray(n)?[]:i||k.isPlainObject(n)?n:{},i=!1,a[t]=k.extend(l,o,r)):void 0!==r&&(a[t]=r));return a},k.extend({expando:"jQuery"+(f+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==o.call(e))&&(!(t=r(e))||"function"==typeof(n=v.call(t,"constructor")&&t.constructor)&&a.call(n)===l)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e,t){b(e,{nonce:t&&t.nonce})},each:function(e,t){var n,r=0;if(d(e)){for(n=e.length;r<n;r++)if(!1===t.call(e[r],r,e[r]))break}else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},trim:function(e){return null==e?"":(e+"").replace(p,"")},makeArray:function(e,t){var n=t||[];return null!=e&&(d(Object(e))?k.merge(n,"string"==typeof e?[e]:e):u.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:i.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r=[],i=0,o=e.length,a=!n;i<o;i++)!t(e[i],i)!==a&&r.push(e[i]);return r},map:function(e,t,n){var r,i,o=0,a=[];if(d(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&a.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&a.push(i);return g.apply([],a)},guid:1,support:y}),"function"==typeof Symbol&&(k.fn[Symbol.iterator]=t[Symbol.iterator]),k.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){n["[object "+t+"]"]=t.toLowerCase()});var h=function(n){var e,d,b,o,i,h,f,g,w,u,l,T,C,a,E,v,s,c,y,k="sizzle"+1*new Date,m=n.document,S=0,r=0,p=ue(),x=ue(),N=ue(),A=ue(),D=function(e,t){return e===t&&(l=!0),0},j={}.hasOwnProperty,t=[],q=t.pop,L=t.push,H=t.push,O=t.slice,P=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},R="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",I="(?:\\\\.|[\\w-]|[^\0-\\xa0])+",W="\\["+M+"*("+I+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+I+"))|)"+M+"*\\]",$=":("+I+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+W+")*)|.*)\\)|)",F=new RegExp(M+"+","g"),B=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),_=new RegExp("^"+M+"*,"+M+"*"),z=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),U=new RegExp(M+"|>"),X=new RegExp($),V=new RegExp("^"+I+"$"),G={ID:new RegExp("^#("+I+")"),CLASS:new RegExp("^\\.("+I+")"),TAG:new RegExp("^("+I+"|[*])"),ATTR:new RegExp("^"+W),PSEUDO:new RegExp("^"+$),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+R+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},Y=/HTML$/i,Q=/^(?:input|select|textarea|button)$/i,J=/^h\d$/i,K=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ee=/[+~]/,te=new RegExp("\\\\([\\da-f]{1,6}"+M+"?|("+M+")|.)","ig"),ne=function(e,t,n){var r="0x"+t-65536;return r!=r||n?t:r<0?String.fromCharCode(r+65536):String.fromCharCode(r>>10|55296,1023&r|56320)},re=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ie=function(e,t){return t?"\0"===e?"\ufffd":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},oe=function(){T()},ae=be(function(e){return!0===e.disabled&&"fieldset"===e.nodeName.toLowerCase()},{dir:"parentNode",next:"legend"});try{H.apply(t=O.call(m.childNodes),m.childNodes),t[m.childNodes.length].nodeType}catch(e){H={apply:t.length?function(e,t){L.apply(e,O.call(t))}:function(e,t){var n=e.length,r=0;while(e[n++]=t[r++]);e.length=n-1}}}function se(t,e,n,r){var i,o,a,s,u,l,c,f=e&&e.ownerDocument,p=e?e.nodeType:9;if(n=n||[],"string"!=typeof t||!t||1!==p&&9!==p&&11!==p)return n;if(!r&&((e?e.ownerDocument||e:m)!==C&&T(e),e=e||C,E)){if(11!==p&&(u=Z.exec(t)))if(i=u[1]){if(9===p){if(!(a=e.getElementById(i)))return n;if(a.id===i)return n.push(a),n}else if(f&&(a=f.getElementById(i))&&y(e,a)&&a.id===i)return n.push(a),n}else{if(u[2])return H.apply(n,e.getElementsByTagName(t)),n;if((i=u[3])&&d.getElementsByClassName&&e.getElementsByClassName)return H.apply(n,e.getElementsByClassName(i)),n}if(d.qsa&&!A[t+" "]&&(!v||!v.test(t))&&(1!==p||"object"!==e.nodeName.toLowerCase())){if(c=t,f=e,1===p&&U.test(t)){(s=e.getAttribute("id"))?s=s.replace(re,ie):e.setAttribute("id",s=k),o=(l=h(t)).length;while(o--)l[o]="#"+s+" "+xe(l[o]);c=l.join(","),f=ee.test(t)&&ye(e.parentNode)||e}try{return H.apply(n,f.querySelectorAll(c)),n}catch(e){A(t,!0)}finally{s===k&&e.removeAttribute("id")}}}return g(t.replace(B,"$1"),e,n,r)}function ue(){var r=[];return function e(t,n){return r.push(t+" ")>b.cacheLength&&delete e[r.shift()],e[t+" "]=n}}function le(e){return e[k]=!0,e}function ce(e){var t=C.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function fe(e,t){var n=e.split("|"),r=n.length;while(r--)b.attrHandle[n[r]]=t}function pe(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)while(n=n.nextSibling)if(n===t)return-1;return e?1:-1}function de(t){return function(e){return"input"===e.nodeName.toLowerCase()&&e.type===t}}function he(n){return function(e){var t=e.nodeName.toLowerCase();return("input"===t||"button"===t)&&e.type===n}}function ge(t){return function(e){return"form"in e?e.parentNode&&!1===e.disabled?"label"in e?"label"in e.parentNode?e.parentNode.disabled===t:e.disabled===t:e.isDisabled===t||e.isDisabled!==!t&&ae(e)===t:e.disabled===t:"label"in e&&e.disabled===t}}function ve(a){return le(function(o){return o=+o,le(function(e,t){var n,r=a([],e.length,o),i=r.length;while(i--)e[n=r[i]]&&(e[n]=!(t[n]=e[n]))})})}function ye(e){return e&&"undefined"!=typeof e.getElementsByTagName&&e}for(e in d=se.support={},i=se.isXML=function(e){var t=e.namespaceURI,n=(e.ownerDocument||e).documentElement;return!Y.test(t||n&&n.nodeName||"HTML")},T=se.setDocument=function(e){var t,n,r=e?e.ownerDocument||e:m;return r!==C&&9===r.nodeType&&r.documentElement&&(a=(C=r).documentElement,E=!i(C),m!==C&&(n=C.defaultView)&&n.top!==n&&(n.addEventListener?n.addEventListener("unload",oe,!1):n.attachEvent&&n.attachEvent("onunload",oe)),d.attributes=ce(function(e){return e.className="i",!e.getAttribute("className")}),d.getElementsByTagName=ce(function(e){return e.appendChild(C.createComment("")),!e.getElementsByTagName("*").length}),d.getElementsByClassName=K.test(C.getElementsByClassName),d.getById=ce(function(e){return a.appendChild(e).id=k,!C.getElementsByName||!C.getElementsByName(k).length}),d.getById?(b.filter.ID=function(e){var t=e.replace(te,ne);return function(e){return e.getAttribute("id")===t}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&E){var n=t.getElementById(e);return n?[n]:[]}}):(b.filter.ID=function(e){var n=e.replace(te,ne);return function(e){var t="undefined"!=typeof e.getAttributeNode&&e.getAttributeNode("id");return t&&t.value===n}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&E){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];i=t.getElementsByName(e),r=0;while(o=i[r++])if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),b.find.TAG=d.getElementsByTagName?function(e,t){return"undefined"!=typeof t.getElementsByTagName?t.getElementsByTagName(e):d.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){while(n=o[i++])1===n.nodeType&&r.push(n);return r}return o},b.find.CLASS=d.getElementsByClassName&&function(e,t){if("undefined"!=typeof t.getElementsByClassName&&E)return t.getElementsByClassName(e)},s=[],v=[],(d.qsa=K.test(C.querySelectorAll))&&(ce(function(e){a.appendChild(e).innerHTML="<a id='"+k+"'></a><select id='"+k+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&v.push("[*^$]="+M+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||v.push("\\["+M+"*(?:value|"+R+")"),e.querySelectorAll("[id~="+k+"-]").length||v.push("~="),e.querySelectorAll(":checked").length||v.push(":checked"),e.querySelectorAll("a#"+k+"+*").length||v.push(".#.+[+~]")}),ce(function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=C.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&v.push("name"+M+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&v.push(":enabled",":disabled"),a.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&v.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),v.push(",.*:")})),(d.matchesSelector=K.test(c=a.matches||a.webkitMatchesSelector||a.mozMatchesSelector||a.oMatchesSelector||a.msMatchesSelector))&&ce(function(e){d.disconnectedMatch=c.call(e,"*"),c.call(e,"[s!='']:x"),s.push("!=",$)}),v=v.length&&new RegExp(v.join("|")),s=s.length&&new RegExp(s.join("|")),t=K.test(a.compareDocumentPosition),y=t||K.test(a.contains)?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)while(t=t.parentNode)if(t===e)return!0;return!1},D=t?function(e,t){if(e===t)return l=!0,0;var n=!e.compareDocumentPosition-!t.compareDocumentPosition;return n||(1&(n=(e.ownerDocument||e)===(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!d.sortDetached&&t.compareDocumentPosition(e)===n?e===C||e.ownerDocument===m&&y(m,e)?-1:t===C||t.ownerDocument===m&&y(m,t)?1:u?P(u,e)-P(u,t):0:4&n?-1:1)}:function(e,t){if(e===t)return l=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,a=[e],s=[t];if(!i||!o)return e===C?-1:t===C?1:i?-1:o?1:u?P(u,e)-P(u,t):0;if(i===o)return pe(e,t);n=e;while(n=n.parentNode)a.unshift(n);n=t;while(n=n.parentNode)s.unshift(n);while(a[r]===s[r])r++;return r?pe(a[r],s[r]):a[r]===m?-1:s[r]===m?1:0}),C},se.matches=function(e,t){return se(e,null,null,t)},se.matchesSelector=function(e,t){if((e.ownerDocument||e)!==C&&T(e),d.matchesSelector&&E&&!A[t+" "]&&(!s||!s.test(t))&&(!v||!v.test(t)))try{var n=c.call(e,t);if(n||d.disconnectedMatch||e.document&&11!==e.document.nodeType)return n}catch(e){A(t,!0)}return 0<se(t,C,null,[e]).length},se.contains=function(e,t){return(e.ownerDocument||e)!==C&&T(e),y(e,t)},se.attr=function(e,t){(e.ownerDocument||e)!==C&&T(e);var n=b.attrHandle[t.toLowerCase()],r=n&&j.call(b.attrHandle,t.toLowerCase())?n(e,t,!E):void 0;return void 0!==r?r:d.attributes||!E?e.getAttribute(t):(r=e.getAttributeNode(t))&&r.specified?r.value:null},se.escape=function(e){return(e+"").replace(re,ie)},se.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},se.uniqueSort=function(e){var t,n=[],r=0,i=0;if(l=!d.detectDuplicates,u=!d.sortStable&&e.slice(0),e.sort(D),l){while(t=e[i++])t===e[i]&&(r=n.push(i));while(r--)e.splice(n[r],1)}return u=null,e},o=se.getText=function(e){var t,n="",r=0,i=e.nodeType;if(i){if(1===i||9===i||11===i){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=o(e)}else if(3===i||4===i)return e.nodeValue}else while(t=e[r++])n+=o(t);return n},(b=se.selectors={cacheLength:50,createPseudo:le,match:G,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(te,ne),e[3]=(e[3]||e[4]||e[5]||"").replace(te,ne),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||se.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&se.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return G.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&X.test(n)&&(t=h(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(te,ne).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=p[e+" "];return t||(t=new RegExp("(^|"+M+")"+e+"("+M+"|$)"))&&p(e,function(e){return t.test("string"==typeof e.className&&e.className||"undefined"!=typeof e.getAttribute&&e.getAttribute("class")||"")})},ATTR:function(n,r,i){return function(e){var t=se.attr(e,n);return null==t?"!="===r:!r||(t+="","="===r?t===i:"!="===r?t!==i:"^="===r?i&&0===t.indexOf(i):"*="===r?i&&-1<t.indexOf(i):"$="===r?i&&t.slice(-i.length)===i:"~="===r?-1<(" "+t.replace(F," ")+" ").indexOf(i):"|="===r&&(t===i||t.slice(0,i.length+1)===i+"-"))}},CHILD:function(h,e,t,g,v){var y="nth"!==h.slice(0,3),m="last"!==h.slice(-4),x="of-type"===e;return 1===g&&0===v?function(e){return!!e.parentNode}:function(e,t,n){var r,i,o,a,s,u,l=y!==m?"nextSibling":"previousSibling",c=e.parentNode,f=x&&e.nodeName.toLowerCase(),p=!n&&!x,d=!1;if(c){if(y){while(l){a=e;while(a=a[l])if(x?a.nodeName.toLowerCase()===f:1===a.nodeType)return!1;u=l="only"===h&&!u&&"nextSibling"}return!0}if(u=[m?c.firstChild:c.lastChild],m&&p){d=(s=(r=(i=(o=(a=c)[k]||(a[k]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===S&&r[1])&&r[2],a=s&&c.childNodes[s];while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if(1===a.nodeType&&++d&&a===e){i[h]=[S,s,d];break}}else if(p&&(d=s=(r=(i=(o=(a=e)[k]||(a[k]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===S&&r[1]),!1===d)while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if((x?a.nodeName.toLowerCase()===f:1===a.nodeType)&&++d&&(p&&((i=(o=a[k]||(a[k]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]=[S,d]),a===e))break;return(d-=v)===g||d%g==0&&0<=d/g}}},PSEUDO:function(e,o){var t,a=b.pseudos[e]||b.setFilters[e.toLowerCase()]||se.error("unsupported pseudo: "+e);return a[k]?a(o):1<a.length?(t=[e,e,"",o],b.setFilters.hasOwnProperty(e.toLowerCase())?le(function(e,t){var n,r=a(e,o),i=r.length;while(i--)e[n=P(e,r[i])]=!(t[n]=r[i])}):function(e){return a(e,0,t)}):a}},pseudos:{not:le(function(e){var r=[],i=[],s=f(e.replace(B,"$1"));return s[k]?le(function(e,t,n,r){var i,o=s(e,null,r,[]),a=e.length;while(a--)(i=o[a])&&(e[a]=!(t[a]=i))}):function(e,t,n){return r[0]=e,s(r,null,n,i),r[0]=null,!i.pop()}}),has:le(function(t){return function(e){return 0<se(t,e).length}}),contains:le(function(t){return t=t.replace(te,ne),function(e){return-1<(e.textContent||o(e)).indexOf(t)}}),lang:le(function(n){return V.test(n||"")||se.error("unsupported lang: "+n),n=n.replace(te,ne).toLowerCase(),function(e){var t;do{if(t=E?e.lang:e.getAttribute("xml:lang")||e.getAttribute("lang"))return(t=t.toLowerCase())===n||0===t.indexOf(n+"-")}while((e=e.parentNode)&&1===e.nodeType);return!1}}),target:function(e){var t=n.location&&n.location.hash;return t&&t.slice(1)===e.id},root:function(e){return e===a},focus:function(e){return e===C.activeElement&&(!C.hasFocus||C.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:ge(!1),disabled:ge(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!b.pseudos.empty(e)},header:function(e){return J.test(e.nodeName)},input:function(e){return Q.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:ve(function(){return[0]}),last:ve(function(e,t){return[t-1]}),eq:ve(function(e,t,n){return[n<0?n+t:n]}),even:ve(function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e}),odd:ve(function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e}),lt:ve(function(e,t,n){for(var r=n<0?n+t:t<n?t:n;0<=--r;)e.push(r);return e}),gt:ve(function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e})}}).pseudos.nth=b.pseudos.eq,{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})b.pseudos[e]=de(e);for(e in{submit:!0,reset:!0})b.pseudos[e]=he(e);function me(){}function xe(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function be(s,e,t){var u=e.dir,l=e.next,c=l||u,f=t&&"parentNode"===c,p=r++;return e.first?function(e,t,n){while(e=e[u])if(1===e.nodeType||f)return s(e,t,n);return!1}:function(e,t,n){var r,i,o,a=[S,p];if(n){while(e=e[u])if((1===e.nodeType||f)&&s(e,t,n))return!0}else while(e=e[u])if(1===e.nodeType||f)if(i=(o=e[k]||(e[k]={}))[e.uniqueID]||(o[e.uniqueID]={}),l&&l===e.nodeName.toLowerCase())e=e[u]||e;else{if((r=i[c])&&r[0]===S&&r[1]===p)return a[2]=r[2];if((i[c]=a)[2]=s(e,t,n))return!0}return!1}}function we(i){return 1<i.length?function(e,t,n){var r=i.length;while(r--)if(!i[r](e,t,n))return!1;return!0}:i[0]}function Te(e,t,n,r,i){for(var o,a=[],s=0,u=e.length,l=null!=t;s<u;s++)(o=e[s])&&(n&&!n(o,r,i)||(a.push(o),l&&t.push(s)));return a}function Ce(d,h,g,v,y,e){return v&&!v[k]&&(v=Ce(v)),y&&!y[k]&&(y=Ce(y,e)),le(function(e,t,n,r){var i,o,a,s=[],u=[],l=t.length,c=e||function(e,t,n){for(var r=0,i=t.length;r<i;r++)se(e,t[r],n);return n}(h||"*",n.nodeType?[n]:n,[]),f=!d||!e&&h?c:Te(c,s,d,n,r),p=g?y||(e?d:l||v)?[]:t:f;if(g&&g(f,p,n,r),v){i=Te(p,u),v(i,[],n,r),o=i.length;while(o--)(a=i[o])&&(p[u[o]]=!(f[u[o]]=a))}if(e){if(y||d){if(y){i=[],o=p.length;while(o--)(a=p[o])&&i.push(f[o]=a);y(null,p=[],i,r)}o=p.length;while(o--)(a=p[o])&&-1<(i=y?P(e,a):s[o])&&(e[i]=!(t[i]=a))}}else p=Te(p===t?p.splice(l,p.length):p),y?y(null,t,p,r):H.apply(t,p)})}function Ee(e){for(var i,t,n,r=e.length,o=b.relative[e[0].type],a=o||b.relative[" "],s=o?1:0,u=be(function(e){return e===i},a,!0),l=be(function(e){return-1<P(i,e)},a,!0),c=[function(e,t,n){var r=!o&&(n||t!==w)||((i=t).nodeType?u(e,t,n):l(e,t,n));return i=null,r}];s<r;s++)if(t=b.relative[e[s].type])c=[be(we(c),t)];else{if((t=b.filter[e[s].type].apply(null,e[s].matches))[k]){for(n=++s;n<r;n++)if(b.relative[e[n].type])break;return Ce(1<s&&we(c),1<s&&xe(e.slice(0,s-1).concat({value:" "===e[s-2].type?"*":""})).replace(B,"$1"),t,s<n&&Ee(e.slice(s,n)),n<r&&Ee(e=e.slice(n)),n<r&&xe(e))}c.push(t)}return we(c)}return me.prototype=b.filters=b.pseudos,b.setFilters=new me,h=se.tokenize=function(e,t){var n,r,i,o,a,s,u,l=x[e+" "];if(l)return t?0:l.slice(0);a=e,s=[],u=b.preFilter;while(a){for(o in n&&!(r=_.exec(a))||(r&&(a=a.slice(r[0].length)||a),s.push(i=[])),n=!1,(r=z.exec(a))&&(n=r.shift(),i.push({value:n,type:r[0].replace(B," ")}),a=a.slice(n.length)),b.filter)!(r=G[o].exec(a))||u[o]&&!(r=u[o](r))||(n=r.shift(),i.push({value:n,type:o,matches:r}),a=a.slice(n.length));if(!n)break}return t?a.length:a?se.error(e):x(e,s).slice(0)},f=se.compile=function(e,t){var n,v,y,m,x,r,i=[],o=[],a=N[e+" "];if(!a){t||(t=h(e)),n=t.length;while(n--)(a=Ee(t[n]))[k]?i.push(a):o.push(a);(a=N(e,(v=o,m=0<(y=i).length,x=0<v.length,r=function(e,t,n,r,i){var o,a,s,u=0,l="0",c=e&&[],f=[],p=w,d=e||x&&b.find.TAG("*",i),h=S+=null==p?1:Math.random()||.1,g=d.length;for(i&&(w=t===C||t||i);l!==g&&null!=(o=d[l]);l++){if(x&&o){a=0,t||o.ownerDocument===C||(T(o),n=!E);while(s=v[a++])if(s(o,t||C,n)){r.push(o);break}i&&(S=h)}m&&((o=!s&&o)&&u--,e&&c.push(o))}if(u+=l,m&&l!==u){a=0;while(s=y[a++])s(c,f,t,n);if(e){if(0<u)while(l--)c[l]||f[l]||(f[l]=q.call(r));f=Te(f)}H.apply(r,f),i&&!e&&0<f.length&&1<u+y.length&&se.uniqueSort(r)}return i&&(S=h,w=p),c},m?le(r):r))).selector=e}return a},g=se.select=function(e,t,n,r){var i,o,a,s,u,l="function"==typeof e&&e,c=!r&&h(e=l.selector||e);if(n=n||[],1===c.length){if(2<(o=c[0]=c[0].slice(0)).length&&"ID"===(a=o[0]).type&&9===t.nodeType&&E&&b.relative[o[1].type]){if(!(t=(b.find.ID(a.matches[0].replace(te,ne),t)||[])[0]))return n;l&&(t=t.parentNode),e=e.slice(o.shift().value.length)}i=G.needsContext.test(e)?0:o.length;while(i--){if(a=o[i],b.relative[s=a.type])break;if((u=b.find[s])&&(r=u(a.matches[0].replace(te,ne),ee.test(o[0].type)&&ye(t.parentNode)||t))){if(o.splice(i,1),!(e=r.length&&xe(o)))return H.apply(n,r),n;break}}}return(l||f(e,c))(r,t,!E,n,!t||ee.test(e)&&ye(t.parentNode)||t),n},d.sortStable=k.split("").sort(D).join("")===k,d.detectDuplicates=!!l,T(),d.sortDetached=ce(function(e){return 1&e.compareDocumentPosition(C.createElement("fieldset"))}),ce(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||fe("type|href|height|width",function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)}),d.attributes&&ce(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||fe("value",function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue}),ce(function(e){return null==e.getAttribute("disabled")})||fe(R,function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null}),se}(C);k.find=h,k.expr=h.selectors,k.expr[":"]=k.expr.pseudos,k.uniqueSort=k.unique=h.uniqueSort,k.text=h.getText,k.isXMLDoc=h.isXML,k.contains=h.contains,k.escapeSelector=h.escape;var T=function(e,t,n){var r=[],i=void 0!==n;while((e=e[t])&&9!==e.nodeType)if(1===e.nodeType){if(i&&k(e).is(n))break;r.push(e)}return r},S=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},N=k.expr.match.needsContext;function A(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var D=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function j(e,n,r){return m(n)?k.grep(e,function(e,t){return!!n.call(e,t,e)!==r}):n.nodeType?k.grep(e,function(e){return e===n!==r}):"string"!=typeof n?k.grep(e,function(e){return-1<i.call(n,e)!==r}):k.filter(n,e,r)}k.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?k.find.matchesSelector(r,e)?[r]:[]:k.find.matches(e,k.grep(t,function(e){return 1===e.nodeType}))},k.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(k(e).filter(function(){for(t=0;t<r;t++)if(k.contains(i[t],this))return!0}));for(n=this.pushStack([]),t=0;t<r;t++)k.find(e,i[t],n);return 1<r?k.uniqueSort(n):n},filter:function(e){return this.pushStack(j(this,e||[],!1))},not:function(e){return this.pushStack(j(this,e||[],!0))},is:function(e){return!!j(this,"string"==typeof e&&N.test(e)?k(e):e||[],!1).length}});var q,L=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(k.fn.init=function(e,t,n){var r,i;if(!e)return this;if(n=n||q,"string"==typeof e){if(!(r="<"===e[0]&&">"===e[e.length-1]&&3<=e.length?[null,e,null]:L.exec(e))||!r[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(r[1]){if(t=t instanceof k?t[0]:t,k.merge(this,k.parseHTML(r[1],t&&t.nodeType?t.ownerDocument||t:E,!0)),D.test(r[1])&&k.isPlainObject(t))for(r in t)m(this[r])?this[r](t[r]):this.attr(r,t[r]);return this}return(i=E.getElementById(r[2]))&&(this[0]=i,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):m(e)?void 0!==n.ready?n.ready(e):e(k):k.makeArray(e,this)}).prototype=k.fn,q=k(E);var H=/^(?:parents|prev(?:Until|All))/,O={children:!0,contents:!0,next:!0,prev:!0};function P(e,t){while((e=e[t])&&1!==e.nodeType);return e}k.fn.extend({has:function(e){var t=k(e,this),n=t.length;return this.filter(function(){for(var e=0;e<n;e++)if(k.contains(this,t[e]))return!0})},closest:function(e,t){var n,r=0,i=this.length,o=[],a="string"!=typeof e&&k(e);if(!N.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(a?-1<a.index(n):1===n.nodeType&&k.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(1<o.length?k.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?i.call(k(e),this[0]):i.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(k.uniqueSort(k.merge(this.get(),k(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}}),k.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return T(e,"parentNode")},parentsUntil:function(e,t,n){return T(e,"parentNode",n)},next:function(e){return P(e,"nextSibling")},prev:function(e){return P(e,"previousSibling")},nextAll:function(e){return T(e,"nextSibling")},prevAll:function(e){return T(e,"previousSibling")},nextUntil:function(e,t,n){return T(e,"nextSibling",n)},prevUntil:function(e,t,n){return T(e,"previousSibling",n)},siblings:function(e){return S((e.parentNode||{}).firstChild,e)},children:function(e){return S(e.firstChild)},contents:function(e){return"undefined"!=typeof e.contentDocument?e.contentDocument:(A(e,"template")&&(e=e.content||e),k.merge([],e.childNodes))}},function(r,i){k.fn[r]=function(e,t){var n=k.map(this,i,e);return"Until"!==r.slice(-5)&&(t=e),t&&"string"==typeof t&&(n=k.filter(t,n)),1<this.length&&(O[r]||k.uniqueSort(n),H.test(r)&&n.reverse()),this.pushStack(n)}});var R=/[^\x20\t\r\n\f]+/g;function M(e){return e}function I(e){throw e}function W(e,t,n,r){var i;try{e&&m(i=e.promise)?i.call(e).done(t).fail(n):e&&m(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}k.Callbacks=function(r){var e,n;r="string"==typeof r?(e=r,n={},k.each(e.match(R)||[],function(e,t){n[t]=!0}),n):k.extend({},r);var i,t,o,a,s=[],u=[],l=-1,c=function(){for(a=a||r.once,o=i=!0;u.length;l=-1){t=u.shift();while(++l<s.length)!1===s[l].apply(t[0],t[1])&&r.stopOnFalse&&(l=s.length,t=!1)}r.memory||(t=!1),i=!1,a&&(s=t?[]:"")},f={add:function(){return s&&(t&&!i&&(l=s.length-1,u.push(t)),function n(e){k.each(e,function(e,t){m(t)?r.unique&&f.has(t)||s.push(t):t&&t.length&&"string"!==w(t)&&n(t)})}(arguments),t&&!i&&c()),this},remove:function(){return k.each(arguments,function(e,t){var n;while(-1<(n=k.inArray(t,s,n)))s.splice(n,1),n<=l&&l--}),this},has:function(e){return e?-1<k.inArray(e,s):0<s.length},empty:function(){return s&&(s=[]),this},disable:function(){return a=u=[],s=t="",this},disabled:function(){return!s},lock:function(){return a=u=[],t||i||(s=t=""),this},locked:function(){return!!a},fireWith:function(e,t){return a||(t=[e,(t=t||[]).slice?t.slice():t],u.push(t),i||c()),this},fire:function(){return f.fireWith(this,arguments),this},fired:function(){return!!o}};return f},k.extend({Deferred:function(e){var o=[["notify","progress",k.Callbacks("memory"),k.Callbacks("memory"),2],["resolve","done",k.Callbacks("once memory"),k.Callbacks("once memory"),0,"resolved"],["reject","fail",k.Callbacks("once memory"),k.Callbacks("once memory"),1,"rejected"]],i="pending",a={state:function(){return i},always:function(){return s.done(arguments).fail(arguments),this},"catch":function(e){return a.then(null,e)},pipe:function(){var i=arguments;return k.Deferred(function(r){k.each(o,function(e,t){var n=m(i[t[4]])&&i[t[4]];s[t[1]](function(){var e=n&&n.apply(this,arguments);e&&m(e.promise)?e.promise().progress(r.notify).done(r.resolve).fail(r.reject):r[t[0]+"With"](this,n?[e]:arguments)})}),i=null}).promise()},then:function(t,n,r){var u=0;function l(i,o,a,s){return function(){var n=this,r=arguments,e=function(){var e,t;if(!(i<u)){if((e=a.apply(n,r))===o.promise())throw new TypeError("Thenable self-resolution");t=e&&("object"==typeof e||"function"==typeof e)&&e.then,m(t)?s?t.call(e,l(u,o,M,s),l(u,o,I,s)):(u++,t.call(e,l(u,o,M,s),l(u,o,I,s),l(u,o,M,o.notifyWith))):(a!==M&&(n=void 0,r=[e]),(s||o.resolveWith)(n,r))}},t=s?e:function(){try{e()}catch(e){k.Deferred.exceptionHook&&k.Deferred.exceptionHook(e,t.stackTrace),u<=i+1&&(a!==I&&(n=void 0,r=[e]),o.rejectWith(n,r))}};i?t():(k.Deferred.getStackHook&&(t.stackTrace=k.Deferred.getStackHook()),C.setTimeout(t))}}return k.Deferred(function(e){o[0][3].add(l(0,e,m(r)?r:M,e.notifyWith)),o[1][3].add(l(0,e,m(t)?t:M)),o[2][3].add(l(0,e,m(n)?n:I))}).promise()},promise:function(e){return null!=e?k.extend(e,a):a}},s={};return k.each(o,function(e,t){var n=t[2],r=t[5];a[t[1]]=n.add,r&&n.add(function(){i=r},o[3-e][2].disable,o[3-e][3].disable,o[0][2].lock,o[0][3].lock),n.add(t[3].fire),s[t[0]]=function(){return s[t[0]+"With"](this===s?void 0:this,arguments),this},s[t[0]+"With"]=n.fireWith}),a.promise(s),e&&e.call(s,s),s},when:function(e){var n=arguments.length,t=n,r=Array(t),i=s.call(arguments),o=k.Deferred(),a=function(t){return function(e){r[t]=this,i[t]=1<arguments.length?s.call(arguments):e,--n||o.resolveWith(r,i)}};if(n<=1&&(W(e,o.done(a(t)).resolve,o.reject,!n),"pending"===o.state()||m(i[t]&&i[t].then)))return o.then();while(t--)W(i[t],a(t),o.reject);return o.promise()}});var $=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;k.Deferred.exceptionHook=function(e,t){C.console&&C.console.warn&&e&&$.test(e.name)&&C.console.warn("jQuery.Deferred exception: "+e.message,e.stack,t)},k.readyException=function(e){C.setTimeout(function(){throw e})};var F=k.Deferred();function B(){E.removeEventListener("DOMContentLoaded",B),C.removeEventListener("load",B),k.ready()}k.fn.ready=function(e){return F.then(e)["catch"](function(e){k.readyException(e)}),this},k.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--k.readyWait:k.isReady)||(k.isReady=!0)!==e&&0<--k.readyWait||F.resolveWith(E,[k])}}),k.ready.then=F.then,"complete"===E.readyState||"loading"!==E.readyState&&!E.documentElement.doScroll?C.setTimeout(k.ready):(E.addEventListener("DOMContentLoaded",B),C.addEventListener("load",B));var _=function(e,t,n,r,i,o,a){var s=0,u=e.length,l=null==n;if("object"===w(n))for(s in i=!0,n)_(e,t,s,n[s],!0,o,a);else if(void 0!==r&&(i=!0,m(r)||(a=!0),l&&(a?(t.call(e,r),t=null):(l=t,t=function(e,t,n){return l.call(k(e),n)})),t))for(;s<u;s++)t(e[s],n,a?r:r.call(e[s],s,t(e[s],n)));return i?e:l?t.call(e):u?t(e[0],n):o},z=/^-ms-/,U=/-([a-z])/g;function X(e,t){return t.toUpperCase()}function V(e){return e.replace(z,"ms-").replace(U,X)}var G=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function Y(){this.expando=k.expando+Y.uid++}Y.uid=1,Y.prototype={cache:function(e){var t=e[this.expando];return t||(t={},G(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[V(t)]=n;else for(r in t)i[V(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][V(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(V):(t=V(t))in r?[t]:t.match(R)||[]).length;while(n--)delete r[t[n]]}(void 0===t||k.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!k.isEmptyObject(t)}};var Q=new Y,J=new Y,K=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,Z=/[A-Z]/g;function ee(e,t,n){var r,i;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(Z,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n="true"===(i=n)||"false"!==i&&("null"===i?null:i===+i+""?+i:K.test(i)?JSON.parse(i):i)}catch(e){}J.set(e,t,n)}else n=void 0;return n}k.extend({hasData:function(e){return J.hasData(e)||Q.hasData(e)},data:function(e,t,n){return J.access(e,t,n)},removeData:function(e,t){J.remove(e,t)},_data:function(e,t,n){return Q.access(e,t,n)},_removeData:function(e,t){Q.remove(e,t)}}),k.fn.extend({data:function(n,e){var t,r,i,o=this[0],a=o&&o.attributes;if(void 0===n){if(this.length&&(i=J.get(o),1===o.nodeType&&!Q.get(o,"hasDataAttrs"))){t=a.length;while(t--)a[t]&&0===(r=a[t].name).indexOf("data-")&&(r=V(r.slice(5)),ee(o,r,i[r]));Q.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof n?this.each(function(){J.set(this,n)}):_(this,function(e){var t;if(o&&void 0===e)return void 0!==(t=J.get(o,n))?t:void 0!==(t=ee(o,n))?t:void 0;this.each(function(){J.set(this,n,e)})},null,e,1<arguments.length,null,!0)},removeData:function(e){return this.each(function(){J.remove(this,e)})}}),k.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=Q.get(e,t),n&&(!r||Array.isArray(n)?r=Q.access(e,t,k.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=k.queue(e,t),r=n.length,i=n.shift(),o=k._queueHooks(e,t);"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,function(){k.dequeue(e,t)},o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return Q.get(e,n)||Q.access(e,n,{empty:k.Callbacks("once memory").add(function(){Q.remove(e,[t+"queue",n])})})}}),k.fn.extend({queue:function(t,n){var e=2;return"string"!=typeof t&&(n=t,t="fx",e--),arguments.length<e?k.queue(this[0],t):void 0===n?this:this.each(function(){var e=k.queue(this,t,n);k._queueHooks(this,t),"fx"===t&&"inprogress"!==e[0]&&k.dequeue(this,t)})},dequeue:function(e){return this.each(function(){k.dequeue(this,e)})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=k.Deferred(),o=this,a=this.length,s=function(){--r||i.resolveWith(o,[o])};"string"!=typeof e&&(t=e,e=void 0),e=e||"fx";while(a--)(n=Q.get(o[a],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(s));return s(),i.promise(t)}});var te=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,ne=new RegExp("^(?:([+-])=|)("+te+")([a-z%]*)$","i"),re=["Top","Right","Bottom","Left"],ie=E.documentElement,oe=function(e){return k.contains(e.ownerDocument,e)},ae={composed:!0};ie.getRootNode&&(oe=function(e){return k.contains(e.ownerDocument,e)||e.getRootNode(ae)===e.ownerDocument});var se=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&oe(e)&&"none"===k.css(e,"display")},ue=function(e,t,n,r){var i,o,a={};for(o in t)a[o]=e.style[o],e.style[o]=t[o];for(o in i=n.apply(e,r||[]),t)e.style[o]=a[o];return i};function le(e,t,n,r){var i,o,a=20,s=r?function(){return r.cur()}:function(){return k.css(e,t,"")},u=s(),l=n&&n[3]||(k.cssNumber[t]?"":"px"),c=e.nodeType&&(k.cssNumber[t]||"px"!==l&&+u)&&ne.exec(k.css(e,t));if(c&&c[3]!==l){u/=2,l=l||c[3],c=+u||1;while(a--)k.style(e,t,c+l),(1-o)*(1-(o=s()/u||.5))<=0&&(a=0),c/=o;c*=2,k.style(e,t,c+l),n=n||[]}return n&&(c=+c||+u||0,i=n[1]?c+(n[1]+1)*n[2]:+n[2],r&&(r.unit=l,r.start=c,r.end=i)),i}var ce={};function fe(e,t){for(var n,r,i,o,a,s,u,l=[],c=0,f=e.length;c<f;c++)(r=e[c]).style&&(n=r.style.display,t?("none"===n&&(l[c]=Q.get(r,"display")||null,l[c]||(r.style.display="")),""===r.style.display&&se(r)&&(l[c]=(u=a=o=void 0,a=(i=r).ownerDocument,s=i.nodeName,(u=ce[s])||(o=a.body.appendChild(a.createElement(s)),u=k.css(o,"display"),o.parentNode.removeChild(o),"none"===u&&(u="block"),ce[s]=u)))):"none"!==n&&(l[c]="none",Q.set(r,"display",n)));for(c=0;c<f;c++)null!=l[c]&&(e[c].style.display=l[c]);return e}k.fn.extend({show:function(){return fe(this,!0)},hide:function(){return fe(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){se(this)?k(this).show():k(this).hide()})}});var pe=/^(?:checkbox|radio)$/i,de=/<([a-z][^\/\0>\x20\t\r\n\f]*)/i,he=/^$|^module$|\/(?:java|ecma)script/i,ge={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};function ve(e,t){var n;return n="undefined"!=typeof e.getElementsByTagName?e.getElementsByTagName(t||"*"):"undefined"!=typeof e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&A(e,t)?k.merge([e],n):n}function ye(e,t){for(var n=0,r=e.length;n<r;n++)Q.set(e[n],"globalEval",!t||Q.get(t[n],"globalEval"))}ge.optgroup=ge.option,ge.tbody=ge.tfoot=ge.colgroup=ge.caption=ge.thead,ge.th=ge.td;var me,xe,be=/<|&#?\w+;/;function we(e,t,n,r,i){for(var o,a,s,u,l,c,f=t.createDocumentFragment(),p=[],d=0,h=e.length;d<h;d++)if((o=e[d])||0===o)if("object"===w(o))k.merge(p,o.nodeType?[o]:o);else if(be.test(o)){a=a||f.appendChild(t.createElement("div")),s=(de.exec(o)||["",""])[1].toLowerCase(),u=ge[s]||ge._default,a.innerHTML=u[1]+k.htmlPrefilter(o)+u[2],c=u[0];while(c--)a=a.lastChild;k.merge(p,a.childNodes),(a=f.firstChild).textContent=""}else p.push(t.createTextNode(o));f.textContent="",d=0;while(o=p[d++])if(r&&-1<k.inArray(o,r))i&&i.push(o);else if(l=oe(o),a=ve(f.appendChild(o),"script"),l&&ye(a),n){c=0;while(o=a[c++])he.test(o.type||"")&&n.push(o)}return f}me=E.createDocumentFragment().appendChild(E.createElement("div")),(xe=E.createElement("input")).setAttribute("type","radio"),xe.setAttribute("checked","checked"),xe.setAttribute("name","t"),me.appendChild(xe),y.checkClone=me.cloneNode(!0).cloneNode(!0).lastChild.checked,me.innerHTML="<textarea>x</textarea>",y.noCloneChecked=!!me.cloneNode(!0).lastChild.defaultValue;var Te=/^key/,Ce=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,Ee=/^([^.]*)(?:\.(.+)|)/;function ke(){return!0}function Se(){return!1}function Ne(e,t){return e===function(){try{return E.activeElement}catch(e){}}()==("focus"===t)}function Ae(e,t,n,r,i,o){var a,s;if("object"==typeof t){for(s in"string"!=typeof n&&(r=r||n,n=void 0),t)Ae(e,s,n,r,t[s],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=Se;else if(!i)return e;return 1===o&&(a=i,(i=function(e){return k().off(e),a.apply(this,arguments)}).guid=a.guid||(a.guid=k.guid++)),e.each(function(){k.event.add(this,t,i,r,n)})}function De(e,i,o){o?(Q.set(e,i,!1),k.event.add(e,i,{namespace:!1,handler:function(e){var t,n,r=Q.get(this,i);if(1&e.isTrigger&&this[i]){if(r.length)(k.event.special[i]||{}).delegateType&&e.stopPropagation();else if(r=s.call(arguments),Q.set(this,i,r),t=o(this,i),this[i](),r!==(n=Q.get(this,i))||t?Q.set(this,i,!1):n={},r!==n)return e.stopImmediatePropagation(),e.preventDefault(),n.value}else r.length&&(Q.set(this,i,{value:k.event.trigger(k.extend(r[0],k.Event.prototype),r.slice(1),this)}),e.stopImmediatePropagation())}})):void 0===Q.get(e,i)&&k.event.add(e,i,ke)}k.event={global:{},add:function(t,e,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,v=Q.get(t);if(v){n.handler&&(n=(o=n).handler,i=o.selector),i&&k.find.matchesSelector(ie,i),n.guid||(n.guid=k.guid++),(u=v.events)||(u=v.events={}),(a=v.handle)||(a=v.handle=function(e){return"undefined"!=typeof k&&k.event.triggered!==e.type?k.event.dispatch.apply(t,arguments):void 0}),l=(e=(e||"").match(R)||[""]).length;while(l--)d=g=(s=Ee.exec(e[l])||[])[1],h=(s[2]||"").split(".").sort(),d&&(f=k.event.special[d]||{},d=(i?f.delegateType:f.bindType)||d,f=k.event.special[d]||{},c=k.extend({type:d,origType:g,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&k.expr.match.needsContext.test(i),namespace:h.join(".")},o),(p=u[d])||((p=u[d]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(t,r,h,a)||t.addEventListener&&t.addEventListener(d,a)),f.add&&(f.add.call(t,c),c.handler.guid||(c.handler.guid=n.guid)),i?p.splice(p.delegateCount++,0,c):p.push(c),k.event.global[d]=!0)}},remove:function(e,t,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,v=Q.hasData(e)&&Q.get(e);if(v&&(u=v.events)){l=(t=(t||"").match(R)||[""]).length;while(l--)if(d=g=(s=Ee.exec(t[l])||[])[1],h=(s[2]||"").split(".").sort(),d){f=k.event.special[d]||{},p=u[d=(r?f.delegateType:f.bindType)||d]||[],s=s[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),a=o=p.length;while(o--)c=p[o],!i&&g!==c.origType||n&&n.guid!==c.guid||s&&!s.test(c.namespace)||r&&r!==c.selector&&("**"!==r||!c.selector)||(p.splice(o,1),c.selector&&p.delegateCount--,f.remove&&f.remove.call(e,c));a&&!p.length&&(f.teardown&&!1!==f.teardown.call(e,h,v.handle)||k.removeEvent(e,d,v.handle),delete u[d])}else for(d in u)k.event.remove(e,d+t[l],n,r,!0);k.isEmptyObject(u)&&Q.remove(e,"handle events")}},dispatch:function(e){var t,n,r,i,o,a,s=k.event.fix(e),u=new Array(arguments.length),l=(Q.get(this,"events")||{})[s.type]||[],c=k.event.special[s.type]||{};for(u[0]=s,t=1;t<arguments.length;t++)u[t]=arguments[t];if(s.delegateTarget=this,!c.preDispatch||!1!==c.preDispatch.call(this,s)){a=k.event.handlers.call(this,s,l),t=0;while((i=a[t++])&&!s.isPropagationStopped()){s.currentTarget=i.elem,n=0;while((o=i.handlers[n++])&&!s.isImmediatePropagationStopped())s.rnamespace&&!1!==o.namespace&&!s.rnamespace.test(o.namespace)||(s.handleObj=o,s.data=o.data,void 0!==(r=((k.event.special[o.origType]||{}).handle||o.handler).apply(i.elem,u))&&!1===(s.result=r)&&(s.preventDefault(),s.stopPropagation()))}return c.postDispatch&&c.postDispatch.call(this,s),s.result}},handlers:function(e,t){var n,r,i,o,a,s=[],u=t.delegateCount,l=e.target;if(u&&l.nodeType&&!("click"===e.type&&1<=e.button))for(;l!==this;l=l.parentNode||this)if(1===l.nodeType&&("click"!==e.type||!0!==l.disabled)){for(o=[],a={},n=0;n<u;n++)void 0===a[i=(r=t[n]).selector+" "]&&(a[i]=r.needsContext?-1<k(i,this).index(l):k.find(i,this,null,[l]).length),a[i]&&o.push(r);o.length&&s.push({elem:l,handlers:o})}return l=this,u<t.length&&s.push({elem:l,handlers:t.slice(u)}),s},addProp:function(t,e){Object.defineProperty(k.Event.prototype,t,{enumerable:!0,configurable:!0,get:m(e)?function(){if(this.originalEvent)return e(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[t]},set:function(e){Object.defineProperty(this,t,{enumerable:!0,configurable:!0,writable:!0,value:e})}})},fix:function(e){return e[k.expando]?e:new k.Event(e)},special:{load:{noBubble:!0},click:{setup:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&De(t,"click",ke),!1},trigger:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&De(t,"click"),!0},_default:function(e){var t=e.target;return pe.test(t.type)&&t.click&&A(t,"input")&&Q.get(t,"click")||A(t,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},k.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},k.Event=function(e,t){if(!(this instanceof k.Event))return new k.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?ke:Se,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&k.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[k.expando]=!0},k.Event.prototype={constructor:k.Event,isDefaultPrevented:Se,isPropagationStopped:Se,isImmediatePropagationStopped:Se,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=ke,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=ke,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=ke,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},k.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,"char":!0,code:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(e){var t=e.button;return null==e.which&&Te.test(e.type)?null!=e.charCode?e.charCode:e.keyCode:!e.which&&void 0!==t&&Ce.test(e.type)?1&t?1:2&t?3:4&t?2:0:e.which}},k.event.addProp),k.each({focus:"focusin",blur:"focusout"},function(e,t){k.event.special[e]={setup:function(){return De(this,e,Ne),!1},trigger:function(){return De(this,e),!0},delegateType:t}}),k.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(e,i){k.event.special[e]={delegateType:i,bindType:i,handle:function(e){var t,n=e.relatedTarget,r=e.handleObj;return n&&(n===this||k.contains(this,n))||(e.type=r.origType,t=r.handler.apply(this,arguments),e.type=i),t}}}),k.fn.extend({on:function(e,t,n,r){return Ae(this,e,t,n,r)},one:function(e,t,n,r){return Ae(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,k(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=Se),this.each(function(){k.event.remove(this,e,n,t)})}});var je=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,qe=/<script|<style|<link/i,Le=/checked\s*(?:[^=]|=\s*.checked.)/i,He=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function Oe(e,t){return A(e,"table")&&A(11!==t.nodeType?t:t.firstChild,"tr")&&k(e).children("tbody")[0]||e}function Pe(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function Re(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Me(e,t){var n,r,i,o,a,s,u,l;if(1===t.nodeType){if(Q.hasData(e)&&(o=Q.access(e),a=Q.set(t,o),l=o.events))for(i in delete a.handle,a.events={},l)for(n=0,r=l[i].length;n<r;n++)k.event.add(t,i,l[i][n]);J.hasData(e)&&(s=J.access(e),u=k.extend({},s),J.set(t,u))}}function Ie(n,r,i,o){r=g.apply([],r);var e,t,a,s,u,l,c=0,f=n.length,p=f-1,d=r[0],h=m(d);if(h||1<f&&"string"==typeof d&&!y.checkClone&&Le.test(d))return n.each(function(e){var t=n.eq(e);h&&(r[0]=d.call(this,e,t.html())),Ie(t,r,i,o)});if(f&&(t=(e=we(r,n[0].ownerDocument,!1,n,o)).firstChild,1===e.childNodes.length&&(e=t),t||o)){for(s=(a=k.map(ve(e,"script"),Pe)).length;c<f;c++)u=e,c!==p&&(u=k.clone(u,!0,!0),s&&k.merge(a,ve(u,"script"))),i.call(n[c],u,c);if(s)for(l=a[a.length-1].ownerDocument,k.map(a,Re),c=0;c<s;c++)u=a[c],he.test(u.type||"")&&!Q.access(u,"globalEval")&&k.contains(l,u)&&(u.src&&"module"!==(u.type||"").toLowerCase()?k._evalUrl&&!u.noModule&&k._evalUrl(u.src,{nonce:u.nonce||u.getAttribute("nonce")}):b(u.textContent.replace(He,""),u,l))}return n}function We(e,t,n){for(var r,i=t?k.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||k.cleanData(ve(r)),r.parentNode&&(n&&oe(r)&&ye(ve(r,"script")),r.parentNode.removeChild(r));return e}k.extend({htmlPrefilter:function(e){return e.replace(je,"<$1></$2>")},clone:function(e,t,n){var r,i,o,a,s,u,l,c=e.cloneNode(!0),f=oe(e);if(!(y.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||k.isXMLDoc(e)))for(a=ve(c),r=0,i=(o=ve(e)).length;r<i;r++)s=o[r],u=a[r],void 0,"input"===(l=u.nodeName.toLowerCase())&&pe.test(s.type)?u.checked=s.checked:"input"!==l&&"textarea"!==l||(u.defaultValue=s.defaultValue);if(t)if(n)for(o=o||ve(e),a=a||ve(c),r=0,i=o.length;r<i;r++)Me(o[r],a[r]);else Me(e,c);return 0<(a=ve(c,"script")).length&&ye(a,!f&&ve(e,"script")),c},cleanData:function(e){for(var t,n,r,i=k.event.special,o=0;void 0!==(n=e[o]);o++)if(G(n)){if(t=n[Q.expando]){if(t.events)for(r in t.events)i[r]?k.event.remove(n,r):k.removeEvent(n,r,t.handle);n[Q.expando]=void 0}n[J.expando]&&(n[J.expando]=void 0)}}}),k.fn.extend({detach:function(e){return We(this,e,!0)},remove:function(e){return We(this,e)},text:function(e){return _(this,function(e){return void 0===e?k.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)})},null,e,arguments.length)},append:function(){return Ie(this,arguments,function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||Oe(this,e).appendChild(e)})},prepend:function(){return Ie(this,arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=Oe(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return Ie(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return Ie(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(k.cleanData(ve(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map(function(){return k.clone(this,e,t)})},html:function(e){return _(this,function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!qe.test(e)&&!ge[(de.exec(e)||["",""])[1].toLowerCase()]){e=k.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(k.cleanData(ve(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var n=[];return Ie(this,arguments,function(e){var t=this.parentNode;k.inArray(this,n)<0&&(k.cleanData(ve(this)),t&&t.replaceChild(e,this))},n)}}),k.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,a){k.fn[e]=function(e){for(var t,n=[],r=k(e),i=r.length-1,o=0;o<=i;o++)t=o===i?this:this.clone(!0),k(r[o])[a](t),u.apply(n,t.get());return this.pushStack(n)}});var $e=new RegExp("^("+te+")(?!px)[a-z%]+$","i"),Fe=function(e){var t=e.ownerDocument.defaultView;return t&&t.opener||(t=C),t.getComputedStyle(e)},Be=new RegExp(re.join("|"),"i");function _e(e,t,n){var r,i,o,a,s=e.style;return(n=n||Fe(e))&&(""!==(a=n.getPropertyValue(t)||n[t])||oe(e)||(a=k.style(e,t)),!y.pixelBoxStyles()&&$e.test(a)&&Be.test(t)&&(r=s.width,i=s.minWidth,o=s.maxWidth,s.minWidth=s.maxWidth=s.width=a,a=n.width,s.width=r,s.minWidth=i,s.maxWidth=o)),void 0!==a?a+"":a}function ze(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}!function(){function e(){if(u){s.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",u.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",ie.appendChild(s).appendChild(u);var e=C.getComputedStyle(u);n="1%"!==e.top,a=12===t(e.marginLeft),u.style.right="60%",o=36===t(e.right),r=36===t(e.width),u.style.position="absolute",i=12===t(u.offsetWidth/3),ie.removeChild(s),u=null}}function t(e){return Math.round(parseFloat(e))}var n,r,i,o,a,s=E.createElement("div"),u=E.createElement("div");u.style&&(u.style.backgroundClip="content-box",u.cloneNode(!0).style.backgroundClip="",y.clearCloneStyle="content-box"===u.style.backgroundClip,k.extend(y,{boxSizingReliable:function(){return e(),r},pixelBoxStyles:function(){return e(),o},pixelPosition:function(){return e(),n},reliableMarginLeft:function(){return e(),a},scrollboxSize:function(){return e(),i}}))}();var Ue=["Webkit","Moz","ms"],Xe=E.createElement("div").style,Ve={};function Ge(e){var t=k.cssProps[e]||Ve[e];return t||(e in Xe?e:Ve[e]=function(e){var t=e[0].toUpperCase()+e.slice(1),n=Ue.length;while(n--)if((e=Ue[n]+t)in Xe)return e}(e)||e)}var Ye=/^(none|table(?!-c[ea]).+)/,Qe=/^--/,Je={position:"absolute",visibility:"hidden",display:"block"},Ke={letterSpacing:"0",fontWeight:"400"};function Ze(e,t,n){var r=ne.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function et(e,t,n,r,i,o){var a="width"===t?1:0,s=0,u=0;if(n===(r?"border":"content"))return 0;for(;a<4;a+=2)"margin"===n&&(u+=k.css(e,n+re[a],!0,i)),r?("content"===n&&(u-=k.css(e,"padding"+re[a],!0,i)),"margin"!==n&&(u-=k.css(e,"border"+re[a]+"Width",!0,i))):(u+=k.css(e,"padding"+re[a],!0,i),"padding"!==n?u+=k.css(e,"border"+re[a]+"Width",!0,i):s+=k.css(e,"border"+re[a]+"Width",!0,i));return!r&&0<=o&&(u+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-u-s-.5))||0),u}function tt(e,t,n){var r=Fe(e),i=(!y.boxSizingReliable()||n)&&"border-box"===k.css(e,"boxSizing",!1,r),o=i,a=_e(e,t,r),s="offset"+t[0].toUpperCase()+t.slice(1);if($e.test(a)){if(!n)return a;a="auto"}return(!y.boxSizingReliable()&&i||"auto"===a||!parseFloat(a)&&"inline"===k.css(e,"display",!1,r))&&e.getClientRects().length&&(i="border-box"===k.css(e,"boxSizing",!1,r),(o=s in e)&&(a=e[s])),(a=parseFloat(a)||0)+et(e,t,n||(i?"border":"content"),o,r,a)+"px"}function nt(e,t,n,r,i){return new nt.prototype.init(e,t,n,r,i)}k.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=_e(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,gridArea:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnStart:!0,gridRow:!0,gridRowEnd:!0,gridRowStart:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,a,s=V(t),u=Qe.test(t),l=e.style;if(u||(t=Ge(s)),a=k.cssHooks[t]||k.cssHooks[s],void 0===n)return a&&"get"in a&&void 0!==(i=a.get(e,!1,r))?i:l[t];"string"===(o=typeof n)&&(i=ne.exec(n))&&i[1]&&(n=le(e,t,i),o="number"),null!=n&&n==n&&("number"!==o||u||(n+=i&&i[3]||(k.cssNumber[s]?"":"px")),y.clearCloneStyle||""!==n||0!==t.indexOf("background")||(l[t]="inherit"),a&&"set"in a&&void 0===(n=a.set(e,n,r))||(u?l.setProperty(t,n):l[t]=n))}},css:function(e,t,n,r){var i,o,a,s=V(t);return Qe.test(t)||(t=Ge(s)),(a=k.cssHooks[t]||k.cssHooks[s])&&"get"in a&&(i=a.get(e,!0,n)),void 0===i&&(i=_e(e,t,r)),"normal"===i&&t in Ke&&(i=Ke[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),k.each(["height","width"],function(e,u){k.cssHooks[u]={get:function(e,t,n){if(t)return!Ye.test(k.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?tt(e,u,n):ue(e,Je,function(){return tt(e,u,n)})},set:function(e,t,n){var r,i=Fe(e),o=!y.scrollboxSize()&&"absolute"===i.position,a=(o||n)&&"border-box"===k.css(e,"boxSizing",!1,i),s=n?et(e,u,n,a,i):0;return a&&o&&(s-=Math.ceil(e["offset"+u[0].toUpperCase()+u.slice(1)]-parseFloat(i[u])-et(e,u,"border",!1,i)-.5)),s&&(r=ne.exec(t))&&"px"!==(r[3]||"px")&&(e.style[u]=t,t=k.css(e,u)),Ze(0,t,s)}}}),k.cssHooks.marginLeft=ze(y.reliableMarginLeft,function(e,t){if(t)return(parseFloat(_e(e,"marginLeft"))||e.getBoundingClientRect().left-ue(e,{marginLeft:0},function(){return e.getBoundingClientRect().left}))+"px"}),k.each({margin:"",padding:"",border:"Width"},function(i,o){k.cssHooks[i+o]={expand:function(e){for(var t=0,n={},r="string"==typeof e?e.split(" "):[e];t<4;t++)n[i+re[t]+o]=r[t]||r[t-2]||r[0];return n}},"margin"!==i&&(k.cssHooks[i+o].set=Ze)}),k.fn.extend({css:function(e,t){return _(this,function(e,t,n){var r,i,o={},a=0;if(Array.isArray(t)){for(r=Fe(e),i=t.length;a<i;a++)o[t[a]]=k.css(e,t[a],!1,r);return o}return void 0!==n?k.style(e,t,n):k.css(e,t)},e,t,1<arguments.length)}}),((k.Tween=nt).prototype={constructor:nt,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||k.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(k.cssNumber[n]?"":"px")},cur:function(){var e=nt.propHooks[this.prop];return e&&e.get?e.get(this):nt.propHooks._default.get(this)},run:function(e){var t,n=nt.propHooks[this.prop];return this.options.duration?this.pos=t=k.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):nt.propHooks._default.set(this),this}}).init.prototype=nt.prototype,(nt.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=k.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){k.fx.step[e.prop]?k.fx.step[e.prop](e):1!==e.elem.nodeType||!k.cssHooks[e.prop]&&null==e.elem.style[Ge(e.prop)]?e.elem[e.prop]=e.now:k.style(e.elem,e.prop,e.now+e.unit)}}}).scrollTop=nt.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},k.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},k.fx=nt.prototype.init,k.fx.step={};var rt,it,ot,at,st=/^(?:toggle|show|hide)$/,ut=/queueHooks$/;function lt(){it&&(!1===E.hidden&&C.requestAnimationFrame?C.requestAnimationFrame(lt):C.setTimeout(lt,k.fx.interval),k.fx.tick())}function ct(){return C.setTimeout(function(){rt=void 0}),rt=Date.now()}function ft(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=re[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function pt(e,t,n){for(var r,i=(dt.tweeners[t]||[]).concat(dt.tweeners["*"]),o=0,a=i.length;o<a;o++)if(r=i[o].call(n,t,e))return r}function dt(o,e,t){var n,a,r=0,i=dt.prefilters.length,s=k.Deferred().always(function(){delete u.elem}),u=function(){if(a)return!1;for(var e=rt||ct(),t=Math.max(0,l.startTime+l.duration-e),n=1-(t/l.duration||0),r=0,i=l.tweens.length;r<i;r++)l.tweens[r].run(n);return s.notifyWith(o,[l,n,t]),n<1&&i?t:(i||s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l]),!1)},l=s.promise({elem:o,props:k.extend({},e),opts:k.extend(!0,{specialEasing:{},easing:k.easing._default},t),originalProperties:e,originalOptions:t,startTime:rt||ct(),duration:t.duration,tweens:[],createTween:function(e,t){var n=k.Tween(o,l.opts,e,t,l.opts.specialEasing[e]||l.opts.easing);return l.tweens.push(n),n},stop:function(e){var t=0,n=e?l.tweens.length:0;if(a)return this;for(a=!0;t<n;t++)l.tweens[t].run(1);return e?(s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l,e])):s.rejectWith(o,[l,e]),this}}),c=l.props;for(!function(e,t){var n,r,i,o,a;for(n in e)if(i=t[r=V(n)],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(a=k.cssHooks[r])&&"expand"in a)for(n in o=a.expand(o),delete e[r],o)n in e||(e[n]=o[n],t[n]=i);else t[r]=i}(c,l.opts.specialEasing);r<i;r++)if(n=dt.prefilters[r].call(l,o,c,l.opts))return m(n.stop)&&(k._queueHooks(l.elem,l.opts.queue).stop=n.stop.bind(n)),n;return k.map(c,pt,l),m(l.opts.start)&&l.opts.start.call(o,l),l.progress(l.opts.progress).done(l.opts.done,l.opts.complete).fail(l.opts.fail).always(l.opts.always),k.fx.timer(k.extend(u,{elem:o,anim:l,queue:l.opts.queue})),l}k.Animation=k.extend(dt,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return le(n.elem,e,ne.exec(t),n),n}]},tweener:function(e,t){m(e)?(t=e,e=["*"]):e=e.match(R);for(var n,r=0,i=e.length;r<i;r++)n=e[r],dt.tweeners[n]=dt.tweeners[n]||[],dt.tweeners[n].unshift(t)},prefilters:[function(e,t,n){var r,i,o,a,s,u,l,c,f="width"in t||"height"in t,p=this,d={},h=e.style,g=e.nodeType&&se(e),v=Q.get(e,"fxshow");for(r in n.queue||(null==(a=k._queueHooks(e,"fx")).unqueued&&(a.unqueued=0,s=a.empty.fire,a.empty.fire=function(){a.unqueued||s()}),a.unqueued++,p.always(function(){p.always(function(){a.unqueued--,k.queue(e,"fx").length||a.empty.fire()})})),t)if(i=t[r],st.test(i)){if(delete t[r],o=o||"toggle"===i,i===(g?"hide":"show")){if("show"!==i||!v||void 0===v[r])continue;g=!0}d[r]=v&&v[r]||k.style(e,r)}if((u=!k.isEmptyObject(t))||!k.isEmptyObject(d))for(r in f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(l=v&&v.display)&&(l=Q.get(e,"display")),"none"===(c=k.css(e,"display"))&&(l?c=l:(fe([e],!0),l=e.style.display||l,c=k.css(e,"display"),fe([e]))),("inline"===c||"inline-block"===c&&null!=l)&&"none"===k.css(e,"float")&&(u||(p.done(function(){h.display=l}),null==l&&(c=h.display,l="none"===c?"":c)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",p.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),u=!1,d)u||(v?"hidden"in v&&(g=v.hidden):v=Q.access(e,"fxshow",{display:l}),o&&(v.hidden=!g),g&&fe([e],!0),p.done(function(){for(r in g||fe([e]),Q.remove(e,"fxshow"),d)k.style(e,r,d[r])})),u=pt(g?v[r]:0,r,p),r in v||(v[r]=u.start,g&&(u.end=u.start,u.start=0))}],prefilter:function(e,t){t?dt.prefilters.unshift(e):dt.prefilters.push(e)}}),k.speed=function(e,t,n){var r=e&&"object"==typeof e?k.extend({},e):{complete:n||!n&&t||m(e)&&e,duration:e,easing:n&&t||t&&!m(t)&&t};return k.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in k.fx.speeds?r.duration=k.fx.speeds[r.duration]:r.duration=k.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){m(r.old)&&r.old.call(this),r.queue&&k.dequeue(this,r.queue)},r},k.fn.extend({fadeTo:function(e,t,n,r){return this.filter(se).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(t,e,n,r){var i=k.isEmptyObject(t),o=k.speed(e,n,r),a=function(){var e=dt(this,k.extend({},t),o);(i||Q.get(this,"finish"))&&e.stop(!0)};return a.finish=a,i||!1===o.queue?this.each(a):this.queue(o.queue,a)},stop:function(i,e,o){var a=function(e){var t=e.stop;delete e.stop,t(o)};return"string"!=typeof i&&(o=e,e=i,i=void 0),e&&!1!==i&&this.queue(i||"fx",[]),this.each(function(){var e=!0,t=null!=i&&i+"queueHooks",n=k.timers,r=Q.get(this);if(t)r[t]&&r[t].stop&&a(r[t]);else for(t in r)r[t]&&r[t].stop&&ut.test(t)&&a(r[t]);for(t=n.length;t--;)n[t].elem!==this||null!=i&&n[t].queue!==i||(n[t].anim.stop(o),e=!1,n.splice(t,1));!e&&o||k.dequeue(this,i)})},finish:function(a){return!1!==a&&(a=a||"fx"),this.each(function(){var e,t=Q.get(this),n=t[a+"queue"],r=t[a+"queueHooks"],i=k.timers,o=n?n.length:0;for(t.finish=!0,k.queue(this,a,[]),r&&r.stop&&r.stop.call(this,!0),e=i.length;e--;)i[e].elem===this&&i[e].queue===a&&(i[e].anim.stop(!0),i.splice(e,1));for(e=0;e<o;e++)n[e]&&n[e].finish&&n[e].finish.call(this);delete t.finish})}}),k.each(["toggle","show","hide"],function(e,r){var i=k.fn[r];k.fn[r]=function(e,t,n){return null==e||"boolean"==typeof e?i.apply(this,arguments):this.animate(ft(r,!0),e,t,n)}}),k.each({slideDown:ft("show"),slideUp:ft("hide"),slideToggle:ft("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,r){k.fn[e]=function(e,t,n){return this.animate(r,e,t,n)}}),k.timers=[],k.fx.tick=function(){var e,t=0,n=k.timers;for(rt=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||k.fx.stop(),rt=void 0},k.fx.timer=function(e){k.timers.push(e),k.fx.start()},k.fx.interval=13,k.fx.start=function(){it||(it=!0,lt())},k.fx.stop=function(){it=null},k.fx.speeds={slow:600,fast:200,_default:400},k.fn.delay=function(r,e){return r=k.fx&&k.fx.speeds[r]||r,e=e||"fx",this.queue(e,function(e,t){var n=C.setTimeout(e,r);t.stop=function(){C.clearTimeout(n)}})},ot=E.createElement("input"),at=E.createElement("select").appendChild(E.createElement("option")),ot.type="checkbox",y.checkOn=""!==ot.value,y.optSelected=at.selected,(ot=E.createElement("input")).value="t",ot.type="radio",y.radioValue="t"===ot.value;var ht,gt=k.expr.attrHandle;k.fn.extend({attr:function(e,t){return _(this,k.attr,e,t,1<arguments.length)},removeAttr:function(e){return this.each(function(){k.removeAttr(this,e)})}}),k.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return"undefined"==typeof e.getAttribute?k.prop(e,t,n):(1===o&&k.isXMLDoc(e)||(i=k.attrHooks[t.toLowerCase()]||(k.expr.match.bool.test(t)?ht:void 0)),void 0!==n?null===n?void k.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=k.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!y.radioValue&&"radio"===t&&A(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(R);if(i&&1===e.nodeType)while(n=i[r++])e.removeAttribute(n)}}),ht={set:function(e,t,n){return!1===t?k.removeAttr(e,n):e.setAttribute(n,n),n}},k.each(k.expr.match.bool.source.match(/\w+/g),function(e,t){var a=gt[t]||k.find.attr;gt[t]=function(e,t,n){var r,i,o=t.toLowerCase();return n||(i=gt[o],gt[o]=r,r=null!=a(e,t,n)?o:null,gt[o]=i),r}});var vt=/^(?:input|select|textarea|button)$/i,yt=/^(?:a|area)$/i;function mt(e){return(e.match(R)||[]).join(" ")}function xt(e){return e.getAttribute&&e.getAttribute("class")||""}function bt(e){return Array.isArray(e)?e:"string"==typeof e&&e.match(R)||[]}k.fn.extend({prop:function(e,t){return _(this,k.prop,e,t,1<arguments.length)},removeProp:function(e){return this.each(function(){delete this[k.propFix[e]||e]})}}),k.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&k.isXMLDoc(e)||(t=k.propFix[t]||t,i=k.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=k.find.attr(e,"tabindex");return t?parseInt(t,10):vt.test(e.nodeName)||yt.test(e.nodeName)&&e.href?0:-1}}},propFix:{"for":"htmlFor","class":"className"}}),y.optSelected||(k.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),k.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){k.propFix[this.toLowerCase()]=this}),k.fn.extend({addClass:function(t){var e,n,r,i,o,a,s,u=0;if(m(t))return this.each(function(e){k(this).addClass(t.call(this,e,xt(this)))});if((e=bt(t)).length)while(n=this[u++])if(i=xt(n),r=1===n.nodeType&&" "+mt(i)+" "){a=0;while(o=e[a++])r.indexOf(" "+o+" ")<0&&(r+=o+" ");i!==(s=mt(r))&&n.setAttribute("class",s)}return this},removeClass:function(t){var e,n,r,i,o,a,s,u=0;if(m(t))return this.each(function(e){k(this).removeClass(t.call(this,e,xt(this)))});if(!arguments.length)return this.attr("class","");if((e=bt(t)).length)while(n=this[u++])if(i=xt(n),r=1===n.nodeType&&" "+mt(i)+" "){a=0;while(o=e[a++])while(-1<r.indexOf(" "+o+" "))r=r.replace(" "+o+" "," ");i!==(s=mt(r))&&n.setAttribute("class",s)}return this},toggleClass:function(i,t){var o=typeof i,a="string"===o||Array.isArray(i);return"boolean"==typeof t&&a?t?this.addClass(i):this.removeClass(i):m(i)?this.each(function(e){k(this).toggleClass(i.call(this,e,xt(this),t),t)}):this.each(function(){var e,t,n,r;if(a){t=0,n=k(this),r=bt(i);while(e=r[t++])n.hasClass(e)?n.removeClass(e):n.addClass(e)}else void 0!==i&&"boolean"!==o||((e=xt(this))&&Q.set(this,"__className__",e),this.setAttribute&&this.setAttribute("class",e||!1===i?"":Q.get(this,"__className__")||""))})},hasClass:function(e){var t,n,r=0;t=" "+e+" ";while(n=this[r++])if(1===n.nodeType&&-1<(" "+mt(xt(n))+" ").indexOf(t))return!0;return!1}});var wt=/\r/g;k.fn.extend({val:function(n){var r,e,i,t=this[0];return arguments.length?(i=m(n),this.each(function(e){var t;1===this.nodeType&&(null==(t=i?n.call(this,e,k(this).val()):n)?t="":"number"==typeof t?t+="":Array.isArray(t)&&(t=k.map(t,function(e){return null==e?"":e+""})),(r=k.valHooks[this.type]||k.valHooks[this.nodeName.toLowerCase()])&&"set"in r&&void 0!==r.set(this,t,"value")||(this.value=t))})):t?(r=k.valHooks[t.type]||k.valHooks[t.nodeName.toLowerCase()])&&"get"in r&&void 0!==(e=r.get(t,"value"))?e:"string"==typeof(e=t.value)?e.replace(wt,""):null==e?"":e:void 0}}),k.extend({valHooks:{option:{get:function(e){var t=k.find.attr(e,"value");return null!=t?t:mt(k.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,a="select-one"===e.type,s=a?null:[],u=a?o+1:i.length;for(r=o<0?u:a?o:0;r<u;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!A(n.parentNode,"optgroup"))){if(t=k(n).val(),a)return t;s.push(t)}return s},set:function(e,t){var n,r,i=e.options,o=k.makeArray(t),a=i.length;while(a--)((r=i[a]).selected=-1<k.inArray(k.valHooks.option.get(r),o))&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),k.each(["radio","checkbox"],function(){k.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=-1<k.inArray(k(e).val(),t)}},y.checkOn||(k.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})}),y.focusin="onfocusin"in C;var Tt=/^(?:focusinfocus|focusoutblur)$/,Ct=function(e){e.stopPropagation()};k.extend(k.event,{trigger:function(e,t,n,r){var i,o,a,s,u,l,c,f,p=[n||E],d=v.call(e,"type")?e.type:e,h=v.call(e,"namespace")?e.namespace.split("."):[];if(o=f=a=n=n||E,3!==n.nodeType&&8!==n.nodeType&&!Tt.test(d+k.event.triggered)&&(-1<d.indexOf(".")&&(d=(h=d.split(".")).shift(),h.sort()),u=d.indexOf(":")<0&&"on"+d,(e=e[k.expando]?e:new k.Event(d,"object"==typeof e&&e)).isTrigger=r?2:3,e.namespace=h.join("."),e.rnamespace=e.namespace?new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,e.result=void 0,e.target||(e.target=n),t=null==t?[e]:k.makeArray(t,[e]),c=k.event.special[d]||{},r||!c.trigger||!1!==c.trigger.apply(n,t))){if(!r&&!c.noBubble&&!x(n)){for(s=c.delegateType||d,Tt.test(s+d)||(o=o.parentNode);o;o=o.parentNode)p.push(o),a=o;a===(n.ownerDocument||E)&&p.push(a.defaultView||a.parentWindow||C)}i=0;while((o=p[i++])&&!e.isPropagationStopped())f=o,e.type=1<i?s:c.bindType||d,(l=(Q.get(o,"events")||{})[e.type]&&Q.get(o,"handle"))&&l.apply(o,t),(l=u&&o[u])&&l.apply&&G(o)&&(e.result=l.apply(o,t),!1===e.result&&e.preventDefault());return e.type=d,r||e.isDefaultPrevented()||c._default&&!1!==c._default.apply(p.pop(),t)||!G(n)||u&&m(n[d])&&!x(n)&&((a=n[u])&&(n[u]=null),k.event.triggered=d,e.isPropagationStopped()&&f.addEventListener(d,Ct),n[d](),e.isPropagationStopped()&&f.removeEventListener(d,Ct),k.event.triggered=void 0,a&&(n[u]=a)),e.result}},simulate:function(e,t,n){var r=k.extend(new k.Event,n,{type:e,isSimulated:!0});k.event.trigger(r,null,t)}}),k.fn.extend({trigger:function(e,t){return this.each(function(){k.event.trigger(e,t,this)})},triggerHandler:function(e,t){var n=this[0];if(n)return k.event.trigger(e,t,n,!0)}}),y.focusin||k.each({focus:"focusin",blur:"focusout"},function(n,r){var i=function(e){k.event.simulate(r,e.target,k.event.fix(e))};k.event.special[r]={setup:function(){var e=this.ownerDocument||this,t=Q.access(e,r);t||e.addEventListener(n,i,!0),Q.access(e,r,(t||0)+1)},teardown:function(){var e=this.ownerDocument||this,t=Q.access(e,r)-1;t?Q.access(e,r,t):(e.removeEventListener(n,i,!0),Q.remove(e,r))}}});var Et=C.location,kt=Date.now(),St=/\?/;k.parseXML=function(e){var t;if(!e||"string"!=typeof e)return null;try{t=(new C.DOMParser).parseFromString(e,"text/xml")}catch(e){t=void 0}return t&&!t.getElementsByTagName("parsererror").length||k.error("Invalid XML: "+e),t};var Nt=/\[\]$/,At=/\r?\n/g,Dt=/^(?:submit|button|image|reset|file)$/i,jt=/^(?:input|select|textarea|keygen)/i;function qt(n,e,r,i){var t;if(Array.isArray(e))k.each(e,function(e,t){r||Nt.test(n)?i(n,t):qt(n+"["+("object"==typeof t&&null!=t?e:"")+"]",t,r,i)});else if(r||"object"!==w(e))i(n,e);else for(t in e)qt(n+"["+t+"]",e[t],r,i)}k.param=function(e,t){var n,r=[],i=function(e,t){var n=m(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(null==e)return"";if(Array.isArray(e)||e.jquery&&!k.isPlainObject(e))k.each(e,function(){i(this.name,this.value)});else for(n in e)qt(n,e[n],t,i);return r.join("&")},k.fn.extend({serialize:function(){return k.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=k.prop(this,"elements");return e?k.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!k(this).is(":disabled")&&jt.test(this.nodeName)&&!Dt.test(e)&&(this.checked||!pe.test(e))}).map(function(e,t){var n=k(this).val();return null==n?null:Array.isArray(n)?k.map(n,function(e){return{name:t.name,value:e.replace(At,"\r\n")}}):{name:t.name,value:n.replace(At,"\r\n")}}).get()}});var Lt=/%20/g,Ht=/#.*$/,Ot=/([?&])_=[^&]*/,Pt=/^(.*?):[ \t]*([^\r\n]*)$/gm,Rt=/^(?:GET|HEAD)$/,Mt=/^\/\//,It={},Wt={},$t="*/".concat("*"),Ft=E.createElement("a");function Bt(o){return function(e,t){"string"!=typeof e&&(t=e,e="*");var n,r=0,i=e.toLowerCase().match(R)||[];if(m(t))while(n=i[r++])"+"===n[0]?(n=n.slice(1)||"*",(o[n]=o[n]||[]).unshift(t)):(o[n]=o[n]||[]).push(t)}}function _t(t,i,o,a){var s={},u=t===Wt;function l(e){var r;return s[e]=!0,k.each(t[e]||[],function(e,t){var n=t(i,o,a);return"string"!=typeof n||u||s[n]?u?!(r=n):void 0:(i.dataTypes.unshift(n),l(n),!1)}),r}return l(i.dataTypes[0])||!s["*"]&&l("*")}function zt(e,t){var n,r,i=k.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&k.extend(!0,e,r),e}Ft.href=Et.href,k.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Et.href,type:"GET",isLocal:/^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Et.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":$t,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":k.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?zt(zt(e,k.ajaxSettings),t):zt(k.ajaxSettings,e)},ajaxPrefilter:Bt(It),ajaxTransport:Bt(Wt),ajax:function(e,t){"object"==typeof e&&(t=e,e=void 0),t=t||{};var c,f,p,n,d,r,h,g,i,o,v=k.ajaxSetup({},t),y=v.context||v,m=v.context&&(y.nodeType||y.jquery)?k(y):k.event,x=k.Deferred(),b=k.Callbacks("once memory"),w=v.statusCode||{},a={},s={},u="canceled",T={readyState:0,getResponseHeader:function(e){var t;if(h){if(!n){n={};while(t=Pt.exec(p))n[t[1].toLowerCase()+" "]=(n[t[1].toLowerCase()+" "]||[]).concat(t[2])}t=n[e.toLowerCase()+" "]}return null==t?null:t.join(", ")},getAllResponseHeaders:function(){return h?p:null},setRequestHeader:function(e,t){return null==h&&(e=s[e.toLowerCase()]=s[e.toLowerCase()]||e,a[e]=t),this},overrideMimeType:function(e){return null==h&&(v.mimeType=e),this},statusCode:function(e){var t;if(e)if(h)T.always(e[T.status]);else for(t in e)w[t]=[w[t],e[t]];return this},abort:function(e){var t=e||u;return c&&c.abort(t),l(0,t),this}};if(x.promise(T),v.url=((e||v.url||Et.href)+"").replace(Mt,Et.protocol+"//"),v.type=t.method||t.type||v.method||v.type,v.dataTypes=(v.dataType||"*").toLowerCase().match(R)||[""],null==v.crossDomain){r=E.createElement("a");try{r.href=v.url,r.href=r.href,v.crossDomain=Ft.protocol+"//"+Ft.host!=r.protocol+"//"+r.host}catch(e){v.crossDomain=!0}}if(v.data&&v.processData&&"string"!=typeof v.data&&(v.data=k.param(v.data,v.traditional)),_t(It,v,t,T),h)return T;for(i in(g=k.event&&v.global)&&0==k.active++&&k.event.trigger("ajaxStart"),v.type=v.type.toUpperCase(),v.hasContent=!Rt.test(v.type),f=v.url.replace(Ht,""),v.hasContent?v.data&&v.processData&&0===(v.contentType||"").indexOf("application/x-www-form-urlencoded")&&(v.data=v.data.replace(Lt,"+")):(o=v.url.slice(f.length),v.data&&(v.processData||"string"==typeof v.data)&&(f+=(St.test(f)?"&":"?")+v.data,delete v.data),!1===v.cache&&(f=f.replace(Ot,"$1"),o=(St.test(f)?"&":"?")+"_="+kt+++o),v.url=f+o),v.ifModified&&(k.lastModified[f]&&T.setRequestHeader("If-Modified-Since",k.lastModified[f]),k.etag[f]&&T.setRequestHeader("If-None-Match",k.etag[f])),(v.data&&v.hasContent&&!1!==v.contentType||t.contentType)&&T.setRequestHeader("Content-Type",v.contentType),T.setRequestHeader("Accept",v.dataTypes[0]&&v.accepts[v.dataTypes[0]]?v.accepts[v.dataTypes[0]]+("*"!==v.dataTypes[0]?", "+$t+"; q=0.01":""):v.accepts["*"]),v.headers)T.setRequestHeader(i,v.headers[i]);if(v.beforeSend&&(!1===v.beforeSend.call(y,T,v)||h))return T.abort();if(u="abort",b.add(v.complete),T.done(v.success),T.fail(v.error),c=_t(Wt,v,t,T)){if(T.readyState=1,g&&m.trigger("ajaxSend",[T,v]),h)return T;v.async&&0<v.timeout&&(d=C.setTimeout(function(){T.abort("timeout")},v.timeout));try{h=!1,c.send(a,l)}catch(e){if(h)throw e;l(-1,e)}}else l(-1,"No Transport");function l(e,t,n,r){var i,o,a,s,u,l=t;h||(h=!0,d&&C.clearTimeout(d),c=void 0,p=r||"",T.readyState=0<e?4:0,i=200<=e&&e<300||304===e,n&&(s=function(e,t,n){var r,i,o,a,s=e.contents,u=e.dataTypes;while("*"===u[0])u.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in s)if(s[i]&&s[i].test(r)){u.unshift(i);break}if(u[0]in n)o=u[0];else{for(i in n){if(!u[0]||e.converters[i+" "+u[0]]){o=i;break}a||(a=i)}o=o||a}if(o)return o!==u[0]&&u.unshift(o),n[o]}(v,T,n)),s=function(e,t,n,r){var i,o,a,s,u,l={},c=e.dataTypes.slice();if(c[1])for(a in e.converters)l[a.toLowerCase()]=e.converters[a];o=c.shift();while(o)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!u&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u=o,o=c.shift())if("*"===o)o=u;else if("*"!==u&&u!==o){if(!(a=l[u+" "+o]||l["* "+o]))for(i in l)if((s=i.split(" "))[1]===o&&(a=l[u+" "+s[0]]||l["* "+s[0]])){!0===a?a=l[i]:!0!==l[i]&&(o=s[0],c.unshift(s[1]));break}if(!0!==a)if(a&&e["throws"])t=a(t);else try{t=a(t)}catch(e){return{state:"parsererror",error:a?e:"No conversion from "+u+" to "+o}}}return{state:"success",data:t}}(v,s,T,i),i?(v.ifModified&&((u=T.getResponseHeader("Last-Modified"))&&(k.lastModified[f]=u),(u=T.getResponseHeader("etag"))&&(k.etag[f]=u)),204===e||"HEAD"===v.type?l="nocontent":304===e?l="notmodified":(l=s.state,o=s.data,i=!(a=s.error))):(a=l,!e&&l||(l="error",e<0&&(e=0))),T.status=e,T.statusText=(t||l)+"",i?x.resolveWith(y,[o,l,T]):x.rejectWith(y,[T,l,a]),T.statusCode(w),w=void 0,g&&m.trigger(i?"ajaxSuccess":"ajaxError",[T,v,i?o:a]),b.fireWith(y,[T,l]),g&&(m.trigger("ajaxComplete",[T,v]),--k.active||k.event.trigger("ajaxStop")))}return T},getJSON:function(e,t,n){return k.get(e,t,n,"json")},getScript:function(e,t){return k.get(e,void 0,t,"script")}}),k.each(["get","post"],function(e,i){k[i]=function(e,t,n,r){return m(t)&&(r=r||n,n=t,t=void 0),k.ajax(k.extend({url:e,type:i,dataType:r,data:t,success:n},k.isPlainObject(e)&&e))}}),k._evalUrl=function(e,t){return k.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,converters:{"text script":function(){}},dataFilter:function(e){k.globalEval(e,t)}})},k.fn.extend({wrapAll:function(e){var t;return this[0]&&(m(e)&&(e=e.call(this[0])),t=k(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstElementChild)e=e.firstElementChild;return e}).append(this)),this},wrapInner:function(n){return m(n)?this.each(function(e){k(this).wrapInner(n.call(this,e))}):this.each(function(){var e=k(this),t=e.contents();t.length?t.wrapAll(n):e.append(n)})},wrap:function(t){var n=m(t);return this.each(function(e){k(this).wrapAll(n?t.call(this,e):t)})},unwrap:function(e){return this.parent(e).not("body").each(function(){k(this).replaceWith(this.childNodes)}),this}}),k.expr.pseudos.hidden=function(e){return!k.expr.pseudos.visible(e)},k.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},k.ajaxSettings.xhr=function(){try{return new C.XMLHttpRequest}catch(e){}};var Ut={0:200,1223:204},Xt=k.ajaxSettings.xhr();y.cors=!!Xt&&"withCredentials"in Xt,y.ajax=Xt=!!Xt,k.ajaxTransport(function(i){var o,a;if(y.cors||Xt&&!i.crossDomain)return{send:function(e,t){var n,r=i.xhr();if(r.open(i.type,i.url,i.async,i.username,i.password),i.xhrFields)for(n in i.xhrFields)r[n]=i.xhrFields[n];for(n in i.mimeType&&r.overrideMimeType&&r.overrideMimeType(i.mimeType),i.crossDomain||e["X-Requested-With"]||(e["X-Requested-With"]="XMLHttpRequest"),e)r.setRequestHeader(n,e[n]);o=function(e){return function(){o&&(o=a=r.onload=r.onerror=r.onabort=r.ontimeout=r.onreadystatechange=null,"abort"===e?r.abort():"error"===e?"number"!=typeof r.status?t(0,"error"):t(r.status,r.statusText):t(Ut[r.status]||r.status,r.statusText,"text"!==(r.responseType||"text")||"string"!=typeof r.responseText?{binary:r.response}:{text:r.responseText},r.getAllResponseHeaders()))}},r.onload=o(),a=r.onerror=r.ontimeout=o("error"),void 0!==r.onabort?r.onabort=a:r.onreadystatechange=function(){4===r.readyState&&C.setTimeout(function(){o&&a()})},o=o("abort");try{r.send(i.hasContent&&i.data||null)}catch(e){if(o)throw e}},abort:function(){o&&o()}}}),k.ajaxPrefilter(function(e){e.crossDomain&&(e.contents.script=!1)}),k.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return k.globalEval(e),e}}}),k.ajaxPrefilter("script",function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")}),k.ajaxTransport("script",function(n){var r,i;if(n.crossDomain||n.scriptAttrs)return{send:function(e,t){r=k("<script>").attr(n.scriptAttrs||{}).prop({charset:n.scriptCharset,src:n.url}).on("load error",i=function(e){r.remove(),i=null,e&&t("error"===e.type?404:200,e.type)}),E.head.appendChild(r[0])},abort:function(){i&&i()}}});var Vt,Gt=[],Yt=/(=)\?(?=&|$)|\?\?/;k.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Gt.pop()||k.expando+"_"+kt++;return this[e]=!0,e}}),k.ajaxPrefilter("json jsonp",function(e,t,n){var r,i,o,a=!1!==e.jsonp&&(Yt.test(e.url)?"url":"string"==typeof e.data&&0===(e.contentType||"").indexOf("application/x-www-form-urlencoded")&&Yt.test(e.data)&&"data");if(a||"jsonp"===e.dataTypes[0])return r=e.jsonpCallback=m(e.jsonpCallback)?e.jsonpCallback():e.jsonpCallback,a?e[a]=e[a].replace(Yt,"$1"+r):!1!==e.jsonp&&(e.url+=(St.test(e.url)?"&":"?")+e.jsonp+"="+r),e.converters["script json"]=function(){return o||k.error(r+" was not called"),o[0]},e.dataTypes[0]="json",i=C[r],C[r]=function(){o=arguments},n.always(function(){void 0===i?k(C).removeProp(r):C[r]=i,e[r]&&(e.jsonpCallback=t.jsonpCallback,Gt.push(r)),o&&m(i)&&i(o[0]),o=i=void 0}),"script"}),y.createHTMLDocument=((Vt=E.implementation.createHTMLDocument("").body).innerHTML="<form></form><form></form>",2===Vt.childNodes.length),k.parseHTML=function(e,t,n){return"string"!=typeof e?[]:("boolean"==typeof t&&(n=t,t=!1),t||(y.createHTMLDocument?((r=(t=E.implementation.createHTMLDocument("")).createElement("base")).href=E.location.href,t.head.appendChild(r)):t=E),o=!n&&[],(i=D.exec(e))?[t.createElement(i[1])]:(i=we([e],t,o),o&&o.length&&k(o).remove(),k.merge([],i.childNodes)));var r,i,o},k.fn.load=function(e,t,n){var r,i,o,a=this,s=e.indexOf(" ");return-1<s&&(r=mt(e.slice(s)),e=e.slice(0,s)),m(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),0<a.length&&k.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done(function(e){o=arguments,a.html(r?k("<div>").append(k.parseHTML(e)).find(r):e)}).always(n&&function(e,t){a.each(function(){n.apply(this,o||[e.responseText,t,e])})}),this},k.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){k.fn[t]=function(e){return this.on(t,e)}}),k.expr.pseudos.animated=function(t){return k.grep(k.timers,function(e){return t===e.elem}).length},k.offset={setOffset:function(e,t,n){var r,i,o,a,s,u,l=k.css(e,"position"),c=k(e),f={};"static"===l&&(e.style.position="relative"),s=c.offset(),o=k.css(e,"top"),u=k.css(e,"left"),("absolute"===l||"fixed"===l)&&-1<(o+u).indexOf("auto")?(a=(r=c.position()).top,i=r.left):(a=parseFloat(o)||0,i=parseFloat(u)||0),m(t)&&(t=t.call(e,n,k.extend({},s))),null!=t.top&&(f.top=t.top-s.top+a),null!=t.left&&(f.left=t.left-s.left+i),"using"in t?t.using.call(e,f):c.css(f)}},k.fn.extend({offset:function(t){if(arguments.length)return void 0===t?this:this.each(function(e){k.offset.setOffset(this,t,e)});var e,n,r=this[0];return r?r.getClientRects().length?(e=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:e.top+n.pageYOffset,left:e.left+n.pageXOffset}):{top:0,left:0}:void 0},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===k.css(r,"position"))t=r.getBoundingClientRect();else{t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;while(e&&(e===n.body||e===n.documentElement)&&"static"===k.css(e,"position"))e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=k(e).offset()).top+=k.css(e,"borderTopWidth",!0),i.left+=k.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-k.css(r,"marginTop",!0),left:t.left-i.left-k.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var e=this.offsetParent;while(e&&"static"===k.css(e,"position"))e=e.offsetParent;return e||ie})}}),k.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(t,i){var o="pageYOffset"===i;k.fn[t]=function(e){return _(this,function(e,t,n){var r;if(x(e)?r=e:9===e.nodeType&&(r=e.defaultView),void 0===n)return r?r[i]:e[t];r?r.scrollTo(o?r.pageXOffset:n,o?n:r.pageYOffset):e[t]=n},t,e,arguments.length)}}),k.each(["top","left"],function(e,n){k.cssHooks[n]=ze(y.pixelPosition,function(e,t){if(t)return t=_e(e,n),$e.test(t)?k(e).position()[n]+"px":t})}),k.each({Height:"height",Width:"width"},function(a,s){k.each({padding:"inner"+a,content:s,"":"outer"+a},function(r,o){k.fn[o]=function(e,t){var n=arguments.length&&(r||"boolean"!=typeof e),i=r||(!0===e||!0===t?"margin":"border");return _(this,function(e,t,n){var r;return x(e)?0===o.indexOf("outer")?e["inner"+a]:e.document.documentElement["client"+a]:9===e.nodeType?(r=e.documentElement,Math.max(e.body["scroll"+a],r["scroll"+a],e.body["offset"+a],r["offset"+a],r["client"+a])):void 0===n?k.css(e,t,i):k.style(e,t,n,i)},s,n?e:void 0,n)}})}),k.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(e,n){k.fn[n]=function(e,t){return 0<arguments.length?this.on(n,null,e,t):this.trigger(n)}}),k.fn.extend({hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),k.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)}}),k.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),m(e))return r=s.call(arguments,2),(i=function(){return e.apply(t||this,r.concat(s.call(arguments)))}).guid=e.guid=e.guid||k.guid++,i},k.holdReady=function(e){e?k.readyWait++:k.ready(!0)},k.isArray=Array.isArray,k.parseJSON=JSON.parse,k.nodeName=A,k.isFunction=m,k.isWindow=x,k.camelCase=V,k.type=w,k.now=Date.now,k.isNumeric=function(e){var t=k.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},"function"==typeof define&&define.amd&&define("jquery",[],function(){return k});var Qt=C.jQuery,Jt=C.$;return k.noConflict=function(e){return C.$===k&&(C.$=Jt),e&&C.jQuery===k&&(C.jQuery=Qt),k},e||(C.jQuery=C.$=k),k});
/***********************************************************
	Filename: form.js
	Note	: 自定义表单中涉及到的JS
	Version : 2.0
	Web		: www.dsaiyin.com
	Author  : dsaiyin <QQ:850272422>
	Update  : 2012-12-26 11:02
***********************************************************/
function dsy_form_password(id,len)
{
	var list = new Array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
	if(!len || len == "undefined") len = 8;
	var rand = "";
	for(var i = 0;i<len;i++)
	{
		var num = Math.floor(Math.random()*36+0);
		rand = rand + list[num];
	}
	var htm = "随机密码："+rand;
	$("#"+id+"_html").html(htm);
	$("#"+id).val(rand);
}

//表单扩展按钮
//btn，类型
function dsy_btn_action(btn,id)
{
	if(btn == "image")
	{
		if(!id || id == "undefined")
		{
			$.dialog.alert("未指定ID");
			return false;
		}
		var url = get_url("open","input") + "&ext="+$.str.encode("png,jpg,gif,jpeg,bmp")+"&id="+id;
		$.dialog.open(url,{
			title: "图片管理器",
			lock : true,
			width: "80%",
			height: "70%",
			resize: false
		});
	}
}

function dsy_btn_view(btn,id)
{
	if(btn == "image")
	{
		var url = $("#"+id).val();
		if(!url || url == "undefined")
		{
			$.dialog.alert("图片不存在，请在表单中填写图片地址");
		}
		else
		{
			$.dialog({
				"title":"预览",
				"content": '<img src="'+url+'" border="0" />',
				"lock":true
			});
		}
	}
}

//清空
function dsy_btn_clear(btn,id)
{
	$("#"+id).val("");
}

function _dsy_form_opt(val,id,eid,etype)
{
	if(!val || val == "undefined")
	{
		$("#"+id).html("").hide();
		return false;
	}
	var url = get_url("form","config") + "&id="+$.str.encode(val);
	if(eid && eid != "undefined")
	{
		url += "&eid="+eid;
	}
	if(etype && etype != "undefined")
	{
		url += "&etype="+etype;
	}
	$.ajax({
		"url" : url,
		"cache" : false,
		"dataType" : "html",
		"success" : function (rs)
		{
			if(rs && rs != "exit")
			{
				$("#"+id).html(rs).show();
			}
		}
	});
}

function dsy_btn_editor_picture(id)
{
	var url = get_url("edit","picture") + "&input="+id;
	$.dialog.open(url,{
		"title" : "图片库",
		"width" : "760px",
		"height" : "80%",
		"resize" : false,
		"lock" : true
	});
}

function dsy_btn_editor_file(id)
{
	var url = get_url("edit","file") + "&input="+id+"&nopic=1";
	$.dialog.open(url,{
		"title" : "附件资源",
		"width" : "760px",
		"height" : "80%",
		"resize" : false,
		"lock" : true
	});
}

function dsy_btn_editor_video(id)
{
	var url = get_url("edit","video") + "&input="+id+"&nopic=1";
	$.dialog.open(url,{
		"title" : "添加影音",
		"width" : "760px",
		"height" : "80%",
		"resize" : false,
		"lock" : true
	});
}

//删除单个主题关联
function dsy_title_delete_single(id)
{
	$("#"+id).val("");
	$("#title_"+id).hide();
	$("#dsy-btn-"+id+"-delete").hide();
}

//删除多个主题关联
function dsy_title_delete(id,val)
{
	if(val && val != "undefined")
	{
		//移除DIV值
		$("#"+id+"_div_"+val).remove();
		//移除值
		var c = $("#"+id).val();
		if(c == "" || c == "undefined")
		{
			$("#"+id+"_div").hide();
			$("#"+id+"_button_checkbox").hide();
			$("#"+id).val("");
			return true;
		}
		var clist = c.split(",");
		var n_list = new Array();
		var m = 0;
		for(var i=0;i<clist.length;i++)
		{
			if(clist[i] != val)
			{
				n_list[m] = clist[i];
				m++;
			}
		}
		if(n_list.length<1)
		{
			$("#"+id+"_div").hide();
			$("#"+id+"_button_checkbox").hide();
			$("#"+id).val("");
		}
		else
		{
			$("#"+id).val(n_list.join(","));
		}
		return true;
	}
	val = $.input.checkbox_join(id+"_div");
	if(!val || val == "undefined")
	{
		$.dialog.alert("请选择要删除的信息");
		return false;
	}
	var lst = val.split(",");
	for(var i=0;i<lst.length;i++)
	{
		dsy_title_delete(id,lst[i]);
	}
	return true;
}

//选择主题关联
function dsy_title_select(project_id,is_multi,title,input)
{
	var url = get_url("inp","title")+"&project_id="+$.str.encode(project_id);
	if(is_multi && is_multi != 'undefined')
	{
		url += "&multi=1";
	}
	url += "&identifier="+$.str.encode(input);
	$.dialog.open(url,{
		"title" : title,
		"width" : "760px",
		"height" : "80%",
		"resize" : false,
		"lock" : true,
		"ok": function(){
			var data = $.dialog.data("title_data_"+input);
			if(data)
			{
				$("#"+input).val(data);
				window.eval("action_"+input+"_show()");
				//window.setTimeout("action_"++"_show()",500);
			}
		}
	});
}

function dsy_user_delete(id,val)
{
	//移除DIV值
	$("#"+id+"_div_"+val).remove();
	//移除值
	var c = $("#"+id).val();
	if(c == "" || c == "undefined")
	{
		$("#"+id+"_div").html("");
		$("#"+id).val("");
		return true;
	}
	var clist = c.split(",");
	var n_list = new Array();
	var m = 0;
	for(var i=0;i<clist.length;i++)
	{
		if(clist[i] != val)
		{
			n_list[m] = clist[i];
			m++;
		}
	}
	if(n_list.length<1)
	{
		$("#"+id+"_div").html("");
		$("#"+id).val("");
	}
	else
	{
		$("#"+id).val(n_list.join(","));
	}
	return true;
}

/* 编辑器扩展按钮属性 */
function dsy_edit_type(id)
{
	var t = "#sMode_"+id;
	if($(t).val() == "可视化")
	{
		$(eval("pageInit_"+id+"()"));
		$(t).val("源代码");
	}
	else
	{
		$("#"+id).xheditor(false);
		eval("CodeMirror_dsy_"+id+"()");
		//$("#textarea_"+id+" xhe_default:first").hide();
		//$("#textarea_"+id+" CodeMirror:first").show();
		$(t).val("可视化");
	}
}

/*
 * 自定义表单中关于附件上传涉及到的JS操作
 * 最后修改时间：2014年7月29日
 * 此JS涉及到外部调用的JS函数get_url，json_ajax，$.str，$.dialog,$.parseJSON
 */
;(function($){
	$.dsy_upload = function(opts){
		var self = this;
		var defaults = {
			'multi':false, //是否多附件
			'id':'upload',
			'swf':'js/webuploader/uploader.swf',
			'server':'index.php',
			'pick':'#picker',
			'resize': false,
			'disableGlobalDnd':true,
			'fileVal':'upfile',
			'filetypes':'jpg,png,gif,jpeg',
			'runtimeOrder':'flash,html5',
			'cateid':0,
			'accept':{'title':'图片(*.jpg, *.gif, *.png)','extensions':'jpg,png,gif'}
		};
		opts.accept = {'title':opts.typeDesc,'extensions':opts.filetypes};
		this.opts = $.extend({},defaults,opts);
		if(this.opts.multi){
			this.opts.pick = this.opts.pick;
		}else{
			this.opts.pick = {'id':this.opts.pick,'multiple':false};
		}
		this.id = "#"+this.opts.id;
		this.update_status = 'ready';
		//添加动作
		this.open_action = function(val){
			var content = $(this.id).val();
			if(opts.multi){
				content = (content && content != "undefined") ? content + ","+val : val;
				var lst = $.unique(content.split(","));
				content = lst.join(',');
			}else{
				content = val;
			}
			$(this.id).val(content);
			if(this.opts.preview && this.opts.preview != 'undefined'){
				(this.opts.preview)(content);
			}else{
				this.preview_res(content);
			}
		};
		this.cateid = function(val){
			this.opts.cateid = val;
		};
		this.uploader = WebUploader.create(this.opts);
		this.uploader.on('beforeFileQueued',function(file){
			var val = (self.opts.filetypes).toLowerCase();
			var lst = val.split(',');
			if($.inArray((file.ext).toLowerCase(),lst) < 0){
				$.dialog.alert('不支持 <span class="red">'+file.ext+'</span> 类型附件上传');
				return false;
			}
		});
		//执行添加队列
		this.uploader.on('fileQueued', function( file ) {
			if(self.opts.progress && self.opts.progress != 'undefined'){
				(self.opts.progress)(file);
			}else{
				$(self.id+"_progress").append('<div id="dsy-upfile-' + file.id + '" class="dsy-upfile-list">' +
					'<div class="title">' + file.name + '（<span class="status">等待上传…</span>）</div>' +
					'<div class="progress"><span>&nbsp;</span></div>' +
					'<div class="cancel" id="dsy-upfile-cancel-'+file.id+'"></div>' + 
				'</div>' );
			}
			self.upload_state = 'ready';
			$("#dsy-upfile-"+file.id+" .cancel").click(function(){
				self.uploader.removeFile(file,true);
				$("#dsy-upfile-"+file.id).remove();
			});
		});
		this.uploader.on('uploadProgress',function(file,percent){
			var $li = $('#dsy-upfile-'+file.id),
	        $percent = $li.find('.progress span');
	        var width = $li.find('.progress').width();
	        $percent.css( 'width', parseInt(width * percent, 10) + 'px' );
	        $li.find('span.status').html('正在上传…');
		});
		this.uploader.on('uploadBeforeSend',function(block,data){
			data.cateid = self.opts.cateid;
		});
		this.uploader.on('uploadSuccess',function(file,data){
			if(data.status != 'ok'){
				if(!data.content) data.content = '上传异常';
				$.dialog.alert(data.content);
				return false;
			}
			$('#dsy-upfile-'+file.id).find('span.status').html('上传成功');
			if(self.opts.success && self.opts.success != 'undefined'){
				(self.opts.success)(file,data);
			}else{
				self.open_action(data.content.id);
			}
		});
		this.uploader.on('uploadAccept',function(file,data){
			//
		});
		this.uploader.on('uploadError',function(file,reason){
			$('#dsy-upfile-'+file.id).find('span.status').html('上传错误：<span style="color:red">'+reason+'</span>');
		});
		//上传完成，无论失败与否，3秒后删除
		this.uploader.on('uploadComplete',function(file){
			$("#dsy-upfile-"+file.id).hide(1000,function(){
				$(this).remove();
			})
		});
		//上传异常时，触发这个信息
		this.uploader.on('error',function(string){
			alert(string);
			return false;
		});
		$(this.id+"_submit").click(function(){
			//如果
			if($(this).hasClass('disabled'))
			{
				return false;
			}
			var f = $(self.id+"_progress .dsy-upfile-list").length;
			if(f<1)
			{
				alert('请选择要上传的文件');
				return false;
			}
			if(self.upload_state == 'ready' || self.upload_state == 'paused')
			{
				self.uploader.upload();
			}
			else
			{
				self.uploader.stop();
			}
		});
		
		//更新附件信息
		this.update_res = function(id){
			var title = $(self.id+"_title_"+id).val();
			if(!title)
			{
				$.dialog.alert("名称不能为空");
				return false;
			}
			var url = api_url("res","update_title_note") +"&id="+id;
			url += "&title="+$.str.encode(title);
			var note = $(this.id+"_content_"+id).val();
			if(note)
			{
				url += "&note="+$.str.encode(note);
			}
			var rs = json_ajax(url);
			if(rs.status == "ok")
			{
				alert("附件信息更新成功");
				return false;
			}
			else
			{
				alert(rs.content);
				return false;
			}
		};
		//删除附件功能
		this.del_res = function(id){
			var content = $(this.id).val();
			if(!content || content == "undefined")
			{
				return false;
			}
			if(content == id)
			{
				$(this.id).val("");
				$(this.id+"_list").html("").hide();
				return false;
			}
			var list = content.split(",");
			var newlist = new Array();
			var new_i = 0;
			for(var i=0;i<list.length;i++)
			{
				if(list[i] != id)
				{
					newlist[new_i] = list[i];
					new_i++;
				}
			}
			content = newlist.join(",");
			$(this.id).val(content);
			if(this.opts.preview && this.opts.preview != 'undefined')
			{
				(this.opts.preview)(content);
			}
			else
			{
				this.preview_res(content);
			}
		};
		//预览图片
		this.preview = function(id){
			var url = get_url("res_action","preview") + "&id="+id;
			$.dialog.open(url,{
				title: "预览",
				lock : true,
				width: "700px",
				height: "70%",
				resize: true
			});
		};
		//排序
		this.sort = function(){
			var t = [];
			$("."+this.opts.id+"_taxis").each(function(i){
				var val = $(this).val();
				var data = $(this).attr("data");
				t.push({"id":val,"data":data});
			});
			t = t.sort(function(a,b){return parseInt(a['id'])>parseInt(b['id']) ? 1 : -1});
			var list = new Array();
			for(var i in t){
				list[i] = t[i]['data'];
			}
			var val = list.join(",");
			$(this.id).val(val);
			if(this.opts.preview && this.opts.preview != 'undefined'){
				(this.opts.preview)(val);
			}else{
				this.preview_res(val);
			}
		};
		this.sort_title = function(){
			var t = [];
			$("#"+this.opts.id+"_list ._title input").each(function(i){
				var val = $(this).val();
				var data = $(this).attr("data");
				t.push({"id":val,"data":data});
			});
			t = t.sort(function(a,b){return a['id']>b['id'] ? 1 : -1});
			var list = new Array();
			for(var i in t){
				list[i] = t[i]['data'];
			}
			var val = list.join(",");
			$(this.id).val(val);
			if(this.opts.preview && this.opts.preview != 'undefined'){
				(this.opts.preview)(val);
			}else{
				this.preview_res(val);
			}
		};
		//获取列表
		this.preview_res = function(id){
			$(this.id+"_sort").hide();
			if(!id || id == "undefined")
			{
				id = $(this.id).val();
				if(!id || id == "undefined")
				{
					$(this.id+"_list").hide(1000,function(){
						$(this).html('');
					});
					return false;
				}
			}
			var url = api_url("res","idlist") + "&id="+$.str.encode(id);
			var optsid = this.opts.id;
			$.dsy.json(url,function(rs){
				if(rs.status != 'ok'){
					$.dialog.alert(rs.content);
					return false;
				}
				var list = rs.content;
				var total = count(list);
				var html = '<div class="_elist">';
				var t = 1;
				var tmp = id.split(",");
				for(var i in tmp){
					if(!list[tmp[i]] || list[tmp[i]] == 'undefined' || !list[tmp[i]]['ico']){
						continue;
					}
					var info = list[tmp[i]];
					var cls = t == total ? "_line_end" : "_line";
					html += '<div class="'+cls+'"><table><tr>';
					html += '<td class="img"><img src="'+info.ico+'" width="100px" height="100px" /></td>';
					html += '<td valign="top">';
					html += '<div class="_title" style="width:450px;margin-bottom:5px;"><input type="text" id="'+optsid+'_title_'+info.id+'" value="'+info.title+'" class="_input" placeholder="名称" data="'+info.id+'"></div>';
					html += '<div class="_note" style="width:450px;margin-bottom:5px;"><textarea id="'+optsid+'_content_'+info.id+'" class="_textarea" placeholder="备注">'+info.note+'</textarea></div>';
					html += '<div class="ext_action" style="width:450px;">';
					html += '<button type="button" class="_btn" onclick="obj_'+optsid+'.update_res('+info.id+')">更新附件信息</button>';
					html += '<button type="button" class="_btn" onclick="obj_'+optsid+'.preview('+info.id+')">预览</button>';
					html += '<button type="button" class="_btn" onclick="obj_'+optsid+'.del_res('+info.id+')">删除</button>';
					if(total > 1){
						html += '<input type="text" class="_taxis '+optsid+'_taxis" value="'+t+'" data="'+info.id+'" />';
					}
					html += '</div></td>';
					html += '</tr></table></div>';
					t++;
				}
				html += '</div>';
				$(self.id+"_list").html(html).show();
				if(total>1){
					$(this.id+"_sort").show();
				}
			});
		}
	};
})(jQuery);


	
	/**
	 * jQuery MD5 hash algorithm function
	 * 
	 * 	<code>
	 * 		Calculate the md5 hash of a String 
	 * 		String $.md5 ( String str )
	 * 	</code>
	 * 
	 * Calculates the MD5 hash of str using the » RSA Data Security, Inc. MD5 Message-Digest Algorithm, and returns that hash. 
	 * MD5 (Message-Digest algorithm 5) is a widely-used cryptographic hash function with a 128-bit hash value. MD5 has been employed in a wide variety of security applications, and is also commonly used to check the integrity of data. The generated hash is also non-reversable. Data cannot be retrieved from the message digest, the digest uniquely identifies the data.
	 * MD5 was developed by Professor Ronald L. Rivest in 1994. Its 128 bit (16 byte) message digest makes it a faster implementation than SHA-1.
	 * This script is used to process a variable length message into a fixed-length output of 128 bits using the MD5 algorithm. It is fully compatible with UTF-8 encoding. It is very useful when u want to transfer encrypted passwords over the internet. If you plan using UTF-8 encoding in your project don't forget to set the page encoding to UTF-8 (Content-Type meta tag). 
	 * This function orginally get from the WebToolkit and rewrite for using as the jQuery plugin.
	 * 
	 * Example
	 * 	Code
	 * 		<code>
	 * 			$.md5("I'm Persian."); 
	 * 		</code>
	 * 	Result
	 * 		<code>
	 * 			"b8c901d0f02223f9761016cfff9d68df"
	 * 		</code>
	 * 
	 * @alias Muhammad Hussein Fattahizadeh < muhammad [AT] semnanweb [DOT] com >
	 * @link http://www.semnanweb.com/jquery-plugin/md5.html
	 * @see http://www.webtoolkit.info/
	 * @license http://www.gnu.org/licenses/gpl.html [GNU General Public License]
	 * @param {jQuery} {md5:function(string))
	 * @return string
	 */
	
	(function($){
		
		var rotateLeft = function(lValue, iShiftBits) {
			return (lValue << iShiftBits) | (lValue >>> (32 - iShiftBits));
		}
		
		var addUnsigned = function(lX, lY) {
			var lX4, lY4, lX8, lY8, lResult;
			lX8 = (lX & 0x80000000);
			lY8 = (lY & 0x80000000);
			lX4 = (lX & 0x40000000);
			lY4 = (lY & 0x40000000);
			lResult = (lX & 0x3FFFFFFF) + (lY & 0x3FFFFFFF);
			if (lX4 & lY4) return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
			if (lX4 | lY4) {
				if (lResult & 0x40000000) return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
				else return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
			} else {
				return (lResult ^ lX8 ^ lY8);
			}
		}
		
		var F = function(x, y, z) {
			return (x & y) | ((~ x) & z);
		}
		
		var G = function(x, y, z) {
			return (x & z) | (y & (~ z));
		}
		
		var H = function(x, y, z) {
			return (x ^ y ^ z);
		}
		
		var I = function(x, y, z) {
			return (y ^ (x | (~ z)));
		}
		
		var FF = function(a, b, c, d, x, s, ac) {
			a = addUnsigned(a, addUnsigned(addUnsigned(F(b, c, d), x), ac));
			return addUnsigned(rotateLeft(a, s), b);
		};
		
		var GG = function(a, b, c, d, x, s, ac) {
			a = addUnsigned(a, addUnsigned(addUnsigned(G(b, c, d), x), ac));
			return addUnsigned(rotateLeft(a, s), b);
		};
		
		var HH = function(a, b, c, d, x, s, ac) {
			a = addUnsigned(a, addUnsigned(addUnsigned(H(b, c, d), x), ac));
			return addUnsigned(rotateLeft(a, s), b);
		};
		
		var II = function(a, b, c, d, x, s, ac) {
			a = addUnsigned(a, addUnsigned(addUnsigned(I(b, c, d), x), ac));
			return addUnsigned(rotateLeft(a, s), b);
		};
		
		var convertToWordArray = function(string) {
			var lWordCount;
			var lMessageLength = string.length;
			var lNumberOfWordsTempOne = lMessageLength + 8;
			var lNumberOfWordsTempTwo = (lNumberOfWordsTempOne - (lNumberOfWordsTempOne % 64)) / 64;
			var lNumberOfWords = (lNumberOfWordsTempTwo + 1) * 16;
			var lWordArray = Array(lNumberOfWords - 1);
			var lBytePosition = 0;
			var lByteCount = 0;
			while (lByteCount < lMessageLength) {
				lWordCount = (lByteCount - (lByteCount % 4)) / 4;
				lBytePosition = (lByteCount % 4) * 8;
				lWordArray[lWordCount] = (lWordArray[lWordCount] | (string.charCodeAt(lByteCount) << lBytePosition));
				lByteCount++;
			}
			lWordCount = (lByteCount - (lByteCount % 4)) / 4;
			lBytePosition = (lByteCount % 4) * 8;
			lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80 << lBytePosition);
			lWordArray[lNumberOfWords - 2] = lMessageLength << 3;
			lWordArray[lNumberOfWords - 1] = lMessageLength >>> 29;
			return lWordArray;
		};
		
		var wordToHex = function(lValue) {
			var WordToHexValue = "", WordToHexValueTemp = "", lByte, lCount;
			for (lCount = 0; lCount <= 3; lCount++) {
				lByte = (lValue >>> (lCount * 8)) & 255;
				WordToHexValueTemp = "0" + lByte.toString(16);
				WordToHexValue = WordToHexValue + WordToHexValueTemp.substr(WordToHexValueTemp.length - 2, 2);
			}
			return WordToHexValue;
		};
		
		var uTF8Encode = function(string) {
			string = string.replace(/\x0d\x0a/g, "\x0a");
			var output = "";
			for (var n = 0; n < string.length; n++) {
				var c = string.charCodeAt(n);
				if (c < 128) {
					output += String.fromCharCode(c);
				} else if ((c > 127) && (c < 2048)) {
					output += String.fromCharCode((c >> 6) | 192);
					output += String.fromCharCode((c & 63) | 128);
				} else {
					output += String.fromCharCode((c >> 12) | 224);
					output += String.fromCharCode(((c >> 6) & 63) | 128);
					output += String.fromCharCode((c & 63) | 128);
				}
			}
			return output;
		};
		
		$.extend({
			md5: function(string) {
				var x = Array();
				var k, AA, BB, CC, DD, a, b, c, d;
				var S11=7, S12=12, S13=17, S14=22;
				var S21=5, S22=9 , S23=14, S24=20;
				var S31=4, S32=11, S33=16, S34=23;
				var S41=6, S42=10, S43=15, S44=21;
				string = uTF8Encode(string);
				x = convertToWordArray(string);
				a = 0x67452301; b = 0xEFCDAB89; c = 0x98BADCFE; d = 0x10325476;
				for (k = 0; k < x.length; k += 16) {
					AA = a; BB = b; CC = c; DD = d;
					a = FF(a, b, c, d, x[k+0],  S11, 0xD76AA478);
					d = FF(d, a, b, c, x[k+1],  S12, 0xE8C7B756);
					c = FF(c, d, a, b, x[k+2],  S13, 0x242070DB);
					b = FF(b, c, d, a, x[k+3],  S14, 0xC1BDCEEE);
					a = FF(a, b, c, d, x[k+4],  S11, 0xF57C0FAF);
					d = FF(d, a, b, c, x[k+5],  S12, 0x4787C62A);
					c = FF(c, d, a, b, x[k+6],  S13, 0xA8304613);
					b = FF(b, c, d, a, x[k+7],  S14, 0xFD469501);
					a = FF(a, b, c, d, x[k+8],  S11, 0x698098D8);
					d = FF(d, a, b, c, x[k+9],  S12, 0x8B44F7AF);
					c = FF(c, d, a, b, x[k+10], S13, 0xFFFF5BB1);
					b = FF(b, c, d, a, x[k+11], S14, 0x895CD7BE);
					a = FF(a, b, c, d, x[k+12], S11, 0x6B901122);
					d = FF(d, a, b, c, x[k+13], S12, 0xFD987193);
					c = FF(c, d, a, b, x[k+14], S13, 0xA679438E);
					b = FF(b, c, d, a, x[k+15], S14, 0x49B40821);
					a = GG(a, b, c, d, x[k+1],  S21, 0xF61E2562);
					d = GG(d, a, b, c, x[k+6],  S22, 0xC040B340);
					c = GG(c, d, a, b, x[k+11], S23, 0x265E5A51);
					b = GG(b, c, d, a, x[k+0],  S24, 0xE9B6C7AA);
					a = GG(a, b, c, d, x[k+5],  S21, 0xD62F105D);
					d = GG(d, a, b, c, x[k+10], S22, 0x2441453);
					c = GG(c, d, a, b, x[k+15], S23, 0xD8A1E681);
					b = GG(b, c, d, a, x[k+4],  S24, 0xE7D3FBC8);
					a = GG(a, b, c, d, x[k+9],  S21, 0x21E1CDE6);
					d = GG(d, a, b, c, x[k+14], S22, 0xC33707D6);
					c = GG(c, d, a, b, x[k+3],  S23, 0xF4D50D87);
					b = GG(b, c, d, a, x[k+8],  S24, 0x455A14ED);
					a = GG(a, b, c, d, x[k+13], S21, 0xA9E3E905);
					d = GG(d, a, b, c, x[k+2],  S22, 0xFCEFA3F8);
					c = GG(c, d, a, b, x[k+7],  S23, 0x676F02D9);
					b = GG(b, c, d, a, x[k+12], S24, 0x8D2A4C8A);
					a = HH(a, b, c, d, x[k+5],  S31, 0xFFFA3942);
					d = HH(d, a, b, c, x[k+8],  S32, 0x8771F681);
					c = HH(c, d, a, b, x[k+11], S33, 0x6D9D6122);
					b = HH(b, c, d, a, x[k+14], S34, 0xFDE5380C);
					a = HH(a, b, c, d, x[k+1],  S31, 0xA4BEEA44);
					d = HH(d, a, b, c, x[k+4],  S32, 0x4BDECFA9);
					c = HH(c, d, a, b, x[k+7],  S33, 0xF6BB4B60);
					b = HH(b, c, d, a, x[k+10], S34, 0xBEBFBC70);
					a = HH(a, b, c, d, x[k+13], S31, 0x289B7EC6);
					d = HH(d, a, b, c, x[k+0],  S32, 0xEAA127FA);
					c = HH(c, d, a, b, x[k+3],  S33, 0xD4EF3085);
					b = HH(b, c, d, a, x[k+6],  S34, 0x4881D05);
					a = HH(a, b, c, d, x[k+9],  S31, 0xD9D4D039);
					d = HH(d, a, b, c, x[k+12], S32, 0xE6DB99E5);
					c = HH(c, d, a, b, x[k+15], S33, 0x1FA27CF8);
					b = HH(b, c, d, a, x[k+2],  S34, 0xC4AC5665);
					a = II(a, b, c, d, x[k+0],  S41, 0xF4292244);
					d = II(d, a, b, c, x[k+7],  S42, 0x432AFF97);
					c = II(c, d, a, b, x[k+14], S43, 0xAB9423A7);
					b = II(b, c, d, a, x[k+5],  S44, 0xFC93A039);
					a = II(a, b, c, d, x[k+12], S41, 0x655B59C3);
					d = II(d, a, b, c, x[k+3],  S42, 0x8F0CCC92);
					c = II(c, d, a, b, x[k+10], S43, 0xFFEFF47D);
					b = II(b, c, d, a, x[k+1],  S44, 0x85845DD1);
					a = II(a, b, c, d, x[k+8],  S41, 0x6FA87E4F);
					d = II(d, a, b, c, x[k+15], S42, 0xFE2CE6E0);
					c = II(c, d, a, b, x[k+6],  S43, 0xA3014314);
					b = II(b, c, d, a, x[k+13], S44, 0x4E0811A1);
					a = II(a, b, c, d, x[k+4],  S41, 0xF7537E82);
					d = II(d, a, b, c, x[k+11], S42, 0xBD3AF235);
					c = II(c, d, a, b, x[k+2],  S43, 0x2AD7D2BB);
					b = II(b, c, d, a, x[k+9],  S44, 0xEB86D391);
					a = addUnsigned(a, AA);
					b = addUnsigned(b, BB);
					c = addUnsigned(c, CC);
					d = addUnsigned(d, DD);
				}
				var tempValue = wordToHex(a) + wordToHex(b) + wordToHex(c) + wordToHex(d);
				return tempValue.toLowerCase();
			}
		});
	})(jQuery);
// 常用到的JS，封装在此
// 水平比较菜:)
;(function($){
	$.dsy = {
		//刷新
		refresh: function(){
			var url = window.location.href;
			url = this.nocache(url);
			this.go(url);
		},
		reload:function(){
			this.refresh();
		},
		go: function(url,ext){
			if(!url){
				return false;
			}
			if(ext || ext == 'undefined'){
				url = this.nocache(url);
			}			
			window.location.href = url;
		},
		ajax:function(url,obj,async){
			if(!url){
				return false;
			}
			url = this.nocache(url);
			if(!obj || obj == 'undefined'){
				return $.ajax({'url':url,cache:false,async:false,dataType:"html"}).responseText;
			}else{
				async = (!async || async == 'undefined') ? false : true;
				$.ajax({
					'url':url,
					'cache':false,
					'async':async,
					'dataType':'html',
					'success':function(rs){
						(obj)(rs);
					}
				});
			}
		},
		json:function(url,obj,async){
			if(!url){
				return false;
			}
			url = this.nocache(url);
			if(!obj || obj == 'undefined'){
				var info = $.ajax({'url':url,cache:false,async:false,dataType:"html"}).responseText;
				return $.parseJSON(info);
			}else{
				async = (!async || async == 'undefined') ? false : true;
				$.ajax({
					'url':url,
					'cache':false,
					'async':async,
					'dataType':'json',
					'success':function(rs){
						(obj)(rs);
					}
				});
			}
		},
		nocache: function(url){
			url = url.replace(/&amp;/g,'&');
			if(url.indexOf('_noCache') != -1){
				url = url.replace(/\_noCache=[0-9\.]+/,'_noCache='+Math.random());
			}else{
				url += url.indexOf('?') != -1 ? '&' : '?';
				url += '_noCache='+Math.random();
			}
			return url;
		}
	};

})(jQuery);

//JS操作全选，反选等工具
//常见的input属性操作
;(function($){

	$.input = {
		obj: function(id){
			if(id && id != 'undefined'){
				if(id.match(/^[a-zA-Z0-9\-\_]{1,}$/)){
					id = '#'+id+" input[type=checkbox]";
				}
				var t = $(id);
			}else{
				var t = $('input[type=checkbox]');
			}
			return t;
		},
		//全选，调用方法：$.input.checkbox_all(id);
		checkbox_all: function(id){
			var t = this.obj(id);
			t.each(function(){$(this).prop("checked",true);});
			t = null;
		},
		//全不选，调用方法：$.input.checkbox_none(id);
		checkbox_none: function(id){
			var t = this.obj(id);
			t.each(function(){$(this).prop("checked",false);});
			t = null;
		},
		//每次选5个（total默认值为5） $.input.checkbox_not_all(id,5);
		checkbox_not_all: function(id,total){
			var t = this.obj(id);
			var num = 0;
			if(!total || parseInt(total)<5) total = 5;
			t.each(function(){
				if($(this).prop("checked") != true && num<total)
				{
					$(this).prop("checked",true);
					num++;
				}
			});
			t = num = total = null;
		},
		//反选，调用方法：$.input.checkbox_anti(id);
		checkbox_anti: function(id){
			var t = this.obj(id);
			t.each(function(i){
				if($(this).prop("checked") == true || $(this).prop("checked") == "checked"){
					$(this).prop("checked",false);
				}else{
					$(this).prop("checked",true);
				}
			});
			t = null;
		},

		//合并复选框值信息，以英文逗号隔开
		checkbox_join: function(id,type){
			var cv = this.obj(id);
			var idarray = new Array();
			var m = 0;
			cv.each(function()
			{
				if(type == "all"){
					idarray[m] = $(this).val();
					m++;
				}else if(type == "unchecked"){
					if($(this).prop("checked") == false){
						idarray[m] = $(this).val();
						m++;
					}
				}else{
					if($(this).prop("checked") == true || $(this).prop("checked") == "checked"){
						idarray[m] = $(this).val();
						m++;
					}
				}
			});
			var tid = idarray.join(",");
			cv = idarray = m = null;
			return tid;
		}

	};

})(jQuery);

/*
 * Released under the MIT, BSD, and LGPL Licenses.
 * 字符串编码，使用方法： $.str.encode(string);
 * 字符串合并，使用方法： $.str.join(str1,str2);
 *
 * Date: 2011-12-01 11:47
 */
;(function($){

	$.str = {
		join: function(str1,str2){
			if(str1 == "" && str2 == "" ) return false;
			if(str1 == "") return str2;
			if(str2 == "") return str1;
			var string = str1 + "," +str2;
			var array = string.split(",");
			array = $.unique(array);
			var string = array.join(",");
			return string ? string : false;
		},
		identifier: function(str){
			//验证标识串，系统中，大量使用标识串，将此检测合并进来
			var chk = /^[A-Za-z]+[a-zA-Z0-9_\-]*$/;
			return chk.test(str);
		},
		encode: function(s1){
			return encodeURIComponent(s1);
		}
	};

	$.identifier = function(str){
		return $.str.identifier(str);
	};
})(jQuery);


function identifier(str)
{
	return $.str.identifier(str);
}

// 读取cookie信息 $.cookie.get("变量名");
// 设置cookie信息 $.cookie.set("变量名","值","过期时间");
// 删除Cookie信息 $.cookie.del("变量名");

;(function($){
	$.cookie = {
		get: function(name) {
			var cookieValue = "";
			var search = name + "=";
			if(document.cookie.length > 0)
			{
				var offset = document.cookie.indexOf(search);
				if (offset != -1)
				{
					offset += search.length;
					var end = document.cookie.indexOf(";", offset);
					if (end == -1)
					{
						end = document.cookie.length;
					}
					cookieValue = unescape(document.cookie.substring(offset, end));
					end = null;
				}
				search = offset = null;
			}
			return cookieValue;
		},
		set: function(cookieName,cookieValue,DayValue){
			var expire = "";
			var day_value=1;
			if(DayValue!=null)
			{
				day_value=DayValue;
			}
			expire = new Date((new Date()).getTime() + day_value * 86400000);
			expire = "; expires=" + expire.toGMTString();
			document.cookie = cookieName + "=" + escape(cookieValue) +";path=/"+ expire;
			cookieName = cookieValue = DayValue = day_value = expire = null;
		},
		del: function(cookieName){
			var expire = "";
			expire = new Date((new Date()).getTime() - 1 );
			expire = "; expires=" + expire.toGMTString();
			document.cookie = cookieName + "=" + escape("") +";path=/"+ expire;		
			cookieName = expire = null;
		}
	};
})(jQuery);


//异步加载js
function load_js(url)
{
    if(!url || url == "undefined") return false;
    var lst = url.split(",");
    var lst_count = lst.length;
    var elist = new Array();
    var tm = 0;
    $("script").each(function(t){
        var src = $(this).attr("src");
        if(src && src != 'undefined'){
            elist[tm] = src;
            tm++;
        }
    });
    var html = '';
    for(var i=0;i<lst_count;i++)
    {
        if($.inArray(lst[i],elist) < 0)
        {
            html += '<script type="text/javascript" src="'+lst[i]+'"></script>';
        }
    }
    $("head").append(html);
}

// 同步加载Ajax，返回字符串
function get_ajax(turl)
{
    return $.dsy.ajax(turl);
}

// 同步加载Ajax，返回JSON数组
function json_ajax(turl)
{
    return $.dsy.json(turl);
}

function p_lang(str)
{
    if(!str || str == 'undefined'){
        return false;
    }
    if(lang && lang[str]){
        return lang[str];
    }
    return str;
}

// 异步加载Ajax，执行函数
function ajax_async(turl,func,type)
{
    if(!turl || turl == "undefined")
    {
        return false;
    }
    if(!func || func == "undefined")
    {
        return false;
    }
    if(!type || type == "undefined")
    {
        type = "json";
    }
    if(type != "html" && type != "json" && type != "text" && type != "xml")
    {
        type = "json";
    }
    turl = $.dsy.nocache(turl);
    $.ajax({
        'url': turl,
        'cache': false,
        'async': true,
        'dataType': type,
        'success': function(rs){
            (func)(rs);
        }
    });
}

// 跳转页面
function direct(url)
{
    if(!url || url == "undefined") url = window.location.href;
    $.dsy.go(url);
}

//自动刷新
function auto_refresh(rs)
{
    $.dsy.reload();
}

function autosave_callback(rs)
{
    return true;
}

/* 计算字符数长度，中文等同于三个字符，英文为一个字符 */
function strlen(str)
{
    var len = str.length;
    var reLen = 0;
    for (var i = 0; i < len; i++)
    {
        if (str.charCodeAt(i) < 27 || str.charCodeAt(i) > 126)
        {
            reLen += 3;
        } else {
            reLen++;
        }
    }
    if(reLen > 1024 && reLen < (1024 * 1024))
    {
        var reLen = (parseFloat(reLen / 1024).toFixed(3)).toString() + "KB";
    }
    else if(reLen > (1024 * 1024) && reLen < (1024 * 1024 * 1024))
    {
        var reLen = (parseFloat(reLen / (1024 * 1024)).toFixed(3)).toString() + "MB";
    }
    if(!reLen) reLen = "0";
    return reLen;
}


//友情提示
function tips(content,time,id)
{
    if(!time || time == "undefined") time = 1.5;
    if(!id || id == "undefind")
    {
        $.dialog.tips(content,time);
    }
    else
    {
        return $.dialog({
            id: 'Tips',
            title: false,
            cancel: false,
            fixed: true,
            lock: false,
            focus: id,
            resize: false
        }).content(content).time(time || 1.5);
    }
}

/* 计算数组或对像中的个数 */
function count(id)
{
    var t = typeof id;
    if(t == 'string') return id.length;
    if(t == 'object')
    {
        var n = 0;
        for(var i in id)
        {
            n++;
        }
        return n;
    }
    return false;
}

//JS语言包替换
function lang_replace(str,id,val)
{
    if(!str || str == "undefined") return false;
    if(!id || !val) return str;
    return str.replace("{"+id+"}",val);
}

/*!
 * jQuery Form Plugin
 * version: 3.51.0-2014.06.20
 * Requires jQuery v1.5 or later
 * Copyright (c) 2014 M. Alsup
 * Examples and documentation at: http://malsup.com/jquery/form/
 * Project repository: https://github.com/malsup/form
 * Dual licensed under the MIT and GPL licenses.
 * https://github.com/malsup/form#copyright-and-license
 */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):e("undefined"!=typeof jQuery?jQuery:window.Zepto)}(function(e){"use strict";function t(t){var r=t.data;t.isDefaultPrevented()||(t.preventDefault(),e(t.target).ajaxSubmit(r))}function r(t){var r=t.target,a=e(r);if(!a.is("[type=submit],[type=image]")){var n=a.closest("[type=submit]");if(0===n.length)return;r=n[0]}var i=this;if(i.clk=r,"image"==r.type)if(void 0!==t.offsetX)i.clk_x=t.offsetX,i.clk_y=t.offsetY;else if("function"==typeof e.fn.offset){var o=a.offset();i.clk_x=t.pageX-o.left,i.clk_y=t.pageY-o.top}else i.clk_x=t.pageX-r.offsetLeft,i.clk_y=t.pageY-r.offsetTop;setTimeout(function(){i.clk=i.clk_x=i.clk_y=null},100)}function a(){if(e.fn.ajaxSubmit.debug){var t="[jquery.form] "+Array.prototype.join.call(arguments,"");window.console&&window.console.log?window.console.log(t):window.opera&&window.opera.postError&&window.opera.postError(t)}}var n={};n.fileapi=void 0!==e("<input type='file'/>").get(0).files,n.formdata=void 0!==window.FormData;var i=!!e.fn.prop;e.fn.attr2=function(){if(!i)return this.attr.apply(this,arguments);var e=this.prop.apply(this,arguments);return e&&e.jquery||"string"==typeof e?e:this.attr.apply(this,arguments)},e.fn.ajaxSubmit=function(t){function r(r){var a,n,i=e.param(r,t.traditional).split("&"),o=i.length,s=[];for(a=0;o>a;a++)i[a]=i[a].replace(/\+/g," "),n=i[a].split("="),s.push([decodeURIComponent(n[0]),decodeURIComponent(n[1])]);return s}function o(a){for(var n=new FormData,i=0;i<a.length;i++)n.append(a[i].name,a[i].value);if(t.extraData){var o=r(t.extraData);for(i=0;i<o.length;i++)o[i]&&n.append(o[i][0],o[i][1])}t.data=null;var s=e.extend(!0,{},e.ajaxSettings,t,{contentType:!1,processData:!1,cache:!1,type:u||"POST"});t.uploadProgress&&(s.xhr=function(){var r=e.ajaxSettings.xhr();return r.upload&&r.upload.addEventListener("progress",function(e){var r=0,a=e.loaded||e.position,n=e.total;e.lengthComputable&&(r=Math.ceil(a/n*100)),t.uploadProgress(e,a,n,r)},!1),r}),s.data=null;var c=s.beforeSend;return s.beforeSend=function(e,r){r.data=t.formData?t.formData:n,c&&c.call(this,e,r)},e.ajax(s)}function s(r){function n(e){var t=null;try{e.contentWindow&&(t=e.contentWindow.document)}catch(r){a("cannot get iframe.contentWindow document: "+r)}if(t)return t;try{t=e.contentDocument?e.contentDocument:e.document}catch(r){a("cannot get iframe.contentDocument: "+r),t=e.document}return t}function o(){function t(){try{var e=n(g).readyState;a("state = "+e),e&&"uninitialized"==e.toLowerCase()&&setTimeout(t,50)}catch(r){a("Server abort: ",r," (",r.name,")"),s(k),j&&clearTimeout(j),j=void 0}}var r=f.attr2("target"),i=f.attr2("action"),o="multipart/form-data",c=f.attr("enctype")||f.attr("encoding")||o;w.setAttribute("target",p),(!u||/post/i.test(u))&&w.setAttribute("method","POST"),i!=m.url&&w.setAttribute("action",m.url),m.skipEncodingOverride||u&&!/post/i.test(u)||f.attr({encoding:"multipart/form-data",enctype:"multipart/form-data"}),m.timeout&&(j=setTimeout(function(){T=!0,s(D)},m.timeout));var l=[];try{if(m.extraData)for(var d in m.extraData)m.extraData.hasOwnProperty(d)&&l.push(e.isPlainObject(m.extraData[d])&&m.extraData[d].hasOwnProperty("name")&&m.extraData[d].hasOwnProperty("value")?e('<input type="hidden" name="'+m.extraData[d].name+'">').val(m.extraData[d].value).appendTo(w)[0]:e('<input type="hidden" name="'+d+'">').val(m.extraData[d]).appendTo(w)[0]);m.iframeTarget||v.appendTo("body"),g.attachEvent?g.attachEvent("onload",s):g.addEventListener("load",s,!1),setTimeout(t,15);try{w.submit()}catch(h){var x=document.createElement("form").submit;x.apply(w)}}finally{w.setAttribute("action",i),w.setAttribute("enctype",c),r?w.setAttribute("target",r):f.removeAttr("target"),e(l).remove()}}function s(t){if(!x.aborted&&!F){if(M=n(g),M||(a("cannot access response document"),t=k),t===D&&x)return x.abort("timeout"),void S.reject(x,"timeout");if(t==k&&x)return x.abort("server abort"),void S.reject(x,"error","server abort");if(M&&M.location.href!=m.iframeSrc||T){g.detachEvent?g.detachEvent("onload",s):g.removeEventListener("load",s,!1);var r,i="success";try{if(T)throw"timeout";var o="xml"==m.dataType||M.XMLDocument||e.isXMLDoc(M);if(a("isXml="+o),!o&&window.opera&&(null===M.body||!M.body.innerHTML)&&--O)return a("requeing onLoad callback, DOM not available"),void setTimeout(s,250);var u=M.body?M.body:M.documentElement;x.responseText=u?u.innerHTML:null,x.responseXML=M.XMLDocument?M.XMLDocument:M,o&&(m.dataType="xml"),x.getResponseHeader=function(e){var t={"content-type":m.dataType};return t[e.toLowerCase()]},u&&(x.status=Number(u.getAttribute("status"))||x.status,x.statusText=u.getAttribute("statusText")||x.statusText);var c=(m.dataType||"").toLowerCase(),l=/(json|script|text)/.test(c);if(l||m.textarea){var f=M.getElementsByTagName("textarea")[0];if(f)x.responseText=f.value,x.status=Number(f.getAttribute("status"))||x.status,x.statusText=f.getAttribute("statusText")||x.statusText;else if(l){var p=M.getElementsByTagName("pre")[0],h=M.getElementsByTagName("body")[0];p?x.responseText=p.textContent?p.textContent:p.innerText:h&&(x.responseText=h.textContent?h.textContent:h.innerText)}}else"xml"==c&&!x.responseXML&&x.responseText&&(x.responseXML=X(x.responseText));try{E=_(x,c,m)}catch(y){i="parsererror",x.error=r=y||i}}catch(y){a("error caught: ",y),i="error",x.error=r=y||i}x.aborted&&(a("upload aborted"),i=null),x.status&&(i=x.status>=200&&x.status<300||304===x.status?"success":"error"),"success"===i?(m.success&&m.success.call(m.context,E,"success",x),S.resolve(x.responseText,"success",x),d&&e.event.trigger("ajaxSuccess",[x,m])):i&&(void 0===r&&(r=x.statusText),m.error&&m.error.call(m.context,x,i,r),S.reject(x,"error",r),d&&e.event.trigger("ajaxError",[x,m,r])),d&&e.event.trigger("ajaxComplete",[x,m]),d&&!--e.active&&e.event.trigger("ajaxStop"),m.complete&&m.complete.call(m.context,x,i),F=!0,m.timeout&&clearTimeout(j),setTimeout(function(){m.iframeTarget?v.attr("src",m.iframeSrc):v.remove(),x.responseXML=null},100)}}}var c,l,m,d,p,v,g,x,y,b,T,j,w=f[0],S=e.Deferred();if(S.abort=function(e){x.abort(e)},r)for(l=0;l<h.length;l++)c=e(h[l]),i?c.prop("disabled",!1):c.removeAttr("disabled");if(m=e.extend(!0,{},e.ajaxSettings,t),m.context=m.context||m,p="jqFormIO"+(new Date).getTime(),m.iframeTarget?(v=e(m.iframeTarget),b=v.attr2("name"),b?p=b:v.attr2("name",p)):(v=e('<iframe name="'+p+'" src="'+m.iframeSrc+'" />'),v.css({position:"absolute",top:"-1000px",left:"-1000px"})),g=v[0],x={aborted:0,responseText:null,responseXML:null,status:0,statusText:"n/a",getAllResponseHeaders:function(){},getResponseHeader:function(){},setRequestHeader:function(){},abort:function(t){var r="timeout"===t?"timeout":"aborted";a("aborting upload... "+r),this.aborted=1;try{g.contentWindow.document.execCommand&&g.contentWindow.document.execCommand("Stop")}catch(n){}v.attr("src",m.iframeSrc),x.error=r,m.error&&m.error.call(m.context,x,r,t),d&&e.event.trigger("ajaxError",[x,m,r]),m.complete&&m.complete.call(m.context,x,r)}},d=m.global,d&&0===e.active++&&e.event.trigger("ajaxStart"),d&&e.event.trigger("ajaxSend",[x,m]),m.beforeSend&&m.beforeSend.call(m.context,x,m)===!1)return m.global&&e.active--,S.reject(),S;if(x.aborted)return S.reject(),S;y=w.clk,y&&(b=y.name,b&&!y.disabled&&(m.extraData=m.extraData||{},m.extraData[b]=y.value,"image"==y.type&&(m.extraData[b+".x"]=w.clk_x,m.extraData[b+".y"]=w.clk_y)));var D=1,k=2,A=e("meta[name=csrf-token]").attr("content"),L=e("meta[name=csrf-param]").attr("content");L&&A&&(m.extraData=m.extraData||{},m.extraData[L]=A),m.forceSync?o():setTimeout(o,10);var E,M,F,O=50,X=e.parseXML||function(e,t){return window.ActiveXObject?(t=new ActiveXObject("Microsoft.XMLDOM"),t.async="false",t.loadXML(e)):t=(new DOMParser).parseFromString(e,"text/xml"),t&&t.documentElement&&"parsererror"!=t.documentElement.nodeName?t:null},C=e.parseJSON||function(e){return window.eval("("+e+")")},_=function(t,r,a){var n=t.getResponseHeader("content-type")||"",i="xml"===r||!r&&n.indexOf("xml")>=0,o=i?t.responseXML:t.responseText;return i&&"parsererror"===o.documentElement.nodeName&&e.error&&e.error("parsererror"),a&&a.dataFilter&&(o=a.dataFilter(o,r)),"string"==typeof o&&("json"===r||!r&&n.indexOf("json")>=0?o=C(o):("script"===r||!r&&n.indexOf("javascript")>=0)&&e.globalEval(o)),o};return S}if(!this.length)return a("ajaxSubmit: skipping submit process - no element selected"),this;var u,c,l,f=this;"function"==typeof t?t={success:t}:void 0===t&&(t={}),u=t.type||this.attr2("method"),c=t.url||this.attr2("action"),l="string"==typeof c?e.trim(c):"",l=l||window.location.href||"",l&&(l=(l.match(/^([^#]+)/)||[])[1]),t=e.extend(!0,{url:l,success:e.ajaxSettings.success,type:u||e.ajaxSettings.type,iframeSrc:/^https/i.test(window.location.href||"")?"javascript:false":"about:blank"},t);var m={};if(this.trigger("form-pre-serialize",[this,t,m]),m.veto)return a("ajaxSubmit: submit vetoed via form-pre-serialize trigger"),this;if(t.beforeSerialize&&t.beforeSerialize(this,t)===!1)return a("ajaxSubmit: submit aborted via beforeSerialize callback"),this;var d=t.traditional;void 0===d&&(d=e.ajaxSettings.traditional);var p,h=[],v=this.formToArray(t.semantic,h);if(t.data&&(t.extraData=t.data,p=e.param(t.data,d)),t.beforeSubmit&&t.beforeSubmit(v,this,t)===!1)return a("ajaxSubmit: submit aborted via beforeSubmit callback"),this;if(this.trigger("form-submit-validate",[v,this,t,m]),m.veto)return a("ajaxSubmit: submit vetoed via form-submit-validate trigger"),this;var g=e.param(v,d);p&&(g=g?g+"&"+p:p),"GET"==t.type.toUpperCase()?(t.url+=(t.url.indexOf("?")>=0?"&":"?")+g,t.data=null):t.data=g;var x=[];if(t.resetForm&&x.push(function(){f.resetForm()}),t.clearForm&&x.push(function(){f.clearForm(t.includeHidden)}),!t.dataType&&t.target){var y=t.success||function(){};x.push(function(r){var a=t.replaceTarget?"replaceWith":"html";e(t.target)[a](r).each(y,arguments)})}else t.success&&x.push(t.success);if(t.success=function(e,r,a){for(var n=t.context||this,i=0,o=x.length;o>i;i++)x[i].apply(n,[e,r,a||f,f])},t.error){var b=t.error;t.error=function(e,r,a){var n=t.context||this;b.apply(n,[e,r,a,f])}}if(t.complete){var T=t.complete;t.complete=function(e,r){var a=t.context||this;T.apply(a,[e,r,f])}}var j=e("input[type=file]:enabled",this).filter(function(){return""!==e(this).val()}),w=j.length>0,S="multipart/form-data",D=f.attr("enctype")==S||f.attr("encoding")==S,k=n.fileapi&&n.formdata;a("fileAPI :"+k);var A,L=(w||D)&&!k;t.iframe!==!1&&(t.iframe||L)?t.closeKeepAlive?e.get(t.closeKeepAlive,function(){A=s(v)}):A=s(v):A=(w||D)&&k?o(v):e.ajax(t),f.removeData("jqxhr").data("jqxhr",A);for(var E=0;E<h.length;E++)h[E]=null;return this.trigger("form-submit-notify",[this,t]),this},e.fn.ajaxForm=function(n){if(n=n||{},n.delegation=n.delegation&&e.isFunction(e.fn.on),!n.delegation&&0===this.length){var i={s:this.selector,c:this.context};return!e.isReady&&i.s?(a("DOM not ready, queuing ajaxForm"),e(function(){e(i.s,i.c).ajaxForm(n)}),this):(a("terminating; zero elements found by selector"+(e.isReady?"":" (DOM not ready)")),this)}return n.delegation?(e(document).off("submit.form-plugin",this.selector,t).off("click.form-plugin",this.selector,r).on("submit.form-plugin",this.selector,n,t).on("click.form-plugin",this.selector,n,r),this):this.ajaxFormUnbind().bind("submit.form-plugin",n,t).bind("click.form-plugin",n,r)},e.fn.ajaxFormUnbind=function(){return this.unbind("submit.form-plugin click.form-plugin")},e.fn.formToArray=function(t,r){var a=[];if(0===this.length)return a;var i,o=this[0],s=this.attr("id"),u=t?o.getElementsByTagName("*"):o.elements;if(u&&!/MSIE [678]/.test(navigator.userAgent)&&(u=e(u).get()),s&&(i=e(':input[form="'+s+'"]').get(),i.length&&(u=(u||[]).concat(i))),!u||!u.length)return a;var c,l,f,m,d,p,h;for(c=0,p=u.length;p>c;c++)if(d=u[c],f=d.name,f&&!d.disabled)if(t&&o.clk&&"image"==d.type)o.clk==d&&(a.push({name:f,value:e(d).val(),type:d.type}),a.push({name:f+".x",value:o.clk_x},{name:f+".y",value:o.clk_y}));else if(m=e.fieldValue(d,!0),m&&m.constructor==Array)for(r&&r.push(d),l=0,h=m.length;h>l;l++)a.push({name:f,value:m[l]});else if(n.fileapi&&"file"==d.type){r&&r.push(d);var v=d.files;if(v.length)for(l=0;l<v.length;l++)a.push({name:f,value:v[l],type:d.type});else a.push({name:f,value:"",type:d.type})}else null!==m&&"undefined"!=typeof m&&(r&&r.push(d),a.push({name:f,value:m,type:d.type,required:d.required}));if(!t&&o.clk){var g=e(o.clk),x=g[0];f=x.name,f&&!x.disabled&&"image"==x.type&&(a.push({name:f,value:g.val()}),a.push({name:f+".x",value:o.clk_x},{name:f+".y",value:o.clk_y}))}return a},e.fn.formSerialize=function(t){return e.param(this.formToArray(t))},e.fn.fieldSerialize=function(t){var r=[];return this.each(function(){var a=this.name;if(a){var n=e.fieldValue(this,t);if(n&&n.constructor==Array)for(var i=0,o=n.length;o>i;i++)r.push({name:a,value:n[i]});else null!==n&&"undefined"!=typeof n&&r.push({name:this.name,value:n})}}),e.param(r)},e.fn.fieldValue=function(t){for(var r=[],a=0,n=this.length;n>a;a++){var i=this[a],o=e.fieldValue(i,t);null===o||"undefined"==typeof o||o.constructor==Array&&!o.length||(o.constructor==Array?e.merge(r,o):r.push(o))}return r},e.fieldValue=function(t,r){var a=t.name,n=t.type,i=t.tagName.toLowerCase();if(void 0===r&&(r=!0),r&&(!a||t.disabled||"reset"==n||"button"==n||("checkbox"==n||"radio"==n)&&!t.checked||("submit"==n||"image"==n)&&t.form&&t.form.clk!=t||"select"==i&&-1==t.selectedIndex))return null;if("select"==i){var o=t.selectedIndex;if(0>o)return null;for(var s=[],u=t.options,c="select-one"==n,l=c?o+1:u.length,f=c?o:0;l>f;f++){var m=u[f];if(m.selected){var d=m.value;if(d||(d=m.attributes&&m.attributes.value&&!m.attributes.value.specified?m.text:m.value),c)return d;s.push(d)}}return s}return e(t).val()},e.fn.clearForm=function(t){return this.each(function(){e("input,select,textarea",this).clearFields(t)})},e.fn.clearFields=e.fn.clearInputs=function(t){var r=/^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;return this.each(function(){var a=this.type,n=this.tagName.toLowerCase();r.test(a)||"textarea"==n?this.value="":"checkbox"==a||"radio"==a?this.checked=!1:"select"==n?this.selectedIndex=-1:"file"==a?/MSIE/.test(navigator.userAgent)?e(this).replaceWith(e(this).clone(!0)):e(this).val(""):t&&(t===!0&&/hidden/.test(a)||"string"==typeof t&&e(this).is(t))&&(this.value="")})},e.fn.resetForm=function(){return this.each(function(){("function"==typeof this.reset||"object"==typeof this.reset&&!this.reset.nodeType)&&this.reset()})},e.fn.enable=function(e){return void 0===e&&(e=!0),this.each(function(){this.disabled=!e})},e.fn.selected=function(t){return void 0===t&&(t=!0),this.each(function(){var r=this.type;if("checkbox"==r||"radio"==r)this.checked=t;else if("option"==this.tagName.toLowerCase()){var a=e(this).parent("select");t&&a[0]&&"select-one"==a[0].type&&a.find("option").selected(!1),this.selected=t}})},e.fn.ajaxSubmit.debug=!1});
/*! jQuery JSON plugin 2.4.0 | code.google.com/p/jquery-json */
(function($){'use strict';var escape=/["\\\x00-\x1f\x7f-\x9f]/g,meta={'\b':'\\b','\t':'\\t','\n':'\\n','\f':'\\f','\r':'\\r','"':'\\"','\\':'\\\\'},hasOwn=Object.prototype.hasOwnProperty;$.toJSON=typeof JSON==='object'&&JSON.stringify?JSON.stringify:function(o){if(o===null){return'null';}
var pairs,k,name,val,type=$.type(o);if(type==='undefined'){return undefined;}
if(type==='number'||type==='boolean'){return String(o);}
if(type==='string'){return $.quoteString(o);}
if(typeof o.toJSON==='function'){return $.toJSON(o.toJSON());}
if(type==='date'){var month=o.getUTCMonth()+1,day=o.getUTCDate(),year=o.getUTCFullYear(),hours=o.getUTCHours(),minutes=o.getUTCMinutes(),seconds=o.getUTCSeconds(),milli=o.getUTCMilliseconds();if(month<10){month='0'+month;}
if(day<10){day='0'+day;}
if(hours<10){hours='0'+hours;}
if(minutes<10){minutes='0'+minutes;}
if(seconds<10){seconds='0'+seconds;}
if(milli<100){milli='0'+milli;}
if(milli<10){milli='0'+milli;}
return'"'+year+'-'+month+'-'+day+'T'+
hours+':'+minutes+':'+seconds+'.'+milli+'Z"';}
pairs=[];if($.isArray(o)){for(k=0;k<o.length;k++){pairs.push($.toJSON(o[k])||'null');}
return'['+pairs.join(',')+']';}
if(typeof o==='object'){for(k in o){if(hasOwn.call(o,k)){type=typeof k;if(type==='number'){name='"'+k+'"';}else if(type==='string'){name=$.quoteString(k);}else{continue;}
type=typeof o[k];if(type!=='function'&&type!=='undefined'){val=$.toJSON(o[k]);pairs.push(name+':'+val);}}}
return'{'+pairs.join(',')+'}';}};$.evalJSON=typeof JSON==='object'&&JSON.parse?JSON.parse:function(str){return eval('('+str+')');};$.secureEvalJSON=typeof JSON==='object'&&JSON.parse?JSON.parse:function(str){var filtered=str.replace(/\\["\\\/bfnrtu]/g,'@').replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,']').replace(/(?:^|:|,)(?:\s*\[)+/g,'');if(/^[\],:{}\s]*$/.test(filtered)){return eval('('+str+')');}
throw new SyntaxError('Error parsing JSON, source is not valid.');};$.quoteString=function(str){if(str.match(escape)){return'"'+str.replace(escape,function(a){var c=meta[a];if(typeof c==='string'){return c;}
c=a.charCodeAt();return'\\u00'+Math.floor(c/16).toString(16)+(c%16).toString(16);})+'"';}
return'"'+str+'"';};}(jQuery));
/*!
 * artDialog 4.1.7
 * Date: 2013-03-03 08:04
 * http://code.google.com/p/artdialog/
 * (c) 2009-2012 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */
;(function($,window,undefined){$.noop=$.noop||function(){};var _box,_thisScript,_skin,_path,_count=0,_$window=$(window),_$document=$(document),_$html=$("html"),_elem=document.documentElement,_isIE6=window.VBArray&&!window.XMLHttpRequest,_isMobile="createTouch" in document&&!("onmousemove" in _elem)||/(iPhone|iPad|iPod)/i.test(navigator.userAgent),_expando="artDialog"+ +new Date;var artDialog=function(config,ok,cancel){config=config||{};if(typeof config==="string"||config.nodeType===1){config={content:config,fixed:!_isMobile};}var api,defaults=artDialog.defaults,elem=config.follow=this.nodeType===1&&this||config.follow;for(var i in defaults){if(config[i]===undefined){config[i]=defaults[i];}}$.each({ok:"yesFn",cancel:"noFn",close:"closeFn",init:"initFn",okVal:"yesText",cancelVal:"noText"},function(i,o){config[i]=config[i]!==undefined?config[i]:config[o];});if(typeof elem==="string"){elem=$(elem)[0];}config.id=elem&&elem[_expando+"follow"]||config.id||_expando+_count;api=artDialog.list[config.id];if(elem&&api){return api.follow(elem).zIndex().focus();}if(api){return api.zIndex().focus();}if(_isMobile){config.fixed=false;}if(!$.isArray(config.button)){config.button=config.button?[config.button]:[];}if(ok!==undefined){config.ok=ok;}if(cancel!==undefined){config.cancel=cancel;}config.ok&&config.button.push({name:config.okVal,callback:config.ok,focus:true});config.cancel&&config.button.push({name:config.cancelVal,callback:config.cancel});artDialog.defaults.zIndex=config.zIndex;_count++;return artDialog.list[config.id]=_box?_box._init(config):new artDialog.fn._init(config);};artDialog.fn=artDialog.prototype={version:"4.1.7",closed:true,_init:function(config){var that=this,DOM,icon=config.icon,iconBg=icon&&(_isIE6?{png:"icons/"+icon+".png"}:{backgroundImage:"url('"+config.path+"/images/"+icon+".png')"});that.closed=false;that.config=config;that.DOM=DOM=that.DOM||that._getDOM();DOM.wrap.addClass(config.skin);DOM.close[config.cancel===false?"hide":"show"]();DOM.icon[0].style.display=icon?"":"none";DOM.iconBg.css(iconBg||{background:"none"});DOM.se.css("cursor",config.resize?"se-resize":"auto");DOM.title.css("cursor",config.drag?"move":"auto");DOM.content.css("padding",config.padding);that[config.show?"show":"hide"](true);that.button(config.button).title(config.title).content(config.content,true).size(config.width,config.height).time(config.time);config.follow?that.follow(config.follow):that.position(config.left,config.top);that.zIndex().focus();config.lock&&that.lock();that._addEvent();that._ie6PngFix();_box=null;config.init&&config.init.call(that,window);return that;},content:function(msg){var prev,next,parent,display,that=this,DOM=that.DOM,wrap=DOM.wrap[0],width=wrap.offsetWidth,height=wrap.offsetHeight,left=parseInt(wrap.style.left),top=parseInt(wrap.style.top),cssWidth=wrap.style.width,$content=DOM.content,content=$content[0];that._elemBack&&that._elemBack();wrap.style.width="auto";if(msg===undefined){return content;}if(typeof msg==="string"){$content.html(msg);}else{if(msg&&msg.nodeType===1){display=msg.style.display;prev=msg.previousSibling;next=msg.nextSibling;parent=msg.parentNode;that._elemBack=function(){if(prev&&prev.parentNode){prev.parentNode.insertBefore(msg,prev.nextSibling);}else{if(next&&next.parentNode){next.parentNode.insertBefore(msg,next);}else{if(parent){parent.appendChild(msg);}}}msg.style.display=display;that._elemBack=null;};$content.html("");content.appendChild(msg);msg.style.display="block";}}if(!arguments[1]){if(that.config.follow){that.follow(that.config.follow);}else{width=wrap.offsetWidth-width;height=wrap.offsetHeight-height;left=left-width/2;top=top-height/2;wrap.style.left=Math.max(left,0)+"px";wrap.style.top=Math.max(top,0)+"px";}if(cssWidth&&cssWidth!=="auto"){wrap.style.width=wrap.offsetWidth+"px";}that._autoPositionType();}that._ie6SelectFix();that._runScript(content);return that;},title:function(text){var DOM=this.DOM,wrap=DOM.wrap,title=DOM.title,className="aui_state_noTitle";if(text===undefined){return title[0];}if(text===false){title.hide().html("");wrap.addClass(className);}else{title.show().html(text||"");wrap.removeClass(className);}return this;},position:function(left,top){var that=this,config=that.config,wrap=that.DOM.wrap[0],isFixed=_isIE6?false:config.fixed,ie6Fixed=_isIE6&&that.config.fixed,docLeft=_$document.scrollLeft(),docTop=_$document.scrollTop(),dl=isFixed?0:docLeft,dt=isFixed?0:docTop,ww=_$window.width(),wh=_$window.height(),ow=wrap.offsetWidth,oh=wrap.offsetHeight,style=wrap.style;if(left||left===0){that._left=left.toString().indexOf("%")!==-1?left:null;left=that._toNumber(left,ww-ow);if(typeof left==="number"){left=ie6Fixed?(left+=docLeft):left+dl;style.left=Math.max(left,dl)+"px";}else{if(typeof left==="string"){style.left=left;}}}if(top||top===0){that._top=top.toString().indexOf("%")!==-1?top:null;top=that._toNumber(top,wh-oh);if(typeof top==="number"){top=ie6Fixed?(top+=docTop):top+dt;style.top=Math.max(top,dt)+"px";}else{if(typeof top==="string"){style.top=top;}}}if(left!==undefined&&top!==undefined){that._follow=null;that._autoPositionType();}return that;},size:function(width,height){var maxWidth,maxHeight,scaleWidth,scaleHeight,that=this,config=that.config,DOM=that.DOM,wrap=DOM.wrap,main=DOM.main,wrapStyle=wrap[0].style,style=main[0].style;if(width){that._width=width.toString().indexOf("%")!==-1?width:null;maxWidth=_$window.width()-wrap[0].offsetWidth+main[0].offsetWidth;scaleWidth=that._toNumber(width,maxWidth);width=scaleWidth;if(typeof width==="number"){wrapStyle.width="auto";style.width=Math.max(that.config.minWidth,width)+"px";wrapStyle.width=wrap[0].offsetWidth+"px";}else{if(typeof width==="string"){style.width=width;width==="auto"&&wrap.css("width","auto");}}}if(height){that._height=height.toString().indexOf("%")!==-1?height:null;maxHeight=_$window.height()-wrap[0].offsetHeight+main[0].offsetHeight;scaleHeight=that._toNumber(height,maxHeight);height=scaleHeight;if(typeof height==="number"){style.height=Math.max(that.config.minHeight,height)+"px";}else{if(typeof height==="string"){style.height=height;}}}that._ie6SelectFix();return that;},follow:function(elem){var $elem,that=this,config=that.config;if(typeof elem==="string"||elem&&elem.nodeType===1){$elem=$(elem);elem=$elem[0];}if(!elem||!elem.offsetWidth&&!elem.offsetHeight){return that.position(that._left,that._top);}var expando=_expando+"follow",winWidth=_$window.width(),winHeight=_$window.height(),docLeft=_$document.scrollLeft(),docTop=_$document.scrollTop(),offset=$elem.offset(),width=elem.offsetWidth,height=elem.offsetHeight,isFixed=_isIE6?false:config.fixed,left=isFixed?offset.left-docLeft:offset.left,top=isFixed?offset.top-docTop:offset.top,wrap=that.DOM.wrap[0],style=wrap.style,wrapWidth=wrap.offsetWidth,wrapHeight=wrap.offsetHeight,setLeft=left-(wrapWidth-width)/2,setTop=top+height,dl=isFixed?0:docLeft,dt=isFixed?0:docTop;setLeft=setLeft<dl?left:(setLeft+wrapWidth>winWidth)&&(left-wrapWidth>dl)?left-wrapWidth+width:setLeft;setTop=(setTop+wrapHeight>winHeight+dt)&&(top-wrapHeight>dt)?top-wrapHeight:setTop;style.left=setLeft+"px";style.top=setTop+"px";that._follow&&that._follow.removeAttribute(expando);that._follow=elem;elem[expando]=config.id;that._autoPositionType();return that;},button:function(){var that=this,ags=arguments,DOM=that.DOM,buttons=DOM.buttons,elem=buttons[0],strongButton="aui_state_highlight",listeners=that._listeners=that._listeners||{},list=$.isArray(ags[0])?ags[0]:[].slice.call(ags);if(ags[0]===undefined){return elem;}$.each(list,function(i,val){var name=val.name,isNewButton=!listeners[name],button=!isNewButton?listeners[name].elem:document.createElement("button");if(!listeners[name]){listeners[name]={};}if(val.callback){listeners[name].callback=val.callback;}if(val.className){button.className=val.className;}if(val.focus){that._focus&&that._focus.removeClass(strongButton);that._focus=$(button).addClass(strongButton);that.focus();}button.setAttribute("type","button");button[_expando+"callback"]=name;button.disabled=!!val.disabled;if(isNewButton){button.innerHTML=name;listeners[name].elem=button;elem.appendChild(button);}});buttons[0].style.display=list.length?"":"none";that._ie6SelectFix();return that;},show:function(){this.DOM.wrap.show();!arguments[0]&&this._lockMaskWrap&&this._lockMaskWrap.show();return this;},hide:function(){this.DOM.wrap.hide();!arguments[0]&&this._lockMaskWrap&&this._lockMaskWrap.hide();return this;},close:function(){if(this.closed){return this;}var that=this,DOM=that.DOM,wrap=DOM.wrap,list=artDialog.list,fn=that.config.close,follow=that.config.follow;that.time();if(typeof fn==="function"&&fn.call(that,window)===false){return that;}that.unlock();that._elemBack&&that._elemBack();wrap[0].className=wrap[0].style.cssText="";DOM.title.html("");DOM.content.html("");DOM.buttons.html("");if(artDialog.focus===that){artDialog.focus=null;}if(follow){follow.removeAttribute(_expando+"follow");}delete list[that.config.id];that._removeEvent();that.hide(true)._setAbsolute();for(var i in that){if(that.hasOwnProperty(i)&&i!=="DOM"){delete that[i];}}_box?wrap.remove():_box=that;return that;},time:function(second){var that=this,cancel=that.config.cancelVal,timer=that._timer;timer&&clearTimeout(timer);if(second){that._timer=setTimeout(function(){that._click(cancel);},1000*second);}return that;},focus:function(){try{if(this.config.focus){var elem=this._focus&&this._focus[0]||this.DOM.close[0];elem&&elem.focus();}}catch(e){}return this;},zIndex:function(){var that=this,DOM=that.DOM,wrap=DOM.wrap,top=artDialog.focus,index=artDialog.defaults.zIndex++;wrap.css("zIndex",index);that._lockMask&&that._lockMask.css("zIndex",index-1);top&&top.DOM.wrap.removeClass("aui_state_focus");artDialog.focus=that;wrap.addClass("aui_state_focus");return that;},lock:function(){if(this._lock){return this;}var that=this,index=artDialog.defaults.zIndex-1,wrap=that.DOM.wrap,config=that.config,docWidth=_$document.width(),docHeight=_$document.height(),lockMaskWrap=that._lockMaskWrap||$(document.body.appendChild(document.createElement("div"))),lockMask=that._lockMask||$(lockMaskWrap[0].appendChild(document.createElement("div"))),domTxt="(document).documentElement",sizeCss=_isMobile?"width:"+docWidth+"px;height:"+docHeight+"px":"width:100%;height:100%",ie6Css=_isIE6?"position:absolute;left:expression("+domTxt+".scrollLeft);top:expression("+domTxt+".scrollTop);width:expression("+domTxt+".clientWidth);height:expression("+domTxt+".clientHeight)":"";that.zIndex();wrap.addClass("aui_state_lock");lockMaskWrap[0].style.cssText=sizeCss+";position:fixed;z-index:"+index+";top:0;left:0;overflow:hidden;"+ie6Css;lockMask[0].style.cssText="height:100%;background:"+config.background+";filter:alpha(opacity=0);opacity:0";if(_isIE6){lockMask.html('<iframe src="about:blank" style="width:100%;height:100%;position:absolute;'+'top:0;left:0;z-index:-1;filter:alpha(opacity=0)"></iframe>');}lockMask.stop();lockMask.bind("click",function(){that._reset();}).bind("dblclick",function(){that._reset();});if(config.duration===0){lockMask.css({opacity:config.opacity});}else{lockMask.animate({opacity:config.opacity},config.duration);}that._lockMaskWrap=lockMaskWrap;that._lockMask=lockMask;that._lock=true;return that;},unlock:function(){var that=this,lockMaskWrap=that._lockMaskWrap,lockMask=that._lockMask;if(!that._lock){return that;}var style=lockMaskWrap[0].style;var un=function(){if(_isIE6){style.removeExpression("width");style.removeExpression("height");style.removeExpression("left");style.removeExpression("top");}style.cssText="display:none";_box&&lockMaskWrap.remove();};lockMask.stop().unbind();that.DOM.wrap.removeClass("aui_state_lock");if(!that.config.duration){un();}else{lockMask.animate({opacity:0},that.config.duration,un);}that._lock=false;return that;},_getDOM:function(){var wrap=document.createElement("div"),body=document.body;wrap.style.cssText="position:absolute;left:0;top:0";wrap.innerHTML=artDialog._templates;body.insertBefore(wrap,body.firstChild);var name,i=0,DOM={wrap:$(wrap)},els=wrap.getElementsByTagName("*"),elsLen=els.length;for(;i<elsLen;i++){name=els[i].className.split("aui_")[1];if(name){DOM[name]=$(els[i]);}}return DOM;},_toNumber:function(thisValue,maxValue){if(!thisValue&&thisValue!==0||typeof thisValue==="number"){return thisValue;}var last=thisValue.length-1;if(thisValue.lastIndexOf("px")===last){thisValue=parseInt(thisValue);}else{if(thisValue.lastIndexOf("%")===last){thisValue=parseInt(maxValue*thisValue.split("%")[0]/100);}}return thisValue;},_ie6PngFix:_isIE6?function(){var i=0,elem,png,pngPath,runtimeStyle,path=artDialog.defaults.path+"/skins/",list=this.DOM.wrap[0].getElementsByTagName("*");for(;i<list.length;i++){elem=list[i];png=elem.currentStyle["png"];if(png){pngPath=path+png;runtimeStyle=elem.runtimeStyle;runtimeStyle.backgroundImage="none";runtimeStyle.filter="progid:DXImageTransform.Microsoft."+"AlphaImageLoader(src='"+pngPath+"',sizingMethod='crop')";}}}:$.noop,_ie6SelectFix:_isIE6?function(){var $wrap=this.DOM.wrap,wrap=$wrap[0],expando=_expando+"iframeMask",iframe=$wrap[expando],width=wrap.offsetWidth,height=wrap.offsetHeight;width=width+"px";height=height+"px";if(iframe){iframe.style.width=width;iframe.style.height=height;}else{iframe=wrap.appendChild(document.createElement("iframe"));$wrap[expando]=iframe;iframe.src="about:blank";iframe.style.cssText="position:absolute;z-index:-1;left:0;top:0;"+"filter:alpha(opacity=0);width:"+width+";height:"+height;}}:$.noop,_runScript:function(elem){var fun,i=0,n=0,tags=elem.getElementsByTagName("script"),length=tags.length,script=[];for(;i<length;i++){if(tags[i].type==="text/dialog"){script[n]=tags[i].innerHTML;n++;}}if(script.length){script=script.join("");fun=new Function(script);fun.call(this);}},_autoPositionType:function(){this[this.config.fixed?"_setFixed":"_setAbsolute"]();},_setFixed:(function(){_isIE6&&$(function(){var bg="backgroundAttachment";if(_$html.css(bg)!=="fixed"&&$("body").css(bg)!=="fixed"){_$html.css({zoom:1,backgroundImage:"url(about:blank)",backgroundAttachment:"fixed"});}});return function(){var $elem=this.DOM.wrap,style=$elem[0].style;if(_isIE6){var left=parseInt($elem.css("left")),top=parseInt($elem.css("top")),sLeft=_$document.scrollLeft(),sTop=_$document.scrollTop(),txt="(document.documentElement)";this._setAbsolute();style.setExpression("left","eval("+txt+".scrollLeft + "+(left-sLeft)+') + "px"');style.setExpression("top","eval("+txt+".scrollTop + "+(top-sTop)+') + "px"');}else{style.position="fixed";}};}()),_setAbsolute:function(){var style=this.DOM.wrap[0].style;if(_isIE6){style.removeExpression("left");style.removeExpression("top");}style.position="absolute";},_click:function(name){var that=this,fn=that._listeners[name]&&that._listeners[name].callback;return typeof fn!=="function"||fn.call(that,window)!==false?that.close():that;},_reset:function(test){var newSize,that=this,oldSize=that._winSize||_$window.width()*_$window.height(),elem=that._follow,width=that._width,height=that._height,left=that._left,top=that._top;if(test){newSize=that._winSize=_$window.width()*_$window.height();if(oldSize===newSize){return;}}if(width||height){that.size(width,height);}if(elem){that.follow(elem);}else{if(left||top){that.position(left,top);}}},_addEvent:function(){var resizeTimer,that=this,config=that.config,isIE="CollectGarbage" in window,DOM=that.DOM;that._winResize=function(){resizeTimer&&clearTimeout(resizeTimer);resizeTimer=setTimeout(function(){that._reset(isIE);},40);};_$window.bind("resize",that._winResize);DOM.wrap.bind("click",function(event){var target=event.target,callbackID;if(target.disabled){return false;}if(target===DOM.close[0]){that._click(config.cancelVal);return false;}else{callbackID=target[_expando+"callback"];callbackID&&that._click(callbackID);}that._ie6SelectFix();}).bind("mousedown",function(){that.zIndex();});},_removeEvent:function(){var that=this,DOM=that.DOM;DOM.wrap.unbind();_$window.unbind("resize",that._winResize);}};artDialog.fn._init.prototype=artDialog.fn;$.fn.dialog=$.fn.artDialog=function(){var config=arguments;this[this.live?"live":"bind"]("click",function(){artDialog.apply(this,config);return false;});return this;};artDialog.focus=null;artDialog.get=function(id){return id===undefined?artDialog.list:artDialog.list[id];};artDialog.list={};_$document.bind("keydown",function(event){var target=event.target,nodeName=target.nodeName,rinput=/^INPUT|TEXTAREA$/,api=artDialog.focus,keyCode=event.keyCode;if(!api||!api.config.esc||rinput.test(nodeName)){return;}keyCode===27&&api._click(api.config.cancelVal);});_path=window["_artDialog_path"]||(function(script,i,me){for(i in script){if(script[i].src&&script[i].src.indexOf("artDialog")!==-1){me=script[i];}}_thisScript=me||script[script.length-1];me=_thisScript.src.replace(/\\/g,"/");return me.lastIndexOf("/")<0?".":me.substring(0,me.lastIndexOf("/"));}(document.getElementsByTagName("script")));_skin=_thisScript.src.split("skin=")[1];if(_skin){var link=document.createElement("link");link.rel="stylesheet";link.href=_path+"/skins/"+_skin+".css?"+artDialog.fn.version;_thisScript.parentNode.insertBefore(link,_thisScript);}_$window.bind("load",function(){setTimeout(function(){if(_count){return;}artDialog({left:"-9999em",time:9,fixed:false,lock:false,focus:false});},150);});try{document.execCommand("BackgroundImageCache",false,true);}catch(e){}artDialog._templates='<div class="aui_outer">'+'<table class="aui_border">'+"<tbody>"+"<tr>"+'<td class="aui_nw"></td>'+'<td class="aui_n"></td>'+'<td class="aui_ne"></td>'+"</tr>"+"<tr>"+'<td class="aui_w"></td>'+'<td class="aui_c">'+'<div class="aui_inner">'+'<table class="aui_dialog">'+"<tbody>"+"<tr>"+'<td colspan="2" class="aui_header">'+'<div class="aui_titleBar">'+'<div class="aui_title"></div>'+'<a class="aui_close" href="javascript:/*artDialog*/;">'+"\xd7"+"</a>"+"</div>"+"</td>"+"</tr>"+"<tr>"+'<td class="aui_icon">'+'<div class="aui_iconBg"></div>'+"</td>"+'<td class="aui_main">'+'<div class="aui_content"></div>'+"</td>"+"</tr>"+"<tr>"+'<td colspan="2" class="aui_footer">'+'<div class="aui_buttons"></div>'+"</td>"+"</tr>"+"</tbody>"+"</table>"+"</div>"+"</td>"+'<td class="aui_e"></td>'+"</tr>"+"<tr>"+'<td class="aui_sw"></td>'+'<td class="aui_s"></td>'+'<td class="aui_se"></td>'+"</tr>"+"</tbody>"+"</table>"+"</div>";artDialog.defaults={content:'<div class="aui_loading"><span>loading..</span></div>',title:"\u6d88\u606f",button:null,ok:null,cancel:null,init:null,close:null,okVal:"\u786E\u5B9A",cancelVal:"\u53D6\u6D88",width:"auto",height:"auto",minWidth:96,minHeight:32,padding:"20px 25px",skin:"",icon:null,time:null,esc:true,focus:true,show:true,follow:null,path:_path,lock:false,background:"#000",opacity:0.7,duration:300,fixed:false,left:"50%",top:"38.2%",zIndex:1987,resize:true,drag:true};window.artDialog=$.dialog=$.artDialog=artDialog;}(this.art||this.jQuery&&(this.art=jQuery),this));(function($){var _dragEvent,_use,_$window=$(window),_$document=$(document),_elem=document.documentElement,_isIE6=!("minWidth" in _elem.style),_isLosecapture="onlosecapture" in _elem,_isSetCapture="setCapture" in _elem;artDialog.dragEvent=function(){var that=this,proxy=function(name){var fn=that[name];that[name]=function(){return fn.apply(that,arguments);};};proxy("start");proxy("move");proxy("end");};artDialog.dragEvent.prototype={onstart:$.noop,start:function(event){_$document.bind("mousemove",this.move).bind("mouseup",this.end);this._sClientX=event.clientX;this._sClientY=event.clientY;this.onstart(event.clientX,event.clientY);return false;},onmove:$.noop,move:function(event){this._mClientX=event.clientX;this._mClientY=event.clientY;this.onmove(event.clientX-this._sClientX,event.clientY-this._sClientY);return false;},onend:$.noop,end:function(event){_$document.unbind("mousemove",this.move).unbind("mouseup",this.end);this.onend(event.clientX,event.clientY);return false;}};_use=function(event){var limit,startWidth,startHeight,startLeft,startTop,isResize,api=artDialog.focus,DOM=api.DOM,wrap=DOM.wrap,title=DOM.title,main=DOM.main;var clsSelect="getSelection" in window?function(){window.getSelection().removeAllRanges();}:function(){try{document.selection.empty();}catch(e){}};_dragEvent.onstart=function(x,y){if(isResize){startWidth=main[0].offsetWidth;startHeight=main[0].offsetHeight;}else{startLeft=wrap[0].offsetLeft;startTop=wrap[0].offsetTop;}_$document.bind("dblclick",_dragEvent.end);!_isIE6&&_isLosecapture?title.bind("losecapture",_dragEvent.end):_$window.bind("blur",_dragEvent.end);_isSetCapture&&title[0].setCapture();wrap.addClass("aui_state_drag");api.focus();};_dragEvent.onmove=function(x,y){if(isResize){var wrapStyle=wrap[0].style,style=main[0].style,width=x+startWidth,height=y+startHeight;wrapStyle.width="auto";style.width=Math.max(0,width)+"px";wrapStyle.width=wrap[0].offsetWidth+"px";style.height=Math.max(0,height)+"px";}else{var style=wrap[0].style,left=Math.max(limit.minX,Math.min(limit.maxX,x+startLeft)),top=Math.max(limit.minY,Math.min(limit.maxY,y+startTop));style.left=left+"px";style.top=top+"px";}clsSelect();api._ie6SelectFix();};_dragEvent.onend=function(x,y){_$document.unbind("dblclick",_dragEvent.end);!_isIE6&&_isLosecapture?title.unbind("losecapture",_dragEvent.end):_$window.unbind("blur",_dragEvent.end);_isSetCapture&&title[0].releaseCapture();_isIE6&&!api.closed&&api._autoPositionType();wrap.removeClass("aui_state_drag");};isResize=event.target===DOM.se[0]?true:false;limit=(function(){var maxX,maxY,wrap=api.DOM.wrap[0],fixed=wrap.style.position==="fixed",ow=wrap.offsetWidth,oh=wrap.offsetHeight,ww=_$window.width(),wh=_$window.height(),dl=fixed?0:_$document.scrollLeft(),dt=fixed?0:_$document.scrollTop(),maxX=ww-ow+dl;maxY=wh-oh+dt;return{minX:dl,minY:dt,maxX:maxX,maxY:maxY};})();_dragEvent.start(event);};_$document.bind("mousedown",function(event){var api=artDialog.focus;if(!api){return;}var target=event.target,config=api.config,DOM=api.DOM;if(config.drag!==false&&target===DOM.title[0]||config.resize!==false&&target===DOM.se[0]){_dragEvent=_dragEvent||new artDialog.dragEvent();_use(event);return false;}});})(this.art||this.jQuery&&(this.art=jQuery));


/*!
 * artDialog iframeTools
 * Date: 2011-11-25 13:54
 * http://code.google.com/p/artdialog/
 * (c) 2009-2011 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */
(function(t,e,n,i){var o,a,r,c="@ARTDIALOG.DATA",l="@ARTDIALOG.OPEN",u="@ARTDIALOG.OPENER",s=e.name=e.name||"@ARTDIALOG.WINNAME"+ +new Date,f=e.VBArray&&!e.XMLHttpRequest;t(function(){!e.jQuery&&document.compatMode==="BackCompat"&&alert('artDialog Error: document.compatMode === "BackCompat"')});var d=n.top=function(){var t=e,n=function(t){try{var n=e[t].document;n.getElementsByTagName}catch(t){return false}return e[t].artDialog&&n.getElementsByTagName("frameset").length===0};if(n("top")){t=e.top}else if(n("parent")){t=e.parent}return t}();n.parent=d;o=d.artDialog;r=function(){return o.defaults.zIndex};n.data=function(t,e){var o=n.top,a=o[c]||{};o[c]=a;if(e!==i){a[t]=e}else{return a[t]}return a};n.removeData=function(t){var e=n.top[c];if(e&&e[t])delete e[t]};n.through=a=function(){var t=o.apply(this,arguments);if(d!==e)n.list[t.config.id]=t;return t};d!==e&&t(e).bind("unload",function(){var t=n.list,e;for(var i in t){if(t[i]){e=t[i].config;if(e)e.duration=0;t[i].close()}}});n.open=function(o,c,s){c=c||{};var d,p,m,h,v,y,g,x,w,b=n.top,D="position:absolute;left:-9999em;top:-9999em;border:none 0;background:transparent",k="width:100%;height:100%;border:none 0";if(s===false){var I=+new Date,T=o.replace(/([?&])_=[^&]*/,"$1_="+I);o=T+(T===o?(/\?/.test(o)?"&":"?")+"_="+I:"")}var A=function(){var e,n,i=p.content.find(".aui_loading"),o=d.config;m.addClass("aui_state_full");i&&i.hide();try{x=v.contentWindow;g=t(x.document);w=x.document.body}catch(t){v.style.cssText=k;o.follow?d.follow(o.follow):d.position(o.left,o.top);c.init&&c.init.call(d,x,b);c.init=null;return}e=o.width==="auto"?g.width()+(f?0:parseInt(t(w).css("marginLeft"))):o.width;n=o.height==="auto"?g.height():o.height;setTimeout(function(){v.style.cssText=k},0);d.size(e,n);o.follow?d.follow(o.follow):d.position(o.left,o.top);c.init&&c.init.call(d,x,b);c.init=null};var z={zIndex:r(),init:function(){d=this;p=d.DOM;h=p.main;m=p.content;v=d.iframe=b.document.createElement("iframe");v.src=o;v.name="Open"+d.config.id;v.style.cssText=D;v.setAttribute("frameborder",0,0);v.setAttribute("allowTransparency",true);y=t(v);d.content().appendChild(v);x=v.contentWindow;try{x.name=v.name;n.data(v.name+l,d);n.data(v.name+u,e)}catch(t){}y.bind("load",A)},close:function(){y.css("display","none").unbind("load",A);if(c.close&&c.close.call(this,v.contentWindow,b)===false){return false}m.removeClass("aui_state_full");y[0].src="about:blank";y.remove();try{n.removeData(v.name+l);n.removeData(v.name+u)}catch(t){}}};if(typeof c.ok==="function")z.ok=function(){return c.ok.call(d,v.contentWindow,b)};if(typeof c.cancel==="function")z.cancel=function(){return c.cancel.call(d,v.contentWindow,b)};delete c.content;for(var _ in c){if(z[_]===i)z[_]=c[_]}return a(z)};n.open.api=n.data(s+l);n.opener=n.data(s+u)||e;n.open.origin=n.opener;n.close=function(){var t=n.data(s+l);t&&t.close();return false};d!=e&&t(document).bind("mousedown",function(){var t=n.open.api;t&&t.zIndex()});n.load=function(e,n,o){o=o||false;var c=n||{};var l={zIndex:r(),init:function(n){var i=this,a=i.config;t.ajax({url:e,success:function(t){i.content(t);c.init&&c.init.call(i,n)},cache:o})}};delete n.content;for(var u in c){if(l[u]===i)l[u]=c[u]}return a(l)};n.alert=function(t,e,n){if(typeof e==="string"){n=e;e=true}n=n||"warning";return a({id:"Alert",zIndex:r(),icon:n,fixed:true,lock:true,content:t,ok:true,close:e})};n.confirm=function(t,e,n){return a({id:"Confirm",zIndex:r(),icon:"question",fixed:true,lock:true,opacity:.1,content:t,ok:function(t){return e.call(this,t)},cancel:function(t){return n&&n.call(this,t)}})};n.prompt=function(t,e,n){n=n||"";var i;return a({id:"Prompt",zIndex:r(),icon:"question",fixed:true,lock:true,opacity:.1,content:['<div style="margin-bottom:5px;font-size:12px">',t,"</div>","<div>",'<input value="',n,'" style="width:18em;padding:6px 4px" />',"</div>"].join(""),init:function(){i=this.DOM.content.find("input")[0];i.select();i.focus()},ok:function(t){return e&&e.call(this,i.value,t)},cancel:true})};n.tips=function(t,e,n){if(typeof e==="function"){n=e;e=1.5}return a({id:"Tips",zIndex:r(),title:false,cancel:false,fixed:true,lock:false,close:function(){return n&&n.call(this,n)}}).content('<div style="padding: 0 1em;">'+t+"</div>").time(e||1.5)};t(function(){var i=n.dragEvent;if(!i)return;var o=t(e),a=t(document),r=f?"absolute":"fixed",c=i.prototype,l=document.createElement("div"),u=l.style;u.cssText="display:none;position:"+r+";left:0;top:0;width:100%;height:100%;"+"cursor:move;filter:alpha(opacity=0);opacity:0;background:#FFF";document.body.appendChild(l);c._start=c.start;c._end=c.end;c.start=function(){var t=n.focus.DOM,e=t.main[0],i=t.content[0].getElementsByTagName("iframe")[0];c._start.apply(this,arguments);u.display="block";u.zIndex=n.defaults.zIndex+3;if(r==="absolute"){u.width=o.width()+"px";u.height=o.height()+"px";u.left=a.scrollLeft()+"px";u.top=a.scrollTop()+"px"}if(i&&e.offsetWidth*e.offsetHeight>307200){e.style.visibility="hidden"}};c.end=function(){var t=n.focus;c._end.apply(this,arguments);u.display="none";if(t)t.DOM.main[0].style.visibility="visible"}})})(this.art||this.jQuery,this,this.artDialog);
(function (config) {
	config["title"] = "消息";
	config["okVal"] = "确定";
	config["cancelVal"] = "取消";
})(art.dialog.defaults);

/**************************************************************************************************
	文件： js/jquery.global.js
	说明： 通用组件，包含常用的Ajax，弹出窗，桌面组件
	版本： 4.0
	网站： www.dsaiyin.com
	作者： dsaiyin <QQ:850272422>
	日期： 2014年7月11日
***************************************************************************************************/
;(function($){
	$.desktop = {
		init:function(opts)
		{
			var defaults = {
				'win_min'		:true,
				'win_max'		:true,
				'win_close'		:true,
				'title'			:'',
				'iframe'		:'', // 定义iframe地址
				'content'		:'', // 定义内容信息，当内容为iframe时，调用iframe对应的url
				'lock'			:false,
				'bgcolor'		:'#fff',
				'position'		:'center center', //支持数字及常用单词center
				'taskbar'		:false,
				'width'			:'auto',
				'height'		:'auto',
				'prefix'		:'dsy-',
				'exheight'		:0,
				'exwidth'		:0,
				'func_close'	:false,
				'is_max'		:false, //是否直接全屏
				'move'			:true, //允许移动
				'z_index'		:1000, //弹出层的默认层级
				'close_tip'		:'' //关闭窗口前是否弹出提示
			};
			this.opt = $.extend({},defaults, opts);
			this.prefix = this.opt.prefix ? this.opt.prefix : 'dsy-';
		},
		_id:function(id)
		{
			if(!id || id == 'undefined'){
				var str = (Math.random()).toString();
				str = str.replace(".","");
				if(!this.prefix || this.prefix == 'undefined'){
					this.prefix = 'dsy-';
				}
				id = this.prefix + (str).toString();
			}
			this.id = id;
		},
		win_id: function(id)
		{
			this._id(id);
			return this.id;
		},
		win: function(opts)
		{
			this.opt = $.extend({},this.opt, opts);
			if(!this.id || this.id == 'undefined'){
				this._id();
			}
			this._style();
			this._content();
			this._pop();
			this._taskbar();
			this._action();
		},
		height: function(height)
		{
			var obj = this._win();
			if(height == 'auto' || !height || height == 'undefined' || parseInt(height,10) > obj.height){
				height = obj.height * 0.7;
			}
			if((new RegExp('%')).test(height)){
				height = parseInt((obj.height * parseInt(height,10))/100,10);
			}
			return height;
		},
		width: function(width)
		{
			var obj = this._win();
			if(width == 'auto' || !width || width == 'undefined' || parseInt(width,10) > obj.width){
				width = obj.width * 0.8;
			}
			if((new RegExp('%')).test(width)){
				width = parseInt((obj.width * parseInt(width,10))/100,10);
			}
			return width;
		},
		title: function(title,id)
		{
			if(!title || title == 'undefined'){
				return false;
			}
			if(!id || id == 'undefined'){
				var zindex = new Array();
				var idlist = new Array();
				var tmpi = 0;
				$("ul#"+this.prefix+"taskbar li").each(function(i){
					id = ($(this).attr('id')).substr(8);
					var ishidden = $("#"+id).is(":hidden");
					if(!ishidden){
						zindex[tmpi] = $("#"+id).css('z-index');
						idlist[tmpi] = id;
						tmpi++;
					}else{
						$(this).removeClass('on');
					}
				});
				//当
				if(zindex.length>0 && idlist.length>0){
					zmax = Math.max.apply(null,zindex);
					var t = 0;
					for(var i in zindex){
						if(zindex[i] == zmax){
							t = i;
						}
					}
					id = idlist[t];
				}
			}
			if(!id || id == 'undefined'){
				return false;
			}
			$("#title-"+id+",#taskbar-"+id).html(title);
		},
		_win:function()
		{
			var obj = {};
			obj.width = $(window).width() - parseInt(this.opt.exwidth,10);
			obj.height = $(window).height() - parseInt(this.opt.exheight,10);
			return obj;
		},
		_doc: function()
		{
			var obj = {};
			obj.width = $(document).width() - parseInt(this.opt.exwidth,10);
			obj.height = $(document).height() - parseInt(this.opt.exheight,10);
			return obj;
		},
		tohome:function()
		{
			$(".dsy-win").hide();
			this._taskbar_on();
		},
		//取得指定ID的z-index值
		zindex:function(id)
		{
			if(!id || id == 'undefined'){
				id = this.id;
			}
			var list = new Array();
			var total = $(".dsy-win").length;
			var zIndex = this.opt.z_index;
			if(total > 0){
				$(".dsy-win").each(function(i){
					list[i] = $(this).css("z-index");
				});
				zIndex = Math.max.apply(null,list);
			}
			zIndex++;
			$("#"+id+"-lock").css("z-index",zIndex);
			$("#"+id).css("z-index",(zIndex+1));
			this._taskbar_on();
			return zIndex;
		},
		//触发当前高亮的taskbar
		_taskbar_on: function()
		{
			var id;
			var zindex = new Array();
			var idlist = new Array();
			var tmpi = 0;
			$("ul#"+this.prefix+"taskbar li").each(function(i){
				id = ($(this).attr('id')).substr(8);
				var ishidden = $("#"+id).is(":hidden");
				if(!ishidden){
					zindex[tmpi] = $("#"+id).css('z-index');
					idlist[tmpi] = id;
					tmpi++;
				}
				$(this).removeClass('on');
			});
			//当
			if(zindex.length>0 && idlist.length>0){
				zmax = Math.max.apply(null,zindex);
				var t = 0;
				for(var i in zindex){
					if(zindex[i] == zmax){
						t = i;
					}
				}
				id = idlist[t];
				$("#taskbar-"+id).addClass('on');
			}
		},
		//取得当前窗口中的最大值
		max_zindex: function()
		{
			var list = new Array();
			var total = $(".dsy-win").length;
			var zIndex = this.opt.z_index;
			if(total > 0){
				$(".dsy-win").each(function(i){
					list[i] = $(this).css("z-index");
				});
				zIndex = Math.max.apply(null,list);
			}
			return zIndex;
		},
		close: function(id)
		{
			if(this.opt.close_tip){
				var q = confirm(this.opt.close_tip);
				if(q == 0){
					return false;
				}
			}
			if(!id || id == 'undefined'){
				//获取ID
				var obj = $("div.dsy-win").length > 0 ? $("div.dsy-win") : parent.$("div.dsy-win");
				var zlist = new Array();
				var is_each = false;
				obj.each(function(i){
					zlist[i] = {'zindex':$(this).css('z-index'),'id':$(this).attr('id')};
				});
				if(zlist.length>0){
					var zmax = 0;
					for(var i in zlist){
						if(parseInt(zlist[i]['zindex'],10) > parseInt(zmax,10)){
							zmax = parseInt(zlist[i]['zindex'],10);
							id = zlist[i]['id'];
						}
					}
				}else{
					id = this.id;
				}
				if(id && id != 'undefined'){
					return obj.find("li#close-"+id).click();
				}
			}
			var arg = this._arg(id);
			if($("#"+id).length > 0){
				$("#"+id).remove();
				$("#"+id+"-lock").remove();
				$("#taskbar-"+id).remove();
				this._taskbar_on();
			}else{
				parent.$("div#"+id).remove();
				parent.$("iframe#"+id+"-lock").remove();
				parent.$("li#taskbar-"+id).remove();
			}
		},
		max: function(id)
		{
			if(!id || id == 'undefined'){
				id = this.id;
			}
			var arg = this._arg(id);
			//判断当前窗口是否是最大值
			var w = $("#"+id).width();
			var is_max = w <= arg.width ? false : true;
			if(is_max){
				//取消最大化
				$("#"+id).css({
					'width':arg.width+"px",
					'height':arg.height+'px',
					'left':arg.left+"px",
					'top':arg.top+'px'
				});
				$("#"+id+"-body").css({
					"width":parseInt((arg.width-12),10)+"px",
					'height':parseInt((arg.height-38),10)+"px"
				});
				if(arg.lock != 1){
					$("#"+id+"-lock").css({
						'width':arg.width+"px",
						'height':arg.height+'px',
						'left':arg.left+"px",
						'top':arg.top+'px'
					});
				}
				$("#max-"+id).removeClass('max').addClass('max-max');
			}else{
				var win_height = $(window).height() - arg.exheight;
				if(arg.win_height>win_height){
					arg.win_height = win_height;
				}
				$("#"+id).css({
					'width':arg.win_width+"px",
					'height':arg.win_height+'px',
					'left':arg.exwidth+"px",
					'top':arg.exheight+"px"
				});
				$("#"+id+"-body").css({
					"width":parseInt((arg.win_width-12),10)+"px",
					"height":parseInt((arg.win_height-38),10)+"px"
				});
				$("#max-"+id).removeClass('max-max').addClass('max');
				if(arg.lock != 1){
					$("#"+id+"-lock").css({
						'width':arg.win_width+"px",
						'height':arg.win_height+'px',
						'left':arg.exwidth+"px",
						'top':arg.exheight+'px'
					});
				}
			}
			this._taskbar_on();
		},
		min: function(id)
		{
			if(!id || id == 'undefined'){
				id = this.id;
			}
			$("#"+id+",#"+id+"-lock").hide();
			this._taskbar_on();
		},
		_arg: function(id)
		{
			if(!id || id == 'undefined'){
				id = this.id;
			}
			var str = $("#"+id).attr('data');
			var arg = {};
			if(str){
				t = str.split(';');
				for(var i in t){
					var val = (t[i]).split(":");
					arg[val[0]] = val[1];
				}
			}
			return arg;
		},
		_style:function()
		{
			var width = (parseInt(this.width(this.opt.width),10)).toString();
			var height = (parseInt(this.height(this.opt.height),10)).toString();
			var win = this._win();
			var doc = this._doc();
			var zindex = this.zindex();
			//取得left，top位置坐标
			var position = this.opt.position ? (this.opt.position).toLowerCase() : 'center center';
			if(!position || position == 'center center' || position == 'center'){
				var left = parseInt((win.width - width)/2,10);
				var top = parseInt((win.height - height)/2,10);
			}else{
				var tlist = position.split(' ');
				var left = tlist[0] ? tlist[0] : 'center';
				var top = tlist[1] ? tlist[1] : 'center';
				if(left == 'center'){
					left = parseInt((win.width - width)/2,10);
				}
				if(top == 'center'){
					var top = parseInt((win.height - height)/2,10);
				}
			}
			this.style  = 'width:'+width+'px;';
			this.style += 'height:'+height+'px;';
			this.style += 'left:'+left+'px;';
			this.style += 'top:'+top+'px;';
			this.style += 'z-index:'+(zindex+1)+';';
			//锁屏样式
			this.lockstyle  = 'position:absolute;z-index:'+zindex+';';
			this.lockstyle += 'background:'+this.opt.bgcolor+';';
			if(this.opt.lock){
				var tmpheight = doc.height > win.height ? doc.height : win.height;
				this.lockstyle += 'width:100%;';
				this.lockstyle += 'height:'+tmpheight+'px;';
				this.lockstyle += 'left:0;';
				this.lockstyle += 'top:0;';
			}else{
				this.lockstyle += 'width:'+width+'px;';
				this.lockstyle += 'height:'+height+'px;';
				this.lockstyle += 'left:'+left+'px;';
				this.lockstyle += 'top:'+top+'px;';
			}
			//内容高度样式
			this.bodystyle  = 'position:relative;';
			this.bodystyle += 'width:'+parseInt((width-12),10)+'px;';
			this.bodystyle += 'height:'+parseInt((height-38),10)+'px;';
			//记住当前窗口的宽高
			this.arg = 'width:'+width+";height:"+height+";win_width:"+win.width+";win_height:"+win.height;
			this.arg+= ";lock:"+(this.opt.lock ? '1' : '0');
			this.arg+= ";exheight:"+this.opt.exheight+";exwidth:"+this.opt.exwidth;
			this.arg+= ";left:"+left+";top:"+top;
			this.arg+= ";move:"+(this.opt.move ? '1' :'0');
			if(this.opt.taskbar){
				this.arg+= ";taskbar:"+(this.opt.taskbar).toString();
			}
			
		},
		_save: function(arg,id)
		{
			var str = '';
			for(var i in arg){
				str += i+":"+arg[i]+";";
			}
			var length = str.length;
			str = str.substr(0,length-1);
			$("#"+id).attr('data',str);
		},
		_content:function()
		{
			if((this.opt.content).substr(0,1) == '.' || (this.opt.content).substr(0,1) == '#'){
				//取得内容
				var div_content = $(this.opt.content).html();
				var content = '<div id="'+this.id+'-content" class="content">'+div_content+'</div>';
				//清空现有的标识内容
				$(this.opt.content).html('');
				//增加取消触发事件
				this.opt.func_cancel = function(){
					$(this.opt.content).html(div_content);
					$("#"+this.id+'-content').html('');
					return true;
				};
			}else if((this.opt.content == 'iframe' || !this.opt.content) && this.opt.iframe){
				var url = this.opt.iframe;
				if(url.indexOf('_noCache') != -1){
					url = url.replace(/\_noCache=[0-9\.]+/,'_noCache='+Math.random());
				}else{
					url += url.indexOf('?') != -1 ? '&' : '?';
					url += '_noCache='+Math.random();
				}
				var content = '<iframe src="'+url+'" border="0" frameborder="0" marginheight="0" marginwidth="0" class="content" style="overflow:hidden;height:100%;width:100%;background:#fff;" id="'+this.id+'-content"></iframe>';
			}else{
				var content = '<div id="'+this.id+'-content" class="content">'+this.opt.content+'</div>';
			}
			this.content = content;
		},
		_pop:function()
		{
			var html = '';
			html += '<div class="dsy-win" id="'+this.id+'" style="'+this.style+'" data="'+this.arg+'">';
			html += '<div class="window">';
			html += '	<div class="title">';
			html += '		<h3 class="h3" id="title-'+this.id+'">'+this.opt.title+'</h3>';
			html += '		<div class="button">';
			html += '		<ul>';
			if(this.opt.win_min){
				html += '		<li class="min" id="min-'+this.id+'"><a href="javascript:void(0);"></a></li>';
			}
			if(this.opt.win_max){
				html += '		<li class="max-max" id="max-'+this.id+'"><a href="javascript:void(0);"></a></li>';
			}
			if(this.opt.win_close){
				html += '		<li class="close" id="close-'+this.id+'"><a href="javascript:void(0);"></a></li>';
			}
			html += '		</ul>';
			html += '		</div>';
			html += '	</div>';
			html += '	<div class="body" id="'+this.id+'-body" style="'+this.bodystyle+'">';
			html += 	this.content;
			html += '	</div>';
			html += '</div>';
			$(html).appendTo("body");
		},
		_taskbar:function(id)
		{
			if(!id || id == 'undefined'){
				id = this.id;
			}
			var arg = this._arg(id);
			if(arg.taskbar == 'false'){
				return true;
			}
			var ul_id = this.prefix+'taskbar';
			var html = '<li id="taskbar-'+id+'">'+this.opt.title+'</li>';
			$(html).appendTo("#"+ul_id);
			return true;
		},
		_vlayer: function(id)
		{
			if(!id){
				return false;
			}
			var width = $("#"+id).width();
			var height = $("#"+id).height();
			var left = parseInt($("#"+id).css('left'),10);
			var top = parseInt($("#"+id).css('top'),10);
			var css = "width:"+width+"px;height:"+height+"px;left:"+left+"px;top:"+top+'px;position:absolute;';
			var zindex = $("#"+id).css("z-index");
			css += "z-index:"+parseInt(zindex+1)+";";
			//css += "background:#FFF;"
			var html = '<div class="dsy-win-vlayer" id="vlayer-'+id+'" style="'+css+'">&nbsp;</div>';
			$(html).appendTo('body');
		},
		//关闭移动时的触发
		_vlayer_close: function(id)
		{
			var arg = this._arg(id);
			var top = parseInt($("#vlayer-"+id).css("top"),10);
			var left = parseInt($("#vlayer-"+id).css('left'),10);
			$("#"+id).css({'top':top+"px",'left':left+"px"});//控件新位置
			if(arg.lock != 1){
				$("#"+id+"-lock").css({'top':top+"px",'left':left+"px"});//控件新位置
			}
			arg.left = left;
			arg.top = top;
			this._save(arg,id);
			$("#vlayer-"+id).remove();
			return true;
		},
		//绑定相应的动作
		_action:function()
		{
			var _x,_y;//鼠标离控件左上角的相对位置
			var _move = false;
			var self = this;
			var id = this.id;
			var arg = this._arg(id);
			//存在关闭窗口执行的触发
			if(this.opt.win_close){
				$("#close-"+id).click(function(){
					if(self.opt.func_close){
						var obj = (self.opt.func_close)();
						if(!obj){
							return false;
						}else{
							self.close(id);
						}
					}else{
						self.close(id);
					}
				});
			}
			//有最大化最小化按钮时
			if(this.opt.win_max){
				$("#title-"+id).dblclick(function(){self.max(id);});
				$("#max-"+id).click(function(){self.max(id);});
			}
			//有最小化时的按钮信息
			if(this.opt.win_min){
				$("#min-"+id).click(function(){self.min(id);});
			}
			//如果有启用taskbar
			if(this.opt.taskbar){
				$("#taskbar-"+id).click(function(){
					//判断是否最小化了
					var is_hidden = $("#"+id).is(":hidden");
					if(is_hidden){
						$("#"+id).show();
						$("#"+id+"-lock").show();
						self.zindex(id);
					}else{
						var z_id = $("#"+id).css("z-index");
						var z_max = self.max_zindex();
						if(z_max != z_id){
							self.zindex(id);
						}else{
							self.min(id);
						}
					}
					self._taskbar_on();
				});
			}
			//如果默认启用了is_max
			if(this.opt.is_max){
				this.max(id);
			}
			//移动
			$("#title-"+id).mousedown(function(e){
				e = e || window.event;
				var zindex = self.zindex(id);
				//创建一个虚拟的DIV层
				_x = e.pageX-parseInt($("#"+id).css("left"));
				_y = e.pageY-parseInt($("#"+id).css("top"));
				if(arg.move == 1)
				{
					_move = true;
					self._vlayer(id);
				}
				e.preventDefault && e.preventDefault();
			}).mouseup(function(e){
				e = e || window.event;
				_move = false;
				self._vlayer_close(id);
				e.preventDefault && e.preventDefault();
			});
			$(document).mousemove(function(e){
				e = e || window.event;
				if(!_move){
					return false;
				}
				var x = e.pageX - _x;
				var y = e.pageY - _y;
				if(self.opt.taskbar == 'top' && y < parseInt(self.opt.exheight,10)){
					y = parseInt(self.opt.exheight,10);
				}else{
					if(y<0){
						y = 0;
					}
				}
				if(self.opt.taskbar == 'left' && x < parseInt(self.opt.exwidth,10)){
					x = parseInt(obj.opt.exwidth,10);
				}else{
					if(x < 0){
						x = 0;
					}
				}
				var max_width = $(window).width();
				var max_height = $(window).height();
				var width = $("#"+id).width();
				var height = $("#"+id).height();
				if( (max_width - width) < x){
					x = max_width - width;
				}

				if((max_height - height) < y){
					y = max_height - height;
				}
				$("#vlayer-"+id).css({'top':y+"px",'left':x+"px"});//控件新位置
				e.preventDefault && e.preventDefault();
			}).mouseup(function(e){
				e = e || window.event;
				_move = false;
				self._vlayer_close(id);
				e.preventDefault && e.preventDefault();
			});
		}
	};
	$.win = function(title,url,opts){
		//检查是否窗口已存在
		var open_id = false;
		$("ul#dsy-taskbar li").each(function(i){
			var txt = $(this).text();
			if(txt == title){
				open_id = $(this).attr('id');
			}
		});
		if(open_id){
			$("#"+open_id).click();
			return false;
		}
		var max = $('body').width() - 770;
		var this_max = 90;
		$("ul.head_tab li").each(function(i){
			this_max += parseInt($(this).outerWidth(true));
		});
		if(max <= this_max){
			$.dialog.alert('您弹出的窗口太多了，请先关闭几个没有用的窗口');
			return false;
		}
		var height = parseInt(($(window).height() - 45) * 0.8);
		var exwidth = $('.c_left').parent().width();
		if(!exwidth || exwidth == 'null' || exwidth == null){
			exwidth = 0;
		}
		var defaults = {
			'iframe':url,
			'title':title,
			'lock':false,
			'taskbar':'top',
			'exheight':45,
			'exwidth':exwidth,
			'height':height,
			'move':true,
			'win_max':true,
			'win_min':true,
			'is_max':true
		}
		if($.win2.opt){
			var opt = $.extend({},defaults,$.win2.opt, opts);
		}else{
			var opt = $.extend({},defaults, opts);
		}
		$.desktop.init(opt);
		$.desktop.win_id();
		$.desktop.win();
	};
	$.win2 = {
		init:function(opts){
			this.opt = opts;
		}
	};
})(jQuery);

function alt_open(id,note)
{
    if(!id || id == "undefined") return false;
    if(!note || note == "undefined")
    {
        note = $("#"+id).attr("alt") ? $("#"+id).attr("alt") : $("#"+id).attr("title");
        if(!note || note == "undefined")
        {
            return false;
        }
    }
    $.dialog({
        "id": "dsy_alt",
        "title": false,
        "cancel":false,
        "padding":"10px 10px",
        "follow": document.getElementById(id),
        "content":note
    });
}

function alt_close()
{
    $.dialog.list["dsy_alt"].close();
}

//通用更新排序
function taxis(baseurl,default_value)
{
    var url = baseurl;
    if(!default_value || default_value == "undefined") default_value = "0";
    var id_string = $.input.checkbox_join();
    if(!id_string || id_string == "undefined"){
        $.dialog.alert("没有指定要更新的排序ID！");
        return false;
    }
    //取得排序值信息
    var id_list = id_string.split(",");
    var id_leng = id_list.length;
    for(var i=0;i<id_leng;i++){
        var taxis = $("#taxis_"+id_list[i]).val();
        if(!taxis) taxis = default_value;
        url += "&taxis["+id_list[i]+"]="+$.str.encode(taxis);
    }
    var rs = $.dsy.json(url);
    if(rs.status == "ok"){
        $.dialog.alert("排序更新完成！",function(){
            $.dsy.reload();
        });
    }else{
        alert(rs.content);
        return false;
    }
}

/* 通用状态更新 */
function dsy_status(id,url)
{
    if(!url || url == "undefined" || !id) return false;
    url += "&id="+$.str.encode(id);
    var rs = json_ajax(url);
    if(rs.status == "ok")
    {
        if(!rs.content) rs.content = '0';
        var oldvalue = $("#status_"+id).attr("value");
        var old_cls = "status"+oldvalue;
        $("#status_"+id).removeClass(old_cls).addClass("status"+rs.content);
        $("#status_"+id).attr("value",rs.content);
    }
    else
    {
        alert(rs.content);
        return false;
    }
}

/* 通用表单自动存储 */
// formid，要自动存储的表单ID
// type，要自动存储的类型，目前仅支持 cate list两种
// func，返回执行的函数
function autosave(formid,type,func)
{
    if(!type || type == "undefined") type = "list";
    if(!func || func == "undefined") func = "autosave_callback";
    var str = $("#"+formid).serialize();
    var url = get_url("auto") + "&__type="+type;
    //通过POST存储数据
    $.post(url,str,function(rs){func(rs);},"json");
}

/* 自动填写表单数据 */
function autofill(type)
{
    var turl = get_url("auto","read") + "&__type="+type;
    $.ajax({
        url:turl,
        cache:false,
        async:true,
        dataType:"json",
        success: function(rs){
            if(rs.status == "ok")
            {
                var list = rs.content;
                for(var key in list)
                {
                    var input = $("input[name="+key+"]");
                    var textarea = $("textarea[name="+key+"]");
                    if(input.length>0)
                    {
                        input.val(list[key]);
                    }
                    else if(textarea.length>0)
                    {
                        var edit = $("textarea[name="+key+"][dsy_id=htmledit]");
                        if(edit.length>0)
                        {
                            var my_edit = eval(key+"_editor");
                            my_edit.html(list[key]);
                        }
                        else
                        {
                            textarea.val(list[key]);
                        }
                    }
                }
            }
        }
    });
}

//弹出图片选择窗口
function dsy_pic(id)
{
    if(!id || id == "undefined"){
        $.dialog.alert(p_lang('未指定ID'));
        return false;
    }
    var url = get_url("open","input",'id='+id);
    $.dialog.open(url,{
        title: p_lang('图片管理器'),
        lock : true,
        width: "650px",
        height: "450px"
    });
}

// 预览图片
function dsy_pic_view(id)
{
    var url = $("#"+id).val();
    if(!url || url == "undefined"){
        $.dialog.alert("图片不存在，请在表单中填写图片地址");
    }else{
        top.$.dialog({
            'title':'预览',
            'content':'<img src="'+url+'" border="0" />',
            'lock':true,
            'ok':function(){},
            'height':350,
            'width':500,
            'okVal':'关闭预览'
        });
    }
}

//弹出窗口，选择模板
function dsy_tpl_open(id)
{
    var url = get_url("tpl","open") + "&id="+id;
    $.dialog.open(url,{
        title: "模板选择",
        lock : true,
        width: "700px",
        height: "400px",
        resize: false
    });
}





function dsy_admin_orderby(id,val)
{
    $.dialog({
        "title":"排序设置",
        "content":'<div><label for="_dsy_tmp_desc_'+id+'"><input type="radio" name="_dsy_tmp_desc_asc_'+id+'" value="DESC" checked id="_dsy_tmp_desc_'+id+'"/>倒序↓，数值从高排到低，示例：Z→A，9→1</label></div><div><label for="_dsy_tmp_asc_'+id+'"><input type="radio" value="ASC" name="_dsy_tmp_desc_asc_'+id+'" id="_dsy_tmp_asc_'+id+'"/>正序↑，数值从低排到高，示例：A→Z，1→9</label></div>',
        'lock':true,
        "ok":function(){
            var desc_asc = $("input[name=_dsy_tmp_desc_asc_"+id+"]:checked").val();
            if(!desc_asc)
            {
                alert("请选择排序方式");
                return false;
            }
            val += " "+desc_asc;
            var str = $("#"+id).val();
            if(str)
            {
                str += ","+val;
            }
            else
            {
                str = val;
            }
            $("#"+id).val(str);
        }
    });
}

function goto_site(id,oldid)
{
    $.dialog.confirm(p_lang('确定要切换到网站')+"<span style='color:red;font-weight:bold;'>"+$('#top_site_id').find("option:selected").text()+"</span>",function(){
        var url = get_url("index","site") + "&id="+id.toString();
        direct(url);
    },function(){
        $("#top_site_id").val(oldid);
    });
}

//添加自定义字段
function ext_add(module)
{
    var url = get_url('ext','create','id='+$.str.encode(module));
    $.dialog.open(url,{
        'title':'创建扩展字段',
        'width':'750px',
        'height':'580px',
        'resize':false,
        'lock':true,
        'ok':function(){
            var iframe = this.iframe.contentWindow;
            if (!iframe.document.body) {
                alert('iframe还没加载完毕呢');
                return false;
            };
            iframe.save();
            return false;
        },
        'okVal': '提交配置'
    });
    return true;
}

function ext_add2(id,module)
{
    var url = get_url("ext","add") + "&module="+module+"&id="+id;
    var rs = $.dsy.json(url);
    if(rs.status == 'ok'){
        $.dsy.reload();
    }else{
        $.dialog.alert(rs.content);
        return false;
    }
}

function ext_delete(id,module,title)
{
    $.dialog.confirm('确定要删除扩展字段：<span class="red">'+title+'</span> 吗？删除后是不能恢复的！',function(){
        var url = get_url('ext','delete');
        url += "&module="+$.str.encode(module);
        url += "&id="+id;
        var rs = $.dsy.json(url);
        if(rs.status == 'ok')
        {
            autosave(module,module,auto_refresh);
        }
        else
        {
            $.dialog.alert(rs.content);
            return false;
        }
    });
}

//编辑字段
function ext_edit(id,module)
{
    var url = get_url("ext","edit",'id='+id);
    url += "&module="+$.str.encode(module);
    $.dialog.open(url,{
        "title" : "编辑扩展字段属性",
        "width" : "700px",
        "height" : "95%",
        "win_min":false,
        "win_max":false,
        "resize" : false,
        "lock" : true,
        'okVal': '提交',
        'ok': function(){
            var iframe = this.iframe.contentWindow;
            if (!iframe.document.body) {
                alert('iframe还没加载完毕呢');
                return false;
            };
            iframe.save();
            return false;
        }
    });
}

//前台常用JS函数封装
;(function($){
    $.admin = {
        //更换Tab设置
        tab:function(val){
            $("#float_tab li").each(function(i){
                var name = $(this).attr("name");
                if(name == val)
                {
                    $(this).removeClass("tab_out").addClass("tab_over");
                    $("#"+val+"_setting").show();
                }
                else
                {
                    $(this).removeClass("tab_over").addClass("tab_out");
                    $("#"+name+"_setting").hide();
                }
            });
        },
        group:function(obj){
            var val = $(obj).attr('name');
            $.each($(obj).parent().find('li'),function(i){
                var name = $(this).attr('name');
                $(this).removeClass('on');
                $("#"+name+"_setting").hide();
            });
            //显示当前的
            $(obj).addClass('on');
            $("#"+val+"_setting").show();
        }
    };
})(jQuery);
$(document).keydown(function(e){
	if(e.keyCode==8){
		var keyEvent = false;
		var d = e.srcElement || e.target;
		var tag_name = d.tagName.toUpperCase();
		var tag_type = d.type.toUpperCase();
		if((tag_name == 'INPUT' && (tag_type == 'TEXT' || tag_type == 'PASSWORD')) || tag_name == 'TEXTAREA'){
			keyEvent = d.readOnly||d.disabled;
		}else{
			keyEvent=true;
		}
		if(keyEvent){
			e.preventDefault();
		}
	}
});
