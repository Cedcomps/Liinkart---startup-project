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
    var price = $('input.range').val();
    $('button').on('click', function(e) {
        e.preventDefault();
 		$.ajax({
 			method: 'PUT',
 			url: urlPutMessage,
 			data: {threadId : threadId, message: message.val(), price: price, userId: userId, _token: token}
 		})
   			.done(function(data){ 
            var originalMsg = $('div.media');
            var newMessage = originalMsg.first().clone();
            // originalMsg.each(function(index, elem){
            //     if ($(elem).data('userid') == userId) {
            //         newMessage = $(this).clone();
            //         return false;
            //     }
            // });
           newMessage.find('.body-message').text(message.val());
           newMessage.find('.avatar-chat').html('');
           newMessage.css({flexDirection: 'row'});
           newMessage.find('.text-muted').html('<small><i class="material-icons tiny">access_time</i>Posté à l\'instant</small>');
           //console.log(newMessage.find('.body-message').text());
           newMessage.insertAfter(originalMsg.last());
           message.val('');
        });
	});
});