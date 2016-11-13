/**
 * Created by Administrator on 15-9-21.
 */
$(function(){

    jQuery(".banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    $(".banner .hd ul li").html("");
//banner
    jQuery(".package").slide({});
//package
    $(".news_left img").attr("src",$(".news_right ul li:first-child img").attr("src"));
    $(".news_right ul li span").hover(function(){
        $(".news_right ul li span").removeClass("on");
        $(this).addClass("on");
       var src= $(this).parent("li").find("img").attr("src");
        $(".news_left img").attr("src",src)
    })
//新闻
    jQuery(".scroll").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:3});

$(".time_an span:last-child").css("background","none")
    $(window).scroll(function(){
        var $Scroll=$(window).scrollTop();
        var $Hwindow=$(window).height();
        fade($(".public_title"),'animated flipInX');
        fade($(".choose,.fuwu"),'animated slideInUp');
        fade($(".news_right,.fankui"),'animated fadeInRight');
        fade($(".news_left,.contact"),'animated fadeInLeft');
        fade($(".hezuo"),'animated fadeinleftbig');
        function fade($class,animate){
            $class.each(function(){
                var $top=$(this).position().top;
                if($Scroll+$Hwindow>$top){
                    $(this).addClass(animate);
                    setTimeout(function(){
                        $(this).removeClass(animate);
                    },20)
                }
            });
        }

    });
});