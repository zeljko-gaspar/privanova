$(document).ready(function(){
	// on click add class on current item and remove others
	$(".shortcode-page .nav-pills .nav-link").click(function () {
		$(".shortcode-page .nav-pills .nav-link").removeClass("active");
		$(this).addClass("active");
	});
	// on load add class
	$('body').addClass('loaded');
	// popups
	$('.popupp').click(function(e){
		e.stopPropagation();
		var popupp = $(this).data('popup');
		$('#log-overlay').fadeIn();
		$(popupp).parent().parent('.popup-wrap').addClass('show-popup');
		$(popupp).addClass('show-popup');
	});
	$('.popup').click(function(e){
		e.stopPropagation();
	});
	$('.popup-wrap-content, .close-popup, .close, .closee').click(function(){
		$('#log-overlay').fadeOut();
		$('.popup-wrap').removeClass('show-popup');
		$('.popup').removeClass('show-popup');
	});
    $(window).on('resize scroll load', function() {
        // on viewport add class
        $('.z-animate').each(function() {
          var activeElement = $(this).attr('class');
        if ($(this).isInViewport()) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
        }); 
        // scroll add class
        if ($(window).scrollTop() > 20) {
          $('body').addClass('scrolled');
        }else{
          $('body').removeClass('scrolled');
        }
      });
});