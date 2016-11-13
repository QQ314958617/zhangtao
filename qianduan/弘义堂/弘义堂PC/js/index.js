/**
 * Created by Administrator on 15-9-21.
 */
$(function(){

    jQuery(".banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    jQuery(".zizhi").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4});
    jQuery(".case").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3});
    jQuery(".tabslid").slide();
    jQuery(".team_detail_left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:3});
    jQuery(".chubei").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4});
    $(".chubei .hd ul li").html("")
    $(".news_left >div").hover(function(){
        $(this).find("p").stop().animate({"top":"95px"})
        $(this).find("a").stop().animate({"top":"150px"})
    },function(){
        $(this).find("p").stop().animate({"top":"-32px"})
        $(this).find("a").stop().animate({"top":"275px"})
    });
    $(".youshi_list ul li").hover(function(){
        $(this).parents(".youshi_lists").find(".youshi_text").html($(this).find(".text").html());
    });
    $(".join_case ul li").hover(function(){
        $(this).find(".text").stop().slideDown();
    },function(){
        $(this).find(".text").stop().slideUp();
    });

    $(".team_detail_left .bd ul li").click(function(){
        $(".team_detail .team_detail_right .detail_img").html($(this).find(".detail_img").html())
    });

    $(".chubei_list .chubei_text").html($(".chubei .bd ul li:first-child .text").html())
    $(".chubei .bd ul li ").hover(function(){
        $(".chubei_list .chubei_text").html($(this).find(".text").html())
    })

    $(window).scroll(function(){
        var $Scroll=$(window).scrollTop();
        var $Hwindow=$(window).height();
        fade($(".join_left,.news_left,.contact,.fenxi_left,.yaoqiu_left "),'animated fadeinleftbig');
        fade($(".tabslid,.hezuo_list"),'animated fadeIn');
        fade($(".case,.news_right,.table,.fenxi_right,.yaoqiu_right"),'animated fadeinrightbig');
        fade($(".public_title,.center,.fenxi_center,.lc_list"),'animated fadeinupbig');
        fade($(".ky ul li,.gz,.zc_list .zc_list_left ul li"),'animated flipinx ');
        fade($(".youshi ul li,.join_case"),'animated slideinleft ');
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