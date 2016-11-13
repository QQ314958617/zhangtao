/**
 * Created by Administrator on 15-7-16.
 */
$(function(){
    //banner
    var w=$(document).width();
    jQuery(".banner").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1});
    $(".banner .hd ul li").html("");
    jQuery(".product").slide({});
    jQuery(".join_case").slide({mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4});
//    jQuery("#slideBox1").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:false});
//    jQuery("#slideBox2").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:false});
 $(".sub_nav a:last-child").css({"borderBottom":"none"});


    $(".pro_list ul li").hover(function(){
        $(this).find("b").stop().animate({"bottom":"0"})
        $(this).find("p").stop().animate({"top":"124px"})
    },function(){
        $(this).find("b").stop().animate({"bottom":"-100%"})
        $(this).find("p").stop().animate({"top":"-236px"})
    })
    $(".pro_art_left .small_img img").hover(function(){
        var src=$(this).attr("src");
        $(".pro_art_left .bigimg img").attr("src",src);
    })










   //新闻
    $('.home-news').find('li').hover(function(){
        $(this).siblings().removeClass('on');
        $(this).addClass('on');
    },function(){

    });
    //加盟
    $('.condition,.support-content').find('li').hover(function () {
        $(this).find('img').addClass('rotateIn animated')
    }, function () {
        $(this).find('img').removeClass('rotateIn animated')

    })

    //产品列表
    $('.fenlei-detail').find('a').click(function(){
        $(this).parent().find('a').removeClass('on');
        $(this).addClass('on');
    })
    //产品详情
    $('.product-detail-page .left').find('li').mouseover(function(){
        var html=$(this).html();
        $('.img-box').html(html);
        $(this).parent().find('li').removeClass('on');
        $(this).addClass('on');
    })
//表单
    var name = $('#name');
    var phone = $('#phone');
    var mail = $('#mail');
    var message = $('#message');
    var re = /^1\d{10}$/;
    var re1=/^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/;
    function checkName() {
        if (name.val().trim().length == 0) {
            name.parent().find('.little-box').removeClass('yes-box').addClass('no-box');
            return false;
        }
        else{
            name.parent().find('.little-box').removeClass('no-box').addClass('yes-box');
        }

    }
    name.blur(function(){
        checkName();
    });
    /*姓名不能为空*/
    function checkPhone() {
        if (!re.test(phone.val())) {
            phone.parent().find('.little-box').removeClass('yes-box').addClass('no-box');
            return false;
        }
        else{
            phone.parent().find('.little-box').removeClass('no-box').addClass('yes-box');
        }
    }
    phone.blur(function(){
        checkPhone();
    });
    /*手机号11位*/
    function checkMail() {
        if (!re1.test(mail.val())) {
            mail.parent().find('.little-box').removeClass('yes-box').addClass('no-box');
            return false;
        }
        else{
            mail.parent().find('.little-box').removeClass('no-box').addClass('yes-box');
        }
    }
    mail.blur(function(){
        checkMail();
    });
    /*邮箱正确性*/
    function checkMessage() {
        if (message.val().trim().length == 0) {
            message.parent().find('.little-box').removeClass('yes-box').addClass('no-box');
            return false;
        }
        else{
            message.parent().find('.little-box').removeClass('no-box').addClass('yes-box');
        }
    }
    phone.keyup(function(){
        var val=$(this).val().replace(/\D/g,'');
        $(this).val(val);
    });
    $('.submit').click(function () {
        checkName();
        checkPhone();
        checkMail();
        checkMessage();
        var data = {
            name: name.val(),
            mobile: phone.val(),
            mail: mail.val(),
            message: message.val()
        };
        var url = $(this).data('url');
        $.post(url, data, function (result) {
            alert(result.info);
        }, 'json')
    });


//=====================全局函数========================
//Tab控制函数
    function tabs(tabId, tabNum){
        //设置点击后的切换样式
        $(tabId + " .tab li").removeClass("curr");
        $(tabId + " .tab li").eq(tabNum).addClass("curr");
        //根据参数决定显示内容
        $(tabId + " .tabcon").hide();
        $(tabId + " .tabcon").eq(tabNum).show();
    }
//=====================全局函数========================

//==================图片详细页函数=====================
//鼠标经过预览图片函数
    function preview(img){
        $("#preview .jqzoom img").attr("src",$(img).attr("src"));
        $("#preview .jqzoom img").attr("jqimg",$(img).attr("bimg"));
    }
 $('.spec-scroll').find('img').mouseover(function(){
     preview(this);
 })


//图片预览小图移动效果,页面加载时触发
    $(function(){
        var tempLength = 0; //临时变量,当前移动的长度
        var viewNum = 5; //设置每次显示图片的个数量
        var moveNum = 2; //每次移动的数量
        var moveTime = 300; //移动速度,毫秒
        var scrollDiv = $(".spec-scroll .items ul"); //进行移动动画的容器
        var scrollItems = $(".spec-scroll .items ul li"); //移动容器里的集合
        var moveLength = scrollItems.eq(0).width() * moveNum; //计算每次移动的长度
        var countLength = (scrollItems.length - viewNum) * scrollItems.eq(0).width(); //计算总长度,总个数*单个长度

        //下一张
        $(".spec-scroll .next").bind("click",function(){
            if(tempLength < countLength){
                if((countLength - tempLength) > moveLength){
                    scrollDiv.animate({left:"-=" + moveLength + "px"}, moveTime);
                    tempLength += moveLength;
                }else{
                    scrollDiv.animate({left:"-=" + (countLength - tempLength) + "px"}, moveTime);
                    tempLength += (countLength - tempLength);
                }
            }
        });
        //上一张
        $(".spec-scroll .prev").bind("click",function(){
            if(tempLength > 0){
                if(tempLength > moveLength){
                    scrollDiv.animate({left: "+=" + moveLength + "px"}, moveTime);
                    tempLength -= moveLength;
                }else{
                    scrollDiv.animate({left: "+=" + tempLength + "px"}, moveTime);
                    tempLength = 0;
                }
            }
        });
    });
//==================图片详细页函数=====================
});
