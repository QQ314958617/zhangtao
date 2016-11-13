/**
 * Created by Administrator on 15-9-21.
 */
function change(index, s_type){
    
    var select_type = s_type;
    var $select_list = $(".e_text-select");

    $select_list.find("option").each(function() {
        var $this = $(this);
        if($this.attr("data-type") == select_type) {
            $this.attr("selected",true);
            $this.siblings().attr("selected",false);
        }
    })

    $(".b_car-list").find(".b_car-list-item").eq(index).addClass("on").siblings().removeClass("on");
}
$(function(){
//banner
    $(".b_nav-item").has(".b_nav-block").hover(function() {
        $(".b_nav-block").stop(true,true).slideDown(500);
    },function() {
        $(".b_nav-block").stop(true,true).slideUp(500);
    })

    $(".b_nav-item").has(".b_nav-item-sub").each(function() {
        var $this = $(this);
        $this.hover(function() {
            $this.find($(".b_nav-item-sub")).stop(true,true).slideDown(500);
        },function() {
            $this.find($(".b_nav-item-sub")).stop(true,true).slideUp(500);
        })
    }) 
    

    $(".b_nav-carname-list-box-item").each(function() {
        var $this = $(this);
        $this.find(".b_nav-carstyle-list-item").each(function() {
            var $this = $(this);
            $this.parent().parent().find(".b_nav-car-show .b_nav-car-show-item").eq(0).show();
            $this.parent().parent().find(".b_nav-car-show .b_nav-car-show-item").eq(0).siblings().hide();
            $this.on("mouseover",function() {
                var $index = $this.index();
                $this.parent().parent().find(".b_nav-car-show .b_nav-car-show-item").eq($index).show();
                $this.parent().parent().find(".b_nav-car-show .b_nav-car-show-item").eq($index).siblings().hide();
            })
        })
    })
    $(".b_nav-block").each(function() {
        var $this = $(this);
        $this.find(".b_nav-carname-list-item").each(function() {
            var $this = $(this);
            $this.parent().parent().find(".b_nav-carname-list-box .b_nav-carname-list-box-item").eq(0).show();
            $this.parent().parent().find(".b_nav-carname-list-box .b_nav-carname-list-box-item").eq(0).siblings().hide();
            $this.on("mouseover",function() {
                var $index = $this.index();
                $this.parent().parent().find(".b_nav-carname-list-box .b_nav-carname-list-box-item").eq($index).show();
                $this.parent().parent().find(".b_nav-carname-list-box .b_nav-carname-list-box-item").eq($index).siblings().hide();
            })
        })
    })
    
    $(".b_banner").slide({titCell:".b_banner-ps",prevCell:".e_left-a",nextCell:".e_right-a",mainCell:".b_banner-box",autoPage:true,effect:"leftLoop",autoPlay:true,vis:1});


    $(".b_img-show").slide({titCell:".hd",targetCell:".b_target li",mainCell:".b_img-show-box",autoPage:true,effect:"leftLoop",autoPlay:true,vis:1});
    $(".b_hotsale-item-box").slide({titCell:".hd",mainCell:".b_showblock-box",vis:1,autoPage:true,})
    if(!!$(".b_main-box-left-top").has(".b_carshow-list")) {
         $(".b_main-box-left-top").slide({titCell:".b_span li",mainCell:".b_carshow-list"});
    }
    $(".b_img-show-2").slide({titCell:".hd",targetCell:".b_target li",mainCell:".b_img-show-box",autoPage:true,effect:"leftLoop",autoPlay:true,vis:1});
    $(".B_news2").slide({titCell:".b_news-select-list-item",targetCell:".b_left-news-block"});
    $(".b_honor").slide({titCell:".hd_ li",prevCell:".e_lt",nextCell:".e_gt",mainCell:".bd_",targetCell:".tar li",autoPage:true,effect:"left"})
    $(".b_img-scroll").slide({titCell:".hd li",mainCell:".b_img-scroll-list",autoPlay:true,effect:"left"})
    $(".b_service4").slide({titCell:".hd li",targetCell:".b_car-textbook-list"});

    $(".m_list").find("li").each(function() {
    	var $this = $(this);
    	$this.on("click",function() {
    		var $this = $(this);
    		$this.parent().find("li").removeClass("on");
    		$this.addClass("on");
    		$("#pro_main_detail").find("li").removeClass("on");
    		$("#pro_main_detail").find("li").eq($this.index()).addClass("on");
    	})

    })
    jQuery("#pro_list").slide({mainCell:".bd ul",autoPage:true,effect:"left",vis:4});

    $("#car_type").on("change", function() {

        $this = $(this);
        
        $(".b_car-list-item").removeClass("on");
        for(var i=4;i--;) {
            selectChange(i);
            function selectChange(i) {
                if($this.find("option:selected").text() == $(".b_car-list-item").eq(i).attr("data-car-type")) {
                    $(".b_car-list-item").eq(i).addClass("on");
                }
            }
        }
        
    })
    
    $(".starbox").each(function() {
        var $this = $(this);
        var $num = $this.attr("num");
        var $html = "";

        var $on = Math.floor($num);
        var $half = Math.ceil($num) - Math.floor($num);
        var $off = 5 - Math.ceil($num);
        
        for(var i = $on;i--;) {
            $html += "<i class='m_ostar'></i>";
        }

        for(var i = $half;i--;) {
            $html += "<i class='m_hstar'></i>";
        }

        for(var i = $off;i--;) {
            $html += "<i class='m_nstar'></i>";
        }

        $html += "<span class='m_starnum'>" + $num + "星</span>";
        
        $this.html($html);
    })
    


//    $(window).scroll(function(){
//        var $Scroll=$(window).scrollTop();
//        var $Hwindow=$(window).height();
//        fade($(".public_title"),'animated flipInY');
//        fade($(".hezuo_list,.bz"),'animated flipInX');
//        fade($(".what_list"),'animated rotateIn');
//        $(".bz ul li h3").fadeIn(15000);
//        fade($(".xx,.diff"),'animated fadeInUpBig');
//        fade($(".yaoqiu"),'animated bounceInDown');
//        fade($(".lc"),'animated bounce');
//        fade($(".youshi_right,.product_right,.news_right,.fazhan_right"),'animated fadeInRightBig');
//        fade($(".youshi_left,.product_left,.news_left,.fazhan_left"),'animated fadeInLeftBig');
//        function fade($class,animate){
//            $class.each(function(){
//                var $top=$(this).position().top;
//                if($Scroll+$Hwindow>$top){
//                    $(this).addClass(animate);
//                    setTimeout(function(){
//                        $(this).removeClass(animate);
//                    },20)
//                }
//            });
//        }
//
//    });
});