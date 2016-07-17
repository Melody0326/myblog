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

	//ajax

	$('#submit').on('click',function(){
		var $username = $('[name=username]');
		var $email = $('[name=email]');
		var $content = $('[name=content]');
		$.post('welcome/message',{
			username:$username.val(),
			email:$email.val(),
			content:$content.val()
		},function(res){
			if(res=='fail'){
				$username.css({border:'1px solid red'});		
			}
			else if(res=='success'){
				alert('留言成功！');
			}
		});
	});

	$('[name="username"]').on('blur', function(){
		$.get("welcome/check_name", {uname: this.value}, function(res){
			if(res == 'fail'){
				alert('用户名已存在!');
			}

		})
	});
});