<?php
			class ContractAction extends BaseAction {
			public function Index()
			{
				$admap['position']=6;
        		$this->assign("ad_info", $this->getAd($admap,1));
				$this->display();
			}
			
			public function sign(){//留言
		 $M=M('Message');
		 $data['name']=$_POST['name'];
		 $data['phone'] = $_POST['phone'];
		 $data['content']=$_POST['content'];
		 $data['email']=$_POST['email'];
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
			?>