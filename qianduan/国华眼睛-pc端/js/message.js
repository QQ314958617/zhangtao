var JPlaceHolder = {
    //检测
    _check : function(){
        return 'placeholder' in document.createElement('input');
    },
    //初始化
    init : function(){
        if(!this._check()){
            this.fix();
        }
    },
    //修复
    fix : function(){
        jQuery(':input[placeholder]').each(function(index, element) {
            var self = $(this), txt = self.attr('placeholder');
            self.wrap($('<div></div>').css({position:'relative', zoom:'1', border:'none', background:'none', padding:'none', margin:'none', 'line-height':'40px','font-size':'14px'}));
            var pos = self.position(), h = self.outerHeight(true), paddingleft = self.css('padding-left');
            var holder = $('<span></span>').text(txt).css({position:'absolute', left:pos.left, top:pos.top, height:h, lienHeight:h, paddingLeft:paddingleft, color:'#aaa'}).appendTo(self.parent());
            self.focusin(function(e) {
                holder.hide();
            }).focusout(function(e) {
                    if(!self.val()){
                        holder.show();
                    }
                });
            holder.click(function(e) {
                holder.hide();
                self.focus();
            });
        });
    }
};
//执行
jQuery(function(){
    JPlaceHolder.init();
});

$(document).ready(function(){
    $('.submit_message').click(function(){
        var nam = $(".username");
        var pho = $(".telephone");
        var qq = $(".qq");
        var add = $(".dizhi");

        if(nam.val() == ''){
            $(".bt01").css({"display":"block"});
            nam.focus();
            return false;
        }else{
            var re = /[^\u0000-\u00FF]/;
            if(!re.test(nam.val())){
                $(".bt01").html("请填写您的真实姓名！").css({"display":"block"});
                nam.focus();
                return false;
            }else{$(".bt01").css({"display":"none"});}}

        if(pho.val()=='')
        {
            $(".bt03").html("请填写您的手机号码！").css({"display":"block"});
            pho.focus();
            return false;
        }else{
            var re = /^1\d{10}$/;
            if(!re.test(pho.val())){
                $(".bt03").html("手机号码格式不正确！").css({"display":"block"});
                pho.focus();
                return false;
            }else{$(".bt03").css({"display":"none"});}}

        if(qq.val() == ''){
            $(".bt02").css({"display":"block"});
            qq.focus();
            return false;
        }else{
            var re = /^\d{5,10}$/;
            if(!re.test(qq.val()))
            {
                $(".bt02").html("qq格式不正确").css({"display":"block"});
                qq.focus();
                return false;
            }else{ $(".bt02").css({"display":"none"});}}


        if(add.val()=='')
        {
            $(".bt05").css({"display":"block"});
            add.focus();
            return false;
        }

        if($('textarea').val()=='')
        {
            $("textarea").html("请填写您的留言");
            $("textarea").focus();
            return false;
        }
    });
});
















