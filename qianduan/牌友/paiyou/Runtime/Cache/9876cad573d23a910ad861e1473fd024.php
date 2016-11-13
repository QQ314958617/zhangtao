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
<div class="sub-banner" style="background: url('__ROOT__/Uploads/pictures/<?php echo ($ad_info['ad_img']); ?>') no-repeat center top">
</div>
<!--内容-->
<?php $gsjsmap['cid']=16; $gsList = GetList($gsjsmap); $img = explode(",",$gsList[0]['titlepic']); ?>
<div class="about-page">
    <div class="wrap">
        <div class="floor1 clearfix">
            <div class="left fl">
              <div class="title">
                  <img src="__ROOT__<?php echo ($img[0]); ?>" alt=""/>
              </div>
                <div class="big-img">
                    <img src="__ROOT__<?php echo ($img[1]); ?>" class="hvr-grow" alt=""/>
                </div>
            </div>
            <div class="right fl">
               <div class="same-img">
                   <img src="__ROOT__<?php echo ($img[2]); ?>"  class="hvr-grow" alt=""/>
               </div>
                <div class="same-img">
                    <img src="__ROOT__<?php echo ($img[3]); ?>" class="hvr-grow" alt=""/>
                </div>
                <div class="same-img">
                    <img src="__ROOT__<?php echo ($img[4]); ?>"  class="hvr-grow" alt=""/>
                </div>
            </div>
        </div>
        <div class="txt-content">
           <?php echo ($gsList[0]['content']); ?>
        </div>
        <?php $whmap['cid']=17; $whList =GetList($whmap); ?>
        <div class="floor2 clearfix">
            <img src="__ROOT__<?php echo ($whList[0]['titlepic']); ?>" alt=""/>

        </div>
        <div class="txt-content">
            <?php echo ($whList[0]['content']); ?>
        </div>
        <div class="floor3">
            <div class="same-title">
                <div class="wrap">
                    <div class="ch" style="font-weight: bold">
                        发展历程
                    </div>
                </div>
            </div>
            <div class="licheng">
               <div class="box1">
                   1990年
               </div>
                <div class="box2">
                    开始
                </div>
                <div class="box3">
                    未来
                </div>
                <?php $lcmap['cid']=18; $lcList = GetList($lcmap); ?>
                <?php if(is_array($lcList)): $i = 0; $__LIST__ = $lcList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i%2==1){ ?>
                			<div class="same-box same-box<?php echo ($i); ?> clearfix">
                    <div class="img fl">
                        <img src="__ROOT__<?php echo ($vo["titlepic"]); ?>" alt=""/>
                    </div>
                    <div class="txt fl">
                        <?php echo ($vo["content"]); ?>
                    </div>
                    <div class="year fl">
                        <?php echo ($vo["title"]); ?>
                    </div>
                </div>
                		<?php }else{ ?>
                			<div class="same-box same-box<?php echo ($i); ?> clearfix">
                				 <div class="year fl">
                        <?php echo ($vo["title"]); ?>
                    </div>
                    
                    <div class="txt fl">
                        <?php echo ($vo["content"]); ?>
                    </div>
                   <div class="img fl">
                        <img src="__ROOT__<?php echo ($vo["titlepic"]); ?>" alt=""/>
                    </div>
                </div>
                		<?php } endforeach; endif; else: echo "" ;endif; ?>
                
            </div>
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