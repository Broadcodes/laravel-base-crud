(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/js/confirmDelate.js":
/*!***************************************!*\
  !*** ./resources/js/confirmDelate.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var delateInput = document.querySelector('.deleteInput');
delateInput.style.padding = "20px";
delateInput.addEventListener('click', function () {
  if (!confirm('Vuoi davvero cancellare il fumetto?')) {
    delateInput.type = "button";
  } else {
    delateInput.type = "submit";
  }
});

/***/ })

}]);