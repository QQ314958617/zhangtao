
$(function(){  
	//获取导航距离页面顶部的距离  
	var navtop = $("div.subnav").offset().top;  
	var foottop = $("div.footer").offset().top; 
	var navheight = $("div.subnav").height(); 
	//监听页面滚动  
	$(window).scroll(function() {  
	    //判断页面滚动超过导航时执行的代码  
	    if( $(document).scrollTop() > navtop ){  
	         $("div.subnav").addClass('Apo_fi','top0');
	         if( $(document).scrollTop() > foottop-navheight){
	         	$("div.subnav").removeClass('Apo_fi','top0');
	         }
	         
	    } 
	    if( $(document).scrollTop() < navtop ){
         	 $("div.subnav").removeClass('Apo_fi','top0');
         }
	});  
}); 