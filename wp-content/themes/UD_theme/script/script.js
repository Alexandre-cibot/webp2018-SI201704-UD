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

var polygonYellow = $("#polygon-yellow").attr('src');

var formData = {
  contact_us: false,
  ask_devis: false,
  fondation: false,
  sol: false,
  charpente: false,
  terrasse: false,
  excavation: false,
  isolation: false,
  description: false,
  name: false,
  address: false,
  mail: false,
  phone: false
};

$( ".formulaire_02" ).hide();
$( ".formulaire_03" ).hide();
$( ".formulaire_04" ).hide();

$( ".btn_form" ).click(function() {
  $(this).toggleClass("default");
  $(this).toggleClass("btn_form_active");
});

$( ".toaster_yellow" ).click(function() {
  $('.toaster').toggleClass('toaster_yellow_up');
  $('.toaster').toggleClass('toaster_yellow_down');
  $('.arrow').toggleClass('arrow_rotate');
});

$( "#contact_us" ).click(function() {
  $('#ask_devis').removeClass('btn_form_active');
    $('#ask_devis').addClass("default");
});

$( "#ask_devis" ).click(function() {
  $("#contact_us").removeClass("btn_form_active");
    $('#contact_us').addClass("default");
});

$( "#form_01" ).click(function() {
  formData.contact_us = !$('#contact_us').hasClass('default');
  formData.ask_devis = !$('#ask_devis').hasClass('default');
  if(formData.contact_us || formData.ask_devis){
    $( ".formulaire_01" ).hide();
    $( ".formulaire_02" ).show();
    $(".step_02").addClass("step_active");
    $('.polygons-2').attr('src',polygonYellow);
  }
});

$( "#form_02" ).click(function() {
  formData.fondation = !$('#fondation').hasClass('default');
  formData.sol = !$('#sol').hasClass('default');
  formData.charpente = !$('#charpente').hasClass('default');
  formData.terrasse = !$('#terrasse').hasClass('default');
  formData.excavation = !$('#excavation').hasClass('default');
  formData.isolation = !$('#isolation').hasClass('default');
  if(formData.fondation || formData.sol || formData.charpente || formData.terrasse || formData.excavation || formData.isolation){
    $( ".formulaire_02" ).hide();
    $( ".formulaire_03" ).show();
    $(".step_03").addClass("step_active");
    $('.polygons-3').attr('src',polygonYellow);
  }
});

$( "#form_03" ).click(function() {
  $( ".formulaire_03" ).hide();
  $( ".formulaire_04" ).show();
  formData.description = $('#description').val();
  $(".step_04").addClass("step_active");
  $('.polygons-4').attr('src',polygonYellow);
});

$( "#form_04" ).click(function() {
  formData.name = $('#name').val();
  formData.address = $('#address').val();
  formData.mail = $('#mail').val();
  formData.phone = $('#phone').val();
  if(formData.name || formData.address || formData.mail || formData.phone){
    $( ".formulaire_04" ).hide();
    $(".step_04").addClass("step_active");
    $('.polygons-4').attr('src', polygonYellow);
  }

  $.ajax({
    url : 'http://localhost:8888/webp2018-SI201704-UD/formulaire',
    type : 'POST',
    data : JSON.stringify(formData),
    dataType : 'json',
    success: function(data) {
      // The "data" parameter will be an object since JQuery will
      // parse the response because of "dataType: 'json'".
      console.log('Success');
    },
    complete: function() {
      // Code to hide loading icon goes here.
      console.log('Complete');
    },
    error: function(jqXHR, textStatus, errorThrown) {
      // Handle the error.
      console.log('Erorr');
      console.warn(jqXHR);console.warn(textStatus);console.warn(errorThrown);
    }
  });
});

$('.block-list .block').on( "click", function() {
    $('.block.active').toggleClass('active');
    $(this).toggleClass('active');

    number= $(this).data("block");
    $('.content.active').toggleClass('active');
    $(".content[data-content="+number+"]").toggleClass('active');
});

