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
					<a href="javascript:;">
						<i class="icon-folder-open"></i> 
						<span class="title">资源</span>
						<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="icon-male"></i> 
							成人专区
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
										<i class="icon-book"></i>
										图书管理
										<span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li><a href="#"><i class="icon-bookmark"></i>&nbsp;图书管理首页</a></li>
										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
										<i class="icon-film"></i>
										视频管理
										<span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li><a href="#"><i class="icon-facetime-video"></i>&nbsp;视频管理首页</a></li>
										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
										<i class="icon-music"></i>
										音频管理
										<span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li><a href="#"><i class="icon-music"></i>&nbsp;音频管理首页</a></li>
										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
								<i class="icon-github-alt"></i> 
								儿童专区
								<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
										<i class="icon-book"></i>
										图书管理
										<span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li><a href="#"><i class="icon-bookmark"></i>&nbsp;图书管理首页</a></li>
										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
										<i class="icon-film"></i>
										视频管理
										<span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li><a href="#"><i class="icon-facetime-video"></i>&nbsp;视频管理首页</a></li>
										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
										<i class="icon-music"></i>
										音频管理
										<span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li><a href="#"><i class="icon-music"></i>&nbsp;音频管理首页</a></li>
										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
									</ul>
								</li>
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
			<div class="portlet box light-grey">
				<div class="portlet-title">
					<div class="caption"><i class="icon-globe"></i>管理员管理</div>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="clearfix">
						<div class="btn-group">
							<button id="sample_editable_1_new" class="btn green">
							<a href="<?php echo U('User/userEdit');?>" style="color:white;text-decoration:none;">新增</a>&nbsp;<i class="icon-plus"></i>
							</button>
						</div>
						<div class="btn-group">
							<button id="sample_editable_1_new" class="btn red ajax-post btn-warning" url="<?php echo U('User/userStatus',array('type'=>'forbid','moble'=>'User'));?>" target-form="ids">
							禁用&nbsp;<i class="icon-lock"></i>
							</button>
						</div>
						<div class="btn-group">
							<button id="sample_editable_1_new" class="btn green ajax-post btn-info" url="<?php echo U('User/userStatus',array('type'=>'resume','moble'=>'User'));?>" target-form="ids">
							启用&nbsp;<i class="icon-unlock"></i>
							</button>
						</div>
						<div class="btn-group">
							<button id="sample_editable_1_new" class="btn red ajax-post confirm btn-danger" url="<?php echo U('User/userStatus',array('type'=>'del','moble'=>'User'));?>" target-form="ids">
							删除&nbsp;<i class="icon-trash"></i>
							</button>
						</div>
						<form name="formSearch" id="formSearch" method="get" class="btn-group pull-right">
							<div class="btn-group pull-right" id="sample_1_filter">
								<select style="width: 160px; height:34px;float: left; margin-right: 10px;" name="status" class="form-control">
									<option value=""
									<?php if(empty($_GET['status'])): ?>selected<?php endif; ?>
									>全部状态</option>
									<option value="1"
									<?php if(($_GET['status']) == "1"): ?>selected<?php endif; ?>
									>冻结状态</option>
									<option value="2"
									<?php if(($_GET['status']) == "2"): ?>selected<?php endif; ?>
									>正常状态</option>
								</select>
								<select style=" width: 160px; height:34px; float: left; margin-right: 10px;" name="field" class="form-control">
									<option value="username"
									<?php if(empty($_GET['field'])): ?>selected<?php endif; ?>
									>用户名</option>
									<option value="email"
									<?php if(($_GET['field']) == "email"): ?>selected<?php endif; ?>
									>邮箱</option>
									<option value="id"
									<?php if(($_GET['field']) == "id"): ?>selected<?php endif; ?>
									>用户ID</option>
								</select>
								<input type="text"  class="m-wrap medium" name="name" placeholder="请输入查询的内容" value="<?php echo ($_GET['name']); ?>" />
								<a href="javascript:;" id="search" style="margin-right:10px;">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-xs  btn-purple">
											<span class="ace-icon fa fa-search icon-on-right bigger-110">
											</span>
											<i class="icon-search"></i>&nbsp;搜索
										</button>
									</span>
								</a>
								<a href="<?php echo U('User/index');?>">
									<button type="button" class="btn btn-xs  btn-purple">
									<span class="ace-icon fa fa-globe icon-on-right bigger-110">
									</span>
									<i class="icon-chevron-down"></i>&nbsp;显示全部
									</button>
								</a>
							</div>
						</form>
						<script type="text/javascript">
							//执行搜索的功能
							$(function () {
								$('#search').click(function () {
									$('#formSearch').submit();
								});
							});
							//回车搜索
							$(".search-input").keyup(function (e) {
								if (e.keyCode === 13) {
									$("#search").click();
									return false;
								}
							});
						</script>
					</div>
					<table class="table table-striped table-bordered table-hover" id="sample_1">
						<thead>
							<tr>
								<th style="width:8px;"><input type="checkbox" class="check-all"/></th>
								<th>ID</th>
								<th class="hidden-480">用户名</th>
								<th>邮箱</th>
								<th>注册时间</th>
								<th>状态</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="odd gradeX">
									<td><input type="checkbox" class="ids" name="id[]" value="<?php echo ($vo["id"]); ?>" /></td>
									<td><?php echo ($vo["id"]); ?></td>
									<td class="hidden-480"><?php echo ($vo["username"]); ?></td>
									<td class="center hidden-480"><a href="#"><?php echo ($vo["email"]); ?></a></td>
									<td class="center hidden-480"><?php echo (addtime($vo["addtime"])); ?></td>
									<td class="center hidden-480"><?php if(($vo["status"]) == "0"): ?><span class="label label-inverse">禁用</span><?php endif; ?>
										<?php if(($vo["status"]) == "1"): ?><span class="label label-success">启用</span><?php endif; ?></td>
									<td ><a href="<?php echo U('User/userEdit?id='.$vo['id']);?>" class="btn mini purple"><i class="icon-edit"></i>&nbsp;编辑</a></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							<?php else: ?>
								<td colspan="12" style="text-align:center;color:red;font-size:14px;">oh!&nbsp;&nbsp;暂时还没有内容！</td><?php endif; ?>	
						</tbody>
					</table>
					<!--执行分页的效果-->
					<div class="page">
						<div><?php echo ($page); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
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