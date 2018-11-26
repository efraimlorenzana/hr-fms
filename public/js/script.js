/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 50);
/******/ })
/************************************************************************/
/******/ ({

/***/ 50:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(51);


/***/ }),

/***/ 51:
/***/ (function(module, exports, __webpack_require__) {

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

__webpack_require__(52);
__webpack_require__(53);

__webpack_require__(54);
__webpack_require__(55);
__webpack_require__(56);
__webpack_require__(57);

/***/ }),

/***/ 52:
/***/ (function(module, exports) {

searchEmployee = function searchEmployee(e) {
    var list = "";
    var search__list = document.querySelector('.search__suggestion');
    var search__text = document.querySelector('.search__text');

    $.get('/employee/search', {
        term: e.target.value
    }, function (data) {
        data.forEach(function (result) {
            list = list + ('<li onclick="returnTerm(event)" class="search__item">' + result + '</li>');
        });

        document.querySelector('.search__list').innerHTML = list;
        search__list.hidden = false;
    });

    e.target.onblur = function () {
        setTimeout(function () {
            search__list.hidden = true;
        }, 500);
    };

    returnTerm = function returnTerm(e) {
        search__text.value = e.target.textContent.trim();

        search__text.focus();
    };
};

/***/ }),

/***/ 53:
/***/ (function(module, exports) {

uploadFile = function uploadFile(e) {
    $('#formUpload').submit();
};

/***/ }),

/***/ 54:
/***/ (function(module, exports) {

initialScript = function initialScript() {
    if (window.location.href.includes('/home/employee/file')) {
        document.querySelectorAll('.nav__employee-view').forEach(function (e) {
            e.classList.add('sidenav--active');
        });
    }

    if (window.location.href.includes('/home/employee/search')) {
        document.querySelectorAll('.nav__employee-view').forEach(function (e) {
            e.classList.add('sidenav--active');
        });
    }

    if (window.location.href.includes('/home/employee/new')) {
        document.querySelectorAll('.nav__employee-new').forEach(function (e) {
            e.classList.add('sidenav--active');
        });
    }

    if (window.location.href.includes('/Setting/Index')) {
        document.querySelectorAll('.nav__setting').forEach(function (e) {
            e.classList.add('sidenav--active');
        });
    }

    if (window.location.href.includes('/home/dashboard')) {
        document.querySelectorAll('.nav__dashboard').forEach(function (e) {
            e.classList.add('sidenav--active');
        });
    }
};

initialScript();

/***/ }),

/***/ 55:
/***/ (function(module, exports) {

// Index
getRecords = function getRecords(e, emp_id, file_id) {
	var links = document.querySelectorAll('.subNavLink');

	var buffer = '<div class="loading">Loading . . .</div>';
	$('.employee__content--result').html(buffer);

	links.forEach(function (link) {
		link.classList.remove('tab-active');
	});

	e.target.classList.add('tab-active');

	$.get('/Employee/File/Records', { emp_id: emp_id, file_id: file_id }, function (data) {
		$('.employee__content--result').html(data);
	});
};

// Add new Employee
previewImage = function previewImage(e) {
	var image = document.querySelector('#preview');
	var reader = new FileReader();

	reader.onload = function (e) {
		image.src = reader.result;
		image.parentElement.hidden = false;
	};
	reader.readAsDataURL(e.target.files[0]);

	// console.log(reader);
};

/***/ }),

/***/ 56:
/***/ (function(module, exports) {

deleteRecord = function deleteRecord(id) {

    $.get('/File/delete', { id: id }, function (data) {
        $('.employee__content--result').html(data);
    });
};

backToRecord = function backToRecord(e, emp_id, file_id) {
    var tab = document.querySelector('.tab-active');
    getRecords(e, emp_id, file_id);
    tab.classList.add('tab-active');
};

/***/ }),

/***/ 57:
/***/ (function(module, exports) {

getAction = function getAction(e) {
    var url = "";

    var link = document.querySelector('.set-active');

    if (link) {
        link.classList.remove('set-active');
    }

    switch (e.target.name) {
        case "register":
            url = "/register";
            break;
        case "list":
            url = "/Users";
            break;
        case "permission":
            url = "/User/permission";
            break;
        case "reset":
            url = "/password/reset";
            break;

        default:
            break;
    }

    e.target.classList.add('set-active');

    $.get(url, {}, function (data) {
        $('.setting__content').html(data);
    });
};

deleteUser = function deleteUser(id) {
    console.log(id);
    $.get('/User/delete', { id: id }, function (data) {
        $('.setting__content').html(data);
    });
};

userDetails = function userDetails(user_id) {
    $.get('/User/permission/roles', { user_id: user_id }, function (data) {
        $('.permission__content').html(data);
    });
};

changeRole = function changeRole(e) {
    var role_id = e.target.dataset.role_id;
    var user_id = e.target.dataset.user_id;

    $.post('/User/permission/role/change', { role_id: role_id, user_id: user_id }, function (data) {
        // $('').html(data);
        document.querySelector('.roles__notification').classList.add('notify');
    });
};

/***/ })

/******/ });