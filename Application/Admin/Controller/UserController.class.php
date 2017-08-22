<?php
namespace Admin\Controller;

class UserController extends AdminController {
	//执行用户管理页面
	public function index($name = NULL,$field = NULL,$status = NULL)
	{
		$where = array();
		if($field && $name){
			if($field == 'username'){
				$where['id'] = M('User')->where(array('username' => $name))->getField('id');
			}else{
				$where[$field] = $name;
			}
		}
		if($status){
			$where['status'] = $status -1;
		}
		$count = M('User')->where($where)->count();
		$Page = new \Think\Page($count, 4, $parameter);
		$show = $Page->show();
		$list = M('User')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
    }
	//执行用户管理的编辑
	public function userEdit()
	{
		if(empty($_POST)){
			if(empty($_GET['id'])){
				$this->data = null;
			}else{
				$this->data = M('User')->where(array('id' => trim($_GET['id'])))->find();
			}
			$this->display();
		}else{
			$input = I('post.');
			if(!check($input['username'],'username')){
				$this->error('用户名格式错误！');
			}
			if($input['password'] && !check($input['password'],'password')){
				$this->error('登录密码格式错误');
			}
			if($input['email'] && !check($input['email'],'email')){
				$this->error('邮箱格式错误！');
			}
			if($input['password']){
				$input['password'] =  md5($input['password']);
			}else{
				unset($input['password']);
			}
			if($_POST['id']){
				$rs = M('User')->save($input);
			}else{
				$rs = M('User')->add($input);
			}
			if($rs){
				$this->success('编辑成功！');
			}else{
				$this->error('编辑失败！');
			}
		}
	}
	//执行用户状态的一些操作
	public function userStatus($id = NULL, $type = NULL,$moble = 'User')
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
	//管理员页面
    public function admin($name = NULL,$field = NULL,$status = NULL)
	{
		$where = array();
		if($field && $name){
			if($field == 'username'){
				$where['id'] = M('Admin')->where(array('username' => $name))->getField('id');
			}else{
				$where[$field] = $name;
			}
		}
		if($status){
			$where['status'] = $status -1;
		}
		$count = M('Admin')->where($where)->count();
		$Page = new \Think\Page($count, 4, $parameter);
		$show = $Page->show();
		$list = M('Admin')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
		$this->display();
    }
	//执行管理员的编辑操作；
	public function adminEdit()
	{
		if(empty($_POST)){
			if(empty($_GET['id'])){
				$this->data = null;
			}else{
				$this->data = M('Admin')->where(array('id' => trim($_GET['id'])))->find();
			}
			$this->display();
		}else{
			$input = I('post.');
			if(!check($input['username'],'username')){
				$this->error('用户名格式错误！');
			}
			if($input['nickname'] && !check($input['nickname'],'A')){
				$this->error('昵称格式错误！');
			}
			if($input['password'] && !check($input['password'],'password')){
				$this->error('登录密码格式错误');
			}
			if($input['mobile'] && !check($input['mobile'],'mobile')){
				$this->error('手机号码格式错误！');
			}
			if($input['email'] && !check($input['email'],'email')){
				$this->error('邮箱格式错误！');
			}
			if($input['password']){
				$input['password'] =  md5($input['password']);
			}else{
				unset($input['password']);
			}
			if($_POST['id']){
				$rs = M('Admin')->save($input);
			}else{
				$rs = M('Admin')->add($input);
			}
			if($rs){
				$this->success('编辑成功！');
			}else{
				$this->error('编辑失败！');
			}
		}
		
	}
	//执行管理员状态的一些操作;
	public function adminStatus($id = NULL, $type = NULL,$moble = 'Admin')
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
	//执行修改管理员登录密码的操作
	public  function setpwd()
	{
		if(IS_POST){
			$oldpassword = $_POST['oldpassword'];
			$newpassword = $_POST['newpassword'];
			$repassword  = $_POST['repassword'];
			if(!check($oldpassword,'password')){
				$this->error('旧密码的格式错误！');
			}
			if(md5($oldpassword) != session('admin_password')){
				$this->error('旧密码错误！');
			}
			if(!check($newpassword,'password')){
				$this->error('新密码格式错误！');
			}
			if($newpassword != $repassword){
				$this->error('确认密码错误！');
			}
			if(M('Admin')->where(array('id' => session('admin_id')))->save(array('password' => md5($newpassword)))){
				$this->success('登录密码修改成功！',U('Login/loginout'));
			}else{
				$this->error('登录密码修改失败！');
			}
		}
		$this->display();
	}
}