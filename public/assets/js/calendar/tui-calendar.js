/*!
 * TOAST UI Calendar
 * @version 1.12.13 | Tue Apr 28 2020
 * @author NHN FE Development Lab <dl_javascript@nhn.com>
 * @license MIT
 */
(function webpackUniversalModuleDefinition(root, factory) {
    if (typeof exports === 'object' && typeof module === 'object')
        module.exports = factory(require("tui-code-snippet"), require("tui-date-picker"));
    else if (typeof define === 'function' && define.amd)
        define(["tui-code-snippet", "tui-date-picker"], factory);
    else if (typeof exports === 'object')
        exports["Calendar"] = factory(require("tui-code-snippet"), require("tui-date-picker"));
    else
        root["tui"] = root["tui"] || {}, root["tui"]["Calendar"] = factory((root["tui"] && root["tui"]["util"]), (root["tui"] && root["tui"]["DatePicker"]));
})(window, function (__WEBPACK_EXTERNAL_MODULE_tui_code_snippet__, __WEBPACK_EXTERNAL_MODULE_tui_date_picker__) {
    return /******/ (function (modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if (installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
                /******/
            }
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
                /******/
            };
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
            /******/
        }
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function (exports, name, getter) {
/******/ 		if (!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
                /******/
            }
            /******/
        };
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function (exports) {
/******/ 		if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
                /******/
            }
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
            /******/
        };
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function (value, mode) {
/******/ 		if (mode & 1) value = __webpack_require__(value);
/******/ 		if (mode & 8) return value;
/******/ 		if ((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if (mode & 2 && typeof value != 'string') for (var key in value) __webpack_require__.d(ns, key, function (key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
            /******/
        };
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function (module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
            /******/
        };
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function (object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/dist";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
        /******/
    })
/************************************************************************/
/******/({

/***/ "./node_modules/handlebars-template-loader/runtime/index.js":
/*!******************************************************************!*\
  !*** ./node_modules/handlebars-template-loader/runtime/index.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                module.exports = __webpack_require__(/*! handlebars/runtime */ "./node_modules/handlebars/dist/cjs/handlebars.runtime.js");

                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars.runtime.js":
/*!****************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars.runtime.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                // istanbul ignore next

                function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

                // istanbul ignore next

                function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj['default'] = obj; return newObj; } }

                var _handlebarsBase = __webpack_require__(/*! ./handlebars/base */ "./node_modules/handlebars/dist/cjs/handlebars/base.js");

                var base = _interopRequireWildcard(_handlebarsBase);

                // Each of these augment the Handlebars object. No need to setup here.
                // (This is done to easily share code between commonjs and browse envs)

                var _handlebarsSafeString = __webpack_require__(/*! ./handlebars/safe-string */ "./node_modules/handlebars/dist/cjs/handlebars/safe-string.js");

                var _handlebarsSafeString2 = _interopRequireDefault(_handlebarsSafeString);

                var _handlebarsException = __webpack_require__(/*! ./handlebars/exception */ "./node_modules/handlebars/dist/cjs/handlebars/exception.js");

                var _handlebarsException2 = _interopRequireDefault(_handlebarsException);

                var _handlebarsUtils = __webpack_require__(/*! ./handlebars/utils */ "./node_modules/handlebars/dist/cjs/handlebars/utils.js");

                var Utils = _interopRequireWildcard(_handlebarsUtils);

                var _handlebarsRuntime = __webpack_require__(/*! ./handlebars/runtime */ "./node_modules/handlebars/dist/cjs/handlebars/runtime.js");

                var runtime = _interopRequireWildcard(_handlebarsRuntime);

                var _handlebarsNoConflict = __webpack_require__(/*! ./handlebars/no-conflict */ "./node_modules/handlebars/dist/cjs/handlebars/no-conflict.js");

                var _handlebarsNoConflict2 = _interopRequireDefault(_handlebarsNoConflict);

                // For compatibility and usage outside of module systems, make the Handlebars object a namespace
                function create() {
                    var hb = new base.HandlebarsEnvironment();

                    Utils.extend(hb, base);
                    hb.SafeString = _handlebarsSafeString2['default'];
                    hb.Exception = _handlebarsException2['default'];
                    hb.Utils = Utils;
                    hb.escapeExpression = Utils.escapeExpression;

                    hb.VM = runtime;
                    hb.template = function (spec) {
                        return runtime.template(spec, hb);
                    };

                    return hb;
                }

                var inst = create();
                inst.create = create;

                _handlebarsNoConflict2['default'](inst);

                inst['default'] = inst;

                exports['default'] = inst;
                module.exports = exports['default'];


                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/base.js":
/*!*************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/base.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                exports.HandlebarsEnvironment = HandlebarsEnvironment;
                // istanbul ignore next

                function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

                var _utils = __webpack_require__(/*! ./utils */ "./node_modules/handlebars/dist/cjs/handlebars/utils.js");

                var _exception = __webpack_require__(/*! ./exception */ "./node_modules/handlebars/dist/cjs/handlebars/exception.js");

                var _exception2 = _interopRequireDefault(_exception);

                var _helpers = __webpack_require__(/*! ./helpers */ "./node_modules/handlebars/dist/cjs/handlebars/helpers.js");

                var _decorators = __webpack_require__(/*! ./decorators */ "./node_modules/handlebars/dist/cjs/handlebars/decorators.js");

                var _logger = __webpack_require__(/*! ./logger */ "./node_modules/handlebars/dist/cjs/handlebars/logger.js");

                var _logger2 = _interopRequireDefault(_logger);

                var _internalProtoAccess = __webpack_require__(/*! ./internal/proto-access */ "./node_modules/handlebars/dist/cjs/handlebars/internal/proto-access.js");

                var VERSION = '4.7.3';
                exports.VERSION = VERSION;
                var COMPILER_REVISION = 8;
                exports.COMPILER_REVISION = COMPILER_REVISION;
                var LAST_COMPATIBLE_COMPILER_REVISION = 7;

                exports.LAST_COMPATIBLE_COMPILER_REVISION = LAST_COMPATIBLE_COMPILER_REVISION;
                var REVISION_CHANGES = {
                    1: '<= 1.0.rc.2', // 1.0.rc.2 is actually rev2 but doesn't report it
                    2: '== 1.0.0-rc.3',
                    3: '== 1.0.0-rc.4',
                    4: '== 1.x.x',
                    5: '== 2.0.0-alpha.x',
                    6: '>= 2.0.0-beta.1',
                    7: '>= 4.0.0 <4.3.0',
                    8: '>= 4.3.0'
                };

                exports.REVISION_CHANGES = REVISION_CHANGES;
                var objectType = '[object Object]';

                function HandlebarsEnvironment(helpers, partials, decorators) {
                    this.helpers = helpers || {};
                    this.partials = partials || {};
                    this.decorators = decorators || {};

                    _helpers.registerDefaultHelpers(this);
                    _decorators.registerDefaultDecorators(this);
                }

                HandlebarsEnvironment.prototype = {
                    constructor: HandlebarsEnvironment,

                    logger: _logger2['default'],
                    log: _logger2['default'].log,

                    registerHelper: function registerHelper(name, fn) {
                        if (_utils.toString.call(name) === objectType) {
                            if (fn) {
                                throw new _exception2['default']('Arg not supported with multiple helpers');
                            }
                            _utils.extend(this.helpers, name);
                        } else {
                            this.helpers[name] = fn;
                        }
                    },
                    unregisterHelper: function unregisterHelper(name) {
                        delete this.helpers[name];
                    },

                    registerPartial: function registerPartial(name, partial) {
                        if (_utils.toString.call(name) === objectType) {
                            _utils.extend(this.partials, name);
                        } else {
                            if (typeof partial === 'undefined') {
                                throw new _exception2['default']('Attempting to register a partial called "' + name + '" as undefined');
                            }
                            this.partials[name] = partial;
                        }
                    },
                    unregisterPartial: function unregisterPartial(name) {
                        delete this.partials[name];
                    },

                    registerDecorator: function registerDecorator(name, fn) {
                        if (_utils.toString.call(name) === objectType) {
                            if (fn) {
                                throw new _exception2['default']('Arg not supported with multiple decorators');
                            }
                            _utils.extend(this.decorators, name);
                        } else {
                            this.decorators[name] = fn;
                        }
                    },
                    unregisterDecorator: function unregisterDecorator(name) {
                        delete this.decorators[name];
                    },
                    /**
                     * Reset the memory of illegal property accesses that have already been logged.
                     * @deprecated should only be used in handlebars test-cases
                     */
                    resetLoggedPropertyAccesses: function resetLoggedPropertyAccesses() {
                        _internalProtoAccess.resetLoggedProperties();
                    }
                };

                var log = _logger2['default'].log;

                exports.log = log;
                exports.createFrame = _utils.createFrame;
                exports.logger = _logger2['default'];
                


                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/decorators.js":
/*!*******************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/decorators.js ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                exports.registerDefaultDecorators = registerDefaultDecorators;
                // istanbul ignore next

                function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

                var _decoratorsInline = __webpack_require__(/*! ./decorators/inline */ "./node_modules/handlebars/dist/cjs/handlebars/decorators/inline.js");

                var _decoratorsInline2 = _interopRequireDefault(_decoratorsInline);

                function registerDefaultDecorators(instance) {
                    _decoratorsInline2['default'](instance);
                }



                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/decorators/inline.js":
/*!**************************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/decorators/inline.js ***!
  \**************************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;

                var _utils = __webpack_require__(/*! ../utils */ "./node_modules/handlebars/dist/cjs/handlebars/utils.js");

                exports['default'] = function (instance) {
                    instance.registerDecorator('inline', function (fn, props, container, options) {
                        var ret = fn;
                        if (!props.partials) {
                            props.partials = {};
                            ret = function (context, options) {
                                // Create a new partials stack frame prior to exec.
                                var original = container.partials;
                                container.partials = _utils.extend({}, original, props.partials);
                                var ret = fn(context, options);
                                container.partials = original;
                                return ret;
                            };
                        }

                        props.partials[options.args[0]] = options.fn;

                        return ret;
                    });
                };

                module.exports = exports['default'];
                


                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/exception.js":
/*!******************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/exception.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                var errorProps = ['description', 'fileName', 'lineNumber', 'endLineNumber', 'message', 'name', 'number', 'stack'];

                function Exception(message, node) {
                    var loc = node && node.loc,
                        line = undefined,
                        endLineNumber = undefined,
                        column = undefined,
                        endColumn = undefined;

                    if (loc) {
                        line = loc.start.line;
                        endLineNumber = loc.end.line;
                        column = loc.start.column;
                        endColumn = loc.end.column;

                        message += ' - ' + line + ':' + column;
                    }

                    var tmp = Error.prototype.constructor.call(this, message);

                    // Unfortunately errors are not enumerable in Chrome (at least), so `for prop in tmp` doesn't work.
                    for (var idx = 0; idx < errorProps.length; idx++) {
                        this[errorProps[idx]] = tmp[errorProps[idx]];
                    }

                    /* istanbul ignore else */
                    if (Error.captureStackTrace) {
                        Error.captureStackTrace(this, Exception);
                    }

                    try {
                        if (loc) {
                            this.lineNumber = line;
                            this.endLineNumber = endLineNumber;

                            // Work around issue under safari where we can't directly set the column value
                            /* istanbul ignore next */
                            if (Object.defineProperty) {
                                Object.defineProperty(this, 'column', {
                                    value: column,
                                    enumerable: true
                                });
                                Object.defineProperty(this, 'endColumn', {
                                    value: endColumn,
                                    enumerable: true
                                });
                            } else {
                                this.column = column;
                                this.endColumn = endColumn;
                            }
                        }
                    } catch (nop) {
                        /* Ignore if the browser is very particular */
                    }
                }

                Exception.prototype = new Error();

                exports['default'] = Exception;
                module.exports = exports['default'];



                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/helpers.js":
/*!****************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/helpers.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                exports.registerDefaultHelpers = registerDefaultHelpers;
                exports.moveHelperToHooks = moveHelperToHooks;
                // istanbul ignore next

                function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

                var _helpersBlockHelperMissing = __webpack_require__(/*! ./helpers/block-helper-missing */ "./node_modules/handlebars/dist/cjs/handlebars/helpers/block-helper-missing.js");

                var _helpersBlockHelperMissing2 = _interopRequireDefault(_helpersBlockHelperMissing);

                var _helpersEach = __webpack_require__(/*! ./helpers/each */ "./node_modules/handlebars/dist/cjs/handlebars/helpers/each.js");

                var _helpersEach2 = _interopRequireDefault(_helpersEach);

                var _helpersHelperMissing = __webpack_require__(/*! ./helpers/helper-missing */ "./node_modules/handlebars/dist/cjs/handlebars/helpers/helper-missing.js");

                var _helpersHelperMissing2 = _interopRequireDefault(_helpersHelperMissing);

                var _helpersIf = __webpack_require__(/*! ./helpers/if */ "./node_modules/handlebars/dist/cjs/handlebars/helpers/if.js");

                var _helpersIf2 = _interopRequireDefault(_helpersIf);

                var _helpersLog = __webpack_require__(/*! ./helpers/log */ "./node_modules/handlebars/dist/cjs/handlebars/helpers/log.js");

                var _helpersLog2 = _interopRequireDefault(_helpersLog);

                var _helpersLookup = __webpack_require__(/*! ./helpers/lookup */ "./node_modules/handlebars/dist/cjs/handlebars/helpers/lookup.js");

                var _helpersLookup2 = _interopRequireDefault(_helpersLookup);

                var _helpersWith = __webpack_require__(/*! ./helpers/with */ "./node_modules/handlebars/dist/cjs/handlebars/helpers/with.js");

                var _helpersWith2 = _interopRequireDefault(_helpersWith);

                function registerDefaultHelpers(instance) {
                    _helpersBlockHelperMissing2['default'](instance);
                    _helpersEach2['default'](instance);
                    _helpersHelperMissing2['default'](instance);
                    _helpersIf2['default'](instance);
                    _helpersLog2['default'](instance);
                    _helpersLookup2['default'](instance);
                    _helpersWith2['default'](instance);
                }

                function moveHelperToHooks(instance, helperName, keepHelper) {
                    if (instance.helpers[helperName]) {
                        instance.hooks[helperName] = instance.helpers[helperName];
                        if (!keepHelper) {
                            delete instance.helpers[helperName];
                        }
                    }
                }



                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/helpers/block-helper-missing.js":
/*!*************************************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/helpers/block-helper-missing.js ***!
  \*************************************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;

                var _utils = __webpack_require__(/*! ../utils */ "./node_modules/handlebars/dist/cjs/handlebars/utils.js");

                exports['default'] = function (instance) {
                    instance.registerHelper('blockHelperMissing', function (context, options) {
                        var inverse = options.inverse,
                            fn = options.fn;

                        if (context === true) {
                            return fn(this);
                        } else if (context === false || context == null) {
                            return inverse(this);
                        } else if (_utils.isArray(context)) {
                            if (context.length > 0) {
                                if (options.ids) {
                                    options.ids = [options.name];
                                }

                                return instance.helpers.each(context, options);
                            } else {
                                return inverse(this);
                            }
                        } else {
                            if (options.data && options.ids) {
                                var data = _utils.createFrame(options.data);
                                data.contextPath = _utils.appendContextPath(options.data.contextPath, options.name);
                                options = { data: data };
                            }

                            return fn(context, options);
                        }
                    });
                };

                module.exports = exports['default'];



                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/helpers/each.js":
/*!*********************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/helpers/each.js ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
/* WEBPACK VAR INJECTION */(function (global) {

                    exports.__esModule = true;
                    // istanbul ignore next

                    function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

                    var _utils = __webpack_require__(/*! ../utils */ "./node_modules/handlebars/dist/cjs/handlebars/utils.js");

                    var _exception = __webpack_require__(/*! ../exception */ "./node_modules/handlebars/dist/cjs/handlebars/exception.js");

                    var _exception2 = _interopRequireDefault(_exception);

                    exports['default'] = function (instance) {
                        instance.registerHelper('each', function (context, options) {
                            if (!options) {
                                throw new _exception2['default']('Must pass iterator to #each');
                            }

                            var fn = options.fn,
                                inverse = options.inverse,
                                i = 0,
                                ret = '',
                                data = undefined,
                                contextPath = undefined;

                            if (options.data && options.ids) {
                                contextPath = _utils.appendContextPath(options.data.contextPath, options.ids[0]) + '.';
                            }

                            if (_utils.isFunction(context)) {
                                context = context.call(this);
                            }

                            if (options.data) {
                                data = _utils.createFrame(options.data);
                            }

                            function execIteration(field, index, last) {
                                if (data) {
                                    data.key = field;
                                    data.index = index;
                                    data.first = index === 0;
                                    data.last = !!last;

                                    if (contextPath) {
                                        data.contextPath = contextPath + field;
                                    }
                                }

                                ret = ret + fn(context[field], {
                                    data: data,
                                    blockParams: _utils.blockParams([context[field], field], [contextPath + field, null])
                                });
                            }

                            if (context && typeof context === 'object') {
                                if (_utils.isArray(context)) {
                                    for (var j = context.length; i < j; i++) {
                                        if (i in context) {
                                            execIteration(i, i, i === context.length - 1);
                                        }
                                    }
                                } else if (global.Symbol && context[global.Symbol.iterator]) {
                                    var newContext = [];
                                    var iterator = context[global.Symbol.iterator]();
                                    for (var it = iterator.next(); !it.done; it = iterator.next()) {
                                        newContext.push(it.value);
                                    }
                                    context = newContext;
                                    for (var j = context.length; i < j; i++) {
                                        execIteration(i, i, i === context.length - 1);
                                    }
                                } else {
                                    (function () {
                                        var priorKey = undefined;

                                        Object.keys(context).forEach(function (key) {
                                            // We're running the iterations one step out of sync so we can detect
                                            // the last iteration without have to scan the object twice and create
                                            // an itermediate keys array.
                                            if (priorKey !== undefined) {
                                                execIteration(priorKey, i - 1);
                                            }
                                            priorKey = key;
                                            i++;
                                        });
                                        if (priorKey !== undefined) {
                                            execIteration(priorKey, i - 1, true);
                                        }
                                    })();
                                }
                            }

                            if (i === 0) {
                                ret = inverse(this);
                            }

                            return ret;
                        });
                    };

                    module.exports = exports['default'];


                    /* WEBPACK VAR INJECTION */
                }.call(this, __webpack_require__(/*! ./../../../../../webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/helpers/helper-missing.js":
/*!*******************************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/helpers/helper-missing.js ***!
  \*******************************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                // istanbul ignore next

                function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

                var _exception = __webpack_require__(/*! ../exception */ "./node_modules/handlebars/dist/cjs/handlebars/exception.js");

                var _exception2 = _interopRequireDefault(_exception);

                exports['default'] = function (instance) {
                    instance.registerHelper('helperMissing', function () /* [args, ]options */ {
                        if (arguments.length === 1) {
                            // A missing field in a {{foo}} construct.
                            return undefined;
                        } else {
                            // Someone is actually trying to call something, blow up.
                            throw new _exception2['default']('Missing helper: "' + arguments[arguments.length - 1].name + '"');
                        }
                    });
                };

                module.exports = exports['default'];



                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/helpers/if.js":
/*!*******************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/helpers/if.js ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                // istanbul ignore next

                function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

                var _utils = __webpack_require__(/*! ../utils */ "./node_modules/handlebars/dist/cjs/handlebars/utils.js");

                var _exception = __webpack_require__(/*! ../exception */ "./node_modules/handlebars/dist/cjs/handlebars/exception.js");

                var _exception2 = _interopRequireDefault(_exception);

                exports['default'] = function (instance) {
                    instance.registerHelper('if', function (conditional, options) {
                        if (arguments.length != 2) {
                            throw new _exception2['default']('#if requires exactly one argument');
                        }
                        if (_utils.isFunction(conditional)) {
                            conditional = conditional.call(this);
                        }

                        // Default behavior is to render the positive path if the value is truthy and not empty.
                        // The `includeZero` option may be set to treat the condtional as purely not empty based on the
                        // behavior of isEmpty. Effectively this determines if 0 is handled by the positive path or negative.
                        if (!options.hash.includeZero && !conditional || _utils.isEmpty(conditional)) {
                            return options.inverse(this);
                        } else {
                            return options.fn(this);
                        }
                    });

                    instance.registerHelper('unless', function (conditional, options) {
                        if (arguments.length != 2) {
                            throw new _exception2['default']('#unless requires exactly one argument');
                        }
                        return instance.helpers['if'].call(this, conditional, {
                            fn: options.inverse,
                            inverse: options.fn,
                            hash: options.hash
                        });
                    });
                };

                module.exports = exports['default'];



                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/helpers/log.js":
/*!********************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/helpers/log.js ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;

                exports['default'] = function (instance) {
                    instance.registerHelper('log', function () /* message, options */ {
                        var args = [undefined],
                            options = arguments[arguments.length - 1];
                        for (var i = 0; i < arguments.length - 1; i++) {
                            args.push(arguments[i]);
                        }

                        var level = 1;
                        if (options.hash.level != null) {
                            level = options.hash.level;
                        } else if (options.data && options.data.level != null) {
                            level = options.data.level;
                        }
                        args[0] = level;

                        instance.log.apply(instance, args);
                    });
                };

                module.exports = exports['default'];



                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/helpers/lookup.js":
/*!***********************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/helpers/lookup.js ***!
  \***********************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;

                exports['default'] = function (instance) {
                    instance.registerHelper('lookup', function (obj, field, options) {
                        if (!obj) {
                            // Note for 5.0: Change to "obj == null" in 5.0
                            return obj;
                        }
                        return options.lookupProperty(obj, field);
                    });
                };

                module.exports = exports['default'];



                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/helpers/with.js":
/*!*********************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/helpers/with.js ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                // istanbul ignore next

                function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

                var _utils = __webpack_require__(/*! ../utils */ "./node_modules/handlebars/dist/cjs/handlebars/utils.js");

                var _exception = __webpack_require__(/*! ../exception */ "./node_modules/handlebars/dist/cjs/handlebars/exception.js");

                var _exception2 = _interopRequireDefault(_exception);

                exports['default'] = function (instance) {
                    instance.registerHelper('with', function (context, options) {
                        if (arguments.length != 2) {
                            throw new _exception2['default']('#with requires exactly one argument');
                        }
                        if (_utils.isFunction(context)) {
                            context = context.call(this);
                        }

                        var fn = options.fn;

                        if (!_utils.isEmpty(context)) {
                            var data = options.data;
                            if (options.data && options.ids) {
                                data = _utils.createFrame(options.data);
                                data.contextPath = _utils.appendContextPath(options.data.contextPath, options.ids[0]);
                            }

                            return fn(context, {
                                data: data,
                                blockParams: _utils.blockParams([context], [data && data.contextPath])
                            });
                        } else {
                            return options.inverse(this);
                        }
                    });
                };

                module.exports = exports['default'];
                


                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/internal/create-new-lookup-object.js":
/*!******************************************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/internal/create-new-lookup-object.js ***!
  \******************************************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                exports.createNewLookupObject = createNewLookupObject;

                var _utils = __webpack_require__(/*! ../utils */ "./node_modules/handlebars/dist/cjs/handlebars/utils.js");

                /**
                 * Create a new object with "null"-prototype to avoid truthy results on prototype properties.
                 * The resulting object can be used with "object[property]" to check if a property exists
                 * @param {...object} sources a varargs parameter of source objects that will be merged
                 * @returns {object}
                 */

                function createNewLookupObject() {
                    for (var _len = arguments.length, sources = Array(_len), _key = 0; _key < _len; _key++) {
                        sources[_key] = arguments[_key];
                    }

                    return _utils.extend.apply(undefined, [Object.create(null)].concat(sources));
                }
                


                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/internal/proto-access.js":
/*!******************************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/internal/proto-access.js ***!
  \******************************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                exports.createProtoAccessControl = createProtoAccessControl;
                exports.resultIsAllowed = resultIsAllowed;
                exports.resetLoggedProperties = resetLoggedProperties;
                // istanbul ignore next

                function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj['default'] = obj; return newObj; } }

                var _createNewLookupObject = __webpack_require__(/*! ./create-new-lookup-object */ "./node_modules/handlebars/dist/cjs/handlebars/internal/create-new-lookup-object.js");

                var _logger = __webpack_require__(/*! ../logger */ "./node_modules/handlebars/dist/cjs/handlebars/logger.js");

                var logger = _interopRequireWildcard(_logger);

                var loggedProperties = Object.create(null);

                function createProtoAccessControl(runtimeOptions) {
                    var defaultMethodWhiteList = Object.create(null);
                    defaultMethodWhiteList['constructor'] = false;
                    defaultMethodWhiteList['__defineGetter__'] = false;
                    defaultMethodWhiteList['__defineSetter__'] = false;
                    defaultMethodWhiteList['__lookupGetter__'] = false;

                    var defaultPropertyWhiteList = Object.create(null);
                    // eslint-disable-next-line no-proto
                    defaultPropertyWhiteList['__proto__'] = false;

                    return {
                        properties: {
                            whitelist: _createNewLookupObject.createNewLookupObject(defaultPropertyWhiteList, runtimeOptions.allowedProtoProperties),
                            defaultValue: runtimeOptions.allowProtoPropertiesByDefault
                        },
                        methods: {
                            whitelist: _createNewLookupObject.createNewLookupObject(defaultMethodWhiteList, runtimeOptions.allowedProtoMethods),
                            defaultValue: runtimeOptions.allowProtoMethodsByDefault
                        }
                    };
                }

                function resultIsAllowed(result, protoAccessControl, propertyName) {
                    if (typeof result === 'function') {
                        return checkWhiteList(protoAccessControl.methods, propertyName);
                    } else {
                        return checkWhiteList(protoAccessControl.properties, propertyName);
                    }
                }

                function checkWhiteList(protoAccessControlForType, propertyName) {
                    if (protoAccessControlForType.whitelist[propertyName] !== undefined) {
                        return protoAccessControlForType.whitelist[propertyName] === true;
                    }
                    if (protoAccessControlForType.defaultValue !== undefined) {
                        return protoAccessControlForType.defaultValue;
                    }
                    logUnexpecedPropertyAccessOnce(propertyName);
                    return false;
                }

                function logUnexpecedPropertyAccessOnce(propertyName) {
                    if (loggedProperties[propertyName] !== true) {
                        loggedProperties[propertyName] = true;
                        logger.log('error', 'Handlebars: Access has been denied to resolve the property "' + propertyName + '" because it is not an "own property" of its parent.\n' + 'You can add a runtime option to disable the check or this warning:\n' + 'See https://handlebarsjs.com/api-reference/runtime-options.html#options-to-control-prototype-access for details');
                    }
                }

                function resetLoggedProperties() {
                    Object.keys(loggedProperties).forEach(function (propertyName) {
                        delete loggedProperties[propertyName];
                    });
                }
                


                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/internal/wrapHelper.js":
/*!****************************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/internal/wrapHelper.js ***!
  \****************************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                exports.wrapHelper = wrapHelper;

                function wrapHelper(helper, transformOptionsFn) {
                    if (typeof helper !== 'function') {
                        // This should not happen, but apparently it does in https://github.com/wycats/handlebars.js/issues/1639
                        // We try to make the wrapper least-invasive by not wrapping it, if the helper is not a function.
                        return helper;
                    }
                    var wrapper = function wrapper() /* dynamic arguments */ {
                        var options = arguments[arguments.length - 1];
                        arguments[arguments.length - 1] = transformOptionsFn(options);
                        return helper.apply(this, arguments);
                    };
                    return wrapper;
                }
                


                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/logger.js":
/*!***************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/logger.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;

                var _utils = __webpack_require__(/*! ./utils */ "./node_modules/handlebars/dist/cjs/handlebars/utils.js");

                var logger = {
                    methodMap: ['debug', 'info', 'warn', 'error'],
                    level: 'info',

                    // Maps a given level value to the `methodMap` indexes above.
                    lookupLevel: function lookupLevel(level) {
                        if (typeof level === 'string') {
                            var levelMap = _utils.indexOf(logger.methodMap, level.toLowerCase());
                            if (levelMap >= 0) {
                                level = levelMap;
                            } else {
                                level = parseInt(level, 10);
                            }
                        }

                        return level;
                    },

                    // Can be overridden in the host environment
                    log: function log(level) {
                        level = logger.lookupLevel(level);

                        if (typeof console !== 'undefined' && logger.lookupLevel(logger.level) <= level) {
                            var method = logger.methodMap[level];
                            // eslint-disable-next-line no-console
                            if (!console[method]) {
                                method = 'log';
                            }

                            for (var _len = arguments.length, message = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
                                message[_key - 1] = arguments[_key];
                            }

                            console[method].apply(console, message); // eslint-disable-line no-console
                        }
                    }
                };

                exports['default'] = logger;
                module.exports = exports['default'];
                


                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/no-conflict.js":
/*!********************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/no-conflict.js ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
/* WEBPACK VAR INJECTION */(function (global) {

                    exports.__esModule = true;

                    exports['default'] = function (Handlebars) {
                        /* istanbul ignore next */
                        var root = typeof global !== 'undefined' ? global : window,
                            $Handlebars = root.Handlebars;
                        /* istanbul ignore next */
                        Handlebars.noConflict = function () {
                            if (root.Handlebars === Handlebars) {
                                root.Handlebars = $Handlebars;
                            }
                            return Handlebars;
                        };
                    };

                    module.exports = exports['default'];
                    

                    /* WEBPACK VAR INJECTION */
                }.call(this, __webpack_require__(/*! ./../../../../webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/runtime.js":
/*!****************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/runtime.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                exports.checkRevision = checkRevision;
                exports.template = template;
                exports.wrapProgram = wrapProgram;
                exports.resolvePartial = resolvePartial;
                exports.invokePartial = invokePartial;
                exports.noop = noop;
                // istanbul ignore next

                function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

                // istanbul ignore next

                function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj['default'] = obj; return newObj; } }

                var _utils = __webpack_require__(/*! ./utils */ "./node_modules/handlebars/dist/cjs/handlebars/utils.js");

                var Utils = _interopRequireWildcard(_utils);

                var _exception = __webpack_require__(/*! ./exception */ "./node_modules/handlebars/dist/cjs/handlebars/exception.js");

                var _exception2 = _interopRequireDefault(_exception);

                var _base = __webpack_require__(/*! ./base */ "./node_modules/handlebars/dist/cjs/handlebars/base.js");

                var _helpers = __webpack_require__(/*! ./helpers */ "./node_modules/handlebars/dist/cjs/handlebars/helpers.js");

                var _internalWrapHelper = __webpack_require__(/*! ./internal/wrapHelper */ "./node_modules/handlebars/dist/cjs/handlebars/internal/wrapHelper.js");

                var _internalProtoAccess = __webpack_require__(/*! ./internal/proto-access */ "./node_modules/handlebars/dist/cjs/handlebars/internal/proto-access.js");

                function checkRevision(compilerInfo) {
                    var compilerRevision = compilerInfo && compilerInfo[0] || 1,
                        currentRevision = _base.COMPILER_REVISION;

                    if (compilerRevision >= _base.LAST_COMPATIBLE_COMPILER_REVISION && compilerRevision <= _base.COMPILER_REVISION) {
                        return;
                    }

                    if (compilerRevision < _base.LAST_COMPATIBLE_COMPILER_REVISION) {
                        var runtimeVersions = _base.REVISION_CHANGES[currentRevision],
                            compilerVersions = _base.REVISION_CHANGES[compilerRevision];
                        throw new _exception2['default']('Template was precompiled with an older version of Handlebars than the current runtime. ' + 'Please update your precompiler to a newer version (' + runtimeVersions + ') or downgrade your runtime to an older version (' + compilerVersions + ').');
                    } else {
                        // Use the embedded version info since the runtime doesn't know about this revision yet
                        throw new _exception2['default']('Template was precompiled with a newer version of Handlebars than the current runtime. ' + 'Please update your runtime to a newer version (' + compilerInfo[1] + ').');
                    }
                }

                function template(templateSpec, env) {
                    /* istanbul ignore next */
                    if (!env) {
                        throw new _exception2['default']('No environment passed to template');
                    }
                    if (!templateSpec || !templateSpec.main) {
                        throw new _exception2['default']('Unknown template object: ' + typeof templateSpec);
                    }

                    templateSpec.main.decorator = templateSpec.main_d;

                    // Note: Using env.VM references rather than local var references throughout this section to allow
                    // for external users to override these as pseudo-supported APIs.
                    env.VM.checkRevision(templateSpec.compiler);

                    // backwards compatibility for precompiled templates with compiler-version 7 (<4.3.0)
                    var templateWasPrecompiledWithCompilerV7 = templateSpec.compiler && templateSpec.compiler[0] === 7;

                    function invokePartialWrapper(partial, context, options) {
                        if (options.hash) {
                            context = Utils.extend({}, context, options.hash);
                            if (options.ids) {
                                options.ids[0] = true;
                            }
                        }
                        partial = env.VM.resolvePartial.call(this, partial, context, options);

                        var extendedOptions = Utils.extend({}, options, {
                            hooks: this.hooks,
                            protoAccessControl: this.protoAccessControl
                        });

                        var result = env.VM.invokePartial.call(this, partial, context, extendedOptions);

                        if (result == null && env.compile) {
                            options.partials[options.name] = env.compile(partial, templateSpec.compilerOptions, env);
                            result = options.partials[options.name](context, extendedOptions);
                        }
                        if (result != null) {
                            if (options.indent) {
                                var lines = result.split('\n');
                                for (var i = 0, l = lines.length; i < l; i++) {
                                    if (!lines[i] && i + 1 === l) {
                                        break;
                                    }

                                    lines[i] = options.indent + lines[i];
                                }
                                result = lines.join('\n');
                            }
                            return result;
                        } else {
                            throw new _exception2['default']('The partial ' + options.name + ' could not be compiled when running in runtime-only mode');
                        }
                    }

                    // Just add water
                    var container = {
                        strict: function strict(obj, name, loc) {
                            if (!obj || !(name in obj)) {
                                throw new _exception2['default']('"' + name + '" not defined in ' + obj, {
                                    loc: loc
                                });
                            }
                            return obj[name];
                        },
                        lookupProperty: function lookupProperty(parent, propertyName) {
                            var result = parent[propertyName];
                            if (result == null) {
                                return result;
                            }
                            if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
                                return result;
                            }

                            if (_internalProtoAccess.resultIsAllowed(result, container.protoAccessControl, propertyName)) {
                                return result;
                            }
                            return undefined;
                        },
                        lookup: function lookup(depths, name) {
                            var len = depths.length;
                            for (var i = 0; i < len; i++) {
                                var result = depths[i] && container.lookupProperty(depths[i], name);
                                if (result != null) {
                                    return depths[i][name];
                                }
                            }
                        },
                        lambda: function lambda(current, context) {
                            return typeof current === 'function' ? current.call(context) : current;
                        },

                        escapeExpression: Utils.escapeExpression,
                        invokePartial: invokePartialWrapper,

                        fn: function fn(i) {
                            var ret = templateSpec[i];
                            ret.decorator = templateSpec[i + '_d'];
                            return ret;
                        },

                        programs: [],
                        program: function program(i, data, declaredBlockParams, blockParams, depths) {
                            var programWrapper = this.programs[i],
                                fn = this.fn(i);
                            if (data || depths || blockParams || declaredBlockParams) {
                                programWrapper = wrapProgram(this, i, fn, data, declaredBlockParams, blockParams, depths);
                            } else if (!programWrapper) {
                                programWrapper = this.programs[i] = wrapProgram(this, i, fn);
                            }
                            return programWrapper;
                        },

                        data: function data(value, depth) {
                            while (value && depth--) {
                                value = value._parent;
                            }
                            return value;
                        },
                        mergeIfNeeded: function mergeIfNeeded(param, common) {
                            var obj = param || common;

                            if (param && common && param !== common) {
                                obj = Utils.extend({}, common, param);
                            }

                            return obj;
                        },
                        // An empty object to use as replacement for null-contexts
                        nullContext: Object.seal({}),

                        noop: env.VM.noop,
                        compilerInfo: templateSpec.compiler
                    };

                    function ret(context) {
                        var options = arguments.length <= 1 || arguments[1] === undefined ? {} : arguments[1];

                        var data = options.data;

                        ret._setup(options);
                        if (!options.partial && templateSpec.useData) {
                            data = initData(context, data);
                        }
                        var depths = undefined,
                            blockParams = templateSpec.useBlockParams ? [] : undefined;
                        if (templateSpec.useDepths) {
                            if (options.depths) {
                                depths = context != options.depths[0] ? [context].concat(options.depths) : options.depths;
                            } else {
                                depths = [context];
                            }
                        }

                        function main(context /*, options*/) {
                            return '' + templateSpec.main(container, context, container.helpers, container.partials, data, blockParams, depths);
                        }

                        main = executeDecorators(templateSpec.main, main, container, options.depths || [], data, blockParams);
                        return main(context, options);
                    }

                    ret.isTop = true;

                    ret._setup = function (options) {
                        if (!options.partial) {
                            var mergedHelpers = Utils.extend({}, env.helpers, options.helpers);
                            wrapHelpersToPassLookupProperty(mergedHelpers, container);
                            container.helpers = mergedHelpers;

                            if (templateSpec.usePartial) {
                                // Use mergeIfNeeded here to prevent compiling global partials multiple times
                                container.partials = container.mergeIfNeeded(options.partials, env.partials);
                            }
                            if (templateSpec.usePartial || templateSpec.useDecorators) {
                                container.decorators = Utils.extend({}, env.decorators, options.decorators);
                            }

                            container.hooks = {};
                            container.protoAccessControl = _internalProtoAccess.createProtoAccessControl(options);

                            var keepHelperInHelpers = options.allowCallsToHelperMissing || templateWasPrecompiledWithCompilerV7;
                            _helpers.moveHelperToHooks(container, 'helperMissing', keepHelperInHelpers);
                            _helpers.moveHelperToHooks(container, 'blockHelperMissing', keepHelperInHelpers);
                        } else {
                            container.protoAccessControl = options.protoAccessControl; // internal option
                            container.helpers = options.helpers;
                            container.partials = options.partials;
                            container.decorators = options.decorators;
                            container.hooks = options.hooks;
                        }
                    };

                    ret._child = function (i, data, blockParams, depths) {
                        if (templateSpec.useBlockParams && !blockParams) {
                            throw new _exception2['default']('must pass block params');
                        }
                        if (templateSpec.useDepths && !depths) {
                            throw new _exception2['default']('must pass parent depths');
                        }

                        return wrapProgram(container, i, templateSpec[i], data, 0, blockParams, depths);
                    };
                    return ret;
                }

                function wrapProgram(container, i, fn, data, declaredBlockParams, blockParams, depths) {
                    function prog(context) {
                        var options = arguments.length <= 1 || arguments[1] === undefined ? {} : arguments[1];

                        var currentDepths = depths;
                        if (depths && context != depths[0] && !(context === container.nullContext && depths[0] === null)) {
                            currentDepths = [context].concat(depths);
                        }

                        return fn(container, context, container.helpers, container.partials, options.data || data, blockParams && [options.blockParams].concat(blockParams), currentDepths);
                    }

                    prog = executeDecorators(fn, prog, container, depths, data, blockParams);

                    prog.program = i;
                    prog.depth = depths ? depths.length : 0;
                    prog.blockParams = declaredBlockParams || 0;
                    return prog;
                }

                /**
                 * This is currently part of the official API, therefore implementation details should not be changed.
                 */

                function resolvePartial(partial, context, options) {
                    if (!partial) {
                        if (options.name === '@partial-block') {
                            partial = options.data['partial-block'];
                        } else {
                            partial = options.partials[options.name];
                        }
                    } else if (!partial.call && !options.name) {
                        // This is a dynamic partial that returned a string
                        options.name = partial;
                        partial = options.partials[partial];
                    }
                    return partial;
                }

                function invokePartial(partial, context, options) {
                    // Use the current closure context to save the partial-block if this partial
                    var currentPartialBlock = options.data && options.data['partial-block'];
                    options.partial = true;
                    if (options.ids) {
                        options.data.contextPath = options.ids[0] || options.data.contextPath;
                    }

                    var partialBlock = undefined;
                    if (options.fn && options.fn !== noop) {
                        (function () {
                            options.data = _base.createFrame(options.data);
                            // Wrapper function to get access to currentPartialBlock from the closure
                            var fn = options.fn;
                            partialBlock = options.data['partial-block'] = function partialBlockWrapper(context) {
                                var options = arguments.length <= 1 || arguments[1] === undefined ? {} : arguments[1];

                                // Restore the partial-block from the closure for the execution of the block
                                // i.e. the part inside the block of the partial call.
                                options.data = _base.createFrame(options.data);
                                options.data['partial-block'] = currentPartialBlock;
                                return fn(context, options);
                            };
                            if (fn.partials) {
                                options.partials = Utils.extend({}, options.partials, fn.partials);
                            }
                        })();
                    }

                    if (partial === undefined && partialBlock) {
                        partial = partialBlock;
                    }

                    if (partial === undefined) {
                        throw new _exception2['default']('The partial ' + options.name + ' could not be found');
                    } else if (partial instanceof Function) {
                        return partial(context, options);
                    }
                }

                function noop() {
                    return '';
                }

                function initData(context, data) {
                    if (!data || !('root' in data)) {
                        data = data ? _base.createFrame(data) : {};
                        data.root = context;
                    }
                    return data;
                }

                function executeDecorators(fn, prog, container, depths, data, blockParams) {
                    if (fn.decorator) {
                        var props = {};
                        prog = fn.decorator(prog, props, container, depths && depths[0], data, blockParams, depths);
                        Utils.extend(prog, props);
                    }
                    return prog;
                }

                function wrapHelpersToPassLookupProperty(mergedHelpers, container) {
                    Object.keys(mergedHelpers).forEach(function (helperName) {
                        var helper = mergedHelpers[helperName];
                        mergedHelpers[helperName] = passLookupPropertyOption(helper, container);
                    });
                }

                function passLookupPropertyOption(helper, container) {
                    var lookupProperty = container.lookupProperty;
                    return _internalWrapHelper.wrapHelper(helper, function (options) {
                        return Utils.extend({ lookupProperty: lookupProperty }, options);
                    });
                }



                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/safe-string.js":
/*!********************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/safe-string.js ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                // Build out our basic SafeString type


                exports.__esModule = true;
                function SafeString(string) {
                    this.string = string;
                }

                SafeString.prototype.toString = SafeString.prototype.toHTML = function () {
                    return '' + this.string;
                };

                exports['default'] = SafeString;
                module.exports = exports['default'];
                


                /***/
            }),

/***/ "./node_modules/handlebars/dist/cjs/handlebars/utils.js":
/*!**************************************************************!*\
  !*** ./node_modules/handlebars/dist/cjs/handlebars/utils.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";


                exports.__esModule = true;
                exports.extend = extend;
                exports.indexOf = indexOf;
                exports.escapeExpression = escapeExpression;
                exports.isEmpty = isEmpty;
                exports.createFrame = createFrame;
                exports.blockParams = blockParams;
                exports.appendContextPath = appendContextPath;
                var escape = {
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#x27;',
                    '`': '&#x60;',
                    '=': '&#x3D;'
                };

                var badChars = /[&<>"'`=]/g,
                    possible = /[&<>"'`=]/;

                function escapeChar(chr) {
                    return escape[chr];
                }

                function extend(obj /* , ...source */) {
                    for (var i = 1; i < arguments.length; i++) {
                        for (var key in arguments[i]) {
                            if (Object.prototype.hasOwnProperty.call(arguments[i], key)) {
                                obj[key] = arguments[i][key];
                            }
                        }
                    }

                    return obj;
                }

                var toString = Object.prototype.toString;

                exports.toString = toString;
                // Sourced from lodash
                // https://github.com/bestiejs/lodash/blob/master/LICENSE.txt
                /* eslint-disable func-style */
                var isFunction = function isFunction(value) {
                    return typeof value === 'function';
                };
                // fallback for older versions of Chrome and Safari
                /* istanbul ignore next */
                if (isFunction(/x/)) {
                    exports.isFunction = isFunction = function (value) {
                        return typeof value === 'function' && toString.call(value) === '[object Function]';
                    };
                }
                exports.isFunction = isFunction;

                /* eslint-enable func-style */

                /* istanbul ignore next */
                var isArray = Array.isArray || function (value) {
                    return value && typeof value === 'object' ? toString.call(value) === '[object Array]' : false;
                };

                exports.isArray = isArray;
                // Older IE versions do not directly support indexOf so we must implement our own, sadly.

                function indexOf(array, value) {
                    for (var i = 0, len = array.length; i < len; i++) {
                        if (array[i] === value) {
                            return i;
                        }
                    }
                    return -1;
                }

                function escapeExpression(string) {
                    if (typeof string !== 'string') {
                        // don't escape SafeStrings, since they're already safe
                        if (string && string.toHTML) {
                            return string.toHTML();
                        } else if (string == null) {
                            return '';
                        } else if (!string) {
                            return string + '';
                        }

                        // Force a string conversion as this will be done by the append regardless and
                        // the regex test will do this transparently behind the scenes, causing issues if
                        // an object's to string has escaped characters in it.
                        string = '' + string;
                    }

                    if (!possible.test(string)) {
                        return string;
                    }
                    return string.replace(badChars, escapeChar);
                }

                function isEmpty(value) {
                    if (!value && value !== 0) {
                        return true;
                    } else if (isArray(value) && value.length === 0) {
                        return true;
                    } else {
                        return false;
                    }
                }

                function createFrame(object) {
                    var frame = extend({}, object);
                    frame._parent = object;
                    return frame;
                }

                function blockParams(params, ids) {
                    params.path = ids;
                    return params;
                }

                function appendContextPath(contextPath, id) {
                    return (contextPath ? contextPath + '.' : '') + id;
                }


                /***/
            }),

/***/ "./node_modules/handlebars/runtime.js":
/*!********************************************!*\
  !*** ./node_modules/handlebars/runtime.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                // Create a simple path alias to allow browserify to resolve
                // the runtime on a supported path.
                module.exports = __webpack_require__(/*! ./dist/cjs/handlebars.runtime */ "./node_modules/handlebars/dist/cjs/handlebars.runtime.js")['default'];


                /***/
            }),

/***/ "./node_modules/webpack/buildin/global.js":
/*!***********************************!*\
  !*** (webpack)/buildin/global.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function (module, exports) {

                var g;

                // This works in non-strict mode
                g = (function () {
                    return this;
                })();

                try {
                    // This works if eval is allowed (see CSP)
                    g = g || new Function("return this")();
                } catch (e) {
                    // This works if the window reference is available
                    if (typeof window === "object") g = window;
                }

                // g can still be undefined, but nothing to do about it...
                // We return undefined, instead of nothing here, so it's
                // easier to handle this case. if(!global) { ...}

                module.exports = g;


                /***/
            }),

/***/ "./src/css/main.styl":
/*!***************************!*\
  !*** ./src/css/main.styl ***!
  \***************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                // extracted by mini-css-extract-plugin

                /***/
            }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
/* WEBPACK VAR INJECTION */(function (global) {/**
 * @fileoverview The entry file of fullcalendar
 * @author NHN FE Development Lab
 */



                    var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                    var Calendar = __webpack_require__(/*! ./js/factory/calendar */ "./src/js/factory/calendar.js");

                    __webpack_require__(/*! ./css/main.styl */ "./src/css/main.styl");
                    __webpack_require__(/*! ./js/view/template/helper */ "./src/js/view/template/helper.js");

                    // for jquery
                    if (global.jQuery) {
                        global.jQuery.fn.tuiCalendar = function () {
                            var options, instance;

                            var el = this.get(0);
                            var args = Array.prototype.slice.apply(arguments);

                            if (el) {
                                options = util.pick(args, 0) || {};

                                instance = global.jQuery.data(el, 'tuiCalendar');

                                if (instance) {
                                    if (typeof options === 'string' && instance[options]) {
                                        return instance[options].apply(instance, args.slice(1));
                                    }
                                } else {
                                    instance = new Calendar(el, options);
                                    global.jQuery.data(el, 'tuiCalendar', instance);
                                }
                            }

                            return this;
                        };
                    }

                    module.exports = Calendar;

                    /* WEBPACK VAR INJECTION */
                }.call(this, __webpack_require__(/*! ./../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

                /***/
            }),

/***/ "./src/js/common/array.js":
/*!********************************!*\
  !*** ./src/js/common/array.js ***!
  \********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Utility module for array sort, binary search.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var datetime = __webpack_require__(/*! ../common/datetime */ "./src/js/common/datetime.js");

                /**
                 * A module for sorting array.
                 * @module array
                 */

                /**********
                 * Search
                 **********/

                /**
                 * search item index using binary search algorithm.
                 *
                 * the array must be sorted.
                 * @param {array} arr array to search.
                 * @param {(string|number|boolean)} search value to search.
                 * @param {function} [fn] iteratee for retrieve each element's value to search.
                 * @param {function} [compare] compare function for specific sort status. default is string ascending.
                 * @returns {number} The number of item index searched. return negative number when no exist that item.
                 * It can use insert index after Math.abs()
                 * @example
                 *
                 * var arr = [1, 3, 7, 11, 15, 23];
                 *
                 * function sortNumber(a, b) {
                 *     return a - b;
                 * }
                 *
                 * bsearch(arr, 15, null, sortNumber);    // 4
                 * bsearch(arr, 21, null, sortNumber);    // -5
                 *
                 * arr.splice(Math.abs(bsearch(arr, 21, null, sortNumber)), 0, 21);
                 * // [1, 2, 7, 11, 15, 21, 23]
                 */
                function bsearch(arr, search, fn, compare) {
                    var minIndex = 0,
                        maxIndex = arr.length - 1,
                        currentIndex,
                        value,
                        comp;

                    compare = compare || stringASC;

                    while (minIndex <= maxIndex) {
                        currentIndex = (minIndex + maxIndex) / 2 | 0; // Math.floor
                        value = fn ? fn(arr[currentIndex]) : arr[currentIndex];
                        comp = compare(value, search);

                        if (comp < 0) {
                            minIndex = currentIndex + 1;
                        } else if (comp > 0) {
                            maxIndex = currentIndex - 1;
                        } else {
                            return currentIndex;
                        }
                    }

                    return ~maxIndex;
                }

                /**********
                 * Compare Functions
                 **********/

                /**
                 * compare function for array sort.
                 *
                 * sort array by ascending.
                 * @param {boolean} a The boolean to compare
                 * @param {boolean} b The boolean to compare.
                 * @returns {number} Result of comparison.
                 */
                function booleanASC(a, b) {
                    if (a !== b) {
                        return a ? -1 : 1;
                    }

                    return 0;
                }

                /**
                 * compare function for array sort.
                 *
                 * sort array by descending.
                 * @param {boolean} a The boolean to compare
                 * @param {boolean} b The boolean to compare.
                 * @returns {number} Result of comparison.
                 */
                function booleanDESC(a, b) {
                    if (a !== b) {
                        return a ? 1 : -1;
                    }

                    return 0;
                }

                /**
                 * compare function for array sort.
                 *
                 * sort array by number ascending.
                 * @param {number} _a The number to compare.
                 * @param {number} _b The number to compare.
                 * @returns {number} Result of comparison.
                 */
                function numberASC(_a, _b) {
                    var a = Number(_a),
                        b = Number(_b);

                    return a - b;
                }

                /**
                 * compare function for array sort.
                 *
                 * sort array by number descending.
                 * @param {number} _a The number to compare.
                 * @param {number} _b The number to compare.
                 * @returns {number} Result of comparison.
                 */
                function numberDESC(_a, _b) {
                    var a = Number(_a),
                        b = Number(_b);

                    return b - a;
                }

                /**
                 * compare function for array sort.
                 *
                 * sort array by string ascending
                 * @param {string} _a The string to compare.
                 * @param {string} _b The string to compare.
                 * @returns {number} Result of comparison.
                 */
                function stringASC(_a, _b) {
                    var a = String(_a),
                        b = String(_b);

                    if (a > b) {
                        return 1;
                    }
                    if (a < b) {
                        return -1;
                    }

                    return 0;
                }

                /**
                 * compare function for array sort.
                 *
                 * sort array by string descending
                 * @param {string} _a The string to compare.
                 * @param {string} _b The string to compare.
                 * @returns {number} Result of comparison.
                 */
                function stringDESC(_a, _b) {
                    var a = String(_a),
                        b = String(_b);

                    if (a > b) {
                        return -1;
                    }
                    if (a < b) {
                        return 1;
                    }

                    return 0;
                }

                /**
                 * compare function for array sort.
                 *
                 * sort array by string ascending with ignore case.
                 * @param {string} _a The string to compare.
                 * @param {string} _b The string to compare.
                 * @returns {number} Result of comparison.
                 */
                function stringASCIgnoreCase(_a, _b) {
                    var a = String(_a).toLowerCase(),
                        b = String(_b).toLowerCase();

                    if (a > b) {
                        return 1;
                    }
                    if (a < b) {
                        return -1;
                    }

                    return 0;
                }

                /**
                 * compare function for array sort.
                 *
                 * sort array by string descending with ignore case.
                 * @param {string} _a The string to compare.
                 * @param {string} _b The string to compare.
                 * @returns {number} Result of comparison.
                 */
                function stringDESCIgnoreCase(_a, _b) {
                    var a = String(_a).toLowerCase(),
                        b = String(_b).toLowerCase();

                    if (a > b) {
                        return -1;
                    }
                    if (a < b) {
                        return 1;
                    }

                    return 0;
                }

                /**
                 * Compare schedule models for sort.
                 *
                 * 1. all day schedule first.
                 * 2. early start.
                 * 3. longest duration.
                 * 4. early created.
                 * @param {Schedule|ScheduleViewModel} a The object schedule instance.
                 * @param {Schedule|ScheduleViewModel} b The object schedule instance.
                 * @returns {number} Result of comparison.
                 */
                function scheduleASC(a, b) {
                    var durationA, durationB;
                    var allDayCompare, startsCompare;
                    var modelA = a.valueOf();
                    var modelB = b.valueOf();

                    allDayCompare = booleanASC(modelA.isAllDay || a.hasMultiDates, modelB.isAllDay || b.hasMultiDates);

                    if (allDayCompare) {
                        return allDayCompare;
                    }

                    startsCompare = datetime.compare(a.getStarts(), b.getStarts());

                    if (startsCompare) {
                        return startsCompare;
                    }

                    durationA = a.duration();
                    durationB = b.duration();

                    if (durationA < durationB) {
                        return 1;
                    }
                    if (durationA > durationB) {
                        return -1;
                    }

                    return util.stamp(modelA) - util.stamp(modelB);
                }

                module.exports = {
                    bsearch: bsearch,
                    compare: {
                        schedule: {
                            asc: scheduleASC
                        },
                        bool: {
                            asc: booleanASC,
                            desc: booleanDESC
                        },
                        num: {
                            asc: numberASC,
                            desc: numberDESC
                        },
                        str: {
                            asc: stringASC,
                            desc: stringDESC,
                            ascIgnoreCase: stringASCIgnoreCase,
                            descIgnoreCase: stringDESCIgnoreCase
                        }
                    }
                };


                /***/
            }),

/***/ "./src/js/common/autoScroll.js":
/*!*************************************!*\
  !*** ./src/js/common/autoScroll.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
/* WEBPACK VAR INJECTION */(function (global) {/**
 * @fileoverview Add autoscroll feature to elements that prevented text selection.
 * @author NHN FE Development Lab <dl_javascript@nhn.com>
 */


                    var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                    var domevent = __webpack_require__(/*! ../common/domevent */ "./src/js/common/domevent.js");
                    var domutil = __webpack_require__(/*! ../common/domutil */ "./src/js/common/domutil.js");
                    var Point = __webpack_require__(/*! ../common/point */ "./src/js/common/point.js");

                    var SCROLL_INTERVAL = 30;
                    var SCROLL_MAX = 15;
                    var SCROLL_CLICK_INCREASED = 2; // In IE, the offset of the actual UI pixel when the scroll bar is clicked is offset.

                    /**
                     * Add autoscroll feature to elements that prevented text selection.
                     * @constructor
                     * @param {HTMLElement} container - HTMLElement to add autoscroll features.
                     */
                    function AutoScroll(container) {
                        /**
                         * @type {HTMLElement}
                         */
                        this.container = container;

                        /**
                         * @type {AutoScroll.DIRECTION}
                         */
                        this._direction = AutoScroll.DIRECTION.INSIDE;

                        /**
                         * @type {number}
                         */
                        this._offset = 0;

                        /**
                         * interval to scrolling
                         * @type {number}
                         */
                        this._intervalID = 0;

                        domevent.on(container, {
                            'mousedown': this._onMouseDown
                        }, this);
                    }

                    /**
                     * @enum
                     */
                    AutoScroll.DIRECTION = {
                        INSIDE: 0,
                        TOP: 1,
                        RIGHT: 2,
                        BOTTOM: 3,
                        LEFT: 4
                    };

                    /**
                     * Instance destroy method.
                     */
                    AutoScroll.prototype.destroy = function () {
                        domevent.off(this.container, {
                            'mousedown': this._onMouseDown,
                            'mousemove': this._onMouseMove,
                            'mouseup': this._onMouseUp
                        }, this);

                        window.clearInterval(this._intervalID);
                        this._intervalID = this._direction = this.container = null;
                    };

                    /**
                     * Normalize ClientRect and calculate each position of edges.
                     * @param {ClientRect} clientRect - ClientRect object of element.
                     * @returns {object} edges.
                     */
                    AutoScroll.prototype._getEdgePositions = function (clientRect) {
                        return {
                            top: clientRect.top,
                            right: clientRect.left + clientRect.width,
                            bottom: clientRect.bottom,
                            left: clientRect.left
                        };
                    };

                    /**
                     * Get element real size ("real size" -> size without scrollbar)
                     * @param {HTMLElement} el - element want to know real size ("real size" -> size without scrollbar)
                     * @returns {number[]} real size [width, height]
                     */
                    AutoScroll.prototype.getRealSize = function (el) {
                        var computed = domutil.getComputedStyle(el),
                            border,
                            padding;

                        border = parseFloat(computed.getPropertyValue('border-top-width')) +
                            parseFloat(computed.getPropertyValue('border-bottom-width'));
                        padding = parseFloat(computed.getPropertyValue('padding-top')) +
                            parseFloat(computed.getPropertyValue('padding-bottom'));

                        return [el.clientWidth + border + padding, el.clientHeight + border + padding];
                    };

                    /**
                     * Check supplied element has scrollbar.
                     * @param {HTMLElement} el - element want to know has scrollbar.
                     * @returns {boolean[]} has scrollbar? [horizontal, vertical]
                     */
                    AutoScroll.prototype.hasScrollbar = function (el) {
                        var realSize = this.getRealSize(el);

                        return [
                            el.offsetWidth > Math.ceil(realSize[0]),
                            el.offsetHeight > Math.ceil(realSize[1])
                        ];
                    };

                    /**
                     * @param {HTMLElement} el - element want to know.
                     * @param {MouseEvent} mouseEvent - mouse event object.
                     * @returns {boolean} mouse pointer is on the scrollbar?
                     */
                    AutoScroll.prototype.isOnScrollbar = function (el, mouseEvent) {
                        var realSize = this.getRealSize(el),
                            pos = domevent.getMousePosition(mouseEvent, el),
                            mouseInScrollbar = false;

                        mouseInScrollbar = (realSize[0] - SCROLL_CLICK_INCREASED < pos[0] ||
                            realSize[1] - SCROLL_CLICK_INCREASED < pos[1]);

                        return mouseInScrollbar;
                    };

                    /**
                     * MouseDown event handler
                     * @param {MouseEvent} mouseDownEvent - mouse down event
                     */
                    AutoScroll.prototype._onMouseDown = function (mouseDownEvent) {
                        // only primary button can start drag.
                        if (domevent.getMouseButton(mouseDownEvent) !== 0) {
                            return;
                        }

                        // deactivate autoscroll feature when mouse is on the scrollbar. (IE)
                        if (util.browser.msie && this.isOnScrollbar(this.container, mouseDownEvent)) {
                            return;
                        }

                        window.clearInterval(this._intervalID);
                        this._intervalID = window.setInterval(util.bind(this._onTick, this), SCROLL_INTERVAL);

                        domevent.on(global, {
                            'mousemove': this._onMouseMove,
                            'mouseup': this._onMouseUp
                        }, this);
                    };

                    /**
                     * MouseMove event handler
                     * @param {MouseEvent} mouseEvent - mouse move event object.
                     */
                    AutoScroll.prototype._onMouseMove = function (mouseEvent) {
                        var edge = this._getEdgePositions(this.container.getBoundingClientRect()),
                            pos = Point.n(domevent.getMousePosition(mouseEvent));

                        if (pos.y >= edge.top && pos.y <= edge.bottom &&
                            pos.x >= edge.left && pos.x <= edge.right) {
                            this._direction = AutoScroll.DIRECTION.INSIDE;

                            return;
                        }

                        if (pos.y < edge.top) {
                            this._direction = AutoScroll.DIRECTION.TOP;
                            this._offset = edge.top - pos.y;

                            return;
                        }

                        if (pos.y > edge.bottom) {
                            this._direction = AutoScroll.DIRECTION.BOTTOM;
                            this._offset = pos.y - edge.bottom;

                            return;
                        }

                        if (pos.x < edge.left) {
                            this._direction = AutoScroll.DIRECTION.LEFT;
                            this._offset = edge.left - pos.x;

                            return;
                        }

                        this._direction = AutoScroll.DIRECTION.RIGHT;
                        this._offset = pos.x - edge.right;
                    };

                    /**
                     * MouseUp event handler.
                     */
                    AutoScroll.prototype._onMouseUp = function () {
                        window.clearInterval(this._intervalID);
                        this._intervalID = 0;
                        this._direction = AutoScroll.DIRECTION.INSIDE;
                        this._offset = 0;

                        domevent.off(global, {
                            'mousemove': this._onMouseMove,
                            'mouseup': this._onMouseUp
                        }, this);
                    };

                    /**
                     * Interval tick event handler
                     */
                    AutoScroll.prototype._onTick = function () {
                        var direction = this._direction,
                            container,
                            factor;

                        if (!direction) {
                            return;
                        }

                        container = this.container;
                        factor = Math.min(this._offset, SCROLL_MAX);

                        switch (direction) {
                            case AutoScroll.DIRECTION.TOP:
                                container.scrollTop -= factor;
                                break;
                            case AutoScroll.DIRECTION.RIGHT:
                                container.scrollLeft += factor;
                                break;
                            case AutoScroll.DIRECTION.BOTTOM:
                                container.scrollTop += factor;
                                break;
                            default:
                                container.scrollLeft -= factor;
                                break;
                        }
                    };

                    module.exports = AutoScroll;

                    /* WEBPACK VAR INJECTION */
                }.call(this, __webpack_require__(/*! ./../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

                /***/
            }),

/***/ "./src/js/common/collection.js":
/*!*************************************!*\
  !*** ./src/js/common/collection.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Common collections.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var forEachProp = util.forEachOwnProperties,
                    forEachArr = util.forEachArray,
                    isFunc = util.isFunction,
                    isObj = util.isObject;

                var aps = Array.prototype.slice;

                /**
                 * Common collection.
                 *
                 * It need function for get model's unique id.
                 *
                 * if the function is not supplied then it use default function {@link Collection#getItemID}
                 * @constructor
                 * @param {function} [getItemIDFn] function for get model's id.
                 */
                function Collection(getItemIDFn) {
                    /**
                     * @type {object.<string, *>}
                     */
                    this.items = {};

                    /**
                     * @type {number}
                     */
                    this.length = 0;

                    if (isFunc(getItemIDFn)) {
                        /**
                         * @type {function}
                         */
                        this.getItemID = getItemIDFn;
                    }
                }

                /**********
                 * static props
                 **********/

                /**
                 * Combind supplied function filters and condition.
                 * @param {...function} filters - function filters
                 * @returns {function} combined filter
                 */
                Collection.and = function (filters) {
                    var cnt;

                    filters = aps.call(arguments);
                    cnt = filters.length;

                    return function (item) {
                        var i = 0;

                        for (; i < cnt; i += 1) {
                            if (!filters[i].call(null, item)) {
                                return false;
                            }
                        }

                        return true;
                    };
                };

                /**
                 * Combine multiple function filters with OR clause.
                 * @param {...function} filters - function filters
                 * @returns {function} combined filter
                 */
                Collection.or = function (filters) {
                    var cnt;

                    filters = aps.call(arguments);
                    cnt = filters.length;

                    return function (item) {
                        var i = 1,
                            result = filters[0].call(null, item);

                        for (; i < cnt; i += 1) {
                            result = (result || filters[i].call(null, item));
                        }

                        return result;
                    };
                };

                /**
                 * Merge several collections.
                 *
                 * You can\'t merge collections different _getScheduleID functions. Take case of use.
                 * @param {...Collection} collections collection arguments to merge
                 * @returns {Collection} merged collection.
                 */
                Collection.merge = function (collections) {    // eslint-disable-line
                    var cols = aps.call(arguments),
                        newItems = {},
                        merged = new Collection(cols[0].getItemID),
                        extend = util.extend;

                    forEachArr(cols, function (col) {
                        extend(newItems, col.items);
                    });

                    merged.items = newItems;
                    merged.length = util.keys(merged.items).length;

                    return merged;
                };

                /**********
                 * prototype props
                 **********/

                /**
                 * get model's unique id.
                 * @param {object} item model instance.
                 * @returns {number} model unique id.
                 */
                Collection.prototype.getItemID = function (item) {
                    return String(item._id);
                };

                /**
                 * add models.
                 * @param {...*} item models to add this collection.
                 */
                Collection.prototype.add = function (item) {
                    var self = this,
                        id,
                        ownItems;

                    if (arguments.length > 1) {
                        forEachArr(aps.call(arguments), function (o) {
                            self.add(o);
                        });

                        return;
                    }

                    id = this.getItemID(item);
                    ownItems = this.items;

                    if (!ownItems[id]) {
                        this.length += 1;
                    }
                    ownItems[id] = item;
                };

                /**
                 * remove models.
                 * @param {...(object|string|number)} id model instance or unique id to delete.
                 * @returns {array} deleted model list.
                 */
                Collection.prototype.remove = function (id) {
                    var self = this,
                        removed = [],
                        ownItems,
                        itemToRemove;

                    if (!this.length) {
                        return removed;
                    }

                    if (arguments.length > 1) {
                        removed = util.map(aps.call(arguments), function (_id) {
                            return self.remove(_id);
                        });

                        return removed;
                    }

                    ownItems = this.items;

                    if (isObj(id)) {
                        id = this.getItemID(id);
                    }

                    if (!ownItems[id]) {
                        return removed;
                    }

                    this.length -= 1;
                    itemToRemove = ownItems[id];
                    delete ownItems[id];

                    return itemToRemove;
                };

                /**
                 * remove all models in collection.
                 */
                Collection.prototype.clear = function () {
                    this.items = {};
                    this.length = 0;
                };

                /**
                 * check collection has specific model.
                 * @param {(object|string|number|function)} id model instance or id or filter function to check
                 * @returns {boolean} is has model?
                 */
                Collection.prototype.has = function (id) {
                    var isFilter,
                        has;

                    if (!this.length) {
                        return false;
                    }

                    isFilter = isFunc(id);
                    has = false;

                    if (isFilter) {
                        this.each(function (item) {
                            if (id(item) === true) {
                                has = true;

                                return false; // returning false can stop this loop
                            }

                            return true;
                        });
                    } else {
                        id = isObj(id) ? this.getItemID(id) : id;
                        has = util.isExisty(this.items[id]);
                    }

                    return has;
                };

                /**
                 * invoke callback when model exist in collection.
                 * @param {(string|number)} id model unique id.
                 * @param {function} fn the callback.
                 * @param {*} [context] callback context.
                 */
                Collection.prototype.doWhenHas = function (id, fn, context) {
                    var item = this.items[id];

                    if (!util.isExisty(item)) {
                        return;
                    }

                    fn.call(context || this, item);
                };

                /**
                 * Search model. and return new collection.
                 * @param {function} filter filter function.
                 * @returns {Collection} new collection with filtered models.
                 * @example
                 * collection.find(function(item) {
                 *     return item.edited === true;
                 * });
                 *
                 * function filter1(item) {
                 *     return item.edited === false;
                 * }
                 *
                 * function filter2(item) {
                 *     return item.disabled === false;
                 * }
                 *
                 * collection.find(Collection.and(filter1, filter2));
                 *
                 * collection.find(Collection.or(filter1, filter2));
                 */
                Collection.prototype.find = function (filter) {
                    var result = new Collection();

                    if (this.hasOwnProperty('getItemID')) {
                        result.getItemID = this.getItemID;
                    }

                    this.each(function (item) {
                        if (filter(item) === true) {
                            result.add(item);
                        }
                    });

                    return result;
                };

                /**
                 * Group element by specific key values.
                 *
                 * if key parameter is function then invoke it and use returned value.
                 * @param {(string|number|function|array)} key key property or getter function.
                 *  if string[] supplied, create each collection before grouping.
                 * @param {function} [groupFunc] - function that return each group's key
                 * @returns {object.<string, Collection>} grouped object
                 * @example
                 *
                 * // pass `string`, `number`, `boolean` type value then group by property value.
                 * collection.groupBy('gender');    // group by 'gender' property value.
                 * collection.groupBy(50);          // group by '50' property value.
                 *
                 * // pass `function` then group by return value. each invocation `function` is called with `(item)`.
                 * collection.groupBy(function(item) {
                 *     if (item.score > 60) {
                 *         return 'pass';
                 *     }
                 *     return 'fail';
                 * });
                 *
                 * // pass `array` with first arguments then create each collection before grouping.
                 * collection.groupBy(['go', 'ruby', 'javascript']);
                 * // result: { 'go': empty Collection, 'ruby': empty Collection, 'javascript': empty Collection }
                 *
                 * // can pass `function` with `array` then group each elements.
                 * collection.groupBy(['go', 'ruby', 'javascript'], function(item) {
                 *     if (item.isFast) {
                 *         return 'go';
                 *     }
                 *
                 *     return item.name;
                 * });
                 */
                Collection.prototype.groupBy = function (key, groupFunc) {
                    var result = {},
                        collection,
                        baseValue,
                        keyIsFunc = isFunc(key),
                        getItemIDFn = this.getItemID;

                    if (util.isArray(key)) {
                        util.forEachArray(key, function (k) {
                            result[String(k)] = new Collection(getItemIDFn);
                        });

                        if (!groupFunc) {
                            return result;
                        }

                        key = groupFunc;
                        keyIsFunc = true;
                    }

                    this.each(function (item) {
                        if (keyIsFunc) {
                            baseValue = key(item);
                        } else {
                            baseValue = item[key];

                            if (isFunc(baseValue)) {
                                baseValue = baseValue.apply(item);
                            }
                        }

                        collection = result[baseValue];

                        if (!collection) {
                            collection = result[baseValue] = new Collection(getItemIDFn);
                        }

                        collection.add(item);
                    });

                    return result;
                };

                /**
                 * Return single item in collection.
                 *
                 * Returned item is inserted in this collection firstly.
                 * @param {function} [filter] - function filter
                 * @returns {object} item.
                 */
                Collection.prototype.single = function (filter) {
                    var result,
                        useFilter = util.isFunction(filter);

                    this.each(function (item) {
                        if (!useFilter) {
                            result = item;

                            return false; // returning false can stop this loop
                        }
                        if (filter(item)) {
                            result = item;

                            return false; // returning false can stop this loop
                        }

                        return true;
                    }, this);

                    return result;
                };

                /**
                 * sort a basis of supplied compare function.
                 * @param {function} compareFunction compareFunction
                 * @returns {array} sorted array.
                 */
                Collection.prototype.sort = function (compareFunction) {
                    var arr = [];

                    this.each(function (item) {
                        arr.push(item);
                    });

                    if (isFunc(compareFunction)) {
                        arr = arr.sort(compareFunction);
                    }

                    return arr;
                };

                /**
                 * iterate each model element.
                 *
                 * when iteratee return false then break the loop.
                 * @param {function} iteratee iteratee(item, index, items)
                 * @param {*} [context] context
                 */
                Collection.prototype.each = function (iteratee, context) {
                    forEachProp(this.items, iteratee, context || this);
                };

                /**
                 * return new array with collection items.
                 * @returns {array} new array.
                 */
                Collection.prototype.toArray = function () {
                    if (!this.length) {
                        return [];
                    }

                    return util.map(this.items, function (item) {
                        return item;
                    });
                };

                module.exports = Collection;


                /***/
            }),

/***/ "./src/js/common/common.js":
/*!*********************************!*\
  !*** ./src/js/common/common.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview common/general utilities.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var aps = Array.prototype.slice;

                var domutil = __webpack_require__(/*! ../common/domutil */ "./src/js/common/domutil.js"),
                    Collection = __webpack_require__(/*! ../common/collection */ "./src/js/common/collection.js");
                var datetime = __webpack_require__(/*! ../common/datetime */ "./src/js/common/datetime.js");

                /**
                 * Default schedule id getter for collection
                 * @param {Schedule} schedule - schedule instance
                 * @returns {string} schedule id
                 */
                function scheduleIDGetter(schedule) {
                    return schedule.cid();
                }

                module.exports = {
                    /**
                     * @param {...*} initItems - items to add newly created collection.
                     * @returns {Collection} new collection for schedule models.
                     */
                    createScheduleCollection: function (initItems) {    // eslint-disable-line
                        var collection = new Collection(scheduleIDGetter);

                        if (arguments.length) {
                            collection.add.apply(collection, arguments);
                        }

                        return collection;
                    },

                    /**
                     * Get ratio value.
                     *
                     * a : b = y : X;
                     *
                     * =
                     *
                     * X = (b * y) / a;
                     * @param {number} a - a
                     * @param {number} b - b
                     * @param {number} y - y
                     * @returns {number} ratio value
                     */
                    ratio: function (a, b, y) {
                        // a : b = y : x;
                        return (b * y) / a;
                    },

                    /**
                     * Find nearest value from supplied params.
                     * @param {number} value - value to find.
                     * @param {array} nearest - nearest array.
                     * @returns {number} nearest value
                     */
                    nearest: function (value, nearest) {
                        var diff = util.map(nearest, function (v) {
                            return Math.abs(value - v);
                        }),
                            nearestIndex = util.inArray(Math.min.apply(null, diff), diff);

                        return nearest[nearestIndex];
                    },

                    /**
                     * pick value from object then return utility object to treat it.
                     * @param {object} obj - object to search supplied path property.
                     * @param {...string} paths - rest parameter that string value to search property in object.
                     * @returns {object} pick object.
                     */
                    pick2: function (obj, paths) {    // eslint-disable-line
                        var result = util.pick.apply(null, arguments),
                            pick;

                        pick = {
                            /**
                             * @returns {*} picked value.
                             */
                            val: function () {
                                return result;
                            },

                            /**
                             * invoke supplied function in picked object.
                             *
                             * the callback context is set picked object.
                             * @param {string|function} fn - function to invoke in picked object.
                             * @returns {*} result of invoke.
                             */
                            then: function (fn) {
                                var args;

                                if (!result) {
                                    return undefined;    //eslint-disable-line
                                }

                                args = aps.call(arguments, 1);

                                if (util.isString(fn)) {
                                    return (util.pick(result, fn) || function () { }).apply(result, args);
                                }

                                return fn.call(result, result);
                            }
                        };

                        return pick;
                    },

                    /**
                     * Mixin method.
                     *
                     * (extend methods except property name 'mixin')
                     * @param {object} from - mixin object.
                     * @param {object} to - object to mixin.
                     */
                    mixin: function (from, to) {
                        util.extend(to.prototype, from);
                    },

                    /**
                     * Limit supplied value base on `minArr`, `maxArr`
                     * @param {number} value - value
                     * @param {array} minArr - min
                     * @param {array} maxArr - max
                     * @returns {number} limited value
                     */
                    limit: function (value, minArr, maxArr) {
                        var v = Math.max.apply(null, [value].concat(minArr));
                        v = Math.min.apply(null, [v].concat(maxArr));

                        return v;
                    },

                    /**
                     * Limit supplied date base on `min`, `max`
                     * @param {TZDate} date - date
                     * @param {TZDate} min - min
                     * @param {TZDate} max - max
                     * @returns {TZDate} limited value
                     */
                    limitDate: function (date, min, max) {
                        if (date < min) {
                            return min;
                        }
                        if (date > max) {
                            return max;
                        }

                        return date;
                    },

                    /**
                     * Max value with TZDate type for timezone calculation
                     * @param {TZDate} d1 - date 1
                     * @param {TZDate} d2 - date 2
                     * @returns {TZDate}
                     */
                    maxDate: function (d1, d2) {
                        if (d1 > d2) {
                            return d1;
                        }

                        return d2;
                    },

                    stripTags: function (str) {
                        return str.replace(/<([^>]+)>/ig, '');
                    },

                    /**
                     * Get first value in 2-dimentional array.
                     * @param {Array.<Array>} arr2d - 2-dimentional array
                     * @returns {*} first value in 2d array
                     */
                    firstIn2dArray: function (arr2d) {
                        return util.pick(arr2d, '0', '0');
                    },

                    /**
                     * Get last value in 2-dimentional array.
                     * @param {Array.<Array>} arr2d - 2-dimentional array
                     * @returns {*} last value in 2d array
                     */
                    lastIn2dArray: function (arr2d) {
                        var lastRow = arr2d.length - 1,
                            lastCol = arr2d[lastRow].length - 1;

                        return util.pick(arr2d, lastRow, lastCol);
                    },

                    /**
                     * Set 'title' attribute for all element that has exceeded content in
                     * container
                     * @param {string} selector - CSS selector {@see domutil#find}
                     * @param {HTMLElement} container - container element
                     * @param {boolean} force - force to apply
                     */
                    setAutoEllipsis: function (selector, container, force) {
                        util.forEach(domutil.find(selector, container, true), function (el) {
                            if (force || el.offsetWidth < el.scrollWidth) {
                                el.setAttribute('title', domutil.getData(el, 'title'));
                            }
                        });
                    },

                    /**
                     * Set the value at path of object.
                     * @param {object} object - the object to modify
                     * @param {string} path -the path of property to set
                     * @param {*} value - the value to set
                     */
                    set: function (object, path, value) {
                        var names = path.split('.');
                        var store = object;

                        util.forEach(names, function (name, index) {
                            store[name] = store[name] || {};

                            if (index === names.length - 1) {
                                store[name] = value;
                            } else {
                                store = store[name];
                            }
                        });
                    },

                    /**
                     * shift a array
                     * @param {Array.<any>} array - array
                     * @param {number} shift - positive or negative integer to shift
                     * @returns {Array.<any>} shifted array
                     */
                    shiftArray: function (array, shift) {
                        var length = Math.abs(shift);
                        var i;

                        if (shift > 0) {
                            for (i = 0; i < length; i += 1) {
                                array.push(array.shift());
                            }
                        } else if (shift < 0) {
                            for (i = 0; i < length; i += 1) {
                                array.unshift(array.pop());
                            }
                        }

                        return array;
                    },

                    /**
                     * take elements from array between start and end.
                     * @param {Array.<any>} array - array
                     * @param {number} start - start index
                     * @param {number} end - end index
                     * @returns {Array.<any>}
                     */
                    takeArray: function (array, start, end) {
                        var length = array.length;
                        var rightCount = length - end;
                        var leftCount = start;

                        // remove right
                        array.splice(end, rightCount);
                        // remove left
                        array.splice(0, leftCount);

                        return array;
                    },

                    /**
                     * shift hours
                     * @param {number} hours - hours
                     * @param {number} shift - positive or negative integer to shift
                     * @returns {number} shifted hours
                     */
                    shiftHours: function (hours, shift) {
                        if (shift > 0) {
                            hours = (hours + shift) % 24;
                        } else if (shift < 0) {
                            hours += shift;
                            hours = hours > 0 ? hours : 24 + hours;
                        }

                        return hours;
                    },

                    /**
                     * Parse css value into number and units
                     * @param {string} cssValue - css value like '72px'
                     * @returns {Array} [number, unit]
                     */
                    parseUnit: function (cssValue) {
                        var number = parseFloat(cssValue, 10);
                        var unit = cssValue.match(/[\d.\-+]*\s*(.*)/)[1] || '';

                        return [number, unit];
                    },

                    find: function (array, iteratee, contextopt) {
                        var found;

                        util.forEach(array, function (item) {
                            if (iteratee) {
                                found = iteratee(item);
                            }

                            if (found) {
                                found = item;

                                return false;
                            }

                            return true;
                        }, contextopt);

                        return found;
                    },

                    getScheduleChanges: function (schedule, propNames, data) {
                        var changes = {};
                        var dateProps = ['start', 'end'];

                        util.forEach(propNames, function (propName) {
                            if (dateProps.indexOf(propName) > -1) {
                                if (datetime.compare(schedule[propName], data[propName])) {
                                    changes[propName] = data[propName];
                                }
                            } else if (!util.isUndefined(data[propName]) && schedule[propName] !== data[propName]) {
                                changes[propName] = data[propName];
                            }
                        });

                        return util.isEmpty(changes) ? null : changes;
                    }
                };


                /***/
            }),

/***/ "./src/js/common/datetime.js":
/*!***********************************!*\
  !*** ./src/js/common/datetime.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
/* WEBPACK VAR INJECTION */(function (global) {/**
 * @fileoverview datetime utility module
 * @author NHN FE Development Lab <dl_javascript@nhn.com>
 */


                    var TZDate = __webpack_require__(/*! ./timezone */ "./src/js/common/timezone.js").Date,
                        dw = __webpack_require__(/*! ../common/dw */ "./src/js/common/dw.js");
                    var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                    /* eslint-disable no-useless-escape */
                    var dateFormatRx = /^(\d{4}[-|\/]*\d{2}[-|\/]*\d{2})\s?(\d{2}:\d{2}:\d{2})?$/;
                    var datetime, tokenFunc;

                    var memo = {
                        millisecondsTo: {},
                        millisecondsFrom: {}
                    };

                    tokenFunc = {
                        /**
                         * @param {TZDate} date date object.
                         * @returns {string} YYYYMMDD
                         */
                        'YYYYMMDD': function (date) {
                            return [
                                date.getFullYear(),
                                datetime.leadingZero(date.getMonth() + 1, 2),
                                datetime.leadingZero(date.getDate(), 2)
                            ].join('');
                        },
                        /**
                         * @param {TZDate} date date object
                         * @returns {string} four digit year number
                         */
                        'YYYY': function (date) {
                            return String(date.getFullYear());
                        },

                        /**
                         * @param {TZDate} date date object
                         * @returns {string} two digit month number
                         */
                        'MM': function (date) {
                            return datetime.leadingZero(date.getMonth() + 1, 2);
                        },

                        /**
                         * @param {TZDate} date date object
                         * @returns {string} two digit date number
                         */
                        'DD': function (date) {
                            return datetime.leadingZero(date.getDate(), 2);
                        },

                        /**
                         * @param {TZDate} date date object
                         * @returns {string} HH:mm
                         */
                        'HH:mm': function (date) {
                            var hour = date.getHours(),
                                minutes = date.getMinutes();

                            return datetime.leadingZero(hour, 2) + ':' +
                                datetime.leadingZero(minutes, 2);
                        },

                        /**
                         * @param {TZDate} date date object
                         * @returns {string} hh:mm
                         */
                        'hh:mm': function (date) {
                            var hour = date.getHours();
                            var minutes = date.getMinutes();

                            if (hour > 12) {
                                hour = hour % 12;
                            }

                            return datetime.leadingZero(hour, 2) + ':' +
                                datetime.leadingZero(minutes, 2);
                        },

                        /**
                         * @param {TZDate} date date object
                         * @returns {string} tt
                         */
                        'tt': function (date) {
                            var hour = date.getHours();

                            return hour < 12 ? 'am' : 'pm';
                        }
                    };

                    datetime = {
                        /**
                         * The number of milliseconds one day.
                         * @type {number}
                         */
                        MILLISECONDS_PER_DAY: 86400000,

                        /**
                         * The number of milliseconds one hour.
                         * @type {number}
                         */
                        MILLISECONDS_PER_HOUR: 3600000,

                        /**
                         * The number of milliseconds one minutes.
                         * @type {number}
                         */
                        MILLISECONDS_PER_MINUTES: 60000,

                        /**
                         * The number of milliseconds 20 minutes for schedule min duration
                         * @type {number}
                         */
                        MILLISECONDS_SCHEDULE_MIN_DURATION: 20 * 60000,

                        /**
                         * convert milliseconds
                         * @param {string} type - type of value.
                         * @param {number} value - value to convert.
                         * @param {function} iteratee - iteratee function to use reduce.
                         * @returns {number} converted value.
                         */
                        _convMilliseconds: function (type, value, iteratee) {
                            var conv = [24, 60, 60, 1000],
                                index = {
                                    day: 0,
                                    hour: 1,
                                    minutes: 2,
                                    seconds: 3
                                };

                            if (!(type in index) || global.isNaN(value)) {
                                return false;
                            }

                            return util.reduce([value].concat(conv.slice(index[type])), iteratee);
                        },

                        /**
                         * Convert milliseconds value to other type
                         * @param {type} type convert to type want to. support "day", "hour",
                         *  "minutes", "seconds" only.
                         * @param {value} value - value to convert.
                         * @returns {number} converted value.
                         */
                        millisecondsTo: function (type, value) {
                            var cache = memo.millisecondsTo,
                                key = type + value;

                            if (cache[key]) {
                                return cache[key];
                            }

                            cache[key] = datetime._convMilliseconds(type, value, function (m, v) {
                                return m / v;
                            });

                            return cache[key];
                        },

                        /**
                         * Convert value to milliseconds
                         * @param {type} type - type of supplied value. support "hour", "minutes", "seconds" only.
                         * @param {value} value - value to convert.
                         * @returns {number} converted value.
                         */
                        millisecondsFrom: function (type, value) {
                            var cache = memo.millisecondsFrom,
                                key = type + value;

                            if (cache[key]) {
                                return cache[key];
                            }

                            cache[key] = datetime._convMilliseconds(type, value, function (m, v) {
                                return m * v;
                            });

                            return cache[key];
                        },

                        /**
                         * Convert hours to minutes
                         * @param {number} hours - hours
                         * @returns {number} minutes
                         */
                        minutesFromHours: function (hours) {
                            return hours * 60;
                        },

                        /**
                         * Make date array from supplied paramters.
                         * @param {TZDate} start Start date.
                         * @param {TZDate} end End date.
                         * @param {number} step The number of milliseconds to use increment.
                         * @returns {TZDate[]} TZDate array.
                         */
                        range: function (start, end, step) {
                            var startTime = start.getTime();
                            var endTime = end.getTime();
                            var cursor = startTime;
                            var date = dw(new TZDate(start));
                            var result = [];

                            while (cursor <= endTime && endTime >= date.d.getTime()) {
                                result.push(datetime.start(date.d));
                                cursor = cursor + step;
                                date.addDate(1);
                            }

                            return result;
                        },

                        /**
                         * Clone supplied date.
                         * @param {TZDate} date date object to clone.
                         * @returns {TZDate} Cloned date object
                         */
                        clone: function (date) {
                            return new TZDate(date);
                        },

                        /**
                         * Compare two dates.
                         *
                         * when first date is latest then seconds then return -1.
                         *
                         * return +1 reverse, and return 0 is same.
                         * @param {TZDate} d1 Date object to compare.
                         * @param {TZDate} d2 Date object to compare.
                         * @returns {number} result of compare
                         */
                        compare: function (d1, d2) {
                            var _d1 = d1.getTime(),
                                _d2 = d2.getTime();

                            if (_d1 < _d2) {
                                return -1;
                            }
                            if (_d1 > _d2) {
                                return 1;
                            }

                            return 0;
                        },

                        /**
                         * @param {TZDate} d1 - date one
                         * @param {TZDate} d2 - date two
                         * @returns {boolean} is two date are same year, month?
                         */
                        isSameMonth: function (d1, d2) {
                            return (d1.getFullYear() === d2.getFullYear() &&
                                d1.getMonth() === d2.getMonth());
                        },

                        /**
                         * @param {TZDate} d1 - date one
                         * @param {TZDate} d2 - date two
                         * @returns {boolean} is two date are same year, month, date?
                         */
                        isSameDate: function (d1, d2) {
                            var sameMonth = datetime.isSameMonth(d1, d2);

                            return sameMonth && (d1.getDate() === d2.getDate());
                        },

                        /**
                         * Check supplied parameter is valid date object.
                         * @param {*} d Object to validate.
                         * @returns {boolean} return true when parameter is valid date object.
                         */
                        isValid: function (d) {
                            if (d instanceof TZDate) {
                                return !window.isNaN(d.getTime());
                            }

                            return false;
                        },

                        /**
                         * convert non local date to UTC date.
                         * @param {TZDate} d Date to convert UTC.
                         * @returns {TZDate} The UTC Date.
                         */
                        toUTC: function (d) {
                            var l = d.getTime(),
                                offset = datetime.millisecondsFrom('minutes', new Date().getTimezoneOffset());

                            return new TZDate(l + offset);
                        },

                        /**
                         * pad left zero characters.
                         * @param {number} number number value to pad zero.
                         * @param {number} length pad length to want.
                         * @returns {string} padded string.
                         */
                        leadingZero: function (number, length) {
                            var zero = '',
                                i = 0;

                            if (String(number).length > length) {
                                return String(number);
                            }

                            for (; i < (length - 1); i += 1) {
                                zero += '0';
                            }

                            return (zero + number).slice(length * -1);
                        },

                        /**
                         * Convert date string to date object.
                         *
                         * Only listed below formats avaliable.
                         *
                         * - YYYYMMDD
                         * - YYYY/MM/DD
                         * - YYYY-MM-DD
                         * - YYYY/MM/DD HH:mm:SS
                         * - YYYY-MM-DD HH:mm:SS
                         *
                         * @param {string} str Formatted string.
                         * @param {number} [fixMonth=-1] - number for fix month calculating.
                         * @returns {(TZDate|boolean)} Converted Date object. when supplied str is not available then return false.
                         */
                        parse: function (str, fixMonth) {
                            var separator,
                                matches = str.match(dateFormatRx),
                                ymd,
                                hms;

                            if (util.isUndefined(fixMonth)) {
                                fixMonth = -1;
                            }

                            if (!matches) {
                                return false;
                            }

                            if (str.length > 8) {
                                // YYYY/MM/DD
                                // YYYY-MM-DD
                                // YYYY/MM/DD HH:mm:SS
                                // YYYY-MM-DD HH:mm:SS
                                separator = ~str.indexOf('/') ? '/' : '-';
                                matches = matches.splice(1);

                                ymd = matches[0].split(separator);
                                hms = matches[1] ? matches[1].split(':') : [0, 0, 0];
                            } else {
                                // YYYYMMDD
                                matches = matches[0];
                                ymd = [matches.substr(0, 4), matches.substr(4, 2), matches.substr(6, 2)];
                                hms = [0, 0, 0];
                            }

                            return new TZDate().setWithRaw(
                                Number(ymd[0]),
                                Number(ymd[1]) + fixMonth,
                                Number(ymd[2]),
                                Number(hms[0]),
                                Number(hms[1]),
                                Number(hms[2]),
                                0
                            );
                        },

                        /**
                         * Return date object from Date.
                         * @param {TZDate} date date
                         * @returns {object} Date object.
                         */
                        raw: function (date) {
                            return {
                                y: date.getFullYear(),
                                M: date.getMonth(),
                                d: date.getDate(),
                                h: date.getHours(),
                                m: date.getMinutes(),
                                s: date.getSeconds(),
                                ms: date.getMilliseconds()
                            };
                        },

                        /**
                         * Return 00:00:00 supplied date.
                         * @param {TZDate} date date. if undefined, use now.
                         * @returns {TZDate} start date.
                         */
                        start: function (date) {
                            var d = date ? new TZDate(date) : new TZDate();
                            d.setHours(0, 0, 0, 0);

                            return d;
                        },

                        /**
                         * Return 23:59:59 supplied date.
                         * @param {TZDate} date date. if undefined, use now.
                         * @returns {TZDate} end date.
                         */
                        end: function (date) {
                            var d = date ? new TZDate(date) : new TZDate();
                            d.setHours(23, 59, 59, 0);

                            return d;
                        },

                        /**
                         * Return formatted string as basis of supplied string.
                         *
                         * Supported Token Lists.
                         *
                         * - YYYY => 1988
                         * - MM => 01 ~ 12
                         * - DD => 01 ~ 31
                         * - YYYYMMDD => 19880925
                         * @param {TZDate} date String want to formatted.
                         * @param {string} format format str.
                         * @returns {string}  Formatted date string.
                         */
                        format: function (date, format) {
                            var result = format;
                            util.forEachOwnProperties(tokenFunc, function (converter, token) {
                                result = result.replace(token, converter(date));
                            });

                            return result;
                        },

                        /**
                         * Get start date of specific month
                         * @param {TZDate} date - date to get start date
                         * @returns {TZDate} start date of supplied month
                         */
                        startDateOfMonth: function (date) {
                            var startDate = new TZDate(date);

                            startDate.setDate(1);
                            startDate.setHours(0, 0, 0, 0);

                            return startDate;
                        },

                        /**
                         * Get end date of specific month
                         * @param {TZDate} date - date to get end date
                         * @returns {TZDate} end date of supplied month
                         */
                        endDateOfMonth: function (date) {
                            var endDate = datetime.startDateOfMonth(date);

                            endDate.setMonth(endDate.getMonth() + 1);
                            endDate.setDate(endDate.getDate() - 1);
                            endDate.setHours(23, 59, 59);

                            return endDate;
                        },

                        /**
                         * Return 2-dimensional array month calendar
                         *
                         * dates that different month with given date are negative values
                         * @param {TZDate} month - date want to calculate month calendar
                         * @param {object} options - options
                         * @param {number} [options.startDayOfWeek=0] - start day of week
                         * @param {boolean} options.isAlways6Week - whether the number of weeks are always 6
                         * @param {number} options.visibleWeeksCount visible weeks count
                         * @param {boolean} options.workweek - only show work week
                         * @param {function} [iteratee] - iteratee for customizing calendar object
                         * @returns {Array.<TZDate[]>} calendar 2d array
                         */
                        arr2dCalendar: function (month, options, iteratee) {
                            var weekArr,
                                start, end,
                                startIndex, endIndex,
                                totalDate, afterDates,
                                cursor, week,
                                calendar = [],
                                startDayOfWeek = options.startDayOfWeek,
                                isAlways6Week = util.isUndefined(options.isAlways6Week) ? true : options.isAlways6Week,
                                visibleWeeksCount = options.visibleWeeksCount,
                                workweek = options.workweek;

                            if (visibleWeeksCount) {
                                start = new TZDate(month);
                                end = dw(new TZDate(month));
                                end.addDate(7 * (visibleWeeksCount - 1));
                                end = end.d;
                            } else {
                                start = datetime.startDateOfMonth(month);
                                end = datetime.endDateOfMonth(month);
                            }

                            // create day number array by startDayOfWeek number
                            // 4 -> [4, 5, 6, 0, 1, 2, 3]
                            // 2 -> [2, 3, 4, 5, 6, 0, 1]
                            weekArr = util.range(startDayOfWeek, 7).concat(util.range(7)).slice(0, 7);
                            startIndex = util.inArray(start.getDay(), weekArr);
                            endIndex = util.inArray(end.getDay(), weekArr);
                            // free dates after last date of this month
                            afterDates = 7 - (endIndex + 1);

                            if (visibleWeeksCount) {
                                totalDate = 7 * visibleWeeksCount;
                            } else {
                                totalDate = isAlways6Week ? (7 * 6) : (startIndex + end.getDate() + afterDates);
                            }
                            cursor = datetime.start(start).addDate(-startIndex);
                            // iteratee all dates to render
                            util.forEachArray(util.range(totalDate), function (i) {
                                var date;

                                if (!(i % 7)) {
                                    // group each date by week
                                    week = calendar[i / 7] = [];
                                }

                                date = datetime.start(cursor);
                                date = iteratee ? iteratee(date) : date;
                                if (!workweek || !datetime.isWeekend(date.getDay())) {
                                    week.push(date);
                                }

                                // add date
                                cursor.setDate(cursor.getDate() + 1);
                            });

                            return calendar;
                        },

                        /**
                         * Calculate grid left(%), width(%) by narrowWeekend, startDayOfWeek, workweek
                         *
                         * @param {number} days - day length of week
                         * @param {boolean} narrowWeekend - narrow weekend
                         * @param {number} startDayOfWeek - start day of week
                         * @param {boolean} workweek - only show work week
                         * @returns {Array} day, left, width
                         */
                        getGridLeftAndWidth: function (days, narrowWeekend, startDayOfWeek, workweek) {
                            var limitDaysToApplyNarrowWeekend = 5;
                            var uniformWidth = 100 / days;
                            var wideWidth = days > limitDaysToApplyNarrowWeekend ? 100 / (days - 1) : uniformWidth;
                            var accumulatedWidth = 0;
                            var dates = util.range(startDayOfWeek, 7).concat(util.range(days)).slice(0, 7);

                            if (workweek) {
                                dates = util.filter(dates, function (day) {
                                    return !datetime.isWeekend(day);
                                });
                            }

                            narrowWeekend = workweek ? false : narrowWeekend;

                            return util.map(dates, function (day) {
                                var model;
                                var width = narrowWeekend ? wideWidth : uniformWidth;
                                if (days > limitDaysToApplyNarrowWeekend && narrowWeekend && datetime.isWeekend(day)) {
                                    width = wideWidth / 2;
                                }

                                model = {
                                    day: day,
                                    width: width,
                                    left: accumulatedWidth
                                };

                                accumulatedWidth += width;

                                return model;
                            });
                        },

                        /**
                         * Get that day is weekend
                         * @param {number} day number
                         * @returns {boolean} true if weekend or false
                         */
                        isWeekend: function (day) {
                            return day === 0 || day === 6;
                        },

                        /**
                         * Whether date is between supplied dates with date value?
                         * @param {TZDate} d - target date
                         * @param {TZDate} d1 - from date
                         * @param {TZDate} d2 - to date
                         * @returns {boolean} is between?
                         */
                        isBetweenWithDate: function (d, d1, d2) {
                            var format = 'YYYYMMDD';
                            d = parseInt(datetime.format(d, format), 10);
                            d1 = parseInt(datetime.format(d1, format), 10);
                            d2 = parseInt(datetime.format(d2, format), 10);

                            return d1 <= d && d <= d2;
                        },

                        isStartOfDay: function (d) {
                            return !datetime.compare(datetime.start(d), d);
                        },

                        convertStartDayToLastDay: function (d) {
                            var date = new TZDate(d);
                            if (datetime.isStartOfDay(d)) {
                                date.setDate(date.getDate() - 1);
                                date.setHours(23, 59, 59);
                            }

                            return date;
                        },

                        getStartOfNextDay: function (d) {
                            var date = datetime.start(d);
                            date.setHours(24);

                            return date;
                        },

                        getDateDifference: function (d1, d2) {
                            var _d1 = new TZDate(d1.getFullYear(), d1.getMonth(), d1.getDate()).getTime();
                            var _d2 = new TZDate(d2.getFullYear(), d2.getMonth(), d2.getDate()).getTime();

                            return Math.round((_d1 - _d2) / datetime.MILLISECONDS_PER_DAY);
                        }
                    };

                    module.exports = datetime;

                    /* WEBPACK VAR INJECTION */
                }.call(this, __webpack_require__(/*! ./../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

                /***/
            }),

/***/ "./src/js/common/dirty.js":
/*!********************************!*\
  !*** ./src/js/common/dirty.js ***!
  \********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Dirty flagging module for objects.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var common = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var existy = common.isExisty,
                    pick = common.pick,
                    isFunc = common.isFunction;

                /**
                 * Mixin module for dirty flagging on specific objects.
                 * @mixin
                 * @example
                 * var obj = { hello: 'good', test: '123' };
                 * dirty.mixin(obj);
                 *
                 * obj.set('hello', 'world');
                 * obj.isDirty();    // true
                 * obj.isPropChanged('hello');    // true
                 * obj.isPropChanged('test');    // false
                 * obj.dirty(false);
                 *
                 * obj.isDirty();    // false
                 * obj.isPropChanged('hello');    // false
                 */
                var dirty = {
                    /**
                     * Set property value with dirty flagging.
                     * @param {string} propName Property name.
                     * @param {*} value Proprty value.
                     */
                    set: function (propName, value) {
                        var originValue = this[propName];

                        if (originValue === value) {
                            return;
                        }

                        this[propName] = value;

                        if (!this._changed) {
                            /**
                             * Save changed properties.
                             * @memberof dirty
                             * @name _changed
                             * @type {Object}
                             */
                            this._changed = {};
                        }

                        this._changed[propName] = true;

                        /**
                         * Dirty flag
                         * @type {Boolean}
                         * @name _dirty
                         * @memberof dirty
                         */
                        this._dirty = true;
                    },

                    /**
                     * Check dirty flag.
                     * @returns {boolean} Property is changed.
                     */
                    isDirty: function () {
                        return !!this._dirty;
                    },

                    /**
                     * Set dirty flag manually.
                     * @param {Boolean} [toDirty=true] This will set dirty flag directly.
                     */
                    dirty: function (toDirty) {
                        toDirty = existy(toDirty) ? toDirty : true;

                        /* istanbul ignore else */
                        if (!toDirty) {
                            this._changed = {};
                        }

                        this._dirty = toDirty;
                    },

                    /**
                     * Delete property safety.
                     * @param {String} propName The name of property.
                     */
                    deleteProp: function (propName) {
                        delete this[propName];

                        if (this._changed) {
                            delete this._changed[propName];
                        }
                    },

                    /**
                     * Check the changes with specific property.
                     * @param {String} propName The name of property you want.
                     * @returns {boolean} Is property changed?
                     */
                    isPropChanged: function (propName) {
                        if (!this._changed) {
                            return false;
                        }

                        return this._changed[propName] === true;
                    },

                    /**
                     * Mixin to specific objects.
                     * @param {Object} target The object to mix this module.
                     * @memberof module:util/dirty
                     * @example
                     * function Animal() {}
                     * dirty.mixin(Animal.prototype);
                     */
                    mixin: function (target) {
                        var methodFilterR = /(^_|mixin|wrap)/;

                        common.forEachOwnProperties(dirty, function (o, k) {
                            if (!methodFilterR.test(k)) {
                                target[k] = dirty[k];
                            }
                        });
                    },

                    /**
                     * Wrapper method for dirty flagging.
                     *
                     * This method invoke after invoked specific method that added by you.
                     *
                     * The method want to add are must exist before add.
                     * @param {object} target Target object to method wrap.
                     * @param {(string|object)} methodName
                     *  Method name to wrap or methodName: flag objects.
                     * @param {boolean} [flag=true]
                     *  this will used to flagging by dirty flagger after invoke the methods added by you.
                     * @memberof module:util/dirty
                     * @example
                     * function Animal(name) {
                     *     this.name = name;
                     * }
                     * Animal.prototype.growl = jasmine.createSpy('growl');
                     * Animal.prototype.test = function() {
                     *     return this.name;
                     * };
                     *
                     * dirty.mixin(Animal.prototype);
                     * // single
                     * dirty.wrap(Animal.prototype, 'growl', true);
                     * // multiple
                     * dirty.wrap(Animap.prototype, {
                     *     growl: true,
                     *     test: false
                     * });
                     *
                     */
                    wrap: function (target, methodName, flag) {
                        var wrap = dirty.wrap,
                            fn;

                        if (common.isObject(methodName)) {
                            common.forEachOwnProperties(methodName, function (_flag, _name) {
                                wrap(target, _name, _flag);
                            });

                            return;
                        }

                        flag = existy(flag) ? flag : true;

                        if (!target._wrapper) {
                            /**
                             * @param {function} _fn Original method to wrap.
                             * @param {boolean} flagToSet The boolean value to using dirty flagging.
                             * @returns {*} The result value of original method.
                             * @name _wrapper
                             * @memberof dirty
                             */
                            target._wrapper = function (_fn, flagToSet) {
                                return function () {
                                    var args = Array.prototype.slice.call(arguments);
                                    var result = _fn.apply(this, args); // eslint-disable-line
                                    this._dirty = flagToSet; // eslint-disable-line

                                    return result;
                                };
                            };
                        }

                        if (existy(pick(target, methodName)) &&
                            isFunc(target[methodName]) &&
                            !existy(pick(target, methodName, '_wrapped'))) {
                            fn = target[methodName];
                            target[methodName] = target._wrapper(fn, flag);
                            target[methodName]._wrapped = true;
                        }
                    }
                };

                module.exports = dirty;


                /***/
            }),

/***/ "./src/js/common/domevent.js":
/*!***********************************!*\
  !*** ./src/js/common/domevent.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /* eslint complexity: 0 */
                /**
                 * @fileoverview Utility module for handling DOM events.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var browser = util.browser,
                    eventKey = '_evt',
                    DRAG = {
                        START: ['touchstart', 'mousedown'],
                        END: {
                            mousedown: 'mouseup',
                            touchstart: 'touchend',
                            pointerdown: 'touchend',
                            MSPointerDown: 'touchend'
                        },
                        MOVE: {
                            mousedown: 'mousemove',
                            touchstart: 'touchmove',
                            pointerdown: 'touchmove',
                            MSPointerDown: 'touchmove'
                        }
                    };

                var domevent = {
                    /**
                     * Bind dom events.
                     * @param {HTMLElement} obj HTMLElement to bind events.
                     * @param {(string|object)} types Space splitted events names or eventName:handler object.
                     * @param {*} fn handler function or context for handler method.
                     * @param {*} [context] context object for handler method.
                     */
                    on: function (obj, types, fn, context) {
                        if (util.isString(types)) {
                            util.forEach(types.split(' '), function (type) {
                                domevent._on(obj, type, fn, context);
                            });

                            return;
                        }

                        util.forEachOwnProperties(types, function (handler, type) {
                            domevent._on(obj, type, handler, fn);
                        });
                    },

                    /**
                     * DOM event binding.
                     * @param {HTMLElement} obj HTMLElement to bind events.
                     * @param {String} type The name of events.
                     * @param {*} fn handler function
                     * @param {*} [context] context object for handler method.
                     * @private
                     */
                    _on: function (obj, type, fn, context) {
                        var id,
                            handler,
                            originHandler;

                        id = type + util.stamp(fn) + (context ? '_' + util.stamp(context) : '');

                        if (obj[eventKey] && obj[eventKey][id]) {
                            return;
                        }

                        handler = function (e) {
                            fn.call(context || obj, e || window.event);
                        };

                        originHandler = handler;

                        if ('addEventListener' in obj) {
                            if (type === 'mouseenter' || type === 'mouseleave') {
                                handler = function (e) {
                                    e = e || window.event;
                                    if (!domevent._checkMouse(obj, e)) {
                                        return;
                                    }
                                    originHandler(e);
                                };
                                obj.addEventListener((type === 'mouseenter') ?
                                    'mouseover' : 'mouseout', handler, false);
                            } else {
                                if (type === 'mousewheel') {
                                    obj.addEventListener('DOMMouseScroll', handler, false);
                                }

                                obj.addEventListener(type, handler, false);
                            }
                        } else if ('attachEvent' in obj) {
                            obj.attachEvent('on' + type, handler);
                        }

                        obj[eventKey] = obj[eventKey] || {};
                        obj[eventKey][id] = handler;
                    },

                    /**
                     * Unbind DOM Event handler.
                     * @param {HTMLElement} obj HTMLElement to unbind.
                     * @param {(string|object)} types Space splitted events names or eventName:handler object.
                     * @param {*} fn handler function or context for handler method.
                     * @param {*} [context] context object for handler method.
                     */
                    off: function (obj, types, fn, context) {
                        if (util.isString(types)) {
                            util.forEach(types.split(' '), function (type) {
                                domevent._off(obj, type, fn, context);
                            });

                            return;
                        }

                        util.forEachOwnProperties(types, function (handler, type) {
                            domevent._off(obj, type, handler, fn);
                        });
                    },

                    /**
                     * Unbind DOM event handler.
                     * @param {HTMLElement} obj HTMLElement to unbind.
                     * @param {String} type The name of event to unbind.
                     * @param {function()} fn Event handler that supplied when binding.
                     * @param {*} context context object that supplied when binding.
                     * @private
                     */
                    _off: function (obj, type, fn, context) {
                        var id = type + util.stamp(fn) + (context ? '_' + util.stamp(context) : ''),
                            handler = obj[eventKey] && obj[eventKey][id];

                        if (!handler) {
                            return;
                        }

                        if ('removeEventListener' in obj) {
                            if (type === 'mouseenter' || type === 'mouseleave') {
                                obj.removeEventListener((type === 'mouseenter') ?
                                    'mouseover' : 'mouseout', handler, false);
                            } else {
                                if (type === 'mousewheel') {
                                    obj.removeEventListener('DOMMouseScroll', handler, false);
                                }

                                obj.removeEventListener(type, handler, false);
                            }
                        } else if ('detachEvent' in obj) {
                            try {
                                obj.detachEvent('on' + type, handler);
                            } catch (e) { }    //eslint-disable-line
                        }

                        delete obj[eventKey][id];

                        if (util.keys(obj[eventKey]).length) {
                            return;
                        }

                        // throw exception when deleting host object's property in below IE8
                        if (util.browser.msie && util.browser.version < 9) {
                            obj[eventKey] = null;

                            return;
                        }

                        delete obj[eventKey];
                    },

                    /**
                     * Bind DOM event. this event will unbind after invokes.
                     * @param {HTMLElement} obj HTMLElement to bind events.
                     * @param {(string|object)} types Space splitted events names or eventName:handler object.
                     * @param {*} fn handler function or context for handler method.
                     * @param {*} [context] context object for handler method.
                     */
                    once: function (obj, types, fn, context) {
                        var self = this;

                        if (util.isObject(types)) {
                            util.forEachOwnProperties(types, function (handler, type) {
                                domevent.once(obj, type, handler, fn);
                            });

                            return;
                        }

                        /**
                         * Handler for temporary usage for once implementation
                         */
                        function onceHandler() {
                            fn.apply(context || obj, arguments);
                            self._off(obj, types, onceHandler, context);
                        }

                        domevent.on(obj, types, onceHandler, context);
                    },

                    /**
                     * Cancel event bubbling.
                     * @param {Event} e Event object.
                     */
                    stopPropagation: function (e) {
                        if (e.stopPropagation) {
                            e.stopPropagation();
                        } else {
                            e.cancelBubble = true;
                        }
                    },

                    /**
                     * Cancel browser default actions.
                     * @param {Event} e Event object.
                     */
                    preventDefault: function (e) {
                        if (e.preventDefault) {
                            e.preventDefault();
                        } else {
                            e.returnValue = false;
                        }
                    },

                    /**
                     * Syntatic sugar of stopPropagation and preventDefault
                     * @param {Event} e Event object.
                     */
                    stop: function (e) {
                        domevent.preventDefault(e);
                        domevent.stopPropagation(e);
                    },

                    /**
                     * Stop scroll events.
                     * @param {HTMLElement} el HTML element to prevent scroll.
                     */
                    disableScrollPropagation: function (el) {
                        domevent.on(el, 'mousewheel MozMousePixelScroll', domevent.stopPropagation);
                    },

                    /**
                     * Stop all events related with click.
                     * @param {HTMLElement} el HTML element to prevent all event related with click.
                     */
                    disableClickPropagation: function (el) {
                        domevent.on(el, DRAG.START.join(' ') + ' click dblclick', domevent.stopPropagation);
                    },

                    /**
                     * Get mouse position from mouse event.
                     *
                     * If supplied relatveElement parameter then return relative position based on element.
                     * @param {Event} mouseEvent Mouse event object
                     * @param {HTMLElement} relativeElement HTML element that calculate relative position.
                     * @returns {number[]} mouse position.
                     */
                    getMousePosition: function (mouseEvent, relativeElement) {
                        var rect;

                        if (!relativeElement) {
                            return [mouseEvent.clientX, mouseEvent.clientY];
                        }

                        rect = relativeElement.getBoundingClientRect();

                        return [
                            mouseEvent.clientX - rect.left - relativeElement.clientLeft,
                            mouseEvent.clientY - rect.top - relativeElement.clientTop
                        ];
                    },

                    /**
                     * Normalize mouse wheel event that different each browsers.
                     * @param {MouseEvent} e Mouse wheel event.
                     * @returns {Number} delta
                     */
                    getWheelDelta: function (e) {
                        var delta = 0;

                        if (e.wheelDelta) {
                            delta = e.wheelDelta / 120;
                        }

                        if (e.detail) {
                            delta = -e.detail / 3;
                        }

                        return delta;
                    },

                    /**
                     * prevent firing mouseleave event when mouse entered child elements.
                     * @param {HTMLElement} el HTML element
                     * @param {MouseEvent} e Mouse event
                     * @returns {Boolean} leave?
                     * @private
                     */
                    _checkMouse: function (el, e) {
                        var related = e.relatedTarget;

                        if (!related) {
                            return true;
                        }

                        try {
                            while (related && (related !== el)) {
                                related = related.parentNode;
                            }
                        } catch (err) {
                            return false;
                        }

                        return (related !== el);
                    },

                    /**
                     * Trigger specific events to html element.
                     * @param {HTMLElement} obj HTMLElement
                     * @param {string} type Event type name
                     * @param {object} [eventData] Event data
                     */
                    trigger: function (obj, type, eventData) {
                        var rMouseEvent = /(mouse|click)/;
                        if (util.isUndefined(eventData) && rMouseEvent.exec(type)) {
                            eventData = domevent.mouseEvent(type);
                        }

                        if (obj.dispatchEvent) {
                            obj.dispatchEvent(eventData);
                        } else if (obj.fireEvent) {
                            obj.fireEvent('on' + type, eventData);
                        }
                    },

                    /**
                     * Create virtual mouse event.
                     *
                     * Tested at
                     *
                     * - IE7 ~ IE11
                     * - Chrome
                     * - Firefox
                     * - Safari
                     * @param {string} type Event type
                     * @param {object} [eventObj] Event data
                     * @returns {MouseEvent} Virtual mouse event.
                     */
                    mouseEvent: function (type, eventObj) {
                        var evt,
                            e;

                        e = util.extend({
                            bubbles: true,
                            cancelable: (type !== 'mousemove'),
                            view: window,
                            wheelDelta: 0,
                            detail: 0,
                            screenX: 0,
                            screenY: 0,
                            clientX: 0,
                            clientY: 0,
                            ctrlKey: false,
                            altKey: false,
                            shiftKey: false,
                            metaKey: false,
                            button: 0,
                            relatedTarget: undefined  // eslint-disable-line
                        }, eventObj);

                        // prevent throw error when inserting wheelDelta property to mouse event on below IE8
                        if (browser.msie && browser.version < 9) {
                            delete e.wheelDelta;
                        }

                        if (typeof document.createEvent === 'function') {
                            evt = document.createEvent('MouseEvents');
                            evt.initMouseEvent(type,
                                e.bubbles, e.cancelable, e.view, e.detail,
                                e.screenX, e.screenY, e.clientX, e.clientY,
                                e.ctrlKey, e.altKey, e.shiftKey, e.metaKey,
                                e.button, document.body.parentNode
                            );
                        } else if (document.createEventObject) {
                            evt = document.createEventObject();

                            util.forEach(e, function (value, propName) {
                                evt[propName] = value;
                            }, this);
                            evt.button = {
                                0: 1,
                                1: 4,
                                2: 2
                            }[evt.button] || evt.button;
                        }

                        return evt;
                    },

                    /**
                     * Normalize mouse event's button attributes.
                     *
                     * Can detect which button is clicked by this method.
                     *
                     * Meaning of return numbers
                     *
                     * - 0: primary mouse button
                     * - 1: wheel button or center button
                     * - 2: secondary mouse button
                     * @param {MouseEvent} mouseEvent - The mouse event object want to know.
                     * @returns {number} - The value of meaning which button is clicked?
                     */
                    getMouseButton: function (mouseEvent) {
                        var button,
                            primary = '0,1,3,5,7',
                            secondary = '2,6',
                            wheel = '4';

                        /* istanbul ignore else */
                        if (document.implementation.hasFeature('MouseEvents', '2.0')) {
                            return mouseEvent.button;
                        }

                        button = String(mouseEvent.button);
                        if (primary.indexOf(button) > -1) {
                            return 0;
                        }
                        if (secondary.indexOf(button) > -1) {
                            return 2;
                        }
                        if (~wheel.indexOf(button)) {
                            return 1;
                        }

                        return -1;
                    },

                    /**
                     * Get target from event object
                     *
                     * @param {Event} event - The event object
                     * @returns {object} - The event target object
                     */
                    getEventTarget: function (event) {
                        return event.target || event.srcElement;
                    }
                };

                module.exports = domevent;


                /***/
            }),

/***/ "./src/js/common/domutil.js":
/*!**********************************!*\
  !*** ./src/js/common/domutil.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /* eslint complexity: 0, no-shadow: 0, max-nested-callbacks: 0  */
                /**
                 * @fileoverview Utility modules for manipulate DOM elements.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var domevent = __webpack_require__(/*! ./domevent */ "./src/js/common/domevent.js");
                var Collection = __webpack_require__(/*! ./collection */ "./src/js/common/collection.js");
                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");

                var posKey = '_pos',
                    domutil;

                var CSS_AUTO_REGEX = /^auto$|^$|%/;

                /**
                 * Trim leading, trailing whitespace
                 * @param {string} str - string to trim
                 * @returns {string} trimmed string
                 */
                function trim(str) {
                    return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
                }

                domutil = {
                    /**
                     * Create DOM element and return it.
                     * @param {string} tagName Tag name to append.
                     * @param {HTMLElement} [container] HTML element will be parent to created element.
                     * if not supplied, will use **document.body**
                     * @param {string} [className] Design class names to appling created element.
                     * @returns {HTMLElement} HTML element created.
                     */
                    appendHTMLElement: function (tagName, container, className) {
                        var el;

                        className = className || '';

                        el = document.createElement(tagName);
                        el.className = className;

                        if (container) {
                            container.appendChild(el);
                        } else {
                            document.body.appendChild(el);
                        }

                        return el;
                    },

                    /**
                     * Remove element from parent node.
                     * @param {HTMLElement} el - element to remove.
                     */
                    remove: function (el) {
                        if (el && el.parentNode) {
                            el.parentNode.removeChild(el);
                        }
                    },

                    /**
                     * Get element by id
                     * @param {string} id element id attribute
                     * @returns {HTMLElement} element
                     */
                    get: function (id) {
                        return document.getElementById(id);
                    },

                    /**
                     * Check supplied element is matched selector.
                     * @param {HTMLElement} el - element to check
                     * @param {string} selector - selector string to check
                     * @returns {boolean} match?
                     */
                    _matcher: function (el, selector) {
                        var cssClassSelector = /^\./,
                            idSelector = /^#/;

                        if (cssClassSelector.test(selector)) {
                            return domutil.hasClass(el, selector.replace('.', ''));
                        }
                        if (idSelector.test(selector)) {
                            return el.id === selector.replace('#', '');
                        }

                        return el.nodeName.toLowerCase() === selector.toLowerCase();
                    },

                    /**
                     * Find DOM element by specific selectors.
                     * below three selector only supported.
                     *
                     * 1. css selector
                     * 2. id selector
                     * 3. nodeName selector
                     * @param {string} selector selector
                     * @param {(HTMLElement|string)} [root] You can assign root element to find
                     *  if not supplied, document.body will use.
                     * @param {boolean|function} [multiple=false] - set true then return all
                     *  elements that meet condition, if set function then use it filter function.
                     * @returns {HTMLElement} HTML element finded.
                     */
                    find: function (selector, root, multiple) {
                        var result = [],
                            found = false,
                            isFirst = util.isUndefined(multiple) || multiple === false,
                            isFilter = util.isFunction(multiple);

                        if (util.isString(root)) {
                            root = domutil.get(root);
                        }

                        root = root || window.document.body;

                        /**
                         * Function for recursive find specific node
                         * @param {HTMLElement} el - element to search
                         * @param {string} selector - selector
                         */
                        function recurse(el, selector) {
                            var childNodes = el.childNodes,
                                i = 0,
                                len = childNodes.length,
                                cursor;

                            for (; i < len; i += 1) {
                                cursor = childNodes[i];

                                if (cursor.nodeName === '#text') {
                                    continue;
                                }

                                if (domutil._matcher(cursor, selector)) {
                                    if ((isFilter && multiple(cursor)) || !isFilter) {
                                        result.push(cursor);
                                    }

                                    if (isFirst) {
                                        found = true;
                                        break;
                                    }
                                } else if (cursor.childNodes.length > 0) {
                                    recurse(cursor, selector);
                                    if (found) {
                                        break;
                                    }
                                }
                            }
                        }

                        recurse(root, selector);

                        return isFirst ? (result[0] || null) : result;
                    },

                    /**
                     * Find parent element recursively.
                     * @param {HTMLElement} el - base element to start find.
                     * @param {string} selector - selector string for find
                     * @param {boolean} excludeEl - exclude the base element to find
                     * @returns {HTMLElement} - element finded or null.
                     */
                    closest: function (el, selector, excludeEl) {
                        var parent;

                        if (!el) {
                            return null;
                        }

                        parent = el.parentNode;

                        if (!excludeEl && domutil._matcher(el, selector)) {
                            return el;
                        }

                        while (parent && parent !== window.document.body) {
                            if (domutil._matcher(parent, selector)) {
                                return parent;
                            }

                            parent = parent.parentNode;
                        }

                        return null;
                    },

                    /**
                     * Return texts inside element.
                     * @param {HTMLElement} el target element
                     * @returns {string} text inside node
                     */
                    text: function (el) {
                        var ret = '',
                            i = 0,
                            nodeType = el.nodeType;

                        if (nodeType) {
                            if (nodeType === 1 || nodeType === 9 || nodeType === 11) {
                                // nodes that available contain other nodes
                                if (typeof el.textContent === 'string') {
                                    return el.textContent;
                                }

                                for (el = el.firstChild; el; el = el.nextSibling) {
                                    ret += domutil.text(el);
                                }
                            } else if (nodeType === 3 || nodeType === 4) {
                                // TEXT, CDATA SECTION
                                return el.nodeValue;
                            }
                        } else {
                            for (; el[i]; i += 1) {
                                ret += domutil.text(el[i]);
                            }
                        }

                        return ret;
                    },

                    /**
                     * Set data attribute to target element
                     * @param {HTMLElement} el - element to set data attribute
                     * @param {string} key - key
                     * @param {string|number} data - data value
                     */
                    setData: function (el, key, data) {
                        if ('dataset' in el) {
                            el.dataset[key] = data;

                            return;
                        }

                        el.setAttribute('data-' + key, data);
                    },

                    /**
                     * Get data value from data-attribute
                     * @param {HTMLElement} el - target element
                     * @param {string} key - key
                     * @returns {string} value
                     */
                    getData: function (el, key) {
                        if ('dataset' in el) {
                            return el.dataset[key];
                        }

                        return el.getAttribute('data-' + key);
                    },

                    /**
                     * Check element has specific design class name.
                     * @param {HTMLElement} el target element
                     * @param {string} name css class
                     * @returns {boolean} return true when element has that css class name
                     */
                    hasClass: function (el, name) {
                        var className;

                        if (!util.isUndefined(el.classList)) {
                            return el.classList.contains(name);
                        }

                        className = domutil.getClass(el);

                        return className.length > 0 && new RegExp('(^|\\s)' + name + '(\\s|$)').test(className);
                    },

                    /**
                     * Add design class to HTML element.
                     * @param {HTMLElement} el target element
                     * @param {string} name css class name
                     */
                    addClass: function (el, name) {
                        var className;

                        if (!util.isUndefined(el.classList)) {
                            util.forEachArray(name.split(' '), function (value) {
                                el.classList.add(value);
                            });
                        } else if (!domutil.hasClass(el, name)) {
                            className = domutil.getClass(el);
                            domutil.setClass(el, (className ? className + ' ' : '') + name);
                        }
                    },

                    /**
                     *
                     * Overwrite design class to HTML element.
                     * @param {HTMLElement} el target element
                     * @param {string} name css class name
                     */
                    setClass: function (el, name) {
                        if (util.isUndefined(el.className.baseVal)) {
                            el.className = name;
                        } else {
                            el.className.baseVal = name;
                        }
                    },

                    /**
                     * Element에 cssClass속성을 제거하는 메서드
                     * Remove specific design class from HTML element.
                     * @param {HTMLElement} el target element
                     * @param {string} name class name to remove
                     */
                    removeClass: function (el, name) {
                        var removed = '';

                        if (!util.isUndefined(el.classList)) {
                            el.classList.remove(name);
                        } else {
                            removed = (' ' + domutil.getClass(el) + ' ').replace(' ' + name + ' ', ' ');
                            domutil.setClass(el, trim(removed));
                        }
                    },

                    /**
                     * Get HTML element's design classes.
                     * @param {HTMLElement} el target element
                     * @returns {string} element css class name
                     */
                    getClass: function (el) {
                        if (!el || !el.className) {
                            return '';
                        }

                        return util.isUndefined(el.className.baseVal) ? el.className : el.className.baseVal;
                    },

                    /**
                     * Get specific CSS style value from HTML element.
                     * @param {HTMLElement} el target element
                     * @param {string} style css attribute name
                     * @returns {(string|null)} css style value
                     */
                    getStyle: function (el, style) {
                        var value = el.style[style] || (el.currentStyle && el.currentStyle[style]),
                            css;

                        if ((!value || value === 'auto') && document.defaultView) {
                            css = document.defaultView.getComputedStyle(el, null);
                            value = css ? css[style] : null;
                        }

                        return value === 'auto' ? null : value;
                    },

                    /**
                     * get element's computed style values.
                     *
                     * in lower IE8. use polyfill function that return object. it has only one function 'getPropertyValue'
                     * @param {HTMLElement} el - element want to get style.
                     * @returns {object} virtual CSSStyleDeclaration object.
                     */
                    getComputedStyle: function (el) {
                        var defaultView = document.defaultView;

                        if (!defaultView || !defaultView.getComputedStyle) {
                            return {
                                getPropertyValue: function (prop) {
                                    /* eslint-disable no-useless-escape */
                                    var re = /(\-([a-z]){1})/g;
                                    if (prop === 'float') {
                                        prop = 'styleFloat';
                                    }

                                    if (re.test(prop)) {
                                        prop = prop.replace(re, function () {
                                            return arguments[2].toUpperCase();
                                        });
                                    }

                                    return el.currentStyle[prop] ? el.currentStyle[prop] : null;
                                }
                            };
                        }

                        return document.defaultView.getComputedStyle(el);
                    },

                    /**
                     * Set position CSS style.
                     * @param {HTMLElement} el target element
                     * @param {number} [x=0] left pixel value.
                     * @param {number} [y=0] top pixel value.
                     */
                    setPosition: function (el, x, y) {
                        x = util.isUndefined(x) ? 0 : x;
                        y = util.isUndefined(y) ? 0 : y;

                        el[posKey] = [x, y];

                        el.style.left = util.isNumber(x) ? (x + 'px') : x;
                        el.style.top = util.isNumber(y) ? (y + 'px') : y;
                    },

                    /**
                     * Set position CSS style with left, top, right, bottom
                     * @param {HTMLElement} el target element
                     * @param {object} ltrb object of left, top, right, bottom
                     * @param {number} [ltrb.left] left pixel value.
                     * @param {number} [ltrb.top] top pixel value.
                     * @param {number} [ltrb.right] right pixel value.
                     * @param {number} [ltrb.bottom] bottom pixel value.
                     */
                    setLTRB: function (el, ltrb) {
                        var props = ['left', 'top', 'right', 'bottom'];
                        var value;
                        props.forEach(function (prop) {
                            value = util.isUndefined(ltrb[prop]) ? '' : ltrb[prop];
                            el.style[prop] = util.isNumber(value) ? (value + 'px') : value;
                        });
                    },

                    /**
                     * Get position from HTML element.
                     * @param {HTMLElement} el target element
                     * @param {boolean} [clear=false] clear cache before calculating position.
                     * @returns {number[]} point
                     */
                    getPosition: function (el, clear) {
                        var left,
                            top,
                            bound;

                        if (clear) {
                            el[posKey] = null;
                        }

                        if (el[posKey]) {
                            return el[posKey];
                        }

                        left = 0;
                        top = 0;

                        if ((CSS_AUTO_REGEX.test(el.style.left) || CSS_AUTO_REGEX.test(el.style.top)) &&
                            'getBoundingClientRect' in el) {
                            // When the element's left or top is 'auto'
                            bound = el.getBoundingClientRect();

                            left = bound.left;
                            top = bound.top;
                        } else {
                            left = parseFloat(el.style.left || 0);
                            top = parseFloat(el.style.top || 0);
                        }

                        return [left, top];
                    },

                    /**
                     * Return element's size
                     * @param {HTMLElement} el target element
                     * @returns {number[]} width, height
                     */
                    getSize: function (el) {
                        var bound,
                            width = domutil.getStyle(el, 'width'),
                            height = domutil.getStyle(el, 'height');

                        if ((CSS_AUTO_REGEX.test(width) || CSS_AUTO_REGEX.test(height) ||
                            util.isNull(width) || util.isNull(height)) &&
                            'getBoundingClientRect' in el) {
                            bound = el.getBoundingClientRect();
                            width = bound.width || el.offsetWidth;
                            height = bound.height || el.offsetHeight;
                        } else {
                            width = parseFloat(width || 0);
                            height = parseFloat(height || 0);
                        }

                        return [width, height];
                    },

                    /**
                     * Fallback of getBoundingClientRect
                     * @param {HTMLElement} el - element
                     * @returns {object} rect
                     */
                    getBCRect: function (el) {
                        var rect = el.getBoundingClientRect();

                        rect = util.extend({
                            width: el.offsetWidth,
                            height: el.offsetHeight
                        }, rect);

                        return rect;
                    },

                    /**
                     * Check specific CSS style is available.
                     * @param {array} props property name to testing
                     * @returns {(string|boolean)} return true when property is available
                     * @example
                     * var props = ['transform', '-webkit-transform'];
                     * domutil.testProp(props);    // 'transform'
                     */
                    testProp: function (props) {
                        var style = document.documentElement.style,
                            i = 0,
                            len = props.length;

                        for (; i < len; i += 1) {
                            if (props[i] in style) {
                                return props[i];
                            }
                        }

                        return false;
                    },

                    /**
                     * Get form data
                     * @param {HTMLFormElement} formElement - form element to extract data
                     * @returns {object} form data
                     */
                    getFormData: function (formElement) {
                        var groupedByName = new Collection(function () {
                            return this.length;
                        }),
                            noDisabledFilter = function (el) {
                                return !el.disabled;
                            },
                            output = {};

                        groupedByName.add.apply(
                            groupedByName,
                            domutil.find('input', formElement, noDisabledFilter)
                                .concat(domutil.find('select', formElement, noDisabledFilter))
                                .concat(domutil.find('textarea', formElement, noDisabledFilter))
                        );

                        groupedByName = groupedByName.groupBy(function (el) {
                            return (el && el.getAttribute('name')) || '_other';
                        });

                        util.forEach(groupedByName, function (elements, name) {
                            if (name === '_other') {
                                return;
                            }

                            elements.each(function (el) {
                                var nodeName = el.nodeName.toLowerCase(),
                                    type = el.type,
                                    result = [];

                                if (type === 'radio') {
                                    result = [elements.find(function (el) {
                                        return el.checked;
                                    }).toArray().pop()];
                                } else if (type === 'checkbox') {
                                    result = elements.find(function (el) {
                                        return el.checked;
                                    }).toArray();
                                } else if (nodeName === 'select') {
                                    elements.find(function (el) {
                                        return !!el.childNodes.length;
                                    }).each(function (el) {
                                        result = result.concat(
                                            domutil.find('option', el, function (opt) {
                                                return opt.selected;
                                            })
                                        );
                                    });
                                } else {
                                    result = elements.find(function (el) {
                                        return el.value !== '';
                                    }).toArray();
                                }

                                result = util.map(result, function (el) {
                                    return el.value;
                                });

                                if (!result.length) {
                                    result = '';
                                } else if (result.length === 1) {
                                    result = result[0];
                                }

                                output[name] = result;
                            });
                        });

                        return output;
                    }
                };

                /* eslint-disable */
                var userSelectProperty = domutil.testProp([
                    'userSelect',
                    'WebkitUserSelect',
                    'OUserSelect',
                    'MozUserSelect',
                    'msUserSelect'
                ]);
                var supportSelectStart = 'onselectstart' in document;
                var prevSelectStyle = '';

                /* eslint-enable */

                /**
                 * Disable browser's text selection behaviors.
                 * @method
                 */
                domutil.disableTextSelection = (function () {
                    if (supportSelectStart) {
                        return function (dom, onSelectstartHandler) {
                            domevent.on(dom, 'selectstart', onSelectstartHandler || domevent.preventDefault);
                        };
                    }

                    return function (dom) {
                        var style = dom.style;
                        prevSelectStyle = style[userSelectProperty];
                        style[userSelectProperty] = 'none';
                    };
                })();

                /**
                 * Enable browser's text selection behaviors.
                 * @method
                 */
                domutil.enableTextSelection = (function () {
                    if (supportSelectStart) {
                        return function (dom, onSelectstartHandler) {
                            domevent.off(window, 'selectstart', onSelectstartHandler || domevent.preventDefault);
                        };
                    }

                    return function () {
                        document.documentElement.style[userSelectProperty] = prevSelectStyle;
                    };
                })();

                /**
                 * Disable browser's image drag behaviors.
                 */
                domutil.disableImageDrag = function () {
                    domevent.on(window, 'dragstart', domevent.preventDefault);
                };

                /**
                 * Enable browser's image drag behaviors.
                 */
                domutil.enableImageDrag = function () {
                    domevent.off(window, 'dragstart', domevent.preventDefault);
                };

                module.exports = domutil;


                /***/
            }),

/***/ "./src/js/common/dw.js":
/*!*****************************!*\
  !*** ./src/js/common/dw.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Wrapper module for easy calc date object
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var TZDate = __webpack_require__(/*! ./timezone */ "./src/js/common/timezone.js").Date;

                /**
                 * @constructor
                 * @param {TZDate} date to wrapping DW class
                 */
                function DW(date) {
                    if (!(this instanceof DW)) {
                        return new DW(date);
                    }

                    if (!(date instanceof TZDate)) {
                        date = new TZDate(date);
                    }

                    /**
                     * @type {TZDate}
                     */
                    this.d = date;
                }

                /**
                 * Return d property when supplied object is DW. else return itself
                 * @param {*} obj - object
                 * @returns {TZDate} date
                 */
                DW.prototype.safe = function (obj) {
                    if (obj.constructor === DW) {
                        return obj.d;
                    }

                    return obj;
                };

                /**
                 * Clone DW object
                 * @returns {DW} cloned dwrap object
                 */
                DW.prototype.clone = function () {
                    return new DW(new TZDate(this.d));
                };

                /**
                 * Add days
                 * @param {number} day - day to add
                 * @returns {DW} wrapper object
                 */
                DW.prototype.addDate = function (day) {
                    this.d.setDate(this.d.getDate() + day);

                    return this;
                };

                /**
                 * Add month.
                 * @param {number} m - month to add
                 * @returns {DW} wrapper object
                 */
                DW.prototype.addMonth = function (m) {
                    var currentMonth = this.d.getMonth();
                    var currentDay = this.d.getDate();
                    var leapYear = this._isLeapYear();
                    var targetMonth = currentMonth + m;
                    var clone = this.clone();
                    var targetDaysOfMonth = currentDay;

                    if (m) {
                        if (targetMonth === 1) {
                            targetDaysOfMonth = leapYear ? 29 : 28;
                        } else {
                            if (m > 0) {
                                clone.d.setMonth(targetMonth + 1, 0);
                            } else {
                                clone.d.setMonth(currentMonth, 0);
                            }
                            targetDaysOfMonth = clone.d.getDate();
                        }
                    }

                    this.d.setMonth(targetMonth, Math.min(currentDay, targetDaysOfMonth));

                    return this;
                };

                /**
                 * Is leap year or not
                 * @returns {boolean}
                 */
                DW.prototype._isLeapYear = function () {
                    var year = this.d.getFullYear();

                    return ((year % 4 === 0) && (year % 100 !== 0)) || !(year % 400);
                };

                /**
                 * Set hour, minutes, seconds, milliseconds
                 * @param {number} h - hours
                 * @param {number} m - minutes
                 * @param {number} s - seconds
                 * @param {number} ms - milliseconds
                 * @returns {DW} wrapper object
                 */
                DW.prototype.setHours = function (h, m, s, ms) {
                    this.d.setHours(h, m, s, ms);

                    return this;
                };

                /**
                 * Whether date is between supplied dates?
                 * @param {TZDate|DW} d1 - from date
                 * @param {TZDate|DW} d2 - to date
                 * @returns {boolean} is between?
                 */
                DW.prototype.isBetween = function (d1, d2) {
                    var safe = this.safe;

                    return safe(d1) <= this.d && this.d <= safe(d2);
                };

                module.exports = DW;


                /***/
            }),

/***/ "./src/js/common/floatingLayer.js":
/*!****************************************!*\
  !*** ./src/js/common/floatingLayer.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Floating layer module
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var config = __webpack_require__(/*! ../config */ "./src/js/config.js"),
                    domutil = __webpack_require__(/*! ../common/domutil */ "./src/js/common/domutil.js"),
                    View = __webpack_require__(/*! ../view/view */ "./src/js/view/view.js");

                /**
                 * @constructor
                 * @extends {View}
                 * @param {object} options - options for floating layer module
                 * @param {HTMLElement} container - parent continer for floating layer
                 */
                function FloatingLayer(options, container) {
                    var sibling = container[FloatingLayer.PROP_KEY],
                        layerContainer;

                    if (!sibling) {
                        sibling = container[FloatingLayer.PROP_KEY] = [];
                    }

                    sibling.push(this);

                    /**
                     * @type {Collection}
                     */
                    this.sibling = sibling;

                    /**
                     * @type {number}
                     */
                    this.zIndex = this.getLargestZIndex() || FloatingLayer.INIT_ZINDEX;

                    layerContainer = document.createElement('div');
                    layerContainer.style.display = 'none';
                    layerContainer.style.position = 'absolute';
                    domutil.addClass(layerContainer, config.classname('floating-layer'));
                    container.appendChild(layerContainer);

                    View.call(this, layerContainer);

                    /**
                     * @type {HTMLElement}
                     */
                    this.parent = container;
                }

                util.inherit(FloatingLayer, View);

                /**
                 * @const
                 */
                FloatingLayer.PROP_KEY = '__fe_floating_layer';

                /**
                 * @const
                 */
                FloatingLayer.INIT_ZINDEX = 999;

                /**
                 * Destroy floating layer instance. if there no instnace in parent container
                 *
                 * remove instance cache property in container element
                 */
                FloatingLayer.prototype.destroy = function () {
                    var parent = this.parent,
                        sibling = this.sibling,
                        i = 0, cnt = sibling.length;

                    for (; i < cnt; i += 1) {
                        if (sibling[i] === this) {
                            sibling.splice(i, 1);
                            break;
                        }
                    }

                    if (!sibling.length) {
                        try {
                            delete parent[FloatingLayer.PROP_KEY];
                        } catch (e) {
                            parent[FloatingLayer.PROP_KEY] = null;
                        }

                        parent.style.position = '';
                    }

                    domutil.remove(this.container);

                    this.sibling = null;

                    View.prototype.destroy.call(this);
                };

                /**
                 * @returns {boolean} whether layer is visible?
                 */
                FloatingLayer.prototype.isVisible = function () {
                    return this.container.style.display !== 'none';
                };

                /**
                 * Set layer position
                 * @param {number} x - x coordinate of layer
                 * @param {number} y - y coordinate of layer
                 */
                FloatingLayer.prototype.setPosition = function (x, y) {
                    domutil.setPosition(this.container, x, y);
                };

                /**
                 * Set layer left, top, right, bottom position
                 * @param {object} ltrb object of left, top, right, bottom
                 * @param {number} [ltrb.left] left pixel value.
                 * @param {number} [ltrb.top] top pixel value.
                 * @param {number} [ltrb.right] right pixel value.
                 * @param {number} [ltrb.bottom] bottom pixel value.
                 */
                FloatingLayer.prototype.setLTRB = function (ltrb) {
                    domutil.setLTRB(this.container, ltrb);
                };

                /**
                 * Set layer size
                 * @param {number|string} w - layer width
                 * @param {number|string} h - layer height
                 */
                FloatingLayer.prototype.setSize = function (w, h) {
                    var container = this.container;

                    w = util.isNumber(w) ? w + 'px' : w;
                    h = util.isNumber(h) ? h + 'px' : h;

                    container.style.width = w;
                    container.style.height = h;
                };

                /**
                 * Set layer content
                 * @param {string} html - html string
                 */
                FloatingLayer.prototype.setContent = function (html) {
                    this.container.innerHTML = html;
                };

                /**
                 * Get largest z-index from sibling layers
                 * @returns {number} largest z-index value
                 */
                FloatingLayer.prototype.getLargestZIndex = function () {
                    var zIndexes = util.map(this.sibling, function (layer) {
                        return layer.zIndex;
                    });

                    return Math.max.apply(null, zIndexes);
                };

                /**
                 * Set focus to layer
                 */
                FloatingLayer.prototype.focus = function () {
                    var zIndexForShow = this.getLargestZIndex() + 1;
                    this.container.style.zIndex = this.zIndex = zIndexForShow;
                };

                /**
                 * Show layer
                 */
                FloatingLayer.prototype.show = function () {
                    this.focus();
                    this.container.style.display = 'block';
                };

                /**
                 * Hide layer
                 */
                FloatingLayer.prototype.hide = function () {
                    this.container.style.display = 'none';
                };

                module.exports = FloatingLayer;


                /***/
            }),

/***/ "./src/js/common/model.js":
/*!********************************!*\
  !*** ./src/js/common/model.js ***!
  \********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Mixin module for models.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var TZDate = __webpack_require__(/*! ../common/timezone */ "./src/js/common/timezone.js").Date;
                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var spaceRx = /^\s*|\s*$/g,
                    model;

                var datetime = __webpack_require__(/*! ../common/datetime */ "./src/js/common/datetime.js");

                /**
                 * Mixin module for models.
                 * @mixin
                 */
                model = {
                    /**
                     * string trim
                     * @param {string} str string to trim
                     * @returns {string} trimed string
                     */
                    trim: function (str) {
                        return str.replace(spaceRx, '');
                    },
                    /**
                     * The collections of validator functions.
                     */
                    validators: {
                        /**
                         * check all of supplied fields(property) is not undefined or empty string.
                         * @param {object} instance model instance.
                         * @param {string[]} fields property names to check.
                         * @returns {boolean} return true when supplied fields are not undefined or empty string.
                         */
                        required: function (instance, fields) {
                            var valid = true,
                                isValid = function (obj) {
                                    return !util.isUndefined(obj) && model.trim(obj) !== '';
                                };

                            util.forEach(fields, function (fieldName) {
                                valid = isValid(instance[fieldName]);

                                return valid;
                            });

                            return valid;
                        },

                        /**
                         * check supplied fields are valid dates and valid date ranges.
                         * @param {object} instance model instance.
                         * @param {Date[]} fields array of date range (start, end)
                         * @returns {boolean} is valid date range?
                         */
                        dateRange: function (instance, fields) {
                            var start, end;

                            if (!util.isExisty(instance) || fields.length !== 2) {
                                return true;
                            }

                            start = new TZDate(instance[fields[0]]);
                            end = new TZDate(instance[fields[1]]);

                            if (!datetime.isValid(start) || !datetime.isValid(end)) {
                                return false;
                            }

                            if (datetime.compare(start, end) === 1) {
                                return false;
                            }

                            return true;
                        }
                    },

                    /**
                     * Check validate for model instance.
                     *
                     * The validate are works on a basis of constructor's "schema" property.
                     *
                     * You can customize validators add some method to model#validators.
                     * @returns {Boolean} model is valid?
                     */
                    isValid: function () {
                        var self = this,
                            schema = this.constructor.schema,
                            validators = model.validators,
                            validator,
                            valid = true;

                        if (!schema) {
                            return true;
                        }

                        util.forEach(schema, function (values, validatorName) {
                            validator = validators[validatorName];

                            if (validator) {
                                valid = validator(self, values);

                                return valid; // returning false can stop this loop
                            }

                            return true;
                        });

                        return valid;
                    },

                    /**
                     * Make data object form instance.
                     *
                     * It return object fill with all owned properties but exclude functions.
                     * @returns {object} Data object
                     */
                    parameterize: function () {
                        var param = {},
                            isFunc = util.isFunction;

                        util.forEach(this, function (value, propName) {
                            if (!isFunc(value)) {
                                param[propName] = value;
                            }
                        });

                        return param;
                    },

                    /**
                     * Mixin model module to supplied target.
                     * @param {Object} target The object of want to mixed.
                     * @example
                     * function Man() {
                     *     this.name = 'john';
                     * }
                     * model.mixin(Man.prototype);
                     */
                    mixin: function (target) {
                        util.forEach(model, function (method, name) {
                            if (name !== 'mixin') {
                                target[name] = method;
                            }
                        });
                    }
                };

                module.exports = model;


                /***/
            }),

/***/ "./src/js/common/point.js":
/*!********************************!*\
  !*** ./src/js/common/point.js ***!
  \********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview
                 * Class for represent two dimensional x, y coordinates.
                 *
                 * It suppliy a group of functions for manipulate coordinates.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 * @example
                 * var p = point(10, 10);
                 * var r1 = p.add(Point(5, 5));
                 * console.log(p.toString())    // "Point(10, 10)"
                 * console.log(r1.toString())    // "Point(15, 15)"
                 *
                 * var p2 = new Point(10, 10);
                 * p2._add(point(5, 5));
                 * console.log(p2.toString())   // "Point(15, 15)"
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");

                /**
                 * Class for represent two dimentional x, y coordinates.
                 * @constructor
                 * @param {number} x The number of X coordinates.
                 * @param {number} y The number of Y coordinates.
                 * @param {boolean} [useRound=false] set true when each coordinates are rounded before initialize.
                 * @example
                 * var t = new Point(13, 5);
                 */
                function Point(x, y, useRound) {
                    /**
                     * @type {number}
                     */
                    this.x = (useRound ? Math.round(x) : x);

                    /**
                     * @type {number}
                     */
                    this.y = (useRound ? Math.round(y) : y);
                }

                /**********
                 * static props
                 **********/

                /**
                 * Calculate point ratio.
                 * @param {Point} point The instance of point.
                 * @param {number} factor From factor
                 * @param {number} toFactor To factor
                 * @returns {Point} Point instance calculated.
                 */
                Point.getRatio = function (point, factor, toFactor) {
                    if (factor === toFactor) {
                        return point.clone();
                    }

                    return point.multiplyBy(toFactor)._divideBy(factor);
                };

                /**
                 * Syntatic sugar of new Point()
                 * @param {(Point|number|number[])} x X coordinate value.
                 * @param {(number|boolean)} [y] Y coordinate value or boolean value for coordinates round.
                 * @param {boolean} [useRound] Set true then round initial coordinate values.
                 * @returns {Point} The instance of point.
                 * @example
                 * var p1 = point(10, 15);
                 * var p2 = point([10, 15]);
                 */
                Point.n = function (x, y, useRound) {
                    if (x instanceof Point) {
                        return x;
                    }

                    if (util.isArray(x)) {
                        return new Point(x[0], x[1], y);
                    }

                    return new Point(x, y, useRound);
                };

                /**********
                 * prototype props
                 **********/

                /**
                 * Clone points
                 * @returns {Point} The point instance cloned.
                 */
                Point.prototype.clone = function () {
                    return new Point(this.x, this.y);
                };

                /**
                 * Add points.
                 * @param {Point} point The point instance to add.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype.add = function (point) {
                    return this.clone()._add(Point.n(point));
                };

                /**
                 * Add self points.
                 * @param {Point} point The point instance to add.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype._add = function (point) {
                    this.x += point.x;
                    this.y += point.y;

                    return this;
                };

                /**
                 * Subtract points.
                 * @param {Point} point The point instance to subtract.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype.subtract = function (point) {
                    return this.clone()._subtract(Point.n(point));
                };

                /**
                 * Subtract points. (manipulate self)
                 * @param {Point} point The point instance to subtract.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype._subtract = function (point) {
                    this.x -= point.x;
                    this.y -= point.y;

                    return this;
                };

                /**
                 * Divide points.
                 * @param {number} num The number to divide.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype.divideBy = function (num) {
                    return this.clone()._divideBy(num);
                };

                /**
                 * Divide points. (manipulate self)
                 * @param {number} num The number to divide.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype._divideBy = function (num) {
                    this.x /= num;
                    this.y /= num;

                    return this;
                };

                /**
                 * Multiply coordinates.
                 * @param {number} num Thyen number to multiply
                 * @returns {Point} Point calculated.
                 */
                Point.prototype.multiplyBy = function (num) {
                    return this.clone()._multiplyBy(num);
                };

                /**
                 * Multiply self coordinates.
                 * @param {number} num The number to multiply.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype._multiplyBy = function (num) {
                    this.x *= num;
                    this.y *= num;

                    return this;
                };

                /**
                 * Round coordinates.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype.round = function () {
                    return this.clone()._round();
                };

                /**
                 * Round self coordinates.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype._round = function () {
                    this.x = Math.round(this.x);
                    this.y = Math.round(this.y);

                    return this;
                };

                /**
                 * Reverse values between positive and negative.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype.reverse = function () {
                    return this.clone()._reverse();
                };

                /**
                 * Reverse self values between positive and negative.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype._reverse = function () {
                    this.x *= -1;
                    this.y *= -1;

                    return this;
                };

                /**
                 * Floor coordinates.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype.floor = function () {
                    return this.clone()._floor();
                };

                /**
                 * Floor self coordinates.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype._floor = function () {
                    this.x = Math.floor(this.x);
                    this.y = Math.floor(this.y);

                    return this;
                };

                /**
                 * Ceil coordinates.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype.ceil = function () {
                    return this.clone()._ceil();
                };

                /**
                 * Ceil self coodinates.
                 * @returns {Point} Point calculated.
                 */
                Point.prototype._ceil = function () {
                    this.x = Math.ceil(this.x);
                    this.y = Math.ceil(this.y);

                    return this;
                };

                /**
                 * Rotate point.
                 * @param {number} deg The number of rotate degree.
                 * @param {Point} [center=this] Center point instance to use rotate center. use own when not supplied.
                 * @param {number} [cos] Cosine values for rotate. it useful when multi point rotate.
                 * @param {number} [sin] Sine values for rotate. it useful when multi point rotate.
                 * @returns {Point} The point instance rotated.
                 */
                Point.prototype.rotate = function (deg, center, cos, sin) {
                    return this.clone()._rotate(deg, center, cos, sin);
                };

                /**
                 * Rotate self.
                 * @param {number} deg The number of rotate degree.
                 * @param {Point} [center=this] Center point instance to use rotate center. use own when not supplied.
                 * @param {number} [cos] Cosine values for rotate. it useful when multi point rotate.
                 * @param {number} [sin] Sine values for rotate. it useful when multi point rotate.
                 * @returns {Point} The point instance rotated.
                 */
                Point.prototype._rotate = function (deg, center, cos, sin) {
                    var rad = deg * (Math.PI / 180),
                        x,
                        y;

                    cos = cos || parseFloat(Math.cos(rad).toFixed(8));
                    sin = sin || parseFloat(Math.sin(rad).toFixed(8));

                    this._subtract(center);

                    x = this.x;
                    y = this.y;

                    this.x = (x * cos) - (y * sin);
                    this.y = (x * sin) + (y * cos);

                    this._add(center);

                    return this;
                };

                /**
                 * Calculate distance between two points.
                 * @param {Point} point Point instance.
                 * @returns {number} The number of distance between two points.
                 */
                Point.prototype.distanceTo = function (point) {
                    var x,
                        y;

                    point = Point.n(point);

                    x = point.x - this.x;
                    y = point.y - this.y;

                    return Math.sqrt((x * x) + (y * y));
                };

                /**
                 * Check point equals.
                 * @param {Point} point Point instance to compare
                 * @returns {boolean} equality
                 */
                Point.prototype.equals = function (point) {
                    point = Point.n(point);

                    return point.x === this.x && point.y === this.y;
                };

                /**
                 * Return formatted string. 'Point(x, y)'
                 * @returns {string} string
                 */
                Point.prototype.toString = function () {
                    return 'Point(' + this.x + ', ' + this.y + ')';
                };

                /**
                 * Return coodinates to array. [x, y]
                 * @returns {number[]} coordinate array.
                 */
                Point.prototype.toArray = function () {
                    return [this.x, this.y];
                };

                module.exports = Point;


                /***/
            }),

/***/ "./src/js/common/reqAnimFrame.js":
/*!***************************************!*\
  !*** ./src/js/common/reqAnimFrame.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
/* WEBPACK VAR INJECTION */(function (global) {/**
 * @fileoverview RequestAnimFrame
 * @author NHN FE Development Lab <dl_javascript@nhn.com>
 */


                    var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                    var requestFn,
                        cancelFn;

                    /**
                     * Get name with vendor prefix
                     * @param {string} name - name to prepend prefix
                     * @returns {string} vendor prefixed name
                     */
                    function getPrefixed(name) {
                        return global['webkit' + name] || global['moz' + name] || global['ms' + name];
                    }

                    requestFn = global.requestAnimationFrame ||
                        getPrefixed('RequestAnimationFrame') ||
                        function (fn, context) {
                            fn.call(context);
                        };

                    cancelFn = global.cancelAnimationFrame ||
                        getPrefixed('CancelAnimationFrame') ||
                        getPrefixed('CancelRequestAnimationFrame') ||
                        function () { };

                    /**
                     * @module module:reqAnimFrame
                     */

                    module.exports = {
                        /**
                         * Shim of requestAnimationFrame
                         * @param {function} fn callback function
                         * @param {*} context context for callback
                         * @returns {number} Unique id
                         */
                        requestAnimFrame: function (fn, context) {
                            return requestFn.call(global, util.bind(fn, context));
                        },

                        /**
                         * Shim of cancelAnimationFrame
                         * @param {number} id requestAnimationFrame id
                         */
                        cancelAnimFrame: function (id) {
                            if (!id) {
                                return;
                            }

                            cancelFn.call(global, id);
                        }
                    };

                    /* WEBPACK VAR INJECTION */
                }.call(this, __webpack_require__(/*! ./../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

                /***/
            }),

/***/ "./src/js/common/timezone.js":
/*!***********************************!*\
  !*** ./src/js/common/timezone.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview timezone
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");

                var MIN_TO_MS = 60 * 1000;
                var nativeOffsetMs = getTimezoneOffset();
                var customOffsetMs = nativeOffsetMs;
                var timezoneOffsetCallback = null;
                var setByTimezoneOption = false;

                var getterMethods = [
                    'getDate',
                    'getDay',
                    'getFullYear',
                    'getHours',
                    'getMilliseconds',
                    'getMinutes',
                    'getMonth',
                    'getSeconds'
                ];

                var setterMethods = [
                    'setDate',
                    'setFullYear',
                    'setHours',
                    'setMilliseconds',
                    'setMinutes',
                    'setMonth',
                    'setSeconds'
                ];

                /**
                 * Get the timezone offset by timestampe
                 * @param {number} timestamp - timestamp
                 * @returns {number} timezone offset
                 * @private
                 */
                function getTimezoneOffset(timestamp) {
                    timestamp = timestamp || Date.now();

                    return new Date(timestamp).getTimezoneOffset() * MIN_TO_MS;
                }

                /**
                 * Get the custome timezone offset by timestampe
                 * @param {number} timestamp - timestamp
                 * @returns {number} timezone offset
                 * @private
                 */
                function getCustomTimezoneOffset(timestamp) {
                    if (!setByTimezoneOption && timezoneOffsetCallback) {
                        return timezoneOffsetCallback(timestamp) * MIN_TO_MS;
                    }

                    return customOffsetMs;
                }

                /**
                 * Convert to local time
                 * @param {number} time - time
                 * @returns {number} local time
                 */
                function getLocalTime(time) {
                    var timezoneOffset = getTimezoneOffset(time);
                    var customTimezoneOffset = getCustomTimezoneOffset(time);
                    var timezoneOffsetDiff = customTimezoneOffset ? 0 : nativeOffsetMs - timezoneOffset;
                    var localTime = time - customTimezoneOffset + timezoneOffset + timezoneOffsetDiff;

                    return localTime;
                }

                /**
                 * Create a Date instance with multiple arguments
                 * @param {Array} args - arguments
                 * @returns {Date}
                 * @private
                 */
                function createDateWithMultipleArgs(args) {
                    var utc = Date.UTC.apply(null, args);

                    return new Date(utc + getTimezoneOffset(utc));
                }

                /**
                 * To convert a Date to TZDate as it is.
                 * @param {TZDate|number|null} arg - date
                 * @returns {Date}
                 */
                function createDateWithUTCTime(arg) {
                    var time;

                    if (arg instanceof TZDate) {
                        time = arg.getUTCTime();
                    } else if ((typeof arg) === 'number') {
                        time = arg;
                    } else if (arg === null) {
                        time = 0;
                    } else {
                        throw new Error('Invalid Type');
                    }

                    return new Date(time);
                }

                /**
                 * Convert time to local time. Those times are only from API and not from inner source code.
                 * @param {Date|string} arg - date
                 * @returns {Date}
                 */
                function createDateAsLocalTime(arg) {
                    var time;

                    if (arg instanceof Date) {
                        time = arg.getTime();
                    } else if ((typeof arg) === 'string') {
                        time = Date.parse(arg);
                    } else {
                        throw new Error('Invalid Type');
                    }

                    time = getLocalTime(time);

                    return new Date(time);
                }

                /**
                 * is it for local time? These type can be used from Calendar API.
                 * @param {Date|string} arg - date
                 * @returns {boolean}
                 */
                function useLocalTimeConverter(arg) {
                    return arg instanceof Date || (typeof arg) === 'string';
                }

                /**
                 * Timezone Date Class
                 * @param {number|TZDate|Date|string} date - date to be converted
                 * @constructor
                 */
                function TZDate(date) {
                    var nativeDate;

                    if (util.isUndefined(date)) {
                        date = Date.now();
                    }

                    if (arguments.length > 1) {
                        nativeDate = createDateWithMultipleArgs(arguments);
                    } else if (useLocalTimeConverter(date)) {
                        nativeDate = createDateAsLocalTime(date);
                    } else {
                        nativeDate = createDateWithUTCTime(date);
                    }

                    this._date = nativeDate;
                }

                /**
                 * Get milliseconds which is converted by timezone
                 * @returns {number} milliseconds
                 */
                TZDate.prototype.getTime = function () {
                    var time = this._date.getTime();

                    return time + getCustomTimezoneOffset(time) - getTimezoneOffset(time);
                };

                /**
                 * Get UTC milliseconds
                 * @returns {number} milliseconds
                 */
                TZDate.prototype.getUTCTime = function () {
                    return this._date.getTime();
                };

                /**
                 * toUTCString
                 * @returns {string}
                 */
                TZDate.prototype.toUTCString = function () {
                    return this._date.toUTCString();
                };

                /**
                 * to Date
                 * @returns {Date}
                 */
                TZDate.prototype.toDate = function () {
                    return this._date;
                };

                TZDate.prototype.valueOf = function () {
                    return this.getTime();
                };

                TZDate.prototype.addDate = function (day) {
                    this.setDate(this.getDate() + day);

                    return this;
                };

                TZDate.prototype.addMinutes = function (minutes) {
                    this.setMinutes(this.getMinutes() + minutes);

                    return this;
                };

                TZDate.prototype.addMilliseconds = function (milliseconds) {
                    this.setMilliseconds(this.getMilliseconds() + milliseconds);

                    return this;
                };

                /* eslint-disable max-params*/
                TZDate.prototype.setWithRaw = function (y, M, d, h, m, s, ms) {
                    this.setFullYear(y, M, d);
                    this.setHours(h, m, s, ms);

                    return this;
                };

                /**
                 * @returns {TZDate} local time
                 */
                TZDate.prototype.toLocalTime = function () {
                    var time = this.getTime();
                    var utcTime = this.getUTCTime();
                    var diff = time - utcTime;

                    return new TZDate(utcTime - diff);
                };

                getterMethods.forEach(function (methodName) {
                    TZDate.prototype[methodName] = function () {
                        return this._date[methodName].apply(this._date, arguments);
                    };
                });

                setterMethods.forEach(function (methodName) {
                    TZDate.prototype[methodName] = function () {
                        this._date[methodName].apply(this._date, arguments);

                        return this.getTime();
                    };
                });

                module.exports = {
                    Date: TZDate,

                    /**
                     * Set offset
                     * @param {number} offset - timezone offset based on minutes
                     */
                    setOffset: function (offset) {
                        customOffsetMs = offset * MIN_TO_MS;
                    },

                    /**
                     * Set offset
                     * @param {number} offset - timezone offset based on minutes
                     */
                    setOffsetByTimezoneOption: function (offset) {
                        this.setOffset(-offset);
                        setByTimezoneOption = true;
                    },

                    /**
                     * Get offset in case of `setByTimezoneOption`. Or return 0.
                     * @returns {number} timezone offset offset minutes
                     */
                    getOffset: function () {
                        if (setByTimezoneOption) {
                            return customOffsetMs / MIN_TO_MS;
                        }

                        return 0;
                    },

                    /**
                     * Set a callback function to get timezone offset by timestamp
                     * @param {function} callback - callback function
                     */
                    setOffsetCallback: function (callback) {
                        timezoneOffsetCallback = callback;
                    },

                    /**
                     * (Use this method only for testing)
                     * Reset system timezone and custom timezone
                     */
                    restoreOffset: function () {
                        customOffsetMs = getTimezoneOffset();
                    }
                };


                /***/
            }),

/***/ "./src/js/common/vlayout.js":
/*!**********************************!*\
  !*** ./src/js/common/vlayout.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Layout module that supplied split height, resize height features.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var config = __webpack_require__(/*! ../config */ "./src/js/config.js"),
                    common = __webpack_require__(/*! ./common */ "./src/js/common/common.js"),
                    domutil = __webpack_require__(/*! ./domutil */ "./src/js/common/domutil.js"),
                    domevent = __webpack_require__(/*! ./domevent */ "./src/js/common/domevent.js"),
                    View = __webpack_require__(/*! ../view/view */ "./src/js/view/view.js"),
                    VPanel = __webpack_require__(/*! ./vpanel */ "./src/js/common/vpanel.js"),
                    Drag = __webpack_require__(/*! ../handler/drag */ "./src/js/handler/drag.js");

                var mAbs = Math.abs;

                /**
                 * @typedef PanelOptions
                 * @type {object}
                 * @property {number} [minHeight=0] - minimum height of panel
                 * @property {number} [height=0] - current panel height
                 * @property {boolean} [splitter=false] - is this panel uses splitter?
                 * @property {boolean} [autoHeight=false] - is this panel uses remain height of container?
                 * @property {string} [className=''] - className string for add created element
                 */

                /**
                 * @constructor
                 * @extends {View}
                 * @param {object} options - options for VLayout module
                 *  @param {PanelOptions[]} [options.panels] - panels to add layout when initialize
                 *  @param {number[]} [options.panelHeights] - panel height list
                 * @param {HTMLElement} container - container element
                 * @param {Theme} theme - theme instance
                 */
                function VLayout(options, container, theme) {
                    var opt, tempHeights;

                    if (!(this instanceof VLayout)) {
                        return new VLayout(options, container);
                    }

                    View.call(this, container);

                    domutil.addClass(container, config.classname('vlayout-container'));

                    /**
                     * @type {object}
                     */
                    opt = this.options = util.extend({
                        panels: [],
                        panelHeights: []
                    }, options);

                    /**
                     * @type {VPanel[]}
                     */
                    this.panels = [];

                    /**
                     * @type {Drag}
                     */
                    this._drag = new Drag({
                        distance: 10,
                        exclude: function (target) {
                            return !domutil.hasClass(target, config.classname('splitter'));
                        }
                    }, container);

                    this._drag.on({
                        dragStart: this._onDragStart,
                        drag: this._onDrag,
                        dragEnd: this._onDragEnd
                    }, this);

                    /**
                     * @type {object}
                     */
                    this._dragData = null;

                    /**
                     * @type {Theme}
                     */
                    this.theme = theme;

                    if (opt.panels.length) {
                        if (opt.panelHeights.length) {
                            tempHeights = opt.panelHeights.slice();
                            util.forEach(opt.panels, function (panelOpt) {
                                if (!panelOpt.isSplitter && !panelOpt.autoHeight) {
                                    panelOpt.height = tempHeights.shift();
                                }
                            });
                        }

                        this.addPanels(opt.panels, this.container);
                    }

                    this.refresh();
                }

                util.inherit(VLayout, View);

                /**
                 * Get current panels height in layout
                 * @returns {number[]} height of panels with `autoHeight` false
                 */
                VLayout.prototype.getLayoutData = function () {
                    var heightList = [];

                    util.forEach(this.panels, function (panel) {
                        if (panel.isSplitter() || panel.options.autoHeight) {
                            return;
                        }

                        heightList.push(panel.getHeight());
                    });

                    return heightList;
                };

                /**
                 * Set panels height in layout
                 * @param {number[]} heightList of panels with `autoHeight` false
                 */
                VLayout.prototype.setLayoutData = function (heightList) {
                    if (!heightList.length) {
                        return;
                    }

                    util.forEach(this.panels, function (panel) {
                        if (panel.isSplitter() || panel.options.autoHeight) {
                            return;
                        }

                        panel.setHeight(null, heightList.shift());
                    });

                    this.refresh();
                };

                /**
                 * Get next panel instance by specific panel
                 * @param {VPanel} panel - panel instance
                 * @returns {VPanel} next panel
                 */
                VLayout.prototype.nextPanel = function (panel) {
                    return this.panels[panel.index + 1];
                };

                /**
                 * Get previous panel instance by specific panel
                 * @param {VPanel} panel - panel instance
                 * @returns {VPanel} previous panel
                 */
                VLayout.prototype.prevPanel = function (panel) {
                    return this.panels[panel.index - 1];
                };

                /**
                 * Initialize resizing guide element
                 * @param {HTMLElement} element - element to use guide element after cloned
                 * @param {number} top - top pixel value for guide element
                 * @returns {HTMLElement} cloned element == guide element
                 */
                VLayout.prototype._initializeGuideElement = function (element, top) {
                    var cloned = element.cloneNode(true);

                    domutil.addClass(cloned, config.classname('splitter-guide'));
                    this._refreshGuideElement(cloned, top);
                    this.container.appendChild(cloned);

                    return cloned;
                };

                /**
                 * Refresh guide element position
                 * @param {HTMLElement} element - guide element
                 * @param {number} top - top pixel value for guide element
                 */
                VLayout.prototype._refreshGuideElement = function (element, top) {
                    element.style.top = top + 'px';
                };

                /**
                 * Clear guide element position
                 * @param {HTMLElement} element - guide element
                 */
                VLayout.prototype._clearGuideElement = function (element) {
                    domutil.remove(element);
                };

                /**
                 * Resize overall panels size
                 * @param {VPanel} splPanel - splitter panel instance
                 * @param {number} startY - dragstart Y position
                 * @param {number} mouseY - dragend Y position
                 */
                VLayout.prototype._resize = function (splPanel, startY, mouseY) {
                    var diffY = startY - mouseY,
                        resizedHeight = mAbs(diffY),
                        resizeMap = [],
                        toDown = mouseY > startY,
                        backwardMethod = toDown ? 'prevPanel' : 'nextPanel',
                        forwardMethod = toDown ? 'nextPanel' : 'prevPanel',
                        cursor, resizeInfo;

                    cursor = this[backwardMethod](splPanel);
                    resizeInfo = cursor.getResizeInfoByGrowth(resizedHeight);
                    resizeMap.push([cursor, resizeInfo[0]]);

                    for (cursor = this[forwardMethod](cursor);
                        util.isExisty(cursor);
                        cursor = this[forwardMethod](cursor)) {
                        if (cursor.isSplitter()) {
                            continue;
                        }

                        resizeInfo = cursor.getResizeInfoByGrowth(-resizedHeight);
                        resizeMap.push([cursor, resizeInfo[0]]);
                        resizedHeight -= resizeInfo[1];
                    }

                    util.forEach(resizeMap, function (pair) {
                        pair[0].setHeight(null, pair[1], true);
                        pair[0].fire('resize');
                    });
                };

                /**
                 * Get summation of splitter and panel's minimum height upper and below of supplied splitter
                 * @param {VPanel} splPanel - splitter panel instance
                 * @returns {number[]} upper and below splitter's height and panel minimum height summation.
                 */
                VLayout.prototype._getMouseYAdditionalLimit = function (splPanel) {
                    var upper = 0,
                        below = 0,
                        cursor,
                        func = function (panel) {
                            if (panel.isSplitter()) {
                                return panel.getHeight();
                            }

                            return panel.options.minHeight;
                        };

                    for (cursor = this.prevPanel(splPanel);
                        util.isExisty(cursor);
                        cursor = this.prevPanel(cursor)) {
                        upper += func(cursor);
                    }

                    for (cursor = this.nextPanel(splPanel);
                        util.isExisty(cursor);
                        cursor = this.nextPanel(cursor)) {
                        below += func(cursor);
                    }

                    return [upper, below];
                };

                /**********
                 * Drag Handlers
                 **********/

                /**
                 * Drag start schedule handler
                 * @param {object} e - drag start schedule data
                 */
                VLayout.prototype._onDragStart = function (e) {
                    var oEvent = e.originEvent,
                        target = e.target,
                        splIndex = domutil.getData(target, 'panelIndex'),
                        splPanel = this.panels[splIndex],
                        splHeight = splPanel.getHeight(),
                        splOffsetY = domevent.getMousePosition(oEvent, target)[1],
                        mouseY = domevent.getMousePosition(oEvent, this.container)[1],
                        guideElement = this._initializeGuideElement(target, mouseY);

                    splPanel.addClass(config.classname('splitter-focused'));

                    this._dragData = {
                        splPanel: splPanel,
                        splOffsetY: splOffsetY,
                        guideElement: guideElement,
                        startY: mouseY - splOffsetY,
                        minY: 0,
                        maxY: this.getViewBound().height - splHeight
                    };

                    if (!util.browser.msie) {
                        domutil.addClass(document.body, config.classname('resizing'));
                    }
                };

                /**
                 * Drag schedule handler
                 * @param {object} e - drag schedule data
                 */
                VLayout.prototype._onDrag = function (e) {
                    var dragData = this._dragData,
                        mouseY = domevent.getMousePosition(e.originEvent, this.container)[1];

                    mouseY = common.limit(mouseY - dragData.splOffsetY, [dragData.minY], [dragData.maxY]);

                    this._refreshGuideElement(dragData.guideElement, mouseY);
                };

                /**
                 * Drag end schedule handler
                 * @fires VLayout#resize
                 * @param {object} e - dragend schedule data
                 */
                VLayout.prototype._onDragEnd = function (e) {
                    var dragData = this._dragData,
                        asideMinMax = this._getMouseYAdditionalLimit(dragData.splPanel),
                        mouseY = domevent.getMousePosition(e.originEvent, this.container)[1];

                    // mouseY value can't exceed summation of splitter height and panel's minimum height based on target splitter.
                    mouseY = common.limit(
                        mouseY - dragData.splOffsetY,
                        [dragData.minY + asideMinMax[0]],
                        [dragData.maxY - asideMinMax[1]]
                    );

                    this._resize(dragData.splPanel, dragData.startY, mouseY);

                    /**
                     * @event VLayout#resize
                     * @type {object}
                     * @property {number[]} layoutData - layout data after resized
                     */
                    this.fire('resize', {
                        layoutData: this.getLayoutData()
                    });

                    this._dragData = null;
                    this._clearGuideElement(dragData.guideElement);
                    dragData.splPanel.removeClass(config.classname('splitter-focused'));
                    domutil.removeClass(document.body, config.classname('resizing'));
                };

                /**********
                 * Methods
                 **********/

                /**
                 * refresh each panels
                 */
                VLayout.prototype.refresh = function () {
                    var panelToFillHeight = [];
                    var layoutHeight = this.getViewBound().height;
                    var usedHeight = 0;
                    var remainHeight;

                    if (!layoutHeight) {
                        return;
                    }

                    util.forEach(this.panels, function (panel) {
                        if (panel.options.autoHeight) {
                            panelToFillHeight.push(panel);
                        } else {
                            usedHeight += panel.getHeight();
                        }
                    });

                    remainHeight = (layoutHeight - usedHeight) / panelToFillHeight.length;

                    util.forEach(panelToFillHeight, function (panel) {
                        panel.setHeight(null, remainHeight);
                    });
                };

                /**
                 * add panel
                 * @param {PanelOptions} options - options for panel
                 * @param {container} [container] - container element
                 */
                VLayout.prototype.addPanel = function (options, container) {
                    var element = document.createElement('div'),
                        panels = this.panels,
                        index = panels.length;

                    options = util.extend({
                        index: index
                    }, options);

                    panels.push(new VPanel(options, element, this.theme));

                    container.appendChild(element);
                };

                /**
                 * Add multiple panel
                 * @param {PanelOptions[]} options - panel options list
                 * @param {HTMLElement} container - container element
                 */
                VLayout.prototype.addPanels = function (options, container) {
                    var self = this,
                        frag = document.createDocumentFragment();

                    util.forEach(options, function (option) {
                        self.addPanel(option, frag);
                    });

                    container.appendChild(frag);
                };

                /**
                 * Get a panel by name
                 * @param {string} name - panel's name
                 * @returns {VPanel}
                 */
                VLayout.prototype.getPanelByName = function (name) {
                    var found;
                    util.forEach(this.panels, function (panel) {
                        if (panel.name === name) {
                            found = panel;
                        }
                    });

                    return found;
                };

                module.exports = VLayout;


                /***/
            }),

/***/ "./src/js/common/vpanel.js":
/*!*********************************!*\
  !*** ./src/js/common/vpanel.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Panel class for VLayout module
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var config = __webpack_require__(/*! ../config */ "./src/js/config.js"),
                    common = __webpack_require__(/*! ./common */ "./src/js/common/common.js"),
                    domutil = __webpack_require__(/*! ./domutil */ "./src/js/common/domutil.js"),
                    View = __webpack_require__(/*! ../view/view */ "./src/js/view/view.js");

                /**
                 * @constructor
                 * @extends {View}
                 * @param {object} options - options for VPanel
                 *  @param {number} options.index - index of panel in vlayout
                 *  @param {number} [options.minHeight=0] - minimum height of panel
                 *  @param {number} [options.height] - initial height of panel
                 *  @param {boolean} [options.isSplitter=false] - set true then this panel works splitter
                 *  @param {boolean} [options.autoHeight=false] - set true then this panel use remain height after other panel resized.
                 *  @param {string} [options.className] - additional class name to add element
                 * @param {HTMLElement} container - container element
                 * @param {Theme} theme - theme instance
                 */
                function VPanel(options, container, theme) {
                    View.call(this, container);

                    /**
                     * @type {object}
                     */
                    this.options = util.extend({
                        index: 0,
                        name: '0',
                        minHeight: 0,
                        maxHeight: null,
                        height: null,
                        isSplitter: false,
                        autoHeight: false,
                        className: ''
                    }, options);

                    /**
                     * @type {number}
                     */
                    this.index = this.options.index;

                    /**
                     * @type {string}
                     */
                    this.name = this.options.name || String(this.index);

                    this.isHeightForcedSet = false;

                    /**
                     * @type {Theme}
                     */
                    this.theme = theme;

                    this._initPanel(this.options, container);
                }

                util.inherit(VPanel, View);

                /**
                 * whether this panel is splitter?
                 * @returns {boolean} panel is splitter?
                 */
                VPanel.prototype.isSplitter = function () {
                    return this.options.isSplitter;
                };

                /**
                 * set max height of panel
                 * @param {number} maxHeight - maxHeight
                 */
                VPanel.prototype.setMaxHeight = function (maxHeight) {
                    if (!this.options.autoHeight) {
                        this.options.maxHeight = maxHeight;
                    }
                };

                /**
                 * set forced height flag
                 * @param {boolean} set - enable or not
                 */
                VPanel.prototype.setHeightForcedSet = function (set) {
                    this.isHeightForcedSet = set;
                };

                /**
                 * get forced height flag
                 * @returns {boolean} set - enable or not
                 */
                VPanel.prototype.getHeightForcedSet = function () {
                    return this.isHeightForcedSet;
                };

                /**
                 * set height of html element
                 * @param {HTMLElement} [container] - container element
                 * @param {number} newHeight - height
                 * @param {boolean} force - whether ignore max-length
                 */
                VPanel.prototype.setHeight = function (container, newHeight, force) {
                    var maxHeight = this.options.maxHeight;
                    var minHeight = this.options.minHeight;
                    var autoHeight = this.options.autoHeight;
                    container = container || this.container;

                    // 한번 force 호출이 일어난 이후에는 force 호출만 허용한다
                    if (!force && this.isHeightForcedSet && !autoHeight) {
                        return;
                    }

                    if (force) {
                        this.isHeightForcedSet = true;
                    } else if (maxHeight) {
                        newHeight = Math.min(newHeight, maxHeight);
                    }
                    newHeight = Math.max(minHeight, newHeight);

                    container.style.height = newHeight + 'px';
                };

                /**
                 * Calculate new height of panel and remains by supplied height growth
                 * @param {number} growth - growth value
                 * @returns {number[]} newHeight, remainHeight
                 */
                VPanel.prototype.getResizeInfoByGrowth = function (growth) {
                    var height = this.getHeight(),
                        newHeight = height + growth,
                        resizeTo = Math.max(0, newHeight, this.options.minHeight);

                    return [resizeTo, height - resizeTo];
                };

                /**
                 * get outer height of panel element
                 * @returns {number} outer height of panel element
                 */
                VPanel.prototype.getHeight = function () {
                    return domutil.getSize(this.container)[1];
                };

                /**
                 * add design class to panel element
                 * @param {string} className - classname string
                 */
                VPanel.prototype.addClass = function (className) {
                    domutil.addClass(this.container, className);
                };

                /**
                 * remove design class to panel element
                 * @param {string} className - classname string
                 */
                VPanel.prototype.removeClass = function (className) {
                    domutil.removeClass(this.container, className);
                };

                /**
                 * initialize panel element
                 * @param {PanelOptions} options - options for panel
                 * @param {HTMLDivElement} container - panel element
                 */
                VPanel.prototype._initPanel = function (options, container) {
                    var height;

                    domutil.setData(container, 'panelIndex', options.index);

                    if (options.isSplitter) {
                        domutil.addClass(container, config.classname('splitter'));
                        this.applyTheme();

                        return;
                    }

                    if (options.className) {
                        domutil.addClass(container, options.className);
                    }

                    if (options.autoHeight) {
                        domutil.setData(container, 'autoHeight', true);
                    } else {
                        height = common.limit(options.height || 0,
                            [options.minHeight],
                            [options.maxHeight || options.height]
                        );

                        options.height = height;
                        this.setHeight(container, height);
                    }
                };

                VPanel.prototype.applyTheme = function () {
                    var style = this.container.style;
                    var theme = this.theme;

                    if (!theme) {
                        return;
                    }

                    style.borderTop = theme.week.vpanelSplitter.border || theme.common.border;
                    style.borderBottom = theme.week.vpanelSplitter.border || theme.common.border;
                    style.height = theme.week.vpanelSplitter.height;
                };

                module.exports = VPanel;


                /***/
            }),

/***/ "./src/js/config.js":
/*!**************************!*\
  !*** ./src/js/config.js ***!
  \**************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Global configuration object module. This @echo syntax will change preprocess context. See gulpfile.js
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var cssPrefix = 'tui-full-calendar-',
                    alldayGetViewID = new RegExp('^' + cssPrefix + 'weekday[\\s]tui-view-(\\d+)'),
                    alldayCheckPermission = new RegExp('^' + cssPrefix + 'schedule(-title)?$'),
                    timeGetViewID = new RegExp('^' + cssPrefix + 'time-date[\\s]tui-view-(\\d+)');

                var config = {
                    throwError: function (msg) {
                        throw new Error(msg);
                    },

                    cssPrefix: cssPrefix,

                    classname: function (str) {
                        str = str || '';

                        if (str.charAt(0) === '.') {
                            return '.' + config.cssPrefix + str.slice(1);
                        }

                        return config.cssPrefix + str;
                    },

                    allday: {
                        getViewIDRegExp: alldayGetViewID,
                        checkCondRegExp: alldayCheckPermission
                    },

                    daygrid: {
                        getViewIDRegExp: alldayGetViewID,
                        checkCondRegExp: alldayCheckPermission
                    },

                    time: {
                        getViewIDRegExp: timeGetViewID
                    }
                };

                module.exports = config;


                /***/
            }),

/***/ "./src/js/controller/base.js":
/*!***********************************!*\
  !*** ./src/js/controller/base.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Base calendar controller
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var Schedule = __webpack_require__(/*! ../model/schedule */ "./src/js/model/schedule.js");
                var ScheduleViewModel = __webpack_require__(/*! ../model/viewModel/scheduleViewModel */ "./src/js/model/viewModel/scheduleViewModel.js");
                var datetime = __webpack_require__(/*! ../common/datetime */ "./src/js/common/datetime.js");
                var common = __webpack_require__(/*! ../common/common */ "./src/js/common/common.js");
                var Theme = __webpack_require__(/*! ../theme/theme */ "./src/js/theme/theme.js");

                /**
                 * @constructor
                 * @param {object} options - options for base controller
                 * @param {function} [options.groupFunc] - function for group each models {@see Collection#groupBy}
                 * @param {themeConfig} [options.theme] - theme object
                 * @mixes util.CustomEvents
                 */
                function Base(options) {
                    options = options || {};

                    /**
                     * function for group each schedule models.
                     * @type {function}
                     * @param {ScheduleViewModel} viewModel - view model instance
                     * @returns {string} group key
                     */
                    this.groupFunc = options.groupFunc || function (viewModel) {
                        var model = viewModel.model;

                        if (viewModel.model.isAllDay) {
                            return 'allday';
                        }

                        if (model.category === 'time' && (model.end - model.start > datetime.MILLISECONDS_PER_DAY)) {
                            return 'allday';
                        }

                        return model.category;
                    };

                    /**
                     * schedules collection.
                     * @type {Collection}
                     */
                    this.schedules = common.createScheduleCollection();

                    /**
                     * Matrix for multidate schedules.
                     * @type {object.<string, array>}
                     */
                    this.dateMatrix = {};

                    /**
                     * Theme
                     * @type {Theme}
                     */
                    this.theme = new Theme(options.theme);

                    /**
                     * Calendar list
                     * @type {Array.<Calendar>}
                     */
                    this.calendars = [];
                }

                /**
                 * Calculate contain dates in schedule.
                 * @private
                 * @param {Schedule} schedule The instance of schedule.
                 * @returns {array} contain dates.
                 */
                Base.prototype._getContainDatesInSchedule = function (schedule) {
                    var scheduleStart = schedule.getStarts();
                    var scheduleEnd = schedule.getEnds();
                    var start = datetime.start(scheduleStart);
                    var equalStartEnd = datetime.compare(scheduleStart, scheduleEnd) === 0;
                    var endDate = equalStartEnd ? scheduleEnd : datetime.convertStartDayToLastDay(scheduleEnd);
                    var end = datetime.end(endDate);
                    var range = datetime.range(
                        start,
                        end,
                        datetime.MILLISECONDS_PER_DAY
                    );

                    return range;
                };

                /****************
                 * CRUD Schedule
                 ****************/

                /**
                 * Create a schedule instance from raw data.
                 * @emits Base#beforeCreateSchedule
                 * @emits Base#createdSchedule
                 * @param {object} options Data object to create schedule.
                 * @param {boolean} silent - set true then don't fire events.
                 * @returns {Schedule} The instance of Schedule that created.
                 */
                Base.prototype.createSchedule = function (options, silent) {
                    var schedule,
                        scheduleData = {
                            data: options
                        };

                    /**
                     * @event Base#beforeCreateSchedule
                     * @type {Calendar~Schedule[]}
                     */
                    if (!this.invoke('beforeCreateSchedule', scheduleData)) {
                        return null;
                    }

                    schedule = this.addSchedule(Schedule.create(options));

                    if (!silent) {
                        /**
                         * @event Base#createdSchedule
                         * @type {Schedule}
                         */
                        this.fire('createdSchedule', schedule);
                    }

                    return schedule;
                };

                /**
                 * @emits Base#beforeCreateSchedule
                 * @emits Base#createdSchedule
                 * @param {Calendar~Schedule[]} dataList - dataObject list to create schedule.
                 * @param {boolean} [silent=false] - set true then don't fire events.
                 * @returns {Schedule[]} The instance list of Schedule that created.
                 */
                Base.prototype.createSchedules = function (dataList, silent) {
                    var self = this;

                    return util.map(dataList, function (data) {
                        return self.createSchedule(data, silent);
                    });
                };

                /**
                 * Update a schedule.
                 * @emits Base#updateSchedule
                 * @param {Schedule} schedule - schedule instance to update
                 * @param {object} options updated object data.
                 * @returns {Schedule} updated schedule instance
                 */
                // eslint-disable-next-line complexity
                Base.prototype.updateSchedule = function (schedule, options) {
                    var start = options.start || schedule.start;
                    var end = options.end || schedule.end;

                    options = options || {};

                    if (['milestone', 'task', 'allday', 'time'].indexOf(options.category) > -1) {
                        schedule.set('category', options.category);
                    }

                    if (options.category === 'allday') {
                        options.isAllDay = true;
                    }

                    if (!util.isUndefined(options.isAllDay)) {
                        schedule.set('isAllDay', options.isAllDay);
                    }

                    if (!util.isUndefined(options.calendarId)) {
                        schedule.set('calendarId', options.calendarId);
                    }

                    if (options.title) {
                        schedule.set('title', options.title);
                    }

                    if (options.body) {
                        schedule.set('body', options.body);
                    }

                    if (options.start || options.end) {
                        if (schedule.isAllDay) {
                            schedule.setAllDayPeriod(start, end);
                        } else {
                            schedule.setTimePeriod(start, end);
                        }
                    }

                    if (options.color) {
                        schedule.set('color', options.color);
                    }

                    if (options.bgColor) {
                        schedule.set('bgColor', options.bgColor);
                    }

                    if (options.borderColor) {
                        schedule.set('borderColor', options.borderColor);
                    }

                    if (options.origin) {
                        schedule.set('origin', options.origin);
                    }

                    if (!util.isUndefined(options.isPending)) {
                        schedule.set('isPending', options.isPending);
                    }

                    if (!util.isUndefined(options.isFocused)) {
                        schedule.set('isFocused', options.isFocused);
                    }

                    if (options.location) {
                        schedule.set('location', options.location);
                    }

                    if (options.state) {
                        schedule.set('state', options.state);
                    }

                    if (options.raw) {
                        schedule.set('raw', options.raw);
                    }

                    this._removeFromMatrix(schedule);
                    this._addToMatrix(schedule);

                    /**
                     * @event Base#updateSchedule
                     */
                    this.fire('updateSchedule');

                    return schedule;
                };

                /**
                 * Delete schedule instance from controller.
                 * @param {Schedule} schedule - schedule instance to delete
                 * @returns {Schedule} deleted model instance.
                 */
                Base.prototype.deleteSchedule = function (schedule) {
                    this._removeFromMatrix(schedule);
                    this.schedules.remove(schedule);

                    return schedule;
                };

                /**
                 * Set date matrix to supplied schedule instance.
                 * @param {Schedule} schedule - instance of schedule.
                 */
                Base.prototype._addToMatrix = function (schedule) {
                    var ownMatrix = this.dateMatrix;
                    var containDates = this._getContainDatesInSchedule(schedule);

                    util.forEach(containDates, function (date) {
                        var ymd = datetime.format(date, 'YYYYMMDD'),
                            matrix = ownMatrix[ymd] = ownMatrix[ymd] || [];

                        matrix.push(util.stamp(schedule));
                    });
                };

                /**
                 * Remove schedule's id from matrix.
                 * @param {Schedule} schedule - instance of schedule
                 */
                Base.prototype._removeFromMatrix = function (schedule) {
                    var modelID = util.stamp(schedule);

                    util.forEach(this.dateMatrix, function (matrix) {
                        var index = util.inArray(modelID, matrix);

                        if (~index) {
                            matrix.splice(index, 1);
                        }
                    }, this);
                };

                /**
                 * Add a schedule instance.
                 * @emits Base#addedSchedule
                 * @param {Schedule} schedule The instance of Schedule.
                 * @param {boolean} silent - set true then don't fire events.
                 * @returns {Schedule} The instance of Schedule that added.
                 */
                Base.prototype.addSchedule = function (schedule, silent) {
                    this.schedules.add(schedule);
                    this._addToMatrix(schedule);

                    if (!silent) {
                        /**
                         * @event Base#addedSchedule
                         * @type {object}
                         */
                        this.fire('addedSchedule', schedule);
                    }

                    return schedule;
                };

                /**
                 * split schedule model by ymd.
                 * @param {Date} start - start date
                 * @param {Date} end - end date
                 * @param {Collection} scheduleCollection - collection of schedule model.
                 * @returns {object.<string, Collection>} splitted schedule model collections.
                 */
                Base.prototype.splitScheduleByDateRange = function (start, end, scheduleCollection) {
                    var range = datetime.range(
                        datetime.start(start),
                        datetime.end(end),
                        datetime.MILLISECONDS_PER_DAY
                    ),
                        ownMatrix = this.dateMatrix,
                        result = {};

                    util.forEachArray(range, function (date) {
                        var ymd = datetime.format(date, 'YYYYMMDD'),
                            matrix = ownMatrix[ymd],
                            collection;

                        collection = result[ymd] = common.createScheduleCollection();

                        if (matrix && matrix.length) {
                            util.forEachArray(matrix, function (id) {
                                scheduleCollection.doWhenHas(id, function (schedule) {
                                    collection.add(schedule);
                                });
                            });
                        }
                    });

                    return result;
                };

                /**
                 * Return schedules in supplied date range.
                 *
                 * available only YMD.
                 * @param {TZDate} start start date.
                 * @param {TZDate} end end date.
                 * @returns {object.<string, Collection>} schedule collection grouped by dates.
                 */
                Base.prototype.findByDateRange = function (start, end) {
                    var range = datetime.range(
                        datetime.start(start),
                        datetime.end(end),
                        datetime.MILLISECONDS_PER_DAY
                    ),
                        ownSchedules = this.schedules.items,
                        ownMatrix = this.dateMatrix,
                        dformat = datetime.format,
                        result = {},
                        matrix,
                        ymd,
                        viewModels;

                    util.forEachArray(range, function (date) {
                        ymd = dformat(date, 'YYYYMMDD');
                        matrix = ownMatrix[ymd];
                        viewModels = result[ymd] = common.createScheduleCollection();

                        if (matrix && matrix.length) {
                            viewModels.add.apply(viewModels, util.map(matrix, function (id) {
                                return ScheduleViewModel.create(ownSchedules[id]);
                            }));
                        }
                    });

                    return result;
                };

                Base.prototype.clearSchedules = function () {
                    this.dateMatrix = {};
                    this.schedules.clear();
                    /**
                     * for inner view when clear schedules
                     * @event Base#clearSchedules
                     * @type {Schedule}
                     */
                    this.fire('clearSchedules');
                };

                /**
                 * Set a theme.
                 * @param {themeConfig} theme - theme keys, styles
                 * @returns {Array.<string>} keys - error keys not predefined.
                 */
                Base.prototype.setTheme = function (theme) {
                    return this.theme.setStyles(theme);
                };

                /**
                 * Set calendar list
                 * @param {Array.<Calendar>} calendars - calendar list
                 */
                Base.prototype.setCalendars = function (calendars) {
                    this.calendars = calendars;
                };

                // mixin
                util.CustomEvents.mixin(Base);

                module.exports = Base;


                /***/
            }),

/***/ "./src/js/controller/viewMixin/core.js":
/*!*********************************************!*\
  !*** ./src/js/controller/viewMixin/core.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Core methods for schedule block placing
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var forEachArr = util.forEachArray,
                    aps = Array.prototype.slice;

                var datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js");
                var TZDate = __webpack_require__(/*! ../../common/timezone */ "./src/js/common/timezone.js").Date;
                var Collection = __webpack_require__(/*! ../../common/collection */ "./src/js/common/collection.js");
                var ScheduleViewModel = __webpack_require__(/*! ../../model/viewModel/scheduleViewModel */ "./src/js/model/viewModel/scheduleViewModel.js");

                var Core = {
                    /**
                     * Calculate collision group.
                     * @param {array} viewModels List of viewmodels.
                     * @returns {array} Collision Group.
                     */
                    getCollisionGroup: function (viewModels) {
                        var collisionGroups = [],
                            foundPrevCollisionSchedule = false,
                            previousScheduleList;

                        if (!viewModels.length) {
                            return collisionGroups;
                        }

                        collisionGroups[0] = [util.stamp(viewModels[0].valueOf())];
                        forEachArr(viewModels.slice(1), function (schedule, index) {
                            foundPrevCollisionSchedule = false;
                            previousScheduleList = aps.apply(viewModels, [0, index + 1]).reverse();

                            forEachArr(previousScheduleList, function (previous) {
                                if (schedule.collidesWith(previous)) {
                                    // If overlapping previous schedules, find a Collision Group of overlapping schedules and add this schedules
                                    foundPrevCollisionSchedule = true;

                                    forEachArr(collisionGroups.slice(0).reverse(), function (group) {
                                        if (~util.inArray(util.stamp(previous.valueOf()), group)) {
                                            // If you find a previous schedule that overlaps, include it in the Collision Group to which it belongs.
                                            group.push(util.stamp(schedule.valueOf()));

                                            return false; // returning false can stop this loop
                                        }

                                        return true;
                                    });

                                    return false; // returning false can stop this loop
                                }

                                return true;
                            });

                            if (!foundPrevCollisionSchedule) {
                                // This schedule is a schedule that does not overlap with the previous schedule, so a new Collision Group is constructed.
                                collisionGroups.push([util.stamp(schedule.valueOf())]);
                            }
                        });

                        return collisionGroups;
                    },

                    /**
                     * Get row length by column index in 2d matrix.
                     * @param {array[]} arr2d Matrix
                     * @param {number} col Column index.
                     * @returns {number} Last row number in column.
                     */
                    getLastRowInColumn: function (arr2d, col) {
                        var row = arr2d.length;

                        while (row > 0) {
                            row -= 1;
                            if (!util.isUndefined(arr2d[row][col])) {
                                return row;
                            }
                        }

                        return false;
                    },

                    /**
                     * Calculate matrix for appointment block element placing.
                     * @param {Collection} collection model collection.
                     * @param {array[]} collisionGroups Collision groups for schedule set.
                     * @returns {array} matrices
                     */
                    getMatrices: function (collection, collisionGroups) {
                        var result = [],
                            getLastRowInColumn = Core.getLastRowInColumn;

                        forEachArr(collisionGroups, function (group) {
                            var matrix = [[]];

                            forEachArr(group, function (scheduleID) {
                                var schedule = collection.items[scheduleID],
                                    col = 0,
                                    found = false,
                                    nextRow,
                                    lastRowInColumn;

                                while (!found) {
                                    lastRowInColumn = getLastRowInColumn(matrix, col);

                                    if (lastRowInColumn === false) {
                                        matrix[0].push(schedule);
                                        found = true;
                                    } else if (!schedule.collidesWith(matrix[lastRowInColumn][col])) {
                                        nextRow = lastRowInColumn + 1;
                                        if (util.isUndefined(matrix[nextRow])) {
                                            matrix[nextRow] = [];
                                        }
                                        matrix[nextRow][col] = schedule;
                                        found = true;
                                    }

                                    col += 1;
                                }
                            });

                            result.push(matrix);
                        });

                        return result;
                    },

                    /**
                     * Filter that get schedule model in supplied date ranges.
                     * @param {Date} start - start date
                     * @param {Date} end - end date
                     * @returns {function} schedule filter function
                     */
                    getScheduleInDateRangeFilter: function (start, end) {
                        return function (model) {
                            var ownStarts = model.getStarts(),
                                ownEnds = model.getEnds();

                            // shorthand condition of
                            //
                            // (ownStarts >= start && ownEnds <= end) ||
                            // (ownStarts < start && ownEnds >= start) ||
                            // (ownEnds > end && ownStarts <= end)
                            return !(ownEnds < start || ownStarts > end);
                        };
                    },

                    /**
                     * Position each view model for placing into container
                     * @param {Date} start - start date to render
                     * @param {Date} end - end date to render
                     * @param {array} matrices - matrices from controller
                     * @param {function} [iteratee] - iteratee function invoke each view models
                     */
                    positionViewModels: function (start, end, matrices, iteratee) {
                        var ymdListToRender;

                        ymdListToRender = util.map(
                            datetime.range(start, end, datetime.MILLISECONDS_PER_DAY),
                            function (date) {
                                return datetime.format(date, 'YYYYMMDD');
                            }
                        );

                        forEachArr(matrices, function (matrix) {
                            forEachArr(matrix, function (column) {
                                forEachArr(column, function (viewModel, index) {
                                    var ymd, dateLength;

                                    if (!viewModel) {
                                        return;
                                    }

                                    ymd = datetime.format(viewModel.getStarts(), 'YYYYMMDD');
                                    dateLength = datetime.range(
                                        datetime.start(viewModel.getStarts()),
                                        datetime.end(viewModel.getEnds()),
                                        datetime.MILLISECONDS_PER_DAY
                                    ).length;

                                    viewModel.top = index;
                                    viewModel.left = util.inArray(ymd, ymdListToRender);
                                    viewModel.width = dateLength;

                                    if (iteratee) {
                                        iteratee(viewModel);
                                    }
                                });
                            });
                        });
                    },

                    /**
                     * Limit start, end date each view model for render properly
                     * @param {TZDate} start - start date to render
                     * @param {TZDate} end - end date to render
                     * @param {Collection|ScheduleViewModel} viewModelColl - schedule view
                     *  model collection or ScheduleViewModel
                     * @returns {ScheduleViewModel} return view model when third parameter is
                     *  view model
                     */
                    limitRenderRange: function (start, end, viewModelColl) {
                        /**
                         * Limit render range for view models
                         * @param {ScheduleViewModel} viewModel - view model instance
                         * @returns {ScheduleViewModel} view model that limited render range
                         */
                        function limit(viewModel) {
                            if (viewModel.getStarts() < start) {
                                viewModel.exceedLeft = true;
                                viewModel.renderStarts = new TZDate(start);
                            }

                            if (viewModel.getEnds() > end) {
                                viewModel.exceedRight = true;
                                viewModel.renderEnds = new TZDate(end);
                            }

                            return viewModel;
                        }

                        if (viewModelColl.constructor === Collection) {
                            viewModelColl.each(limit);

                            return null;
                        }

                        return limit(viewModelColl);
                    },

                    /**
                     * Convert schedule model collection to view model collection.
                     * @param {Collection} modelColl - collection of schedule model
                     * @returns {Collection} collection of schedule view model
                     */
                    convertToViewModel: function (modelColl) {
                        var viewModelColl;

                        viewModelColl = new Collection(function (viewModel) {
                            return viewModel.cid();
                        });

                        modelColl.each(function (model) {
                            viewModelColl.add(ScheduleViewModel.create(model));
                        });

                        return viewModelColl;
                    }
                };

                module.exports = Core;


                /***/
            }),

/***/ "./src/js/controller/viewMixin/month.js":
/*!**********************************************!*\
  !*** ./src/js/controller/viewMixin/month.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Controller mixin for Month View
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var array = __webpack_require__(/*! ../../common/array */ "./src/js/common/array.js"),
                    datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js"),
                    Collection = __webpack_require__(/*! ../../common/collection */ "./src/js/common/collection.js");
                var mmax = Math.max;

                var Month = {
                    /**
                     * Filter function for find time schedule
                     * @param {ScheduleViewModel} viewModel - schedule view model
                     * @returns {boolean} whether model is time schedule?
                     */
                    _onlyTimeFilter: function (viewModel) {
                        return !viewModel.model.isAllDay && !viewModel.hasMultiDates;
                    },

                    /**
                     * Filter function for find allday schedule
                     * @param {ScheduleViewModel} viewModel - schedule view model
                     * @returns {boolean} whether model is allday schedule?
                     */
                    _onlyAlldayFilter: function (viewModel) {
                        return viewModel.model.isAllDay || viewModel.hasMultiDates;
                    },

                    /**
                     * Weight top value +1 for month view render
                     * @param {ScheduleViewModel} viewModel - schedule view model
                     */
                    _weightTopValue: function (viewModel) {
                        viewModel.top = viewModel.top || 0;
                        viewModel.top += 1;
                    },

                    /**
                     * Adjust render range to render properly.
                     *
                     * Limit start, end for each allday schedules and expand start, end for
                     * each time schedules
                     * @this Base
                     * @param {TZDate} start - render start date
                     * @param {TZDate} end - render end date
                     * @param {Collection} vColl - view model collection
                     * property.
                     */
                    _adjustRenderRange: function (start, end, vColl) {
                        var ctrlCore = this.Core;

                        vColl.each(function (viewModel) {
                            if (viewModel.model.isAllDay || viewModel.hasMultiDates) {
                                ctrlCore.limitRenderRange(start, end, viewModel);
                            }
                        });
                    },

                    /**
                     * Get max top index value for allday schedules in specific date (YMD)
                     * @this Base
                     * @param {string} ymd - yyyymmdd formatted value
                     * @param {Collection} vAlldayColl - collection of allday schedules
                     * @returns {number} max top index value in date
                     */
                    _getAlldayMaxTopIndexAtYMD: function (ymd, vAlldayColl) {
                        var dateMatrix = this.dateMatrix,
                            topIndexesInDate = [];
                        util.forEach(dateMatrix[ymd], function (cid) {
                            vAlldayColl.doWhenHas(cid, function (viewModel) {
                                topIndexesInDate.push(viewModel.top);
                            });
                        });

                        if (topIndexesInDate.length > 0) {
                            return mmax.apply(null, topIndexesInDate);
                        }

                        return 0;
                    },

                    /**
                     * Adjust time view model's top index value
                     * @this Base
                     * @param {Collection} vColl - collection of schedules
                     */
                    _adjustTimeTopIndex: function (vColl) {
                        var ctrlMonth = this.Month;
                        var getAlldayMaxTopIndexAtYMD = ctrlMonth._getAlldayMaxTopIndexAtYMD;
                        var vAlldayColl = vColl.find(ctrlMonth._onlyAlldayFilter);
                        var sortedTimeSchedules = vColl.find(ctrlMonth._onlyTimeFilter).sort(array.compare.schedule.asc);
                        var maxIndexInYMD = {};

                        sortedTimeSchedules.forEach(function (timeViewModel) {
                            var scheduleYMD = datetime.format(timeViewModel.getStarts(), 'YYYYMMDD');
                            var alldayMaxTopInYMD = maxIndexInYMD[scheduleYMD];

                            if (util.isUndefined(alldayMaxTopInYMD)) {
                                alldayMaxTopInYMD = maxIndexInYMD[scheduleYMD] =
                                    getAlldayMaxTopIndexAtYMD(scheduleYMD, vAlldayColl);
                            }
                            maxIndexInYMD[scheduleYMD] = timeViewModel.top =
                                (alldayMaxTopInYMD + 1);
                        });
                    },

                    /**
                     * Adjust time view model's top index value
                     * @this Base
                     * @param {Collection} vColl - collection of schedules
                     */
                    _stackTimeFromTop: function (vColl) {
                        var ctrlMonth = this.Month;
                        var vAlldayColl = vColl.find(ctrlMonth._onlyAlldayFilter);
                        var sortedTimeSchedules = vColl.find(ctrlMonth._onlyTimeFilter).sort(array.compare.schedule.asc);
                        var indiceInYMD = {};
                        var dateMatrix = this.dateMatrix;

                        sortedTimeSchedules.forEach(function (timeViewModel) {
                            var scheduleYMD = datetime.format(timeViewModel.getStarts(), 'YYYYMMDD');
                            var topArrayInYMD = indiceInYMD[scheduleYMD];
                            var maxTopInYMD;
                            var i;

                            if (util.isUndefined(topArrayInYMD)) {
                                topArrayInYMD = indiceInYMD[scheduleYMD] = [];
                                util.forEach(dateMatrix[scheduleYMD], function (cid) {
                                    vAlldayColl.doWhenHas(cid, function (viewModel) {
                                        topArrayInYMD.push(viewModel.top);
                                    });
                                });
                            }

                            if (util.inArray(timeViewModel.top, topArrayInYMD) >= 0) {
                                maxTopInYMD = mmax.apply(null, topArrayInYMD) + 1;
                                for (i = 1; i <= maxTopInYMD; i += 1) {
                                    timeViewModel.top = i;
                                    if (util.inArray(timeViewModel.top, topArrayInYMD) < 0) {
                                        break;
                                    }
                                }
                            }
                            topArrayInYMD.push(timeViewModel.top);
                        });
                    },

                    /**
                     * Convert multi-date time schedule to all-day schedule
                     * @this Base
                     * @param {Collection} vColl - view model collection
                     * property.
                     */
                    _addMultiDatesInfo: function (vColl) {
                        vColl.each(function (viewModel) {
                            var model = viewModel.model;
                            var start = model.getStarts();
                            var end = model.getEnds();

                            viewModel.hasMultiDates = !datetime.isSameDate(start, end);

                            if (!model.isAllDay && viewModel.hasMultiDates) {
                                viewModel.renderStarts = datetime.start(start);
                                viewModel.renderEnds = datetime.convertStartDayToLastDay(end);
                            }
                        });
                    },

                    /**
                     * Find schedule and get view model for specific month
                     * @this Base
                     * @param {TZDate} start - start date to find schedules
                     * @param {TZDate} end - end date to find schedules
                     * @param {function[]} [andFilters] - optional filters to applying search query
                     * @param {boolean} [alldayFirstMode=false] if true, time schedule is lower than all-day schedule. Or stack schedules from the top.
                     * @returns {object} view model data
                     */
                    findByDateRange: function (start, end, andFilters, alldayFirstMode) {
                        var ctrlCore = this.Core,
                            ctrlMonth = this.Month,
                            filter = ctrlCore.getScheduleInDateRangeFilter(start, end),
                            coll, vColl, vList,
                            collisionGroup,
                            matrices;

                        alldayFirstMode = alldayFirstMode || false;
                        andFilters = andFilters || [];
                        filter = Collection.and.apply(null, [filter].concat(andFilters));

                        coll = this.schedules.find(filter);
                        vColl = ctrlCore.convertToViewModel(coll);
                        ctrlMonth._addMultiDatesInfo(vColl);
                        ctrlMonth._adjustRenderRange(start, end, vColl);
                        vList = vColl.sort(array.compare.schedule.asc);

                        collisionGroup = ctrlCore.getCollisionGroup(vList);
                        matrices = ctrlCore.getMatrices(vColl, collisionGroup);
                        ctrlCore.positionViewModels(start, end, matrices, ctrlMonth._weightTopValue);
                        if (alldayFirstMode) {
                            ctrlMonth._adjustTimeTopIndex(vColl);
                        } else {
                            ctrlMonth._stackTimeFromTop(vColl);
                        }

                        return matrices;
                    }
                };

                module.exports = Month;


                /***/
            }),

/***/ "./src/js/controller/viewMixin/week.js":
/*!*********************************************!*\
  !*** ./src/js/controller/viewMixin/week.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /* eslint no-shadow: 0 */
                /**
                 * @fileoverview Controller mixin modules for day views.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");

                var Collection = __webpack_require__(/*! ../../common/collection */ "./src/js/common/collection.js");
                var array = __webpack_require__(/*! ../../common/array */ "./src/js/common/array.js");
                var datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js");
                var TZDate = __webpack_require__(/*! ../../common/timezone */ "./src/js/common/timezone.js").Date;

                var SCHEDULE_MIN_DURATION = datetime.MILLISECONDS_SCHEDULE_MIN_DURATION;

                /**
                 * @mixin Base.Week
                 */
                var Week = {
                    /**********
                     * TIME GRID VIEW
                     **********/

                    /**
                     * Make array with start and end times on schedules.
                     * @this Base.Week
                     * @param {array[]} matrix - matrix from controller.
                     * @returns {array[]} starttime, endtime array (exclude first row's schedules)
                     */
                    generateTimeArrayInRow: function (matrix) {
                        var row,
                            col,
                            schedule,
                            start,
                            end,
                            map = [],
                            cursor = [],
                            maxColLen = Math.max.apply(null, util.map(matrix, function (col) {
                                return col.length;
                            }));

                        for (col = 1; col < maxColLen; col += 1) {
                            row = 0;
                            schedule = util.pick(matrix, row, col);

                            while (schedule) {
                                start = schedule.getStarts().getTime() - datetime.millisecondsFrom('minutes', schedule.valueOf().goingDuration);
                                end = schedule.getEnds().getTime() + datetime.millisecondsFrom('minutes', schedule.valueOf().comingDuration);

                                if (Math.abs(end - start) < SCHEDULE_MIN_DURATION) {
                                    end += SCHEDULE_MIN_DURATION;
                                }

                                cursor.push([start, end]);

                                row += 1;
                                schedule = util.pick(matrix, row, col);
                            }

                            map.push(cursor);
                            cursor = [];
                        }

                        return map;
                    },

                    /**
                     * Get collision information from list
                     * @this Base
                     * @param {array.<number[]>} arr - list to detecting collision. [[start, end], [start, end]]
                     * @param {number} start - schedule start time that want to detect collisions.
                     * @param {number} end - schedule end time that want to detect collisions.
                     * @returns {boolean} target has collide in supplied array?
                     */
                    hasCollide: function (arr, start, end) {
                        var startStart,
                            startEnd,
                            endStart,
                            endEnd,
                            getFunc = function (index) {
                                return function (block) {
                                    return block[index];
                                };
                            },
                            abs = Math.abs,
                            compare = array.compare.num.asc,
                            hasCollide;

                        if (!arr.length) {
                            return false;
                        }

                        startStart = abs(array.bsearch(arr, start, getFunc(0), compare));
                        startEnd = abs(array.bsearch(arr, start, getFunc(1), compare));
                        endStart = abs(array.bsearch(arr, end, getFunc(0), compare));
                        endEnd = abs(array.bsearch(arr, end, getFunc(1), compare));
                        hasCollide = !(startStart === startEnd && startEnd === endStart && endStart === endEnd);

                        return hasCollide;
                    },

                    /**
                     * Initialize values to viewmodels for detect real collision at rendering phase.
                     * @this Base
                     * @param {array[]} matrices - Matrix data.
                     */
                    getCollides: function (matrices) {
                        util.forEachArray(matrices, function (matrix) {
                            var binaryMap,
                                maxRowLength;

                            binaryMap = Week.generateTimeArrayInRow(matrix);
                            maxRowLength = Math.max.apply(null, util.map(matrix, function (row) {
                                return row.length;
                            }));

                            util.forEachArray(matrix, function (row) {
                                util.forEachArray(row, function (viewModel, col) {
                                    var startTime,
                                        endTime,
                                        hasCollide,
                                        i;

                                    if (!viewModel) {
                                        return;
                                    }

                                    startTime = viewModel.getStarts().getTime();
                                    endTime = viewModel.getEnds().getTime();

                                    if (Math.abs(endTime - startTime) < SCHEDULE_MIN_DURATION) {
                                        endTime += SCHEDULE_MIN_DURATION;
                                    }

                                    startTime -= datetime.millisecondsFrom('minutes', viewModel.valueOf().goingDuration);
                                    endTime += datetime.millisecondsFrom('minutes', viewModel.valueOf().comingDuration);

                                    endTime -= 1;

                                    for (i = (col + 1); i < maxRowLength; i += 1) {
                                        hasCollide = Week.hasCollide(binaryMap[i - 1], startTime, endTime);

                                        if (hasCollide) {
                                            viewModel.hasCollide = true;
                                            break;
                                        }

                                        viewModel.extraSpace += 1;
                                    }
                                });
                            });
                        });
                    },

                    /**
                     * create view model for time view part
                     * @this Base
                     * @param {Date} start - start date.
                     * @param {Date} end - end date.
                     * @param {Collection} time - view model collection.
                     * @param {number} hourStart - start hour to be shown
                     * @param {number} hourEnd - end hour to be shown
                     * @returns {object} view model for time part.
                     */
                    getViewModelForTimeView: function (start, end, time, hourStart, hourEnd) {
                        var self = this,
                            ymdSplitted = this.splitScheduleByDateRange(start, end, time),
                            result = {};

                        var _getViewModel = Week._makeGetViewModelFuncForTimeView(hourStart, hourEnd);

                        util.forEach(ymdSplitted, function (collection, ymd) {
                            var viewModels = _getViewModel(collection);
                            var collisionGroups, matrices;

                            collisionGroups = self.Core.getCollisionGroup(viewModels);
                            matrices = self.Core.getMatrices(collection, collisionGroups);
                            self.Week.getCollides(matrices);

                            result[ymd] = matrices;
                        });

                        return result;
                    },

                    /**
                     * make view model function depending on start and end hour
                     * if time view option has start or end hour condition
                     * it add filter
                     * @param {number} hourStart - start hour to be shown
                     * @param {number} hourEnd - end hour to be shown
                     * @returns {function} function
                     */
                    _makeGetViewModelFuncForTimeView: function (hourStart, hourEnd) {
                        if (hourStart === 0 && hourEnd === 24) {
                            return function (collection) {
                                return collection.sort(array.compare.schedule.asc);
                            };
                        }

                        return function (collection) {
                            return collection.find(Week._makeHourRangeFilter(hourStart, hourEnd))
                                .sort(array.compare.schedule.asc);
                        };
                    },

                    /**
                     * make a filter function that is not included range of start, end hour
                     * @param {number} hStart - hour start
                     * @param {number} hEnd - hour end
                     * @returns {function} - filtering function
                     */
                    _makeHourRangeFilter: function (hStart, hEnd) {
                        return function (schedule) {
                            var ownHourStart = schedule.model.start;
                            var ownHourEnd = schedule.model.end;
                            var yyyy = ownHourStart.getFullYear();
                            var mm = ownHourStart.getMonth();
                            var dd = ownHourStart.getDate();

                            var hourStart = new TZDate(yyyy, mm, dd).setHours(hStart);
                            var hourEnd = new TZDate(yyyy, mm, dd).setHours(hEnd);

                            return (ownHourStart >= hourStart && ownHourStart < hourEnd) ||
                                (ownHourEnd > hourStart && ownHourEnd <= hourEnd) ||
                                (ownHourStart < hourStart && ownHourEnd > hourStart) ||
                                (ownHourEnd > hourEnd && ownHourStart < hourEnd);
                        };
                    },

                    /**********
                     * ALLDAY VIEW
                     **********/

                    /**
                     * Set hasMultiDates flag to true and set date ranges for rendering
                     * @this Base
                     * @param {Collection} vColl - view model collection
                     */
                    _addMultiDatesInfo: function (vColl) {
                        vColl.each(function (viewModel) {
                            var model = viewModel.model;
                            viewModel.hasMultiDates = true;
                            viewModel.renderStarts = datetime.start(model.getStarts());
                            viewModel.renderEnds = datetime.convertStartDayToLastDay(model.getEnds());
                        });
                    },

                    /**
                     * create view model for allday view part
                     * @this Base
                     * @param {Date} start start date.
                     * @param {Date} end end date.
                     * @param {Collection} viewModelColl - allday schedule viewModel viewModels.
                     * @returns {object} allday viewModel.
                     */
                    getViewModelForAlldayView: function (start, end, viewModelColl) {
                        var ctrlCore = this.Core,
                            ctrlWeek = this.Week,
                            viewModels,
                            collisionGroups,
                            matrices;

                        if (!viewModelColl || !viewModelColl.length) {
                            return [];
                        }

                        ctrlWeek._addMultiDatesInfo(viewModelColl);
                        ctrlCore.limitRenderRange(start, end, viewModelColl);

                        viewModels = viewModelColl.sort(array.compare.schedule.asc);
                        collisionGroups = ctrlCore.getCollisionGroup(viewModels);

                        matrices = ctrlCore.getMatrices(viewModelColl, collisionGroups);
                        ctrlCore.positionViewModels(start, end, matrices);

                        return matrices;
                    },

                    /**********
                     * READ
                     **********/

                    /**
                     * Populate schedules in date range.
                     * @this Base
                     * @param {Date} start start date.
                     * @param {Date} end end date.
                     * @param {Array.<object>} panels - schedule panels like 'milestone', 'task', 'allday', 'time'
                     * @param {function[]} [andFilters] - optional filters to applying search query
                     * @param {Object} options - week view options
                     * @returns {object} schedules grouped by dates.
                     */
                    findByDateRange: function (start, end, panels, andFilters, options) {
                        var ctrlCore = this.Core,
                            ctrlWeek = this.Week,
                            filter = ctrlCore.getScheduleInDateRangeFilter(start, end),
                            scheduleTypes = util.pluck(panels, 'name'),
                            hourStart = util.pick(options, 'hourStart'),
                            hourEnd = util.pick(options, 'hourEnd'),
                            modelColl,
                            group;

                        andFilters = andFilters || [];
                        filter = Collection.and.apply(null, [filter].concat(andFilters));

                        modelColl = this.schedules.find(filter);
                        modelColl = ctrlCore.convertToViewModel(modelColl);

                        group = modelColl.groupBy(scheduleTypes, this.groupFunc);
                        util.forEach(panels, function (panel) {
                            var name = panel.name;
                            if (panel.type === 'daygrid') {
                                group[name] = ctrlWeek.getViewModelForAlldayView(start, end, group[name]);
                            } else if (panel.type === 'timegrid') {
                                group[name] = ctrlWeek.getViewModelForTimeView(start, end, group[name], hourStart, hourEnd);
                            }
                        });

                        return group;
                    },

                    /* eslint max-nested-callbacks: 0 */
                    /**
                     * Make exceed date information
                     * @param {number} maxCount - exceed schedule count
                     * @param {Array} eventsInDateRange  - matrix of ScheduleViewModel
                     * @param {Array.<TZDate>} range - date range of one week
                     * @returns {object} exceedDate
                     */
                    getExceedDate: function (maxCount, eventsInDateRange, range) {
                        var exceedDate = {};

                        util.forEach(range, function (date) {
                            var ymd = datetime.format(date, 'YYYYMMDD');
                            exceedDate[ymd] = 0;
                        });

                        util.forEach(eventsInDateRange, function (matrix) {
                            util.forEach(matrix, function (column) {
                                util.forEach(column, function (viewModel) {
                                    var period;
                                    if (!viewModel || viewModel.top < maxCount) {
                                        return;
                                    }

                                    period = datetime.range(
                                        viewModel.getStarts(),
                                        viewModel.getEnds(),
                                        datetime.MILLISECONDS_PER_DAY
                                    );

                                    util.forEach(period, function (date) {
                                        var ymd = datetime.format(date, 'YYYYMMDD');
                                        exceedDate[ymd] += 1;
                                    });
                                });
                            });
                        });

                        return exceedDate;
                    },

                    /**
                     * Exclude overflow schedules from matrices
                     * @param {array} matrices - The matrices for schedule placing.
                     * @param {number} visibleScheduleCount - maximum visible count on panel
                     * @returns {array} - The matrices for schedule placing except overflowed schedules.
                     */
                    excludeExceedSchedules: function (matrices, visibleScheduleCount) {
                        return matrices.map(function (matrix) {
                            return matrix.map(function (row) {
                                if (row.length > visibleScheduleCount) {
                                    return row.filter(function (item) {
                                        return item.top < visibleScheduleCount;
                                    }, this);
                                }

                                return row;
                            }, this);
                        }, this);
                    }
                };

                module.exports = Week;


                /***/
            }),

/***/ "./src/js/factory/calendar.js":
/*!************************************!*\
  !*** ./src/js/factory/calendar.js ***!
  \************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Factory module for control all other factory.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var GA_TRACKING_ID = 'UA-129951699-1';

                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet"),
                    Handlebars = __webpack_require__(/*! handlebars-template-loader/runtime */ "./node_modules/handlebars-template-loader/runtime/index.js");
                var dw = __webpack_require__(/*! ../common/dw */ "./src/js/common/dw.js"),
                    datetime = __webpack_require__(/*! ../common/datetime */ "./src/js/common/datetime.js"),
                    Layout = __webpack_require__(/*! ../view/layout */ "./src/js/view/layout.js"),
                    Drag = __webpack_require__(/*! ../handler/drag */ "./src/js/handler/drag.js"),
                    controllerFactory = __webpack_require__(/*! ./controller */ "./src/js/factory/controller.js"),
                    weekViewFactory = __webpack_require__(/*! ./weekView */ "./src/js/factory/weekView.js"),
                    monthViewFactory = __webpack_require__(/*! ./monthView */ "./src/js/factory/monthView.js"),
                    TZDate = __webpack_require__(/*! ../common/timezone */ "./src/js/common/timezone.js").Date,
                    config = __webpack_require__(/*! ../config */ "./src/js/config.js"),
                    timezone = __webpack_require__(/*! ../common/timezone */ "./src/js/common/timezone.js"),
                    reqAnimFrame = __webpack_require__(/*! ../common/reqAnimFrame */ "./src/js/common/reqAnimFrame.js");

                var mmin = Math.min;

                /**
                 * Schedule information
                 * @typedef {object} Schedule
                 * @property {string} [id] - The unique schedule id depends on calendar id
                 * @property {string} calendarId - The unique calendar id
                 * @property {string} [title] - The schedule title
                 * @property {string} [body] - The schedule body text which is text/plain
                 * @property {string|TZDate} [start] - The start time. It's 'string' for input. It's 'TZDate' for output like event handler.
                 * @property {string|TZDate} [end] - The end time. It's 'string' for input. It's 'TZDate' for output like event handler.
                 * @property {number} [goingDuration] - The travel time: Going duration minutes
                 * @property {number} [comingDuration] - The travel time: Coming duration minutes
                 * @property {boolean} [isAllDay] - The all day schedule
                 * @property {string} [category] - The schedule type('milestone', 'task', allday', 'time')
                 * @property {string} [dueDateClass] - The task schedule type string
                 *                                   (any string value is ok and mandatory if category is 'task')
                 * @property {string} [location] - The location
                 * @property {Array.<string>} [attendees] - The attendees
                 * @property {string} [recurrenceRule] - The recurrence rule
                 * @property {boolean} [isPending] - The in progress flag to do something like network job(The schedule will be transparent.)
                 * @property {boolean} [isFocused] - The focused schedule flag
                 * @property {boolean} [isVisible] - The schedule visibility flag
                 * @property {boolean} [isReadOnly] - The schedule read-only flag
                 * @property {boolean} [isPrivate] - The private schedule
                 * @property {string} [color] - The schedule text color
                 * @property {string} [bgColor] - The schedule background color
                 * @property {string} [dragBgColor] - The schedule background color when dragging it
                 * @property {string} [borderColor] - The schedule left border color
                 * @property {string} [customStyle] - The schedule's custom css class
                 * @property {any} [raw] - The user data
                 * @property {string} [state] - The schedule's state ('busy', 'free')
                 */

                /**
                 * Template functions to support customer renderer
                 * @typedef {object} Template
                 * @property {function} [milestoneTitle] - The milestone title(at left column) template function
                 * @property {function} [milestone] - The milestone template function
                 * @property {function} [taskTitle] - The task title(at left column) template function
                 * @property {function} [task] - The task template function
                 * @property {function} [alldayTitle] - The allday title(at left column) template function
                 * @property {function} [allday] - The allday template function
                 * @property {function} [time] - The time template function
                 * @property {function} [goingDuration] - The travel time(going duration) template function
                 * @property {function} [comingDuration] - The travel time(coming duration) template function
                 * @property {function} [monthMoreTitleDate] - The month more layer title template function
                 * @property {function} [monthMoreClose] - The month more layer close button template function
                 * @property {function} [monthGridHeader] - The month grid header(date, decorator, title) template function
                 * @property {function} [monthGridHeaderExceed] - The month grid header(exceed schedule count) template function
                 * @property {function} [monthGridFooter] - The month grid footer(date, decorator, title) template function
                 * @property {function} [monthGridFooterExceed] - The month grid footer(exceed schedule count) template function
                 * @property {function} [monthDayname] - The monthly dayname template function
                 * @property {function} [weekDayname] - The weekly dayname template function
                 * @property {function} [weekGridFooterExceed] - The week/day grid footer(exceed schedule count) template function
                 * @property {function} [dayGridTitle] - The week/day grid title template function(e.g. milestone, task, allday)
                 * @property {function} [schedule] - The week/day schedule template function(When the schedule category attribute is milestone, task, or all day)
                 * @property {function} [collapseBtnTitle] - The week/day (exceed schedule more view) collapse button title template function
                 * @property {function} [timezoneDisplayLabel] - The timezone display label template function in time grid
                 * @property {function} [timegridDisplayPrimayTime] - Deprecated: use 'timegridDisplayPrimaryTime'
                 * @property {function} [timegridDisplayPrimaryTime] - The display label template function of primary timezone in time grid
                 * @property {function} [timegridDisplayTime] - The display time template function in time grid
                 * @property {function} [timegridCurrentTime] - The current time template function in time grid
                 * @property {function} [popupIsAllDay] - The all day checkbox label text template function in the default creation popup
                 * @property {function} [popupStateFree] - The free option template function in the state select box of the default creation popup
                 * @property {function} [popupStateBusy] - The busy option template function in the state select box of the default creation popup
                 * @property {function} [titlePlaceholder] - The title input placeholder text template function in the default creation popup
                 * @property {function} [locationPlaceholder] - The location input placeholder text template function in the default creation popup
                 * @property {function} [startDatePlaceholder] - The start date input placeholder text template function in the default creation popup
                 * @property {function} [endDatePlaceholder] - The end date input placeholder text template function in the default creation popup
                 * @property {function} [popupSave] - The 'Save' button text template function in the default creation popup
                 * @property {function} [popupUpdate] - The 'Update' button text template function in the default creation popup when in edit mode
                 * @property {function} [popupDetailDate] - The schedule date information's template function on the default detail popup
                 * @property {function} [popupDetailLocation] - The schedule location text information's template function on the default detail popup
                 * @property {function} [popupDetailUser] - The schedule user text information's template function on the default detail popup
                 * @property {function} [popupDetailState] - The schedule state(busy or free) text information's template function on the default detail popup
                 * @property {function} [popupDetailRepeat] - The schedule repeat information's template function on the default detail popup
                 * @property {function} [popupDetailBody] - The schedule body text information's template function on the default detail popup
                 * @property {function} [popupEdit] - The 'Edit' button text template function on the default detail popup
                 * @property {function} [popupDelete] - The 'Delete' button text template function on the default detail popup
                 * @example
                 * var calendar = new tui.Calendar(document.getElementById('calendar'), {
                 *     ...
                 *     template: {
                 *         milestone: function(schedule) {
                 *             return '<span class="calendar-font-icon ic-milestone-b"></span> <span style="background-color: ' + schedule.bgColor + '">' + schedule.title + '</span>';
                 *         },
                 *         milestoneTitle: function() {
                 *             return '<span class="tui-full-calendar-left-content">MILESTONE</span>';
                 *         },
                 *         task: function(schedule) {
                 *             return '#' + schedule.title;
                 *         },
                 *         taskTitle: function() {
                 *             return '<span class="tui-full-calendar-left-content">TASK</span>';
                 *         },
                 *         allday: function(schedule) {
                 *             return getTimeTemplate(schedule, true);
                 *         },
                 *         alldayTitle: function() {
                 *             return '<span class="tui-full-calendar-left-content">ALL DAY</span>';
                 *         },
                 *         time: function(schedule) {
                 *             return '<strong>' + moment(schedule.start.getTime()).format('HH:mm') + '</strong> ' + schedule.title;
                 *         },
                 *         goingDuration: function(schedule) {
                 *             return '<span class="calendar-icon ic-travel-time"></span>' + schedule.goingDuration + 'min.';
                 *         },
                 *         comingDuration: function(schedule) {
                 *             return '<span class="calendar-icon ic-travel-time"></span>' + schedule.comingDuration + 'min.';
                 *         },
                 *         monthMoreTitleDate: function(date, dayname) {
                 *             var day = date.split('.')[2];
                 *
                 *             return '<span class="tui-full-calendar-month-more-title-day">' + day + '</span> <span class="tui-full-calendar-month-more-title-day-label">' + dayname + '</span>';
                 *         },
                 *         monthMoreClose: function() {
                 *             return '<span class="tui-full-calendar-icon tui-full-calendar-ic-close"></span>';
                 *         },
                 *         monthGridHeader: function(dayModel) {
                 *             var date = parseInt(dayModel.date.split('-')[2], 10);
                 *             var classNames = ['tui-full-calendar-weekday-grid-date '];
                 *
                 *             if (dayModel.isToday) {
                 *                 classNames.push('tui-full-calendar-weekday-grid-date-decorator');
                 *             }
                 *
                 *             return '<span class="' + classNames.join(' ') + '">' + date + '</span>';
                 *         },
                 *         monthGridHeaderExceed: function(hiddenSchedules) {
                 *             return '<span class="weekday-grid-more-schedules">+' + hiddenSchedules + '</span>';
                 *         },
                 *         monthGridFooter: function() {
                 *             return '';
                 *         },
                 *         monthGridFooterExceed: function(hiddenSchedules) {
                 *             return '';
                 *         },
                 *         monthDayname: function(model) {
                 *             return (model.label).toString().toLocaleUpperCase();
                 *         },
                 *         weekDayname: function(model) {
                 *             return '<span class="tui-full-calendar-dayname-date">' + model.date + '</span>&nbsp;&nbsp;<span class="tui-full-calendar-dayname-name">' + model.dayName + '</span>';
                 *         },
                 *         weekGridFooterExceed: function(hiddenSchedules) {
                 *             return '+' + hiddenSchedules;
                 *         },
                 *         dayGridTitle: function(viewName) {
                 *
                 *             // use another functions instead of 'dayGridTitle'
                 *             // milestoneTitle: function() {...}
                 *             // taskTitle: function() {...}
                 *             // alldayTitle: function() {...}
                 *
                 *             var title = '';
                 *             switch(viewName) {
                 *                 case 'milestone':
                 *                     title = '<span class="tui-full-calendar-left-content">MILESTONE</span>';
                 *                     break;
                 *                 case 'task':
                 *                     title = '<span class="tui-full-calendar-left-content">TASK</span>';
                 *                     break;
                 *                 case 'allday':
                 *                     title = '<span class="tui-full-calendar-left-content">ALL DAY</span>';
                 *                     break;
                 *             }
                 *
                 *             return title;
                 *         },
                 *         schedule: function(schedule) {
                 *
                 *             // use another functions instead of 'schedule'
                 *             // milestone: function() {...}
                 *             // task: function() {...}
                 *             // allday: function() {...}
                 *
                 *             var tpl;
                 *
                 *             switch(category) {
                 *                 case 'milestone':
                 *                     tpl = '<span class="calendar-font-icon ic-milestone-b"></span> <span style="background-color: ' + schedule.bgColor + '">' + schedule.title + '</span>';
                 *                     break;
                 *                 case 'task':
                 *                     tpl = '#' + schedule.title;
                 *                     break;
                 *                 case 'allday':
                 *                     tpl = getTimeTemplate(schedule, true);
                 *                     break;
                 *             }
                 *
                 *             return tpl;
                 *         },
                 *         collapseBtnTitle: function() {
                 *             return '<span class="tui-full-calendar-icon tui-full-calendar-ic-arrow-solid-top"></span>';
                 *         },
                 *         timezoneDisplayLabel: function(timezoneOffset, displayLabel) {
                 *             var gmt, hour, minutes;
                 *
                 *             if (!displayLabel) {
                 *                 gmt = timezoneOffset < 0 ? '-' : '+';
                 *                 hour = Math.abs(parseInt(timezoneOffset / 60, 10));
                 *                 minutes = Math.abs(timezoneOffset % 60);
                 *                 displayLabel = gmt + getPadStart(hour) + ':' + getPadStart(minutes);
                 *             }
                 *
                 *             return displayLabel;
                 *         },
                 *         timegridDisplayPrimayTime: function(time) {
                 *             // will be deprecated. use 'timegridDisplayPrimaryTime'
                 *             var meridiem = 'am';
                 *             var hour = time.hour;
                 *
                 *             if (time.hour > 12) {
                 *                 meridiem = 'pm';
                 *                 hour = time.hour - 12;
                 *             }
                 *
                 *             return hour + ' ' + meridiem;
                 *         },
                 *         timegridDisplayPrimaryTime: function(time) {
                 *             var meridiem = 'am';
                 *             var hour = time.hour;
                 *
                 *             if (time.hour > 12) {
                 *                 meridiem = 'pm';
                 *                 hour = time.hour - 12;
                 *             }
                 *
                 *             return hour + ' ' + meridiem;
                 *         },
                 *         timegridDisplayTime: function(time) {
                 *             return getPadStart(time.hour) + ':' + getPadStart(time.hour);
                 *         },
                 *         timegridCurrentTime: function(timezone) {
                 *             var templates = [];
                 *
                 *             if (timezone.dateDifference) {
                 *                 templates.push('[' + timezone.dateDifferenceSign + timezone.dateDifference + ']<br>');
                 *             }
                 *
                 *             templates.push(moment(timezone.hourmarker).format('HH:mm a'));
                 *
                 *             return templates.join('');
                 *         },
                 *         popupIsAllDay: function() {
                 *             return 'All Day';
                 *         },
                 *         popupStateFree: function() {
                 *             return 'Free';
                 *         },
                 *         popupStateBusy: function() {
                 *             return 'Busy';
                 *         },
                 *         titlePlaceholder: function() {
                 *             return 'Subject';
                 *         },
                 *         locationPlaceholder: function() {
                 *             return 'Location';
                 *         },
                 *         startDatePlaceholder: function() {
                 *             return 'Start date';
                 *         },
                 *         endDatePlaceholder: function() {
                 *             return 'End date';
                 *         },
                 *         popupSave: function() {
                 *             return 'Save';
                 *         },
                 *         popupUpdate: function() {
                 *             return 'Update';
                 *         },
                 *         popupDetailDate: function(isAllDay, start, end) {
                 *             var isSameDate = moment(start).isSame(end);
                 *             var endFormat = (isSameDate ? '' : 'YYYY.MM.DD ') + 'hh:mm a';
                 *
                 *             if (isAllDay) {
                 *                 return moment(start).format('YYYY.MM.DD') + (isSameDate ? '' : ' - ' + moment(end).format('YYYY.MM.DD'));
                 *             }
                 *
                 *             return (moment(start).format('YYYY.MM.DD hh:mm a') + ' - ' + moment(end).format(endFormat));
                 *         },
                 *         popupDetailLocation: function(schedule) {
                 *             return 'Location : ' + schedule.location;
                 *         },
                 *         popupDetailUser: function(schedule) {
                 *             return 'User : ' + (schedule.attendees || []).join(', ');
                 *         },
                 *         popupDetailState: function(schedule) {
                 *             return 'State : ' + schedule.state || 'Busy';
                 *         },
                 *         popupDetailRepeat: function(schedule) {
                 *             return 'Repeat : ' + schedule.recurrenceRule;
                 *         },
                 *         popupDetailBody: function(schedule) {
                 *             return 'Body : ' + schedule.body;
                 *         },
                 *         popupEdit: function() {
                 *             return 'Edit';
                 *         },
                 *         popupDelete: function() {
                 *             return 'Delete';
                 *         }
                 *     }
                 * }
                 */

                /**
                 * Options for daily, weekly view.
                 * @typedef {object} WeekOptions
                 * @property {number} [startDayOfWeek=0] - The start day of week,
                 * @property {Array.<string>} [daynames] - The day names in weekly and daily. Default values are ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
                 * @property {boolean} [narrowWeekend=false] - Make weekend column narrow(1/2 width)
                 * @property {boolean} [workweek=false] - Show only 5 days except for weekend
                 * @property {boolean} [showTimezoneCollapseButton=false] - Show a collapse button to close multiple timezones
                 * @property {boolean} [timezonesCollapsed=false] - An initial multiple timezones collapsed state
                 * @property {number} [hourStart=0] - Can limit of render hour start.
                 * @property {number} [hourEnd=24] - Can limit of render hour end.
                 */

                /**
                 * Options for monthly view.
                 * @typedef {object} MonthOptions
                 * @property {Array.<string>} [daynames] - The day names in monthly. Default values are ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
                 * @property {number} [startDayOfWeek=0] - The start day of week
                 * @property {boolean} [narrowWeekend=false] - Make weekend column narrow(1/2 width)
                 * @property {number} [visibleWeeksCount=6] - The visible week count in monthly(0 or null are same with 6)
                 * @property {boolean} [isAlways6Week=true] - Always show 6 weeks. If false, show 5 weeks or 6 weeks based on the month.
                 * @property {boolean} [workweek=false] - Show only 5 days except for weekend
                 * @property {number} [visibleScheduleCount] - The visible schedule count in monthly grid
                 * @property {object} [moreLayerSize] - The more layer size
                 * @property {object} [moreLayerSize.width=null] - The css width value(px, 'auto').
                *                                                  The default value 'null' is to fit a grid cell.
                 * @property {object} [moreLayerSize.height=null] - The css height value(px, 'auto').
                *                                                   The default value 'null' is to fit a grid cell.
                 * @property {object} [grid] - The grid's header and footer information
                 *  @property {object} [grid.header] - The grid's header informatioin
                 *   @property {number} [grid.header.height=34] - The grid's header height
                 *  @property {object} [grid.footer] - The grid's footer informatioin
                 *   @property {number} [grid.footer.height=34] - The grid's footer height
                 * @property {function} [scheduleFilter=null] - The filter schedules on month view. A parameter is {Schedule} object.
                 */

                /**
                 * @typedef {object} CalendarColor
                 * @property {string} [color] - The calendar color
                 * @property {string} [bgColor] - The calendar background color
                 * @property {string} [borderColor] - The calendar left border color
                 * @property {string} [dragBgColor] - The Background color displayed when you drag a calendar's schedule
                 */

                /**
                 * @typedef {object} Timezone
                 * @property {number} [timezoneOffset] - The minutes for your timezone offset. If null, use the browser's timezone. Refer to Date.prototype.getTimezoneOffset()
                 * @property {string} [displayLabel] -  The display label of your timezone at weekly/daily view(e.g. 'GMT+09:00')
                 * @property {string} [tooltip] -  The tooltip(e.g. 'Seoul')
                 * @example
                 * var cal = new Calendar('#calendar', {
                 *  timezones: [{
                 *      timezoneOffset: 540,
                 *      displayLabel: 'GMT+09:00',
                 *      tooltip: 'Seoul'
                 *  }, {
                 *      timezoneOffset: -420,
                 *      displayLabel: 'GMT-08:00',
                 *      tooltip: 'Los Angeles'
                 *  }]
                 * });
                 */

                /**
                 * @typedef {object} CalendarProps
                 * @property {string|number} id - The calendar id
                 * @property {string} name - The calendar name
                 * @property {string} color - The text color when schedule is displayed
                 * @property {string} bgColor - The background color schedule is displayed
                 * @property {string} borderColor - The color of left border or bullet point when schedule is displayed
                 * @property {string} dragBgColor - The background color when schedule dragging
                 * @example
                 * var cal = new Calendar('#calendar', {
                 *   ...
                 *   calendars: [
                 *     {
                 *       id: '1',
                 *       name: 'My Calendar',
                 *       color: '#ffffff',
                 *       bgColor: '#9e5fff',
                 *       dragBgColor: '#9e5fff',
                 *       borderColor: '#9e5fff'
                 *     },
                 *     {
                 *       id: '2',
                 *       name: 'Company',
                 *       color: '#00a9ff',
                 *       bgColor: '#00a9ff',
                 *       dragBgColor: '#00a9ff',
                 *       borderColor: '#00a9ff'
                 *     },
                 *   ]
                 * });
                 */

                /**
                 * @typedef {object} Options - Calendar option object
                 * @property {string} [defaultView='week'] - Default view of calendar. The default value is 'week'.
                 * @property {boolean|Array.<string>} [taskView=true] - Show the milestone and task in weekly, daily view. The default value is true. If the value is array, it can be &#91;'milestone', 'task'&#93;.
                 * @property {boolean|Array.<string>} [scheduleView=true] - Show the all day and time grid in weekly, daily view. The default value is false. If the value is array, it can be &#91;'allday', 'time'&#93;.
                 * @property {themeConfig} [theme=themeConfig] - {@link themeConfig} for custom style.
                 * @property {Template} [template={}] - {@link Template} for further information
                 * @property {WeekOptions} [week={}] - {@link WeekOptions} for week view
                 * @property {MonthOptions} [month={}] - {@link MonthOptions} for month view
                 * @property {Array.<CalendarProps>} [calendars=[]] - {@link CalendarProps} List that can be used to add new schedule. The default value is [].
                 * @property {boolean} [useCreationPopup=false] - Whether use default creation popup or not. The default value is false.
                 * @property {boolean} [useDetailPopup=false] - Whether use default detail popup or not. The default value is false.
                 * @property {Array.<Timezone>} [timezones] - {@link Timezone} array.
                 *  The first Timezone element is primary and can override Calendar#setTimezoneOffset function
                 *  The rest timezone elements are shown in left timegrid of weekly/daily view
                 * @property {boolean} [disableDblClick=false] - Disable double click to create a schedule. The default value is false.
                 * @property {boolean} [disableClick=false] - Disable click to create a schedule. The default value is false.
                 * @property {boolean} [isReadOnly=false] - {@link Calendar} is read-only mode and a user can't create and modify any schedule. The default value is false.
                 * @property {boolean} [usageStatistics=true] - Let us know the hostname. If you don't want to send the hostname, please set to false.
                 */

                /**
                 * {@link https://nhn.github.io/tui.code-snippet/latest/CustomEvents CustomEvents} document at {@link https://github.com/nhn/tui.code-snippet tui-code-snippet}
                 * @typedef {class} CustomEvents
                 */

                /**
                 * @typedef {object} TimeCreationGuide - Time creation guide instance to present selected time period
                 * @property {HTMLElement} guideElement - Guide element
                 * @property {Object.<string, HTMLElement>} guideElements - Map by key. It can be used in monthly view
                 * @property {function} clearGuideElement - Hide the creation guide
                 * @example
                 * calendar.on('beforeCreateSchedule', function(event) {
                 *     var guide = event.guide;
                 *     // Use guideEl$'s left, top to locate your schedule creation popup
                 *     var guideEl$ = guide.guideElement ?
                 *          guide.guideElement : guide.guideElements[Object.keys(guide.guideElements)[0]];
                 *
                 *     // After that call this to hide the creation guide
                 *     guide.clearGuideElement();
                 * });
                 */

                /**
                 * Calendar class
                 * @constructor
                 * @mixes CustomEvents
                 * @param {HTMLElement|string} container - The container element or selector id
                 * @param {Options} options - The calendar {@link Options} object
                 * @example
                 * var calendar = new tui.Calendar(document.getElementById('calendar'), {
                 *     defaultView: 'week',
                 *     taskView: true,    // Can be also ['milestone', 'task']
                 *     scheduleView: true,  // Can be also ['allday', 'time']
                 *     template: {
                 *         milestone: function(schedule) {
                 *             return '<span style="color:red;"><i class="fa fa-flag"></i> ' + schedule.title + '</span>';
                 *         },
                 *         milestoneTitle: function() {
                 *             return 'Milestone';
                 *         },
                 *         task: function(schedule) {
                 *             return '&nbsp;&nbsp;#' + schedule.title;
                 *         },
                 *         taskTitle: function() {
                 *             return '<label><input type="checkbox" />Task</label>';
                 *         },
                 *         allday: function(schedule) {
                 *             return schedule.title + ' <i class="fa fa-refresh"></i>';
                 *         },
                 *         alldayTitle: function() {
                 *             return 'All Day';
                 *         },
                 *         time: function(schedule) {
                 *             return schedule.title + ' <i class="fa fa-refresh"></i>' + schedule.start;
                 *         }
                 *     },
                 *     month: {
                 *         daynames: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                 *         startDayOfWeek: 0,
                 *         narrowWeekend: true
                 *     },
                 *     week: {
                 *         daynames: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                 *         startDayOfWeek: 0,
                 *         narrowWeekend: true
                 *     }
                 * });
                 */
                function Calendar(container, options) {
                    options = util.extend({
                        usageStatistics: true
                    }, options);

                    if (options.usageStatistics === true && util.sendHostname) {
                        util.sendHostname('calendar', GA_TRACKING_ID);
                    }

                    if (util.isString(container)) {
                        container = document.querySelector(container);
                    }

                    /**
                     * Calendar color map
                     * @type {object}
                     * @private
                     */
                    this._calendarColor = {};

                    /**
                     * Current rendered date
                     * @type {TZDate}
                     * @private
                     */
                    this._renderDate = datetime.start();

                    /**
                     * start and end date of weekly, monthly
                     * @type {object}
                     * @private
                     */
                    this._renderRange = {
                        start: null,
                        end: null
                    };

                    /**
                     * base controller
                     * @type {Base}
                     * @private
                     */
                    this._controller = _createController(options);
                    this._controller.setCalendars(options.calendars);

                    /**
                     * layout view (layout manager)
                     * @type {Layout}
                     * @private
                     */
                    this._layout = new Layout(container, this._controller.theme);

                    /**
                     * global drag handler
                     * @type {Drag}
                     * @private
                     */
                    this._dragHandler = new Drag({ distance: 10 }, this._layout.container);

                    /**
                     * current rendered view name. ('day', 'week', 'month')
                     * @type {string}
                     * @default 'week'
                     * @private
                     */
                    this._viewName = options.defaultView || 'week';

                    /**
                     * Refresh method. it can be ref different functions for each view modes.
                     * @type {function}
                     * @private
                     */
                    this._refreshMethod = null;

                    /**
                     * Scroll to now. It can be called for 'week', 'day' view modes.
                     * @type {function}
                     * @private
                     */
                    this._scrollToNowMethod = null;

                    /**
                     * It's true if Calendar.prototype.scrollToNow() is called.
                     * @type {boolean}
                     * @private
                     */
                    this._requestScrollToNow = false;

                    /**
                     * Open schedule creation popup
                     * @type {function}
                     * @private
                     */
                    this._openCreationPopup = null;

                    /**
                     * Hide the more view
                     * @type {function}
                     * @private
                     */
                    this._hideMoreView = null;

                    /**
                     * Unique id for requestAnimFrame()
                     * @type {number}
                     * @private
                     */
                    this._requestRender = 0;

                    /**
                     * calendar options
                     * @type {Options}
                     * @private
                     */
                    this._options = {};

                    this._initialize(options);
                }

                /**
                 * destroy calendar instance.
                 */
                Calendar.prototype.destroy = function () {
                    this._dragHandler.destroy();
                    this._controller.off();
                    this._layout.clear();
                    this._layout.destroy();

                    util.forEach(this._options.template, function (func, name) {
                        if (func) {
                            Handlebars.unregisterHelper(name + '-tmpl');
                        }
                    });

                    this._options = this._renderDate = this._controller =
                        this._layout = this._dragHandler = this._viewName =
                        this._refreshMethod = this._scrollToNowMethod = null;
                };

                /**
                 * Initialize calendar
                 * @param {Options} options - calendar options
                 * @private
                 */
                Calendar.prototype._initialize = function (options) {
                    var controller = this._controller,
                        viewName = this._viewName;

                    this._options = util.extend({
                        defaultView: viewName,
                        taskView: true,
                        scheduleView: true,
                        template: util.extend({
                            allday: null,
                            time: null
                        }, util.pick(options, 'template') || {}),
                        week: util.extend({}, util.pick(options, 'week') || {}),
                        month: util.extend({}, util.pick(options, 'month') || {}),
                        calendars: [],
                        useCreationPopup: false,
                        useDetailPopup: false,
                        timezones: options.timezones || [],
                        disableDblClick: false,
                        disableClick: false,
                        isReadOnly: false
                    }, options);

                    this._options.week = util.extend({
                        startDayOfWeek: 0,
                        workweek: false
                    }, util.pick(this._options, 'week') || {});

                    this._options.month = util.extend({
                        startDayOfWeek: 0,
                        workweek: false,
                        scheduleFilter: function (schedule) {
                            return Boolean(schedule.isVisible) &&
                                (schedule.category === 'allday' || schedule.category === 'time');
                        }
                    }, util.pick(options, 'month') || {});

                    if (this._options.isReadOnly) {
                        this._options.useCreationPopup = false;
                    }

                    this._layout.controller = controller;

                    this._setAdditionalInternalOptions(options);

                    this.changeView(viewName, true);
                };

                /**
                 * Set additional internal options
                 * 1. Register to the template handlebar
                 * 2. Update the calendar list and set the color of the calendar.
                 * 3. Change the primary timezone offset of the timezones.
                 * @param {Options} options - calendar options
                 * @private
                 */
                Calendar.prototype._setAdditionalInternalOptions = function (options) {
                    var timezones = options.timezones || [];

                    util.forEach(options.template, function (func, name) {
                        if (func) {
                            Handlebars.registerHelper(name + '-tmpl', func);
                        }
                    });

                    util.forEach(options.calendars || [], function (calendar) {
                        this.setCalendarColor(calendar.id, calendar, true);
                    }, this);

                    if (timezones.length) {
                        timezone.setOffsetByTimezoneOption(timezones[0].timezoneOffset);
                    }
                };

                /**********
                 * CRUD Methods
                 **********/

                /**
                 * Create schedules and render calendar.
                 * @param {Array.<Schedule>} schedules - {@link Schedule} data list
                 * @param {boolean} [silent=false] - no auto render after creation when set true
                 * @example
                 * calendar.createSchedules([
                 *     {
                 *         id: '1',
                 *         calendarId: '1',
                 *         title: 'my schedule',
                 *         category: 'time',
                 *         dueDateClass: '',
                 *         start: '2018-01-18T22:30:00+09:00',
                 *         end: '2018-01-19T02:30:00+09:00'
                 *     },
                 *     {
                 *         id: '2',
                 *         calendarId: '1',
                 *         title: 'second schedule',
                 *         category: 'time',
                 *         dueDateClass: '',
                 *         start: '2018-01-18T17:30:00+09:00',
                 *         end: '2018-01-19T17:31:00+09:00'
                 *     }
                 * ]);
                 */
                Calendar.prototype.createSchedules = function (schedules, silent) {
                    util.forEach(schedules, function (obj) {
                        this._setScheduleColor(obj.calendarId, obj);
                    }, this);

                    this._controller.createSchedules(schedules, silent);

                    if (!silent) {
                        this.render();
                    }
                };

                /**
                 * Get a {@link Schedule} object by schedule id and calendar id.
                 * @param {string} scheduleId - ID of schedule
                 * @param {string} calendarId - calendarId of the schedule
                 * @returns {Schedule} schedule object
                 * @example
                 * var schedule = calendar.getSchedule(scheduleId, calendarId);
                 * console.log(schedule.title);
                 */
                Calendar.prototype.getSchedule = function (scheduleId, calendarId) {
                    return this._controller.schedules.single(function (model) {
                        return model.id === scheduleId && model.calendarId === calendarId;
                    });
                };

                /**
                 * Update the schedule
                 * @param {string} scheduleId - ID of the original schedule to update
                 * @param {string} calendarId - The calendarId of the original schedule to update
                 * @param {object} changes - The {@link Schedule} properties and values with changes to update
                 * @param {boolean} [silent=false] - No auto render after creation when set true
                 * @example
                 * calendar.updateSchedule(schedule.id, schedule.calendarId, {
                 *     title: 'Changed schedule',
                 *     start: new Date('2019-11-05T09:00:00'),
                 *     end: new Date('2019-11-05T10:00:00'),
                 *     category: 'time'
                 * });
                 */
                Calendar.prototype.updateSchedule = function (scheduleId, calendarId, changes, silent) {
                    var ctrl = this._controller,
                        ownSchedules = ctrl.schedules,
                        schedule = ownSchedules.single(function (model) {
                            return model.id === scheduleId && model.calendarId === calendarId;
                        });
                    var hasChangedCalendar = false;

                    if (!changes || !schedule) {
                        return;
                    }

                    hasChangedCalendar = this._hasChangedCalendar(schedule, changes);
                    changes = hasChangedCalendar ?
                        this._setScheduleColor(changes.calendarId, changes) :
                        changes;

                    ctrl.updateSchedule(schedule, changes);

                    if (!silent) {
                        this.render();
                    }
                };

                Calendar.prototype._hasChangedCalendar = function (schedule, changes) {
                    return schedule &&
                        changes.calendarId &&
                        schedule.calendarId !== changes.calendarId;
                };

                Calendar.prototype._setScheduleColor = function (calendarId, schedule) {
                    var calColor = this._calendarColor;
                    var color = calColor[calendarId];

                    if (color) {
                        schedule.color = schedule.color || color.color;
                        schedule.bgColor = schedule.bgColor || color.bgColor;
                        schedule.borderColor = schedule.borderColor || color.borderColor;
                        schedule.dragBgColor = schedule.dragBgColor || color.dragBgColor;
                    }

                    return schedule;
                };

                /**
                 * Delete a schedule.
                 * @param {string} scheduleId - ID of schedule to delete
                 * @param {string} calendarId - The CalendarId of the schedule to delete
                 * @param {boolean} [silent=false] - No auto render after creation when set true
                 */
                Calendar.prototype.deleteSchedule = function (scheduleId, calendarId, silent) {
                    var ctrl = this._controller,
                        ownSchedules = ctrl.schedules,
                        schedule = ownSchedules.single(function (model) {
                            return model.id === scheduleId && model.calendarId === calendarId;
                        });

                    if (!schedule) {
                        return;
                    }

                    ctrl.deleteSchedule(schedule);
                    if (!silent) {
                        this.render();
                    }
                };

                /**********
                 * Private Methods
                 **********/

                /**
                 * @param {string|Date} date - The Date to show in calendar
                 * @param {number} [startDayOfWeek=0] - The Start day of week
                 * @param {boolean} [workweek=false] - The only show work week
                 * @returns {array} render range
                 * @private
                 */
                Calendar.prototype._getWeekDayRange = function (date, startDayOfWeek, workweek) {
                    var day;
                    var start;
                    var end;
                    var range;

                    startDayOfWeek = (startDayOfWeek || 0); // eslint-disable-line
                    date = util.isDate(date) ? date : new TZDate(date);
                    day = date.getDay();

                    // calculate default render range first.
                    start = new TZDate(date).addDate(-day + startDayOfWeek);

                    end = new TZDate(start).addDate(6);

                    if (day < startDayOfWeek) {
                        start = new TZDate(start).addDate(-7);
                        end = new TZDate(end).addDate(-7);
                    }

                    if (workweek) {
                        range = datetime.range(
                            datetime.start(start),
                            datetime.end(end),
                            datetime.MILLISECONDS_PER_DAY
                        );

                        range = util.filter(range, function (weekday) {
                            return !datetime.isWeekend(weekday.getDay());
                        });

                        start = range[0];
                        end = range[range.length - 1];
                    }

                    start = datetime.start(start);
                    end = datetime.start(end);

                    return [start, end];
                };

                /**
                 * Toggle schedules' visibility by calendar ID
                 * @param {string} calendarId - The calendar id value
                 * @param {boolean} toHide - Set true to hide schedules
                 * @param {boolean} [render=true] - set true then render after change visible property each models
                 */
                Calendar.prototype.toggleSchedules = function (calendarId, toHide, render) {
                    var ownSchedules = this._controller.schedules;

                    render = util.isExisty(render) ? render : true;
                    calendarId = util.isArray(calendarId) ? calendarId : [calendarId];

                    ownSchedules.each(function (schedule) {
                        if (~util.inArray(schedule.calendarId, calendarId)) {
                            schedule.set('isVisible', !toHide);
                        }
                    });

                    if (render) {
                        this.render();
                    }
                };

                /**********
                 * General Methods
                 **********/

                /**
                 * Render the calendar. The real rendering occurs after requestAnimationFrame.
                 * If you have to render immediately, use the 'immediately' parameter as true.
                 * @param {boolean} [immediately=false] - Render it immediately
                 * @example
                 * var silent = true;
                 * calendar.clear();
                 * calendar.createSchedules(schedules, silent);
                 * calendar.render();
                 * @example
                 * // Render a calendar when resizing a window.
                 * window.addEventListener('resize', function() {
                 *     calendar.render();
                 * });
                 */
                Calendar.prototype.render = function (immediately) {
                    if (this._requestRender) {
                        reqAnimFrame.cancelAnimFrame(this._requestRender);
                    }

                    if (immediately) {
                        this._renderFunc();
                    } else {
                        this._requestRender = reqAnimFrame.requestAnimFrame(this._renderFunc, this);
                    }
                };

                /**
                 * Render and refresh all layout and process requests.
                 * @private
                 */
                Calendar.prototype._renderFunc = function () {
                    if (this._refreshMethod) {
                        this._refreshMethod();
                    }
                    if (this._layout) {
                        this._layout.render();
                    }
                    if (this._scrollToNowMethod && this._requestScrollToNow) {
                        this._scrollToNowMethod();
                    }

                    this._requestScrollToNow = false;
                    this._requestRender = null;
                };

                /**
                 * Delete all schedules and clear view. The real rendering occurs after requestAnimationFrame.
                 * If you have to render immediately, use the 'immediately' parameter as true.
                 * @param {boolean} [immediately=false] - Render it immediately
                 * @example
                 * calendar.clear();
                 * calendar.createSchedules(schedules, true);
                 * calendar.render();
                 */
                Calendar.prototype.clear = function (immediately) {
                    this._controller.clearSchedules();
                    this.render(immediately);
                };

                /**
                 * Scroll to current time on today in case of daily, weekly view
                 * @example
                 * function onNewSchedules(schedules) {
                 *     calendar.createSchedules(schedules);
                 *     if (calendar.getViewName() !== 'month') {
                 *         calendar.scrollToNow();
                 *     }
                 * }
                 */
                Calendar.prototype.scrollToNow = function () {
                    if (this._scrollToNowMethod) {
                        this._requestScrollToNow = true;
                        // this._scrollToNowMethod() will be called at next frame rendering.
                    }
                };

                /**
                 * Move to today.
                 * @example
                 * function onClickTodayBtn() {
                 *     calendar.today();
                 * }
                 */
                Calendar.prototype.today = function () {
                    this._renderDate = datetime.start();

                    this._setViewName(this._viewName);
                    this.move();
                    this.render();
                };

                /**
                 * Move the calendar amount of offset value
                 * @param {number} offset - The offset value.
                 * @private
                 * @example
                 * // move previous week when "week" view.
                 * // move previous month when "month" view.
                 * calendar.move(-1);
                 */
                Calendar.prototype.move = function (offset) {
                    var renderDate = dw(datetime.start(this._renderDate)),
                        viewName = this._viewName,
                        view = this._getCurrentView(),
                        recursiveSet = _setOptionRecurseively,
                        startDate, endDate, tempDate,
                        startDayOfWeek, visibleWeeksCount, workweek, isAlways6Week, datetimeOptions;

                    offset = util.isExisty(offset) ? offset : 0;

                    if (viewName === 'month') {
                        startDayOfWeek = util.pick(this._options, 'month', 'startDayOfWeek') || 0;
                        visibleWeeksCount = mmin(util.pick(this._options, 'month', 'visibleWeeksCount') || 0, 6);
                        workweek = util.pick(this._options, 'month', 'workweek') || false;
                        isAlways6Week = util.pick(this._options, 'month', 'isAlways6Week');

                        if (visibleWeeksCount) {
                            datetimeOptions = {
                                startDayOfWeek: startDayOfWeek,
                                isAlways6Week: false,
                                visibleWeeksCount: visibleWeeksCount,
                                workweek: workweek
                            };

                            renderDate.addDate(offset * 7 * datetimeOptions.visibleWeeksCount);
                            tempDate = datetime.arr2dCalendar(renderDate.d, datetimeOptions);

                            recursiveSet(view, function (childView, opt) {
                                opt.renderMonth = new TZDate(renderDate.d);
                            });
                        } else {
                            datetimeOptions = {
                                startDayOfWeek: startDayOfWeek,
                                isAlways6Week: isAlways6Week,
                                workweek: workweek
                            };

                            renderDate.addMonth(offset);
                            tempDate = datetime.arr2dCalendar(renderDate.d, datetimeOptions);

                            recursiveSet(view, function (childView, opt) {
                                opt.renderMonth = new TZDate(renderDate.d);
                            });
                        }

                        startDate = tempDate[0][0];
                        endDate = tempDate[tempDate.length - 1][tempDate[tempDate.length - 1].length - 1];
                    } else if (viewName === 'week') {
                        renderDate.addDate(offset * 7);
                        startDayOfWeek = util.pick(this._options, 'week', 'startDayOfWeek') || 0;
                        workweek = util.pick(this._options, 'week', 'workweek') || false;
                        tempDate = this._getWeekDayRange(renderDate.d, startDayOfWeek, workweek);

                        startDate = tempDate[0];
                        endDate = tempDate[1];

                        recursiveSet(view, function (childView, opt) {
                            opt.renderStartDate = new TZDate(startDate);
                            opt.renderEndDate = new TZDate(endDate);

                            childView.setState({
                                collapsed: true
                            });
                        });
                    } else if (viewName === 'day') {
                        renderDate.addDate(offset);
                        startDate = datetime.start(renderDate.d);
                        endDate = datetime.end(renderDate.d);

                        recursiveSet(view, function (childView, opt) {
                            opt.renderStartDate = new TZDate(startDate);
                            opt.renderEndDate = new TZDate(endDate);

                            childView.setState({
                                collapsed: true
                            });
                        });
                    }

                    this._renderDate = renderDate.d;
                    this._renderRange = {
                        start: startDate,
                        end: endDate
                    };
                };

                /**
                 * Move to specific date
                 * @param {(Date|string)} date - The date to move
                 * @example
                 * calendar.on('clickDayname', function(event) {
                 *     if (calendar.getViewName() === 'week') {
                 *         calendar.setDate(new Date(event.date));
                 *         calendar.changeView('day', true);
                 *     }
                 * });
                 */
                Calendar.prototype.setDate = function (date) {
                    if (util.isString(date)) {
                        date = datetime.parse(date);
                    }

                    this._renderDate = new TZDate(date);
                    this._setViewName(this._viewName);
                    this.move(0);
                    this.render();
                };

                /**
                 * Move the calendar forward a day, a week, a month, 2 weeks, 3 weeks.
                 * @example
                 * function moveToNextOrPrevRange(val) {
                    if (val === -1) {
                        calendar.prev();
                    } else if (val === 1) {
                        calendar.next();
                    }
                }
                 */
                Calendar.prototype.next = function () {
                    this.move(1);
                    this.render();
                };

                /**
                 * Move the calendar backward a day, a week, a month, 2 weeks, 3 weeks.
                 * @example
                 * function moveToNextOrPrevRange(val) {
                    if (val === -1) {
                        calendar.prev();
                    } else if (val === 1) {
                        calendar.next();
                    }
                }
                 */
                Calendar.prototype.prev = function () {
                    this.move(-1);
                    this.render();
                };

                /**
                 * Return current rendered view.
                 * @returns {View} current view instance
                 * @private
                 */
                Calendar.prototype._getCurrentView = function () {
                    var viewName = this._viewName;

                    if (viewName === 'day') {
                        viewName = 'week';
                    }

                    return util.pick(this._layout.children.items, viewName);
                };

                /**
                 * Change calendar's schedule color with option
                 * @param {string} calendarId - The calendar ID
                 * @param {CalendarColor} option - The {@link CalendarColor} object
                 * @param {boolean} [silent=false] - No auto render after creation when set true
                 * @example
                 * calendar.setCalendarColor('1', {
                 *     color: '#e8e8e8',
                 *     bgColor: '#585858',
                 *     borderColor: '#a1b56c'
                 *     dragBgColor: '#585858',
                 * });
                 * calendar.setCalendarColor('2', {
                 *     color: '#282828',
                 *     bgColor: '#dc9656',
                 *     borderColor: '#a1b56c',
                 *     dragBgColor: '#dc9656',
                 * });
                 * calendar.setCalendarColor('3', {
                 *     color: '#a16946',
                 *     bgColor: '#ab4642',
                 *     borderColor: '#a1b56c',
                 *     dragBgColor: '#ab4642',
                 * });
                 */
                Calendar.prototype.setCalendarColor = function (calendarId, option, silent) {
                    var calColor = this._calendarColor,
                        ownSchedules = this._controller.schedules,
                        ownColor = calColor[calendarId];

                    if (!util.isObject(option)) {
                        config.throwError('Calendar#changeCalendarColor(): color 는 {color: \'\', bgColor: \'\'} 형태여야 합니다.');
                    }

                    ownColor = calColor[calendarId] = util.extend({
                        color: '#000',
                        bgColor: '#a1b56c',
                        borderColor: '#a1b56c',
                        dragBgColor: '#a1b56c'
                    }, option);

                    ownSchedules.each(function (model) {
                        if (model.calendarId !== calendarId) {
                            return;
                        }

                        model.color = ownColor.color;
                        model.bgColor = ownColor.bgColor;
                        model.borderColor = ownColor.borderColor;
                        model.dragBgColor = ownColor.dragBgColor;
                    });

                    if (!silent) {
                        this.render();
                    }
                };

                /**********
                 * Custom Events
                 **********/

                /**
                 * A bridge-based event handler for connecting a click handler to a user click event handler for each view
                 * @fires Calendar#clickSchedule
                 * @param {object} clickScheduleData - The event data of 'clickSchedule' handler
                 * @private
                 */
                Calendar.prototype._onClick = function (clickScheduleData) {
                    /**
                     * Fire this event when click a schedule.
                     * @event Calendar#clickSchedule
                     * @type {object}
                     * @property {Schedule} schedule - The {@link Schedule} instance
                     * @property {MouseEvent} event - MouseEvent
                     * @example
                     * calendar.on('clickSchedule', function(event) {
                     *     var schedule = event.schedule;
                     *
                     *     if (lastClickSchedule) {
                     *         calendar.updateSchedule(lastClickSchedule.id, lastClickSchedule.calendarId, {
                     *             isFocused: false
                     *         });
                     *     }
                     *     calendar.updateSchedule(schedule.id, schedule.calendarId, {
                     *         isFocused: true
                     *     });
                     *
                     *     lastClickSchedule = schedule;
                     *     // open detail view
                     * });
                     */
                    this.fire('clickSchedule', clickScheduleData);
                };

                /**
                 * A bridge-based event handler for connecting a click handler to a user click event handler for each view
                 * @fires Calendar#clickMore
                 * @param {object} clickMoreSchedule - The event data of 'clickMore' handler
                 * @private
                 */
                Calendar.prototype._onClickMore = function (clickMoreSchedule) {
                    /**
                     * Fire this event when click a schedule.
                     * @event Calendar#clickMore
                     * @type {object}
                     * @property {Date} date - The Clicked date
                     * @property {HTMLElement} target - The more element
                     * @example
                     * calendar.on('clickMore', function(event) {
                     *     console.log('clickMore', event.date, event.target);
                     * });
                     */
                    this.fire('clickMore', clickMoreSchedule);
                };

                /**
                 * dayname click event handler
                 * @fires Calendar#clickDayname
                 * @param {object} clickScheduleData - The event data of 'clickDayname' handler
                 * @private
                 */
                Calendar.prototype._onClickDayname = function (clickScheduleData) {
                    /**
                     * Fire this event when click a day name in weekly.
                     * @event Calendar#clickDayname
                     * @type {object}
                     * @property {string} date - The date string by format 'YYYY-MM-DD'
                     * @example
                     * calendar.on('clickDayname', function(event) {
                     *     if (calendar.getViewName() === 'week') {
                     *         calendar.setDate(new Date(event.date));
                     *         calendar.changeView('day', true);
                     *     }
                     * });
                     */
                    this.fire('clickDayname', clickScheduleData);
                };

                /**
                 * @fires {Calendar#n('beforeCreateSchedule', function}
                 * @param {object} createScheduleData - select schedule data from allday, time
                 * @private
                 */
                Calendar.prototype._onBeforeCreate = function (createScheduleData) {
                    if (this._options.useCreationPopup && !createScheduleData.useCreationPopup) {
                        if (this._showCreationPopup) {
                            this._showCreationPopup(createScheduleData);

                            return;
                        }
                    }
                    /**
                     * Fire this event when select time period in daily, weekly, monthly.
                     * @event Calendar#beforeCreateSchedule
                     * @type {object}
                     * @property {boolean} isAllDay - The allday schedule
                     * @property {Date} start - The selected start time
                     * @property {Date} end - The selected end time
                     * @property {TimeCreationGuide} guide - {@link TimeCreationGuide} instance
                     * @property {string} triggerEventName - The event name like 'click', 'dblclick'
                     * @example
                     * calendar.on('beforeCreateSchedule', function(event) {
                     *     var startTime = event.start;
                     *     var endTime = event.end;
                     *     var isAllDay = event.isAllDay;
                     *     var guide = event.guide;
                     *     var triggerEventName = event.triggerEventName;
                     *     var schedule;
                     *
                     *     if (triggerEventName === 'click') {
                     *         // open writing simple schedule popup
                     *         schedule = {...};
                     *     } else if (triggerEventName === 'dblclick') {
                     *         // open writing detail schedule popup
                     *         schedule = {...};
                     *     }
                     *
                     *     calendar.createSchedules([schedule]);
                     * });
                     */
                    this.fire('beforeCreateSchedule', createScheduleData);
                };

                /**
                 * @fires Calendar#beforeUpdateSchedule
                 * @param {object} updateScheduleData - update {@link Schedule} data
                 * @private
                 */
                Calendar.prototype._onBeforeUpdate = function (updateScheduleData) {
                    /**
                     * Fire this event when drag a schedule to change time in daily, weekly, monthly.
                     * @event Calendar#beforeUpdateSchedule
                     * @type {object}
                     * @property {Schedule} schedule - The original {@link Schedule} instance
                     * @property {object} changes - The {@link Schedule} properties and values with changes to update
                     * @property {Date} start - Deprecated: start time to update
                     * @property {Date} end - Deprecated: end time to update
                     * @example
                     * calendar.on('beforeUpdateSchedule', function(event) {
                     *     var schedule = event.schedule;
                     *     var changes = event.changes;
                     *
                     *     calendar.updateSchedule(schedule.id, schedule.calendarId, changes);
                     * });
                     */
                    this.fire('beforeUpdateSchedule', updateScheduleData);
                };

                /**
                 * @fires Calendar#beforeDeleteSchedule
                 * @param {object} deleteScheduleData - delete schedule data
                 * @private
                 */
                Calendar.prototype._onBeforeDelete = function (deleteScheduleData) {
                    /**
                     * Fire this event when delete a schedule.
                     * @event Calendar#beforeDeleteSchedule
                     * @type {object}
                     * @property {Schedule} schedule - The {@link Schedule} instance to delete
                     * @example
                     * calendar.on('beforeDeleteSchedule', function(event) {
                     *     var schedule = event.schedule;
                     *     alert('The schedule is removed.', schedule);
                     * });
                     */
                    this.fire('beforeDeleteSchedule', deleteScheduleData);
                };

                /**
                 * @fires Calendar#afterRenderSchedule
                 * @param {Schedule} scheduleData - The schedule data
                 * @private
                 */
                Calendar.prototype._onAfterRenderSchedule = function (scheduleData) {
                    /**
                     * Fire this event by every single schedule after rendering whole calendar.
                     * @event Calendar#afterRenderSchedule
                     * @type {object}
                     * @property {Schedule} schedule - A rendered {@link Schedule} instance
                     * @example
                     * calendar.on('afterRenderSchedule', function(event) {
                     *     var schedule = event.schedule;
                     *     var element = calendar.getElement(schedule.id, schedule.calendarId);
                     *     // use the element
                     *     console.log(element);
                     * });
                     */
                    this.fire('afterRenderSchedule', scheduleData);
                };

                /**
                 * @fires Calendar#clickTimezonesCollapseBtn
                 * @param {boolean} timezonesCollapsed - timezones collapsed flag
                 * @private
                 */
                Calendar.prototype._onClickTimezonesCollapseBtn = function (timezonesCollapsed) {
                    /**
                     * Fire this event by clicking timezones collapse button
                     * @event Calendar#clickTimezonesCollapseBtn
                     * @type {object}
                     * @property {boolean} timezonesCollapsed - The timezones collapes flag
                     * @example
                     * calendar.on('clickTimezonesCollapseBtn', function(timezonesCollapsed) {
                     *     console.log(timezonesCollapsed);
                     * });
                     */
                    this.fire('clickTimezonesCollapseBtn', timezonesCollapsed);
                };

                /**
                 * Toggle calendar factory class, main view, wallview event connection
                 * @param {boolean} isAttach - attach events if true.
                 * @param {Week|Month} view - Weekly view or Monthly view
                 * @private
                 */
                Calendar.prototype._toggleViewSchedule = function (isAttach, view) {
                    var self = this,
                        handler = view.handler,
                        method = isAttach ? 'on' : 'off';

                    util.forEach(handler.click, function (clickHandler) {
                        clickHandler[method]('clickSchedule', self._onClick, self);
                    });

                    util.forEach(handler.dayname, function (clickHandler) {
                        clickHandler[method]('clickDayname', self._onClickDayname, self);
                    });

                    util.forEach(handler.creation, function (creationHandler) {
                        creationHandler[method]('beforeCreateSchedule', self._onBeforeCreate, self);
                        creationHandler[method]('beforeDeleteSchedule', self._onBeforeDelete, self);
                    });

                    util.forEach(handler.move, function (moveHandler) {
                        moveHandler[method]('beforeUpdateSchedule', self._onBeforeUpdate, self);
                    });

                    util.forEach(handler.resize, function (resizeHandler) {
                        resizeHandler[method]('beforeUpdateSchedule', self._onBeforeUpdate, self);
                    });

                    // bypass events from view
                    view[method]('afterRenderSchedule', self._onAfterRenderSchedule, self);
                    view[method]('clickTimezonesCollapseBtn', self._onClickTimezonesCollapseBtn, self);
                    view[method]('clickMore', self._onClickMore, self);
                };

                /**
                 * Change current view with view name('day', 'week', 'month')
                 * @param {string} newViewName - The New view name to render
                 * @param {boolean} force - Force render despite of current view and new view are equal
                 * @example
                 * // daily view
                 * calendar.changeView('day', true);
                 *
                 * // weekly view
                 * calendar.changeView('week', true);
                 *
                 * // monthly view(default 6 weeks view)
                 * calendar.setOptions({month: {visibleWeeksCount: 6}}, true); // or null
                 * calendar.changeView('month', true);
                 *
                 * // 2 weeks monthly view
                 * calendar.setOptions({month: {visibleWeeksCount: 2}}, true);
                 * calendar.changeView('month', true);
                 *
                 * // 3 weeks monthly view
                 * calendar.setOptions({month: {visibleWeeksCount: 3}}, true);
                 * calendar.changeView('month', true);
                 *
                 * // narrow weekend
                 * calendar.setOptions({month: {narrowWeekend: true}}, true);
                 * calendar.setOptions({week: {narrowWeekend: true}}, true);
                 * calendar.changeView(calendar.getViewName(), true);
                 *
                 * // change start day of week(from monday)
                 * calendar.setOptions({week: {startDayOfWeek: 1}}, true);
                 * calendar.setOptions({month: {startDayOfWeek: 1}}, true);
                 * calendar.changeView(calendar.getViewName(), true);
                 *
                 * // work week
                 * calendar.setOptions({week: {workweek: true}}, true);
                 * calendar.setOptions({month: {workweek: true}}, true);
                 * calendar.changeView(calendar.getViewName(), true);
                 */
                Calendar.prototype.changeView = function (newViewName, force) {
                    var self = this,
                        layout = this._layout,
                        controller = this._controller,
                        dragHandler = this._dragHandler,
                        options = this._options,
                        viewName = this._viewName,
                        created;

                    if (!force && viewName === newViewName) {
                        return;
                    }

                    this._setViewName(newViewName);

                    // convert day to week
                    if (viewName === 'day') {
                        viewName = 'week';
                    }

                    if (newViewName === 'day') {
                        newViewName = 'week';
                    }
                    layout.children.doWhenHas(viewName, function (view) {
                        self._toggleViewSchedule(false, view);
                    });

                    layout.clear();

                    if (newViewName === 'month') {
                        created = _createMonthView(
                            controller,
                            layout.container,
                            dragHandler,
                            options
                        );
                    } else if (newViewName === 'week' || newViewName === 'day') {
                        created = _createWeekView(
                            controller,
                            layout.container,
                            dragHandler,
                            options,
                            this.getViewName()
                        );
                    }

                    layout.addChild(created.view);

                    layout.children.doWhenHas(newViewName, function (view) {
                        self._toggleViewSchedule(true, view);
                    });

                    this._refreshMethod = created.refresh;
                    this._scrollToNowMethod = created.scrollToNow;
                    this._openCreationPopup = created.openCreationPopup;
                    this._showCreationPopup = created.showCreationPopup;
                    this._hideMoreView = created.hideMoreView;

                    this.move();
                    this.render();
                };

                /**
                 * @deprecated
                 * Toggle task view('Milestone', 'Task') panel
                 * @param {boolean} enabled - use task view
                 * @example
                 * // There is no milestone, task, so hide those view panel
                 * calendar.toggleTaskView(false);
                 *
                 * // There are some milestone, task, so show those view panel.
                 * calendar.toggleTaskView(true);
                 */
                Calendar.prototype.toggleTaskView = function (enabled) {
                    var viewName = this._viewName,
                        options = this._options;

                    options.taskView = enabled;

                    this.changeView(viewName, true);
                };

                /**
                 * @deprecated
                 * Toggle schedule view('AllDay', TimeGrid') panel
                 * @param {boolean} enabled - use task view
                 * @example
                 * // hide those view panel to show only 'Milestone', 'Task'
                 * calendar.toggleScheduleView(false);
                 *
                 * // show those view panel.
                 * calendar.toggleScheduleView(true);
                 */
                Calendar.prototype.toggleScheduleView = function (enabled) {
                    var viewName = this._viewName,
                        options = this._options;

                    options.scheduleView = enabled;

                    this.changeView(viewName, true);
                };

                /**
                 * Set current view name
                 * @param {string} viewName - new view name to render
                 * @private
                 */
                Calendar.prototype._setViewName = function (viewName) {
                    this._viewName = viewName;
                };

                /**
                 * Get a schedule element by schedule id and calendar id.
                 * @param {string} scheduleId - ID of schedule
                 * @param {string} calendarId - calendarId of schedule
                 * @returns {HTMLElement} schedule element if found or null
                 * @example
                 * var element = calendar.getElement(scheduleId, calendarId);
                 * console.log(element);
                 */
                Calendar.prototype.getElement = function (scheduleId, calendarId) {
                    var schedule = this.getSchedule(scheduleId, calendarId);
                    if (schedule) {
                        return document.querySelector('[data-schedule-id="' + scheduleId + '"][data-calendar-id="' + calendarId + '"]');
                    }

                    return null;
                };

                /**
                 * Set a theme. If some keys are not defined in the preset, will be return.
                 * @param {object} theme - multiple styles map
                 * @returns {Array.<string>} keys - error keys not predefined.
                 * @example
                 * cal.setTheme({
                    'month.dayname.height': '31px',
                    'common.dayname.color': '#333',
                    'month.dayname.borderBottom': '1px solid #e5e5e5' // Not valid key  will be return.
                 * });
                 */
                Calendar.prototype.setTheme = function (theme) {
                    var result = this._controller.setTheme(theme);
                    this.render(true);

                    return result;
                };

                /**
                 * Set options of calendar
                 * @param {Options} options - set {@link Options}
                 * @param {boolean} [silent=false] - no auto render after creation when set true
                 */
                Calendar.prototype.setOptions = function (options, silent) {
                    util.forEach(options, function (value, name) {
                        if (util.isObject(value) && !util.isArray(value)) {
                            util.forEach(value, function (innerValue, innerName) {
                                this._options[name][innerName] = innerValue;
                            }, this);
                        } else {
                            this._options[name] = value;
                        }
                    }, this);

                    this._setAdditionalInternalOptions(options);

                    if (!silent) {
                        this.changeView(this._viewName, true);
                    }
                };

                /**
                 * Get current {@link Options}.
                 * @returns {Options} options
                 */
                Calendar.prototype.getOptions = function () {
                    return this._options;
                };

                /**
                 * Current rendered date ({@link TZDate} for further information)
                 * @returns {TZDate}
                 */
                Calendar.prototype.getDate = function () {
                    return this._renderDate;
                };

                /**
                 * Start time of rendered date range ({@link TZDate} for further information)
                 * @returns {TZDate}
                 */
                Calendar.prototype.getDateRangeStart = function () {
                    return this._renderRange.start;
                };

                /**
                 * End time of rendered date range ({@link TZDate} for further information)
                 * @returns {TZDate}
                 */
                Calendar.prototype.getDateRangeEnd = function () {
                    return this._renderRange.end;
                };

                /**
                 * Get current view name('day', 'week', 'month')
                 * @returns {string} view name
                 */
                Calendar.prototype.getViewName = function () {
                    return this._viewName;
                };

                /**
                 * Set calendar list
                 * @param {Array.<CalendarProps>} calendars - {@link CalendarProps} List
                 */
                Calendar.prototype.setCalendars = function (calendars) {
                    util.forEach(calendars || [], function (calendar) {
                        this.setCalendarColor(calendar.id, calendar, true);
                    }, this);

                    this._controller.setCalendars(calendars);

                    this.render();
                };

                /**
                 * Open schedule creation popup
                 * @param {Schedule} schedule - The preset {@link Schedule} data
                 */
                Calendar.prototype.openCreationPopup = function (schedule) {
                    if (this._openCreationPopup) {
                        this._openCreationPopup(schedule);
                    }
                };

                /**
                 * Hide the more view
                 */
                Calendar.prototype.hideMoreView = function () {
                    if (this._hideMoreView) {
                        this._hideMoreView();
                    }
                };

                /**
                 * Set timezone offset
                 * @param {number} offset - The offset (min)
                 * @static
                 * @deprecated
                 * @example
                 * var timezoneName = moment.tz.guess();
                 * tui.Calendar.setTimezoneOffset(moment.tz.zone(timezoneName).utcOffset(moment()));
                 */
                Calendar.setTimezoneOffset = function (offset) {
                    timezone.setOffset(offset);
                };

                /**
                 * Set a callback function to get timezone offset by timestamp
                 * @param {function} callback - The callback function
                 * @static
                 * @deprecated
                 * @example
                 * var timezoneName = moment.tz.guess();
                 * tui.Calendar.setTimezoneOffsetCallback(function(timestamp) {
                 *      return moment.tz.zone(timezoneName).utcOffset(timestamp));
                 * });
                 */
                Calendar.setTimezoneOffsetCallback = function (callback) {
                    timezone.setOffsetCallback(callback);
                };

                /**
                 * Create controller instance
                 * @returns {Base} controller instance
                 * @param {Options} options - calendar options
                 * @private
                 */
                function _createController(options) {
                    return controllerFactory(options);
                }

                /**
                 * Create week view instance by dependent module instances
                 * @param {Base} controller - controller
                 * @param {HTMLElement} container - container element
                 * @param {Drag} dragHandler - global drag handler
                 * @param {object} options - options for week view
                 * @param {string} viewName - 'week', 'day'
                 * @returns {Week} week view instance
                 * @private
                 */
                function _createWeekView(controller, container, dragHandler, options, viewName) {
                    return weekViewFactory(
                        controller,
                        container,
                        dragHandler,
                        options,
                        viewName
                    );
                }

                /**
                 * Create week view instance by dependent module instances
                 * @param {Base} controller - controller
                 * @param {HTMLElement} container - container element
                 * @param {Drag} dragHandler - global drag handler
                 * @param {object} options - options for week view
                 * @returns {Month} month view instance
                 * @private
                 */
                function _createMonthView(controller, container, dragHandler, options) {
                    return monthViewFactory(
                        controller,
                        container,
                        dragHandler,
                        options
                    );
                }

                /**
                 * Set child view's options recursively
                 * @param {View} view - parent view
                 * @param {function} func - option manipulate function
                 * @private
                 */
                function _setOptionRecurseively(view, func) {
                    view.recursive(function (childView) {
                        var opt = childView.options;

                        if (!opt) {
                            return;
                        }

                        func(childView, opt);
                    });
                }

                util.CustomEvents.mixin(Calendar);

                module.exports = Calendar;


                /***/
            }),

/***/ "./src/js/factory/controller.js":
/*!**************************************!*\
  !*** ./src/js/factory/controller.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Controller factory module.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var Base = __webpack_require__(/*! ../controller/base */ "./src/js/controller/base.js"),
                    Core = __webpack_require__(/*! ../controller/viewMixin/core */ "./src/js/controller/viewMixin/core.js"),
                    Week = __webpack_require__(/*! ../controller/viewMixin/week */ "./src/js/controller/viewMixin/week.js"),
                    Month = __webpack_require__(/*! ../controller/viewMixin/month */ "./src/js/controller/viewMixin/month.js");

                /**
                 * Mixin object. create object property to target and mix to that
                 * @param {object} from - source object
                 * @param {object} to - target object
                 * @param {string} propertyName - property name
                 */
                function mixin(from, to, propertyName) {
                    var obj = to[propertyName] = {};

                    util.forEach(from, function (method, methodName) {
                        obj[methodName] = util.bind(method, to);
                    });
                }

                /**
                 * @param {object} options - options for base controller
                 * @param {function} [options.groupFunc] - function for group each models {@see Collection#groupBy}
                 * @returns {Base} The controller instance.
                 */
                module.exports = function (options) {
                    var controller = new Base(options);

                    mixin(Core, controller, 'Core');
                    mixin(Week, controller, 'Week');
                    mixin(Month, controller, 'Month');

                    // for Theme
                    controller.Core.theme = controller.theme;
                    controller.Week.theme = controller.theme;
                    controller.Month.theme = controller.theme;

                    return controller;
                };


                /***/
            }),

/***/ "./src/js/factory/monthView.js":
/*!*************************************!*\
  !*** ./src/js/factory/monthView.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Month view factory module
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var config = __webpack_require__(/*! ../config */ "./src/js/config.js"),
                    array = __webpack_require__(/*! ../common/array */ "./src/js/common/array.js"),
                    datetime = __webpack_require__(/*! ../common/datetime */ "./src/js/common/datetime.js"),
                    domutil = __webpack_require__(/*! ../common/domutil */ "./src/js/common/domutil.js"),
                    common = __webpack_require__(/*! ../common/common */ "./src/js/common/common.js"),
                    Month = __webpack_require__(/*! ../view/month/month */ "./src/js/view/month/month.js"),
                    MonthClick = __webpack_require__(/*! ../handler/month/click */ "./src/js/handler/month/click.js"),
                    MonthCreation = __webpack_require__(/*! ../handler/month/creation */ "./src/js/handler/month/creation.js"),
                    MonthResize = __webpack_require__(/*! ../handler/month/resize */ "./src/js/handler/month/resize.js"),
                    MonthMove = __webpack_require__(/*! ../handler/month/move */ "./src/js/handler/month/move.js"),
                    More = __webpack_require__(/*! ../view/month/more */ "./src/js/view/month/more.js"),
                    ScheduleCreationPopup = __webpack_require__(/*! ../view/popup/scheduleCreationPopup */ "./src/js/view/popup/scheduleCreationPopup.js"),
                    ScheduleDetailPopup = __webpack_require__(/*! ../view/popup/scheduleDetailPopup */ "./src/js/view/popup/scheduleDetailPopup.js"),
                    Schedule = __webpack_require__(/*! ../model/schedule */ "./src/js/model/schedule.js");

                /**
                 * Get the view model for more layer
                 * @param {TZDate} date - date has more schedules
                 * @param {HTMLElement} target - target element
                 * @param {Collection} schedules - schedule collection
                 * @param {string[]} daynames - daynames to use upside of month more view
                 * @returns {object} view model
                 */
                function getViewModelForMoreLayer(date, target, schedules, daynames) {
                    schedules.each(function (schedule) {
                        var model = schedule.model;
                        schedule.hasMultiDates = !datetime.isSameDate(model.start, model.end);
                    });

                    return {
                        target: target,
                        date: datetime.format(date, 'YYYY.MM.DD'),
                        dayname: daynames[date.getDay()],
                        schedules: schedules.sort(array.compare.schedule.asc)
                    };
                }

                /**
                 * @param {Base} baseController - controller instance
                 * @param {HTMLElement} layoutContainer - container element for month view
                 * @param {Drag} dragHandler - drag handler instance
                 * @param {object} options - options
                 * @returns {object} view instance and refresh method
                 */
                function createMonthView(baseController, layoutContainer, dragHandler, options) {
                    var monthViewContainer, monthView, moreView, createView;
                    var clickHandler, creationHandler, resizeHandler, moveHandler, clearSchedulesHandler, onUpdateSchedule;
                    var onShowCreationPopup, onSaveNewSchedule, onShowEditPopup;
                    var detailView, onShowDetailPopup, onDeleteSchedule, onEditSchedule;

                    monthViewContainer = domutil.appendHTMLElement(
                        'div', layoutContainer, config.classname('month'));

                    monthView = new Month(options, monthViewContainer, baseController.Month);
                    moreView = new More(options.month, layoutContainer, baseController.theme);

                    // handlers
                    clickHandler = new MonthClick(dragHandler, monthView, baseController);
                    if (!options.isReadOnly) {
                        creationHandler = new MonthCreation(dragHandler, monthView, baseController, options);
                        resizeHandler = new MonthResize(dragHandler, monthView, baseController);
                        moveHandler = new MonthMove(dragHandler, monthView, baseController);
                    }

                    clearSchedulesHandler = function () {
                        if (moreView) {
                            moreView.hide();
                        }
                    };

                    onUpdateSchedule = function () {
                        if (moreView) {
                            moreView.refresh();
                        }
                    };

                    // binding +n click schedule
                    clickHandler.on('clickMore', function (clickMoreSchedule) {
                        var date = clickMoreSchedule.date,
                            target = clickMoreSchedule.target,
                            schedules = util.pick(baseController.findByDateRange(
                                datetime.start(date),
                                datetime.end(date)
                            ), clickMoreSchedule.ymd);

                        schedules.items = util.filter(schedules.items, function (item) {
                            return options.month.scheduleFilter(item.model);
                        });

                        if (schedules && schedules.length) {
                            moreView.render(getViewModelForMoreLayer(date, target, schedules, monthView.options.daynames));

                            schedules.each(function (scheduleViewModel) {
                                if (scheduleViewModel) {
                                    /**
                                     * @event More#afterRenderSchedule
                                     */
                                    monthView.fire('afterRenderSchedule', { schedule: scheduleViewModel.model });
                                }
                            });

                            monthView.fire('clickMore', {
                                date: clickMoreSchedule.date,
                                target: moreView.getMoreViewElement()
                            });
                        }
                    });

                    // binding popup for schedules creation
                    if (options.useCreationPopup) {
                        createView = new ScheduleCreationPopup(layoutContainer, baseController.calendars, options.usageStatistics);

                        onSaveNewSchedule = function (scheduleData) {
                            creationHandler.fire('beforeCreateSchedule', util.extend(scheduleData, {
                                useCreationPopup: true
                            }));
                        };
                        createView.on('beforeCreateSchedule', onSaveNewSchedule);
                    }

                    // binding popup for schedule detail
                    if (options.useDetailPopup) {
                        detailView = new ScheduleDetailPopup(layoutContainer, baseController.calendars);
                        onShowDetailPopup = function (eventData) {
                            var scheduleId = eventData.schedule.calendarId;
                            eventData.calendar = common.find(baseController.calendars, function (calendar) {
                                return calendar.id === scheduleId;
                            });

                            if (options.isReadOnly) {
                                eventData.schedule = util.extend({}, eventData.schedule, { isReadOnly: true });
                            }

                            detailView.render(eventData);
                        };
                        onDeleteSchedule = function (eventData) {
                            if (creationHandler) {
                                creationHandler.fire('beforeDeleteSchedule', eventData);
                            }
                        };
                        onEditSchedule = function (eventData) {
                            moveHandler.fire('beforeUpdateSchedule', eventData);
                        };

                        clickHandler.on('clickSchedule', onShowDetailPopup);

                        detailView.on('beforeDeleteSchedule', onDeleteSchedule);

                        if (options.useCreationPopup) {
                            onShowEditPopup = function (eventData) {
                                createView.setCalendars(baseController.calendars);
                                createView.render(eventData);
                            };
                            createView.on('beforeUpdateSchedule', onEditSchedule);
                            detailView.on('beforeUpdateSchedule', onShowEditPopup);
                        } else {
                            detailView.on('beforeUpdateSchedule', onEditSchedule);
                        }
                    }

                    // binding clear schedules
                    baseController.on('clearSchedules', clearSchedulesHandler);

                    // bind update schedule event
                    baseController.on('updateSchedule', onUpdateSchedule);

                    if (moveHandler) {
                        moveHandler.on('monthMoveStart_from_morelayer', function () {
                            moreView.hide();
                        });
                    }

                    monthView.handler = {
                        click: {
                            'default': clickHandler
                        }
                    };

                    if (!options.isReadOnly) {
                        monthView.handler = util.extend(monthView.handler, {
                            creation: {
                                'default': creationHandler
                            },
                            resize: {
                                'default': resizeHandler
                            },
                            move: {
                                'default': moveHandler
                            }
                        });
                    }

                    monthView._beforeDestroy = function () {
                        moreView.destroy();
                        baseController.off('clearSchedules', clearSchedulesHandler);
                        baseController.off('updateSchedule', onUpdateSchedule);

                        util.forEach(monthView.handler, function (type) {
                            util.forEach(type, function (handler) {
                                handler.off();
                                handler.destroy();
                            });
                        });

                        if (options.useCreationPopup && options.useDetailPopup) {
                            createView.off('beforeUpdateSchedule', onUpdateSchedule);
                        }

                        if (options.useCreationPopup) {
                            if (creationHandler) {
                                creationHandler.off('beforeCreateSchedule', onShowCreationPopup);
                            }
                            createView.off('saveSchedule', onSaveNewSchedule);
                            createView.destroy();
                        }

                        if (options.useDetailPopup) {
                            clickHandler.off('clickSchedule', onShowDetailPopup);
                            detailView.off('beforeUpdateSchedule', onUpdateSchedule);
                            detailView.off('beforeDeleteSchedule', onDeleteSchedule);
                            detailView.destroy();
                        }
                    };

                    // add controller
                    monthView.controller = baseController.Month;

                    return {
                        view: monthView,
                        refresh: function () {
                            monthView.vLayout.refresh();
                        },
                        openCreationPopup: function (schedule) {
                            if (createView && creationHandler) {
                                creationHandler.invokeCreationClick(Schedule.create(schedule));
                            }
                        },
                        showCreationPopup: function (eventData) {
                            if (createView) {
                                createView.setCalendars(baseController.calendars);
                                createView.render(eventData);
                            }
                        },
                        hideMoreView: function () {
                            if (moreView) {
                                moreView.hide();
                            }
                        }
                    };
                }

                module.exports = createMonthView;


                /***/
            }),

/***/ "./src/js/factory/weekView.js":
/*!************************************!*\
  !*** ./src/js/factory/weekView.js ***!
  \************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Factory module for WeekView
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var config = __webpack_require__(/*! ../config */ "./src/js/config.js");
                var domutil = __webpack_require__(/*! ../common/domutil */ "./src/js/common/domutil.js");
                var common = __webpack_require__(/*! ../common/common */ "./src/js/common/common.js");
                var VLayout = __webpack_require__(/*! ../common/vlayout */ "./src/js/common/vlayout.js");
                var reqAnimFrame = __webpack_require__(/*! ../common/reqAnimFrame */ "./src/js/common/reqAnimFrame.js");
                var Schedule = __webpack_require__(/*! ../model/schedule */ "./src/js/model/schedule.js");
                // Parent views
                var Week = __webpack_require__(/*! ../view/week/week */ "./src/js/view/week/week.js");

                // Sub views
                var DayName = __webpack_require__(/*! ../view/week/dayname */ "./src/js/view/week/dayname.js");
                var DayGrid = __webpack_require__(/*! ../view/week/dayGrid */ "./src/js/view/week/dayGrid.js");
                var TimeGrid = __webpack_require__(/*! ../view/week/timeGrid */ "./src/js/view/week/timeGrid.js");
                var ScheduleCreationPopup = __webpack_require__(/*! ../view/popup/scheduleCreationPopup */ "./src/js/view/popup/scheduleCreationPopup.js");
                var ScheduleDetailPopup = __webpack_require__(/*! ../view/popup/scheduleDetailPopup */ "./src/js/view/popup/scheduleDetailPopup.js");

                // Handlers
                var DayNameClick = __webpack_require__(/*! ../handler/time/clickDayname */ "./src/js/handler/time/clickDayname.js");
                var DayGridClick = __webpack_require__(/*! ../handler/daygrid/click */ "./src/js/handler/daygrid/click.js");
                var DayGridCreation = __webpack_require__(/*! ../handler/daygrid/creation */ "./src/js/handler/daygrid/creation.js");
                var DayGridMove = __webpack_require__(/*! ../handler/daygrid/move */ "./src/js/handler/daygrid/move.js");
                var DayGridResize = __webpack_require__(/*! ../handler/daygrid/resize */ "./src/js/handler/daygrid/resize.js");
                var TimeClick = __webpack_require__(/*! ../handler/time/click */ "./src/js/handler/time/click.js");
                var TimeCreation = __webpack_require__(/*! ../handler/time/creation */ "./src/js/handler/time/creation.js");
                var TimeMove = __webpack_require__(/*! ../handler/time/move */ "./src/js/handler/time/move.js");
                var TimeResize = __webpack_require__(/*! ../handler/time/resize */ "./src/js/handler/time/resize.js");

                var DAYGRID_HANDLDERS = {
                    'click': DayGridClick,
                    'creation': DayGridCreation,
                    'move': DayGridMove,
                    'resize': DayGridResize
                };
                var TIMEGRID_HANDLERS = {
                    'click': TimeClick,
                    'creation': TimeCreation,
                    'move': TimeMove,
                    'resize': TimeResize
                };
                var DEFAULT_PANELS = [
                    {
                        name: 'milestone',
                        type: 'daygrid',
                        minHeight: 20,
                        maxHeight: 80,
                        showExpandableButton: true,
                        maxExpandableHeight: 210,
                        handlers: ['click'],
                        show: true
                    },
                    {
                        name: 'task',
                        type: 'daygrid',
                        minHeight: 40,
                        maxHeight: 120,
                        showExpandableButton: true,
                        maxExpandableHeight: 210,
                        handlers: ['click', 'move'],
                        show: true
                    },
                    {
                        name: 'allday',
                        type: 'daygrid',
                        minHeight: 30,
                        maxHeight: 80,
                        showExpandableButton: true,
                        maxExpandableHeight: 210,
                        handlers: ['click', 'creation', 'move', 'resize'],
                        show: true
                    },
                    {
                        name: 'time',
                        type: 'timegrid',
                        autoHeight: true,
                        handlers: ['click', 'creation', 'move', 'resize'],
                        show: true
                    }
                ];

                /* eslint-disable complexity*/
                module.exports = function (baseController, layoutContainer, dragHandler, options, viewName) {
                    var panels = [],
                        vpanels = [];
                    var weekView, dayNameContainer, dayNameView, vLayoutContainer, vLayout;
                    var createView, onSaveNewSchedule, onSetCalendars, lastVPanel;
                    var detailView, onShowDetailPopup, onDeleteSchedule, onShowEditPopup, onEditSchedule;
                    var taskView = options.taskView;
                    var scheduleView = options.scheduleView;
                    var viewVisibilities = {
                        'milestone': util.isArray(taskView) ? util.inArray('milestone', taskView) >= 0 : taskView,
                        'task': util.isArray(taskView) ? util.inArray('task', taskView) >= 0 : taskView,
                        'allday': util.isArray(scheduleView) ? util.inArray('allday', scheduleView) >= 0 : scheduleView,
                        'time': util.isArray(scheduleView) ? util.inArray('time', scheduleView) >= 0 : scheduleView
                    };

                    // Make panels by view sequence and visibilities
                    util.forEach(DEFAULT_PANELS, function (panel) {
                        var name = panel.name;

                        panel = util.extend({}, panel);
                        panels.push(panel);

                        // Change visibilities
                        panel.show = viewVisibilities[name];

                        if (panel.show) {
                            if (vpanels.length) {
                                vpanels.push({
                                    isSplitter: true
                                });
                            }
                            vpanels.push(util.extend({}, panel));
                        }
                    });

                    if (vpanels.length) {
                        lastVPanel = vpanels[vpanels.length - 1];
                        lastVPanel.autoHeight = true;
                        lastVPanel.maxHeight = null;
                        lastVPanel.showExpandableButton = false;

                        util.forEach(panels, function (panel) {
                            if (panel.name === lastVPanel.name) {
                                panel.showExpandableButton = false;

                                return false;
                            }

                            return true;
                        });
                    }

                    util.extend(options.week, { panels: panels });

                    weekView = new Week(null, options.week, layoutContainer, panels, viewName);
                    weekView.handler = {
                        click: {},
                        dayname: {},
                        creation: {},
                        move: {},
                        resize: {}
                    };

                    dayNameContainer = domutil.appendHTMLElement('div', weekView.container, config.classname('dayname-layout'));

                    /**********
                     * Day name (top row(Mon, Tue, Wed...))
                     **********/
                    dayNameView = new DayName(options, dayNameContainer, baseController.theme);
                    weekView.handler.dayname.date = new DayNameClick(dragHandler, dayNameView, baseController);
                    weekView.addChild(dayNameView);

                    /**********
                     * Initialize vertical layout module
                     **********/
                    vLayoutContainer = domutil.appendHTMLElement('div', weekView.container, config.classname('vlayout-area'));
                    vLayoutContainer.style.height = (domutil.getSize(weekView.container)[1] - dayNameView.container.offsetHeight) + 'px';

                    vLayout = new VLayout({
                        panels: vpanels,
                        panelHeights: options.week.panelHeights || []
                    }, vLayoutContainer, baseController.theme);

                    weekView.vLayout = vLayout;

                    util.forEach(panels, function (panel) {
                        var name = panel.name;
                        var handlers = panel.handlers;
                        var view;

                        if (!panel.show) {
                            return;
                        }

                        if (panel.type === 'daygrid') {
                            /**********
                             * Schedule panel by Grid
                             **********/
                            view = new DayGrid(name, options, vLayout.getPanelByName(panel.name).container, baseController.theme);
                            view.on('afterRender', function (viewModel) {
                                vLayout.getPanelByName(name).setHeight(null, viewModel.height);
                            });

                            weekView.addChild(view);

                            util.forEach(handlers, function (type) {
                                if (!options.isReadOnly || type === 'click') {
                                    weekView.handler[type][name] =
                                        new DAYGRID_HANDLDERS[type](dragHandler, view, baseController, options);
                                    view.addHandler(type, weekView.handler[type][name], vLayout.getPanelByName(name));
                                }
                            });
                        } else if (panel.type === 'timegrid') {
                            /**********
                             * Schedule panel by TimeGrid
                             **********/
                            view = new TimeGrid(name, options, vLayout.getPanelByName(name).container);
                            weekView.addChild(view);
                            util.forEach(handlers, function (type) {
                                if (!options.isReadOnly || type === 'click') {
                                    weekView.handler[type][name] =
                                        new TIMEGRID_HANDLERS[type](dragHandler, view, baseController, options);
                                }
                            });

                            view.on('clickTimezonesCollapsedBtn', function () {
                                var timezonesCollapsed = !weekView.state.timezonesCollapsed;

                                weekView.setState({
                                    timezonesCollapsed: timezonesCollapsed
                                });
                                reqAnimFrame.requestAnimFrame(function () {
                                    if (!weekView.invoke('clickTimezonesCollapseBtn', timezonesCollapsed)) {
                                        weekView.render();
                                    }
                                });
                            });
                        }
                    });

                    vLayout.on('resize', function () {
                        reqAnimFrame.requestAnimFrame(function () {
                            weekView.render();
                        });
                    });

                    // binding create schedules event
                    if (options.useCreationPopup) {
                        createView = new ScheduleCreationPopup(layoutContainer, baseController.calendars, options.usageStatistics);

                        onSaveNewSchedule = function (scheduleData) {
                            util.extend(scheduleData, {
                                useCreationPopup: true
                            });
                            if (scheduleData.isAllDay) {
                                weekView.handler.creation.allday.fire('beforeCreateSchedule', scheduleData);
                            } else {
                                weekView.handler.creation.time.fire('beforeCreateSchedule', scheduleData);
                            }
                        };
                        createView.on('beforeCreateSchedule', onSaveNewSchedule);
                    }

                    onSetCalendars = function (calendars) {
                        if (createView) {
                            createView.setCalendars(calendars);
                        }
                    };

                    baseController.on('setCalendars', onSetCalendars);

                    // binding popup for schedule detail
                    if (options.useDetailPopup) {
                        detailView = new ScheduleDetailPopup(layoutContainer, baseController.calendars);
                        onShowDetailPopup = function (eventData) {
                            var scheduleId = eventData.schedule.calendarId;
                            eventData.calendar = common.find(baseController.calendars, function (calendar) {
                                return calendar.id === scheduleId;
                            });

                            if (options.isReadOnly) {
                                eventData.schedule = util.extend({}, eventData.schedule, { isReadOnly: true });
                            }

                            detailView.render(eventData);
                        };
                        onDeleteSchedule = function (eventData) {
                            if (eventData.isAllDay) {
                                weekView.handler.creation.allday.fire('beforeDeleteSchedule', eventData);
                            } else {
                                weekView.handler.creation.time.fire('beforeDeleteSchedule', eventData);
                            }
                        };
                        onEditSchedule = function (eventData) {
                            if (eventData.isAllDay) {
                                weekView.handler.move.allday.fire('beforeUpdateSchedule', eventData);
                            } else {
                                weekView.handler.move.time.fire('beforeUpdateSchedule', eventData);
                            }
                        };

                        util.forEach(weekView.handler.click, function (panel) {
                            panel.on('clickSchedule', onShowDetailPopup);
                        });
                        if (options.useCreationPopup) {
                            onShowEditPopup = function (eventData) {
                                var calendars = baseController.calendars;
                                eventData.isEditMode = true;
                                createView.setCalendars(calendars);
                                createView.render(eventData);
                            };
                            createView.on('beforeUpdateSchedule', onEditSchedule);
                            detailView.on('beforeUpdateSchedule', onShowEditPopup);
                        } else {
                            detailView.on('beforeUpdateSchedule', onEditSchedule);
                        }
                        detailView.on('beforeDeleteSchedule', onDeleteSchedule);
                    }

                    weekView.on('afterRender', function () {
                        vLayout.refresh();
                    });

                    // add controller
                    weekView.controller = baseController.Week;

                    // add destroy
                    weekView._beforeDestroy = function () {
                        util.forEach(weekView.handler, function (type) {
                            util.forEach(type, function (handler) {
                                handler.off();
                                handler.destroy();
                            });
                        });

                        if (options.useCreationPopup) {
                            createView.off('beforeCreateSchedule', onSaveNewSchedule);
                            createView.destroy();
                        }

                        if (options.useDetailPopup) {
                            detailView.off('beforeDeleteSchedule', onDeleteSchedule);
                            detailView.destroy();
                        }

                        weekView.off();
                    };

                    return {
                        view: weekView,
                        refresh: function () {
                            var weekViewHeight = weekView.getViewBound().height,
                                daynameViewHeight = domutil.getBCRect(
                                    dayNameView.container
                                ).height;

                            vLayout.container.style.height =
                                weekViewHeight - daynameViewHeight + 'px';
                            vLayout.refresh();
                        },
                        scrollToNow: function () {
                            weekView.children.each(function (childView) {
                                if (childView.scrollToNow) {
                                    childView.scrollToNow();
                                }
                            });
                        },
                        openCreationPopup: function (schedule) {
                            if (createView) {
                                if (schedule.isAllDay) {
                                    weekView.handler.creation.allday.invokeCreationClick(Schedule.create(schedule));
                                } else {
                                    weekView.handler.creation.time.invokeCreationClick(Schedule.create(schedule));
                                }
                            }
                        },
                        showCreationPopup: function (eventData) {
                            if (createView) {
                                createView.setCalendars(baseController.calendars);
                                createView.render(eventData);
                            }
                        }
                    };
                };


                /***/
            }),

/***/ "./src/js/handler/daygrid/click.js":
/*!*****************************************!*\
  !*** ./src/js/handler/daygrid/click.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Click handle module for daygrid schedules
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var config = __webpack_require__(/*! ../../config */ "./src/js/config.js");
                var domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js");
                var DayGridMove = __webpack_require__(/*! ./move */ "./src/js/handler/daygrid/move.js");

                /**
                 * @constructor
                 * @implements {Handler}
                 * @mixes CustomEvents
                 * @param {Drag} [dragHandler] - Drag handler instance.
                 * @param {DayGrid} [view] - daygrid view instance.
                 * @param {Base} [controller] - Base controller instance.
                 */
                function DayGridClick(dragHandler, view, controller) {
                    /**
                     * @type {Drag}
                     */
                    this.dragHandler = dragHandler;

                    /**
                     * @type {DayGrid}
                     */
                    this.view = view;

                    /**
                     * @type {Base}
                     */
                    this.controller = controller;

                    dragHandler.on({
                        'click': this._onClick
                    }, this);
                }

                /**
                 * Destroy handler module
                 */
                DayGridClick.prototype.destroy = function () {
                    this.dragHandler.off(this);
                    this.view = this.controller = this.dragHandler = null;
                };

                /**
                 * Check target element is expected condition for activate this plugins.
                 * @param {HTMLElement} target - The element to check
                 * @returns {string} - model id
                 */
                DayGridClick.prototype.checkExpectCondition = DayGridMove.prototype.checkExpectedCondition;

                /**
                 * Click event handler
                 * @param {object} clickEvent - click event data
                 * @emits DayGridClick#clickSchedule
                 * @emits DayGridClick#collapse
                 * @emits DayGridClick#expand
                 */
                DayGridClick.prototype._onClick = function (clickEvent) {
                    var self = this,
                        target = clickEvent.target,
                        dayGridScheduleView = this.checkExpectCondition(target),
                        scheduleCollection = this.controller.schedules,
                        collapseBtnElement = domutil.closest(
                            target,
                            config.classname('.weekday-collapse-btn')
                        ),
                        expandBtnElement = domutil.closest(
                            target,
                            config.classname('.weekday-exceed-in-week')
                        ),
                        containsTarget = this.view.container.contains(target);
                    var blockElement, scheduleElement;

                    if (!containsTarget) {
                        return;
                    }

                    if (collapseBtnElement) {
                        /**
                         * click collpase btn event
                         * @events DayGridClick#collapse
                         */
                        self.fire('collapse');

                        return;
                    }

                    if (expandBtnElement) {
                        this.view.setState({
                            clickedExpandBtnIndex: parseInt(domutil.getData(expandBtnElement, 'index'), 10)
                        });

                        /**
                         * click expand btn event
                         * @events DayGridClick#expand
                         */
                        self.fire('expand');

                        return;
                    }

                    if (!dayGridScheduleView) {
                        return;
                    }

                    scheduleElement = domutil.closest(target, config.classname('.weekday-schedule'));
                    if (scheduleElement) {
                        blockElement = domutil.closest(target, config.classname('.weekday-schedule-block'));
                        scheduleCollection.doWhenHas(domutil.getData(blockElement, 'id'), function (schedule) {
                            /**
                             * @events DayGridClick#clickSchedule
                             * @type {object}
                             * @property {Schedule} schedule - schedule instance
                             * @property {MouseEvent} event - MouseEvent object
                             */
                            self.fire('clickSchedule', {
                                schedule: schedule,
                                event: clickEvent.originEvent
                            });
                        });
                    }
                };

                util.CustomEvents.mixin(DayGridClick);

                module.exports = DayGridClick;


                /***/
            }),

/***/ "./src/js/handler/daygrid/core.js":
/*!****************************************!*\
  !*** ./src/js/handler/daygrid/core.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /* eslint no-shadow: 0 */
                /**
                 * @fileoverview Base mixin object for handler/daygrid
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js");
                var domevent = __webpack_require__(/*! ../../common/domevent */ "./src/js/common/domevent.js");
                var common = __webpack_require__(/*! ../../common/common */ "./src/js/common/common.js");
                var datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js");

                var mmax = Math.max,
                    mmin = Math.min;

                /**
                 * @mixin dayGridCore
                 */
                var dayGridCore = {
                    /**
                     * @param {view} view - view instance.
                     * @param {MouseEvent} mouseEvent - mouse schedule object.
                     * @returns {function|boolean} function that return schedule data by mouse events.
                     */
                    _retriveScheduleData: function (view, mouseEvent) {
                        var weekdayView = view.children.single(),
                            container,
                            datesInRange,
                            containerWidth,
                            mousePos,
                            dragStartXIndex,
                            grids,
                            range;

                        if (!weekdayView) {
                            return false;
                        }

                        container = weekdayView.container;
                        range = weekdayView.getRenderDateRange();
                        datesInRange = range.length;
                        grids = weekdayView.getRenderDateGrids();

                        containerWidth = domutil.getSize(container)[0];
                        mousePos = domevent.getMousePosition(mouseEvent, container);
                        dragStartXIndex = getX(grids, common.ratio(containerWidth, 100, mousePos[0]));

                        /**
                         * @param {MouseEvent} mouseEvent - mouse schedule in drag actions.
                         * @returns {object} schedule data.
                         */
                        return function (mouseEvent) {
                            var pos = domevent.getMousePosition(mouseEvent, container),
                                mouseX = pos[0],
                                xIndex = getX(grids, common.ratio(containerWidth, 100, mouseX));

                            // apply limitation of creation schedule X index.
                            xIndex = mmax(xIndex, 0);
                            xIndex = mmin(xIndex, datesInRange - 1);

                            return {
                                relatedView: view,
                                dragStartXIndex: dragStartXIndex,
                                datesInRange: datesInRange,
                                xIndex: xIndex,
                                triggerEvent: mouseEvent.type,
                                grids: grids,
                                range: range
                            };
                        };
                    },

                    /**
                     * @param {view} view - view instance.
                     * @param {TZDate} startDate - start date
                     * @returns {function|boolean} function that return schedule data by mouse events.
                     */
                    _retriveScheduleDataFromDate: function (view, startDate) {
                        var weekdayView = view.children.single(),
                            datesInRange,
                            dragStartXIndex = 0,
                            grids,
                            range;

                        if (!weekdayView) {
                            return false;
                        }

                        range = weekdayView.getRenderDateRange();
                        datesInRange = range.length;
                        grids = weekdayView.getRenderDateGrids();

                        util.forEach(range, function (date, index) {
                            if (datetime.isSameDate(date, startDate)) {
                                dragStartXIndex = index;
                            }
                        });

                        /**
                         * @param {TZDate} targetDate - target date
                         * @returns {object} schedule data.
                         */
                        return function (targetDate) {
                            var xIndex = 0;

                            util.forEach(range, function (date, index) {
                                if (datetime.isSameDate(date, targetDate)) {
                                    xIndex = index;
                                }
                            });

                            // apply limitation of creation schedule X index.
                            xIndex = mmax(xIndex, 0);
                            xIndex = mmin(xIndex, datesInRange - 1);

                            return {
                                relatedView: view,
                                dragStartXIndex: dragStartXIndex,
                                datesInRange: datesInRange,
                                xIndex: xIndex,
                                triggerEvent: 'manual',
                                grids: grids,
                                range: range
                            };
                        };
                    }
                };

                /**
                 * Get the left index
                 * @param {Array} grids - grid size information
                 * @param {number} left - left position(percent)
                 * @returns {number} grid left index
                 */
                function getX(grids, left) {
                    var i = 0;
                    var length = grids.length;
                    var grid;
                    if (left < 0) {
                        left = 0;
                    }

                    for (; i < length; i += 1) {
                        grid = grids[i];
                        if (grid.left <= left && left <= (grid.left + grid.width)) {
                            return i;
                        }
                    }

                    return i;
                }

                module.exports = dayGridCore;


                /***/
            }),

/***/ "./src/js/handler/daygrid/creation.js":
/*!********************************************!*\
  !*** ./src/js/handler/daygrid/creation.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Handler module for WeekdayInWeek view's creation actions.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var config = __webpack_require__(/*! ../../config */ "./src/js/config.js");
                var datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js");
                var common = __webpack_require__(/*! ../../common/common */ "./src/js/common/common.js");
                var domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js");
                var domevent = __webpack_require__(/*! ../../common/domevent */ "./src/js/common/domevent.js");
                var dayGridCore = __webpack_require__(/*! ./core */ "./src/js/handler/daygrid/core.js");
                var DayGridCreationGuide = __webpack_require__(/*! ./creationGuide */ "./src/js/handler/daygrid/creationGuide.js");
                var TZDate = __webpack_require__(/*! ../../common/timezone */ "./src/js/common/timezone.js").Date;

                var CLICK_DELAY = 300;

                /**
                 * @constructor
                 * @implements {Handler}
                 * @mixes dayGridCore
                 * @mixes CutomEvents
                 * @param {Drag} [dragHandler] - Drag handler instance.
                 * @param {DayGrid} [view] - DayGrid view instance.
                 * @param {Base} [controller] - Base controller instance.
                 * @param {Options} [options] - calendar Options
                 */
                function DayGridCreation(dragHandler, view, controller, options) {
                    /**
                     * Drag handler instance.
                     * @type {Drag}
                     */
                    this.dragHandler = dragHandler;

                    /**
                     * view instance.
                     * @type {DayGrid}
                     */
                    this.view = view;

                    /**
                     * Base controller instance.
                     * @type {Base}
                     */
                    this.controller = controller;

                    /**
                     * @type {function}
                     */
                    this.getScheduleDataFunc = null;

                    /**
                     * @type {DayGridCreationGuide}
                     */
                    this.guide = new DayGridCreationGuide(this);

                    /**
                     * @type {boolean}
                     */
                    this._requestOnClick = false;

                    /**
                     * @type {boolean}
                     */
                    this._disableDblClick = options.disableDblClick;

                    /**
                     * @type {boolean}
                     */
                    this._disableClick = options.disableClick;

                    dragHandler.on('dragStart', this._onDragStart, this);
                    dragHandler.on('click', this._onClick, this);

                    if (this._disableDblClick) {
                        CLICK_DELAY = 0;
                    } else {
                        domevent.on(view.container, 'dblclick', this._onDblClick, this);
                    }
                }

                /**
                 * Destroy method
                 */
                DayGridCreation.prototype.destroy = function () {
                    this.guide.destroy();
                    this.dragHandler.off(this);

                    if (this.view && this.view.container) {
                        domevent.off(this.view.container, 'dblclick', this._onDblClick, this);
                    }

                    this.dragHandler = this.view = this.controller = this.getScheduleDataFunc = null;
                };

                /**
                 * Check dragstart target is expected conditions for this handler.
                 * @param {HTMLElement} target - dragstart event handler's target element.
                 * @returns {boolean|WeekdayInWeek} return WeekdayInWeek view instance when satiate condition.
                 */
                DayGridCreation.prototype.checkExpectedCondition = function (target) {
                    var cssClass = domutil.getClass(target).trim();
                    var excludeTarget = true;
                    var matches, schedulesElement;

                    if (domutil.closest(target, config.classname('.weekday-exceed-in-week'))
                        || domutil.closest(target, config.classname('.weekday-collapse-btn'))
                    ) {
                        return false;
                    }

                    if (domutil.closest(target, config.classname('.weekday-schedule-block'), excludeTarget)) {
                        return false;
                    }

                    schedulesElement = domutil.closest(target, config.classname('.weekday-schedules'));
                    if (!schedulesElement && cssClass !== config.classname('weekday-schedules')) {
                        return false;
                    }

                    target = schedulesElement ? schedulesElement.parentNode : target.parentNode;
                    cssClass = domutil.getClass(target);
                    matches = cssClass.match(config.daygrid.getViewIDRegExp);

                    if (!matches || matches.length < 2) {
                        return false;
                    }

                    return util.pick(this.view.children.items, matches[1]);
                };

                /**
                 * Request schedule model creation to controller by custom schedules.
                 * @fires {DayGridCreation#beforeCreateSchedule}
                 * @param {object} scheduleData - schedule data from DayGridCreation module.
                 */
                DayGridCreation.prototype._createSchedule = function (scheduleData) {
                    var dateRange = scheduleData.range,
                        startXIndex = scheduleData.dragStartXIndex,
                        xIndex = scheduleData.xIndex,
                        start, end;

                    // when inverse start, end then change it.
                    if (xIndex < startXIndex) {
                        startXIndex = xIndex + startXIndex;
                        xIndex = startXIndex - xIndex;
                        startXIndex = startXIndex - xIndex;
                    }

                    start = new TZDate(dateRange[startXIndex]);
                    end = datetime.end(dateRange[xIndex]);

                    /**
                     * @event {DayGridCreation#beforeCreateSchedule}
                     * @type {object}
                     * @property {string} category - schedule category
                     * @property {boolean} isAllDay - whether schedule is fired in view area?
                     * @property {Date} start - select start time
                     * @property {Date} end - select end time
                     * @property {DayGridCreationGuide} guide - DayGridCreationGuide instance
                     * @property {string} triggerEventName - event name
                     */
                    this.fire('beforeCreateSchedule', {
                        category: this.view.options.viewName,
                        isAllDay: true,
                        start: start,
                        end: end,
                        guide: this.guide,
                        triggerEventName: scheduleData.triggerEvent
                    });
                };

                /**
                 * DragStart event handler method.
                 * @emits DayGridCreation#dragstart
                 * @param {object} dragStartEventData - Drag#dragStart event handler schedule data.
                 */
                DayGridCreation.prototype._onDragStart = function (dragStartEventData) {
                    var target = dragStartEventData.target,
                        result = this.checkExpectedCondition(target),
                        getScheduleDataFunc,
                        scheduleData;

                    if (!result) {
                        return;
                    }

                    this.dragHandler.on({
                        drag: this._onDrag,
                        dragEnd: this._onDragEnd
                    }, this);

                    getScheduleDataFunc = this._retriveScheduleData(this.view, dragStartEventData.originEvent);
                    this.getScheduleDataFunc = getScheduleDataFunc;

                    scheduleData = getScheduleDataFunc(dragStartEventData.originEvent);

                    /**
                     * @event DayGridCreation#dragstart
                     * @type {object}
                     * @property {DayGridView} relatedView - view instance.
                     * @property {number} datesInRange - date count of this view.
                     * @property {number} dragStartXIndex - index number of dragstart grid index.
                     * @property {number} xIndex - index number of mouse positions.
                     */
                    this.fire('dragstart', scheduleData);
                };

                /**
                 * Drag event handler method.
                 * @emits DayGridCreation#drag
                 * @param {object} dragEventData - Drag#drag event handler scheduledata.
                 */
                DayGridCreation.prototype._onDrag = function (dragEventData) {
                    var getScheduleDataFunc = this.getScheduleDataFunc,
                        scheduleData;

                    if (!getScheduleDataFunc) {
                        return;
                    }

                    scheduleData = getScheduleDataFunc(dragEventData.originEvent);

                    /**
                     * @event DayGridCreation#drag
                     * @type {object}
                     * @property {DayGridView} relatedView - view instance.
                     * @property {number} datesInRange - date count of this view.
                     * @property {number} dragStartXIndex - index number of dragstart grid index.
                     * @property {number} xIndex - index number of mouse positions.
                     */
                    this.fire('drag', scheduleData);
                };

                /**
                 * DragEnd event hander method.
                 * @emits DayGridCreation#dragend
                 * @param {object} dragEndEventData - Drag#dragEnd event handler data.
                 * @param {string} [overrideEventName] - override emitted event name when supplied.
                 */
                DayGridCreation.prototype._onDragEnd = function (dragEndEventData, overrideEventName) {
                    var getScheduleDataFunc = this.getScheduleDataFunc;
                    var scheduleData;

                    if (!getScheduleDataFunc) {
                        return;
                    }

                    this.dragHandler.off({
                        drag: this._onDrag,
                        dragEnd: this._onDragEnd
                    }, this);

                    scheduleData = getScheduleDataFunc(dragEndEventData.originEvent);

                    this._createSchedule(scheduleData);

                    /**
                     * @event DayGridCreation#dragend
                     * @type {object}
                     * @property {DayGridView} relatedView - view instance.
                     * @property {number} datesInRange - date count of this view.
                     * @property {number} dragStartXIndex - index number of dragstart grid index.
                     * @property {number} xIndex - index number of mouse positions.
                     */
                    this.fire(overrideEventName || 'dragend', scheduleData);

                    this.getScheduleDataFunc = null;
                };

                /**
                 * Click event handler method.
                 * @emits DayGridCreation#click
                 * @param {object} clickEventData - Drag#click event handler data.
                 */
                DayGridCreation.prototype._onClick = function (clickEventData) {
                    var self = this;
                    var getScheduleDataFunc, scheduleData;

                    if (!this.checkExpectedCondition(clickEventData.target) || this._disableClick) {
                        return;
                    }

                    getScheduleDataFunc = this._retriveScheduleData(this.view, clickEventData.originEvent);
                    scheduleData = getScheduleDataFunc(clickEventData.originEvent);

                    this._requestOnClick = true;
                    setTimeout(function () {
                        if (self._requestOnClick) {
                            self.fire('click', scheduleData);
                            self._createSchedule(scheduleData);
                        }
                        self._requestOnClick = false;
                    }, CLICK_DELAY);
                };

                /**
                 * Dblclick event handler method.
                 * @emits DayGridCreation#click
                 * @param {object} clickEventData - Drag#Click event handler data.
                 */
                DayGridCreation.prototype._onDblClick = function (clickEventData) {
                    var getScheduleDataFunc, scheduleData;

                    if (!this.checkExpectedCondition(clickEventData.target)) {
                        return;
                    }

                    getScheduleDataFunc = this._retriveScheduleData(this.view, clickEventData);
                    scheduleData = getScheduleDataFunc(clickEventData);

                    this.fire('click', scheduleData);

                    this._createSchedule(scheduleData);

                    this._requestOnClick = false;
                };

                /**
                 * Invoke creation click
                 * @param {Schedule} schedule - schedule instance
                 */
                DayGridCreation.prototype.invokeCreationClick = function (schedule) {
                    var getScheduleDataFunc, scheduleData;

                    getScheduleDataFunc = this._retriveScheduleDataFromDate(this.view, schedule.start);
                    scheduleData = getScheduleDataFunc(schedule.start);

                    this.fire('click', scheduleData);

                    this._createSchedule(scheduleData);
                };

                common.mixin(dayGridCore, DayGridCreation);
                util.CustomEvents.mixin(DayGridCreation);

                module.exports = DayGridCreation;


                /***/
            }),

/***/ "./src/js/handler/daygrid/creationGuide.js":
/*!*************************************************!*\
  !*** ./src/js/handler/daygrid/creationGuide.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Guide element for DayGrid.Creation
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var config = __webpack_require__(/*! ../../config */ "./src/js/config.js");
                var domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js");
                var reqAnimFrame = __webpack_require__(/*! ../../common/reqAnimFrame */ "./src/js/common/reqAnimFrame.js");

                /**
                 * Class for DayGrid.Creation dragging effect.
                 * @constructor
                 * @param {DayGridCreation} creation - instance of DayGridCreation.
                 */
                function DayGridCreationGuide(creation) {
                    /**
                     * @type {DayGridCreation}
                     */
                    this.creation = creation;

                    /**
                     * @type {HTMLDIVElement}
                     */
                    this.scheduleContainer = null;

                    /**
                     * @type {HTMLDIVElement}
                     */
                    this.guideElement = document.createElement('div');

                    this.initializeGuideElement();
                    this.applyTheme(creation.controller.theme);

                    creation.on({
                        dragstart: this._createGuideElement,
                        drag: this._onDrag,
                        click: this._createGuideElement
                    }, this);
                }

                /**
                 * Destroy method
                 */
                DayGridCreationGuide.prototype.destroy = function () {
                    this.clearGuideElement();
                    this.creation.off(this);
                    this.creation = this.scheduleContainer = this.guideElement = null;
                };

                /**
                 * initialize guide element's default style.
                 */
                DayGridCreationGuide.prototype.initializeGuideElement = function () {
                    domutil.addClass(this.guideElement, config.classname('daygrid-guide-creation-block'));
                };

                /**
                 * Drag event handler
                 * @param {object} scheduleData - schedule data from DayGrid.Creation handler.
                 */
                DayGridCreationGuide.prototype._onDrag = function (scheduleData) {
                    this._refreshGuideElement(scheduleData, true);
                };

                /**
                 * Get element width based on narrowWeekend
                 * @param {number} dragStartIndex - grid start index
                 * @param {number} dragEndIndex - grid end index
                 * @param {Array} grids - dates information
                 * @returns {number} element width
                 */
                DayGridCreationGuide.prototype._getGuideWidth = function (dragStartIndex, dragEndIndex, grids) {
                    var width = 0;
                    var i = dragStartIndex;
                    for (; i <= dragEndIndex; i += 1) {
                        width += grids[i] ? grids[i].width : 0;
                    }

                    return width;
                };

                /**
                 * Refresh guide element.
                 * @param {object} scheduleData - schedule data from DayGrid.Creation handler.
                 * @param {boolean} defer - If set to true, set style in the next frame
                 */
                DayGridCreationGuide.prototype._refreshGuideElement = function (scheduleData, defer) {
                    var guideElement = this.guideElement,
                        data = scheduleData,
                        dragStartXIndex = data.dragStartXIndex < data.xIndex ? data.dragStartXIndex : data.xIndex,
                        dragEndXIndex = data.dragStartXIndex < data.xIndex ? data.xIndex : data.dragStartXIndex,
                        leftPercent,
                        widthPercent;

                    leftPercent = data.grids[dragStartXIndex] ? data.grids[dragStartXIndex].left : 0;
                    widthPercent = this._getGuideWidth(dragStartXIndex, dragEndXIndex, data.grids);

                    /** eslint-disable require-jsdoc */
                    function setStyle() {
                        guideElement.style.display = 'block';
                        guideElement.style.left = leftPercent + '%';
                        guideElement.style.width = widthPercent + '%';
                    }

                    if (defer) {
                        reqAnimFrame.requestAnimFrame(setStyle);
                    } else {
                        setStyle();
                    }
                };

                /**
                 * Clear guide element.
                 */
                DayGridCreationGuide.prototype.clearGuideElement = function () {
                    var guideElement = this.guideElement;

                    domutil.remove(guideElement);

                    guideElement.style.display = 'none';
                    guideElement.style.left = '';
                    guideElement.style.width = '';
                };

                /**
                 * Create guide element
                 * @param {object} dragStartEventData - schedule data object of DayGrid.Creation.
                 */
                DayGridCreationGuide.prototype._createGuideElement = function (dragStartEventData) {
                    var creation = this.creation,
                        view = creation.view,
                        container = view.container,
                        scheduleContainer = domutil.find(config.classname('.weekday-grid'), container);

                    scheduleContainer.appendChild(this.guideElement);
                    this._refreshGuideElement(dragStartEventData);
                };

                /**
                 * Drag event handler.
                 * @param {object} dragEventData - event data object of DayGrid.Creation.
                 */
                DayGridCreationGuide.prototype._onDrag = function (dragEventData) {
                    this._refreshGuideElement(dragEventData);
                };

                DayGridCreationGuide.prototype.applyTheme = function (theme) {
                    var style = this.guideElement.style;

                    style.backgroundColor = theme.common.creationGuide.backgroundColor;
                    style.border = theme.common.creationGuide.border;
                };

                module.exports = DayGridCreationGuide;


                /***/
            }),

/***/ "./src/js/handler/daygrid/move.js":
/*!****************************************!*\
  !*** ./src/js/handler/daygrid/move.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Move handler for DayGrid view.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var config = __webpack_require__(/*! ../../config */ "./src/js/config.js");
                var common = __webpack_require__(/*! ../../common/common */ "./src/js/common/common.js");
                var domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js");
                var dayGridCore = __webpack_require__(/*! ./core */ "./src/js/handler/daygrid/core.js");
                var DayGridMoveGuide = __webpack_require__(/*! ./moveGuide */ "./src/js/handler/daygrid/moveGuide.js");
                var TZDate = __webpack_require__(/*! ../../common/timezone */ "./src/js/common/timezone.js").Date;

                /**
                 * @constructor
                 * @implements {Handler}
                 * @mixes dayGridCore
                 * @mixes CustomEvents
                 * @param {Drag} dragHandler - Drag handler instance.
                 * @param {DayGrid} view - view instance.
                 * @param {Base} controller - Base controller instance.
                 */
                function DayGridMove(dragHandler, view, controller) {
                    /**
                     * Drag handler instance.
                     * @type {Drag}
                     */
                    this.dragHandler = dragHandler;

                    /**
                     * view instance.
                     * @type {DayGrid}
                     */
                    this.view = view;

                    /**
                     * Base controller instance.
                     * @type {Base}
                     */
                    this.controller = controller;

                    /**
                     * Temporary variable for dragstart event data.
                     * @type {object}
                     */
                    this._dragStart = null;

                    dragHandler.on({
                        dragStart: this._onDragStart
                    }, this);

                    /**
                     * @type {DayGridMoveGuide}
                     */
                    this.guide = new DayGridMoveGuide(this);
                }

                DayGridMove.prototype.destroy = function () {
                    this.guide.destroy();
                    this.dragHandler.off(this);
                    this.dragHandler = this.view = this.controller =
                        this.guide = this._dragStart = null;
                };

                /**
                 * Check dragstart target is expected conditions for this handler.
                 * @param {HTMLElement} target - dragstart event handler's target element.
                 * @returns {boolean|DayGridSchedule} return DayGridSchedule view instance when satiate condition.
                 */
                DayGridMove.prototype.checkExpectedCondition = function (target) {
                    var cssClass = domutil.getClass(target),
                        parentView,
                        matches;

                    if (~cssClass.indexOf(config.classname('weekday-resize-handle'))) {
                        return false;
                    }

                    parentView = domutil.closest(target, config.classname('.weekday'));

                    if (!parentView) {
                        return false;
                    }

                    cssClass = domutil.getClass(parentView);
                    matches = cssClass.match(config.daygrid.getViewIDRegExp);

                    if (!matches || matches.length < 2) {
                        return false;
                    }

                    return util.pick(this.view.children.items, matches[1]);
                };

                /**
                 * DragStart event handler method.
                 * @emits DayGridMove#dragstart
                 * @param {object} dragStartEventData - Drag#dragStart event handler event data.
                 */
                DayGridMove.prototype._onDragStart = function (dragStartEventData) {
                    var target = dragStartEventData.target,
                        result = this.checkExpectedCondition(target),
                        controller = this.controller,
                        excludeTarget = true,
                        scheduleBlockElement,
                        modelID,
                        targetModel,
                        getScheduleDataFunc,
                        scheduleData;

                    if (!result) {
                        return;
                    }

                    scheduleBlockElement = domutil.closest(target, config.classname('.weekday-schedule-block'), excludeTarget);
                    if (!scheduleBlockElement) {
                        return;
                    }

                    modelID = domutil.getData(scheduleBlockElement, 'id');
                    targetModel = controller.schedules.items[modelID];

                    if (!targetModel) {
                        return;
                    }

                    if (targetModel.isReadOnly) {
                        return;
                    }

                    getScheduleDataFunc = this._retriveScheduleData(this.view, dragStartEventData.originEvent);
                    this.getScheduleDataFunc = getScheduleDataFunc;
                    scheduleData = this._dragStart = getScheduleDataFunc(dragStartEventData.originEvent);

                    util.extend(scheduleData, {
                        scheduleBlockElement: scheduleBlockElement,
                        model: targetModel
                    });

                    this.dragHandler.on({
                        drag: this._onDrag,
                        dragEnd: this._onDragEnd,
                        click: this._onClick
                    }, this);

                    /**
                     * @event DayGridMove#dragstart
                     * @type {object}
                     * @property {DayGrid} relatedView - view instance.
                     * @property {number} datesInRange - date count of this view.
                     * @property {number} dragStartXIndex - index number of dragstart grid index.
                     * @property {number} xIndex - index number of mouse positions.
                     * @property {Schedule} model - data object of model isntance.
                     * @property {HTMLDivElement} scheduleBlockElement - target schedule block element.
                     */
                    this.fire('dragstart', scheduleData);
                };

                /**
                 * Drag event handler method.
                 * @emits DayGridMove#drag
                 * @param {object} dragEventData - Drag#drag event handler eventdata.
                 */
                DayGridMove.prototype._onDrag = function (dragEventData) {
                    var getScheduleDataFunc = this.getScheduleDataFunc;

                    if (!getScheduleDataFunc) {
                        return;
                    }

                    /**
                     * @schedule DayGridMove#drag
                     * @type {object}
                     * @property {DayGrid} relatedView - view instance.
                     * @property {number} datesInRange - date count of this view.
                     * @property {number} dragStartXIndex - index number of dragstart grid index.
                     * @property {number} xIndex - index number of mouse positions.
                     */
                    this.fire('drag', getScheduleDataFunc(dragEventData.originEvent));
                };

                /**
                 * Request update schedule model to base controller.
                 * @fires DayGridMove#beforeUpdateSchedule
                 * @param {object} scheduleData - schedule data from DayGridMove handler module.
                 */
                DayGridMove.prototype._updateSchedule = function (scheduleData) {
                    var schedule = scheduleData.targetModel,
                        dateOffset = scheduleData.xIndex - scheduleData.dragStartXIndex,
                        newStarts = new TZDate(schedule.start),
                        newEnds = new TZDate(schedule.end);

                    newStarts = newStarts.addDate(dateOffset);
                    newEnds = newEnds.addDate(dateOffset);

                    /**
                     * @event DayGridMove#beforeUpdateSchedule
                     * @type {object}
                     * @property {Schedule} schedule - The original schedule instance
                     * @property {Date} start - Deprecated: start time to update
                     * @property {Date} end - Deprecated: end time to update
                     * @property {object} changes - start and end time to update
                     *  @property {Date} start - start time to update
                     *  @property {Date} end - end time to update
                     */
                    this.fire('beforeUpdateSchedule', {
                        schedule: schedule,
                        changes: {
                            start: newStarts,
                            end: newEnds
                        },
                        start: newStarts,
                        end: newEnds
                    });
                };

                /**
                 * DragEnd event hander method.
                 * @emits DayGridMove#dragend
                 * @param {object} dragEndEventData - Drag#DragEnd event handler data.
                 * @param {string} [overrideEventName] - override emitted event name when supplied.
                 * @param {?boolean} skipUpdate - true then skip update schedule model.
                 */
                DayGridMove.prototype._onDragEnd = function (dragEndEventData, overrideEventName, skipUpdate) {
                    var getScheduleDataFunc = this.getScheduleDataFunc,
                        dragStart = this._dragStart,
                        scheduleData;

                    if (!getScheduleDataFunc || !dragStart) {
                        return;
                    }

                    this.dragHandler.off({
                        drag: this._onDrag,
                        dragEnd: this._onDragEnd,
                        click: this._onClick
                    }, this);

                    scheduleData = getScheduleDataFunc(dragEndEventData.originEvent);
                    util.extend(scheduleData, {
                        targetModel: dragStart.model
                    });

                    if (!skipUpdate) {
                        this._updateSchedule(scheduleData);
                    }

                    /**
                     * @event DayGridMove#dragend
                     * @type {object}
                     * @property {DayGrid} relatedView - view instance.
                     * @property {number} datesInRange - date count of this view.
                     * @property {number} dragStartXIndex - index number of dragstart grid index.
                     * @property {number} xIndex - index number of mouse positions.
                     */
                    this.fire(overrideEventName || 'dragend', scheduleData);

                    this.getScheduleDataFunc = this._dragStart = null;
                };

                /**
                 * Click event handler method.
                 * @emits DayGridMove#click
                 * @param {object} clickEventData - Drag#Click event handler data.
                 */
                DayGridMove.prototype._onClick = function (clickEventData) {
                    /**
                     * @event DayGridMove#click
                     * @type {object}
                     * @property {DayGrid} relatedView - view instance.
                     * @property {number} datesInRange - date count of this view.
                     * @property {number} dragStartXIndex - index number of dragstart grid index.
                     * @property {number} xIndex - index number of mouse positions.
                     */
                    this._onDragEnd(clickEventData, 'click', true);
                };

                common.mixin(dayGridCore, DayGridMove);
                util.CustomEvents.mixin(DayGridMove);

                module.exports = DayGridMove;


                /***/
            }),

/***/ "./src/js/handler/daygrid/moveGuide.js":
/*!*********************************************!*\
  !*** ./src/js/handler/daygrid/moveGuide.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
/* WEBPACK VAR INJECTION */(function (global) {/**
 * @fileoverview Effect module for DayGrid.Move
 * @author NHN FE Development Lab <dl_javascript@nhn.com>
 */


                    var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                    var config = __webpack_require__(/*! ../../config */ "./src/js/config.js");
                    var datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js");
                    var domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js");
                    var reqAnimFrame = __webpack_require__(/*! ../../common/reqAnimFrame */ "./src/js/common/reqAnimFrame.js");

                    /**
                     * Class for DayGrid.Move dragging effect.
                     * @constructor
                     * @param {DayGridMove} daygridMove - instance of DayGridMove.
                     */
                    function DayGridMoveGuide(daygridMove) {
                        /**
                         * @type {DayGridMove}
                         */
                        this.daygridMove = daygridMove;

                        /**
                         * The element that actually contains the event element
                         * @type {HTMLDIVElement}
                         */
                        this.scheduleContainer = null;

                        /**
                         * @type {number}
                         */
                        this._dragStartXIndex = null;

                        /**
                         * @type {HTMLDIVElement}
                         */
                        this.guideElement = null;

                        /**
                         * @type {HTMLElement[]}
                         */
                        this.elements = null;

                        daygridMove.on({
                            'dragstart': this._onDragStart,
                            'drag': this._onDrag,
                            'dragend': this._clearGuideElement,
                            'click': this._clearGuideElement
                        }, this);
                    }

                    /**
                     * Destroy method
                     */
                    DayGridMoveGuide.prototype.destroy = function () {
                        this._clearGuideElement();
                        this.daygridMove.off(this);
                        this.daygridMove = this.scheduleContainer = this._dragStartXIndex =
                            this.elements = this.guideElement = null;
                    };

                    /**
                     * Clear guide element.
                     */
                    DayGridMoveGuide.prototype._clearGuideElement = function () {
                        this._showOriginScheduleBlocks();

                        domutil.remove(this.guideElement);

                        if (!util.browser.msie) {
                            domutil.removeClass(global.document.body, config.classname('dragging'));
                        }

                        this._dragStartXIndex = this.getScheduleDataFunc = this.guideElement = null;
                    };

                    /**
                     * Dim element blocks
                     * @param {number} modelID - Schedule model instance ID
                     */
                    DayGridMoveGuide.prototype._hideOriginScheduleBlocks = function (modelID) {
                        var className = config.classname('weekday-schedule-block-dragging-dim');
                        var scheduleBlocks = domutil.find(
                            config.classname('.weekday-schedule-block'),
                            this.daygridMove.view.container,
                            true
                        );

                        this.elements = util.filter(scheduleBlocks, function (schedule) {
                            return domutil.getData(schedule, 'id') === modelID;
                        });

                        util.forEach(this.elements, function (el) {
                            domutil.addClass(el, className);
                        });
                    };

                    /**
                     * Show element blocks
                     */
                    DayGridMoveGuide.prototype._showOriginScheduleBlocks = function () {
                        var className = config.classname('weekday-schedule-block-dragging-dim');

                        util.forEach(this.elements, function (el) {
                            domutil.removeClass(el, className);
                        });
                    };

                    /**
                     * Highlight element blocks
                     * @param {Schedule} model - model
                     * @param {HTMLElement} parent - parent element
                     */
                    DayGridMoveGuide.prototype._highlightScheduleBlocks = function (model, parent) {
                        var elements = domutil.find(config.classname('.weekday-schedule'), parent, true);

                        util.forEach(elements, function (el) {
                            el.style.margin = '0';

                            if (!model.isFocused) {
                                el.style.backgroundColor = model.dragBgColor;
                                el.style.borderLeftColor = model.borderColor;
                                el.style.color = '#ffffff';
                            }
                        });
                    };

                    /**
                     * Refresh guide element.
                     * @param {number} leftPercent - left percent of guide element.
                     * @param {number} widthPercent - width percent of guide element.
                     * @param {boolean} isExceededLeft - schedule start is faster then render start date?
                     * @param {boolean} isExceededRight - schedule end is later then render end date?
                     */
                    DayGridMoveGuide.prototype.refreshGuideElement = function (leftPercent, widthPercent, isExceededLeft, isExceededRight) {
                        var guideElement = this.guideElement;

                        reqAnimFrame.requestAnimFrame(function () {
                            guideElement.style.left = leftPercent + '%';
                            guideElement.style.width = widthPercent + '%';

                            if (isExceededLeft) {
                                domutil.addClass(guideElement, config.classname('weekday-exceed-left'));
                            } else {
                                domutil.removeClass(guideElement, config.classname('weekday-exceed-left'));
                            }

                            if (isExceededRight) {
                                domutil.addClass(guideElement, config.classname('weekday-exceed-right'));
                            } else {
                                domutil.removeClass(guideElement, config.classname('weekday-exceed-right'));
                            }
                        });
                    };

                    /**
                     * Get schedule block information from schedule data.
                     *
                     * For example, there is single schedule has 10 length. but render range in view is 5 then
                     * rendered block must be cut out to render properly. in this case, this method return
                     * how many block are cut before rendering.
                     *
                     * @param {object} dragStartEventData - schedule data from DayGrid.Move handler.
                     * @returns {function} function that return schedule block information.
                     */
                    DayGridMoveGuide.prototype._getScheduleBlockDataFunc = function (dragStartEventData) {
                        var model = dragStartEventData.model,
                            datesInRange = dragStartEventData.datesInRange,
                            range = dragStartEventData.range,
                            baseWidthPercent = (100 / datesInRange),
                            originScheduleStarts = datetime.start(model.start),
                            originScheduleEnds = datetime.end(model.end),
                            renderStartDate = datetime.start(range[0]),
                            renderEndDate = datetime.end(range[range.length - 1]),
                            fromLeft = Math.ceil((originScheduleStarts.getTime() -
                                renderStartDate.getTime()) / datetime.MILLISECONDS_PER_DAY) || 0,
                            fromRight = Math.ceil((originScheduleEnds.getTime() -
                                renderEndDate.getTime()) / datetime.MILLISECONDS_PER_DAY) || 0;

                        return function (indexOffset) {
                            return {
                                baseWidthPercent: baseWidthPercent,
                                fromLeft: fromLeft + indexOffset,
                                fromRight: fromRight + indexOffset
                            };
                        };
                    };

                    /**
                     * DragStart event handler.
                     * @param {object} dragStartEventData - schedule data.
                     */
                    DayGridMoveGuide.prototype._onDragStart = function (dragStartEventData) {
                        var container = this.daygridMove.view.container,
                            guideElement = this.guideElement = dragStartEventData.scheduleBlockElement.cloneNode(true),
                            scheduleContainer;

                        if (!util.browser.msie) {
                            domutil.addClass(global.document.body, config.classname('dragging'));
                        }

                        this._hideOriginScheduleBlocks(String(dragStartEventData.model.cid()));

                        scheduleContainer = domutil.find(config.classname('.weekday-schedules'), container);
                        domutil.appendHTMLElement('div', guideElement, config.classname('weekday-schedule-cover'));
                        scheduleContainer.appendChild(guideElement);

                        this._dragStartXIndex = dragStartEventData.xIndex;
                        this.getScheduleDataFunc = this._getScheduleBlockDataFunc(dragStartEventData);

                        this._highlightScheduleBlocks(dragStartEventData.model, guideElement);
                    };

                    /**
                     * Drag event handler.
                     * @param {object} dragEventData - schedule data.
                     */
                    DayGridMoveGuide.prototype._onDrag = function (dragEventData) {
                        var getScheduleDataFunc = this.getScheduleDataFunc,
                            dragStartXIndex = this._dragStartXIndex,
                            datesInRange = dragEventData.datesInRange,
                            grids = dragEventData.grids,
                            scheduleData,
                            isExceededLeft,
                            isExceededRight,
                            originLength,
                            leftIndex,
                            size,
                            newLeft,
                            newWidth;

                        if (!getScheduleDataFunc) {
                            return;
                        }

                        scheduleData = getScheduleDataFunc(dragEventData.xIndex - dragStartXIndex);
                        isExceededLeft = scheduleData.fromLeft < 0;
                        isExceededRight = scheduleData.fromRight > 0;

                        leftIndex = Math.max(0, scheduleData.fromLeft);
                        originLength = (scheduleData.fromLeft * -1) + (datesInRange + scheduleData.fromRight);
                        size = isExceededLeft ? (originLength + scheduleData.fromLeft) : originLength;
                        size = isExceededRight ? (size - scheduleData.fromRight) : size;

                        newLeft = grids[leftIndex] ? grids[leftIndex].left : 0;
                        newWidth = getScheduleBlockWidth(leftIndex, size, grids);

                        this.refreshGuideElement(newLeft, newWidth, isExceededLeft, isExceededRight);
                    };

                    /**
                     * Get schedule width based on grids
                     * @param {number} left - left index
                     * @param {number} size - schedule width
                     * @param {Array} grids - dates information
                     * @returns {number} element width
                     */
                    function getScheduleBlockWidth(left, size, grids) {
                        var width = 0;
                        var i = 0;
                        var length = grids.length;
                        for (; i < size; i += 1) {
                            left = (left + i) % length;
                            if (left < length) {
                                width += grids[left] ? grids[left].width : 0;
                            }
                        }

                        return width;
                    }

                    module.exports = DayGridMoveGuide;

                    /* WEBPACK VAR INJECTION */
                }.call(this, __webpack_require__(/*! ./../../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

                /***/
            }),

/***/ "./src/js/handler/daygrid/resize.js":
/*!******************************************!*\
  !*** ./src/js/handler/daygrid/resize.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Resize handler module for DayGrid view.
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var config = __webpack_require__(/*! ../../config */ "./src/js/config.js");
                var datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js");
                var domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js");
                var common = __webpack_require__(/*! ../../common/common */ "./src/js/common/common.js");
                var dayGridCore = __webpack_require__(/*! ./core */ "./src/js/handler/daygrid/core.js");
                var DayGridResizeGuide = __webpack_require__(/*! ./resizeGuide */ "./src/js/handler/daygrid/resizeGuide.js");
                var TZDate = __webpack_require__(/*! ../../common/timezone */ "./src/js/common/timezone.js").Date;

                /**
                 * @constructor
                 * @implements {Handler}
                 * @mixes dayGridCore
                 * @mixes CustomEvents
                 * @param {Drag} [dragHandler] - Drag handler instance.
                 * @param {DayGrid} [view] - view instance.
                 * @param {Base} [controller] - Base controller instance.
                 */
                function DayGridResize(dragHandler, view, controller) {
                    /**
                     * Drag handler instance.
                     * @type {Drag}
                     */
                    this.dragHandler = dragHandler;

                    /**
                     * view instance.
                     * @type {DayGrid}
                     */
                    this.view = view;

                    /**
                     * Base controller instance.
                     * @type {Base}
                     */
                    this.controller = controller;

                    /**
                     * Temporary variable for dragStart event data.
                     * @type {object}
                     */
                    this._dragStart = null;

                    dragHandler.on({
                        dragStart: this._onDragStart
                    }, this);

                    /**
                     * @type {DayGridResizeGuide}
                     */
                    this.guide = new DayGridResizeGuide(this);
                }

                /**
                 * Destroy method
                 */
                DayGridResize.prototype.destroy = function () {
                    this.guide.destroy();
                    this.dragHandler.off(this);
                    this.dragHandler = this.view = this.controller =
                        this.guide = this._dragStart = null;
                };

                /**
                 * Check dragstart target is expected conditions for this handler.
                 * @param {HTMLElement} target - dragstart event handler's target element.
                 * @returns {boolean|WeekdayInWeek} return WeekdayInWeek view instance when satiate condition.
                 */
                DayGridResize.prototype.checkExpectedCondition = function (target) {
                    var cssClass = domutil.getClass(target),
                        matches;

                    if (!~cssClass.indexOf(config.classname('weekday-resize-handle'))) {
                        return false;
                    }

                    target = domutil.closest(target, config.classname('.weekday'));

                    if (!target) {
                        return false;
                    }

                    cssClass = domutil.getClass(target);
                    matches = cssClass.match(config.daygrid.getViewIDRegExp);

                    if (!matches || matches.length < 2) {
                        return false;
                    }

                    return util.pick(this.view.children.items, matches[1]);
                };

                /**
                 * DragStart event handler.
                 * @emits DayGridResize#dragstart
                 * @param {object} dragStartEventData - schedule data.
                 */
                DayGridResize.prototype._onDragStart = function (dragStartEventData) {
                    var target = dragStartEventData.target,
                        result = this.checkExpectedCondition(target),
                        controller = this.controller,
                        scheduleBlockElement,
                        modelID,
                        targetModel,
                        getScheduleDataFunc,
                        scheduleData;

                    if (!result) {
                        return;
                    }

                    scheduleBlockElement = domutil.closest(target, config.classname('.weekday-schedule-block'));
                    modelID = domutil.getData(scheduleBlockElement, 'id');
                    targetModel = controller.schedules.items[modelID];

                    if (!targetModel) {
                        return;
                    }

                    getScheduleDataFunc = this._retriveScheduleData(this.view, dragStartEventData.originEvent);
                    this.getScheduleDataFunc = getScheduleDataFunc;
                    scheduleData = this._dragStart = getScheduleDataFunc(dragStartEventData.originEvent);

                    util.extend(scheduleData, {
                        scheduleBlockElement: scheduleBlockElement,
                        model: targetModel
                    });

                    this.dragHandler.on({
                        drag: this._onDrag,
                        dragEnd: this._onDragEnd,
                        click: this._onClick
                    }, this);

                    /**
                     * @event DayGridResize#dragstart
                     * @type {object}
                     * @property {View} relatedView - view instance.
                     * @property {number} datesInRange - date count of this view.
                     * @property {number} dragStartXIndex - index number of dragstart grid index.
                     * @property {number} xIndex - index number of mouse positions.
                     * @property {Schedule} model - data object of model isntance.
                     * @property {HTMLDivElement} scheduleBlockElement - target schedule block element.
                     */
                    this.fire('dragstart', scheduleData);
                };

                /**
                 * Drag event handler method.
                 * @emits DayGridResize#drag
                 * @param {object} dragEventData - Drag#drag event handler scheduledata.
                 */
                DayGridResize.prototype._onDrag = function (dragEventData) {
                    var getScheduleDataFunc = this.getScheduleDataFunc;

                    if (!getScheduleDataFunc) {
                        return;
                    }

                    /**
                     * @event DayGridResize#drag
                     * @type {object}
                     * @property {View} relatedView - view instance.
                     * @property {number} datesInRange - date count of this view.
                     * @property {number} dragStartXIndex - index number of dragstart grid index.
                     * @property {number} xIndex - index number of mouse positions.
                     */
                    this.fire('drag', getScheduleDataFunc(dragEventData.originEvent));
                };

                /**
                 * Request update schedule instance to base controller.
                 * @fires DayGridResize#beforeUpdateSchedule
                 * @param {object} scheduleData - schedule data from DayGridResize handler.
                 */
                DayGridResize.prototype._updateSchedule = function (scheduleData) {
                    var schedule = scheduleData.targetModel,
                        dateOffset = scheduleData.xIndex - scheduleData.dragStartXIndex,
                        newEnds = new TZDate(schedule.end);
                    var changes;

                    newEnds = newEnds.addDate(dateOffset);
                    newEnds = new TZDate(common.maxDate(datetime.end(schedule.start), newEnds));

                    changes = common.getScheduleChanges(
                        schedule,
                        ['end'],
                        { end: newEnds }
                    );

                    /**
                     * @event DayGridResize#beforeUpdateSchedule
                     * @type {object}
                     * @property {Schedule} schedule - The original schedule instance
                     * @property {Date} start - Deprecated: start time to update
                     * @property {Date} end - Deprecated: end time to update
                     * @property {object} changes - end time to update
                     *  @property {date} end - end time to update
                     */
                    this.fire('beforeUpdateSchedule', {
                        schedule: schedule,
                        changes: changes,
                        start: schedule.getStarts(),
                        end: newEnds
                    });
                };

                /**
                 * DragEnd event hander method.
                 * @emits DayGridResize#dragend
                 * @param {object} dragEndEventData - Drag#DragEnd event handler data.
                 * @param {string} [overrideEventName] - override emitted event name when supplied.
                 * @param {?boolean} skipUpdate - true then skip update schedule model.
                 */
                DayGridResize.prototype._onDragEnd = function (dragEndEventData, overrideEventName, skipUpdate) {
                    var getScheduleDataFunc = this.getScheduleDataFunc,
                        dragStart = this._dragStart,
                        scheduleData;

                    if (!getScheduleDataFunc || !dragStart) {
                        return;
                    }

                    this.dragHandler.off({
                        drag: this._onDrag,
                        dragEnd: this._onDragEnd,
                        click: this._onClick
                    }, this);

                    scheduleData = getScheduleDataFunc(dragEndEventData.originEvent);
                    util.extend(scheduleData, {
                        targetModel: dragStart.model
                    });

                    if (!skipUpdate) {
                        this._updateSchedule(scheduleData);
                    }

                    /**
                     * @event DayGridResize#dragend
                     * @type {object}
                     * @property {View} relatedView - view instance.
                     * @property {number} datesInRange - date count of this view.
                     * @property {number} dragStartXIndex - index number of dragstart grid index.
                     * @property {number} xIndex - index number of mouse positions.
                     */
                    this.fire(overrideEventName || 'dragend', scheduleData);

                    this.getScheduleDataFunc = this._dragStart = null;
                };

                /**
                 * Click event handler method.
                 * @emits DayGridResize#click
                 * @param {object} clickEventData - Drag#Click event handler data.
                 */
                DayGridResize.prototype._onClick = function (clickEventData) {
                    /**
                     * @event DayGridResize#click
                     * @type {object}
                     * @property {View} relatedView - view instance.
                     * @property {number} datesInRange - date count of this view.
                     * @property {number} dragStartXIndex - index number of dragstart grid index.
                     * @property {number} xIndex - index number of mouse positions.
                     */
                    this._onDragEnd(clickEventData, 'click', true);
                };

                common.mixin(dayGridCore, DayGridResize);
                util.CustomEvents.mixin(DayGridResize);

                module.exports = DayGridResize;


                /***/
            }),

/***/ "./src/js/handler/daygrid/resizeGuide.js":
/*!***********************************************!*\
  !*** ./src/js/handler/daygrid/resizeGuide.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
/* WEBPACK VAR INJECTION */(function (global) {/**
 * @fileoverview Resize Guide module.
 * @author NHN FE Development Lab <dl_javascript@nhn.com>
 */


                    var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                    var config = __webpack_require__(/*! ../../config */ "./src/js/config.js");
                    var domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js");
                    var datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js");
                    var reqAnimFrame = __webpack_require__(/*! ../../common/reqAnimFrame */ "./src/js/common/reqAnimFrame.js");

                    /**
                     * @constructor
                     * @param {DayGridResize} resizeHandler - instance of DayGridResize
                     */
                    function DayGridResizeGuide(resizeHandler) {
                        /**
                         * @type {DayGridResize}
                         */
                        this.resizeHandler = resizeHandler;

                        /**
                         * The element that actually contains the event element
                         * @type {HTMLDIVElement}
                         */
                        this.scheduleContainer = null;

                        /**
                         * @type {function}
                         */
                        this.getScheduleDataFunc = null;

                        /**
                         * @type {HTMLDIVElement}
                         */
                        this.guideElement = null;

                        /**
                         * @type {HTMLDIVElement}
                         */
                        this.scheduleBlockElement = null;

                        resizeHandler.on({
                            'dragstart': this._onDragStart,
                            'drag': this._onDrag,
                            'dragend': this._clearGuideElement,
                            'click': this._clearGuideElement
                        }, this);
                    }

                    /**
                     * Destroy method
                     */
                    DayGridResizeGuide.prototype.destroy = function () {
                        this._clearGuideElement();
                        this.resizeHandler.off(this);
                        this.resizeHandler = this.scheduleContainer = this.getScheduleDataFunc =
                            this.guideElement = this.scheduleBlockElement = null;
                    };

                    /**
                     * Clear guide element.
                     */
                    DayGridResizeGuide.prototype._clearGuideElement = function () {
                        domutil.remove(this.guideElement);

                        if (!util.browser.msie) {
                            domutil.removeClass(global.document.body, config.classname('resizing-x'));
                        }

                        if (this.scheduleBlockElement) {
                            domutil.removeClass(this.scheduleBlockElement, config.classname('weekday-schedule-block-dragging-dim'));
                        }

                        this.getScheduleDataFunc = null;
                    };

                    /**
                     * Refresh guide element
                     * @param {number} newWidth - new width percentage value to resize guide element.
                     */
                    DayGridResizeGuide.prototype.refreshGuideElement = function (newWidth) {
                        var guideElement = this.guideElement;

                        reqAnimFrame.requestAnimFrame(function () {
                            guideElement.style.width = newWidth + '%';
                        });
                    };

                    /**
                     * Return function that calculate guide element's new width percentage value.
                     * @param {object} dragStartEventData - dragstart schedule data.
                     * @returns {function} return function that calculate guide element new width percentage.
                     */
                    DayGridResizeGuide.prototype.getGuideElementWidthFunc = function (dragStartEventData) {
                        var model = dragStartEventData.model,
                            viewOptions = this.resizeHandler.view.options,
                            fromLeft = Math.ceil(
                                (model.start - viewOptions.renderStartDate) / datetime.MILLISECONDS_PER_DAY
                            ) || 0,
                            grids = dragStartEventData.grids;

                        return function (xIndex) {
                            var width = 0;
                            var i = 0;
                            var length = grids.length;
                            width += grids[fromLeft] ? grids[fromLeft].width : 0;

                            for (; i < length; i += 1) {
                                if (i > fromLeft && i <= xIndex) {
                                    width += grids[i] ? grids[i].width : 0;
                                }
                            }

                            return width;
                        };
                    };

                    /**
                     * DragStart event handler.
                     * @param {object} dragStartEventData - schedule data.
                     */
                    DayGridResizeGuide.prototype._onDragStart = function (dragStartEventData) {
                        var container = this.resizeHandler.view.container,
                            scheduleBlockElement = this.scheduleBlockElement = dragStartEventData.scheduleBlockElement,
                            guideElement = this.guideElement = scheduleBlockElement.cloneNode(true),
                            scheduleContainer;

                        if (!util.browser.msie) {
                            domutil.addClass(global.document.body, config.classname('resizing-x'));
                        }

                        scheduleContainer = domutil.find(config.classname('.weekday-schedules'), container);
                        domutil.addClass(guideElement, config.classname('daygrid-guide-move'));
                        domutil.addClass(scheduleBlockElement, config.classname('weekday-schedule-block-dragging-dim'));

                        scheduleContainer.appendChild(guideElement);

                        this.getScheduleDataFunc = this.getGuideElementWidthFunc(dragStartEventData);
                    };

                    /**
                     * Drag event handler.
                     * @param {object} dragEventData - schedule data.
                     */
                    DayGridResizeGuide.prototype._onDrag = function (dragEventData) {
                        var func = this.getScheduleDataFunc;

                        if (!func) {
                            return;
                        }

                        this.refreshGuideElement(func(dragEventData.xIndex));
                    };

                    module.exports = DayGridResizeGuide;

                    /* WEBPACK VAR INJECTION */
                }.call(this, __webpack_require__(/*! ./../../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

                /***/
            }),

/***/ "./src/js/handler/drag.js":
/*!********************************!*\
  !*** ./src/js/handler/drag.js ***!
  \********************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
/* WEBPACK VAR INJECTION */(function (global) {/**
 * @fileoverview Drag handler for calendar.
 * @author NHN FE Development Lab <dl_javascript@nhn.com>
 */


                    var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                    var domutil = __webpack_require__(/*! ../common/domutil */ "./src/js/common/domutil.js");
                    var domevent = __webpack_require__(/*! ../common/domevent */ "./src/js/common/domevent.js");
                    var config = __webpack_require__(/*! ../config */ "./src/js/config.js");

                    /**
                     * @constructor
                     * @mixes CustomEvents
                     * @param {object} options - options for drag handler
                     * @param {number} [options.distance=10] - distance in pixels after mouse must move before dragging should start
                     * @param {function} [options.exclude] - filter function for don't fire drag events that specific conditions.
                     * @param {HTMLElement} container element to watching drag interaction.
                     */
                    function Drag(options, container) {
                        domevent.on(container, 'mousedown', this._onMouseDown, this);

                        this.options = util.extend({
                            distance: 10,
                            exclude: null
                        }, options);

                        /**
                         * @type {HTMLElement}
                         */
                        this.container = container;

                        /**
                         * Flag for represent current dragging session has been cancelled for exclude option.
                         * @type {boolean}
                         */
                        this._cancelled = false;

                        /**
                         * @type {boolean}
                         */
                        this._isMoved = false;

                        /**
                         * dragging distance in pixel between mousedown and firing dragStart events
                         * @type {number}
                         */
                        this._distance = 0;

                        /**
                         * @type {boolean}
                         */
                        this._dragStartFired = false;

                        /**
                         * @type {object}
                         */
                        this._dragStartEventData = null;
                    }

                    /**
                     * Destroy method.
                     */
                    Drag.prototype.destroy = function () {
                        domevent.off(this.container, 'mousedown', this._onMouseDown, this);
                        this._isMoved = null;
                        this.container = null;
                    };

                    /**
                     * Clear cache data for single dragging session.
                     */
                    Drag.prototype._clearData = function () {
                        this._cancelled = false;
                        this._distance = 0;
                        this._isMoved = false;
                        this._dragStartFired = false;
                        this._dragStartEventData = null;
                    };

                    /**
                     * Toggle events for mouse dragging.
                     * @param {boolean} toBind - bind events related with dragging when supplied "true"
                     */
                    Drag.prototype._toggleDragEvent = function (toBind) {
                        var container = this.container,
                            domMethod,
                            method;

                        if (toBind) {
                            domMethod = 'on';
                            method = 'disable';
                        } else {
                            domMethod = 'off';
                            method = 'enable';
                        }

                        domutil[method + 'TextSelection'](container, preventDefaultWhenNotPopup);
                        domutil[method + 'ImageDrag'](container, preventDefaultWhenNotPopup);
                        domevent[domMethod](global.document, {
                            mousemove: this._onMouseMove,
                            mouseup: this._onMouseUp
                        }, this);
                    };

                    /**
                     * Normalize mouse event object.
                     * @param {MouseEvent} mouseEvent - mouse event object.
                     * @returns {object} normalized mouse event data.
                     */
                    Drag.prototype._getEventData = function (mouseEvent) {
                        return {
                            target: domevent.getEventTarget(mouseEvent),
                            originEvent: mouseEvent
                        };
                    };

                    /**
                     * MouseDown DOM event handler.
                     * @param {MouseEvent} mouseDownEvent MouseDown event object.
                     */
                    Drag.prototype._onMouseDown = function (mouseDownEvent) {
                        var opt = this.options,
                            target = domevent.getEventTarget(mouseDownEvent);

                        // only primary button can start drag.
                        if (domevent.getMouseButton(mouseDownEvent) !== 0) {
                            return;
                        }

                        if (opt.exclude && opt.exclude(target)) {
                            this._cancelled = true;

                            return;
                        }

                        this._clearData();
                        this._dragStartEventData = this._getEventData(mouseDownEvent);

                        this._toggleDragEvent(true);

                        /**
                         * mousedown event for firefox bug. cancelable.
                         * @event Drag#mouseDown
                         * @type {object}
                         * @property {HTMLElement} target - target element in this event.
                         * @property {MouseEvent} originEvent - original mouse event object.
                         */
                        this.fire('mousedown', this._dragStartEventData);
                    };

                    /**
                     * MouseMove DOM event handler.
                     * @emits Drag#drag
                     * @emits Drag#dragStart
                     * @param {MouseEvent} mouseMoveEvent MouseMove event object.
                     */
                    Drag.prototype._onMouseMove = function (mouseMoveEvent) {
                        var distance;

                        if (this._cancelled) {
                            this._clearData();

                            return;
                        }

                        distance = this.options.distance;
                        // prevent automatic scrolling.
                        preventDefaultWhenNotPopup(mouseMoveEvent);

                        if (this._distance < distance) {
                            this._distance += 1;

                            return;
                        }
                        this._isMoved = true;

                        if (!this._dragStartFired) {
                            this._dragStartFired = true;

                            /**
                             * Drag start events. cancelable.
                             * @event Drag#dragStart
                             * @type {object}
                             * @property {HTMLElement} target - target element in this event.
                             * @property {MouseEvent} originEvent - original mouse event object.
                             */
                            if (!this.invoke('dragStart', this._dragStartEventData)) {
                                this._toggleDragEvent(false);
                                this._clearData();

                                return;
                            }
                        }

                        /**
                         * CalEvents while dragging.
                         * @event Drag#drag
                         * @type {object}
                         * @property {HTMLElement} target - target element in this event.
                         * @property {MouseEvent} originEvent - original mouse event object.
                         */
                        this.fire('drag', this._getEventData(mouseMoveEvent));
                    };

                    /**
                     * MouseUp DOM event handler.
                     * @param {MouseEvent} mouseUpEvent MouseUp event object.
                     * @emits Drag#dragEnd
                     * @emits Drag#click
                     */
                    Drag.prototype._onMouseUp = function (mouseUpEvent) {
                        if (this._cancelled) {
                            return;
                        }

                        this._toggleDragEvent(false);

                        // emit "click" event when not emitted drag event between mousedown and mouseup.
                        if (this._isMoved) {
                            this._isMoved = false;
                            /**
                             * Drag end events.
                             * @event Drag#dragEnd
                             * @type {MouseEvent}
                             * @property {HTMLElement} target - target element in this event.
                             * @property {MouseEvent} originEvent - original mouse event object.
                             */
                            this.fire('dragEnd', this._getEventData(mouseUpEvent));
                        } else {
                            /**
                             * Click events.
                             * @event Drag#click
                             * @type {MouseEvent}
                             * @property {HTMLElement} target - target element in this event.
                             * @property {MouseEvent} originEvent - original mouse event object.
                             */
                            this.fire('click', this._getEventData(mouseUpEvent));
                        }

                        this._clearData();
                    };

                    /**
                     * If the target is not a popup, it prevents the default.
                     * @method
                     * @param {MouseEvent} event - Mouse event object
                     */
                    function preventDefaultWhenNotPopup(event) {
                        var popup = domutil.closest(event.target, config.classname('.popup'));

                        if (!popup) {
                            domevent.preventDefault(event);
                        }
                    }

                    util.CustomEvents.mixin(Drag);

                    module.exports = Drag;

                    /* WEBPACK VAR INJECTION */
                }.call(this, __webpack_require__(/*! ./../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

                /***/
            }),

/***/ "./src/js/handler/month/click.js":
/*!***************************************!*\
  !*** ./src/js/handler/month/click.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Click handler for month view
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var config = __webpack_require__(/*! ../../config */ "./src/js/config.js"),
                    datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js"),
                    domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js");

                /**
                 * @constructor
                 * @implements {Handler}
                 * @mixes util.CustomEvents
                 * @param {Drag} [dragHandler] - Drag handler instance.
                 * @param {Month} [monthView] - Month view instance.
                 * @param {Base} [baseController] - Base controller instance.
                 */
                function MonthClick(dragHandler, monthView, baseController) {
                    /**
                     * @type {Drag}
                     */
                    this.dragHandler = dragHandler;

                    /**
                     * @type {Month}
                     */
                    this.monthView = monthView;

                    /**
                     * @type {Base}
                     */
                    this.baseController = baseController;

                    dragHandler.on({
                        'click': this._onClick
                    }, this);
                }

                /**
                 * Destructor
                 */
                MonthClick.prototype.destroy = function () {
                    this.dragHandler.off(this);
                    this.monthView = this.baseController = this.dragHandler = null;
                };

                /**
                 * @fires MonthClick#clickMore
                 * @param {object} clickEvent - click event object
                 */
                MonthClick.prototype._onClick = function (clickEvent) {
                    var self = this,
                        moreElement,
                        scheduleCollection = this.baseController.schedules,
                        blockElement = domutil.closest(clickEvent.target, config.classname('.weekday-schedule-block'))
                            || domutil.closest(clickEvent.target, config.classname('.month-more-schedule'));

                    moreElement = domutil.closest(
                        clickEvent.target,
                        config.classname('.weekday-exceed-in-month')
                    );

                    if (moreElement) {
                        self.fire('clickMore', {
                            date: datetime.parse(domutil.getData(moreElement, 'ymd')),
                            target: moreElement,
                            ymd: domutil.getData(moreElement, 'ymd')
                        });
                    }

                    if (blockElement) {
                        scheduleCollection.doWhenHas(domutil.getData(blockElement, 'id'), function (schedule) {
                            /**
                             * @events AlldayClick#clickSchedule
                             * @type {object}
                             * @property {Schedule} schedule - schedule instance
                             * @property {MouseEvent} event - MouseEvent object
                             */
                            self.fire('clickSchedule', {
                                schedule: schedule,
                                event: clickEvent.originEvent
                            });
                        });
                    }
                };

                util.CustomEvents.mixin(MonthClick);

                module.exports = MonthClick;


                /***/
            }),

/***/ "./src/js/handler/month/core.js":
/*!**************************************!*\
  !*** ./src/js/handler/month/core.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Module for calculate date by month view and mouse event object
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var common = __webpack_require__(/*! ../../common/common */ "./src/js/common/common.js"),
                    domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js"),
                    domevent = __webpack_require__(/*! ../../common/domevent */ "./src/js/common/domevent.js");
                var mfloor = Math.floor;

                /**
                 * Get high order function that can calc date in mouse point
                 * @param {Month} monthView - month view
                 * @returns {function} function return event data by mouse event object
                 */
                function getMousePosDate(monthView) {
                    var weekColl = monthView.children,
                        weeks = weekColl.sort(function (a, b) {
                            return util.stamp(a) - util.stamp(b);
                        }),
                        weekCount = weekColl.length,
                        days = weekColl.single().getRenderDateRange(),
                        dayCount = days.length,
                        relativeContainer = util.pick(monthView.vLayout.panels[1], 'container'),
                        size = domutil.getSize(relativeContainer),
                        grids = monthView.grids;

                    /**
                     * Get the left index
                     * @param {number} left - left position(percent)
                     * @returns {number} grid left index
                     */
                    function getX(left) {
                        var i = 0;
                        var length = grids.length;
                        var grid;
                        for (; i < length; i += 1) {
                            grid = grids[i];
                            if (grid.left <= left && left <= (grid.left + grid.width)) {
                                return i;
                            }
                        }

                        return left < 0 ? -1 : i;
                    }

                    /**
                     * Get date related with mouse event object
                     * @param {object} mouseEvent - click event data
                     * @returns {object} data related with mouse event
                     */
                    function getDate(mouseEvent) {
                        var pos = domevent.getMousePosition(mouseEvent, relativeContainer),
                            x = getX(common.ratio(size[0], 100, pos[0])),
                            y = mfloor(common.ratio(size[1], weekCount, pos[1])),
                            weekdayView,
                            date,
                            dateRange;

                        if (y < 0) {
                            y = 0;
                        }
                        if (y >= weeks.length) {
                            y = weeks.length - 1;
                        }

                        weekdayView = util.pick(weeks, y);

                        if (!weekdayView) {
                            return null;
                        }

                        dateRange = weekdayView.getRenderDateRange();
                        if (x < 0) {
                            x = 0;
                        }
                        if (x >= dateRange.length) {
                            x = dateRange.length - 1;
                        }

                        date = util.pick(dateRange, x);

                        if (!date) {
                            return null;
                        }

                        return {
                            x: x,
                            y: y,
                            sizeX: dayCount,
                            sizeY: weekCount,
                            date: date,
                            weekdayView: weekdayView,
                            triggerEvent: mouseEvent.type
                        };
                    }

                    return getDate;
                }

                module.exports = getMousePosDate;


                /***/
            }),

/***/ "./src/js/handler/month/creation.js":
/*!******************************************!*\
  !*** ./src/js/handler/month/creation.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Creation handler for month view
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");

                var config = __webpack_require__(/*! ../../config */ "./src/js/config.js");
                var datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js");
                var array = __webpack_require__(/*! ../../common/array */ "./src/js/common/array.js");
                var domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js");
                var domevent = __webpack_require__(/*! ../../common/domevent */ "./src/js/common/domevent.js");
                var getMousePosDate = __webpack_require__(/*! ./core */ "./src/js/handler/month/core.js");
                var Guide = __webpack_require__(/*! ./creationGuide */ "./src/js/handler/month/creationGuide.js");
                var TZDate = __webpack_require__(/*! ../../common/timezone */ "./src/js/common/timezone.js").Date;

                var CLICK_DELAY = 300;

                /**
                 * @constructor
                 * @param {Drag} dragHandler - Drag handler instance.
                 * @param {Month} monthView - Month view instance.
                 * @param {Base} baseController - Base controller instance.
                 * @param {Options} [options] - calendar Options
                 */
                function MonthCreation(dragHandler, monthView, baseController, options) {
                    /**
                     * @type {Drag}
                     */
                    this.dragHandler = dragHandler;

                    /**
                     * @type {Month}
                     */
                    this.monthView = monthView;

                    /**
                     * @type {Base}
                     */
                    this.baseController = baseController;

                    /**
                     * @type {function}
                     */
                    this.getScheduleData = null;

                    /**
                     * Cache for dragging session
                     * @type {object}
                     */
                    this._cache = null;

                    /**
                     * @type {MonthCreationGuide}
                     */
                    this.guide = new Guide(this);

                    /**
                     * @type {boolean}
                     */
                    this._requestOnClick = false;

                    /**
                     * @type {boolean}
                     */
                    this._disableDblClick = options.disableDblClick;

                    /**
                     * @type {boolean}
                     */
                    this._disableClick = options.disableClick;

                    dragHandler.on('dragStart', this._onDragStart, this);
                    dragHandler.on('click', this._onClick, this);

                    if (this._disableDblClick) {
                        CLICK_DELAY = 0;
                    } else {
                        domevent.on(monthView.container, 'dblclick', this._onDblClick, this);
                    }
                }

                /**
                 * Destructor
                 */
                MonthCreation.prototype.destroy = function () {
                    this.dragHandler.off(this);
                    this.guide.destroy();

                    if (this.monthView && this.monthView.container) {
                        domevent.off(this.monthView.container, 'dblclick', this._onDblClick, this);
                    }

                    this.dragHandler = this.monthView = this.baseController =
                        this.getScheduleData = this._cache = this.guide = null;
                };

                /**
                 * Fire before create schedule
                 * @fires {MonthCreation#beforeCreateSchedule}
                 * @param {object} eventData - cache data from single dragging session
                 */
                MonthCreation.prototype._createSchedule = function (eventData) {
                    /**
                     * @event {MonthCreation#beforeCreateSchedule}
                     * @type {object}
                     * @property {boolean} isAllDay - whether schedule is fired in allday view area?
                     * @property {Date} start - select start time
                     * @property {Date} end - select end time
                     * @property {TimeCreationGuide} guide - TimeCreationGuide instance
                     * @property {string} triggerEventName - event name
                     */
                    this.fire('beforeCreateSchedule', {
                        isAllDay: eventData.isAllDay,
                        start: eventData.start,
                        end: eventData.end,
                        guide: this.guide.guide,
                        triggerEventName: eventData.triggerEvent
                    });
                };

                /**
                 * DragStart event handler
                 * @fires {MonthCreation#monthCreationDragstart}
                 * @param {object} dragStartEvent - dragStart event data
                 */
                MonthCreation.prototype._onDragStart = function (dragStartEvent) {
                    var eventData;

                    if (!isElementWeekdayGrid(dragStartEvent.target)) {
                        return;
                    }

                    this.dragHandler.on({
                        drag: this._onDrag,
                        dragEnd: this._onDragEnd
                    }, this);

                    this.getScheduleData = getMousePosDate(this.monthView);

                    eventData = this.getScheduleData(dragStartEvent.originEvent);

                    this._cache = {
                        start: new TZDate(eventData.date)
                    };

                    /**
                     * @event {MonthCreation#monthCreationDragstart}
                     * @type {object}
                     * @property {number} x - x index
                     * @property {number} y - y index
                     * @property {Date} date - drag date
                     */
                    this.fire('monthCreationDragstart', eventData);
                };

                /**
                 * Drag event handler
                 * @fires {MonthCreation#monthCreationDrag}
                 * @param {object} dragEvent - drag event data
                 */
                MonthCreation.prototype._onDrag = function (dragEvent) {
                    var eventData;

                    if (!this.getScheduleData) {
                        return;
                    }

                    eventData = this.getScheduleData(dragEvent.originEvent);

                    if (!eventData) {
                        return;
                    }

                    /**
                     * @event {MonthCreation#monthCreationDrag}
                     * @type {object}
                     * @property {number} x - x index
                     * @property {number} y - y index
                     * @property {Date} date - drag date
                     */
                    this.fire('monthCreationDrag', eventData);
                };

                /**
                 * DragEnd event handler
                 * @fires {MonthCreation#monthCreationDragend}
                 * @param {object} dragEndEvent - drag end event data
                 */
                MonthCreation.prototype._onDragEnd = function (dragEndEvent) {
                    var cache = this._cache;
                    var eventData;
                    var times;

                    this.dragHandler.off({
                        drag: this._onDrag,
                        dragEnd: this._onDragEnd
                    }, this);

                    if (!this.getScheduleData) {
                        return;
                    }

                    eventData = this.getScheduleData(dragEndEvent.originEvent);

                    if (eventData) {
                        cache.end = new TZDate(eventData.date);
                        cache.isAllDay = true;

                        times = [
                            cache.start,
                            cache.end
                        ].sort(array.compare.num.asc);

                        cache.start = new TZDate(times[0]);
                        cache.end = datetime.end(times[1]);

                        this._createSchedule(cache);
                    }

                    /**
                     * @event {MonthCreation#monthCreationDragend}
                     * @type {object}
                     * @property {number} x - x index
                     * @property {number} y - y index
                     * @property {Date} date - drag date
                     */
                    this.fire('monthCreationDragend', eventData);

                    this.getScheduleData = this._cache = null;
                };

                /**
                 * Dblclick event handler
                 * @fires {MonthCreation#monthCreationDragstart}
                 * @param {MouseEvent} e - Native MouseEvent
                 */
                MonthCreation.prototype._onDblClick = function (e) {
                    var eventData, range;

                    if (!isElementWeekdayGrid(e.target)) {
                        return;
                    }

                    eventData = getMousePosDate(this.monthView)(e);

                    this.fire('monthCreationClick', eventData);

                    range = this._adjustStartAndEndTime(new TZDate(eventData.date), new TZDate(eventData.date));

                    this._createSchedule({
                        start: range.start,
                        end: range.end,
                        isAllDay: false,
                        triggerEvent: eventData.triggerEvent
                    });

                    this._requestOnClick = false;
                };

                /**
                 * Click event handler
                 * @fires {MonthCreation#monthCreationDragstart}
                 * @param {MouseEvent} e - Native MouseEvent
                 */
                MonthCreation.prototype._onClick = function (e) {
                    var self = this;
                    var eventData, range;

                    if (!isElementWeekdayGrid(e.target) || this._disableClick) {
                        return;
                    }

                    eventData = getMousePosDate(this.monthView)(e.originEvent);

                    this._requestOnClick = true;
                    setTimeout(function () {
                        if (self._requestOnClick) {
                            self.fire('monthCreationClick', eventData);

                            range = self._adjustStartAndEndTime(new TZDate(eventData.date), new TZDate(eventData.date));

                            self._createSchedule({
                                start: range.start,
                                end: range.end,
                                isAllDay: false,
                                triggerEvent: eventData.triggerEvent
                            });
                        }
                        self._requestOnClick = false;
                    }, CLICK_DELAY);
                };

                /**
                 * Adjust time to our o'clock
                 * @param {TZDate} start - start time
                 * @param {TZDate} end - end time
                 * @returns {Object} start and end
                 */
                MonthCreation.prototype._adjustStartAndEndTime = function (start, end) {
                    var now = new TZDate();
                    var hours = now.getHours();
                    var minutes = now.getMinutes();

                    // adjust start to less time. Adjusting had been greater time in monthly view when clicking grid
                    if (minutes <= 30) {
                        minutes = 0;
                    } else {
                        minutes = 30;
                    }
                    start.setHours(hours, minutes, 0, 0);
                    end.setHours(hours + 1, minutes, 0, 0);

                    return {
                        start: start,
                        end: end
                    };
                };

                /**
                 * Invoke creation click
                 * @param {Schedule} schedule - schedule instance
                 */
                MonthCreation.prototype.invokeCreationClick = function (schedule) {
                    var eventData = {
                        model: schedule
                    };

                    this.fire('monthCreationClick', eventData);

                    this._createSchedule({
                        start: schedule.start,
                        end: schedule.end,
                        isAllDay: schedule.isAllDay,
                        triggerEvent: 'manual'
                    });
                };

                /**
                 * Returns whether the given element is Weekday-Schedule.
                 * @param {HTMLElement} el - target element
                 * @returns {boolean}
                 */
                function isElementWeekdayGrid(el) {
                    return domutil.closest(el, config.classname('.weekday-grid'))
                        && !domutil.closest(el, config.classname('.weekday-exceed-in-month'));
                }

                util.CustomEvents.mixin(MonthCreation);

                module.exports = MonthCreation;


                /***/
            }),

/***/ "./src/js/handler/month/creationGuide.js":
/*!***********************************************!*\
  !*** ./src/js/handler/month/creationGuide.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Creation guide module for month view
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var MonthGuide = __webpack_require__(/*! ./guide */ "./src/js/handler/month/guide.js");

                /**
                 * @constructor
                 * @param {MonthCreation} monthCreation - instance of MonthCreation
                 */
                function MonthCreationGuide(monthCreation) {
                    /**
                     * @type {MonthCreation}
                     */
                    this.monthCreation = monthCreation;

                    /**
                     * @type {MonthGuide}
                     */
                    this.guide = null;

                    monthCreation.on({
                        monthCreationDragstart: this._createGuideElement,
                        monthCreationDrag: this._onDrag,
                        monthCreationDragend: this._onDragEnd,
                        monthCreationClick: this._createGuideElement
                    }, this);
                }

                /**
                 * Destructor
                 */
                MonthCreationGuide.prototype.destroy = function () {
                    this.monthCreation.off(this);

                    if (this.guide) {
                        this.guide.destroy();
                    }

                    this.guide = this.monthCreation = null;
                };

                /**
                 * Drag start event handler
                 * @param {object} dragStartEvent - schedule data from MonthCreation
                 */
                MonthCreationGuide.prototype._createGuideElement = function (dragStartEvent) {
                    var options = {
                        isCreationMode: true,
                        height: '100%',
                        top: 0
                    };

                    this.guide = new MonthGuide(options, this.monthCreation.monthView);
                    this.guide.start(dragStartEvent);
                };

                /**
                 * Drag event handler
                 * @param {object} dragEvent - schedule data from MonthCreation
                 */
                MonthCreationGuide.prototype._onDrag = function (dragEvent) {
                    this.guide.update(dragEvent.x, dragEvent.y);
                };

                /**
                 * Drag end event handler
                 */
                MonthCreationGuide.prototype._onDragEnd = function () {
                    // Do nothing. User calls destroy directly.
                    this.guide = null;
                };

                module.exports = MonthCreationGuide;


                /***/
            }),

/***/ "./src/js/handler/month/guide.hbs":
/*!****************************************!*\
  !*** ./src/js/handler/month/guide.hbs ***!
  \****************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                var Handlebars = __webpack_require__(/*! ./node_modules/handlebars/runtime.js */ "./node_modules/handlebars/runtime.js");
                module.exports = (Handlebars['default'] || Handlebars).template({
                    "1": function (container, depth0, helpers, partials, data) {
                        var stack1, helper, alias1 = container.escapeExpression, alias2 = container.lambda, lookupProperty = container.lookupProperty || function (parent, propertyName) {
                            if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
                                return parent[propertyName];
                            }
                            return undefined
                        };

                        return "<div class=\""
                            + alias1(((helper = (helper = lookupProperty(helpers, "CSS_PREFIX") || (depth0 != null ? lookupProperty(depth0, "CSS_PREFIX") : depth0)) != null ? helper : container.hooks.helperMissing), (typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}), { "name": "CSS_PREFIX", "hash": {}, "data": data, "loc": { "start": { "line": 3, "column": 16 }, "end": { "line": 3, "column": 30 } } }) : helper)))
                            + "month-creation-guide\" style=\"border: "
                            + alias1(alias2(((stack1 = (depth0 != null ? lookupProperty(depth0, "styles") : depth0)) != null ? lookupProperty(stack1, "border") : stack1), depth0))
                            + "; background-color: "
                            + alias1(alias2(((stack1 = (depth0 != null ? lookupProperty(depth0, "styles") : depth0)) != null ? lookupProperty(stack1, "backgroundColor") : stack1), depth0))
                            + ";\"></div>\n";
                    }, "3": function (container, depth0, helpers, partials, data) {
                        var stack1, helper, alias1 = depth0 != null ? depth0 : (container.nullContext || {}), alias2 = container.hooks.helperMissing, alias3 = "function", alias4 = container.escapeExpression, alias5 = container.lambda, lookupProperty = container.lookupProperty || function (parent, propertyName) {
                            if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
                                return parent[propertyName];
                            }
                            return undefined
                        };

                        return "<div class=\""
                            + alias4(((helper = (helper = lookupProperty(helpers, "CSS_PREFIX") || (depth0 != null ? lookupProperty(depth0, "CSS_PREFIX") : depth0)) != null ? helper : alias2), (typeof helper === alias3 ? helper.call(alias1, { "name": "CSS_PREFIX", "hash": {}, "data": data, "loc": { "start": { "line": 5, "column": 16 }, "end": { "line": 5, "column": 30 } } }) : helper)))
                            + "weekday-schedule\"\n        style=\"height: "
                            + alias4(alias5(((stack1 = (depth0 != null ? lookupProperty(depth0, "styles") : depth0)) != null ? lookupProperty(stack1, "scheduleHeight") : stack1), depth0))
                            + "; line-height: "
                            + alias4(alias5(((stack1 = (depth0 != null ? lookupProperty(depth0, "styles") : depth0)) != null ? lookupProperty(stack1, "scheduleHeight") : stack1), depth0))
                            + "; margin-top: "
                            + alias4(alias5(((stack1 = (depth0 != null ? lookupProperty(depth0, "styles") : depth0)) != null ? lookupProperty(stack1, "scheduleGutter") : stack1), depth0))
                            + "; border-radius:"
                            + alias4(alias5(((stack1 = (depth0 != null ? lookupProperty(depth0, "styles") : depth0)) != null ? lookupProperty(stack1, "borderRadius") : stack1), depth0))
                            + "; margin-left: "
                            + alias4(alias5(((stack1 = (depth0 != null ? lookupProperty(depth0, "styles") : depth0)) != null ? lookupProperty(stack1, "marginLeft") : stack1), depth0))
                            + "; margin-right: "
                            + alias4(alias5(((stack1 = (depth0 != null ? lookupProperty(depth0, "styles") : depth0)) != null ? lookupProperty(stack1, "marginRight") : stack1), depth0))
                            + ";\n            color:"
                            + alias4(((helper = (helper = lookupProperty(helpers, "color") || (depth0 != null ? lookupProperty(depth0, "color") : depth0)) != null ? helper : alias2), (typeof helper === alias3 ? helper.call(alias1, { "name": "color", "hash": {}, "data": data, "loc": { "start": { "line": 7, "column": 18 }, "end": { "line": 7, "column": 27 } } }) : helper)))
                            + ";border-color:"
                            + alias4(((helper = (helper = lookupProperty(helpers, "borderColor") || (depth0 != null ? lookupProperty(depth0, "borderColor") : depth0)) != null ? helper : alias2), (typeof helper === alias3 ? helper.call(alias1, { "name": "borderColor", "hash": {}, "data": data, "loc": { "start": { "line": 7, "column": 41 }, "end": { "line": 7, "column": 56 } } }) : helper)))
                            + ";background-color:"
                            + alias4(((helper = (helper = lookupProperty(helpers, "bgColor") || (depth0 != null ? lookupProperty(depth0, "bgColor") : depth0)) != null ? helper : alias2), (typeof helper === alias3 ? helper.call(alias1, { "name": "bgColor", "hash": {}, "data": data, "loc": { "start": { "line": 7, "column": 74 }, "end": { "line": 7, "column": 85 } } }) : helper)))
                            + "\">\n        <div class=\""
                            + alias4(((helper = (helper = lookupProperty(helpers, "CSS_PREFIX") || (depth0 != null ? lookupProperty(depth0, "CSS_PREFIX") : depth0)) != null ? helper : alias2), (typeof helper === alias3 ? helper.call(alias1, { "name": "CSS_PREFIX", "hash": {}, "data": data, "loc": { "start": { "line": 8, "column": 20 }, "end": { "line": 8, "column": 34 } } }) : helper)))
                            + "weekday-schedule-title\">\n"
                            + ((stack1 = lookupProperty(helpers, "if").call(alias1, (depth0 != null ? lookupProperty(depth0, "isAllDay") : depth0), { "name": "if", "hash": {}, "fn": container.program(4, data, 0), "inverse": container.program(6, data, 0), "data": data, "loc": { "start": { "line": 9, "column": 12 }, "end": { "line": 13, "column": 19 } } })) != null ? stack1 : "")
                            + "        </div>\n        <div class=\""
                            + alias4(((helper = (helper = lookupProperty(helpers, "CSS_PREFIX") || (depth0 != null ? lookupProperty(depth0, "CSS_PREFIX") : depth0)) != null ? helper : alias2), (typeof helper === alias3 ? helper.call(alias1, { "name": "CSS_PREFIX", "hash": {}, "data": data, "loc": { "start": { "line": 15, "column": 20 }, "end": { "line": 15, "column": 34 } } }) : helper)))
                            + "weekday-resize-handle handle-y\" style=\"line-height: "
                            + alias4(alias5(((stack1 = (depth0 != null ? lookupProperty(depth0, "styles") : depth0)) != null ? lookupProperty(stack1, "scheduleHeight") : stack1), depth0))
                            + ";\">&nbsp;</div>\n    </div>\n";
                    }, "4": function (container, depth0, helpers, partials, data) {
                        var stack1, lookupProperty = container.lookupProperty || function (parent, propertyName) {
                            if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
                                return parent[propertyName];
                            }
                            return undefined
                        };

                        return "                "
                            + ((stack1 = (lookupProperty(helpers, "allday-tmpl") || (depth0 && lookupProperty(depth0, "allday-tmpl")) || container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}), depth0, { "name": "allday-tmpl", "hash": {}, "data": data, "loc": { "start": { "line": 10, "column": 16 }, "end": { "line": 10, "column": 38 } } })) != null ? stack1 : "")
                            + "\n";
                    }, "6": function (container, depth0, helpers, partials, data) {
                        var stack1, lookupProperty = container.lookupProperty || function (parent, propertyName) {
                            if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
                                return parent[propertyName];
                            }
                            return undefined
                        };

                        return "                "
                            + ((stack1 = (lookupProperty(helpers, "time-tmpl") || (depth0 && lookupProperty(depth0, "time-tmpl")) || container.hooks.helperMissing).call(depth0 != null ? depth0 : (container.nullContext || {}), depth0, { "name": "time-tmpl", "hash": {}, "data": data, "loc": { "start": { "line": 12, "column": 16 }, "end": { "line": 12, "column": 36 } } })) != null ? stack1 : "")
                            + "\n";
                    }, "compiler": [8, ">= 4.3.0"], "main": function (container, depth0, helpers, partials, data) {
                        var stack1, helper, alias1 = depth0 != null ? depth0 : (container.nullContext || {}), alias2 = container.hooks.helperMissing, alias3 = "function", alias4 = container.escapeExpression, lookupProperty = container.lookupProperty || function (parent, propertyName) {
                            if (Object.prototype.hasOwnProperty.call(parent, propertyName)) {
                                return parent[propertyName];
                            }
                            return undefined
                        };

                        return "<div class=\""
                            + alias4(((helper = (helper = lookupProperty(helpers, "CSS_PREFIX") || (depth0 != null ? lookupProperty(depth0, "CSS_PREFIX") : depth0)) != null ? helper : alias2), (typeof helper === alias3 ? helper.call(alias1, { "name": "CSS_PREFIX", "hash": {}, "data": data, "loc": { "start": { "line": 1, "column": 12 }, "end": { "line": 1, "column": 26 } } }) : helper)))
                            + "month-guide-block\" style=\"top:"
                            + alias4(((helper = (helper = lookupProperty(helpers, "top") || (depth0 != null ? lookupProperty(depth0, "top") : depth0)) != null ? helper : alias2), (typeof helper === alias3 ? helper.call(alias1, { "name": "top", "hash": {}, "data": data, "loc": { "start": { "line": 1, "column": 56 }, "end": { "line": 1, "column": 63 } } }) : helper)))
                            + ";height:"
                            + alias4(((helper = (helper = lookupProperty(helpers, "height") || (depth0 != null ? lookupProperty(depth0, "height") : depth0)) != null ? helper : alias2), (typeof helper === alias3 ? helper.call(alias1, { "name": "height", "hash": {}, "data": data, "loc": { "start": { "line": 1, "column": 71 }, "end": { "line": 1, "column": 81 } } }) : helper)))
                            + ";display:none\">\n"
                            + ((stack1 = lookupProperty(helpers, "if").call(alias1, (depth0 != null ? lookupProperty(depth0, "isCreationMode") : depth0), { "name": "if", "hash": {}, "fn": container.program(1, data, 0), "inverse": container.program(3, data, 0), "data": data, "loc": { "start": { "line": 2, "column": 4 }, "end": { "line": 17, "column": 11 } } })) != null ? stack1 : "")
                            + "</div>\n";
                    }, "useData": true
                });

                /***/
            }),

/***/ "./src/js/handler/month/guide.js":
/*!***************************************!*\
  !*** ./src/js/handler/month/guide.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Guide element controller for creation, resize in month view
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");
                var config = __webpack_require__(/*! ../../config */ "./src/js/config.js"),
                    common = __webpack_require__(/*! ../../common/common */ "./src/js/common/common.js"),
                    domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js"),
                    datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js"),
                    TZDate = __webpack_require__(/*! ../../common/timezone */ "./src/js/common/timezone.js").Date,
                    tmpl = __webpack_require__(/*! ./guide.hbs */ "./src/js/handler/month/guide.hbs");
                var mmax = Math.max,
                    mmin = Math.min,
                    mabs = Math.abs,
                    mfloor = Math.floor;

                /**
                 * @constructor
                 * @param {object} [options] - options
                 * @param {boolean} [options.useHandle=false] - whether displaying resize handle on
                 *  guide element?
                 * @param {boolean} [options.isResizeMode=false] - whether resize mode?
                 * @param {Month} monthView - Month view instance
                 */
                function MonthGuide(options, monthView) {
                    var self = this;

                    /**
                     * @type {object}
                     */
                    this.options = util.extend({
                        top: 0,
                        height: '20px',
                        bgColor: '#f7ca88',
                        label: 'New event',
                        isResizeMode: false,
                        isCreationMode: false,
                        styles: this._getStyles(monthView.controller.theme)
                    }, options);

                    /**
                     * @type {Month}
                     */
                    this.view = monthView;

                    /**
                     * @type {WeekdayInMonth[]}
                     */
                    this.weeks = monthView.children.sort(function (a, b) {
                        return util.stamp(a) - util.stamp(b);
                    });

                    /**
                     * @type {number}
                     */
                    this.days = monthView.children.single().getRenderDateRange().length;

                    /**
                     * @type {function}
                     */
                    this.ratio = util.bind(function (value) {
                        return common.ratio(self.days, 100, value);
                    });

                    /**
                     * start coordinate of guide effect. (x, y) (days, weeks) effect can't
                     *  start lower than this coordinate.
                     * @type {number[]}
                     */
                    this.startCoord = [0, 0];

                    /**
                     * @type {Object.<string, HTMLElement>}
                     */
                    this.guideElements = {};

                    /**
                     * horizontal grid information
                     * @type {Object}
                     */
                    this.grids = monthView.grids;
                }

                /**
                 * Destructor
                 */
                MonthGuide.prototype.destroy = function () {
                    this.clear();

                    this.options = this.view = this.weeks = this.days =
                        this.ratio = this.startCoord = this.guideElements = null;
                };

                MonthGuide.prototype.clearGuideElement = function () {
                    this.destroy();
                };

                /**
                 * Get ratio value in week.
                 * @param {number} value - value for calc ratio in week
                 * @returns {number} percent value
                 */
                MonthGuide.prototype._getRatioValueInWeek = function (value) {
                    var grid = this.grids[value] || { left: 100 };

                    return grid.left;
                };

                /**
                 * Create guide element
                 * @returns {HTMLElement} guide element
                 */
                MonthGuide.prototype._createGuideElement = function () {
                    var guide = document.createElement('div');

                    guide.innerHTML = tmpl(this.options);

                    return guide.firstChild;
                };

                /**
                 * Get guide element. if not exist then create one
                 * @param {number} y - y coordinate
                 * @returns {?HTMLElement} guide element
                 */
                MonthGuide.prototype._getGuideElement = function (y) {
                    var guideElements = this.guideElements,
                        guide = guideElements[y],
                        weekdayView = this.weeks[y],
                        container;

                    if (!weekdayView) {
                        return null;
                    }

                    if (!guide) {
                        guide = this._createGuideElement();
                        container = weekdayView.container;
                        container.appendChild(guide);
                        guideElements[y] = guide;
                    }

                    return guide;
                };

                /**
                 * Get coordinate by supplied date in month
                 * @param {TZDate} date - date to find coordinate
                 * @returns {number[]} coordinate (x, y)
                 */
                MonthGuide.prototype._getCoordByDate = function (date) {
                    var WEEKEND_DAYS = 2;
                    var weeks = this.weeks;
                    var isWorkWeek = util.pick(this.view, 'options', 'workweek');
                    var days = isWorkWeek ? this.days + WEEKEND_DAYS : this.days;

                    var getIdxFromDiff = function (d1, d2) {
                        return mfloor(datetime.millisecondsTo('day', mabs(d2 - d1)));
                    },
                        monthStart = datetime.start(weeks[0].options.renderStartDate),
                        isBefore = date < monthStart,
                        start = new TZDate(monthStart),
                        end = new TZDate(monthStart).addDate(isBefore ? -days : days).addDate(-1),
                        x = getIdxFromDiff(date, start),
                        y = 0;

                    while (!datetime.isBetweenWithDate(date, start, end)) {
                        start.addDate(isBefore ? -days : days);
                        end = new TZDate(start).addDate(days - 1);
                        x = getIdxFromDiff(date, start);
                        y += (isBefore ? -1 : 1);
                    }

                    return [x, y];
                };

                /**
                 * Get limited coordinate by supplied coodinates
                 * @param {number[]} coord - coordinate need to limit
                 * @param {number[]} [min] - minimum limitaion of coordinate
                 * @param {number[]} [max] - maximum limitation of coordinate
                 * @returns {number[]} limited coordiate
                 */
                MonthGuide.prototype._getLimitedCoord = function (coord, min, max) {
                    var toIndex = 1,
                        x = coord[0],
                        y = coord[1],
                        result;

                    min = min || [0, 0];
                    max = max || [this.days - toIndex, this.weeks.length - toIndex];

                    if (y < min[1]) {
                        result = min.slice(0);
                    } else if (y > max[1]) {
                        result = max.slice(0);
                    } else {
                        x = mmax(min[0], x);
                        x = mmin(max[0], x);
                        result = [x, y];
                    }

                    return result;
                };

                /**
                 * Prepare guide element modification
                 * @param {object} dragStartEvent - dragStart schedule data from *guide
                 */
                MonthGuide.prototype.start = function (dragStartEvent) {
                    var opt = this.options,
                        target = dragStartEvent.target,
                        model = dragStartEvent.model,
                        x = dragStartEvent.x,
                        y = dragStartEvent.y,
                        renderMonth = new TZDate(this.view.options.renderMonth),
                        temp;

                    if (opt.isCreationMode) {
                        if (model && !datetime.isSameMonth(renderMonth, model.start)) {
                            model.start.setMonth(renderMonth.getMonth());
                            model.start.setDate(1);
                            model.end.setMonth(renderMonth.getMonth());
                            model.end.setDate(1);
                        }
                    } else {
                        temp = this._getCoordByDate(model.getStarts());
                        x = temp[0];
                        y = temp[1];

                        util.extend(this.options, {
                            top: parseInt(target.style.top, 10) + 'px',
                            height: parseInt(target.style.height, 10) + 'px',
                            label: model.title
                        }, model);
                    }

                    if (util.isUndefined(x) || util.isUndefined(y)) {
                        temp = this._getCoordByDate(model.getStarts());
                        x = temp[0];
                        y = temp[1];
                    }

                    this.startCoord = [x, y];
                    this.update(x, y);
                };

                /**
                 * Data for update several guide elements
                 * @typedef UpdateIndication
                 * @type {object}
                 * @property {HTMLElement} guide - guide element
                 * @property {number} left - left style value
                 * @property {number} width - width style value
                 * @property {boolean} [exceedL=false] - whether schedule is exceeded past weeks?
                 * @property {boolean} [exceedR=false] - whether schedule is exceeded future weeks?
                 */

                /**
                 * Modify HTML element that uses for guide element
                 * @param {UpdateIndication[]} inds - indication of update severel guide element
                 */
                MonthGuide.prototype._updateGuides = function (inds) {
                    util.forEach(inds, function (ind) {
                        var guide = ind.guide,
                            exceedLClass = config.classname('month-exceed-left'),
                            exceedRClass = config.classname('month-exceed-right');

                        guide.style.display = 'block';
                        guide.style.left = ind.left + '%';
                        guide.style.width = ind.width + '%';

                        if (ind.exceedL) {
                            domutil.addClass(guide, exceedLClass);
                        } else {
                            domutil.removeClass(guide, exceedLClass);
                        }

                        if (ind.exceedR) {
                            domutil.addClass(guide, exceedRClass);
                        } else {
                            domutil.removeClass(guide, exceedRClass);
                        }
                    });
                };

                /**
                 * Get guide element indicate for origin week
                 * @param {number[]} startCoord - drag start coordinate
                 * @param {number[]} mouseCoord - mouse coordinate
                 * @returns {object} indicate
                 */
                MonthGuide.prototype._getOriginIndicate = function (startCoord, mouseCoord) {
                    var left = mmin(startCoord[0], mouseCoord[0]),
                        right = mmax(startCoord[0], mouseCoord[0]) + 1,
                        exceedL, exceedR;

                    if (mouseCoord[1] > startCoord[1]) {
                        left = startCoord[0];
                        right = this.days;
                        exceedR = true;
                    } else if (mouseCoord[1] < startCoord[1]) {
                        left = 0;
                        right = startCoord[0] + 1;
                        exceedL = true;
                    }

                    return {
                        left: this._getRatioValueInWeek(left),
                        width: this._getRatioValueInWeek(right) -
                            this._getRatioValueInWeek(left),
                        exceedL: exceedL,
                        exceedR: exceedR
                    };
                };

                /**
                 * Get guide element indicate for week related with mouse position
                 * @param {number[]} startCoord - drag start coordinate
                 * @param {number[]} mouseCoord - mouse coordinate
                 * @returns {object} indicate
                 */
                MonthGuide.prototype._getMouseIndicate = function (startCoord, mouseCoord) {
                    var left = mouseCoord[0],
                        right = mouseCoord[0] + 1,
                        exceedL, exceedR;

                    if (mouseCoord[1] > startCoord[1]) {
                        left = 0;
                        exceedL = true;
                    } else if (mouseCoord[1] < startCoord[1]) {
                        right = this.days;
                        exceedR = true;
                    }

                    return {
                        left: this._getRatioValueInWeek(left),
                        width: this._getRatioValueInWeek(right) -
                            this._getRatioValueInWeek(left),
                        exceedL: exceedL,
                        exceedR: exceedR
                    };
                };

                /**
                 * Get guide element indicate for contained weeks
                 * @returns {object} indicate
                 */
                MonthGuide.prototype._getContainIndicate = function () {
                    return {
                        left: 0,
                        width: 100,
                        exceedL: true,
                        exceedR: true
                    };
                };

                /**
                 * Remove several guide element that supplied by parameter
                 * @param {number[]} yCoords - array of y coordinate to remove guide element
                 */
                MonthGuide.prototype._removeGuideElements = function (yCoords) {
                    var guides = this.guideElements;

                    util.forEach(yCoords, function (y) {
                        domutil.remove(guides[y]);
                        delete guides[y];
                    });
                };

                /**
                 * Get excluded numbers in range
                 * @param {number[]} range - the range. value must be sequencial.
                 * @param {number[]} numbers - numbers to check
                 * @returns {number[]} excluded numbers
                 */
                MonthGuide.prototype._getExcludesInRange = function (range, numbers) {
                    var min = mmin.apply(null, range),
                        max = mmax.apply(null, range),
                        excludes = [];

                    util.forEach(numbers, function (num) {
                        num = parseInt(num, 10);
                        if (num < min || num > max) {
                            excludes.push(num);
                        }
                    });

                    return excludes;
                };

                /**
                 * Update guide elements by coordinate in month grid from mousemove event
                 * @param {number} x - x coordinate
                 * @param {number} y - y coordinate
                 */
                MonthGuide.prototype.update = function (x, y) {
                    var self = this,
                        startCoord = this.startCoord,
                        mouseCoord = [x, y],
                        limitedCoord = this.options.isResizeMode ?
                            this._getLimitedCoord(mouseCoord, startCoord) : mouseCoord,
                        renderedYIndex = util.keys(this.guideElements),
                        yCoordsToUpdate = util.range(
                            mmin(startCoord[1], limitedCoord[1]),
                            mmax(startCoord[1], limitedCoord[1]) + 1
                        ),
                        yCoordsToRemove = this._getExcludesInRange(
                            yCoordsToUpdate,
                            renderedYIndex
                        ),
                        renderIndication = {};

                    this._removeGuideElements(yCoordsToRemove);

                    util.forEach(yCoordsToUpdate, function (guideYCoord) {
                        var guide = self._getGuideElement(guideYCoord),
                            indicate;

                        if (!guide) {
                            return;
                        }

                        if (guideYCoord === startCoord[1]) {
                            indicate = self._getOriginIndicate(startCoord, limitedCoord);
                        } else if (guideYCoord === mouseCoord[1]) {
                            indicate = self._getMouseIndicate(startCoord, mouseCoord);
                        } else {
                            indicate = self._getContainIndicate();
                        }

                        renderIndication[guideYCoord] = util.extend({
                            guide: guide
                        }, indicate);
                    });

                    this._updateGuides(renderIndication);
                };

                /**
                 * Clear all guide elements
                 */
                MonthGuide.prototype.clear = function () {
                    util.forEach(this.guideElements, function (element) {
                        domutil.remove(element);
                    });

                    this.guideElements = {};
                };

                /**
                 * Get the styles from theme
                 * @param {Theme} theme - theme instance
                 * @returns {object} styles - styles object
                 */
                MonthGuide.prototype._getStyles = function (theme) {
                    var styles = {};

                    if (theme) {
                        styles.border = theme.common.creationGuide.border;
                        styles.backgroundColor = theme.common.creationGuide.backgroundColor;
                        styles.scheduleHeight = theme.month.schedule.height;
                        styles.scheduleGutter = theme.month.schedule.marginTop;
                        styles.marginLeft = theme.month.schedule.marginLeft;
                        styles.marginRight = theme.month.schedule.marginRight;
                        styles.borderRadius = theme.month.schedule.borderRadius;
                    }

                    return styles;
                };

                module.exports = MonthGuide;


                /***/
            }),

/***/ "./src/js/handler/month/move.js":
/*!**************************************!*\
  !*** ./src/js/handler/month/move.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

                "use strict";
                /**
                 * @fileoverview Move handler for month view
                 * @author NHN FE Development Lab <dl_javascript@nhn.com>
                 */


                var util = __webpack_require__(/*! tui-code-snippet */ "tui-code-snippet");

                var config = __webpack_require__(/*! ../../config */ "./src/js/config.js"),
                    domutil = __webpack_require__(/*! ../../common/domutil */ "./src/js/common/domutil.js"),
                    datetime = __webpack_require__(/*! ../../common/datetime */ "./src/js/common/datetime.js"),
                    getMousePosData = __webpack_require__(/*! ./core */ "./src/js/handler/month/core.js"),
                    MonthMoveGuide = __webpack_require__(/*! ./moveGuide */ "./src/js/handler/month/moveGuide.js"),
                    TZDate = __webpack_require__(/*! ../../common/timezone */ "./src/js/common/timezone.js").Date;

                /**
                 * @constructor
                 * @mixes CustomEvents
                 * @param {Drag} dragHandler - Drag handler instance.
                 * @param {Month} monthView - Month view instance.
                 * @param {Base} baseController - Base controller instance.
                 */
                function MonthMove(dragHandler, monthView, baseController) {
                    /**
                     * @type {Drag}
                     */
                    this.dragHandler = dragHandler;

                    /**
                     * @type {Month}
                     */
                    this.monthView = monthView;

                    /**
                     * @type {Base}
                     */
                    this.baseController = baseController;

                    /**
                     * @type {function}
                     */
                    this.getScheduleData = null;

                    /**
                     * @type {object}
                     */
                    this._cache = null;

                    /**
                     * @type {MonthMoveGuide}
                     */
                    this.guide = new MonthMoveGuide(this);

                    dragHandler.on('dragStart', this._onDragStart, this);
                }

                /**
                 * Destructor
                 */
                MonthMove.prototype.destroy = function () {
                    this.dragHandler.off(this);

                    this.dragHandler = this.monthView = this.baseController = null;
                };

                /**
                 * Update target schedule
                 * @fires {MonthMove#beforeUpdateSchedule}
                 * @param {object} scheduleCache - cache object that result of single dragging
                 *  session.
                 */
                MonthMove.prototype.updateSchedule = function (scheduleCache) {
                    var schedule = scheduleCache.model;
                    var duration = schedule.duration();
                    var startDateRaw = datetime.raw(schedule.start);
                    var dragEndTime = new TZDate(scheduleCache.end);
                    var newStartDate = new TZDate(dragEndTime);

                    newStartDate.setHours(startDateRaw.h, startDateRaw.m, startDateRaw.s, startDateRaw.ms);

                    /**
                     * @event MonthMove#beforeUpdateSchedule
                     * @type {object}
                     * @property {Schedule} schedule - The original schedule instance
                     * @property {Date} start - Deprecated: start time to update
                     * @property {Date} end - Deprecated: end time to update
                     * @property {object} changes - start and end time to update
                     *  @property {Date} start - start time to update
                     *  @property {Date} end - end time to update
                     */
                    this.fire('beforeUpdateSchedule', {
                        schedule: schedule,
                        changes: {
                            start: newStartDate,
                            end: new TZDate(newStartDate).addMilliseconds(duration)
                        },
                        start: newStartDate,
                        end: new TZDate(newStartDate).addMilliseconds(duration)
                    });
                };

                /**
                 * Get schedule block to clone for month guide effect
                 * @param {HTMLElement} target - target element that related with drag schedule
                 * @returns {HTMLElement} element to create guide effect
                 */
                MonthMove.prototype.getMonthScheduleBlock = function (target) {
                    var blockSelector = config.classname('.weekday-schedule-block');

                    return domutil.closest(target, blockSelector);
                };

                /**
                 * Get schedule block from more layer
                 * @param {HTMLElement} target - element to check
                 * @returns {HTMLElement} schedule element
                 */
                MonthMove.prototype.getMoreLayerScheduleBlock = function (target) {
                    var className = config.classname('.month-more-schedul