$(document).ready(function(){
	//Like artist
 	var isLike = false;
 	$('.like').on('click', function(event) {
 		event.preventDefault();
		userId = $('h3').data('userid');
		isLike = !isLike;
		
 		$.ajax({
 			method: 'POST',
 			url: urlLike,
 			data: {ajaxUserHasLiked : ajaxUserHasLiked, isLike: isLike, userId: userId, _token: token}
 		})
 			.done(function() {
				event.target.innerText = isLike ? event.target.innerText == 'favorite_border' ? 'favorite' : 'favorite_border' :  event.target.innerText == "favorite_border" ? 'favorite' : 'favorite_border';
            	if (isLike){
            		event.target.innerText = 'favorite';
            	} else {
            		event.target.innerText = 'favorite_border';
            	}
            	console.log(isLike);
            });
 		});
});