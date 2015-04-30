
var app = (function(document, $) {
    'use strict';
    var docElem = document.documentElement,

        _userAgentInit = function() {
            docElem.setAttribute('data-useragent', navigator.userAgent);
        },

        _initFoundation = function() {
            $(document).foundation();
        },

         _init = function() {
             _userAgentInit();
             _initFoundation();
        };

        return {
            init: _init
        }
})(document, jQuery);

(function () {
    app.init();
})();