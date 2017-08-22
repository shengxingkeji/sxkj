<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
	public function __construct()
	{
		parent::__construct();
		$config = M('config')->where(array('id' => 1))->find();
		C($config);
		if(!session('admin_id')){
			$this->redirect('Admin/Login/index');
		}
	}
    public function index()
	{
        $this->redirect('Admin/Index/index');
    }
}