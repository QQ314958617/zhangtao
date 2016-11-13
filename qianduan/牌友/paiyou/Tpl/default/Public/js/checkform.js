$(function(){

 var checkHanzi = /^[\u4e00-\u9fa5]+$/;
 var checkPhone = /^((\(\d{3}\))|(\d{3}\-))?(13|15|18)\d{9}$/;
 var checkEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

//文本框失去焦点后
$('form :input').blur(function(){
     var $parent = $(this).parent();
     $parent.find(".tips").remove();
     //验证姓名
     if( $(this).is('#name') ){
            if( this.value=="" || ( this.value!="" && !checkHanzi.test(this.value) ) ){
                var errorMsg = '× 请正确填写';
                $parent.append('<span class="tips onError">'+errorMsg+'</span>');
            }else{
                var okMsg = '√ 输入正确';
                $parent.append('<span class="tips">'+okMsg+'</span>');
            }
     }

     //验证电话
     if( $(this).is('#phone') ){
        if( this.value=="" || ( this.value!="" && !checkPhone.test(this.value) ) ){
              var errorMsg = '× 请正确填写';
              $parent.append('<span class="tips onError">'+errorMsg+'</span>');
        }else{
              var okMsg = '√ 输入正确';
              $parent.append('<span class="tips">'+okMsg+'</span>');
        }
     }


     //验证邮件
     if( $(this).is('#email') ){
        if( this.value=="" || ( this.value!="" && !checkEmail.test(this.value) ) ){
              var errorMsg = '× 请正确填写';
              $parent.append('<span class="tips onError">'+errorMsg+'</span>');
        }else{
              var okMsg = '√ 输入正确';
              $parent.append('<span class="tips">'+okMsg+'</span>');
        }
     }
}).keyup(function(){
   $(this).triggerHandler("blur");
}).focus(function(){
     $(this).triggerHandler("blur");
});//end blur


//提交，最终验证。
 $('#submit').click(function(){
        $("form :input.must").trigger('blur');
        var numError = $('form .onError').length;
        if(numError){
            return false;
        } 
		
        
 });

//重置
 // $('#res').click(function(){
 //        $(".formtips").remove(); 
 // });
})