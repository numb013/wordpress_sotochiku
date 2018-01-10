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
        images: ['../sotochiku/images/top1.jpg','../sotochiku/images/top2.jpg','../sotochiku/images/top3.jpg'], // 切り替える背景画像を指定
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
	      $("i",this).css({ 
	        "font-size": "100px",
	        "padding": "0 20px 40px"
	      });
	    } else {
	      $("i, div",this).css("opacity","0" );
	      $("i",this).css({ 
	        "font-size": "20px",
	        "padding": "20px"
	      });
	    }
	  });
	});
});