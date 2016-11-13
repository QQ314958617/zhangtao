<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends BaseAction {

    public function index() {
        $map['position']=1;
        $this->assign("ad_info", $this->getAd($map));
        $this->assign('webtitle',L('T_HOME'));

        //推荐
        $this->assign('midlist',M('News')->where(array('id'=>176))->find());
       //新品发布
       $this->assign('new',M('Nav')->where(array('id'=>21))->find());
	   //新闻资讯第一条
	   $this->assign('first',M('News')->where('cid in (20,21)')->order('published desc')->limit(1)->find());
	   $newsid = M("News")->where(array('cid'=>20))->getField('id',true);
	   array_pop($newsid);//将最后一个数组元素进行出栈操作
	   $this->assign('other',M('News')->where(array('id'=>array('in',$newsid)))->order('published desc')->limit(3)->select());
        $this->display();
    }

	
	public function sign(){//留言
		 $M=M('Message');
		 $data['name']=$_POST['name'];
		 $data['phone'] = $_POST['phone'];
		 $data['content']=$_POST['message'];
		 $data['create_time']=time();
		unset($data['__hash__']);
		unset($data['_URL_']);
			if($M->add($data)){
			 $this->ajaxReturn('留言成功！');
		 		} else {
		 	$this->ajaxReturn('留言失败！');
		 		}
		}
}