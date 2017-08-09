$(document).ready(function(){
//disposition des messages
    blocMessage = $('div.media');
    blocMessage.each(function(){
        if ($(this).data('userid') == userId) {
              $(this).css({
                  flexDirection : 'row'
              });
        } else if ($(this).data('userid') !== userId){
              $(this).css({
                  flexDirection : 'row-reverse'
              });
        }     
    });
//envoi du message en base de données via Ajax
    var message = $('textarea').attr('name', 'message');
    $('button').on('click', function(e) {
        e.preventDefault();
 		$.ajax({
 			method: 'PUT',
 			url: urlPutMessage,
 			data: {threadId : threadId, message: message.val(), userId: userId, _token: token}
 		})
   			.done(function(data){ 
            nouveauMessage = $('<p class="body-message">').html(data);
            nouveauMessage.before($('form'));
            message.val('');
        });
	});
});