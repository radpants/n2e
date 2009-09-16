$(function() { 

	var slides = $('#rotatingContent > div.node');
	var i = 0;
	
	$(slides[i]).show();
	
	$('#rotatingContent .right').click(function(e) {
		e.preventDefault;
		
		$(slides[i]).hide();
		
		i++;
		
		$(slides[i]).show();
	});
	
	$('#rotatingContent .left').click(function(e) {
		e.preventDefault;
		
		$(slides[i]).hide();
		
		i--;
		
		$(slides[i]).show();
	});
	
});