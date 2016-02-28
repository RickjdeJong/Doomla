var $overlay = $('<div id="overlay"></div>');
var $image = $('<img>');
var $caption = $('<p></p>');


$overlay.append($image);
$overlay.append($caption);
$("body").append($overlay);


$("#information a").click(function(event){
  event.preventDefault();
  var location = $(this).attr("href");
  $image.attr("src", location);
  
  $overlay.fadeIn("slow");
 
  var captionText = $(this).children("img").attr("alt");
  $caption.text(captionText);
  
});
$overlay.click(function(){
  $overlay.hide();

});