<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<meta name=”renderer” content=”webkit”>
<meta http-equiv=”X-UA-Compatible” content=”IE=Edge,chrome=1″ >
<head>
<meta charset="utf-8">
<title>后台登录界面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" type="image/x-icon" href="/Public/Admin/Login/images/timg.jpg" media="screen"/>
<link href="/Public/Admin/Login/css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Admin/Login/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/Login/js/jquery.SuperSlide.2.1.2.js"></script>
<script type="text/javascript" src="/Public/Admin/Login/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/Public/Admin/Login/js/jquery.cookie.js"></script>
</head>

<body>
	<div class="login-layout">
        <form action="<?php echo U('Login/index');?>" name='theForm' id="theForm" method="post">
            <div class="login-form" style="position: relative">
                <div class="formContent">
                	<div class="title">后台登录</div>
                    <div class="formInfo">
                    	<div class="formText">
                        	<i class="icon icon-user"></i>
                            <input type="text" name="username" autocomplete="off" class="input-text" value="" placeholder="请填写用户名" />
                        </div>
                        <div class="formText">
                        	<i class="icon icon-pwd"></i>
                            <input type="password" name="password" autocomplete="off" class="input-text" value="" placeholder="请填写密码" />
                        </div>
                        <div class="formText">
                            <i class="icon icon-chick"></i>
                            <input type="text" name="verify" autocomplete="off" class="input-text chick_ue" value="" placeholder="请填写验证码" />
                            <img src="<?php echo U('Verify/code');?>" class="chicuele" id="imgVerify" alt="" onclick="fleshVerify()">
                        </div>
						<div class="formText submitDiv">
                          <span class="submit_span">
							<button type="submit" class="sub">登录</button>
                          </span>
                       </div>
                    </div>
                </div>
                <div id="error" style="position: absolute;left:0px;bottom: 12px;text-align: center;width:441px;">

                </div>
            </div>
        </form>
    </div>
    <div id="bannerBox">
        <ul id="slideBanner" class="slideBanner">
            <li><img src="/Public/Admin/Login/images/banner_1.jpg"></li>
            <li><img src="/Public/Admin/Login/images/banner_2.jpg"></li>                
            <li><img src="/Public/Admin/Login/images/banner_3.jpg"></li>                
        </ul>
    </div>
    <!--<script type="text/javascript" src="js/jquery.purebox.js"></script> -->   
    <script type="text/javascript">
		//执行刷新背景图片
    	$("#bannerBox").slide({mainCell:".slideBanner",effect:"fold",interTime:3500,delayTime:500,autoPlay:true,autoPage:true,endFun:function(i,c,s){
			$(window).resize(function(){
				var width = $(window).width();
				var height = $(window).height();
				s.find(".slideBanner,.slideBanner li").css({"width":width,"height":height});
			});
		}});
		//执行表单提交
		$(document).ajaxStart(function(){
			$("button:submit").addClass("log-in").attr("disabled",true);
		}).ajaxStop(function(){
			$("button:submit").removeClass("log-in").attr("disabled",false);
		});
		$("form").submit(function(){
			var self = $(this);
			$.post(self.attr("action"),self.serialize(),success,"json");
			return false;
			function success(data){
				if(data.status){
					window.location.href = data.url;
				}else{
					self.find("#error").html("<span class='error'>"+data.info+"</span>");
				}
			}
		});
        //执行点击刷新验证码
		function fleshVerify(){
			var imgVerify = $("#imgVerify").attr("src");
			if(imgVerify.indexOf('?') > 0){
				$("#imgVerify").attr("src",imgVerify + '&random=' + Math.random());
			}else{
				$('#imgVerify').attr("src",imgVerify.replace(/\?.*$/,'')+ '?' +Math.random());
			}
		}
    </script>
</body>
</html>