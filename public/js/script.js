$(document).ready(function(){
	$(".button-collapse").sideNav();
// Technique artistique
	$( "span:contains('Peinture')" ).css( "color", "#ef9a9a");
	$( "span:contains('Peinture à Huile')" ).css( "color", "#f48fb1");
	$( "span:contains('Peinture acrylique')" ).css( "color", "#ce93d8");
	$( "span:contains('Aquarelle')" ).css( "color", "#b39ddb");
	$( "span:contains('Photographie')" ).css( "color", "#9fa8da");
	$( "span:contains('Photographie argentique')" ).css( "color", "#90caf9");
	$( "span:contains('Photographie numérique')" ).css( "color", "#81d4fa");
	$( "span:contains('Oeuvres sur papier')" ).css( "color", "#80deea");
	$( "span:contains('Dessin')" ).css( "color", "#80cbc4");
	$( "span:contains('Encre')" ).css( "color", "#a5d6a7");
	$( "span:contains('Estampe')" ).css( "color", "#c5e1a5");
	$( "span:contains('Sérigraphie')" ).css( "color", "#e6ee9c");
	$( "span:contains('Lithographie')" ).css( "color", "#fff59d");
	$( "span:contains('Collage')" ).css( "color", "#ffe082");
	$( "span:contains('Gravure')" ).css( "color", "#ffcc80");
	$( "span:contains('Linogravure')" ).css( "color", "#ffab91");
	$( "span:contains('Sculpture')" ).css( "color", "#bcaaa4");
	$( "span:contains('Sculpture bois')" ).css( "color", "#b0bec5");
	$( "span:contains('Sculpture argile')" ).css( "color", "#ef6c00");
	$( "span:contains('Sculpture métal')" ).css( "color", "#f9a825");
	$( "span:contains('Sculpture bronze')" ).css( "color", "#558b2f");
	$( "span:contains('Sculpture pierre')" ).css( "color", "#0277bd");
	$( "span:contains('Sculpture terre cuite')" ).css( "color", "#00695c ");
	$( "span:contains('Sculpture céramique')" ).css( "color", "#4527a0");
	$( "span:contains('Sculpture platre')" ).css( "color", "#c62828");
	$( "span:contains('Sculpture marbre')" ).css( "color", "#ad1457");
	$( "span:contains('Sculpture verre')" ).css( "color", "#6a1b9a");
	$( "span:contains('Technique mixte')" ).css( "color", "#00695c");
// Spécialité artistique
	$( "div.chip:contains('Peinture')" ).css( {"color": "black", "backgroundColor": "#ef9a9a"});
	$( "div.chip:contains('Peinture à Huile')" ).css( {"color": "black", "backgroundColor": "#f48fb1"});
	$( "div.chip:contains('Peinture acrylique')" ).css( {"color": "black", "backgroundColor": "#ce93d8"});
	$( "div.chip:contains('Aquarelle')" ).css( {"color": "black", "backgroundColor": "#b39ddb"});
	$( "div.chip:contains('Photographie')" ).css( {"color": "black", "backgroundColor": "#9fa8da"});
	$( "div.chip:contains('Photographie argentique')" ).css( {"color": "black", "backgroundColor": "#90caf9"});
	$( "div.chip:contains('Photographie numérique')" ).css( {"color": "black", "backgroundColor": "#81d4fa"});
	$( "div.chip:contains('Oeuvres sur papier')" ).css( {"color": "black", "backgroundColor": "#80deea"});
	$( "div.chip:contains('Dessin')" ).css( {"color": "black", "backgroundColor": "#80cbc4"});
	$( "div.chip:contains('Encre')" ).css( {"color": "black", "backgroundColor": "#a5d6a7"});
	$( "div.chip:contains('Estampe')" ).css( {"color": "black", "backgroundColor": "#c5e1a5"});
	$( "div.chip:contains('Sérigraphie')" ).css( {"color": "black", "backgroundColor": "#e6ee9c"});
	$( "div.chip:contains('Lithographie')" ).css( {"color": "black", "backgroundColor": "#fff59d"});
	$( "div.chip:contains('Collage')" ).css( {"color": "black", "backgroundColor": "#ffe082"});
	$( "div.chip:contains('Gravure')" ).css( {"color": "black", "backgroundColor": "#ffcc80"});
	$( "div.chip:contains('Linogravure')" ).css( {"color": "black", "backgroundColor": "#ffab91"});
	$( "div.chip:contains('Sculpture')" ).css( {"color": "black", "backgroundColor": "#bcaaa4"});
	$( "div.chip:contains('Sculpture bois')" ).css( {"color": "black", "backgroundColor": "#b0bec5"});
	$( "div.chip:contains('Sculpture argile')" ).css( {"color": "black", "backgroundColor": "#ef6c00"});
	$( "div.chip:contains('Sculpture métal')" ).css( {"color": "black", "backgroundColor": "#f9a825"});
	$( "div.chip:contains('Sculpture bronze')" ).css( {"color": "black", "backgroundColor": "#558b2f"});
	$( "div.chip:contains('Sculpture pierre')" ).css( {"color": "black", "backgroundColor": "#0277bd"});
	$( "div.chip:contains('Sculpture terre cuite')" ).css( {"color": "black", "backgroundColor": "#00695c"});
	$( "div.chip:contains('Sculpture céramique')" ).css( {"color": "black", "backgroundColor": "#4527a0"});
	$( "div.chip:contains('Sculpture platre')" ).css( {"color": "black", "backgroundColor": "#c62828"});
	$( "div.chip:contains('Sculpture marbre')" ).css( {"color": "black", "backgroundColor": "#ad1457"});
	$( "div.chip:contains('Sculpture verre')" ).css( {"color": "black", "backgroundColor": "#6a1b9a"});
	$( "div.chip:contains('Technique mixte')" ).css( {"color": "black", "backgroundColor": "#00695c"});
// Couleur coup de coeur
	var countLike = parseInt($('.countLike').html());
		if(countLike >= 1 && countLike <= 49){
			$('.countLike').prev().css("color", "#FFD905");
		} else if(countLike >= 50 && countLike <= 99){
			$('.countLike').prev().css("color", "#E8490C");
		} else if(countLike >= 100 && countLike <= 499){
			$('.countLike').prev().css("color", "#0DFF41");
		} else if(countLike >= 500 && countLike <= 999){
			$('.countLike').prev().css("color", "#0C77E8");
		} else if(countLike >= 1000 && countLike <= 9999){
			$('.countLike').prev().css("color", "#C700FF");
		}
//Proposition de prix
 	// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal({
    	startingTop: '5%',
    	endingTop: '15%',
    });

    //Input en temps réel
    $('.range').on('input', function() {
		var $set = $(this).val();
		$('output').text($set);
	});
    
//Menu right profil user
    $('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
		constrainWidth: true, // Does not change width of dropdown to that of the activator
		hover: true, // Activate on hover
		gutter: 0, // Spacing from edge
		belowOrigin: true, // Displays dropdown below the button
		alignment: 'left', // Displays dropdown with edge aligned to the left of button
		stopPropagation: false // Stops event propagation
    	}
 	);

 	// Select specialisation and categories
    $('select').material_select();
    
 //Lien pour remonter en haut du site
 	$(window).scroll(function() {
	 	if($(document).scrollTop() <= 400 ){
	 		$("#scrollButton").fadeOut("fast");
	 	} else {
	 		$("#scrollButton").fadeIn();
	 	};
 	});
 	$("#scrollButton").click(function(){
    	$("html, body").animate({scrollTop: 0},2500);
    });
});
