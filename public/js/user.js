$(document).ready(function(){
	//Like artist
 	var isLike = false;
	var heartStroke = parseInt($('#heartStroke').text());
 	$('.like').on('click', function(event) {
 		event.preventDefault();
		userId = $('h3').data('userid');
		isLike = !isLike;
		
 		$.ajax({
 			method: 'POST',
 			url: urlLike,
 			data: {ajaxUserHasLiked : ajaxUserHasLiked, isLike: isLike, userId: userId, _token: token}
 		})
 			.done(function(data) {
				event.target.innerText = isLike ? event.target.innerText == 'favorite_border' ? 'favorite' : 'favorite_border' :  event.target.innerText == "favorite_border" ? 'favorite' : 'favorite_border';
            	if (isLike){
            		event.target.innerText = 'favorite';
            		$('#heartStroke').text(heartStroke++);
            	} else {
            		event.target.innerText = 'favorite_border';
            		$('#heartStroke').text(heartStroke--);
            	}
            	console.log(isLike);
            });
 		});
});