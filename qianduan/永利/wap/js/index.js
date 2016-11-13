$(function(){
    $("header img").click(function(){
        $(".nav").stop().animate({"right":"0"},200);
    });
    $(document).delegate("section","click",function(event){
        event.stopPropagation();
        $(".nav").stop().animate({"right":"-200px"},200);
    })
//    导航

       $(".nav .nav_li a.par").click(function(){
        var n=parseInt($(this).parent(".nav_li").find(".menu_li").children().length);
       if(n>0){
           $(this).removeAttr('href');
           $(this).parent(".nav_li").find(".menu_li").stop().slideToggle();
           if($(this).hasClass("up")){
               $(this).removeClass("up").addClass("down");
           }else{
               $(this).removeClass("down").addClass("up");
           }
       };
    });
//    二级导航的判断与显示隐藏
});