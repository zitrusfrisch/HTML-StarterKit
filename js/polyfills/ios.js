/* ================================================================================================================
iOS viewport scaling bug fix | A fix for the iOS orientationchange zoom bug. | https://gist.github.com/901295
================================================================================================================ */
(function(a){function m(){d.setAttribute("content",g),h=!0}function n(){d.setAttribute("content",f),h=!1}function o(b){l=b.accelerationIncludingGravity,i=Math.abs(l.x),j=Math.abs(l.y),k=Math.abs(l.z),(!a.orientation||a.orientation===180)&&(i>7||(k>6&&j<8||k<8&&j>6)&&i>5)?h&&n():h||m()}var b=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(b)&&b.indexOf("AppleWebKit")>-1))return;var c=a.document;if(!c.querySelector)return;var d=c.querySelector("meta[name=viewport]"),e=d&&d.getAttribute("content"),f=e+",maximum-scale=1",g=e+",maximum-scale=10",h=!0,i,j,k,l;if(!d)return;a.addEventListener("orientationchange",m,!1),a.addEventListener("devicemotion",o,!1)})(this);

/* ================================================================================================================
Optimized placeholder for iOS6 - Mooki (http://mooki83.tistory.com)
================================================================================================================ */
$(document).ready(function(){$(window).bind("orientationchange.fm_optimizeInput",fm_optimizeInput)});function fm_optimizeInput(){$("input[placeholder],textarea[placeholder]").each(function(){var tmpText=$(this).attr("placeholder");if(tmpText!=""){$(this).attr("placeholder","").attr("placeholder",tmpText)}})}

/* ================================================================================================================
Hide URL bar on iOS devices
================================================================================================================ */
/mobile/i.test(navigator.userAgent)&&!window.location.hash&&setTimeout(function(){window.scrollTo(0,1)},1000);
