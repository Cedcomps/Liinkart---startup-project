function pagination() {
   //Pagination artwork in ajax
	$('.pagination a').on('click', function(e){
   		e.preventDefault();
   		var page = ($(this).attr('href').split('page=')[1]);//
   		getPagination(page);
   	});
	function getPagination(page){
		$.ajax({
			url: '?page=' + page,
			datatype: "html",
		}).done(function(data){
			$('.liste-pagination').html(data);
        pagination();
			//location.hash = page;
		});
	}
}
$(document).ready(function(){
   pagination();
});