'use strict'

$(function() {
	if(document.querySelector("[data-accordion-trigger]")) {
		var triggers = $("[data-accordion-trigger]"),
			innerE = $("[data-accordion]"),
			duration = 500;
		triggers.on("click", function() {
			var thisE = $(this),
				nowN = thisE.attr("data-accordion-trigger"),
				nowE = $("[data-accordion='" + nowN + "']");
			thisE.find("img").toggleClass("visible");
			if (nowE.hasClass("active-accordion")) {
				nowE.stop().slideUp(duration);
				nowE.removeClass("active-accordion");
			}
	
			else {
				nowE.stop().slideDown(duration);
				nowE.addClass("active-accordion");
			}
		});
	}
});