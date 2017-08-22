<?php
namespace Admin\Controller;

class ConfigController extends AdminController {
	//执行基本配置的页面
    public function index()
	{
		$a = $this->data = M('Config')->where(array('id' => 1))->find();
        $this->display();
    }
	//执行基本配置的编辑
	public function configEdit()
	{
		if(M('Config')->where(array('id' => 1))->save($_POST)){
			$this->success('修改成功！');
		}else{
			$this->error('修改失败！');
		}
	}
	//执行网站logo图片的配置
	public function image()
	{
		$upload = new \Think\Upload();
		$upload->maxSize = 3145728;
		$upload->exts = array('jpg','gif','png','jpeg');
		$upload->rootPath = './Upload/config/';
		$upload->autoSub = false;
		$info = $upload->upload();
		foreach($info as $k =>$v){
			$path = $v['savepath'].$v['savename'];
			echo $path;
			exit();
		}
	}
	
}