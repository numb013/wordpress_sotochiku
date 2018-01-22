$(window).load(function() {
	//画面高さ取得
	h = $(window).height();
	$(".main_img").css("min-height", h + "px");
	});
	$(window).resize(function() {
	//画面リサイズ時の高さ取得
	h = $(window).height();
	$(".main_img").css("min-height", h + "px");
});

jQuery(function($) {
    $('.bg-slider').bgSwitcher({
        images: [
			    '../wp-content/themes/wordpress_sotochiku/images/top1.jpg',
				 '../wp-content/themes/wordpress_sotochiku/images/top2.jpg',
				 '../wp-content/themes/wordpress_sotochiku/images/top3.jpg',
				 '../wp-content/themes/wordpress_sotochiku/images/top4.jpg',
				 '../wp-content/themes/wordpress_sotochiku/images/top5.jpg'
		],
    });
});

$(function(){
  $('.effect div, .effect i').css("opacity","0");
  $(window).scroll(function (){
    $(".effect").each(function(){
      var imgPos = $(this).offset().top;    
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > imgPos - windowHeight + windowHeight/5){
        $("i, div",this).css("opacity","1" );
      } else {
        $("i, div",this).css("opacity","0" );
      }
    });
  });
});