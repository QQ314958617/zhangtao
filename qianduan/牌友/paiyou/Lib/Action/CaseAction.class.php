<?php
	class CaseAction extends BaseAction {
    /**
     * 列表页
     */
    public function index(){
        $N = M("News");
        $C = M("Category");
        $cid=$this->_get('cid');
        if($cid)
		{
        	$map['n.cid']=$cid;
        }else
		{
		    $map['n.cid']=8;
		}
        $map['n.status']=1;
        $map['n.lang']=LANG_SET;
        $count = $N->table($N->getTableName().' n')
            ->join($C->getTableName().' c on c.cid=n.cid')
            ->field('n.id')
            ->where($map)->count();
        import("ORG.Util.HomePage"); //载入分页类
        $page = new Page($count,C('LISTNUM.newslist'));
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $list=$N->table($N->getTableName().' n')
            ->join($C->getTableName().' c on c.cid=n.cid')
            ->where($map)->order('n.sort ASC,id desc')->limit("$page->firstRow, $page->listRows")->select();
        $this->assign("list", $list);
		$cmap['id']=$map['n.cid'];
		$this->assign("nid", $cmap['id']);
		$this->cname=getNav($cmap,1);
        $admap['position']=8;
        $this->assign("ad_info", $this->getAd($admap,1));
		
		
        $this->assign('webtitle',L('T_NEWS'));
        $this->display();
    }
    /**
     * 详情页
     */
    public function read(){
        $id=$this->_get('id');
        $m_news=M('news');
        if(!$id){$this->redirect('News/index');}
        $map['id']=$id;
        if($info=$m_news->where($map)->find()){
            if($info['status']==0){
                $this->redirect('News/index');
            }
            $C = M("Category");
            $map2['cid']=$info['cid'];
            $info['cname']=$C->where($map2)->getField('name');
            $this->assign('info',$info);
            $this->assign('auther',$this->getAuther($info['aid']));
            $m_news->where($map)->setInc('click',1);
			
			$admap['position']=8;
            $this->assign("ad_info", $this->getAd($admap,1));
			//上一篇
			$p=$m_news->where("sort>".$info['sort']." and cid='$map2[cid]'")->order('sort ASC')->limit('1')->find();

			$prev=!$p?'下一篇：没有了':'<a href="'.__URL__.'/read/id/'.$p['id'].'">下一篇：'.$p['title'].'</a>';
			$this->assign('prev',$prev);
			//下一篇
			$n=$m_news->where("sort<".$info['sort']." and cid='$map2[cid]'")->order('sort desc')->limit('1')->find();

			$next=!$n?'上一篇：没有了':'<a href="'.__URL__.'/read/id/'.$n['id'].'">上一篇：'.$n['title'].'</a>';
			$this->assign('next',$next);
			$this->assign("nid", $map2['cid']);
			$map3['id']=$info['cid'];
		    $this->cname=getNav($map3,1);
            $this->assign('webtitle',$info['title'].'-'.L('T_NEWS'));
            $this->display();
        }else{
            $this->redirect('News/index');
        }
    }
    protected function getAuther($id){
        if(!$id){return '';}
        $admin=M('admin');
        $map['aid']=$id;
        return $admin->where($map)->getField('nickname');
    }

}