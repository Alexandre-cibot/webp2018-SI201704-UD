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

$( ".btn_form" ).click(function() {
  $(this).toggleClass("default");
  $(this).toggleClass("btn_form_active");
});

$( ".toaster_yellow" ).click(function() {
  $('.toaster').toggleClass('toaster_yellow_up');
  $('.toaster').toggleClass('toaster_yellow_down');
  $('.arrow').toggleClass('arrow_rotate');
});

$('.block-list .block').on( "click", function() {
    $('.block.active').toggleClass('active');
    $(this).toggleClass('active');

    number= $(this).data("block");
    $('.content.active').toggleClass('active');
    $(".content[data-content="+number+"]").toggleClass('active');
});

