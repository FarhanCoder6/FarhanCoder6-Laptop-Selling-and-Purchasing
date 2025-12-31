 <!-- Vendor JavaScripts -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <!--/ vendor javascripts -->
    <script src="assets/bundles/flotscripts.bundle.js"></script>    
    <script src="assets/bundles/d3cripts.bundle.js"></script>
    <script src="assets/bundles/sparkline.bundle.js"></script>
    <script src="assets/bundles/raphael.bundle.js"></script>
    <script src="assets/bundles/morris.bundle.js"></script>
    <script src="assets/bundles/loadercripts.bundle.js"></script>

    <!-- page Js -->
    <script>!function(a,b,c){"object"==typeof module&&module&&"object"==typeof module.exports?module.exports=c:(a[b]=c,"function"==typeof define&&define.amd&&define(b,[],function(){return c}))}(this,"jRespond",function(a,b,c){"use strict";return function(a){var d=[],e=[],f=a,g="",h="",i=0,j=500,k=function(a){var b=a.breakpoint,c=a.enter||c;d.push(a),e.push(!1),l(b)&&(c!==c&&c.call(null,{entering:g,exiting:h}),e[d.length-1]=!0)},l=function(){for(var a=[],b=[],c=0;c<d.length;c++){var f=d[c].breakpoint,g=d[c].enter||c,h=d[c].exit||c;"*"===f?(g!==c&&a.push(g),h!==c&&b.push(h)):l(f)?(g===c||e[c]||a.push(g),e[c]=!0):(h!==c&&e[c]&&b.push(h),e[c]=!1)}for(var i={entering:g,exiting:h},j=0;j<b.length;j++)b[j].call(null,i);for(var k=0;k<a.length;k++)a[k].call(null,i)},l=function(a){var b=0,c=d.length;for(b;b<c;b++){var e=d[b];if("object"==typeof e&&e.breakpoint===a)return b}return-1},m=function(a){for(var b=0,c=d.length;b<c;b++)if(d[b].breakpoint===a)return b;return-1},n=function(a){if("object"==typeof a){if(void 0!==a.breakpoint){var b=a.breakpoint,c=a.enter||c,d=a.exit||c;if("*"===b)return void k(a);if("function"==typeof b){for(var e=!1,f=0;f<d.length;f++)if(b()===d[f].breakpoint){e=!0;break}e||k(a)}else"string"==typeof b&&void 0!==b&&k(a)}else if("string"==typeof a){var g=m(a);g>-1&&d.splice(g,1)}}},o=function(){var a=f.width();if(a!==i){for(var b=0,c=d.length;b<c;b++){var e=d[b],h=e.breakpoint,j=e.enter||c,k=e.exit||c;"*"===h||(h&&h.constructor===Array?function(){for(var a=!1,b=0;b<h.length;b++)if(h[b]<=a&&a<=h[b+1]){a=!0;break}a||l(h)}():h.constructor===Object?function(){var a=h.breakpoint,b=a<=a&&a<=a;a||l(a)}():l(h))}i=a,setTimeout(o,j)}},p=function(a){return a<=i},q=function(a){return a>i},r=function(a){return a===i},s=function(a){return a>=i},t=function(a){return a<i},u=function(a){return a!==i},v=function(){return i},w=function(){return d},x=function(){return e},y=function(){return g},z=function(){return h},A=function(a){g=a},B=function(a){h=a};return{addFunc:n,removeFunc:function(a){n(a)},getBreakpointNames:w,getCurrent:activeBreakpoints:x,enter:y,exit:z,setEnter:A,setExit:B,in:p,out:q,eq:r,geq:s,leq:t,neq:u,width:v}}}(a)});</script>
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/page/index.js"></script>     
</body>
</html>