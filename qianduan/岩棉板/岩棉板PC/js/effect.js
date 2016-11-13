$(document).ready(function () {
    startSlider();
    bannerSlider();
    product();
    projectSlider();
    inputChange();
    testLeave();
    recommend_s();
    consultHover();
    culture();
    showPic();
    news();
});
function news(){
    var a_01 = $('.a_01'),
        a_02 = $('.a_02'),
        m = 0;
    a_02.click(function(){
        m += 2;
        if(m == 6){
            m = 4;
        }
        $('.project_con P').css('fontSize',14+m);
    });
    a_01.click(function(){
        m -= 2;
        if(m == -4){
            m = -2;
        }
        $('.project_con P').css('fontSize',14+m);
    });
}
function showPic(){
    var oBody = $('.show_bg'),
        oShow = $('.show_pic'),
        oSpan = $('.show_pic span'),
        oLi = $('.honerSlider li'),
        len = oLi.length,
        oEm = $('.show_pic em'),
        oImg = $('.show_pic img'),
        prev = $('.show_pic .prev'),
        next = $('.show_pic .next');
    function showFun(n){
        var oSrc = oLi.eq(n).find('img').attr('src');
        oImg.attr('src',oSrc);
    }
    oEm.on('click',function(){
        oBody.fadeOut(500);
        oShow.stop(true,false).animate({'opacity':0,'top':'-100%'},500);
    });
    oLi.on('click',function(){
        var i = oLi.index($(this));
        oBody.fadeIn(500);
        oShow.stop(true,false).animate({'opacity':1,'top':0},500);
        showFun(i);
        prev.on('click',function(){
            i--;
            if(i == -1){
                i = 0;
            }
            showFun(i);
        });
        next.on('click',function(){
            i++;
            if(i == len){
                i = len-1;
            }
            showFun(i);
        });
    });
}
function culture(){
    var oSpan = $('.develop .fl span'),
        oH3 = $('.develop .fr h3'),
        oP = $('.develop_t p'),
        prev = $('.develop .arrow .prev'),
        next = $('.develop .arrow .next'),
        oYear = $('.year span'),
        len = oYear.length,
        m = len-1;
    function change(n){
        oYear.removeClass('current');
        oYear.eq(n).addClass('current');
        oP.removeClass('cur');
        oP.eq(n).addClass('cur');
    }
    oYear.click(function(){
        var a = oYear.index($(this));
        m = a;
        change(m);
        oH3.text($(this).text());
        oSpan.text($(this).text());
    });
    prev.click(function(){
        m--;
        if(m == -1){
            m=0;
        }
        else{
            change(m);
            oH3.text(Number(oH3.text())-1);
            oSpan.text(Number(oSpan.text())-1);
        }
    });
    next.click(function(){
        m++;
        if(m == len){
            m=len-1;
        }
        else{
            change(m);
            oH3.text(Number(oH3.text())+1);
            oSpan.text(Number(oSpan.text())+1);
        }
    });
}
function consultHover(){
    var oImg_2 = $('.consult_big img'),
        oImg_1 = $('.consult_min img');
    oImg_1.hover(function(){
        var i = oImg_1.index($(this));
        oImg_1.removeClass('cur');
        $(this).addClass('cur');
        oImg_2.hide();
        oImg_2.eq(i).show();
    },function(){});
}
function recommend_s(){
    var slider = $('.recommend_s .slider ul');
    var oLi = $('.recommend_s .slider li');
    var ul_Li = $('.recommend_s .fl li');
    var len = oLi.length;
    var prev = $('.recommend_s .prev');
    var next = $('.recommend_s .next');
    var heights = oLi.height();
    var m = 0;
    // 第一步,作一个开关,用于记录动画是否已经执行结束
    var flag = true;

    slider.css('height',len*heights);
    function showSlider(n) {
        var nowTop = -n * heights;
        slider.stop(true, false).animate({'marginTop': nowTop}, 300, function () {
            //第三步,只要进了这个回调函数,就表示动画已经结束,所以把flag设置成 true
            flag = true;
        });
    }
    oLi.click(function(){
        var i = oLi.index($(this));
        oLi.removeClass('current');
        $(this).addClass('current');
        ul_Li.eq(i).siblings().fadeOut(500);
        ul_Li.eq(i).fadeIn(800);
    });
    prev.click(function () {
        ////第二步,如果动画执行结束,就可以执行if句子里的.然后,用flag设置为false,通知外面的,正在作动画,这样就进不来if
        if (flag) {
            flag = false;
            m == 0 ? m = 0 : m--;
            showSlider(m);
        }
    });

    next.click(function () {
        ////第二步,如果动画执行结束,就可以执行if句子里的.然后,用flag设置为false,通知外面的,正在作动画,这样就进不来if
        if (flag) {
            flag = false;
            m == len - 5 ? m = len - 5 : m++;
            showSlider(m);
        }
    });
}
function inputChange(){
    var input_01 = $('.name input'),
        input_02 = $('.tel input'),
        input_03 = $('.qq input'),
        input_04 = $('.email input'),
        input_05 = $('.firm input'),
        input_06 = $('.post input'),
        textArea = $('.contact_c textarea');

    input_01.focus(function(){
        if(input_01.val() == '姓名'){
            input_01.val('');
        }
    });
    input_01.blur(function(){
        if(input_01.val() == ''){
            input_01.val('姓名');
        }
    });
    input_02.focus(function(){
        if(input_02.val() == '手机号'){
            input_02.val('');
        }
    });
    input_02.blur(function(){
        if(input_02.val() == ''){
            input_02.val('手机号');
        }
    });
    input_03.focus(function(){
        if(input_03.val() == 'QQ'){
            input_03.val('');
        }
    });
    input_03.blur(function(){
        if(input_03.val() == ''){
            input_03.val('QQ');
        }
    });
    input_04.focus(function(){
        if(input_04.val() == '邮箱'){
            input_04.val('');
        }
    });
    input_04.blur(function(){
        if(input_04.val() == ''){
            input_04.val('邮箱');
        }
    });
    input_05.focus(function(){
        if(input_05.val() == '公司'){
            input_05.val('');
        }
    });
    input_05.blur(function(){
        if(input_05.val() == ''){
            input_05.val('公司');
        }
    });
    input_06.focus(function(){
        if(input_06.val() == '职位'){
            input_06.val('');
        }
    });
    input_06.blur(function(){
        if(input_06.val() == ''){
            input_06.val('职位');
        }
    });
    textArea.focus(function(){
        if(textArea.val() == '请输入内容'){
            textArea.val('');
        }
    });
    textArea.blur(function(){
        if(textArea.val() == ''){
            textArea.val('请输入内容');
        }
    });
}
function testLeave(){
    var oImg = $('.contact_c').find('span'),
        oLeave = $('.leave'),
        name =$('.name input'),
        nameImg = name.next(),
        phone=$('.tel input'),
        phoneImg = phone.next(),
        qq = $('.qq input'),
        qqImg = qq.next(),
        mail=$('.email input'),
        mailImg = mail.next(),
        liuyan = $('.contact_c textarea'),
        reminder = $('.reminder'),
        re_qq = /[1-9][0-9]{4,}/ ,                    //qq正则
        re_name= /^[\u4e00-\u9fa5]{2,16}$/,         //姓名正则
        re_phone = /^1\d{10}$/,                      //电话正则
        re_mail=/^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/;  //邮箱正则
    //姓名验证

    name.blur(function (){
        nameImg.css('visibility','visible');
        if(re_name.test(name.val())&&!(name.val() == '姓名')){
            nameImg.removeClass('noBg').addClass('yesBg');
        }
        else{
            nameImg.removeClass('yesBg').addClass('noBg');
        }
    });
    //手机号码验证
    phone.blur(function (){
        phoneImg.css('visibility','visible');
        if(re_phone.test(phone.val())){
            phoneImg.removeClass('noBg').addClass('yesBg');
        }
        else{
            phoneImg.removeClass('yesBg').addClass('noBg');
        }
    });
    //qq码验证
    qq.blur(function (){
        qqImg.css('visibility','visible');
        if(re_qq.test(qq.val())){
            qqImg.removeClass('noBg').addClass('yesBg');
        }
        else{
            qqImg.removeClass('yesBg').addClass('noBg');
        }
    });
    //email验证
    mail.blur(function (){
        mailImg.css('visibility','visible');
        if(re_mail.test(mail.val())){
            mailImg.removeClass('noBg').addClass('yesBg');
        }
        else{
            mailImg.removeClass('yesBg').addClass('noBg');
        }
    });
    //留言验证
    liuyan.blur(function(){
        if(!liuyan.val()||liuyan.val() == '请输入内容'){
            oLeave.css('visibility','visible');
        }
        else{
            oLeave.css('visibility','hidden');
        }
    });
    $('.btn-sub').click(function(){
        if(!re_name.test(name.val())||(name.val() == '姓名')){
            nameImg.css('visibility','visible');
            return false;
        }
        else if(!re_phone.test(phone.val())){
            phoneImg.css('visibility','visible');
            return false;
        }
        else if(!re_qq.test(qq.val())){
            qqImg.css('visibility','visible');
            return false;
        }
        else if(!re_mail.test(mail.val())){
            mailImg.css('visibility','visible');
            return false;
        }
        else if(!liuyan.val()||liuyan.val() == '请输入内容'){
            oLeave.css('visibility','visible');
            return false;
        }
        else{
            //验证成功后显示提示框
            reminder.fadeIn(500);
            setTimeout(function(){reminder.fadeOut(500);},2000);
        }
        //获取form里的数据
        var data = $('.contact_c form').serialize();
        //ajax数据请求
        $.get('./',data);
        //清空内容
        $('.contact_c input:text,.contact_c textArea').val('');
        //数据提交成功后把小图片隐藏起来
        oImg.css('visibility','hidden');
        oImg.removeClass('yesBg').addClass('noBg');
        oLeave.css('visibility','hidden');
        //数据提交成功后阻止页面刷新
        return false;
    });
    //清空数据和隐藏小图片
    $('.btn-res').click(function(){
        oImg.css('visibility','hidden');
        oImg.removeClass('yesBg').addClass('noBg');
        oLeave.css('visibility','hidden');
    })
}
function projectSlider(){
    var slider = $('.projectSlider'),
        oA = $('.projectSlider ul'),
        widths = $('.project .w').width();
    oA.eq(0).clone().appendTo(slider);
    var len = $('.projectSlider ul').length,
        timer = setInterval(auto, 3500),
        m = 0;
    for(var i = 0; i < len-1; i++){
        $('<span></span>').appendTo($('.project .circle'));
    }
    var num = $('.project .circle span');
    num.eq(0).addClass('current');

    //设置slider的width��
    slider.css('width',widths * len);
    function auto() {
        m++;
        if (m == len) {
            slider.css('marginLeft', 0);
            m = 1;
        }
        showSlider(m);
    }

    function showSlider(n) {
        var lefts = n * widths;
        slider.stop(true, false).animate({'marginLeft': -lefts}, 800);
        num.removeClass('current');
        if (n == len - 1) {
            n = 0;
        }
        num.eq(n).addClass('current');
    }

    slider.hover(function () {
        clearInterval(timer);
    }, function () {
        timer = setInterval(auto, 3500);
    });

    num.hover(function () {
        clearInterval(timer);
    }, function () {
        timer = setInterval(auto, 3500);
    });
    num.click(function () {
        var j = $(this).index();
        if( m== len-1){
            slider.css('marginLeft', 0);
        }
        m = j;
        showSlider(j);
    });
}
function product(){
    var oLi = $('#sort_list li'),
        oSort = $('#sort_r ul');
    oLi.click(function(){
        oLi.removeClass('current');
        $(this).addClass('current');
        oSort.hide();
        oSort.eq($(this).index()).show();
    });
}
function bannerSlider(){
    var banner = $('.banner'),
        slider = $('.banner ul'),
        oA = $('.banner ul li'),
        widths = banner.width();
    oA.eq(0).clone().appendTo(slider);
    var len = $('.banner ul li').length,
        timer = setInterval(auto, 3500),
        m = 0;
    for(var i = 0; i < len-1; i++){
        $('<span>'+(i+1)+'</span>').appendTo($('.banner p'));
    }
    var num = $('.banner p span');
    num.eq(0).addClass('current');

    //����slider�Ŀ��
    slider.css('width',widths * len);
    $('.banner ul li').css('width',widths);
    function auto() {
        m++;
        if (m == len) {
            slider.css('marginLeft', 0);
            m = 1;
        }
        showSlider(m);
    }

    function showSlider(n) {
        var lefts = n * widths;
        slider.stop(true, false).animate({'marginLeft': -lefts}, 600);
        num.removeClass('current');
        if (n == len - 1) {
            n = 0;
        }
        num.eq(n).addClass('current');
    }

    slider.hover(function () {
        clearInterval(timer);
    }, function () {
        timer = setInterval(auto, 3500);
    });

    num.hover(function () {
        clearInterval(timer);
    }, function () {
        timer = setInterval(auto, 3500);
    });
    num.click(function () {
        var j = $(this).index();
        if( m== len-1){
            slider.css('marginLeft', 0);
        }
        m = j;
        showSlider(j);
    });
}
function startSlider(){
    var logo = $('.header .top .fl'),
        oUl = $('.header .top .fr'),
        header_fl = $('.header_con .fl'),
        header_fr = $('.header_con .fr');
    logo.animate({'marginLeft':'0','opacity':1},1000);
    oUl.animate({'marginRight':'0','opacity':1},1000);
    header_fl.delay(500).animate({'marginLeft':'0','opacity':1},1000);
    header_fr.delay(500).animate({'marginRight':'0','opacity':1},1000);
}