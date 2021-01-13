'use strict'
function postAutoDelay(wrappers) {
		var posts = Array();

	for(var i = 0, maxI = wrappers.length; i < maxI; i++) {

		var nowNumber = wrappers[i].getAttribute("data-slider-number"),
			nowSlider = wrappers[i].getAttribute("data-slider-info");

		posts[i] = document.querySelectorAll("[data-slider='" + nowSlider + "'] [data-slider-number='" + nowNumber + "'] .post, [data-slider='" + nowSlider + "'] [data-slider-number='" + nowNumber + "'] .cit");

		for(var b = 0, maxB = posts[i].length; b < maxB; b++) {

			if (b % 3 === 0 ) {
				posts[i][b].style.animationDelay = "0s";
			}

			if (b % 3 === 1 ) {
				posts[i][b].style.animationDelay = ".2s";
			}

			if (b % 3 === 2) {
				posts[i][b].style.animationDelay = ".4s";
			}
		}
	}
}



