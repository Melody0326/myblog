<!doctype html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>留言板</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
	<div id="header">
		<span class="nav-icon"></span>
			<div class="nav-menu-box">
				<div class="nav-menu-bg"></div>
				<ul class="nav-menu">
					<li><a href="welcome/index">主页</a></li>
					<li><a href="welcome/index">关于我</a></li>
					<li><a href="welcome/index">我的技能</a></li>
					<li><a href="welcome/index">我的作品</a></li>
					<li><a href="welcome/index">我的博客</a></li>
					<li><a href="welcome/contact">联系我</a></li>
				</ul>
				<span class="nav-close-icon"></span>
	         </div>
     </div>
     <div id="content">
     	<div class="wrap">
     		<form method="post" action="welcome/message">
     			<label>你的名字</label>
     			<input type="text" name="username">
     			<label>你的邮箱</label>
     			<input type="text" name="email">
     			<label>留言信息</label>
     			<textarea name="content" value="感谢你的留言^_^"></textarea>
     			<input type="button"  value="提交" id="submit">
     		</form>
     		<div class="address">
     			<h3>联系方式</h3>
     			<p>联系地址: 黑龙江省哈尔滨市南岗区黑龙江大学</p>
     			<br>
     			<p>联系电话: 18645365158</p>
     			<p>邮箱: melody_0425@163.com</p>
     		</div>
     	</div>
     </div>
     <div id="load"></div>
     <div id="bottom">
     	<div class="wrap">
				<p>Melody0326 <a href="https://github.com/Melody0326">GitHub</a></p>
				<div class="footer-menu">
					<li class="face"><a href="#"></a></li>
					<li class="bird"><a href="#"></a></li>
					<li class="ball"><a href="#"></a></li>
					<li class="cemera"><a href="#"></a></li>
				</div>
		</div>
     </div>

		<script type="text/javascript" src="js/require.js" data-main="js/contact.js"></script>
    <script type="text/javascript" src=""></script>
</body>
</html>