/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/form.js":
/*!******************************!*\
  !*** ./resources/js/form.js ***!
  \******************************/
/***/ (() => {

eval("window.addEventListener('load', function () {\n  var tradeDateField = document.getElementById('tradeDate');\n  var isNormalTrade = document.getElementById('flexSwitchCheckDefault');\n  var startTime = document.getElementById('tradeEntryTime');\n  var closingTime = document.getElementById('tradeClosingTime');\n  var today = new Date();\n  tradeDateField.valueAsDate = today;\n\n  var calculateClosingTime = function calculateClosingTime() {\n    var getMinutes = startTime.value.split(':');\n    var stringToInt = parseInt(getMinutes[1]);\n    var closing = isNormalTrade.checked ? stringToInt + 5 : stringToInt + 14;\n    closingTime.value = \"\".concat(getMinutes[0].toString(), \":\").concat(closing.toString());\n  };\n\n  startTime.addEventListener('change', calculateClosingTime);\n  isNormalTrade.addEventListener('change', calculateClosingTime);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJ3aW5kb3ciLCJhZGRFdmVudExpc3RlbmVyIiwidHJhZGVEYXRlRmllbGQiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiaXNOb3JtYWxUcmFkZSIsInN0YXJ0VGltZSIsImNsb3NpbmdUaW1lIiwidG9kYXkiLCJEYXRlIiwidmFsdWVBc0RhdGUiLCJjYWxjdWxhdGVDbG9zaW5nVGltZSIsImdldE1pbnV0ZXMiLCJ2YWx1ZSIsInNwbGl0Iiwic3RyaW5nVG9JbnQiLCJwYXJzZUludCIsImNsb3NpbmciLCJjaGVja2VkIiwidG9TdHJpbmciXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2Zvcm0uanM/NGYxOSJdLCJzb3VyY2VzQ29udGVudCI6WyJ3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignbG9hZCcsICgpID0+IHtcclxuICBjb25zdCB0cmFkZURhdGVGaWVsZCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0cmFkZURhdGUnKTtcclxuICBjb25zdCBpc05vcm1hbFRyYWRlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2ZsZXhTd2l0Y2hDaGVja0RlZmF1bHQnKTtcclxuICBjb25zdCBzdGFydFRpbWUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndHJhZGVFbnRyeVRpbWUnKTtcclxuICBjb25zdCBjbG9zaW5nVGltZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0cmFkZUNsb3NpbmdUaW1lJyk7XHJcbiAgY29uc3QgdG9kYXkgPSBuZXcgRGF0ZSgpO1xyXG5cclxuICB0cmFkZURhdGVGaWVsZC52YWx1ZUFzRGF0ZSA9IHRvZGF5O1xyXG5cclxuICBsZXQgY2FsY3VsYXRlQ2xvc2luZ1RpbWUgPSAoKSA9PiB7XHJcbiAgICBsZXQgZ2V0TWludXRlcyA9IHN0YXJ0VGltZS52YWx1ZS5zcGxpdCgnOicpO1xyXG4gICAgbGV0IHN0cmluZ1RvSW50ID0gcGFyc2VJbnQoZ2V0TWludXRlc1sxXSk7XHJcbiAgICBsZXQgY2xvc2luZyA9IGlzTm9ybWFsVHJhZGUuY2hlY2tlZCA/IHN0cmluZ1RvSW50ICsgNSA6IHN0cmluZ1RvSW50ICsgMTQ7XHJcbiAgICBjbG9zaW5nVGltZS52YWx1ZSA9IGAke2dldE1pbnV0ZXNbMF0udG9TdHJpbmcoKX06JHtjbG9zaW5nLnRvU3RyaW5nKCl9YDtcclxuICB9XHJcblxyXG4gIHN0YXJ0VGltZS5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCBjYWxjdWxhdGVDbG9zaW5nVGltZSk7XHJcbiAgaXNOb3JtYWxUcmFkZS5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCBjYWxjdWxhdGVDbG9zaW5nVGltZSk7XHJcbn0pOyJdLCJtYXBwaW5ncyI6IkFBQUFBLE1BQU0sQ0FBQ0MsZ0JBQVAsQ0FBd0IsTUFBeEIsRUFBZ0MsWUFBTTtFQUNwQyxJQUFNQyxjQUFjLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixXQUF4QixDQUF2QjtFQUNBLElBQU1DLGFBQWEsR0FBR0YsUUFBUSxDQUFDQyxjQUFULENBQXdCLHdCQUF4QixDQUF0QjtFQUNBLElBQU1FLFNBQVMsR0FBR0gsUUFBUSxDQUFDQyxjQUFULENBQXdCLGdCQUF4QixDQUFsQjtFQUNBLElBQU1HLFdBQVcsR0FBR0osUUFBUSxDQUFDQyxjQUFULENBQXdCLGtCQUF4QixDQUFwQjtFQUNBLElBQU1JLEtBQUssR0FBRyxJQUFJQyxJQUFKLEVBQWQ7RUFFQVAsY0FBYyxDQUFDUSxXQUFmLEdBQTZCRixLQUE3Qjs7RUFFQSxJQUFJRyxvQkFBb0IsR0FBRyxTQUF2QkEsb0JBQXVCLEdBQU07SUFDL0IsSUFBSUMsVUFBVSxHQUFHTixTQUFTLENBQUNPLEtBQVYsQ0FBZ0JDLEtBQWhCLENBQXNCLEdBQXRCLENBQWpCO0lBQ0EsSUFBSUMsV0FBVyxHQUFHQyxRQUFRLENBQUNKLFVBQVUsQ0FBQyxDQUFELENBQVgsQ0FBMUI7SUFDQSxJQUFJSyxPQUFPLEdBQUdaLGFBQWEsQ0FBQ2EsT0FBZCxHQUF3QkgsV0FBVyxHQUFHLENBQXRDLEdBQTBDQSxXQUFXLEdBQUcsRUFBdEU7SUFDQVIsV0FBVyxDQUFDTSxLQUFaLGFBQXVCRCxVQUFVLENBQUMsQ0FBRCxDQUFWLENBQWNPLFFBQWQsRUFBdkIsY0FBbURGLE9BQU8sQ0FBQ0UsUUFBUixFQUFuRDtFQUNELENBTEQ7O0VBT0FiLFNBQVMsQ0FBQ0wsZ0JBQVYsQ0FBMkIsUUFBM0IsRUFBcUNVLG9CQUFyQztFQUNBTixhQUFhLENBQUNKLGdCQUFkLENBQStCLFFBQS9CLEVBQXlDVSxvQkFBekM7QUFDRCxDQWxCRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9mb3JtLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/form.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/form.js"]();
/******/ 	
/******/ })()
;