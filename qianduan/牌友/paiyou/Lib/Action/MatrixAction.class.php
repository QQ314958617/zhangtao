<?php
class MatrixAction extends BaseAction {

	 public function matrix()
    {
    	$MainNav = M('Nav')->where(array('type_nid'=>'matrix'))->find();
        $Mainbanner = M('Ad')->where(array('position'=>$MainNav['id']))->find();
        $this->assign('Mainbanner',$Mainbanner);
		$matrixNav = M('Nav')->where(array('parent_id'=>$MainNav['id'],'isshow'=>1))->order('sort asc')->select();
		$newscid = $_REQUEST['id'] == null ? $matrixNav[0]['id'] : $_REQUEST['id'];
        $newstitle =  M('Nav')->where(array('id'=>$newscid))->getfield('nav_name');


        $matrixList = M('News')->where(array('cid' =>$newscid,'status'=>1))->order('sort asc')->find();

        $images =explode(',', $matrixList['titlepic']);
        $this->assign('images',$images);
 		$this->assign('newscid',$newscid);
 		$this->assign('newstitle',$newstitle);
 		$this->assign('matrixNav',$matrixNav);
 		$this->assign('matrixList',$matrixList);
    	$this->assign('MainNav',$MainNav);
    	$this->display();
	}
}
