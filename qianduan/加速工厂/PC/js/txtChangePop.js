// JavaScript Document

//文章页字体大小切换
function doZoom(size)
{
	var f14 =$('#font14');
	var f16 =$('#font16');
	$('#text').css('font-size',size+'px');
	var op=$('#text').find("p"),
		h3=$('#text').find("h3"),
		label=$('#text').find("label");
	if(size==14){
		f14.attr('class', 'txtSmall');
		f16.attr('class','txtBigCur');
		$('#text').attr('class','text');
	}else if(size==16){
		f14.attr('class', 'txtSmallCur');
		f16.attr('class', 'txtBig');
		$('#text').attr('class', 'text16');
	}
	for(var i=0;i<op.length;i++){
		op.eq(i).css('font-size',size+'px');
	}
	for(var i=0;i<h3.length;i++){
		h3.eq(i).css('font-size',size+'px');
	}
	for(var i=0;i<label.length;i++){
		label.eq(i).css('font-size',size+'px');
	}
}

//文章页作者下方弹出层&鼠标经过颜色变换
$(function(){
	$("[name=authorPop]").mouseenter(function(e){
		//alert("ad");
		$(this).each(function(){
			var objW = $(this).width();
			var objH = $(this).height();
			var id = $(this).attr("name")
			//alert(id);
			var selfX = $(this).offset().top + 12 + objH;
			var selfY = $(this).offset().left;
			$("#" + id).css({"top":selfX,"left":selfY}).slideToggle("slow");
			$(".author").css({"background-position":"10px -280px","color":"#595959"});
			$(".author em").css("background-position","0 -74px");
		});
	})
	$("[name=authorPop]").mouseleave(function(e){
		$(".authorPop").slideUp("slow");
		$(".author").css({"background-position":"10px -49px","color":"#8c8c8c"});
		$(".author em").css("background-position","0 -94px");
	});
})
$(function(){
	$(".shareSummary").mouseenter(function(e){
		$(".shareSummary").css({"background-position":"8px -454px","color":"#595959"});
		$(".shareSummary em").css("background-position","0 -77px");
	})
	$(".shareSummary").mouseleave(function(e){
		$(".shareSummary").css({"background-position":"8px -123px","color":"#8c8c8c"});
		$(".shareSummary em").css("background-position","0 -97px");
	});
})