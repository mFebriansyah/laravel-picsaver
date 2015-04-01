$(function(){
	$.ajax({
		method: "GET",
		url: url+"/content/album",
	}).done(function(response){
		elem = $('[data-content="album-index"]');
		elem.css('opacity', '0.1').html(response);
		i = 0;
		len = elem.find('img').length;
		elem.find('img').on('load', function(){
			i++;
			if(i==len){
				elem.animate({'opacity' : '1'}, 'slow').masonry({
					itemSelector: '.item'
				});
			}
		});
	});
})