/**
 * Created by Administrator on 15-9-21.
 */


$(function(){
    jQuery(".banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    $(".banner .hd ul li").html("");
//banner
    $(".product_list .pro_right").hover(function(){
        $(this).find(".text").stop().animate({"top":"0px"})
    },function(){
        $(this).find(".text").stop().animate({"top":"-400px"})
    })
    $(".ys_list .ys_list_img:last-child").css("border-bottom","none");
    jQuery(".wenhua_scorll").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4});

   $(".cheding_detail .c_d_l .smallimg img").hover(function(){
       var src =$(this).attr("src")
       $(".cheding_detail .c_d_l .bigimg img").attr("src",src)
   });
    $(".c_d_r .fenlei .img_bg").click(function(){
        $(this).siblings().find("b").hide();
        $(this).find("b").show();
        $(".cheding_detail .c_d_l .bigimg img").attr("src",$(this).find("img").attr("src"))
    })
    $(".wz_listimg ul li").hover(function(){
        $(this).stop().animate({"zIndex":"9","padding":"5px 3px","width":"186px","height":"278px"});
        $(this).find("img").stop().animate({"width":"192px","height":"288px"})
        $(this).find("p").stop().animate({"width":"186px","bottom":"0"})
    },function(){
        $(this).stop().animate({"zIndex":"1","padding":"20px 12px","width":"174px","height":"258px"});
        $(this).find("img").stop().animate({"width":"174px","height":"258px"})
        $(this).find("p").stop().animate({"width":"174px","bottom":"-100%"})
    })






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