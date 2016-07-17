<!doctype html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>single</title>
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/single.css">
</head>
<body>
	<div id="header">
		<span class="nav-icon"></span>
			<div class="nav-menu-box">
				<div class="nav-menu-bg"></div>
				<ul class="nav-menu">
					<li><a href="">主页</a></li>
					<li><a href="">关于我</a></li>
					<li><a href="">我的技能</a></li>
					<li><a hresf="">我的作品</a></li>
					<li><a href="">我的博客</a></li>
					<li><a href="">联系我</a></li>
				</ul>
				<span class="nav-close-icon"></span>
	         </div>
     </div>
     <div id="content">
		<div class="wrap">

			<img src="<?php echo $row ->photo ?>" alt="">
			<p><?php echo $row ->content ?></p>
		</div>
	</div>
	<div id="written">
		<div class="wrap">

			<div class="comment-list">
				<h3 class="comment-title">所有评论</h3>

				<?php
				foreach ($result as $result){
					?>
					<div class="comment-wrap">
						<div class="comment-info">
							<span class="comment-floor">1楼 | </span>
							<span class="comment-username">评论用户:<?php echo $result -> username; ?> | </span>
							<span class="comment_time">评论时间:<?php echo $result -> add_time; ?></span>
						</div>
						<div class="comment-content">
							<div  class="comment-user-photo" >
								<img src="img/comment-user-bg.gif" alt="">
							</div>
							<div class="comment-text">
								<p><?php echo $result -> subject; ?></p>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>

		</div>
	</div>

	<div id="comment">
		<div class="wrap">
			<h2>ADD NEW COMMENT</h2>
			<form method="post" action="welcome/write">
				<input type="hidden" name="blog_id" value="<?php echo $this ->input ->get('blog_id');?>">
			     <label>姓名</label>
				<input type="text" name="username">
			
				<label>邮箱</label>
				<input type="text" name="email">
				<label>Website</label>
				<input type="text" name ="website">
				<label>Subjects</label>
				<textarea name="subject"></textarea>
				<input type="submit" value="Submit Comment">
			</form>
		</div>
	</div>
	<div id="bottom">
		<div class="wrap">
				<p>Melody0326 <a href="https://github.com/Melody0326">GitHub</a></p>
				<div class="footer-menu">
					<li class="face"><a href=""></a></li>
					<li class="bird"><a href=""></a></li>
					<li class="ball"><a href=""></a></li>
					<li class="cemera"><a href=""></a></li>
				</div>
		</div>
	</div>

		<script type="text/javascript" src="js/require.js" data-main="js/single.js"></script>
    <script type="text/javascript" src=""></script>
</html>