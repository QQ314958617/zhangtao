<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
        <link href="__ROOT__/Home/Tpl/default/Public/css/base.css" type="text/css" media="all" rel="stylesheet" />
		<link rel="stylesheet" href="__ROOT__/Home/Tpl/default/Public/css/hover-min.css" />
		<link rel="stylesheet" href="__ROOT__/Home/Tpl/default/Public/css/home.css" />
		<link rel="icon" type="image/png" href="__ROOT__/Home/Tpl/default/Public/i/favicon.png">
        <script type="text/javascript" src="__ROOT__/Home/Tpl/default/Public/js/jquery-1.6.3.min.js"></script>
        <script type="text/javascript" src="__ROOT__/Home/Tpl/default/Public/js/jquery.js"></script>
        <script type="text/javascript" src="__ROOT__/Home/Tpl/default/Public/js/jquery.SuperSlide.js"></script>
        <script type="text/javascript" src="__ROOT__/Home/Tpl/default/Public/jq.orbit.js"></script>
        <script type="text/javascript" src="__ROOT__/Home/Tpl/default/Public/js/base.js"></script>
		<?php $mname=strtolower(MODULE_NAME); $aname=strtolower(ACTION_NAME); $id=(int)$_GET['id']; $sinfo=SystemSeo($mname,$id); ?><title><?php if($sinfo['web_title']){ echo ($sinfo['web_title']); }else{ echo ($site["SITE_INFO"]["name"]); } ?></title>
	    <meta name="keywords" content="<?php if($sinfo['keywords']){ echo ($sinfo['keywords']); }else{ echo ($site["SITE_INFO"]["keyword"]); } ?>">
        <meta name="description" content="<?php if($sinfo['description']){ echo ($sinfo['description']); }else{ echo ($site["SITE_INFO"]["description"]); } ?>">
	</head>

	<body>
    <div class="header">
    <div class="header-top clearfix">
        <div class="wrap">
            <div class="wellcome fl">
                欢迎进入琦顺鞋业官网！
            </div>
            <div class="link fr">
                <a href="javascript:void(0)"  onclick="shoucang(document.title,window.location)">收藏本站</a>
                <span>|</span>
                <a  href="<?php echo U('/contract');?>#liuyan" target="_blank" >在线留言</a>
                <span> | </span>
                <a href="http://weibo.com/u/5697597282" target="_blank"> 新浪微博 </a>
            </div>
        </div>
    </div>
        <script type="text/javascript">
            function shoucang(sTitle, sURL) {
                try {
                    window.external.addFavorite(sURL, sTitle);
                }
                catch (e) {
                    try {
                        window.sidebar.addPanel(sTitle, sURL, "");
                    }
                    catch (e) {
                        alert("请使用Ctrl+D进行添加");
                    }
                }
            } //收藏
        </script>
    <div class="header-middle clearfix wrap">
        <div class="left fl">
            康城鞋业——为您打造最激情四射的年轻人生
        </div>
        <div class="center fl pr">
            <h1 class="pa">
            <a href="/">
                <img src="__ROOT__/Home/Tpl/default/Public/images/logo.jpg" alt=""/>
            </a>
            </h1>
        </div>
        <div class="right fl clearfix">
            <div class="ch">
                招商热线
            </div>
            <div class="num">
                <img src="__ROOT__/Home/Tpl/default/Public/images/phone.jpg" alt=""/> <?php echo ($site["SITE_INFO"]["tel"]); ?> 
            </div>
        </div>
    </div>
    <?php $navmap['parent_id']=0; $navlist=getNav($navmap,0); ?>
    <div class="nav wrap">
         <ul class="clearfix">
         	
             <li class="on">
             	
                 <a href="<?php echo U('/');?>">
                     康城首页
                 </a>
             </li>
              <li>
             	
                 <a href='<?php echo U('/product');?>'>
                     产品中心
                 </a>
             </li>
             <li>
             	
                 <a href='<?php echo U('/join');?>'>
                     加盟康城
                 </a>
             </li>
            <li>
             	
                 <a href='<?php echo U('/about');?>'>
                     关于我们
                 </a>
             </li>
             <li>
             	
                 <a href='<?php echo U('/news');?>'>
                     新闻资讯
                 </a>
             </li>
             <li>
             	
                 <a href='<?php echo U('/contract');?>'>
                     联系我们
                 </a>
             </li>
         </ul>
    </div>
</div>
<!--<div class="subbanner">
<ul>
    <li style="height: 350px; background:url('__ROOT__/Uploads/pictures/<?php echo ($ad_info["ad_img"]); ?>') no-repeat center;"></li>
</ul>
</div>-->
<div class="banner">
    <div id="banner-slide" class="slideBox">
        <div class="bd">
            <ul>
            	<?php if(is_array($ad_info)): $i = 0; $__LIST__ = $ad_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background: url('__ROOT__/Uploads/pictures/<?php echo ($vo["ad_img"]); ?>') no-repeat center top"></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<link rel="stylesheet" href="__ROOT__/Home/Tpl/default/Public/css/iconfont.css"/>
<div class="same-title" id="fixed1">
    <div class="wrap">
        <div class="ch">
            新品上市
        </div>
        <div class="en">
            NEW ARRIVAL
        </div>
    </div>
</div>
<?php $newmap['cid'] = 44; $newmap['is_new'] = 1; $newmap['_logic'] = 'AND'; $newList=GetList($newmap,5); get_path_info(); ?>
<div class="new-product">
    <div class="wrap clearfix">
    	<?php if(is_array($newList)): $i = 0; $__LIST__ = $newList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box<?php echo ($i); ?> same-box fl">
             <a href="<?php echo U('Product/index');?>" class="pr ">
                 <img src="__ROOT__<?php echo ($vo["titlepic"]); ?>" class="hvr-grow" alt=""/>
                  <div class="bg pa">
                      <div class="title">
                         <?php echo ($vo["title"]); ?>
                      </div>
                      <div class="txt">
                          <?php echo ($vo["ftitle"]); ?>
                      </div>
                  </div>
             </a>
         </div><?php endforeach; endif; else: echo "" ;endif; ?>            
    </div>
</div>
<!---当季热卖-->
<?php $tjmap['cid'] = 45; $tjmap['is_reconmmend'] =1; $tjList=GetList($tjmap); ?>
<div class="same-title" id="fixed2">
    <div class="wrap">
        <div class="ch">
            当季爆款
        </div>
        <div class="en">
            HOT PRODUCTS
        </div>
    </div>
</div>
<div class="product-list wrap">
    <ul class="clearfix">
    	<?php if(is_array($tjList)): $i = 0; $__LIST__ = $tjList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $img = explode(",",$vo['titlepic']); ?>
        <li>
            <div class="img-box">
                <a href="<?php echo U('Product/read',array('id'=>$vo['id']));?>">
                <img src="__ROOT__<?php echo ($img[0]); ?>" class="hvr-grow" alt=""/>
                </a>
            </div>
            <div class="info">
                <a href="<?php echo U('Product/read',array('id'=>$vo['id']));?>">
                    <?php echo ($vo["color"]); echo ($vo["type"]); ?>
                </a>
            </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>   
    </ul>
</div>
<!--choose-->
<?php $mid = explode(" ",$midlist['ftitle']); ?>
<div class="choose" id="fixed3">
<div class="wrap">
    <div class="red-btn">
         >
    </div>
    <div class="choose-title">
       <?php echo ($midlist['title']); ?>
    </div>
    <div class="img-box">
        <img src="__ROOT__<?php echo ($midlist['titlepic']); ?>" alt=""/>
    </div>
    <div class="txt">
        <ul>
        	<?php if(is_array($mid)): $i = 0; $__LIST__ = $mid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <?php echo ($vo); ?>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
</div>
<!--工艺-->
<div class="same-title" id="fixed4">
<div class="wrap">
    <div class="ch">
        工艺制作
    </div>
    <div class="en">
        PRODUCTION PROCESS
    </div>
</div>
</div>
<?php $gymap['cid']=31; $gylist=GetList($gymap); ?>
<div class="gongyi-content">
    <div class="wrap clearfix">
        <div class="box-big box1 fl"><img src="__ROOT__<?php echo ($gylist[0]['titlepic']); ?>" class="hvr-grow" alt=""/></div>
        <div class="box-small box2  fl">
             <div class="ch">
              细节决定成败
             </div>
            <div class="en">
                DETAILS DETERMINE SUCCESS OR FAILURE.
            </div>
        </div>
        <div class="box-small box3 fl"><img src="__ROOT__<?php echo ($gylist[1]['titlepic']); ?>" class="hvr-grow" alt=""/></div>
        <div class="box-small box4 fl">
            <div class="ch">
                专为年轻人量身定制
            </div>
            <div class="en">
                TAILORED FOR YOUNG PEOPLE
            </div>
        </div>
        <div class="box-small box5 fl"><img src="__ROOT__<?php echo ($gylist[2]['titlepic']); ?>" class="hvr-grow" alt=""/></div>
        <div class="box-big box6 fl"><img src="__ROOT__<?php echo ($gylist[3]['titlepic']); ?>" class="hvr-grow" alt=""/></div>

    </div>
</div>
<!--新品发布会-->
<?php $fbmap['cid']=21; $fbList = GetList($fbmap); ?>
<div class="new-product-news" id="fixed5">
  <div class="wrap">
      <div class="left fl">
          <div class="border">
              <img src="__ROOT__<?php echo ($new['nav_pic']); ?>" alt=""/>
          </div>
      </div>
      <div class="right fl">
          <div class="same-title">
                  <div class="ch">
                      新品发布
                  </div>
                  <div class="en">
                      NEW PRODUCT LAUNCHES
                  </div>
          </div>

          <div class="content-box">
             <ul>
             	<?php if(is_array($fbList)): $i = 0; $__LIST__ = $fbList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="clearfix">
                      <div class="left fl">
                         <div class="title clearfix">
                             <div class="num fl">
                                 0<?php echo ($i); ?>
                             </div>
                             <div class="news-name fl">
                                 <div class="num-time">
                                     <?php echo date('Y-m-d',$vo[published]);?>
                                 </div>
                                 <div class="ch-name">
                                     <?php echo ($vo["title"]); ?>
                                 </div>
                             </div>
                         </div>
                          <div class="txt">
                              <a href="<?php echo U('News/read',array('id'=>$vo['id']));?>">
                                  <?php echo ($vo["content"]); ?>
                              </a>
                          </div>
                      </div>
                     <div class="right fl">
                         <a href="<?php echo U('News/read',array('id'=>$vo['id']));?>">
                             <img src="__ROOT__<?php echo ($vo["titlepic"]); ?>" alt=""/>
                         </a>
                     </div>
                 </li><?php endforeach; endif; else: echo "" ;endif; ?>
             </ul>
          </div>

          <a class="more" href="<?php echo U('News/index');?>">MORE+</a>
      </div>
  </div>
</div>

<!--新闻-->
<div class="news" id="fixed6">
    <div class="wrap clearfix">
        <div class="left fl">
            <div class="news-list-title">
             <span class="ch"> 最新资讯</span>
              <span class="en">LATEST NEWS</span>
            </div>
            <div class="first-news">
                <div class="title clearfix">
                    <a href="" class="fl">
                        <?php echo ($first["title"]); ?>
                    </a>
                    <span class="fr">
                        <?php echo date('Y-m-d',$first['published']);?>
                    </span>
                </div>
                <div class="txt">
                    <a href="<?php echo U('News/read',array('id'=>$first['id']));?>"><?php echo ($first["content"]); ?></a>
                </div>
            </div>
            <div class="news-list clearfix">
                <div class="img-box fl">
                    <a href="<?php echo U('News/read',array('id'=>$first['id']));?>">
                        <img src="__ROOT__<?php echo ($first["titlepic"]); ?>" alt=""/>
                    </a>
                </div>
                <div class="list-box fl">
                 <ul>
                 	<?php if(is_array($other)): $i = 0; $__LIST__ = $other;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="clearfix">
                         <div class="time fl">
                            <div class="day">
                                <?php echo date('d',$vo['published']);?>
                            </div>
                             <div class="month">
                                 <?php echo date('m',$vo['published']);?>月
                             </div>
                         </div>
                         <div class="txt fl">
                             <a href="<?php echo U('News/read',array('id'=>$vo['id']));?>">
                                 <?php echo ($vo["title"]); ?>
                             </a>
                         </div>
                     </li><?php endforeach; endif; else: echo "" ;endif; ?>
                 </ul>
                </div>
            </div>
        </div>
        <div class="right fl">
              <div class="liuyan-title">
                  <span class="ch">
                   在线留言
                  </span>
                  <span class="en">
                      ONLINE MESSAGE
                  </span>
              </div>
            <form action="" id="form">
                <div class="form-control clearfix">
                    <label for="name">姓名：</label>
                    <input type="text" id="name" name="name"/>
                    <div class="little-box fl">
                    </div>
                </div>
                <div class="form-control clearfix">
                    <label for="phone">电话：</label>
                    <input type="text" id="phone"name="phone"/>
                    <div class="little-box fl">
                    </div>
                </div>
                <div class="form-control clearfix">
                    <label for="message">留言：</label>
                    <textarea  id="message" cols="30" rows="10" name="message"></textarea>
                </div>
                <div class="button-control">
                    <button class="submit" type="button">提交</button>
                    <button class="reset" type="reset">重置</button>
                </div>
            </form>
            <script>
            	$(".submit").click(function(){
            		var data = $('#form').serialize();
            		$.post('index/sign',data,function(status){
            			alert(status);
            		})
            	});
            </script>
        </div>
    </div>
</div>
        <div class="fixed-nav">
            <ul>
                <li class="fixed1">
                    <a href="#fixed1">
                        <span class="iconfont icon-unie64e"></span>
                         <span class="txt">
                            新品上市
                         </span>
                    </a>
                </li>
                <li class="fixed2">
                    <a href="#fixed2">
                        <span class="iconfont icon-xinpintuijian"></span>
                         <span class="txt">
                            当季爆款
                         </span>
                    </a>
                </li>
                <li class="fixed3">
                    <a href="#fixed3">
                        <span class="iconfont icon-youshi"></span>
                         <span class="txt">
                         琦顺优势
                         </span>
                    </a>
                </li>
                <li class="fixed4">
                    <a href="#fixed4">
                        <span class="iconfont icon-iconf"></span>
                         <span class="txt">
                         工艺制作
                         </span>
                    </a>
                </li>
                <li class="fixed5">
                    <a href="#fixed5">
                        <span class="iconfont icon-fabu1"></span>
                         <span class="txt">
                            新品发布
                         </span>
                    </a>
                </li>
                <li class="fixed6">
                <a href="#fixed6">
                    <span class="iconfont icon-xinwen"></span>
                         <span class="txt">
                         新闻资讯
                         </span>
                </a>
            </li>
                <li class="fixed7">
                    <a href="javascript:scrollTo(0,0)">
                        <span class="iconfont icon-iconfonttop"></span>
                         <span class="txt">
                         返回顶部
                         </span>
                    </a>
                </li>

            </ul>

        </div>


<script>
    $(function(){
        $(window).scroll(function(){
            var T=$(window).scrollTop();
          if(T>=870 && T<1570){
              $('.fixed-nav').find('li').removeClass('on');
              $('.fixed1').addClass('on');
          }
            if(T>=1570 && T<2100){
                $('.fixed-nav').find('li').removeClass('on');
                $('.fixed2').addClass('on');
            }
            if(T>=2100 && T<2885){
                $('.fixed-nav').find('li').removeClass('on');
                $('.fixed3').addClass('on');
            }
            if(T>=2885 && T<3590){
                $('.fixed-nav').find('li').removeClass('on');
                $('.fixed4').addClass('on');
            }
            if(T>=3590 && T<4425){
                $('.fixed-nav').find('li').removeClass('on');
                $('.fixed5').addClass('on');
            }
            if(T>=4425){
                $('.fixed-nav').find('li').removeClass('on');
                $('.fixed6').addClass('on');
            }
        })
    })
</script>
<div class="footer">
 <div class="wrap">
     <div class="title">
          友情链接
     </div>
     
     <div class="link">
     <?php $__m_link=M("link");$__link_list=$__m_link->where('display=1')->order('id desc')->limit(4)->select();foreach($__link_list as $_lk=>$_lv):extract($_lv);?><a href="<?php echo ($link); ?>"><?php echo ($title); ?></a><?php endforeach; ?>
     </div>
     <div class="info clearfix">
         <div class="logo fl">
             <a href=""><img src="__ROOT__/Home/Tpl/default/Public/images/logo.png" alt=""/></a>
         </div>
         <div class="add fl">
             <?php echo ($site["SITE_INFO"]["icp"]); ?>  &nbsp;  &nbsp;   COPYRIGHT 2013-2014, INC.ALL RIGHTS RESERVED  <br/>
             地址：<?php echo ($site["SITE_INFO"]["address"]); ?>      <br/>
             电话：<?php echo ($site["SITE_INFO"]["tel"]); ?>    &nbsp;  &nbsp;   E-mail：<?php echo ($site["SITE_INFO"]["service"]); ?>     <br/>
         </div>
         <div class="weima fl clearfix">
              <div class="same-weixin fl">
                  <img src="__ROOT__/Home/Tpl/default/Public/images/weixin.jpg" alt=""/>
                  关注琦顺微信
              </div>
             <div class="same-weixin fl">
                 <img src="__ROOT__/Home/Tpl/default/Public/images/weixin.jpg" alt=""/>
                 关注琦顺微博
             </div>
         </div>
     </div>
 </div>
</div>
</body>
</html>