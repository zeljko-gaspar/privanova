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
        // $('.z-animate').each(function() {
        //     var activeElement = $(this).attr('class');
        //     if ($(this).isInViewport()) {
        //         $(this).addClass('active');
        //     } else {
        //         $(this).removeClass('active');
        //     }
        // });
        // scroll add class
        if ($(window).scrollTop() > 200) {
            $('nav.navbar').addClass('main-bg-color');
        }else{
            $('nav.navbar').removeClass('main-bg-color');
        }
      });
      if($('.waiting').length){
        var words = [
            'insights',
            'news',
            'white papers',
            'project updates',
            'expert opinions'
        ], i = 0;

        setInterval(function(){
            $('.is-word').fadeOut(function(){
                $(this).html(words[i=(i+1)%words.length]).fadeIn();
            });
           // 2 seconds
        }, 2000);
      }
});