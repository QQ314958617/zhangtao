<?php
class AboutAction extends BaseAction {
	
	 public function index()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'about'))->find();
        $this->assign('ad_info',M('ad')->where('position = 4')->find());
        $this->assign('Mainbanner',$Mainbanner);
		$aboutNav = M('Nav')->where(array('type_nid'=>'abouts','isshow'=>1))->find();
	    $aboutList=M('News')->where(array('cid'=>$aboutNav['id'],'status'=>1))->find();
    	$aboutList['images'] = explode(',', $aboutList['titlepic']);
        $this->assign('aboutList',$aboutList);
        $this->assign('MainNav',$MainNav);

        $this->assign('aboutNav',$aboutNav);
    	$this->display();
	}
	public function news()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'about'))->find();
    	$NewsNav = M('Nav')->where(array('type_nid'=>'news'))->find();
         $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        import("ORG.Util.Page");
		 $count = M('News')->where(array('cid' =>$NewsNav['id'],'status'=>1))->order('published desc')->count();
		 $Page = new Page($count, 3);
		$Page->setConfig("theme", "%first% %upPage%  %linkPage% %downPage%  %end%");
		 $show = $Page->show();
        $newsList = M('News')->where(array('cid' =>$NewsNav['id'],'status'=>1))->order('published desc')->limit($Page->firstRow, $Page->listRows)->select();
 		$this->assign('newscid',$newscid);
 		$this->assign('newstitle',$newstitle);
 		$this->assign('newsNav',$newsNav);
 		$this->assign('newsList',$newsList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('NewsNav',$NewsNav);
    	$this->assign('page', $show);
    	$this->display();
	}
	public function newsdetail($id)
    {
    	$news = M('News')->where(array('id'=>$id))->find();
    	$MainNav = M('Nav')->where(array('type_nid'=>'about'))->find();
         $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$NewsNav = M('Nav')->where(array('type_nid'=>'news'))->find();
    	$lastList =M('News')->where(array('id'=>array('gt',$news['id'])))->order('id asc')->find();
        $nextList =M('News')->where(array('id'=>array('lt',$news['id'])))->order('id desc')->find();
        $this->assign('lastList',$lastList);
        $this->assign('nextList',$nextList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('NewsNav',$NewsNav);
    	$this->assign('news',$news);
    	
    	$this->display();
	}
	public function join()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'about'))->find();
         $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $joinNav = M('Nav')->where(array('type_nid'=>'join','isshow'=>1))->find();
        $joinList=M('News')->where(array('cid'=>$joinNav['id'],'status'=>1))->find();
        $joinList['images'] = explode(',', $joinList['titlepic']);
        $this->assign('joinList',$joinList);
        $this->assign('MainNav',$MainNav);
        $this->assign('joinNav',$joinNav);
    	$this->display();
	}
	public function contact()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'about'))->find();
         $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
		$joinNav = M('Nav')->where(array('type_nid'=>'contact','isshow'=>1))->find();
        $joinList=M('News')->where(array('cid'=>$joinNav['id'],'status'=>1))->find();
        $joinList['images'] = explode(',', $joinList['titlepic']);
        $this->assign('joinList',$joinList);
        $this->assign('MainNav',$MainNav);
        $this->assign('joinNav',$joinNav);
    	$this->display();
	}
	
}
