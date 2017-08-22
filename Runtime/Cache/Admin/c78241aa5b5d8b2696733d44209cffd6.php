<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js"> 
<head>
	<meta charset="utf-8" />
	<title>后台管理系统</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/Public/Admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="/Public/Admin/css/fullcalendar.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="/Public/Admin/css/quan.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="/Public/Admin/image/timg.jpg" />
	<!-- 开始核心插件-->
	<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/quan.js"></script>
	<script type="text/javascript" src="/Public/layer/layer.js"></script>
	<script type="text/javascript" src="/Public/layer/laydate/laydate.js"></script>
	<script src="/Public/Admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="/Public/Admin/js/bootstrap.min.js" type="text/javascript"></script> 
	<script src="/Public/Admin/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/Public/Admin/js/jquery.cookie.min.js" type="text/javascript"></script>
	<!-- 结束核心插件-->
	<!-- 开始页面级插件 -->
	<script src="/Public/Admin/js/jquery.flot.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/jquery.pulsate.min.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/date.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/daterangepicker.js" type="text/javascript"></script>     
	<script src="/Public/Admin/js/jquery.gritter.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/fullcalendar.min.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/jquery.easy-pie-chart.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/jquery.sparkline.min.js" type="text/javascript"></script>  
	<!-- 结束页面级插件 -->
	<!-- 开始页面级脚本 -->
	<script src="/Public/Admin/js/app.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/index.js" type="text/javascript"></script>        
	<!-- 结束页面级脚本-->  
</head>
<body class="page-header-fixed">
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="index.html">
				<img src="/Public/Admin/image/timg.jpg" alt="logo" style="height:30px;"/>
				</a>
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="/Public/Admin/image/menu-toggler.png" alt="" />
				</a>                  
				<ul class="nav pull-right">
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" src="/Public/Admin/image/avatar1_small.jpg" />
						<span class="username">&nbsp;<?php echo session('admin_username');?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/" target="_bank"><i class="icon-share"></i>&nbsp;前台首页</a></li>
							<li><a href="<?php echo U('User/setpwd');?>"><i class="icon-pencil"></i>&nbsp;修改密码</a></li>
							<li><a href="<?php echo U('Tools/index');?>"><i class="icon-trash"></i>&nbsp;清除缓存</a></li>
							<li><a href="<?php echo U('Login/loginout');?>"><i class="icon-key"></i>&nbsp;退出后台</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="page-container">
		<div class="page-sidebar nav-collapse collapse">
			<ul class="page-sidebar-menu">
				<li>
					<div class="sidebar-toggler hidden-phone"></div>
				</li>
				<li>
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="搜索..." />
							<input type="button" class="submit" value=" " />
						</div>
					</form>
				</li>
				<li class="start active ">
					<a href="<?php echo U('Index/index');?>">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-th-large"></i> 
					<span class="title">系统</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo U('Index/index');?>"><i class="icon-th"></i>&nbsp;系统管理首页</a>
						</li>
						<li >
							<a href="<?php echo U('Index/counts');?>"><i class="icon-list"></i>&nbsp;系统概览</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-user"></i> 
					<span class="title">用户</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo U('User/index');?>"><i class="icon-user"></i>&nbsp;用户管理</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-user-md"></i> 
					<span class="title">管理员</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo U('User/admin');?>"><i class="icon-user-md"></i>&nbsp;管理员管理</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-list-alt"></i> 
					<span class="title">内容</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo U('Article/adver');?>"><i class="icon-camera-retro"></i>&nbsp;广告管理</a>
						</li>
						<li >
							<a href="<?php echo U('Article/links');?>"><i class="icon-globe"></i>&nbsp;友情链接</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-cog"></i> 
					<span class="title">设置</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo U('Config/index');?>"><i class=" icon-cogs"></i>&nbsp;基本设置</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-briefcase"></i> 
					<span class="title">工具</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="<?php echo U('Tools/index');?>"><i class="icon-trash"></i>&nbsp;清除缓存</a>
						</li>
						<li >
							<a href="<?php echo U('Tools/dataExport');?>"><i class="icon-copy"></i>&nbsp;备份数据库</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="page-content">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<h3 class="page-title">
							欢迎&nbsp;<small>进入后台管理系统</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Dashboard</a></li>
						</ul>
					</div>
				</div>
				<div id="dashboard">


<div class="row-fluid">	
	<div class="tab-pane ">
		<div id="top-alert" class="fixed alert alert-error" style="display: none;">
			<button class="close fixed" style="margin-top: 4px;">&times;</button>
			<div class="alert-content">警告内容</div>
		</div>
		<div id="main" class="main">
			<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption"><i class="icon-reorder"></i>清理缓存</div>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
					</div>
				</div>
				<div class="portlet-body form">
					<div class="form-horizontal form-view">
						<h3 class="form-section">系统信息</h3>
						<div class="row-fluid">
							<div class="span6 ">
								<div class="control-group">
									<label class="control-label" for="firstName">当前缓存数据大小为:</label>
									<div class="controls">
										<span class="text"><?php echo ($cacheSize); ?>&nbsp;KB</span>
									</div>
								</div>
							</div>
							<div class="span6 ">
								<div class="control-group">
									<div class="controls" id="loader">
									</div>
								</div>
							</div>
						</div>
						<button type="submit" class="btn blue" onclick="animateFunc();"><i class="icon-trash"></i>&nbsp;&nbsp;清理</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="/Public/Admin/js/jquery.percentageloader-0.1.min.js"></script>
<script type="text/javascript">
	var $loader;
	var totalKb = '<?php echo ($cacheSize); ?>';
	var kb = 0;
	var clearCacheFlag = 0;
	$loader = $("#loader").percentageLoader({
		width : 200,
		height : 200,
		progress : 0
	});
	function animateFunc()
	{
		kb += 17;
		if(kb > totalKb){
			kb = totalKb;
		}
		$loader.setProgress(kb / totalKb);
		$loader.setValue(kb.toString() + 'kb');
		if((kb / totalKb) > 0.98 && clearCacheFlag == 0){
			clearCacheFlag = 1;
			clearCache();
		}
		if(kb / totalKb){
			setTimeout(animateFunc,25);
		}
	}
	function clearCache()
	{
		$.get("<?php echo U('Tools/delcache');?>").success(function(data){
			if(data.status == 1){
				if(data.url){
					updateAlert(data.info + '页即将自动跳转~','alert-success');
				}else{
					updateAlert(data.info + '页即将自动跳转~','alert-success');
				}
				setTimeout(function(){
					if(data.url){
						location.href = data.url;
					}else if($(this).hasClass('no-refresh')){
						$('#top-alert').find('button').click();
					}else{
						location.reload();
					}
				},1500);
			}else{
				updateAlert(data.info);
				setTimeout(function(){
					if(data.url){
						location.href = data.url;
					}else{
						$('#top-alert').find('button').click();
					}
				},1500);
			}
		});
	}
</script>
	
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Metronic by keenthemes.Collect from 
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<script>
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins
		   Index.init();
		   Index.initCalendar(); // init index page's custom scripts
		   Index.initCharts(); // init index page's custom scripts
		   Index.initChat();
		   Index.initMiniCharts();
		   Index.initDashboardDaterange();
		   Index.initIntro();
		});
	</script>
</body>
</html>