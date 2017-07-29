//Pagination artwork in ajax
$(document).ready(function(){	
	$('.pagination a').on('click', function(e){
   		e.preventDefault();
   		var page = ($(this).attr('href').split('page=')[1]);//
   		getArtworks(page);
   	});
   	function getArtworks(page){
   		$.ajax({
   			url: '?page=' + page,
   			datatype: "html",
   		}).done(function(data){
   			$('.liste-pagination').html(data);
   			//location.hash = page;
   		});
   	}
});