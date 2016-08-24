//Funcion para el Navbar
$(".dropdown-button").dropdown();
//Funcion para selects
$(document).ready(function() {
    $('select').material_select();
  });
// Funcion Update y destroy de select
  $('select').material_select('destroy');



  // Initialize collapse button
//  $(".button-collapse").sideNav();
   // Initialize collapsible (uncomment the line below if you use the dropdown variation)
   //$('.collapsible').collapsible();

  // $('.button-collapse').sideNav({
  //    menuWidth: 300, // Default is 240
  //    edge: 'right', // Choose the horizontal origin
  //    closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
  //  }
  //);
  $(document).ready(function(){
      $('.collapsible').collapsible({
        accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
      });
    });
  // Show sideNav
  //$('.button-collapse').sideNav('show');
  // Hide sideNav
//  $('.button-collapse').sideNav('hide');

  (function($){
    $(function(){

      $('.button-collapse').sideNav();
      $('.parallax').parallax();

    }); // end of document ready
  })(jQuery); // end of jQuery name space
