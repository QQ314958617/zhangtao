<?php
$config_arr1 = include_once WEB_ROOT . 'Common/config.php';
$config_arr2 = array(
    'LANG_SWITCH_ON' => true,   // 开启语言包功能
    'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
    'LANG_LIST'        =>'zh-cn,zh-en', // 允许切换的语言列表 用逗号分隔
    'VAR_LANGUAGE'     => 'l',// 默认语言切换变量
    'TAGLIB_LOAD' => true,//加载标签库打开
    'APP_AUTOLOAD_PATH' => '@.TagLib',//标签库的文件名
    'TAGLIB_BUILD_IN' => 'Cx,Weblock',//标签库类名


    'URL_HTML_SUFFIX'       =>$config_arr1['TOKEN']['URL_HTML_SUFFIX'],  // URL伪静态后缀设置
    'TMPL_DETECT_THEME'     => true,       // 自动侦测模板主题
    'DEFAULT_THEME'          =>$config_arr1['LISTNUM']['DEFAULT_THEME'],
    'LAYOUT_ON'              =>true,
    'URL_MODEL' => 3,// URL伪静态设置/开启，关闭
	'URL_ROUTER_ON'=>true,//开启路由
	'URL_ROUTE_RULES'=>array(
	'/^brand\-(\d+)$/'        => 'Brand/?cid=:1',
	'/^news\-(\d+)$/'        => 'News/?cid=:1',
	'/^product\-(\d+)$/'        => 'product/?cid=:1',
	//'/^product$/i' => 'Product/index',
//	'/^join/i' => 'Join/index',
	'/^about/i' => 'About/index',
//	'/^news/i' => 'News/index',
//	'/^contract/i' => 'Contract/index',

	'APP_GROUP_LIST'     => 'Home,Test,Admin', 
 	'DEFAULT_GROUP'      =>'Home', 
 	'APP_SUB_DOMAIN_DEPLOY'=>1, // 开启子域名配置
    /*子域名配置 
    *格式如: '子域名'=>array('分组名/[模块名]','var1=a&var2=b'); 
    */ 
    'APP_SUB_DOMAIN_RULES'=>array(   
        'admin'=>array('Admin/'),  // admin域名指向Admin分组
        'home'=>array('Home/'),  // test域名指向Test分组
    ),
	)

);
return array_merge($config_arr1, $config_arr2);
?>