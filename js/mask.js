/**
 * Created by Administrator on 2016/4/16.
 */
define(["jquery"],function($){
    function Mask(options){

    }
    Mask.prototype = {
        open:function(options){
            options = $.extend({title:'Name',number:'1'},options);
            this.$maskBox = $('<div class="mask"></div>').appendTo(document.body);
            this.$maskContent = $('<div class="mask-content"></div>').appendTo(document.body);
            $img = $('<img src="'+options.src+'">').appendTo(this.$maskContent);
            $title = $('<span class="title">'+options.title+'</span>').appendTo(this.$maskContent);
            $order = $('<div class="order"><span>'+options.number+'</span>/<span>'+options.totle+'</span></div>').appendTo(this.$maskContent);

        },
        close:function(){
            this.$maskBox.remove();
            this.$maskContent.remove();
        }
    };
    return Mask;
});