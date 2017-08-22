<?php
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
// 定义应用目录
define('APP_PATH','./Application/');
// 定义缓存路径
define('RUNTIME_PATH', './Runtime/');
// 定义备份路径
define('DATABASE_PATH', './Database/');
// 定义上传路径
define('UPLOAD_PATH', './Upload/');
// 定义后台授权码
define('ADMIN_KEY', '9d098f90b4459b464e34ce13d9b0f212');
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单