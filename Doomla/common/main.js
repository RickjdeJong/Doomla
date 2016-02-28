$("article").hide().fadeIn("slow");

$("nav ul li a#normal").mouseover(function(){
	$(".submenu").fadeIn();
});
$("nav").mouseleave(function(){
	$(".submenu").fadeOut();
});

$(".submenu a").mouseover(function(){
    $(this).css("color", "lightgray");
}).mouseleave(function(){
	$(this).css("color", "white");
})
