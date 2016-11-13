<?php
class BrandAction extends BaseAction {
	public function Index()
	{
		 $N = M("News");
        $C = M("Category");
        $cid=$this->_get('cid');
        if($cid)
		{
        	$map['cid']=$cid;
        }else
		{
		    $map['cid']=20;
		}
        $map['status']=1;
        $info=$N->where($map)->find();
        $this->assign("info", $info);
		
		$cmap['id']=$map['cid'];
		$this->assign("nid", $cmap['id']);
		$this->cname=getNav($cmap,1);//栏目信息
		
        $admap['position']=2;
        $this->assign("ad_info", $this->getAd($admap,1));
		
		
        $this->assign('webtitle',L('T_NEWS'));
        $this->display();
	}
}
?>