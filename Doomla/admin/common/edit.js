var $overlay = $('<div id="overlay"></div>');
var $caption = $('<p></p>');


$overlay.append($caption);
$("body").append($overlay);


$("#information a").click(function(event){
  event.preventDefault();
  
  $overlay.fadeIn("slow");
 
  var captionText = $(this).attr("alt");
  console.log(captionText);
  $caption.text(captionText);
  
});
$overlay.click(function(){
  $overlay.fadeOut("slow");

});
