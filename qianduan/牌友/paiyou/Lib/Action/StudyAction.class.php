<?php

// 本类由系统自动生成，仅供测试用途
class StudyAction extends BaseAction {
	
	 public function study()
    {
        $MainNav = M('Nav')->where(array('type_nid'=>'study'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$zhizhaoNav = M('Nav')->where(array('type_nid'=>'zhizhao'))->find();
		$zhizhaoList = M('News')->where(array('cid'=>$zhizhaoNav['id']))->order('sort asc')->find();
		
		$this->assign('zhizhaoList',$zhizhaoList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('zhizhaoNav',$zhizhaoNav);
        $this->display();
	}
	public function zhizhao()
    {
        $MainNav = M('Nav')->where(array('type_nid'=>'study'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$studyNav = M('Nav')->where(array('type_nid'=>'yizhuang'))->find();
		$studyList = M('News')->where(array('cid'=>$studyNav['id']))->order('sort asc')->find();
        $studyList['images'] = explode(',', $studyList['titlepic']);
		$this->assign('studyList',$studyList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('studyNav',$studyNav);
        $this->display();
	}
    public function danren()
    {
        $MainNav = M('Nav')->where(array('type_nid'=>'study'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $studyNav = M('Nav')->where(array('type_nid'=>'danren'))->find();
        $studyList = M('News')->where(array('cid'=>$studyNav['id']))->order('sort asc')->find();
        $studyList['images'] = explode(',', $studyList['titlepic']);
        $this->assign('studyList',$studyList);
        $this->assign('MainNav',$MainNav);
        $this->assign('studyNav',$studyNav);
        $this->display();
    }
    public function shuangren()
    {
        $MainNav = M('Nav')->where(array('type_nid'=>'study'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
        $studyNav = M('Nav')->where(array('type_nid'=>'shuangren'))->find();
        $studyList = M('News')->where(array('cid'=>$studyNav['id']))->order('sort asc')->find();
        $studyList['images'] = explode(',', $studyList['titlepic']);
        $this->assign('studyList',$studyList);
        $this->assign('MainNav',$MainNav);
        $this->assign('studyNav',$studyNav);
        $this->display();
    }
	
}
