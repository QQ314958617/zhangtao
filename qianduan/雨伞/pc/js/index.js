/**
 * Created by Administrator on 15-9-21.
 */


$(function(){
    var Width =$(window).width()-18;
    var pwidth=Width+18;
    var Height =$(window).height();
    $(".content1").css({"width":pwidth,"height":Height});
    $(".content,.pro_art_right").css({"width":Width});
    $(".index,.index_banner,.product,.news").css({"width":Width,"height":Height});
    $(".page_product").css({"width":pwidth,"height":Height});
    $(".add_product").css({"width":pwidth-260,"height":Height});
    $(".menu,.tomenu,.nav,.sub_menu,.pro_art_left").css({"height":Height});
    $(".news_list ul li:last-child").css("border-bottom","none");
    $(".shipin_text").css({"width":pwidth-710});
//banner
    var home=$(".home");
    $(".open").click(function(){
            home.stop().animate({"left":"275px"});
            home.find(".open").hide();
            home.find(".close").show();
            home.parent().find(".menu").addClass("on").stop().animate({"left":"0px"});
            home.parent().find(".links").stop().animate({"left":"60px"});
            $(".index").css({"width":Width}).stop().animate({"left":"260px"});
            $(".index_banner").css({"width":Width});
            $(".page_product").css({"width":pwidth-260}).stop().animate({"left":"260px"});
            $(".news").css({"width":Width-260}).stop().animate({"left":"260px"});
            $(".nav").stop().animate({"left":"260px"});
            $(".product").stop().animate({"left":"260px"},function(){$(this).css({"width":Width-260,"paddingLeft":"0","paddingRight":"0"})});
            $(".pro_art_right").css({"width":Width-760});
    });
    $(".close").click(function(){
        home.stop().animate({"left":"15px"});
        home.find(".open").show();
        home.find(".close").hide();
        home.parent().find(".menu").removeClass("on").stop().animate({"left":"-260px"});
        home.parent().find(".links").stop().animate({"left":"60px"});
        $(".index,.index_banner").css({"width":Width}).stop().animate({"left":"0px"});
        $(".news").css({"width":Width}).stop().animate({"left":"0px"});
        $(".page_product").css({"width":pwidth}).stop().animate({"left":"0px"});
        $(".nav").stop().animate({"left":"0"});
        $(".product").css({"paddingLeft":"130px","paddingRight":"130px"}).stop().animate({"left":"0"});
        $(".pro_art_right").css({"width":Width-500});

    });
//    首页导航

    $(".nav .sub_nav ul li ").hover(function(){
       $(this).find(".last_nav").stop().slideDown();
    },function(){
        $(this).find(".last_nav").stop().slideUp();
    });
//    产品页导航
    $(".pro_art_left ul").html($(".pro_art_right .pro_detail .detail_img:first-child ul").html())
    $(".pro_art_right .pro_detail .detail_img").hover(function(){
        $(this).addClass("on").siblings().removeClass("on");
        var html= $(this).find("ul").html();
        $(".pro_art_left ul").html(html)
    });
    $(".pro_art_right p span").click(function(){
        $(this).addClass("on").siblings().removeClass("on")
    });
    $(".gongyi_left ul li").click(function(){
       var span= $(this).find("span").html();
        $(".gongyi_left .text h4").html(span);
        var text=$(this).find(".text").html();
        $(".gongyi_left .text .txt").html(text);
        var img=$(this).find("img").attr("src");
        $(".gongyi_right").css("background-image","url("+img+")")
    })
    jQuery(".fz_lc").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3});
    $(".fz_lc .bd ul li").click(function(){
        $(this).addClass("on").siblings().removeClass("on");
        $(".fz_text").html($(this).find(".text").html());
    })




    $(".tomenu").hover(function(){
        $(this).stop().animate({"left":"260px"},500);
        $(this).parents().find(".menu").stop().animate({"left":"0px"},500);
    });
    $(".pro .menu").hover(function(){},function(){
        $(this).stop().animate({"left":"-260px"},500);
        $(this).parent().find(".tomenu").stop().animate({"left":"0"},500);
    });

    $(".nav .sub_nav ul li ").hover(function(){
        $(this).find(".last_nav").stop().slideDown();
    },function(){
        $(this).find(".last_nav").stop().slideUp();
    });
    //    产品页导航

    $(".falv_list ul li.on .falv_list_text").show();
    $(".falv_list ul li h4").click(function(){
        if( $(this).parent().hasClass("on")){
            $(this).parent().find(".falv_list_text").slideUp();
            $(this).parent().removeClass("on");
        }else{
            $(this).parent().addClass("on").siblings().removeClass("on");
            $(this).parent().find(".falv_list_text").slideDown();
        }
    });
//    法律声明
});