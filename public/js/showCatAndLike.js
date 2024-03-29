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
});