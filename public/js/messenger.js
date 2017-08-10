$(document).ready(function(){
//disposition des messages
    var blocMessage = $('div.media');
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
            var newMessage;
            blocMessage.each(function(index, elem){
                if ($(elem).data('userid') == userId) {
                    newMessage = $(this).clone();
                    return false;
                }
            });
           newMessage.find('.body-message').text(message.val());
           newMessage.find('.text-muted').html('<small><i class="material-icons tiny">access_time</i>Posté à l\'instant</small>');
           //console.log(newMessage.find('.body-message').text());
           newMessage.insertAfter(blocMessage.last());
           message.val('');
        });
	});
});