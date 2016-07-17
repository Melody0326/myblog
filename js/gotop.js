define(['jquery'],function(){
	return{
		init:function(){
			$div = $('<div class="gotop"></div>');
			$div.appendTo(document.body);

			$(window).scroll(function(){
		        if($(window).scrollTop()>800){
		        	$div.show();
		        }
		        else{
		        	$div.hide();
		        }
		    });
		    $div.on('click',function(){
		    	/*$(window).scrollTop(0);*/
				var iScrollTop = document.documentElement.scroolTop || document.body.scrollTop;
				var timer = setInterval(function(){
					$(this).scrollTop(0,iScrollTop-=100);
					if(iScrollTop<=0){
						clearInterval(timer);
					}
				},30)
		    });
		}
	}
});