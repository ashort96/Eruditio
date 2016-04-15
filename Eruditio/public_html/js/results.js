$(document).ready(function() {
		$(".detail-view").popover(function() {
		});
		var el = $('[data-toggle="popover"]');
		el.on('click', function(e){
			var el = $(this);
			setTimeout(function(){
				el.popover('show');
			}, 200); // Must occur after document click event below.
		}).on('shown.bs.popover', function(){
			$(document).on('click.popover', function() {
				el.popover('hide'); // Hides all
			});
		}).on('hide.bs.popover', function(){
			$(document).off('click.popover');
		});
	});
