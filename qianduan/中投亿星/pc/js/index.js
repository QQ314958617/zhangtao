/**
 * Created by Administrator on 15-9-21.
 */


$(function(){

    jQuery(".banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
//banner

    $(".nav_li").hover(function(){
        $(this).find(".nav_a").stop().slideDown();
    },function(){
        $(this).find(".nav_a").stop().slideUp();
    });
//    二级导航
    jQuery(".text_scroll").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",interTime:50,trigger:"click"});


    jQuery(".video").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:2});
    jQuery(".youshi_list").slide({mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:1});
    jQuery(".team_list").slide({mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    jQuery(".hezuo_list").slide({mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5});
    jQuery(".qixia_list").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3});

    $(".qixia_list .hd ul li").html("");
    $(".qixia_list .bd ul li").hover(function(){
        $(this).find(".text").fadeIn(500);
    },function(){
        $(this).find(".text").fadeOut(500);
    });
    jQuery(".slidemenu").slide({titCell:".slidemenu-text", targetCell:".slidemenu-center",defaultIndex:1,effect:"slideDown",delayTime:300,trigger:"click"});



    jQuery(".shipin_list_scroll").slide({mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:3});
    $(".shipin_list_scroll .bd ul li").hover(function(){
        $(this).parents(".shipin_list").find(".shipin_list_img").html( $(this).html());
    });
    jQuery(".zhuanjia_list").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3});
    $(".zhuanjia_list .hd ul li").html("");
    $(".zhuanjia_list .bd ul li").hover(function(){
        $(this).parents(".zhuanjia").find(".zhuanjia_text").html( $(this).find(".none").html());
    });
    $(".pagenews ul li").hover(function(){
        $(this).find(".news_text").stop().animate({"width":"490px","left":"160px"})
        $(this).find(".news_img").stop().animate({"left":"10px"})
    },function(){
        $(this).find(".news_text").stop().animate({"width":"610px","left":"30px"})
        $(this).find(".news_img").stop().animate({"left":"-134px"})
    });

    $(".xuanfu ul li").hover(function(){
        $(this).find("img").stop().show();
    },function(){
        $(this).find("img").stop().hide();
    });
    $(".gotop").click(function(){
        $('html,body').animate({'scrollTop':0},300);
    })


    $(window).scroll(function(){
        var $Scroll=$(window).scrollTop();
        var $Hwindow=$(window).height();
        fade($(".shipin,.hezuo"),'animated fadeInUp');
        fade($(".video,.about_right,.team"),'animated fadeInRight');
        fade($(".news,.about_left,.youshi"),'animated fadeInLeft');
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