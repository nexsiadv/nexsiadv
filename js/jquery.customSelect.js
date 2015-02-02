(function($){
	$.fn.extend({
		customStyle : function(options) {
			if(!$.browser.msie || ($.browser.msie&&$.browser.version>6)){
				return this.each(function() {
					var currentSelected = $(this).find(':selected');
					$(this).after('<div class="customStyleSelectBox"><div class="customStyleSelectBoxInner">'+currentSelected.text()+'</div></div>').css({position:'absolute', opacity:0,fontSize:$(this).next().css('font-size')});
					var selectBoxSpan = $(this).next();
					var selectBoxWidth = 300 - parseInt(selectBoxSpan.css('padding-left')) -parseInt(selectBoxSpan.css('padding-right'));			
					var selectBoxSpanInner = selectBoxSpan.find(':first-child');
					selectBoxSpan.css({display:'inline-block'});
					selectBoxSpanInner.css({width:280, display:'inline-block'});
					var selectBoxHeight = parseInt(selectBoxSpan.height()) + parseInt(selectBoxSpan.css('padding-top')) + parseInt(selectBoxSpan.css('padding-bottom'));
					$(this).height(selectBoxHeight).change(function(){
						// selectBoxSpanInner.text($(this).val()).parent().addClass('changed');   This was not ideal
						selectBoxSpanInner.text($(this).find(':selected').text()).parent().addClass('changed');
						// Thanks to Juarez Filho & PaddyMurphy
					});
				});
			}
		}
	});
})(jQuery);

$(function(){
	$('select.select').customStyle();
});
