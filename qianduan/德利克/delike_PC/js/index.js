$(function(){
    $(window).scroll(function(){
      var Scroll=  $(window).scrollTop();
        if(Scroll>=542){
         $(".nav").addClass("pf")
        }else{
            $(".nav").removeClass("pf")
        }
    });
    $(".advantage_right .hd ul li").eq(0).addClass("on");
    $(".advantage_right .bd ul li:first-child").show();
    $(".advantage_right .hd ul li").click(function(){
        var i=$(this).index();
        $(this).addClass("on").siblings().removeClass("on");
        $(".advantage_right .bd ul li").hide();
        $(".advantage_right .bd ul li").eq(i).show().addClass('animated fadeIn');
        $(".advantage_right .bd ul li").find('img').addClass('animated bounceInLeft')
    })
});