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
				<li>
					<a class="active" href="javascript:;">
						<i class="icon-indent-left"></i> 
						<span class="title">资源</span>
						<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
								<i class="icon-user-md"></i>
								成人专区
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#"><i class="icon-user"></i>&nbsp;图书管理</a></li>
								<li><a href="#">视频管理</a></li>
								<li><a href="#">音频管理</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
								<i class="icon-github-alt"></i>
								儿童专区
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">图书管理</a></li>
								<li><a href="#">视频管理</a></li>
								<li><a href="#">音频管理</a></li>
							</ul>
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
	<div class="span12">
		<div id="top-alert" class="fixed alert alert-error" style="display: none;">
			<button class="close fixed" style="margin-top: 4px;">&times;</button>
			<div class="alert-content">警告内容</div>
		</div>
		<div id="main" class="main">
			<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption"><i class="icon-reorder"></i>基本设置</div>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
					</div>
				</div>
				<div class="portlet-body form">
					<form action="<?php echo U('Config/configEdit');?>" method ="POST" id="form" class="form-horizontal">
						<div class="control-group">
							<label class="control-label">网站名称：</label>
							<div class="controls">
								<input type="text" name="web_name" value="<?php echo ($data["web_name"]); ?>" class="span6 m-wrap popovers" data-trigger="hover" data-content="*&nbsp;网站的名称介绍."/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">网站标题：</label>
							<div class="controls">
								<input type="text" name="web_title" value="<?php echo ($data["web_title"]); ?>" class="span6 m-wrap popovers" data-trigger="hover" data-content="*&nbsp;网站的标题."/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">网站Logo：</label>
							<div class="controls">
								<div id="addpicContainer">
									<!-- 利用multiple="multiple"属性实现添加多图功能 -->
									<!-- position: absolute;left: 10px;top: 5px;只针对本用例将input隐至图片底下。-->
									<!-- height:0;width:0;z-index: -1;是为了隐藏input，因为Chrome下不能使用display:none，否则无法添加文件 -->
									<!-- onclick="getElementById('inputfile').click()" 点击图片时则点击添加文件按钮 -->
									<?php if(!empty($data["web_logo"])): ?><!--没有图片显示默认图片-->
										<img id="up_img" onclick="getElementById('inputfile').click()" style="cursor:pointer;max-width:400px;" title="点击添加图片" alt="点击添加图片" src="/Upload/config/<?php echo ($data["web_logo"]); ?>">
										<?php else: ?>
										<!--没有图片显示默认图片-->
										<img id="up_img" onclick="getElementById('inputfile').click()" style="cursor:pointer;max-width:400px;" title="点击添加图片" alt="点击添加图片" src="/Public/Admin/images/addimg.png"><?php endif; ?>
									<input type="hidden" id="img" name="web_logo" value="<?php echo ($data["web_logo"]); ?>">
									<input type="file" id="inputfile" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value=""/>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">网站关键字：</label>
							<div class="controls">
								<input type="text" name="web_keywords"  value="<?php echo ($data["web_keywords"]); ?>" class="span6 m-wrap popovers" data-trigger="hover" data-content="*&nbsp;便于搜索引擎进行搜索."/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">网站描述：</label>
							<div class="controls">
								<input type="text" name="web_description" value="<?php echo ($data["web_description"]); ?>" class="span6 m-wrap popovers" data-trigger="hover" data-content="*&nbsp;对网站的简单介绍."/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">备案号：</label>
							<div class="controls">
								<input type="text" name="web_icp" value="<?php echo ($data["web_icp"]); ?>" class="span6 m-wrap popovers" data-trigger="hover" data-content="*&nbsp;工信部备案."/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">网站状态：</label>
							<div class="controls">
								<select name="web_close" class="span6  m-wrap popovers" data-placeholder="Choose a Category" data-trigger="hover" data-content="*&nbsp;不同的状态值代表不同的操作.">
									<option value="1" <?php if(($data["web_close"]) == "1"): ?>selected<?php endif; ?>>正常</option>
									<option value="0" <?php if(($data["web_close"]) == "0"): ?>selected<?php endif; ?>>禁止访问</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">禁止访问原因：</label>
							<div class="controls">
								<textarea class="span6 m-wrap popovers" name="web_ban" rows="3" style="resize:none;" data-trigger="hover" data-content="*&nbsp;禁止访问，便于在前台中显示."><?php echo ($data['web_ban']); ?></textarea>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" id="submit" class="btn blue ajax-post" target-form="form-horizontal">确认</button>
							<a class="btn-return" href="<?php echo ($_SERVER['HTTP_REFERER']); ?>"><button type="button" class="btn">取消</button></a>
							<?php if(!empty($data["id"])): ?><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/><?php endif; ?>                            
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	//执行提交表单的操作
	$('#submit').click(function(){
		$('#form').submit();
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		//相应文件添加成功的事件
		$("#inputfile").change(function(){
			//创建formdata对象
			var data = new FormData();
			//为formdata对象添加数据
			$.each($('#inputfile')[0].files,function(i,file){
				data.append('upload_file' + i,file);
			});
			//执行发送数据
			$.ajax({
				url:"<?php echo U('Config/image');?>",
				type: 'POST',
				data:data,
				cache:false,
				contentType:false,
				processData:false,
				success:function(data){
					if(data){
						$('#up_img').attr("src","/Upload/config/" + data);
						$('#img').val(data);
						$('#up_img').show();
					}
				},
				error:function(){
					alert('上传成功');
					$(".loading").hide();
					//加载失败移除加载的图片
				}
			});
		});
	});
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