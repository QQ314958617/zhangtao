<?php
class TeamAction extends BaseAction {
	public function Index()
	{
		
		$cmap['id']=4;
		$this->assign("nid", $cmap['id']);
		$this->cname=getNav($cmap,1);//栏目信息
		
		
		$admap['position']=4;
        $this->assign("ad_info", $this->getAd($admap,1));
		$this->display();
	}
}
?>