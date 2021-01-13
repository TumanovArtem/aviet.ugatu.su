'use strict'
document.addEventListener("DOMContentLoaded", function() {
	function getCoords(elem) { // кроме IE8-
	  var box = elem.getBoundingClientRect();
	
	  return {
	    Y: box.top + pageYOffset,
	    X: box.left + pageXOffset
	  };
	
	}

	function goBack(elem) {
		var elementCoords = getCoords(elem);
		elementCoords.Y += 25;
		elementCoords.X += 25;
		if((elementCoords.X < 0) || (elementCoords.Y < 0) || (elementCoords.X > document.documentElement.clientWidth) || (elementCoords.Y > document.documentElement.clientHeight)) {
			elem.style.transform = "translate(0, 0)";
			translateX = 0;
			translateY = 0;
		}
	}
	
	var translateX = 0,
		translateY = 0,
		hover = false,
		wrapper = document.querySelector(".border-button-wrapper")

	wrapper.addEventListener("mouseover", function(e) {
		var elCoords = getCoords(this);

		if(!hover) { // проверка состояния элемента(активен/неактивен)
			this.classList.add("border-button-wrapper-hover");
			hover = true;
		}

		elCoords.X += 18;
		elCoords.Y += 18;

		if(elCoords.X !== e.pageX) {
			translateX += (elCoords.X - e.pageX) * 1.5;
		}

		if(elCoords.Y !== e.pageY) {
			translateY += (elCoords.Y - e.pageY) * 1.5;
		}
		
		this.style.transform = "translate(" + translateX + "px, " + translateY + "px)";

		setTimeout(goBack, 1000, this);
	});

	document.querySelector(".border-button").addEventListener("mouseover", function() {
		var randomX = Math.random() * 2 - 1,
			randomY = Math.random() * 2 - 1;
		randomX = randomX / Math.abs(randomX);
		randomY = randomY / Math.abs(randomY);
		translateX += 200 * randomX;
		translateY += 200 * randomY;
		wrapper.style.transform = "translate(" + translateX + "px, " + translateY + "px)";
	});
});