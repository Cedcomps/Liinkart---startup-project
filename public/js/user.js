$(document).ready(function(){
	//Like artist
 	$('.like').on('click', function(event) {
 		event.preventDefault();
		userId = $('h3').data('userid');
 		var isLike = event.target.previousElementSibling == null;
 		$.ajax({
 			method: 'post',
 			url: urlLike,
 			data: {userHasLiked : userHasLiked, isLike: isLike, userId: userId, _token: token}
 		})
 			.done(function() {
				event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this dude' : 'Like' :  event.target.innerText == "Dislike" ? 'Tu aimes pas ' : 'Dislike';
            	if (isLike){
            		event.target.nextElementSibling.innerText = 'Dislike';
            	} else {
            		event.target.previousElementSibling.innerText = 'Like';
            	}
            });
 		});
 	// Select specialisation edit user
    $('select').material_select();
});