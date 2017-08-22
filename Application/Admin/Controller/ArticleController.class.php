<?php
namespace Admin\Controller;

class ArticleController extends AdminController {
	
	//执行广告管理页面
	public function adver($name = NULL, $field = NULL,$status = NULL)
	{
		$where = array();
		if($field && $name){
			if($field == 'name'){
				$where['id'] = M('Adver')->where(array('name' => $name))->getField('id');
			}else{
				$where[$field] = $name;
			}	
		}
		if($status){
			$where['status'] = $status -1;
		}
		$count = M('Adver')->where($where)->count();
		$Page = new \Think\Page($count,10);
		$show = $Page->show();
		$list = M('Adver')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display();
	}
	//执行广告管理的编辑;
	public function adverEdit($id = NULL)
	{
		if (empty($_POST)) {
			if ($id) {
				$this->data = M('Adver')->where(array('id' => trim($id)))->find();
			}
			else {
				$this->data = null;
			}

			$this->display();
		}
		else {
			$upload = new \Think\Upload();
			$upload->maxSize = 3145728;
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
			$upload->rootPath = './Public/Upload/adver/';
			$upload->autoSub = false;
			$info = $upload->upload();

			if ($info) {
				foreach ($info as $k => $v) {
					$_POST[$v['key']] = $v['savename'];
				}
			}
			
			
			if ($_POST['addtime']) {
				if (addtime(strtotime($_POST['addtime'])) == '---') {
					$this->error('添加时间格式错误');
				}
				else {
					$_POST['addtime'] = strtotime($_POST['addtime']);
				}
			}
			else {
				$_POST['addtime'] = time();
			}
			if ($_POST['endtime']) {
				if (addtime(strtotime($_POST['endtime'])) == '---') {
					$this->error('编辑时间格式错误');
				}
				else {
					$_POST['endtime'] = strtotime($_POST['endtime']);
				}
			}
			else {
				$_POST['endtime'] = time();
			}
			if ($_POST['id']) {
				$rs = M('Adver')->save($_POST);
			}
			else {
				$_POST['addtime'] = time();
				$rs = M('Adver')->add($_POST);
			}

			if ($rs) {
				$this->success('编辑成功！');
			}
			else {
				$this->error('编辑失败！');
			}
		}
	}
	//执行广告管理的状态操作
	public function adverStatus($id = NULL,$type = NULL,$moble='Adver')
	{
		if(empty($id)){
			$this->error('参数错误！');
		}
		if(empty($type)){
			$this->error('参数错误！');
		}
		if(strpos(',',$id)){
			$id = implode(',',$id);
		}
		$where['id'] = array('in',$id);
		switch(strtolower($type)){
			case 'forbid':
				$data = array('status' => 0);
			break;
			case 'resume':
				$data = array('status' => 1);
			break;
			case 'del':
				if(M($moble)->where($where)->delete()){
					$this->success('操作成功！');
				}else{
					$this->error('操作失败！');
				}
			break;
			default:
				$this->error('操作失败！');
		}
		if(M($moble)->where($where)->save($data)){
			$this->success('操作成功！');
		}else{
			$this->error('操作失败！');
		}
	}
	//执行广告管理图片的上传
	public function adverImage()
	{
		$upload = new \Think\Upload();
		$upload->maxSize = 3145728;
		$upload->exts = array('jpg','gif','png','jpeg');
		$upload->rootPath = './Upload/adver/';
		$upload->autoSub = false;
		$info = $upload->upload();
		foreach($info as $k => $v){
			$path = $v['savepath'].$v['savename'];
			echo $path;
			exit();
		}
	}
	//执行友情链接管理页面
	public function links($name = NULL,$field = NULL,$status = NULL)
	{
		$where = array();
		if($field && $name){
			if($field == 'name'){
				$where['id'] = M('Link')->where(array('name' => $name))->getField('id');
			}else{
				$where[$field] = $name;
			}
		}
		if($status){
			$where['status'] = $status -1;
		}
		$count = M('Link')->where($where)->count();
		$Page = new \Think\Page($count, 4, $parameter);
		$show = $Page->show();
		$list = M('Link')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
    }
	//执行友情链接管理的编辑
	public function linksEdit($id = NULL)
	{
		if (empty($_POST)) {
			if ($id) {
				$this->data = M('Link')->where(array('id' => trim($id)))->find();
			}
			else {
				$this->data = null;
			}

			$this->display();
		}
		else {
			if ($_POST['addtime']) {
				if (addtime(strtotime($_POST['addtime'])) == '---') {
					$this->error('添加时间格式错误');
				}
				else {
					$_POST['addtime'] = strtotime($_POST['addtime']);
				}
			}
			else {
				$_POST['addtime'] = time();
			}
			if ($_POST['endtime']) {
				if (addtime(strtotime($_POST['endtime'])) == '---') {
					$this->error('编辑时间格式错误');
				}
				else {
					$_POST['endtime'] = strtotime($_POST['endtime']);
				}
			}
			else {
				$_POST['endtime'] = time();
			}
			if ($_POST['id']) {
				$rs = M('Link')->save($_POST);
			}
			else {
				$_POST['addtime'] = time();
				$rs = M('Link')->add($_POST);
			}

			if ($rs) {
				$this->success('编辑成功！');
			}
			else {
				$this->error('编辑失败！');
			}
		}
	}
	//执行友情链接状态的一些操作
	public function linksStatus($id = NULL, $type = NULL,$moble = 'Link')
	{
		if(empty($id)){
			$this->error('参数错误！');
		}
		if(empty($type)){
			$this->error('类型错误！');
		}
		if(strpos(',',$id)){
			$id = implode(',',$id);
		}
		$where['id'] = array('in',$id);
		switch(strtolower($type)){
			case 'forbid':
				$data = array('status' => 0);
				break;
			case 'resume':
				$data = array('status' => 1);
				break;
			case 'del':
				if(M($moble)->where($where)->delete()){
					$this->success('操作成功！');
				}else{
					$this->error('操作失败！');
				}
				break;
			default:
				$this->error('操作失败!');
		}
		if(M($moble)->where($where)->save($data)){
			$this->success('操作成功！');
		}else{
			$this->error('操作失败！');
		}
	}
	
}