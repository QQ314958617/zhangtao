<?php

// 本类由系统自动生成，仅供测试用途
class BaseAction extends Action {

    public function _initialize(){
        $systemConfig = include WEB_ROOT . 'Common/systemConfig.php';
        $this->assign("site", $systemConfig);
		$m=M('link');
		$flink=$m->where('display=1')->select();
		$this->assign("flink",$flink);
    }

    public function _empty($name){
        //把所有城市的操作解析到city方法
        echo '404';
		header("Location:".C('SITE_INFO.url')."404.html");
    }

	public static function getAd($map,$limit=0)
	{
		$m_ad=M('ad');
		if($limit>0)
		{
			$info=$m_ad->where($map)->order('sort DESC')->find();
		
		}else
		{
			$info=$m_ad->where($map)->order('sort DESC')->select();
		}
		
		return $info;
	}
    /**
     * 验证码
     */
    public function verify_code() {
        $w = isset($_GET['w']) ? (int) $_GET['w'] : 50;
        $h = isset($_GET['h']) ? (int) $_GET['h'] : 30;
        import("ORG.Util.Image");
        Image::buildImageVerify(4, 1, 'png', $w, $h);
    }

}