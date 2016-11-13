$(document).ready(function(){
	
	$('.nav li.subitem1').eq(3).css('margin-right', '180px');
	$('.nav li.subitem1').hover(function() {
		$(this).children('ul').stop(true,true).slideDown(400);
	}, function() {
		$(this).children('ul').stop(true,true).slideUp(400);
	});
	
	$('.news-list li').hover(function() {
		var _os = $(this).find('.time').offset(),_pw,_w;
			_pw = _os.left + $(this).find('.time').width();  							//.bg 的左定位
			_w  = $(document.body).outerWidth(true) - _pw ;								//.bg 的宽度
		$(this).addClass('on');
		$(this).find('.bg').stop(true,true).animate({'left': _pw, 'width': _w}, 400);
	}, function() {
		var _os = $(this).find('.time').offset(),_pw,_w;
			_pw = _os.left + $(this).find('.time').width();  							//.bg 的左定位
			_w  = $(document.body).outerWidth(true) - _pw ;								//.bg 的宽度
		$(this).removeClass('on');
		$(this).find('.bg').stop(true,true).animate({'left': _pw, 'width': 0}, 400);
	});
	
	 /*回到顶部*/
	$(window).scroll(function () {
		var sTop = $(window).scrollTop();
		if(sTop > 768){
			$('#gotop').removeClass('rotateOutUpRight');
			$('#gotop').addClass('rotateInDownRight')
		}
		else
		{
			$('#gotop').removeClass('rotateInDownRight');
			$('#gotop').addClass('rotateOutUpRight');
		}
	})
    $('#gotop,.gotop').click(function(){if(scroll=="off") return;$("html,body").animate({scrollTop: 0}, 400);});
    
})