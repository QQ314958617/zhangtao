<?php

// 本类由系统自动生成，仅供测试用途
class EnglishAction extends Action {
	public function _initialize(){
        $systemConfig = include WEB_ROOT . 'Common/systemConfig.php';
	
		$linkList = M('Link')->where(array('display'=>1))->order('sort asc')->select();

		 $deBannerList = M('Ad')->where(array('position'=>2))->find();
		 
		 $contentNav = M('Nav')->where(array('type_nid'=>'contact','isshow'=>1))->find();
		  $contentList = M('News')->where(array('cid'=>$contentNav['id'],'status'=>1))->order('sort asc')->select();
		 		 
		$this->assign('contentList',$contentList);
		  $this->assign('deBannerList',$deBannerList);
		  
		   $prBannerList = M('Ad')->where(array('position'=>3))->find();
        $this->assign('productsList',M('item')->where(array('is_recommend'=>1,'status'=>1))->order('sort asc')->limit(4)->select());
		  $this->assign('prBannerList',$prBannerList);
		  
		   $this->assign('linkList',$linkList);
		   $teamsNav = M('Nav')->where(array('parent_id'=>4))->order('sort asc')->select();
           $this->assign('teamsNav',$teamsNav);
           $shopsNav = M('Nav')->where(array('parent_id'=>6))->select();
           $this->assign('shopsNav',$shopsNav);
		   $data['isshow']=1;
        $data['parent_id']=0;
       $navs = M('Nav')->where($data)->order('sort asc')->select();
		 
		  $this->assign("navs", $navs);
        $this->assign("site", $systemConfig);
        
        $projectList = M('Order')->where(array('status'=>1))->order('sort asc')->select();

		$this->assign("projectList", $projectList);
    }

    public function index()
    {
    //banner图
    	layout('enindexlayout');
    	$MainNav = M('Nav')->where(array('type_nid'=>'index'))->find();
		$bannerList = M('Ad')->where(array('position'=>'index'))->order('sort asc')->select();
		$this->assign('bannerList',$bannerList);
	 $this->assign('product1Fre',M('information')->where(array('cid'=>4,'status'=>1,'is_recommend'=>1))->order('sort asc')->limit(3)->select());
	  $this->assign('product2Fre',M('information')->where(array('cid'=>4,'status'=>1,'is_recommend'=>1))->order('sort asc')->limit(3)->select());
	  $this->assign('newsProduct',M('information')->where(array('status'=>1))->order('published desc')->limit(3)->select());
	   $this->assign('newsList',M('News')->where(array('cid'=>9,'status'=>1))->order('published desc')->limit(3)->select());
	  
	   $jidiNav = M('Nav')->where(array('parent_id'=>3,'isshow'=>1))->order('sort asc')->select();
	   
	   $this->assign('jidiNav',$jidiNav);
	   $this->assign('fuwuNav',M('Nav')->where(array('id'=>31))->find());
	   $this->assign('jingcaiNav',M('Nav')->where(array('id'=>33))->find());
	   $this->assign('liuchengNav',M('Nav')->where(array('id'=>32))->find());
	   $this->assign('MainNav',$MainNav);
	   $this->display();
    }

     public function double()
    {
    	layout('enlayout');
    	$MainNav = M('Nav')->where(array('type_nid'=>'double'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$doubleNav = M('Nav')->where(array('type_nid'=>'doubles'))->find();
		$doubleList = M('News')->where(array('cid'=>$doubleNav['id'],'lang'=>'en-us'))->order('sort asc')->find();
		$doubleList['images'] = explode(',', $doubleList['titlepic']);
		$this->assign('doubleList',$doubleList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('doubleNav',$doubleNav);
    	$this->display();
	}

	public function jiage()
    {
    	layout('enlayout');
    	$MainNav = M('Nav')->where(array('type_nid'=>'double'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$jiageNav = M('Nav')->where(array('type_nid'=>'jiage'))->find();
		$jiageList = M('News')->where(array('cid'=>$jiageNav['id'],'lang'=>'en-us'))->order('sort asc')->find();
		$jiageList['images'] = explode(',', $jiageList['titlepic']);
		$this->assign('jiageList',$jiageList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('jiageNav',$jiageNav);
    	$this->display();
	}

	public function question()
    {
    	layout('enlayout');
    	$MainNav = M('Nav')->where(array('type_nid'=>'double'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$questionNav = M('Nav')->where(array('type_nid'=>'question'))->find();
		$questionList = M('News')->where(array('cid'=>$questionNav['id'],'lang'=>'en-us'))->order('sort asc')->select();
		$questionList['images'] = explode(',', $questionList['titlepic']);
		$this->assign('questionList',$questionList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('questionNav',$questionNav);
    	$this->display();
	}

	public function yuding()
    {
    	layout('enlayout');
    	$MainNav = M('Nav')->where(array('type_nid'=>'double'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$yudingNav = M('Nav')->where(array('type_nid'=>'yuding'))->find();
		$yudingList = M('News')->where(array('cid'=>$yudingNav['id']))->order('sort asc')->find();
		$yudingList['images'] = explode(',', $yudingList['titlepic']);
		$this->assign('yudingList',$yudingList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('yudingNav',$yudingNav);
    	$this->display();
	}
	public function matrix()
    {
    	layout('enlayout');
    	$MainNav = M('Nav')->where(array('type_nid'=>'matrix'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
		$matrixNav = M('Nav')->where(array('parent_id'=>$MainNav['id'],'isshow'=>1))->order('sort asc')->select();
		$newscid = $_REQUEST['id'] == null ? $matrixNav[0]['id'] : $_REQUEST['id'];
        $newsftitle =  M('Nav')->where(array('id'=>$newscid))->getfield('nav_fname');
        $matrixList = M('News')->where(array('cid' =>$newscid,'status'=>1,'lang'=>'en-us'))->order('sort asc')->find();
        $images =explode(',', $matrixList['titlepic']);
        $this->assign('images',$images);
 		$this->assign('newscid',$newscid);
 		$this->assign('newsftitle',$newsftitle);
 		$this->assign('matrixNav',$matrixNav);
 		$this->assign('matrixList',$matrixList);
    	$this->assign('MainNav',$MainNav);
    	$this->display();
	}

	public function team()
    {
    	layout('enlayout');
       $MainNav = M('Nav')->where(array('type_nid'=>'team'))->find();
       $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
		$teamNav = M('Nav')->where(array('parent_id'=>$MainNav['id'],'isshow'=>1))->order('sort asc')->select();
		$newscid = $_REQUEST['id'] == null ? $teamNav[0]['id'] : $_REQUEST['id'];
        $newsftitle =  M('Nav')->where(array('id'=>$newscid))->getfield('nav_fname');
        import("ORG.Util.Page");
		 $count = M('News')->where(array('cid' =>$newscid,'status'=>1))->order('sort asc')->count();
		 $Page = new Page($count, 6);
		$Page->setConfig("theme", "%first% %upPage%  %linkPage% %downPage%  %end%");
		 $show = $Page->show();
        $teamList = M('News')->where(array('cid' =>$newscid,'status'=>1,'lang'=>'en-us'))->order('sort asc')->limit($Page->firstRow, $Page->listRows)->select();
 		$this->assign('newscid',$newscid);
 		$this->assign('newsftitle',$newsftitle);
 		$this->assign('teamNav',$teamNav);
 		$this->assign('teamList',$teamList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('page', $show);
        $this->display();
	}

	public function teamdetail($id)
    {
    	layout('enlayout');
    	$news = M('News')->where(array('id'=>$id))->find();
    	$newsftitle = M('Nav')->where(array('id'=>$news['cid']))->getfield('nav_fname');
    	 $MainNav = M('Nav')->where(array('type_nid'=>'team'))->find();
    	 $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
		$teamNav = M('Nav')->where(array('parent_id'=>$MainNav['id'],'isshow'=>1))->order('sort asc')->select();
		$fenxiangList = M('News')->where(array('cid'=>21,'status'=>1))->order('sort asc')->limit(4)->select();
		$this->assign('fenxiangList',$fenxiangList);
		$this->assign('newsftitle',$newsftitle);
		$this->assign('news',$news);
		$this->assign('MainNav',$MainNav);
		$this->assign('teamNav',$teamNav);
    	$this->display();
	}

	public function share()
    {
    	layout('enlayout');
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

	public function tupian()
    {
    	layout('enlayout');
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
    	layout('enlayout');
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
    public function gushi()
    {
    	layout('enlayout');
    	$MainNav = M('Nav')->where(array('type_nid'=>'share'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $gushiNav = M('Nav')->where(array('type_nid'=>'gushi'))->find();
         import("ORG.Util.Page");
         $count = M('News')->where(array('cid'=>$gushiNav['id']))->order('sort asc')->count();
         $Page = new Page($count, 6);
        $Page->setConfig("theme", "%first% %upPage%  %linkPage% %downPage%  %end%");
         $show = $Page->show();
        $gushiList = M('News')->where(array('cid'=>$gushiNav['id'],'lang'=>'en-us'))->order('sort asc')->limit($Page->firstRow, $Page->listRows)->select();
        $this->assign('gushiList',$gushiList);
        $this->assign('MainNav',$MainNav);
        $this->assign('gushiNav',$gushiNav);
        $this->assign('page', $show);
    	$this->display();
	}
	public function gushidetail($id)
    {
    	layout('enlayout');
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
     public function shop()
    {
    	layout('enlayout');
    	$MainNav = M('Nav')->where(array('type_nid'=>'shop'))->find();
    	$Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
		$shopNav = M('Nav')->where(array('parent_id'=>$MainNav['id'],'isshow'=>1))->order('sort asc')->select();
		$newscid = $_REQUEST['id'] == null ? $shopNav[0]['id'] : $_REQUEST['id'];
        $newsftitle =  M('Nav')->where(array('id'=>$newscid))->getfield('nav_fname');
        import("ORG.Util.Page");
		 $count = M('News')->where(array('cid' =>$newscid,'status'=>1))->order('sort asc')->count();
		 $Page = new Page($count, 6);
		$Page->setConfig("theme", "%first% %upPage%  %linkPage% %downPage%  %end%");
		 $show = $Page->show();
        
        $shopList = M('News')->where(array('cid' =>$newscid,'status'=>1))->order('sort asc')->limit($Page->firstRow, $Page->listRows)->select();
        	
 		$this->assign('newscid',$newscid);
 		$this->assign('newsftitle',$newsftitle);
 		$this->assign('shopNav',$shopNav);
 		$this->assign('shopList',$shopList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('page', $show);
    	$this->display();
	}

	 public function study()
    {
    	layout('enlayout');
        $MainNav = M('Nav')->where(array('type_nid'=>'study'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$zhizhaoNav = M('Nav')->where(array('type_nid'=>'zhizhao'))->find();
		$zhizhaoList = M('News')->where(array('cid'=>$zhizhaoNav['id'],'lang'=>'en-us'))->order('sort asc')->find();
		
		$this->assign('zhizhaoList',$zhizhaoList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('zhizhaoNav',$zhizhaoNav);
        $this->display();
	}
	public function danren()
    {
    	layout('enlayout');
        $MainNav = M('Nav')->where(array('type_nid'=>'study'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $studyNav = M('Nav')->where(array('type_nid'=>'danren'))->find();
        $studyList = M('News')->where(array('cid'=>$studyNav['id'],'lang'=>'en-us'))->order('sort asc')->find();
        $studyList['images'] = explode(',', $studyList['titlepic']);
        $this->assign('studyList',$studyList);
        $this->assign('MainNav',$MainNav);
        $this->assign('studyNav',$studyNav);
        $this->display();
    }
    public function shuangren()
    {
    	layout('enlayout');
        $MainNav = M('Nav')->where(array('type_nid'=>'study'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $studyNav = M('Nav')->where(array('type_nid'=>'shuangren'))->find();
        $studyList = M('News')->where(array('cid'=>$studyNav['id'],'lang'=>'en-us'))->order('sort asc')->find();
        $studyList['images'] = explode(',', $studyList['titlepic']);
        $this->assign('studyList',$studyList);
        $this->assign('MainNav',$MainNav);
        $this->assign('studyNav',$studyNav);
        $this->display();
    }
    public function zhizhao()
    {
    	layout('enlayout');
        $MainNav = M('Nav')->where(array('type_nid'=>'study'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$studyNav = M('Nav')->where(array('type_nid'=>'yizhuang'))->find();
		$studyList = M('News')->where(array('cid'=>$studyNav['id'],'lang'=>'en-us'))->order('sort asc')->find();
        $studyList['images'] = explode(',', $studyList['titlepic']);
		$this->assign('studyList',$studyList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('studyNav',$studyNav);
        $this->display();
	}
	public function about()
    {
    	layout('enlayout');
    	$MainNav = M('Nav')->where(array('type_nid'=>'about'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
		$aboutNav = M('Nav')->where(array('type_nid'=>'abouts','isshow'=>1))->find();
	    $aboutList=M('News')->where(array('cid'=>$aboutNav['id'],'status'=>1,'lang'=>'en-us'))->find();
    	$aboutList['images'] = explode(',', $aboutList['titlepic']);
        $this->assign('aboutList',$aboutList);
        $this->assign('MainNav',$MainNav);

        $this->assign('aboutNav',$aboutNav);
    	$this->display();
	}
	public function news()
    {
    	layout('enlayout');
    	$MainNav = M('Nav')->where(array('type_nid'=>'about'))->find();
    	$NewsNav = M('Nav')->where(array('type_nid'=>'news'))->find();
         $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        import("ORG.Util.Page");
		 $count = M('News')->where(array('cid' =>$NewsNav['id'],'status'=>1))->order('published desc')->count();
		 $Page = new Page($count, 3);
		$Page->setConfig("theme", "%first% %upPage%  %linkPage% %downPage%  %end%");
		 $show = $Page->show();
        $newsList = M('News')->where(array('cid' =>$NewsNav['id'],'status'=>1,'lang'=>'en-us'))->order('published desc')->limit($Page->firstRow, $Page->listRows)->select();
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
    	layout('enlayout');
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
    	layout('enlayout');
    	$MainNav = M('Nav')->where(array('type_nid'=>'about'))->find();
         $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $joinNav = M('Nav')->where(array('type_nid'=>'join','isshow'=>1))->find();
        $joinList=M('News')->where(array('cid'=>$joinNav['id'],'status'=>1,'lang'=>'en-us'))->find();
        $joinList['images'] = explode(',', $joinList['titlepic']);
        $this->assign('joinList',$joinList);
        $this->assign('MainNav',$MainNav);
        $this->assign('joinNav',$joinNav);
    	$this->display();
	}
	public function contact()
    {
    	layout('enlayout');
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