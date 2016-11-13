<?php
class ConactAction extends BaseAction {
	public function Index()
	{
		$cmap['id']=7;
		$this->assign("nid", $cmap['id']);
		$this->cname=getNav($cmap,1);
		$admap['position']=7;
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
	
	public function map()
	{
		$cmap['id']=7;
		$this->assign("nid", $cmap['id']);
		$this->cname=getNav($cmap,1);
		$admap['position']=7;
		$this->assign("ad_info", $this->getAd($admap,1));
		$this->display();
	}
	
}
?>