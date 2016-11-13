/**
 * Created by Administrator on 15-9-21.
 */


$(function(){

    jQuery(".banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
//banner

    jQuery(".cc_zs").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    $(".fwxm_left .fwxm_slider").eq(0).addClass("on").find("ul").show();
    $(".fwxm_left .fwxm_slider h3").click(function(){
        if($(this).parent(".fwxm_slider").hasClass("on")){
            $(this).parent(".fwxm_slider").removeClass("on").find("ul").stop().slideUp();
        }else{
            $(".fwxm_left .fwxm_slider").removeClass("on").find("ul").stop().slideUp();
            $(this).parent(".fwxm_slider").addClass("on").find("ul").stop().slideDown();
        }
    });

    jQuery(".fwxm_right").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    jQuery(".px_scroll").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    jQuery(".zhengshu_box").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3});
    jQuery(".tese_scroll").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3});
    $(".tese_scroll .bd ul").on('click','li',function(){
        $(this).parents(".tese_scroll").siblings(".p_f_r_r_text").html($(this).find(".p_f_r_r_text").html());
    });
    jQuery(".fazhan").slide({titCell:".fazhan_hd ul",mainCell:".fazhan_bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,scroll:4});
    $(".fazhan .fazhan_hd ul li").html("");
    jQuery(".team_list").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3});
    $(".team_list .bd ul li").click(function(){
        $(this).addClass("on").siblings().removeClass("on");
        $(this).parents(".team_list").siblings(".team_text").html($(this).find(".dn").html());
    });





//    $(window).scroll(function(){
//        var $Scroll=$(window).scrollTop();
//        var $Hwindow=$(window).height();
//        fade($(".public_title"),'animated flipInY');
//        fade($(".hezuo_list,.bz"),'animated flipInX');
//        fade($(".what_list"),'animated rotateIn');
//        $(".bz ul li h3").fadeIn(15000);
//        fade($(".xx,.diff"),'animated fadeInUpBig');
//        fade($(".yaoqiu"),'animated bounceInDown');
//        fade($(".lc"),'animated bounce');
//        fade($(".youshi_right,.product_right,.news_right,.fazhan_right"),'animated fadeInRightBig');
//        fade($(".youshi_left,.product_left,.news_left,.fazhan_left"),'animated fadeInLeftBig');
//        function fade($class,animate){
//            $class.each(function(){
//                var $top=$(this).position().top;
//                if($Scroll+$Hwindow>$top){
//                    $(this).addClass(animate);
//                    setTimeout(function(){
//                        $(this).removeClass(animate);
//                    },20)
//                }
//            });
//        }
//
//    });
});