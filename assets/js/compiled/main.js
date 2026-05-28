/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ([
/* 0 */,
/* 1 */
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initSpDrawer: function() { return /* binding */ initSpDrawer; },
/* harmony export */   initSpHeader: function() { return /* binding */ initSpHeader; }
/* harmony export */ });
var HIDDEN_CLASS = 'is-header-hidden';
function initSpHeader() {
    var header = document.querySelector('body.aft26 header.hidePC');
    if (!header)
        return;
    var lastScrollY = window.scrollY;
    window.addEventListener('scroll', function () {
        var currentScrollY = window.scrollY;
        var scrollingDown = currentScrollY > lastScrollY;
        var pastThreshold = currentScrollY > window.innerHeight * 0.5;
        var menuOpen = document.documentElement.classList.contains('sb-active-right');
        if (!menuOpen) {
            if (pastThreshold && scrollingDown) {
                header.classList.add(HIDDEN_CLASS);
            }
            else if (!scrollingDown) {
                header.classList.remove(HIDDEN_CLASS);
            }
        }
        lastScrollY = currentScrollY;
    }, { passive: true });
}
function initSpDrawer() {
    var htmlEl = document.documentElement;
    var menuBtn = document.querySelector('.sb-toggle-right.mb-menu-button');
    var header = document.querySelector('body.aft26 header.hidePC');
    if (!menuBtn)
        return;
    // 暗幕オーバーレイを生成
    var overlay = document.createElement('div');
    overlay.className = 'sp-drawer-overlay';
    document.body.appendChild(overlay);
    // slidebars が <html> に付与するクラスを監視してUI同期
    var observer = new MutationObserver(function () {
        var isOpen = htmlEl.classList.contains('sb-active-right');
        menuBtn.classList.toggle('is-menu-open', isOpen);
        overlay.classList.toggle('is-active', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
        // メニュー展開中はヘッダーを強制表示
        if (isOpen && header) {
            header.classList.remove(HIDDEN_CLASS);
        }
    });
    observer.observe(htmlEl, { attributes: true, attributeFilter: ['class'] });
    // 暗幕タップ/クリックでドロワーを閉じる
    // モバイルでは slidebars が touchend 後に click ハンドラを削除するため
    // touchend では jQuery 経由で touchend をトリガーし直す
    overlay.addEventListener('touchend', function (e) {
        e.preventDefault(); // 後続の click イベントを抑制
        var jq = window.jQuery || window.$;
        if (jq)
            jq(menuBtn).trigger('touchend');
    });
    overlay.addEventListener('click', function () {
        menuBtn.click(); // デスクトップ用フォールバック
    });
}


/***/ })
/******/ 	]);
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
!function() {
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _js_sp_header__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(1);

window.onload = function () {
    (0,_js_sp_header__WEBPACK_IMPORTED_MODULE_0__.initSpHeader)();
    (0,_js_sp_header__WEBPACK_IMPORTED_MODULE_0__.initSpDrawer)();
};

}();
/******/ })()
;