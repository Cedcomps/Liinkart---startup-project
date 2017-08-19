 // $(window).on('hashchange', function() {
 //        if (window.location.hash) {
 //            var page = window.location.hash.replace('#', '');
 //            if (page == Number.NaN || page <= 0) {
 //                return false;
 //            } else {
 //                getPosts(page);
 //            }
 //        }
 //    });
 //    function getPosts(page) {
 //        $.ajax({
 //            url : '?page=' + page,
 //            }).done(function (data) {
 //                $('.liste-pagination').html(data);
 //                location.hash = page;
 //            }).fail(function () {
 //                alert('Posts could not be loaded.');
 //        });
 //    }
 //    $(document).ready(function() {
 //        $(document).on('click', '.pagination a', function (e) {
 //            getPosts($(this).attr('href').split('page=')[1]);
 //            e.preventDefault();
 //        });
 //    });
 //    
function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == variable) {
            return decodeURIComponent(pair[1]);
        }
    }
    console.log('Query variable %s not found', variable);
}
function pagination() {
   //Pagination artwork in ajax
	$('.pagination a').on('click', function(e){
   		e.preventDefault();
   		var page = ($(this).attr('href').split('page=')[1]);//
   		getPagination(page);
   	});
	function getPagination(page){
		if(getQueryVariable('searchCat') == true) {
            $.ajax({
                url: '?page=' + page + '&searchCat=' + getQueryVariable('searchCat'),
            }).done(function(data){
                $('.liste-pagination').html(data);
            pagination();
                //location.hash = page;
            });
        }
        $.ajax({
			url: '?page=' + page,
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