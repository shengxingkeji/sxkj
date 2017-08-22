<?php
namespace Admin\Controller;

class IndexController extends AdminController {
    public function index()
	{
        $this->display();
    }
	//执行系统概览
	public function counts()
	{
		$arr = array();
		$arr['mysql'] = M()->query("select version() as v");
		$this->assign('arr',$arr);
		$this->display();
	}
}