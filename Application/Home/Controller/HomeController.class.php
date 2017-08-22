<?php
namespace Home\Controller;
class HomeController extends \Think\Controller {
	public function _initialize()
	{
		//网站保护;
		$config = (APP_DEBUG ? null : S('home_config'));

		if (!$config) {
			$config = M('Config')->where(array('id' => 1))->find();
			S('home_config', $config);	
		}
		if (!session('web_close')) {
			if (!$config['web_close']) {
				$this->assign('content',$config['web_ban']);
				$this->assign('title',$config['web_title']);
				exit($this->display('Public:Err'));
				
			}
		}
		C($config);
	}
}