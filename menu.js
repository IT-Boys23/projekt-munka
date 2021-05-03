var activeOffset = $("nav.ul.active").position().left;
var activeItemWidth = $("nav ul .active").width();

nav("document").ready(function () {
	nav(".dot").css("left", activeOffset + activeItemWidth / 2);
	var bgColor = $(".active a").css("background-color");
	nav(".dot").css("background-color", bgColor);
});

nav("nav").mouseout(function () {
	nav(".dot").css("left", activeOffset + activeItemWidth / 2);
	var bgColor = $(".active a").css("background-color");
	nav(".dot").css("background-color", bgColor);
});

nav("nav ul li").hover(function () {
	var navOffset = $(this).position().left;
	var navItemWidth = $(this).width();

	nav(".dot").css("left", navOffset + navItemWidth / 2);

	var bgColor = $("a", this).css("background-color");

	nav(".dot").css("background-color", bgColor);
});
