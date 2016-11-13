/**
 * Created by Administrator on 15-9-21.
 */


$(function(){
    var Width =$(window).width();
    var Height =$(window).height();
    $(".content").css({"width":Width,"height":Height});
    $(".banner ul li").css({"width":Width});
    $(".index_banner").css({"width":Width-180});
    $(".menu,.page_banner").css({"height":Height});
    jQuery(".banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1,mouseOverStop:false});
//banner
    var home=$(".home");
    $(".open").click(function(){
            home.stop().animate({"left":"270px"});
            home.find(".open").hide();
            home.find(".close").show();
            $(".banner").css({"marginLeft":"-120px","width":Width-90});
            $(".index_banner").css({"width":Width-180}).stop().animate({"left":"180px"});
            home.parent().find(".menu").addClass("on").stop().animate({"left":"0px"});
    });

    $(".close").click(function(){
        home.stop().animate({"left":"50px"});
        home.find(".open").show();
        home.find(".close").hide();
        $(".index_banner,.banner").css({"width":Width});
        $(".banner").css({"marginLeft":"0"});
        $(".index_banner").stop().animate({"left":"0px"});
        home.parent().find(".menu").removeClass("on").stop().animate({"left":"-180px"});
    });
//    首页导航
    jQuery(".product_scroll").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3});
    $(".product_scroll .hd ul li").html("");
    jQuery(".xx").slide({trigger:"click"});
    jQuery(".fazhan_right").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:5,trigger:"click"});
    jQuery(".product_list").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5,trigger:"click"});
    $(".product_list .hd ul li").html("");
    jQuery(".small_img").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
    $(".small_img .bd ul li").click(function(){
       $(".p_d_t_left .big_img img").attr("src",$(this).find("img").attr("src"));
    });
    $(".dingzhi ul li").hover(function(){
        $(this).find("b").stop().animate({"top":"-10%"});
        $(this).find(".text").stop().animate({"top":"0"});
    },function(){
        $(this).find("b").stop().animate({"top":"40%"});
        $(this).find(".text").stop().animate({"top":"-100%"});
    });

    $(".what_list ul li").hover(function(){
        $(this).find(".text").html();
        $(".join_logo").fadeOut();
        $(".center_text").fadeIn().html($(this).find(".text").html());
    },function(){
        $(".join_logo").fadeIn();
        $(".center_text").fadeOut().html("");
    })

    $(".product_right ul li.db:first-child").show();
    $(".product_left ul li").click(function(){
        var i=$(this).index();
        $(".product_right ul li.db").eq(i).show().siblings().hide();
    });


    $(window).scroll(function(){
        var $Scroll=$(window).scrollTop();
        var $Hwindow=$(window).height();
        fade($(".public_title"),'animated flipInY');
        fade($(".about_text "),'animated rotateIn');
        fade($(".indexcase "),'animated fadeInUpBig');
        fade($(".zc_list ul li"),'animated bounceInDown');
        fade($(".lc"),'animated bounce');
        fade($(".youshi_right,.product_right,.news_right,.fazhan_right"),'animated fadeInRightBig');
        fade($(".youshi_left,.product_left,.news_left,.fazhan_left"),'animated fadeInLeftBig');
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