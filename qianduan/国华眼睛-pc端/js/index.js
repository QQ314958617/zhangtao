/**
 * Created by Administrator on 15-9-21.
 */


$(function(){
    var butc= butcl= numb=numf=0
     var wid =$('.fire ul li').length;
    var number =wid*625+'px'
    $('.fire ul').css('width', number);

    jQuery(".banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    $(".banner .hd ul li").html("");
//banner

    $(".rongyu .bd ul li").hover(function(){
        $(this).find("img").stop().fadeIn();
    },function(){
        $(this).find("img").stop().fadeOut();
    });

    jQuery(".rongyu").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4});

    jQuery(".product_left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    $(".product_left .hd ul li").html("");

    $(".sub_nav .three_nav.on ul").show();
    $(".three_nav_a").click(function(){
        if($(this).hasClass("over")){
            $(this).removeClass("over");
            $(this).parent().removeClass("on").find("ul").stop().slideUp();
        }else{
            $(this).addClass("over");
            $(this).parent().addClass("on").find("ul").stop().slideDown();
        }
    });







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
     $(".e-qq").blur(function(event) {
                // if($(this).val()==""||$(this).val()==null){
                //      $(this).val("QQ");
                if($(this).val()==""||this.value!=="" && ! /^\d{5,10}$/){
                    $('.inform ul li .flas_3').css('display', 'block')
                }else{
                    $('.inform ul li .thur_3').css('display', 'block')
                }
            });
     $(".ponhem").blur(function(event) {
                // if($(this).val()==""||$(this).val()==null){
                //      $(this).val("Phone number");
                if($(this).val()==""|| this.value!=="" && ! /^1\d{10}$/){
                    $('.inform ul li .flas_2').css('display', 'block')
                }else{
                    $('.inform ul li .thur_2').css('display', 'block')
                }
            });
      $(".eman").blur(function(event) {
                // if($(this).val()==""||$(this).val()==null){
                //      $(this).val("Name");
                if($(this).val()==""|| this.value!=="" && !  /[^\u0000-\u00FF]/){
                    $('.inform ul li .flas_1').css('display', 'block')
                }else{
                    $('.inform ul li .thur_1').css('display', 'block')
                }
            });
      function nextFn(event) {               
                butc++;
                var l=$('.join ul li').length;
                if(butc==l){
                  butc=0
                }
                 var moveS=butc*-336;
                $('.join ul').stop().animate({
                    'left':moveS
                }, 500);
            }
            $('.join .right_1').click(nextFn)
        $('.join .left_1').click(function(event) {
            butc--;
            var l=$('.join ul li').length;
                if(butc<l){
                  butc=0
                }
                 var moveS=butc*-336;
                $('.join ul').stop().animate({
                    'left':moveS
                }, 500);
        });
        $('.rightbut_2').click(function(event) {
            numb++;
            if (numb>5) {
                numb=0;
            };
            $('.inpath ul li').eq(numb).addClass('bk').siblings().removeClass('bk');
        });
        $('.leftbut_2').click(function(event) {
            numb--;
            if (numb<0) {
                numb=5;
            };
            $('.inpath ul li').eq(numb).addClass('bk').siblings().removeClass('bk');
        });

});