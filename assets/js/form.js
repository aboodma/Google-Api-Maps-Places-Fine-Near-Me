$(document).ready(function (e) {
 $("#uploadCSV").on('submit',(function(e) {
  e.preventDefault();

  $.ajax({
   url: "import.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#response").fadeOut();
   },
   success: function(data)
      {

     $("#response").html(data).fadeIn();

     $("#uploadCSV")[0].reset();

      },
     error: function(e)
      {
    $("#response").html(e).fadeIn();
      }
    });
 }));
});
