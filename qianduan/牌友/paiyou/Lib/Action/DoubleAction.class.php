<?php
class DoubleAction extends BaseAction {
	
	 public function double()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'double'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$doubleNav = M('Nav')->where(array('type_nid'=>'doubles'))->find();
		$doubleList = M('News')->where(array('cid'=>$doubleNav['id']))->order('sort asc')->find();
		$doubleList['images'] = explode(',', $doubleList['titlepic']);
		$this->assign('doubleList',$doubleList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('doubleNav',$doubleNav);
    	$this->display();
	}
	public function jiage()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'double'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$jiageNav = M('Nav')->where(array('type_nid'=>'jiage'))->find();
		$jiageList = M('News')->where(array('cid'=>$jiageNav['id']))->order('sort asc')->find();
		$jiageList['images'] = explode(',', $jiageList['titlepic']);
		$this->assign('jiageList',$jiageList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('jiageNav',$jiageNav);
    	$this->display();
	}
	public function question()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'double'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
    	$questionNav = M('Nav')->where(array('type_nid'=>'question'))->find();
		$questionList = M('News')->where(array('cid'=>$questionNav['id']))->order('sort asc')->select();
		$questionList['images'] = explode(',', $questionList['titlepic']);
		$this->assign('questionList',$questionList);
    	$this->assign('MainNav',$MainNav);
    	$this->assign('questionNav',$questionNav);
    	$this->display();
	}
	public function yuding()
    {
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
}
