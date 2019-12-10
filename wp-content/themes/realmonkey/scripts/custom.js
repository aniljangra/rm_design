



var iScrollPos = 0; 

$(window).scroll(function () {

    var iCurScrollPos = $(this).scrollTop();

    if (iCurScrollPos > iScrollPos) {

		$('header').addClass("active");

       $('header').removeClass("fixed");

    } else {

       $('header').addClass("fixed");	   

    }

    iScrollPos = iCurScrollPos;

});



 $(document).ready(function() {
 $('a.zoombox').zoombox();   
});




