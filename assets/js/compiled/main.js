/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "../../../../Y.薬ゼミ/wp2026/yakuzemi/yz/wp-content/themes/yakuzemi/assets/npm/js/src/index.ts"
/*!**************************************************************************************************!*\
  !*** ../../../../Y.薬ゼミ/wp2026/yakuzemi/yz/wp-content/themes/yakuzemi/assets/npm/js/src/index.ts ***!
  \**************************************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("{__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _js_sp_header__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./js/sp-header */ \"../../../../Y.薬ゼミ/wp2026/yakuzemi/yz/wp-content/themes/yakuzemi/assets/npm/js/src/js/sp-header.ts\");\n\nwindow.onload = function () {\n    (0,_js_sp_header__WEBPACK_IMPORTED_MODULE_0__.initSpHeader)();\n    (0,_js_sp_header__WEBPACK_IMPORTED_MODULE_0__.initSpDrawer)();\n};\n\n\n//# sourceURL=webpack://assets/../../../../Y.%E8%96%AC%E3%82%BC%E3%83%9F/wp2026/yakuzemi/yz/wp-content/themes/yakuzemi/assets/npm/js/src/index.ts?\n}");

/***/ },

/***/ "../../../../Y.薬ゼミ/wp2026/yakuzemi/yz/wp-content/themes/yakuzemi/assets/npm/js/src/js/sp-header.ts"
/*!*********************************************************************************************************!*\
  !*** ../../../../Y.薬ゼミ/wp2026/yakuzemi/yz/wp-content/themes/yakuzemi/assets/npm/js/src/js/sp-header.ts ***!
  \*********************************************************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

eval("{__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   initSpDrawer: function() { return /* binding */ initSpDrawer; },\n/* harmony export */   initSpHeader: function() { return /* binding */ initSpHeader; }\n/* harmony export */ });\nvar HIDDEN_CLASS = 'is-header-hidden';\nfunction initSpHeader() {\n    var header = document.querySelector('body.aft26 header.hidePC');\n    if (!header)\n        return;\n    var lastScrollY = window.scrollY;\n    window.addEventListener('scroll', function () {\n        var currentScrollY = window.scrollY;\n        var scrollingDown = currentScrollY > lastScrollY;\n        var pastThreshold = currentScrollY > window.innerHeight * 0.5;\n        var menuOpen = document.documentElement.classList.contains('sb-active-right');\n        if (!menuOpen) {\n            if (pastThreshold && scrollingDown) {\n                header.classList.add(HIDDEN_CLASS);\n            }\n            else if (!scrollingDown) {\n                header.classList.remove(HIDDEN_CLASS);\n            }\n        }\n        lastScrollY = currentScrollY;\n    }, { passive: true });\n}\nfunction initSpDrawer() {\n    var htmlEl = document.documentElement;\n    var menuBtn = document.querySelector('.sb-toggle-right.mb-menu-button');\n    var header = document.querySelector('body.aft26 header.hidePC');\n    if (!menuBtn)\n        return;\n    // 暗幕オーバーレイを生成\n    var overlay = document.createElement('div');\n    overlay.className = 'sp-drawer-overlay';\n    document.body.appendChild(overlay);\n    // slidebars が <html> に付与するクラスを監視してUI同期\n    var observer = new MutationObserver(function () {\n        var isOpen = htmlEl.classList.contains('sb-active-right');\n        menuBtn.classList.toggle('is-menu-open', isOpen);\n        overlay.classList.toggle('is-active', isOpen);\n        document.body.style.overflow = isOpen ? 'hidden' : '';\n        // メニュー展開中はヘッダーを強制表示\n        if (isOpen && header) {\n            header.classList.remove(HIDDEN_CLASS);\n        }\n    });\n    observer.observe(htmlEl, { attributes: true, attributeFilter: ['class'] });\n    // 暗幕タップ/クリックでドロワーを閉じる\n    // モバイルでは slidebars が touchend 後に click ハンドラを削除するため\n    // touchend では jQuery 経由で touchend をトリガーし直す\n    overlay.addEventListener('touchend', function (e) {\n        e.preventDefault(); // 後続の click イベントを抑制\n        var jq = window.jQuery || window.$;\n        if (jq)\n            jq(menuBtn).trigger('touchend');\n    });\n    overlay.addEventListener('click', function () {\n        menuBtn.click(); // デスクトップ用フォールバック\n    });\n}\n\n\n//# sourceURL=webpack://assets/../../../../Y.%E8%96%AC%E3%82%BC%E3%83%9F/wp2026/yakuzemi/yz/wp-content/themes/yakuzemi/assets/npm/js/src/js/sp-header.ts?\n}");

/***/ }

/******/ 	});
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
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
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
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("../../../../Y.薬ゼミ/wp2026/yakuzemi/yz/wp-content/themes/yakuzemi/assets/npm/js/src/index.ts");
/******/ 	
/******/ })()
;