require(['jquery'],function(){
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
});