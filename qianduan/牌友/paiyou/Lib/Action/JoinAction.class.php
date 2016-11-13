<?php
class JoinAction extends BaseAction {
	public function Index()
	{
		$this->assign('cpys',M('Nav')->where('id = 14')->find());
		
        $admap['position']=3;
        $this->assign("ad_info", $this->getAd($admap,1));
		$this->display();
	}
	public function message()
	{
		$M=M('message');
		$data=I('post.info');
		$data['addtime']=time();
		if($M->add($data))
		{
			echo json_encode(array("url"=>1,'info'=>"留言成功"));
			exit;
		}else
		{
			echo json_encode(array("url"=>0,'info'=>"留言失败"));
			exit;
		}
	}
}
?>