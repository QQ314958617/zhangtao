/**
 * Created by Administrator on 15-9-21.
 */


$(function(){
    jQuery(".banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    $(".banner .hd ul li").html("");
//banner
    jQuery(".ad").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    jQuery(".body_tab").slide({trigger:"click"});
//    jQuery(".content_left").slide({titCell:"h3", targetCell:".about_nav",defaultIndex:1,effect:"slideDown",delayTime:300,trigger:"click",defaultPlay:false,easing:"easeOutCirc"});

});