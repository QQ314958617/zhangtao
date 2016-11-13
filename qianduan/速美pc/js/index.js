$(function(){
     
// 1 顶部开始
var ban_gaodu=document.documentElement.clientHeight;
var li_kuandu=document.documentElement.clientWidth;
var ban_geshu=$(".f_head_content li").length;
$(".f_ban_dingwei").css({"height":ban_gaodu+"px"});
 $(".f_head_content").css("width",li_kuandu*ban_geshu+"px");
  $(".f_head_content li").css("width",100/ban_geshu+"%");
 $(".f_head_content li").css("height",ban_gaodu);

 var htmla="";
for(var i=0;i<ban_geshu;i++){
  htmla+="<li class='xiao_li'>"+(i+1)+"</li>";
};
$(".f_head_content2").html(htmla);

 $(".f_head_content2 li").eq(0).css({"background":"#2963c0","color":"#fff"});
var timer_ban=null;
var num_ban=0;
 function startMove_ban(){
   num_ban++;
   if(num_ban==ban_geshu){
    num_ban=0;
   }
   $(".f_head_content").stop().animate({"left":-li_kuandu*num_ban+"px"});
   $(".f_head_content2 li").eq(num_ban).css({"background":"#2963c0","color":"#fff"});
   $(".f_head_content2 li").eq(num_ban).siblings("li").css({"background":"#fff","color":"black"});
}
clearInterval(timer_ban);
timer_ban=setInterval(startMove_ban,4000);




$(".xiao_li").mouseover(function(){
  clearInterval(timer_ban);
  num_ban=$(this).index();
   $(".f_head_content").stop().animate({"left":-li_kuandu*num_ban+"px"});
     $(".f_head_content2 li").eq(num_ban).css({"background":"#2963c0","color":"#fff"});
   $(".f_head_content2 li").eq(num_ban).siblings("li").css({"background":"#fff","color":"black"});
})
$(".xiao_li").mouseout(function(){
  clearInterval(timer_ban);
  num_ban=$(this).index();
  clearInterval(timer_ban);
  timer_ban=setInterval(startMove_ban,2000);
  
})


// 1 顶部结束
// 2公司介绍开始

//    function xuanzhuan(obj){
//      var timer0=null;
//      var num_company=0;
//     $(obj).hover(function(){
//         clearInterval(timer0);
//         timer0=setInterval(function(){
//           num_company+=2;
//           if(num_company==360){
//             clearInterval(timer0);
//           }
//           $(obj).css({"transform":"rotateY("+num_company+"deg)","z-index":"30"});     
//           $(obj).siblings("div").css({"transform":"rotateY("+num_company-180+"deg)","z-index":"51"});       
//         },1)
//     },function(){
//         clearInterval(timer0);
//         timer0=setInterval(function(){
//           num_company-=2;
//           if(num_company==0){
//             clearInterval(timer0);
//           }
//            $(obj).css({"transform":"rotateY("+num_company+"deg)","z-index":"51"});     
//           $(obj).siblings("div").css({"transform":"rotateY("+num_company-180+"deg)","z-index":"30"});       
//         },1)
//     })
// }
// xuanzhuan(".f_qian");
// xuanzhuan(".pinpai_story");
// xuanzhuan(".licheng");
// xuanzhuan(".wenhua");
// $(".f_company_main ul li.f_all").hover(function(){
//     clearInterval(timer0);
//     timer0=setInterval(function(){
//       num_company+=2;
//       if(num_company==360){
//         clearInterval(timer0);
//       }
//       $(".f_company_main ul li.f_all").css("transform","rotateY("+num_company+"deg)");     
//     },1)
// },function(){
//     clearInterval(timer0);
//     timer0=setInterval(function(){
//       num_company-=2;
//       if(num_company==0){
//         clearInterval(timer0);
//       }
//       $(".f_company_main ul li.f_all").css("transform","rotateY("+num_company+"deg)");     
//     },1)
// })
    




 
// 2公司介绍结束
// 3 产品中心开始
      
      var timer=null;
      var num=0;
      var geshu=$(".f_dakuai_left ul li").length;
      clearInterval(timer);
      function startMove(){
        num++;
        if(num==geshu-4){
            num=0;
        }
         $(".f_dakuai_left ul").stop().animate({"top":-129*num+"px"});
         $(".f_dakuai_right ul").stop().animate({"top":-506*num+"px"});

          $(".f_dakuai_left ul li").eq(num).siblings("li").find(".gai1").removeClass("on");
         $(".f_dakuai_left ul li").eq(num).find(".gai1").addClass("on");

         $(".f_dakuai_left ul li").eq(num).siblings("li").css("border","1px solid #E3E3E3");
         $(".f_dakuai_left ul li").eq(num).css("border","1px solid #00C7E8");
      }
      timer=setInterval(startMove,3000);
      $(".f_dakuai_left ul li").mouseover(function(){
         clearInterval(timer);
         var suoyin=$(this).index();
         $(this).siblings("li").find(".gai1").removeClass("on");
         $(this).find(".gai1").addClass("on");
         $(".f_dakuai_left ul li").eq(suoyin).siblings("li").css("border","1px solid #E3E3E3");
         $(".f_dakuai_left ul li").eq(suoyin).css("border","1px solid #00C7E8");

         $(".f_dakuai_right ul").stop().animate({"top":-506*suoyin+"px"});
      })
      $(".f_dakuai_left ul li").mouseout(function(){
          clearInterval(timer);
          if($(this).index()>=3){
              num=$(this).index()-3;
          }else if($(this).index()>0){
              num=$(this).index()-1;
          }else{
              num=0;
          }
          timer=setInterval(startMove,3000);
      })
      $(".shang").click(function(){
         clearInterval(timer);
         num--;
         if(num<0){
           num=geshu-4;
         }
          $(".f_dakuai_left ul").stop().animate({"top":-129*num+"px"});
          $(".f_dakuai_right ul").stop().animate({"top":-506*num+"px"});

          $(".f_dakuai_left ul li").eq(num).siblings("li").find(".gai1").removeClass("on");
         $(".f_dakuai_left ul li").eq(num).find(".gai1").addClass("on");

         $(".f_dakuai_left ul li").eq(num).siblings("li").css("border","1px solid #E3E3E3");
         $(".f_dakuai_left ul li").eq(num).css("border","1px solid #00C7E8");
      })
       $(".xia").click(function(){
         clearInterval(timer);
         num++;
         if(num>geshu-4){
           num=0;
         }
          $(".f_dakuai_left ul").stop().animate({"top":-129*num+"px"});
         $(".f_dakuai_right ul").stop().animate({"top":-506*num+"px"});

          $(".f_dakuai_left ul li").eq(num).siblings("li").find(".gai1").removeClass("on");
         $(".f_dakuai_left ul li").eq(num).find(".gai1").addClass("on");

         $(".f_dakuai_left ul li").eq(num).siblings("li").css("border","1px solid #E3E3E3");
         $(".f_dakuai_left ul li").eq(num).css("border","1px solid #00C7E8");
      })
       $(".shang").mouseout(function(){
         clearInterval(timer);
          if($(this).index()>=3){
              num=$(this).index()-3;
          }else if($(this).index()>0){
              num=$(this).index()-1;
          }else{
              num=0;
          }
          timer=setInterval(startMove,3000);
       })
        $(".xia").mouseout(function(){
         clearInterval(timer);
          if($(this).index()>=3){
              num=$(this).index()-3;
          }else if($(this).index()>0){
              num=$(this).index()-1;
          }else{
              num=0;
          }
          timer=setInterval(startMove,3000);
       })
 // 3 产品中心结束
 // 4团队展示开始
 $(".f_zhanshi_right ul li").mouseover(function(){
     var tuanduisuoyin=$(this).index();

     $(".f_zhanshi_left ul li").eq(tuanduisuoyin).addClass('xianshi');
     $(".f_zhanshi_left ul li").eq(tuanduisuoyin).siblings().removeClass('xianshi');
      //$(".f_zhanshi_left ul li").eq(tuanduisuoyin).siblings("li").animate({'display':'none' }, 5000)
     // $(".f_zhanshi_left ul li").eq(tuanduisuoyin).fadeIn(500);
      //$(".f_zhanshi_left ul li").eq(tuanduisuoyin).siblings("li").css('display', 'none');
      // $(".f_zhanshi_left ul li").eq(tuanduisuoyin).siblings("li").removeClass('xianshi').addClass('opa');
         
 })



 // 4团队展示结束
 // 100底部开始
 $(".f_head2_left li").hover(function(){
   $(this).find("div").css("display","block");
   $(this).siblings("li").find("div").css("display","none");
 },function(){
  $(this).find("div").css("display","none");
   $(this).siblings("li").find("div").css("display","none");
 })



 // 100底部结束
})