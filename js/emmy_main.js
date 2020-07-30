
;(function(window, document) {

 window.onscroll = function() { 
        scroll() 
    }; 
   
 function scroll() { 
   if (document.body.scrollTop > 100 || 
                document.documentElement.scrollTop > 100) { 
       document.getElementById("navv").style.opacity = "0.5"; 
    } else { 
            document.getElementById("navv").style.opacity = "1"; 
        } 
    } 

}(typeof window !== "undefined" ? window : this, document));


(function( $ ){
$(".nav-links, .nav-next, .nav-previous, .page-numbers, .post-page-numbers").addClass("page-link");
$("div.nav-links.page-link").removeClass("nav-links page-link").addClass("m-3");

})(jQuery);








