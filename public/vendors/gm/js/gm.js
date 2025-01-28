/**
 * Copyright (c) 2015 Веб-студия GearMagic
 * 
 * Contact: https://gearmagic.ru
 *
 * @author    Anton Tivonenko
 * @copyright (c) 2015, by Anton Tivonenko, anton.tivonenko@gmail.com
 * @date      Oct 01, 2015
 * @version   $Id: 1.0 $
 *
 * @license gm.js is licensed under the terms of the Open Source
 * LGPL 3.0 license. Commercial use is permitted to the extent that the
 * code/component(s) do NOT become part of another Open Source or Commercially
 * development library or toolkit without explicit permission.
 */

Gm = {version: '2.0'};

Gm.apply = function(o, c, defaults){
    // нет ссылки "this" для дружественных вызовов за пределами области видимости
    if (defaults) Gm.apply(o, defaults)
    if(o && c && typeof c == 'object'){
        for(var p in c){
            o[p] = c[p];
        }
    }
    return o;
};

(function () {
    var idSeed = 0,
        ua = navigator.userAgent.toLowerCase(),
        check = function(r){
            return r.test(ua);
        },
        isStrict = document.compatMode == "CSS1Compat",
        isOpera = check(/opera/),
        isChrome = check(/chrome/),
        isWebKit = check(/webkit/),
        isSafari = !isChrome && check(/safari/),
        isSafari3 = isSafari && check(/version\/3/),
        isSafari4 = isSafari && check(/version\/4/),
        isIE = !isOpera && check(/msie/),
        isIE7 = isIE && check(/msie 7/),
        isIE8 = isIE && check(/msie 8/),
        isGecko = !isWebKit && check(/gecko/),
        isGecko3 = isGecko && check(/rv:1\.9/),
        isBorderBox = isIE && !isStrict,
        isWindows = check(/windows|win32/),
        isMac = check(/macintosh|mac os x/),
        isAir = check(/adobeair/),
        isLinux = check(/linux/),
        isSecure = /^https/i.test(window.location.protocol);

    var _widgets = null;

    Gm.apply(Gm, {
        isStrict : isStrict,
        
        isSecure : isSecure,
        
        isReady : false,

        isEmpty : function(v, allowBlank){
            return v === null || v === undefined || ((Gm.isArray(v) && !v.length)) || (!allowBlank ? v === '' : false);
        },

        isArray : function(v){
            return Object.prototype.toString.apply(v) === '[object Array]';
        },
        
        isObject : function(v){
            return v && typeof v == "object";
        },

        /**
         * Возвращает `true`, если переданное значение является строкой.
         * @param {Object} value Значение.
         * @return {Boolean}
         */
        isString: function(value) {
            return typeof value === 'string';
        },

        isPrimitive: function(v){
            var t = typeof v;
            return t == 'string' || t == 'number' || t == 'boolean';
        },

        isFunction : function(v){
            return typeof v == "function";
        },

        isOpera : isOpera,
        
        isWebKit: isWebKit,
        
        isChrome : isChrome,
        
        isSafari : isSafari,
        
        isSafari3 : isSafari3,
        
        isSafari4 : isSafari4,
        
        isSafari2 : isSafari && !isSafari3,
        
        isIE : isIE,
        
        isIE6 : isIE && !isIE7 && !isIE8,
        
        isIE7 : isIE7,
        
        isIE8 : isIE8,
        
        isGecko : isGecko,
        
        isGecko2 : isGecko && !isGecko3,
        
        isGecko3 : isGecko3,
        
        isBorderBox : isBorderBox,
        
        isLinux : isLinux,
        
        isWindows : isWindows,
        
        isMac : isMac,
        
        isAir : isAir,

        applyIf : (o, c) => {
            if (o) {
                for (var p in c) {
                    if (Gm.isEmpty(o[p])) o[p] = c[p];
                }
            }
            return o;
        },

        extend : function(){
            // inline overrides
            var io = function(o){
                for(var m in o){
                    this[m] = o[m];
                }
            };
            var oc = Object.prototype.constructor;

            return function(sb, sp, overrides){
                if(Gm.isObject(sp)){
                    overrides = sp;
                    sp = sb;
                    sb = overrides.constructor != oc ? overrides.constructor : function(){sp.apply(this, arguments);};
                }
                var F = function(){},
                    sbp,
                    spp = sp.prototype;

                F.prototype = spp;
                sbp = sb.prototype = new F();
                sbp.constructor=sb;
                sb.superclass=spp;
                if(spp.constructor == oc){
                    spp.constructor=sp;
                }
                sb.override = function(o) {
                    Gm.override(sb, o);
                };
                sbp.superclass = sbp.supr = (function() {
                    return spp;
                });
                sbp.override = io;
                Gm.override(sb, overrides);
                sb.extend = function(o){Gm.extend(sb, o);};
                return sb;
            };
        }(),

        
        override : function(origclass, overrides){
            if(overrides){
                var p = origclass.prototype;
                Gm.apply(p, overrides);
                if(Gm.isIE && overrides.toString != origclass.toString){
                    p.toString = overrides.toString;
                }
            }
        },

        namespace : function () {
            var o, d;
            Gm.each(arguments, function(v) {
                d = v.split(".");
                o = window[d[0]] = window[d[0]] || {};
                Gm.each(d.slice(1), function(v2){
                    o = o[v2] = o[v2] || {};
                });
            });
            return o;
        },

        urlEncode : function(o, pre){
            var buf = [],
                key,
                e = encodeURIComponent;

            for(key in o) {
                Gm.each(o[key] || key, function(val, i) {
                    buf.push("&", e(key), "=", val != key ? e(val) : "");
                });
            }
            if(!pre) {
                buf.shift();
                pre = "";
            }
            return pre + buf.join('');
        },

        urlDecode : function (string, overwrite){
            var obj = {},
                pairs = string.split('&'),
                d = decodeURIComponent,
                name,
                value;
            Gm.each(pairs, function (pair) {
                pair = pair.split('=');
                name = d(pair[0]);
                value = d(pair[1]);
                obj[name] = overwrite || !obj[name] ? value :
                            [].concat(obj[name]).concat(value);
            });
            return obj;
        },

        /**
         * Возвращает `true`, если переданное значение определено.
         * @param {Object} value Значение.
         * @return {Boolean}
         */
        isDefined: function(value) {
            return typeof value !== 'undefined';
        },

        each : function (array, fn, scope){
            if(Gm.isEmpty(array, true)) return;
            if (typeof array.length == "undefined" || typeof array == "string"){
                array = [array];
            }
            for (var i = 0, len = array.length; i < len; i++){
                if(fn.call(scope || array[i], array[i], i, array) === false){ return i; };
            }
        },

        createEl: function (tagName, properties = {}, options = null) {
            let el = document.createElement(tagName, options);
            return this.applyIf(el, properties);
        },

        queryOne: (selector) => {
            return document.querySelector(selector);
        },

        query: (selector) => {
            return document.querySelectorAll(selector);
        },

        getByTag: (tagName) => {
            return document.getElementsByTagName(tagName);
        },

        getByClass: (className) => {
            return document.getElementsByClassName(className);
        },

        /**
         * Возвращает HTML элемент.
         * @param {String} id Идентификатор элемента, который нужно найти.
         * @return {HTMLElement|null}
         */
        getById: (id) => {
            return document.getElementById(id);
        },

        getBody: () => {
            return document.body || document.documentElement;
        },

        getDom: (el) => {
            if (!el || !document) return null;
            return el.dom ? el.dom : (typeof el == 'string' ? document.getElementById(el) : el);
        },

        onReady: (func) => {
            document.addEventListener('DOMContentLoaded', func);
        },

        getPanel: function () {
            return this.isDefined(window.parent.Gm.Application) ? window.parent.Gm.getApp() : null;
        },

        getBackend: function () {
            return this.isDefined(window.parent.Gm) ? window.parent.Gm : null; 
        },

        isMarkupMode: function () {
            if (this.isFrame()) {
                return this.getBackend() !== null;
            }
            return false;
        },

        isFrame: () => {
            return window.top != window.self;
        }
    });

    Gm.ns = Gm.namespace;
})();


Gm.Ajax = function() {	    
    var activeX = ['MSXML2.XMLHTTP.3.0',
                   'MSXML2.XMLHTTP',
                   'Microsoft.XMLHTTP'];
                   
    // private
    function setHeader(o) {
        var conn = o.conn,
            prop;
        
        function setTheHeaders(conn, headers){
             for (prop in headers) {
                if (headers.hasOwnProperty(prop)) {
                    conn.setRequestHeader(prop, headers[prop]);
                }
            }   
        }		
        
        if (pub.defaultHeaders) {
            setTheHeaders(conn, pub.defaultHeaders);
        }

        if (pub.headers) {
            setTheHeaders(conn, pub.headers);
            pub.headers = null;                
        }
    }    
    
    // private
    function createExceptionObject(tId, callbackArg, isAbort) {	        
        return {
            tId : tId,
            status : isAbort ? -1 : 0,
            statusText : isAbort ? 'transaction aborted' : 'communication failure',
            argument : callbackArg
        };
    }  
    
    // private 
    function initHeader(label, value) {         
        (pub.headers = pub.headers || {})[label] = value;			            
    }
    
    // private
    function createResponseObject(o, callbackArg) {
        var headerObj = {},
            headerStr,            	
            conn = o.conn;            	

        try {
            headerStr = o.conn.getAllResponseHeaders();                
            Gm.each(headerStr.split('\n'), function(v){
                var t = v.split(':');
                headerObj[t[0]] = t[1]; 
            });
        } catch(e) {}
                    
        return {
            tId : o.tId,
            status : conn.status,
            statusText : conn.statusText,
            getResponseHeader : headerObj,
            getAllResponseHeaders : headerStr,
            responseText : conn.responseText,
            responseXML : conn.responseXML,
            argument : callbackArg
        };
    }	   
    
    // private
    function handleTransactionResponse(o, callback, isAbort) {
        var	status = o.conn.status,
            httpStatus, 
            responseObject;
            
        if (callback) {
            httpStatus = status || 13030;
            if (httpStatus >= 200 && httpStatus < 300) {
                responseObject = createResponseObject(o, callback.argument);
                if (callback.success) {
                    callback.success.call(callback.scope, responseObject);                    
                }
            } else {	                
                if ([12002, 12029, 12030, 12031, 12152, 13030].indexOf( httpStatus ) > -1) {
                    responseObject = createExceptionObject(o.tId, callback.argument, (isAbort ? isAbort : false));
                    if (callback.failure) {
                        callback.failure.call(callback.scope, responseObject);                        
                    }
                } else {
                    responseObject = createResponseObject(o, callback.argument);
                    if (callback.failure) {
                        callback.failure.call(callback.scope, responseObject);                                                
                    }
                }
            }
        }	
        o = o.conn = responseObject = null;
    }  
    
    // private
    function handleReadyState(o, callback){
    callback = callback || {};
        var conn = o.conn,
            tId = o.tId,
            poll = pub.poll,
    cbTimeout = callback.timeout || null;

        if (cbTimeout) {
            pub.timeout[tId] = setTimeout(function() {
                pub.abort(o, callback, true);
            }, cbTimeout);
        }

        poll[tId] = setInterval(
            function() {
                if (conn && conn.readyState == 4) {
                    clearInterval(poll[tId]);
                    poll[tId] = null;

                    if (cbTimeout) {
                        clearTimeout(pub.timeout[tId]);
                        pub.timeout[tId] = null;
                    }

                    handleTransactionResponse(o, callback);
                }
            },
            pub.pollInterval);
    }
    
    // private
    function asyncRequest(method, uri, callback, postData) {
        var o = getConnectionObject() || null;

        if (o) {
            o.conn.open(method, uri, true);

            if (pub.useDefaultXhrHeader) {                    
                initHeader('X-Requested-With', pub.defaultXhrHeader);
            }

            if(postData && pub.useDefaultHeader && (!pub.headers || !pub.headers['Content-Type'])){
                initHeader('Content-Type', pub.defaultPostHeader);
            }

            if (pub.defaultHeaders || pub.headers) {
                setHeader(o);
            }

            handleReadyState(o, callback);
            o.conn.send(postData || null);
        }
        return o;
    }
    
    // private
    function getConnectionObject() {
        var o;      	

        try {
            if (o = createXhrObject(pub.transactionId)) {
                pub.transactionId++;
            }
        } catch(e) {
        } finally {
            return o;
        }
    }
       
    // private
    function createXhrObject(transactionId) {
        var http;
            
        try {
            http = new XMLHttpRequest();                
        } catch(e) {
            for (var i = 0; i < activeX.length; ++i) {	            
                try {
                    http = new ActiveXObject(activeX[i]);                        
                    break;
                } catch(e) {}
            }
        } finally {
            return {conn : http, tId : transactionId};
        }
    }
         
    var pub = {
        request : function(method, uri, cb, data, options) {
            if(options){
                var me = this,		        
                    xmlData = options.xmlData,
                    jsonData = options.jsonData;
                    
                Gm.applyIf(me, options);	        
                
                if(xmlData || jsonData){
                    initHeader('Content-Type', xmlData ? 'text/xml' : 'application/json');
                    data = xmlData || Gm.encode(jsonData);
                }
            }		    		    
            return asyncRequest(method || options.method || "POST", uri, cb, data);
        },

        serializeForm : function(form) {
            var fElements = form.elements || (document.forms[form] || Gm.getDom(form)).elements,
                hasSubmit = false,
                encoder = encodeURIComponent,
                element,
                options, 
                name, 
                val,             	
                data = '',
                type;
                
            Gm.each(fElements, function(element) {		            
                name = element.name;	             
                type = element.type;
                
                if (!element.disabled && name){
                    if(/select-(one|multiple)/i.test(type)){			                
                        Gm.each(element.options, function(opt) {
                            if (opt.selected) {
                                data += String.format("{0}={1}&", 						            					  
                                                     encoder(name),						            					 
                                                      (opt.hasAttribute ? opt.hasAttribute('value') : opt.getAttribute('value') !== null) ? opt.value : opt.text);
                            }								
                        });
                    } else if(!/file|undefined|reset|button/i.test(type)) {
                        if(!(/radio|checkbox/i.test(type) && !element.checked) && !(type == 'submit' && hasSubmit)){
                                
                            data += encoder(name) + '=' + encoder(element.value) + '&';                     
                            hasSubmit = /submit/i.test(type);    
                        } 		                
                    } 
                }
            });            
            return data.substr(0, data.length - 1);
        },
        
        useDefaultHeader : true,
        defaultPostHeader : 'application/x-www-form-urlencoded; charset=UTF-8',
        useDefaultXhrHeader : true,
        defaultXhrHeader : 'XMLHttpRequest',        
        poll : {},
        timeout : {},
        pollInterval : 50,
        transactionId : 0,

        abort : function(o, callback, isTimeout) {
            var me = this,
                tId = o.tId,
                isAbort = false;
            
            if (me.isCallInProgress(o)) {
                o.conn.abort();
                clearInterval(me.poll[tId]);
                   me.poll[tId] = null;
                if (isTimeout) {
                    me.timeout[tId] = null;
                }
                
                handleTransactionResponse(o, callback, (isAbort = true));                
            }
            return isAbort;
        },

        isCallInProgress : function(o) {		        
            return o.conn && !{1:1,4:4}[o.conn.readyState];	        
        }
    };
    return pub;
}();


/**
 * Класс для установки/чтения значений из файлов cookie браузера.
 * Значения можно записать с помощью метода {@link #set}.
 * Значения можно прочитать с помощью метода {@link #get}.
 * Файл cookie можно удалить с помощью метода {@link #clear}.
 */
Gm.Cookies = function () {
    return {
        /**
         * Создает файл cookie с указанным именем и значением. При желании можно указать 
         * дополнительные настройки для файла cookie (например: срок действия, ограничение 
         * доступа, SSL).
         * @param {String} name Имя файла cookie, который необходимо установить.
         * @param {Object} value Значение, которое необходимо установить для файла cookie.
         * @param {Object} [expires] Укажите дату истечения срока действия файла cookie. 
         * Обратите внимание, что указанный объект Date будет преобразован во среднее время 
         * по Гринвичу (GMT).
         * @param {String} [path] Установка пути в файле cookie ограничивает доступ к страницам, 
         * соответствующим этому пути. По умолчанию для всех страниц ('/').
         * @param {String} [domain] Установка домена ограничивает доступ к страницам в данном 
         * домене (обычно используется для разрешения доступа к файлам cookie между поддоменами). 
         * Например, "foobar.ru" создаст файл cookie, доступ к которому можно будет получить 
         * из любого поддомена foobar.ru, включая www.foobar.com, support.foobar.ru и т. д.
         * @param {Boolean} [secure] Установите true, чтобы указать, что файл cookie должен 
         * быть доступен только через SSL на странице, использующей протокол HTTPS. По умолчанию 
         * false. Обратите внимание, что это будет работать только в том случае, если страница, 
         * вызывающая этот код, использует протокол HTTPS, в противном случае файл cookie будет 
         * создан с параметрами по умолчанию.
         */
        set : function(name, value){
            var argv = arguments,
                argc = arguments.length,
                expires = (argc > 2) ? argv[2] : null,
                path = (argc > 3) ? argv[3] : '/',
                domain = (argc > 4) ? argv[4] : null,
                secure = (argc > 5) ? argv[5] : false;
                
            document.cookie = name + "=" +
                escape(value) +
                ((expires === null) ? "" : ("; expires=" + expires.toUTCString())) +
                ((path === null) ? "" : ("; path=" + path)) +
                ((domain === null) ? "" : ("; domain=" + domain)) +
                ((secure === true) ? "; secure" : "");
        },
    
        /**
         * Извлекает файлы cookie, доступные текущей странице. Если файл cookie не 
         * существует, get() возвращает значение null. В следующем примере извлекается файл 
         * cookie с именем "valid" и сохраняется значение String в переменной validStatus.
         *
         * var validStatus = Ext.util.Cookies.get("valid");
         *
         * @param {String} name Имя файла cookie, который нужно получить.
         * @return {Object} Возвращает значение cookie для указанного имени и null, 
         * если имя файла cookie не существует.
         */
        get : function(name) {
            var parts = document.cookie.split('; '),
                len = parts.length,
                item, i, ret;
    
            // В современных браузерах сохраняется файл cookie с пустой строкой: 
            // MyName= 
            // В старых версиях IE он будет храниться как: 
            // MyName 
            // Здесь перебираем все части, пытаясь сопоставить ключ.
            for (i = 0; i < len; ++i) {
                item = parts[i].split('=');
                if (item[0] === name) {
                    ret = item[1];
                    return ret ? unescape(ret) : '';
                }
            }
            return null;
        },
    
        /**
         * Удаляет файл cookie с указанным именем из браузера, если он обнаружен, 
         * путем установки даты истечения его срока действия на какое-то время в прошлом.
         * @param {String} name Имя файла cookie, который необходимо удалить.
         * @param {String} [path] Путь для файла cookie.
         * Это необходимо включить, если указали пути при настройке файла cookie.
         */
        clear : function(name, path){
            if (this.get(name)) {
                path = path || '/';
                document.cookie = name + '=' + '; expires=Thu, 01-Jan-1970 00:00:01 GMT; path=' + path;
            }
        }
    }
}();


/**
 * Класс разметки компонентов на странице.
 * @class Gm.MarkupComponent
 */
Gm.MarkupComponent = function (config = {}) {
    var el = Gm.getById(config.id),
        markup = config.markup;

    function createButton(cnt) {
        let btn = Gm.createEl('div', {className: 'gm-markup-cmp__control'});
        btn.style.left = (cnt.offsetLeft - 2) + 'px';
        btn.style.top = (cnt.offsetTop - 1) +'px';
        cnt.appendChild(btn);
        return btn;
    }

    function createMenu(btn, items) {
        let menu = Gm.createEl('div', {
            className: 'gm-markup-menu',
            show: () => { menu.style.display = 'block'; },
            hide: () => { menu.style.display = 'none'; }
        });

        for (let item of items) {
            item = Gm.applyIf(item, {
                icon: null,
                iconCls: null,
                route: '',
                text: ''
            });

            let className;
            if (item.text === '-')
                className = 'gm-markup-menu__item-sp';
            else {
                className = 'gm-markup-menu__item'/* + (item.iconCls ? ' ' + item.iconCls : '')*/;
                if (item.icon || item.iconCls) {
                    className += ' gm-markup-menu__item-icon';
                }
            }

            let menuItem = Gm.createEl('div', {
                className: className,
                innerText: item.text === '-' ? '' : item.text,
                onmousedown: () => {
                    let type = Gm.isDefined(item.type) ? item.type : 'load';
                    // если необходимо загрузить виджет
                    if (type === 'load')
                        Gm.getBackend().app.widget.load(item.route, item.params || null);
                    // если необходимо выполнить запрос
                    else {
                        // обновить страницу после выполнения запроса
                        item.afterRequest = (success, response) => {
                            if (success && response.success)
                                window.location.href = window.location.href;
                        }
                        Gm.getBackend().makeRequest(item);
                    }
                }
            });
            // если указан URL значка
            if (item.icon)
                menuItem.appendChild(Gm.createEl('img', {src: item.icon, className: 'gm-markup-menu__icon'}));
            else
            if (item.iconCls)
                menuItem.appendChild(Gm.createEl('span', {className: 'gm-markup-menu__icon ' + item.iconCls}));
            menu.appendChild(menuItem);
        }

        button.onclick = function () { 
            markup.hideFramesMenus();
            menu.show();
        }
        button.appendChild(menu);
        return menu;
    }

    var button = createButton(el),
        menu   = createMenu(button, config.menu || {});
    return {
        /**
         * @cfg {HTMLElement}
         * HTML элемента компонента разметки.
         */
        el: el,

        /**
         * @cfg {Object}
         * Параметры конфигурации компонента.
         */
        config: config,

        /**
         * @cfg {HTMLElement}
         * Кнопка управления компонентом разметки.
         */
        button: button,

        /**
         * @cfg {HTMLElement}
         * Меню разметки компонента.
         */
        menu: menu
    }
}


/**
 * Класс разметки блоков на странице.
 * @class Gm.MarkupBlock
 */
Gm.MarkupBlock = function (config = {}) {
    var el = Gm.getById(config.id),
        markup = config.markup;

    function createButton(cnt) {
        let btn = Gm.createEl('div', {
            className: 'gm-markup-block__control',
            title: config.title
        });

        btn.onclick = function ()  { 
            markup.onBlockCtrlClick(config); 
        };
        btn.style.left = (cnt.offsetLeft - 2) + 'px';
        btn.style.top = (cnt.offsetTop - 1) +'px';
        cnt.appendChild(btn);
        return btn;
    }

    var button = createButton(el);
    return {
        /**
         * @cfg {HTMLElement}
         * HTML элемента блока разметки.
         */
        el: el,

        /**
         * @cfg {Object}
         * Параметры конфигурации блока.
         */
        config: config,

        /**
         * @cfg {HTMLElement}
         * Кнопка управления блоком разметки.
         */
        button: button
    }
}


/**
 * Разметка компонентов и блоков на странице.
 * @class Gm.Markup
 */
Gm.Markup = function () {
    var componentsCfg = {},
        components = {},
        blocksCfg = {},
        blocks = {};

    function createCmpFrames(Markup) {
        for (let componentId in componentsCfg) {
            components[componentId] = new Gm.MarkupComponent(
                Gm.applyIf(componentsCfg[componentId], {
                    id: componentId,
                    markup: Markup
                })
            );
        }
    }

    function removeCmpFrames() {
        for (let componentId in componentsCfg) {
            let cmp = Gm.getById(componentId);
            if (cmp) {
                cmp.removeAttribute('id');
                cmp.removeAttribute('class');
                cmp.removeAttribute('title');
                /*
                let children = cmp.children[0] || null;
                if (children) {
                    cmp.parentNode.replaceChild(children, cmp);
                }*/
            }
        }
    }

    function createBlockFrames(Markup) {
        for (let blockId in blocksCfg) {
            blocks[blockId] = new Gm.MarkupBlock(
                Gm.applyIf(blocksCfg[blockId], {
                    id: blockId,
                    markup: Markup,
                    html: Gm.getById(blockId).innerHTML
                })
            );
        }
    }

    function removeBlockFrames() {
        for (let blockId in blocksCfg) {
            let block = Gm.getById(blockId);
            if (block) {
                block.removeAttribute('id');
                block.removeAttribute('class');
                block.removeAttribute('title');
                //block.parentNode.innerHTML = block.innerHTML;
            }
        }
    }
    return {
        /**
         * @cfg {Number}
         * Идентификатор текущей статьи на странице.
         */
        articleId: 0,

        /**
         * @cfg {Number}
         * Идентификатор типа текущей статьи на странице.
         */
         atypeId: 0,

        /**
         * @cfg {Number}
         * Идентификатор текущей категории статьи на странице.
         */
        categoryId: 0,

        /**
         * Добавляет параметры конфигурации компонента.
         * @param {String} id Уникальный идентификатор компонента.
         * @param {Object} config Параметры конфигурации компонента.
         */
        addCmp: (id, config) => {
            componentsCfg[id] = Gm.isObject(config) ? config : JSON.parse(config);
        },

        /**
         * Добавляет уникальный идентификатор блока.
         * @param {String} id Уникальный идентификатор блока.
         */
        addBlock: (id, config) => {
            config = Gm.applyIf(config, { id: id, callId: '', title: '', html: '' });

            blocksCfg[id] = config;
        },

        /**
         * Возвращает параметры конфигурации компонентов.
         * @return {Object}
         */
        getCmpConfig: () => { return componentsCfg; },

        /**
         * Возвращает параметры конфигурации блоков.
         * @return {Object}
         */
        getBlocksConfig: () => { return blocksCfg; },

        /**
         * Возвращает компоненты разметки.
         * @return {Object}
         */
        getComponents: () => { return components; },

        /**
         * Возвращает компонент разметки.
         * @param {String} id Уникальный идентификатор компонента.
         * @return {Object|null}
         */
        getComponent: (id) => { return components[id] || null; },

        /**
         * Возвращает блоки разметки.
         * @return {Object}
         */
        getBlocks: () => { return blocks; },

        /**
         * Возвращает блок разметки.
         * @param {String} id Уникальный идентификатор блока.
         * @return {Object|null}
         */
        getBlock: (id) => { return blocks[id] || null; },

        /**
         * Создаёт компоненты и блоки разметки.
         */
        create: function (config = {}) {
            let me = this;
            if (Gm.isMarkupMode()) {
                me.articleId  = config.articleId || 0;
                me.atypeId  = config.atypeId || 0;
                me.categoryId = config.categoryId || 0;

                createCmpFrames(me);
                createBlockFrames(me);
                
                Gm.getBody().onmousedown = () => { me.hideFramesMenus(); }
            } else {
                removeCmpFrames();
                removeBlockFrames();
            }
        },

        /**
         * Скрывает все меню разметкиы.
         */
        hideFramesMenus: () => {
            for (let componentId in components) {
                components[componentId].menu.hide();
            }
        },

        /**
         * Событие клика на управлении блока разметки.
         * @param {Object} blockConfig Параметры блока разметки.
         */
        onBlockCtrlClick: function (blockConfig) { }
    }
}();