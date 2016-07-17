define(['jquery'], function(){
	var $overlay=$('<div class="lb-overlay"></div>');
			var $wrap=$('<div class="lb-wrap"></div>');
			var $span = $('<span class="lb-close">x</span>');
	return {
		open:function(elem){
			
			
			var oImg = new Image();
			oImg.onload = function(){
				$wrap.css({
					marginLeft:-this.width/2,
					marginTop:-this.height/2
				});
				$(this).appendTo($wrap);			
			};  
			oImg.src=$(elem).data('src');      
			$span.appendTo($wrap);
			$overlay.appendTo(document.body);
			$wrap.appendTo(document.body);

			var that = this;

			$overlay.on('click',function(){
		        that.close();
		    });
		    $span.on('click',function(){
		    	that.close();
		    });


        },
		close:function(){
		    $overlay.remove();
		    $wrap.remove();
		}
	}
});