$( function() {
    var availableTags = [
      'Peinture',
      'Peinture à Huile',
      'Peinture acrylique',
      'Aquarelle',
      'Technique mixte',
      'Photographie',
      'Photographie argentique',
      'Photographie numérique',
      'Technique Mixte',
      'Oeuvres sur papier',
      'Dessin',
      'Encre',
      'Estampe',
      'Sérigraphie',
      'Lithographie',
      'Collage',
      'Gravure',
      'Linogravure',
      'Technique Mixte',
      'Sculpture',
      'Sculpture bois',
      'Sculpture argile',
      'Sculpture métal',
      'Sculpture bronze',
      'Sculpture pierre',
      'Sculpture terre cuite',
      'Sculpture céramique',
      'Sculpture platre',
      'Sculpture marbre',
      'Sculpture verre',
      'Technique mixte'
    ];
    $( "#searchCat" ).autocomplete({
      source: 'http://liinkart.app/search'
  });
});