$(document).ready(function() {
    // all custom jQuery will go here
    $("#toggle").click(function() {
      $(this).toggleClass("active");
      $("#overlay").toggleClass("open");
    });
});
