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
<!--内页banner开始 与首页banner不同-->
<div class="sub-banner" style="background: url('__ROOT__/Uploads/pictures/<?php echo ($ad_info['ad_img']); ?>') no-repeat center top">
</div>
	<!--内页banner结束 与首页banner不同-->
	
	<!--内页开始-->
	<div class="sub-content">
<div class="position">
    <div class="wrap">
        当前位置： <a href="/">首页 </a> / <span><?php echo ($nav['nav_name']); ?></span>
    </div>
</div>
<div class="slideTxtBox4">
<div class="hd">
<?php $nmap['parent_id']=5; $nlist = getNav($nmap,0); ?>
    <div class="title-ul">
        <ul class="clearfix wrap">
        	<?php if(is_array($nlist)): $i = 0; $__LIST__ = $nlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="" id="<?php echo ($vo["nav_name"]); ?>"><a href="/news?type=<?php echo ($vo["nav_name"]); ?>"><?php echo ($vo["nav_name"]); ?></a></li>
            <?php $name[$i] = $vo['nav_name']; $nav = implode(",",$name); endforeach; endif; else: echo "" ;endif; ?>
		
        </ul>
       
    </div>
    <?php $type= $_GET['type']; ?>
<script>
	$(function(){
		var type = '<?php echo ($type); ?>';
		var nav = '<?php echo ($nav); ?>';
	    var arr = nav.split(",");
		for(var i=0;i<arr.length;i++){
			if(type.match(arr[i])){$('#arr[i]').addClass('on')}
		}
		
	})
</script>
</div>
<div class="bd">
<div class="same-box clearfix">
    <ul class="news-list-page wrap">
    	<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="clearfix">
            <div class="news-img fl pr">
                <a href=""><img src="__ROOT__<?php echo ($vo["titlepic"]); ?>" alt=""/></a>

                <div class="pa time">
                    <div class="day">
                        <?php echo date('d',$vo['published']);?>
                    </div>
                    <div class="month">
                        <?php echo date('Y-m',$vo['published']);?>
                    </div>
                </div>
            </div>
            <div class="news-txt fl">
                <h5>
                    <a href="<?php echo U('News/read',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a>
                </h5>

                <p>
                    <a href="">
                        <?php echo ($vo["content"]); ?>
                    </a>
                </p>
                <a href="<?php echo U('News/read',array('id'=>$vo['id']));?>" class="view-detail">了解更多
                </a>
            </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
        
        
    </ul>
    <div class="page-cake">
        <?php echo ($page); ?>
    </div>
</div>



</div>
</div>
<script>
    jQuery(".slideTxtBox4").slide({});
</script>
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