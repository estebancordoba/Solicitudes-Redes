$(document).ready(function() {
    $('select').material_select();
    $(".button-collapse").sideNav();
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15, // Creates a dropdown of 15 years to control year
      format: 'yyyy-mm-dd' 
    });
    $('.tooltipped').tooltip({delay: 50});
});