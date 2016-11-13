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
                欢迎进入康城鞋业官网！
            </div>
            <div class="link fr">
                <a href="">收藏本站</a>
                <span>|</span>
                <a href="">在线留言</a>
                <span> | </span>
                <a href=""> 新浪微博 </a>
            </div>
        </div>
    </div>
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
         	<?php if(is_array($navlist)): $i = 0; $__LIST__ = $navlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                 <a href="<?php echo ($vo["link"]); ?>">
                     <?php echo ($vo["nav_name"]); ?>
                 </a>
             </li><?php endforeach; endif; else: echo "" ;endif; ?>
         </ul>
    </div>
</div>
  <!--内页banner开始 与首页banner不同-->
<div class="sub-banner" style="background: url('__ROOT__/Uploads/pictures/<?php echo ($ad_info['ad_img']); ?>') no-repeat center top">
</div>
	<!--内页banner结束 与首页banner不同-->
	
	<!--内页开始-->
<div class="position">
    <div class="wrap">
    	
        当前位置： <a href="/">首页 </a> / <span><?php echo (msubstr($info['type'],0,2,'utf-8',false)); ?></span>
    </div>
</div>

<!--产品详情-->
<div class="product-info">
    <div class="wrap clearfix">
        <div class="img-show fl">
            <div class="right-extra" >
                <!--产品参数开始-->
							<?php $img = explode(",",$info['titlepic']) ?>
                <div id="preview" class="spec-preview"> <span class="jqzoom"><img src="__ROOT__<?php echo ($img[0]); ?>" /></span> </div>
                <!--缩图开始-->
                <div class="spec-scroll"> <a class="prev">&lt;</a> <a class="next">&gt;</a>
                    <div class="items">
                        <ul>
                        	<?php if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img alt=""  src="__ROOT__<?php echo ($vo); ?>" ></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
                <!--缩图结束-->
            </div>

        </div>
        <div class="info-show fl">
            <div class="product-title">
                <?php echo ($info['title']); ?>/<?php echo ($info['ftitle']); ?>
            </div>
            <div class="canshu">
                <ul class="clearfix">
                    <li>
                        款号: <?php echo ($info['style']); ?>
                    </li>
                    <li>
                        颜色分类: <?php echo ($info['color']); ?>
                    </li>
                    <li>
                        帮面材质: <?php echo ($info['bmate']); ?>
                    </li>
                    <li>
                        外底材料: <?php echo ($info['wmate']); ?>
                    </li>
                    <li>
                        鞋码: <?php echo ($info['size']); ?>
                    </li>
                    <li>
                        上市时间: <?php echo ($info['time']); ?>
                    </li>
                    <li>
                        流行元素: <?php echo ($info['ele']); ?>
                    </li>
                    <li>
                        闭合方式: <?php echo ($info['close']); ?>
                    </li>
                    <li>
                        生产地：<?php echo ($info['dizhi']); ?>
                    </li>
                    <li>
                        适合人群：<?php echo ($info['people']); ?>
                    </li>
                </ul>
                <a href="" class="buy">
                    去旗舰店购买
                </a>
            </div>
        </div>
    </div>
</div>
<div class="product-detail">
    <div class="wrap">
     <h6>
         商品详情
     </h6>
       <div class="content">
           <img src="__ROOT__/Home/Tpl/default/Public/images/detail1.jpg" alt=""/>
           <img src="__ROOT__/Home/Tpl/default/Public/images/detail2.jpg" alt=""/>
           <img src="__ROOT__/Home/Tpl/default/Public/images/detail3.jpg" alt=""/>

       </div>
    </div>
</div>
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