this.wc=this.wc||{},this.wc.number=function(t){var e={};function n(r){if(e[r])return e[r].exports;var u=e[r]={i:r,l:!1,exports:{}};return t[r].call(u.exports,u,u.exports,n),u.l=!0,u.exports}return n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var u in t)n.d(r,u,function(e){return t[e]}.bind(null,u));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=1131)}({1131:function(t,e,n){"use strict";n.r(e),n.d(e,"numberFormat",function(){return o}),n.d(e,"formatValue",function(){return a}),n.d(e,"calculateDelta",function(){return c});var r=n(47),u=n(3),i=n(1132);function o(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;if("number"!=typeof t&&(t=parseFloat(t)),isNaN(t))return"";var n=Object(u.get)(wcSettings,["currency","decimal_separator"],"."),o=Object(u.get)(wcSettings,["currency","thousand_separator"],",");if(e=parseInt(e),isNaN(e)){var a=t.toString().split("."),c=Object(r.a)(a,2)[1];e=c?c.length:0}return i(t,e,n,o)}function a(t,e){if(!Object(u.isFinite)(e))return null;switch(t){case"average":return Math.round(e);case"number":return o(e)}}function c(t,e){return Object(u.isFinite)(t)&&Object(u.isFinite)(e)?0===e?0:Math.round((t-e)/e*100):null}},1132:function(t,e,n){"use strict";t.exports=function(t,e,n,r){t=(t+"").replace(/[^0-9+\-Ee.]/g,"");var u=isFinite(+t)?+t:0,i=isFinite(+e)?Math.abs(e):0,o=void 0===r?",":r,a=void 0===n?".":n,c="";return(c=(i?function(t,e){var n=Math.pow(10,e);return""+(Math.round(t*n)/n).toFixed(e)}(u,i):""+Math.round(u)).split("."))[0].length>3&&(c[0]=c[0].replace(/\B(?=(?:\d{3})+(?!\d))/g,o)),(c[1]||"").length<i&&(c[1]=c[1]||"",c[1]+=new Array(i-c[1].length+1).join("0")),c.join(a)}},3:function(t,e){!function(){t.exports=this.lodash}()},47:function(t,e,n){"use strict";function r(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){var n=[],r=!0,u=!1,i=void 0;try{for(var o,a=t[Symbol.iterator]();!(r=(o=a.next()).done)&&(n.push(o.value),!e||n.length!==e);r=!0);}catch(t){u=!0,i=t}finally{try{r||null==a.return||a.return()}finally{if(u)throw i}}return n}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance")}()}n.d(e,"a",function(){return r})}});