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

/***/ "./resources/js/category/create.js":
/*!*****************************************!*\
  !*** ./resources/js/category/create.js ***!
  \*****************************************/
/***/ (() => {

eval("// Description editor\nvar fullEditor = new Quill('#category-description-editor', {\n  modules: {\n    toolbar: [[{\n      header: [1, 2, false]\n    }], ['bold', 'italic', 'underline'], ['image', 'code-block']]\n  },\n  theme: 'snow' // or 'bubble'\n});\n\nfullEditor.root.innerHTML = $('#category-description').val();\n\n// Add category submit event\n$('#submit-btn').on('click', function (e) {\n  e.preventDefault();\n  var description = fullEditor.root.innerHTML;\n  $('#category-description').val(description);\n  $('#kt_ecommerce_add_category_form').submit();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJmdWxsRWRpdG9yIiwiUXVpbGwiLCJtb2R1bGVzIiwidG9vbGJhciIsImhlYWRlciIsInRoZW1lIiwicm9vdCIsImlubmVySFRNTCIsIiQiLCJ2YWwiLCJvbiIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImRlc2NyaXB0aW9uIiwic3VibWl0Il0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9jYXRlZ29yeS9jcmVhdGUuanM/ZmEyNyJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBEZXNjcmlwdGlvbiBlZGl0b3JcbnZhciBmdWxsRWRpdG9yID0gbmV3IFF1aWxsKCcjY2F0ZWdvcnktZGVzY3JpcHRpb24tZWRpdG9yJywge1xuICAgIG1vZHVsZXM6IHtcbiAgICAgICAgdG9vbGJhcjogW1xuICAgICAgICAgICAgW3tcbiAgICAgICAgICAgICAgICBoZWFkZXI6IFsxLCAyLCBmYWxzZV1cbiAgICAgICAgICAgIH1dLFxuICAgICAgICAgICAgWydib2xkJywgJ2l0YWxpYycsICd1bmRlcmxpbmUnXSxcbiAgICAgICAgICAgIFsnaW1hZ2UnLCAnY29kZS1ibG9jayddXG4gICAgICAgIF1cbiAgICB9LFxuICAgIHRoZW1lOiAnc25vdycgLy8gb3IgJ2J1YmJsZSdcbn0pO1xuXG5mdWxsRWRpdG9yLnJvb3QuaW5uZXJIVE1MID0gJCgnI2NhdGVnb3J5LWRlc2NyaXB0aW9uJykudmFsKCk7XG5cbi8vIEFkZCBjYXRlZ29yeSBzdWJtaXQgZXZlbnRcbiQoJyNzdWJtaXQtYnRuJykub24oJ2NsaWNrJywgKGUpID0+IHtcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgY29uc3QgZGVzY3JpcHRpb24gPSBmdWxsRWRpdG9yLnJvb3QuaW5uZXJIVE1MO1xuICAgICQoJyNjYXRlZ29yeS1kZXNjcmlwdGlvbicpLnZhbChkZXNjcmlwdGlvbik7XG4gICAgJCgnI2t0X2Vjb21tZXJjZV9hZGRfY2F0ZWdvcnlfZm9ybScpLnN1Ym1pdCgpO1xufSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0EsSUFBSUEsVUFBVSxHQUFHLElBQUlDLEtBQUssQ0FBQyw4QkFBOEIsRUFBRTtFQUN2REMsT0FBTyxFQUFFO0lBQ0xDLE9BQU8sRUFBRSxDQUNMLENBQUM7TUFDR0MsTUFBTSxFQUFFLENBQUMsQ0FBQyxFQUFFLENBQUMsRUFBRSxLQUFLO0lBQ3hCLENBQUMsQ0FBQyxFQUNGLENBQUMsTUFBTSxFQUFFLFFBQVEsRUFBRSxXQUFXLENBQUMsRUFDL0IsQ0FBQyxPQUFPLEVBQUUsWUFBWSxDQUFDO0VBRS9CLENBQUM7RUFDREMsS0FBSyxFQUFFLE1BQU0sQ0FBQztBQUNsQixDQUFDLENBQUM7O0FBRUZMLFVBQVUsQ0FBQ00sSUFBSSxDQUFDQyxTQUFTLEdBQUdDLENBQUMsQ0FBQyx1QkFBdUIsQ0FBQyxDQUFDQyxHQUFHLEVBQUU7O0FBRTVEO0FBQ0FELENBQUMsQ0FBQyxhQUFhLENBQUMsQ0FBQ0UsRUFBRSxDQUFDLE9BQU8sRUFBRSxVQUFDQyxDQUFDLEVBQUs7RUFDaENBLENBQUMsQ0FBQ0MsY0FBYyxFQUFFO0VBQ2xCLElBQU1DLFdBQVcsR0FBR2IsVUFBVSxDQUFDTSxJQUFJLENBQUNDLFNBQVM7RUFDN0NDLENBQUMsQ0FBQyx1QkFBdUIsQ0FBQyxDQUFDQyxHQUFHLENBQUNJLFdBQVcsQ0FBQztFQUMzQ0wsQ0FBQyxDQUFDLGlDQUFpQyxDQUFDLENBQUNNLE1BQU0sRUFBRTtBQUNqRCxDQUFDLENBQUMiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY2F0ZWdvcnkvY3JlYXRlLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/category/create.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/category/create.js"]();
/******/ 	
/******/ })()
;