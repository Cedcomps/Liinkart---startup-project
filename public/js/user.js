$(document).ready(function(){
	//Like artist
 	var isLike;
      var countLike = parseInt($('.countLike').text());
      $('.like').on('click', function(event) {
            event.preventDefault();
            userId = $('h3').data('userid');
            
            if(event.target.innerText == 'favorite'){
                  isLike = true;
            } else if (event.target.innerText == 'favorite_border') {
                  isLike = false;
            }
            isLike = !isLike;
            
 		$.ajax({
 			method: 'POST',
 			url: urlLike,
 			data: {ajaxUserHasLiked : ajaxUserHasLiked, isLike: isLike, userId: userId, _token: token}
 		})
 			.done(function(data) {
			if(event.target.innerText = isLike){
                        event.target.innerText = 'favorite';
                  }      
                  else { 
            		
                        event.target.innerText = 'favorite_border';
                  }
                  $('.countLike').text(data);   
            	console.log(data);
            });
	});
});