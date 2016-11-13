/**
 * Created by Administrator on 15-9-21.
 */


$(function(){

    jQuery(".banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
//banner
     $(function(){
        $(".project ul li").hover(function(){
            $(this).find("b").stop().animate({"top":"5px"},100);
            $(this).find(".project_logo").stop().animate({"top":"48px"});
            $(this).find("p").stop().animate({"top":"180px"},800);
            $(this).find("a").stop().animate({"top":"290px"});
        },function(){
            $(this).find("b").stop().animate({"top":"408px"},800);
            $(this).find(".project_logo").stop().animate({"top":"-115px"});
            $(this).find("p").stop().animate({"top":"410px"});
            $(this).find("a").stop().animate({"top":"410px"});
        })
     });

    jQuery(".scrvices_list").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3});
    jQuery(".here").slide({mainCell:".here_bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});

    $(".here_box .here:first-child").show();
    $(".here_hd ul li").hover(function(){
        $(this).addClass("on").siblings().removeClass("on");
       var i= $(this).index();
        $(".here_box .here").eq(i).show().siblings().hide();
    });
    jQuery(".slidemenu").slide({titCell:".slidemenu-text", targetCell:".slidemenu-center",defaultIndex:1,effect:"slideDown",delayTime:300,trigger:"click"});

    $(".team ul li").hover(function(){
        $(this).find("b").fadeIn();
        $(this).find("span").stop().animate({"top":"55px"});
        $(this).find(".text").stop().animate({"left":"15px"});
    },function(){
        $(this).find("b").fadeOut();
        $(this).find("span").stop().animate({"top":"-70px"});
        $(this).find(".text").stop().animate({"left":"-245px"});
    });

    jQuery(".small_img").slide({mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3});
    $(".small_img .bd ul li").hover(function(){
        $(this).css({"borderColor":"#c49667"});
        $(this).parents(".service").find(".big_img").html( $(this).find(".none").html());
    });

    $(window).scroll(function(){
        var $Scroll=$(window).scrollTop();
        var $Hwindow=$(window).height();
        fade($(".title "),'animated flipInX');
        fade($(".project,.scrvices_list "),'animated fadeInUp');
        fade($(".news"),'animated bounce');
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