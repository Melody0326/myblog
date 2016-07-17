<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link  rel="shortcut icon" type="image/x-icon" href="img/logo.ico" />
	<title>冰冰的个人博客</title>
	<!--keywords，有利于搜索引擎化-->
	<meta name="keywords" content="个人博客, 我的博客, 冰冰的博客, 个人网站">
	<base href="<?php echo site_url(); ?>">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="js/lightbox.css">
	<link rel="stylesheet" type="text/css" href="js/gotop.css">
	<script type="appLication/x-javascript">
	    addEventListener("load",function(){
		    setTimeout(hideURLbar,0);
	},false);
	    function hideURLbar(){
	    	window.scrollTo(0,1);
	    }
	</script>
</head>
<body>
	<div id="header">
		<span class="nav-icon"></span>
		<div class="nav-menu-box">
			<div class="nav-menu-bg"></div>
			<ul class="nav-menu">
				<li><a href="welcome/index">主页</a></li>
				<li><a href="welcome/index#about">关于我</a></li>
				<li><a href="welcome/index#service">我的技能</a></li>
				<li><a href="welcome/index#portfolio">我的作品</a></li>
				<li><a href="welcome/index#blog">我的博客</a></li>
				<li><a href="welcome/index#contact">联系我</a></li>
			</ul>
			<span class="nav-close-icon"></span>
		</div>
		<img src="img/bg.png">
		<div class="center">
			<img src="img/pic.png">
			<h1>马冰冰</h1>
			<h5>Welcome to My Personal Website :)</h5>
			<ul class="center-icon">
    			<li><a href="contact.html">Hire Me</a></li>
    			<li><a href="">Follow Me</a></li>
			</ul>
		</div>
	</div>

	<div id="aboutme">
		<a name="about" id="about"></a>
		<div class="wrap">
			<h2 class="title">关于我</h2>
			<span class="blue"></span>
			<div class="left">
				<h3>一个热爱前端的女孩</h3>
				<h4>Act like a lady,Think like a boss.</h4>
				<p>冰冰, 21岁, 一个走在前端之路的女孩.</p>
				<p>现就读于黑龙江大学, 大三一名本科学生, 软件工程专业. 去年初开始接触前端开发, 在此之后我就疯狂的爱上了它, 对WEB前端保持高度的敏感性和关注度. 在学习和工作中, 认真负责、稳重踏实、时间观念强、学习能力强, 拥有良好的理解、表达能力和沟通技巧, 致力于团队协同工作.</p>
				<p>大学期间参加了很多校内活动, ACM/ICPC程序设计大赛, 迎新晚会、协会拉赞助、志愿者、负责组织活动安排、参加校内运动会等等等, 我喜欢一切美好的事物.</p>
				<p>生活中的我, 性格开朗, 积极乐观, 热爱运动, 喜欢唱歌, 有一个美食家的梦想. 我喜欢每一个阶段都给自己制定目标, 因为这样会让我觉得做起事情来有条不紊, 我相信越努力, 越幸运.</p>					
			</div>
			<div class="right">
				<img src="img/photo.jpg">
			</div>
		</div>
	</div>

	<div id="myservice">
		<div class="wrap">
			<div class="top">
				<a name="service" id="service"></a>
				<h2 class="title">我的技能</h2>
			     <span class="blue"></span>
			</div>
			<ul class="myservice-menu">
				<li>
					<span></span>
					<h3>HTML/XHTML、CSS</h3>
					<p>熟练掌握HTML/XHTML、CSS, 了解HTML5.0和CSS3.0的新特性, 能独立完成DIV+CSS页面布局, 对于主流浏览器的兼容性有一定的了解</p>
				</li>
				<li>
					<span></span>
					<h3>JavaScript</h3>
					<p>熟练掌握javaScript, 熟悉面向对象的编程原理, 了解DOM、Ajax、JSON以及XML等数据交换格式, 有原生JS脚本语言的实战经验</p>
				</li>
				<li>
					<span></span>
					<h3>jQuery</h3>
					<p>熟练使用jQuery类库以及各类jQuery插件, 可以完成页面设计与交互, 熟悉jQuery内部原理, 对jQuery框架应用有一定的经验</p>
				</li>
				<li>
					<span></span>
					<h3>前端库和工具</h3>
					<p>了解常见的前端库和工具, 例如, Angula Js、Backnone.js、React、Bootstrap、Grunt、Gulp等</p>
				</li>
				<li>
					<span></span>
					<h3>node.js、mangodb</h3>
					<p>了解nodejs、express、mongodb模板引擎等流行技术, 可以理解其中标签的用法和含义, 但实践不多, 仍在学习和使用中</p>
				</li>
				<li>
					<span></span>
					<h3>PHP</h3>
					<p>掌握PHP的基本应用, 有PHP+MYSQL+APACHE开发经验, 能完成数据库的增删改查操作, 可以实现前端与后台的数据交互</p>
				</li> 
			</ul>
		</div>
	</div>

	<div id="portfolio">
		<a name="portfolio" id="portfolio"></a>
		<div class="wrap">
			<div class="top">
				<h2 class="title">我的作品</h2>
			     <span class="blue"></span>
			</div>
			<ul class="port-menu">
				<li data-src="img/port-pic1.png"><img src="img/port-pic1.png">
					<div class="mask">
						<img src="img/hover-icon.png">
						<h3>个人网站</h3>
						<p>"整站开发"</p>
					</div>
				</li>
				<li data-src="img/port-pic2.png"><img src="img/port-pic2.png">
					<div class="mask">
						<img src="img/hover-icon.png">
						<h3>金融理财网站</h3>
						<p>"官网首页"</p>
					</div>
				</li>
				<li data-src="img/port-pic3.png"><img src="img/port-pic3.png">
					<div class="mask">
						<img src="img/hover-icon.png">
						<h3>贪吃蛇小游戏</h3>
						<p>"JS面向对象"</p>
					</div>
				</li>
				<li data-src="img/port-pic4.png"><img src="img/port-pic4.png">
					<div class="mask">
						<img src="img/hover-icon.png">
						<h3>TA家洁-家政服务</h3>
						<p>"整站开发"</p>
					</div>
				</li>
				<li data-src="img/port-pic5.png"><img src="img/port-pic5.png">
					<div class="mask">
						<img src="img/hover-icon.png">
						<h3>黑大助手</h3>
						<p>"官网首页"</p>
					</div>
				</li>
				<li data-src="img/port-pic6.png"><img src="img/port-pic6.png">
					<div class="mask">
						<img src="img/hover-icon.png">
						<h3>干哈APP</h3>
						<p>"官网首页"</p>
					</div>
				</li>
				<li data-src="img/port-pic7.png"><img src="img/port-pic7.png">
					<div class="mask">
						<img src="img/hover-icon.png">
						<h3>企业网站</h3>
						<p>"学习开发"</p>
					</div>
				</li>
				<li data-src="img/port-pic8.png"><img src="img/port-pic8.png">
					<div class="mask">
						<img src="img/hover-icon.png">
						<h3>作品未完待续···</h3>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div id="myblog">
		<a name="blog" id="blog"></a>
		<div class="wrap">
			<div class="top">
				<h2 class="title">我的博客</h2>
			     <span class="blue"></span>
			</div>
			<ul class="col"></ul>
			<ul class="col"></ul>
			<ul class="col"></ul>
		</div>
	</div>

	<div id="footer">
		<a name="contact" id="contact"></a>
		<div class="wrap">
			<div class="contact">
				<p>是否对我的作品感兴趣呢? 那就联系我吧!
				</p>
				<a href="welcome/contact">联系我</a>
			</div>
		</div>
	</div>

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

	<script src="js/require.js" data-main="js/index.js"></script>
	
</body>
</html>