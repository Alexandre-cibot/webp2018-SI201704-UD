$('img[alt="burger"]').on("click", function(){
    $('.menu').toggleClass('active');
});

$('img[alt="close"]').on("click", function(){
    $('.menu').toggleClass('active');
});

$('.multiple-items').slick({
  infinite: false,
  slidesToShow: 3,
  slidesToScroll: 1
});


$( ".formulaire_02" ).hide();
$( ".formulaire_03" ).hide();
$( ".formulaire_04" ).hide();

$( "#ask-devis" ).click(function() {
  $( ".formulaire_01" ).hide();
  $( ".formulaire_02" ).show();
});

$( ".select-type" ).click(function() {
  $( ".formulaire_02" ).hide();
  $( ".formulaire_03" ).show();
});

$( "#finish-desc-project" ).click(function() {
  $( ".formulaire_03" ).hide();
  $( ".formulaire_04" ).show();
});
