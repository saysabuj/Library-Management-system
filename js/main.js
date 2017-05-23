(function($) {
	$('.navbar-toggle').on('click', function(){
		$('#mobile-nav').slideToggle(300);
	});

    /*-------search add class----------*/
	$(".search").click(function(){
    $(".hdr_submit").addClass("click_submit");
    });

})(jQuery);