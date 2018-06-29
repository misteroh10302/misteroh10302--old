


var imageArray =
  ['http://thesource.com/wp-content/uploads/2014/01/LL-Cool-J.jpg',
  'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrdqWxehpHoLtX25IeMhHoCfrSKMUqgjJEUWiBMoiYZwfu9NJS6w',
  'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSainbelhW3I2PxIc5SylETWKw-e7ZOwIhjwVQ5C90GFLGrzd5Q',
  'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfApfdBzfg5HUzVj9yNvMaH7Tlgd15bkJQ62lcx0bKtYNF82an',
  'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWV3N0rPtiv1iNTTJe3vSghZ5ktA5bHjhafbFIE1GcmudXLmdk'
  ];


$(window).on('scroll',function(){
  let scrollTop = $(window).scrollTop();

  if (scrollTop > $(window).height()) {
    $('header').addClass('fix');
  } else if (scrollTop <  $(window).height()) {
      $('header').removeClass('fix');
  }
});
