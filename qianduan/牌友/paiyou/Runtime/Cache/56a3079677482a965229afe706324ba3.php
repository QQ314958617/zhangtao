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
<!--内页开始-->

<div class="sub-content">
    <div class="contact-us">
        <div class="huanyingyu">
            <div class="info">
                诚邀您对我们提出的意见与投诉，我们会非常重视您的反馈，并积极完善我们的服务
            </div>
            <div class="info">
                非常感谢您的支持！您也可以拨打我们的客户热线： <span><?php echo ($site["SITE_INFO"]["tel"]); ?> </span>
            </div>
        </div>
        <div class="lianxi clearfix">
            <div class="wrap clearfix">
                <div class="left fl">
                    <h1><?php echo ($site["SITE_INFO"]["tel"]); ?> </h1>
                    <div class="line1">

                    </div>
                    <div class="line2">

                    </div>

                    <h5>
                        公司名称
                    </h5>
                    <p>
                        <?php echo ($site["SITE_INFO"]["name"]); ?> 
                    </p>
                    <h5>
                        联系地址
                    </h5>
                    <p>
                        <?php echo ($site["SITE_INFO"]["address"]); ?> 
                    </p>
                    <h5>
                        QQ
                    </h5>
                    <p>
                        <?php echo ($site["SITE_INFO"]["qq"]); ?> 
                    </p>
                    <h5>邮箱地址</h5>
                    <p>
                        <?php echo ($site["SITE_INFO"]["service"]); ?> 
                    </p>
                </div>
                <div class="right fl">
                    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=DwlIE1FDyDkIBm1bZuhLK90F"></script>
                    <div class="map" id="map">
                        <script type="text/javascript">
                            //创建和初始化地图函数：
                            function initMap(){
                                createMap();//创建地图
                                setMapEvent();//设置地图事件
                                addMapControl();//向地图添加控件
                                addMapOverlay();//向地图添加覆盖物
                            }
                            function createMap(){
                                map = new BMap.Map("map");
                                map.centerAndZoom(new BMap.Point(120.474747,36.103881),17);
                            }
                            function setMapEvent(){
                                map.disableScrollWheelZoom();
                                map.enableKeyboard();
                                map.enableDragging();
                                map.enableDoubleClickZoom()
                            }
                            function addClickHandler(target,window){
                                target.addEventListener("click",function(){
                                    target.openInfoWindow(window);
                                });
                            }
                            function addMapOverlay(){
                                var markers = [
                                    {content:"地址:  深圳路230号1号楼1704室；电话:  18266722227",title:"山东佑之鞋业股份有限公司",imageOffset: {width:-46,height:-21},position:{lat:36.104362,lng:120.474764}}
                                ];
                                for(var index = 0; index < markers.length; index++ ){
                                    var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
                                    var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                                        imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
                                    })});
                                    var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
                                    var opts = {
                                        width: 200,
                                        title: markers[index].title,
                                        enableMessage: false
                                    };
                                    var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
                                    marker.setLabel(label);
                                    addClickHandler(marker,infoWindow);
                                    map.addOverlay(marker);
                                };
                            }
                            //向地图添加控件
                            function addMapControl(){
                                var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
                                scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
                                map.addControl(scaleControl);
                                var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
                                map.addControl(navControl);
                                var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
                                map.addControl(overviewControl);
                            }
                            var map;
                            initMap();
                        </script>
                    </div>

                </div>
            </div>
        </div>

        <div class="contact-box clearfix wrap" id="liuyan">

            <form class="clearfix" id="form">
                <div class="form-control clearfix">
                    <label for="name">
                        <img src="__ROOT__/Home/Tpl/default/Public/images/person1.png" alt=""/>
                    </label>
                    <input type="text" id="name" placeholder="请输入您的姓名" name="name"/>

                    <div class="fl little-box">

                    </div>
                </div>
                <div class="form-control clearfix">
                    <label for="phone">
                        <img src="__ROOT__/Home/Tpl/default/Public/images/phone.png" alt=""/>
                    </label>
                    <input type="text" id="phone" placeholder="请输入您的手机号" name="phone"/>

                    <div class="fl little-box">

                    </div>
                </div>
                <div class="form-control clearfix">
                    <label for="mail">
                        <img src="__ROOT__/Home/Tpl/default/Public/images/youjian.png" style="margin-top: 15px" alt=""/>
                    </label>
                    <input type="text" id="mail" placeholder="请输入邮箱" name="email"/>

                    <div class="fl little-box">

                    </div>
                </div>
                <div class="text-control clearfix">
                    <textarea id="message" placeholder="你想说点什么呢？" name="content"></textarea>
                </div>
                <div class="button-control clearfix">

                    <button class="submit" type="button" >留言</button>
                    <button class="reset" type="reset">重置</button>
                </div>
            </form>
<script type="text/javascript">
	$('.submit').click(function(){
		var data = $('#form').serialize();
	$.post('Contract/sign',data,function(status){
		alert(status);
	})
	})
</script>
        </div>
    </div>

</div>
<!--内容结束-->
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