$(document).ready(function(){
  $("#Input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#List li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});