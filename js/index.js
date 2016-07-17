// requirejs.config({
//     shim:{
//         'jquery.lightbox':['jquery']
//     }
// });
require(['jquery','lightbox','gotop','mask'], function($,lightbox,gotop,Mask){
	var $header = $('#header'),
	$navIcon = $('.nav-icon',$header),
	$navBox = $('.nav-menu-box',$header),
	$navCloseIcon = $('.nav-close-icon',$header);
	//弹出层
	$navIcon.on('click',function(){
		$navBox.animate({top: 0});
	});
    $navCloseIcon.on('click',function(){
    	$navBox.animate({top:-192});
    });
    //PORTFOLIO
    $('#portfolio li').hover(function(){
    	$(this).children('img').stop().animate({
    		width:305,
    		height:192,
    		marginLeft:-10,
    		marginTop:-6
    	});
    	$(this).children('.mask').stop().show().animate({
    		opacity:0.84
    	});
    },function(){
    	$(this).children('img').stop().animate({
    		width:285,
    		height:180,
    		marginLeft:0,
    		marginTop:0,
    	});
    	$(this).children('.mask').stop().animate({
    		opacity:0
    	},function(){
    		$(this).hide();
    	});
    });
    $('#portfolio li').on('click',function(){
        lightbox.open(this);
    });
    

    gotop.init();


	//瀑布流
	var bstop = false;  //判断当前数据是否加载完毕
	var iPage = 1;  //传入页数，后台计算 每次从第几条开始取 根据1*6 2*6
	var bEnd = false;  //后台返回一个数据 用来判断数据库是否加载完毕
	function loadData(){
		$.get('welcome/get_blogs',{page:iPage++},function(res){
			bEnd = res.isEnd;
			for(var i= 0;i<res.data.length;i++){
				var blog = res.data[i];
				var html = '<li>'
						+'<img src="'+blog.photo+'">'
						+'<p class="blog-title">'+blog.title+'</p>'
						+'<p>'+blog.content+'</p>'
					    +'<a href="welcome/details?blog_id='+blog.blog_id+'">see more</a>'

						+'</li>';

				var $Minul = getMinUl();
				$Minul.append(html);

			}
			bstop = true; //图片加载完 dom结构全部加载完毕 bstop改为true
		},'json');
	}

	function getMinUl(){
		var $Uls = $('#myblog ul');
		var $Minul = $Uls.eq(0);
		for(var i=1;i<$Uls.length;i++){
			if($Uls.eq(i).height()<$Minul.height()){
				$Minul = $Uls.eq(i);
			}
		}
		return $Minul;
	}
	loadData();

	$(window).on('scroll',function(){
		var $Minul = getMinUl();
		var iScrollTop = $(window).scrollTop()-3155;  //瀑布流滚出浏览器部分的高度
		var iWinHeight = $(window).height(); //当前浏览器的高度
		if(iScrollTop+iWinHeight > $Minul.height() && bstop &&!bEnd){
			loadData();
			bstop = false;    //加载完
		}
	});
	


});