/**
 * Created by Administrator on 15-9-21.
 */


$(function(){

    jQuery(".banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
//banner
     $(function(){
        $(".fuwu_list ul li").hover(function(){
            $(this).find(".text").stop().animate({"bottom":"0"})
            $(this).find("p").stop().animate({"bottom":"-48px"})
        },function(){
            $(this).find(".text").stop().animate({"bottom":"-46px"})
            $(this).find("p").stop().animate({"bottom":"0"})
        })
     });

    jQuery(".zs_list").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,scroll:3,vis:3});
    $(".zs_list .hd ul li").html("");



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