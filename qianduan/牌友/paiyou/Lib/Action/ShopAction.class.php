<?php
class ShopAction extends BaseAction {
	
	 public function shop()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'shop'))->find();
    	$Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
		$shopNav = M('Nav')->where(array('parent_id'=>$MainNav['id'],'isshow'=>1))->order('sort asc')->select();
		$newscid = $_REQUEST['id'] == null ? $shopNav[0]['id'] : $_REQUEST['id'];
        $newstitle =  M('Nav')->where(array('id'=>$newscid))->getfield('nav_name');
        import("ORG.Util.Page");
		 $count = M('News')->where(array('cid' =>$newscid,'status'=>1))->order('sort asc')->count();
		 $Page = new Page($count, 6);
		$Page->setConfig("theme", "%first% %upPage%  %linkPage% %downPage%  %end%");
		 $show = $Page->show();
        
        $shopList = M('News')->where(array('cid' =>$newscid,'status'=>1))->order('sort asc')->limit($Page->firstRow, $Page->listRows)->select();

        	
 		$this->assign('newscid',$newscid);
 		$this->assign('newstitle',$newstitle);
 		$this->assign('shopNav',$shopNav);
 		$this->assign('shopList',$shopList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('page', $show);
    	$this->display();
	}
	public function shopdetail($id)
	{
		$news = M('News')->where(array('id'=>$id))->find();

		$MainNav = M('Nav')->where(array('type_nid'=>'shop'))->find();
		$Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
		$shopNav = M('Nav')->where(array('parent_id'=>$MainNav['id'],'isshow'=>1))->order('sort asc')->select();
		$newstitle =  M('Nav')->where(array('id'=>$news['cid']))->getfield('nav_name');
		$this->assign('MainNav',$MainNav);
		$this->assign('shopNav',$shopNav);
		$this->assign('newstitle',$newstitle);
		$this->assign('news',$news);
		$this->display();
	}
	 
}