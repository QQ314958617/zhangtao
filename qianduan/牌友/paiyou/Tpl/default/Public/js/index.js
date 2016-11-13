var form = {
    username: /^[A-Za-z0-9]{6,}$/,
    name: /^\s*[\u4e00-\u9fa5]{1,15}\s*$/,
    numbers: /^\s*\d+\s*$/,
    phone: /^((\+?86)|(\(\+86\)))?1\d{10}$/,
    card: /^\s*\d{15}\s*$/,
    card1: /^\s*\d{16}[\dxX]{2}\s*$/,
    cardname: /^\s*[\u4e00-\u9fa5]{1,}[\u4e00-\u9fa5.·]{0,15}[\u4e00-\u9fa5]{1,}\s*$/,
    email: /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/,
    password: /^[a-zA-Z]{1}([a-zA-Z0-9]|[*_ # @ % $ &  = +]){4,14}[a-zA-Z0-9]{1}$/,
    qq: /^[1-9][0-9]{4,11}$/,
    cha: /^[\u0391-\uFFE5]+$/,
    date: /^\d{4}-(0?[1-9]|1[0-2])-(0?[1-9]|[1-2]\d|3[0-1])$/,
    time: /^([0-1]\\d|2[0-3]):[0-5]\\d:[0-5]\\d$/,
    ffzf: /[`~!@#$%^&*()_+<>?:"{},.\/;'[\]]/im,
    inp: "必须填写不能为空",
    err: "不正确",
    nan: "格式不正确",
    rit: "正确",
    trit: "√",
    terr: "×",
    tolen: "不能超过10字符或少于2个字符",
    tolens: "不能超过18字符或少于6个字符",
    plen: "必须为首字符字母，长度6到16位",
    torit: "请输入正确的",
    ff: "非法数据不予接受",
    lir: "  例如：123456@163.com",
    ruo: "强度太弱",
    zhong: "强度中等",
    qiang: "强度高等"
};
form.isnull = function (obj) {
    var objs = obj;
    var len = objs.length;
    for (var i = 0; i < len; i++) {
        objs.eq(i).blur(function () {
            form.iserr($(this));
        });
    }
};
form.iserr = function (obj) {
    if (obj.val().length < 1) {
        if (obj.parents("label").next().hasClass("txt")) {
            var txts = obj.parents("label").text();
            obj.parents("label").next().text(txts + form.inp).css({"color": "#cc3333"});
        }
        obj.addClass("errs");
    }
};
form.subm = function (obj, ajax, cobj) {
    cobj.click(function () {
        for (var i = 0; i < obj.length; i++) {
            form.iserr(obj.eq(i));
            var txts = obj.eq(i).parents("label").text();
            obj.eq(i).not(".errs").parents("label").next().text(txts + form.rit).css({"color": "#169b26"});
        }
        if (!obj.hasClass("errs")) {
            ajax();
        }
    });
};
form.istime = function () {
    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj.parents("label").find("span").text();
        obj.blur(function () {
            var val = obj.val();
            var data = obj.data("msg");
            var texts = obj.parents("label").next();
            if (val.length == 0) {
                texts.text(txts + form.inp).css({"color": "#cc3333"});
            } else if (!form.time.exec(val)) {
                texts.text(txts + form.plen).css({"color": "#cc3333"});
            } else {
                texts.text(txts + form.rit).css({"color": "#169b26"});
            }
        });
    }
};
form.isdate = function () {
    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj.parents("label").find("span").text();
        obj.blur(function () {
            var val = obj.val();
            var data = obj.data("msg");
            var texts = obj.parents("label").next();
            if (val.length == 0) {
                texts.text(txts + form.inp).css({"color": "#cc3333"});
            } else if (!form.date.exec(val)) {
                texts.text(txts + form.plen).css({"color": "#cc3333"});
            } else {
                texts.text(txts + form.rit).css({"color": "#169b26"});
            }
        });
    }
};
form.isnumber = function () {
    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj.parents("label").find("span").text();
        obj.blur(function () {
            var val = obj.val();
            var data = obj.data("msg");
            var texts = obj.parents("label").next();
            if (val.length == 0) {
                texts.text(txts + form.inp).css({"color": "#cc3333"});
            } else if (!form.numbers.exec(val)) {
                texts.text(txts + form.plen).css({"color": "#cc3333"});
            } else {
                texts.text(txts + form.rit).css({"color": "#169b26"});
            }
        });
    }
};
form.iscord = function (obj) {
    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj.parents("label").find("span").text();
        obj.blur(function () {
            var val = obj.val();
            var data = obj.data("msg");
            var texts = obj.parents("label").next();
            if (val.length == 0) {
                texts.text(txts + form.inp).css({"color": "#cc3333"});
            } else if (!form.card.exec(val) && !form.card1.exec(val)) {
                texts.text(txts + form.plen).css({"color": "#cc3333"});
            } else if (form.card.exec(val) && form.card1.exec(val)) {
                obj.removeClass("errs");
                texts.text(txts + form.rit).css({"color": "#169b26"});
            }
        });
    }
};
form.isusername = function (obj, aja) {
    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj.parents("label").find("span").text();
        obj.blur(function () {
            var val = obj.val();
            var data = obj.data("msg");
            var texts = obj.parents("label").next();
            if (val.length == 0) {
                texts.text(txts + form.inp).css({"color": "#cc3333"});
            } else if (!form.username.exec(val)) {
                texts.text(txts + form.plen + form.tolens).css({"color": "#cc3333"});
                obj.addClass("errs");
            } else {
                obj.removeClass("errs");
                texts.text(txts + form.rit).css({"color": "#169b26"});
            }
        });
    }
};
form.passw1 = function (obj) {
    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj.parents("label").text();
        obj.blur(function () {
            var val = obj.val();
            var data = obj.data("msg");
            var texts = obj.parents("label").next();
            if (val.length == 0) {
                texts.text(txts + form.inp).css({"color": "#cc3333"});
            } else if (!form.password.exec(val)) {
                var emailmsg = data ? txts + form.nan + form.lir : txts + form.nan;
                texts.text(txts + form.plen).css({"color": "#cc3333"});
                obj.addClass("errs");
            } else {
                obj.removeClass("errs");
                if (/([^0-9]{4,16})/.test(val) && val.length > 10) {
                    texts.text(txts + form.qiang).css({"color": "#169b26"});
                } else if (/([^0-9]{1,16})/.test(val) && val.length > 7) {
                    texts.text(txts + form.zhong).css({"color": "#f8bf6e"});
                } else {
                    texts.text(txts + form.ruo).css({"color": "#e17104"});
                }

            }
        });
    }
};
form.passw2 = function (obj1, obj2) {
    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj1.parents("label").text();
        var txt2 = obj2.parents("label").text();
        obj1.blur(function () {
            var val = obj1.val();
            var data = obj1.data("msg");
            var texts = obj1.parents("label").next();
            if (val.length == 0) {
                texts.text(txts + form.inp).css({"color": "#cc3333"});
            } else if (txt2 != txts) {
                texts.text(txts + form.err).css({"color": "#cc3333"});
                obj1.addClass("errs");
            } else {
                obj1.removeClass("errs");
                texts.text(txts + form.rit).css({"color": "#169b26"});
            }
        });
    }
};
form.isuser = function (obj) {
    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj.parents("label").text();
        obj.blur(function () {
            var val = obj.val();
            var msg = obj.data("msg");
            var texts = obj.parents("label").next();
            if (!form.name.exec(val)) {
                if (val.length == 0) {
                    texts.text(txts + form.inp).css({"color": "#cc3333"});
                } else if (val.length < 11 && val.length > 1) {
                    texts.text(txts + form.nan).css({"color": "#cc3333"});
                } else {
                    texts.text(txts + form.tolen).css({"color": "#cc3333"});
                }
                obj.addClass("errs");
            } else {
                obj.removeClass("errs");
                texts.text(txts + form.rit).css({"color": "#169b26"});
            }
        });
    }
};
form.isemail = function (obj) {
    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj.parents("label").text();
        obj.blur(function () {
            var val = obj.val();
            var data = obj.data("msg");
            var texts = obj.parents("label").next();
            if (val.length == 0) {
                texts.text(txts + form.inp).css({"color": "#cc3333"});
            } else if (!form.email.exec(val)) {
                var emailmsg = data ? txts + form.nan + form.lir : txts + form.nan;
                texts.text(emailmsg).css({"color": "#cc3333"});
                obj.addClass("errs");
            } else {
                obj.removeClass("errs");
                texts.text(txts + form.rit).css({"color": "#169b26"});
            }
        });
    }
};
form.isphone = function (obj) {

    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj.parents("label").text();
        obj.blur(function () {
            var val = obj.val();
            var texts = obj.parents("label").next();
            if (val.length == 0) {
                texts.text(txts + form.inp).css({"color": "#cc3333"});
            } else if (!form.phone.exec(val)) {
                texts.text(txts + form.nan).css({"color": "#cc3333"});
                obj.addClass("errs");
            } else {
                obj.removeClass("errs");
                texts.text(txts + form.rit).css({"color": "#169b26"});
            }
        });
    }
};
form.isqq = function (obj) {
    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj.parents("label").text();
        obj.blur(function () {
            var val = obj.val();
            var texts = obj.parents("label").next();
            if (val.length == 0) {
                texts.text(txts + form.inp).css({"color": "#cc3333"});
            } else if (!form.qq.exec(val)) {
                texts.text(txts + form.nan).css({"color": "#cc3333"});
                obj.addClass("errs");
            } else {
                obj.removeClass("errs");
                texts.text(txts + form.rit).css({"color": "#169b26"});
            }
        });
    }
};
form.ismsg = function (obj) {
    if (obj.parents("label").next().hasClass("txt")) {
        var txts = obj.parents("label").text();
        obj.blur(function () {
            var val = obj.val();
            var texts = obj.parents("label").next();
            if (val.length == 0) {
                texts.text(txts + form.inp).css({"color": "#cc3333"});
            } else if (form.ffzf.exec(val)) {
                texts.text(txts + form.ff).css({"color": "#cc3333"});
                obj.addClass("errs");
            } else {
                obj.removeClass("errs");
                texts.text(txts + form.rit).css({"color": "#169b26"});
            }
        });
    }
};
/*ajax表单提交填写处理函数*/
function funss()
{
    var url=$('.submit').attr('link');
	var data=$('#form1').serialize();
	$.post(url,data,function(item){
	if(item.url==1)
	{
		alert(item.info);
		$('#form1')[0].reset();
		return false;
	}else
	{
		alert(item.info);
		return false;
	}
	
	},"json")
}
function con_fun(){
    var url=$(".submit1").data('url');
    var datas=$('#form1').serialize();
    $.post(url,datas,function(item)
    {
        alert(item.info);
        $('#form1')[0].reset();
    },"json");
}
form.isphone($(".phones"));
form.ismsg($(".tomsg"));
form.isuser($(".name"));
form.subm($(".inp"), funss, $(".submit"));
form.subm($(".inp"), con_fun, $(".submit1"));
$(".reset").click(function(){
    $(".txt").text("");
});
$(".inp").val("");