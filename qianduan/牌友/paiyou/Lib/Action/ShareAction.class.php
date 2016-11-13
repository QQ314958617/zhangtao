<?php
class ShareAction extends BaseAction {
	
	 public function share()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'share'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $shipinNav = M('Nav')->where(array('type_nid'=>'shipin'))->find();
        $shipinList = M('News')->where(array('cid'=>$shipinNav['id']))->order('sort asc')->select();
        $this->assign('shipinList',$shipinList);
        $this->assign('MainNav',$MainNav);
        $this->assign('shipinNav',$shipinNav);
    	$this->display();
	}
	public function gushi()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'share'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $gushiNav = M('Nav')->where(array('type_nid'=>'gushi'))->find();
         import("ORG.Util.Page");
         $count = M('News')->where(array('cid'=>$gushiNav['id']))->order('sort asc')->count();
         $Page = new Page($count, 6);
        $Page->setConfig("theme", "%first% %upPage%  %linkPage% %downPage%  %end%");
         $show = $Page->show();
        $gushiList = M('News')->where(array('cid'=>$gushiNav['id']))->order('sort asc')->limit($Page->firstRow, $Page->listRows)->select();
        $this->assign('gushiList',$gushiList);
        $this->assign('MainNav',$MainNav);
        $this->assign('gushiNav',$gushiNav);
        $this->assign('page', $show);
    	$this->display();
	}

    public function gushidetail($id)
    {
        $MainNav = M('Nav')->where(array('type_nid'=>'share'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $gushiNav = M('Nav')->where(array('type_nid'=>'gushi'))->find();
        $news = M('News')->where(array('id'=>$id))->find();
        $lastList =M('News')->where(array('id'=>array('gt',$news['id'])))->order('id asc')->find();
        $nextList =M('News')->where(array('id'=>array('lt',$news['id'])))->order('id desc')->find();
        $this->assign('lastList',$lastList);
        $this->assign('nextList',$nextList);
        $this->assign('news',$news);
         $this->assign('MainNav',$MainNav);
        $this->assign('gushiNav',$gushiNav);
        $this->display();
    }
	public function tupian()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'share'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $tupianNav = M('Nav')->where(array('type_nid'=>'tupian'))->find();
         import("ORG.Util.Page");
         $count = M('News')->where(array('cid'=>$tupianNav['id']))->order('sort asc')->count();
         $Page = new Page($count, 9);
        $Page->setConfig("theme", "%first% %upPage%  %linkPage% %downPage%  %end%");
         $show = $Page->show();
        $tupianList = M('News')->where(array('cid'=>$tupianNav['id']))->order('sort asc')->limit($Page->firstRow, $Page->listRows)->select();
        $this->assign('tupianList',$tupianList);
        $this->assign('MainNav',$MainNav);
        $this->assign('tupianNav',$tupianNav);
        $this->assign('page', $show);
    	$this->display();
	}
	public function tupiandetail($id)
    {
        $MainNav = M('Nav')->where(array('type_nid'=>'share'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $tupianNav = M('Nav')->where(array('type_nid'=>'tupian'))->find();
        $news = M('News')->where(array('id'=>$id))->find();
        $images = explode(',',$news['titlepic']);
        
        $this->assign('images',$images);
        $this->assign('news',$news);

        $this->assign('MainNav',$MainNav);
        $this->assign('tupianNav',$tupianNav);
        $this->display();
    }
}
