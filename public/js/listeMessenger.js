$(document).ready(function(){
//afficher la conversation correspondante au fil
      linkConversation = $('a.conversation');
      linkConversation.each(function(){
            $('a.conversation').on('click', function(e){
                  e.preventDefault();
                  var page = $(this).attr("href");
                  $('.msg-conversation').load(page);
            });
      });
});