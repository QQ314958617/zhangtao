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
    $('#submit-contact').click(function(){
        var nam = $("#message1");
        var pho = $("#message2");
        var qq = $("#message3");
        
        if(nam.val() == ''){
            nam.parent().find(".e_form-info").css({"display":"inline"});
            nam.focus();
            return false;
        }else{
            var re = /[^\u0000-\u00FF]/;
            if(!re.test(nam.val())){
                nam.parent().find(".e_form-info").css({"display":"inline"});
                nam.focus();
                return false;
            }else{
                nam.parent().find(".e_form-info").css({"display":"none"});
            }
        }

        if(pho.val()=='')
        {
            pho.parent().find(".e_form-info").css({"display":"inline"});
            pho.focus();
            return false;
        }else{
            var re = /^1\d{10}$/;
            if(!re.test(pho.val())){
                pho.parent().find(".e_form-info").css({"display":"inline"});
                pho.focus();
                return false;
            }else{
               pho.parent().find(".e_form-info").css({"display":"none"});
            }
        }

        if(qq.val() == ''){
            qq.parent().find(".e_form-info").css({"display":"inline"});
            qq.focus();
            return false;
        }else{
            var re = /^\d{5,10}$/;
            if(!re.test(qq.val()))
            {
                qq.parent().find(".e_form-info").css({"display":"inline"});
                qq.focus();
                return false;
            }else{
             qq.parent().find(".e_form-info").css({"display":"none"});
            }
        }

        alert("您的留言已提交！");
    });


    $('#list_sub').click(function(){
        var nam = $("#username");
        var pho = $("#userphone");
        
        if(nam.val() == ''){
            nam.parent().find("i").css({"font-size":"25px"});
            nam.focus();
            return false;
        }else{
            var re = /[^\u0000-\u00FF]/;
            if(!re.test(nam.val())){
                nam.parent().find("i").css({"font-size":"25px"});
                nam.focus();
                return false;
            }else{
                nam.parent().find("i").css({"font-size":"16px"});
            }
        }

        if(pho.val()=='')
        {
            pho.parent().find("i").css({"font-size":"25px"});
            pho.focus();
            return false;
        }else{
            var re = /^1\d{10}$/;
            if(!re.test(pho.val())){
                pho.parent().find("i").css({"font-size":"25px"});
                pho.focus();
                return false;
            }else{
               pho.parent().find("i").css({"font-size":"16px"});
            }
        }

        alert("您的留言已提交！");
    });

    $('#list_sub2').click(function(){
        var nam = $("#username2");
        var pho = $("#userphone2");
        
        if(nam.val() == ''){
            alert("请填写姓名！");
            nam.focus();
            return false;
        }else{
            var re = /[^\u0000-\u00FF]/;
            if(!re.test(nam.val())){
                alert("请填写真实姓名！");
                nam.focus();
                return false;
            }else{
                //nam.parent().find("i").css({"font-size":"16px"});
            }
        }

        if(pho.val()=='')
        {
            alert("请填写联系方式！");
            pho.focus();
            return false;
        }else{
            var re = /^1\d{10}$/;
            if(!re.test(pho.val())){
                alert("请填写真实联系方式！");
                pho.focus();
                return false;
            }else{
               //pho.parent().find("i").css({"font-size":"16px"});
            }
        }
        alert("您的留言已提交！");
    });
});
















