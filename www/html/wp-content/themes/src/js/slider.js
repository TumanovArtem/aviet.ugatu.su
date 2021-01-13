'use strict'
$(function() {
	var sliders = document.querySelectorAll("[data-slider]"),
		labels = new Array(),
		controls = document.querySelectorAll("[data-slider-controls]");
	for (var i = 0; i < sliders.length; i++) {
		labels[i] = document.querySelectorAll("[data-label='" + sliders[i].getAttribute("data-slider") + "']");
		var now = sliders[i].getAttribute("data-slider");
		document.querySelector("[data-slider-info='" + now + "'][data-slider-number='" + document.querySelector("input[name='" + now + "']:checked").value + "']").classList.add("visible");
		for(var b = 0; b < labels[i].length; b++) {
			labels[i][b].addEventListener("click", function() {
				var slider = this.getAttribute("data-label"),
					sliderInnerElements = document.querySelectorAll("[data-slider='" + slider + "'] .wow");
				$("." + slider + "-wrapper.visible").removeClass("visible");
				$("[data-slider-info='" + slider + "'][data-slider-number='" + document.getElementById(this.htmlFor).value + "']").addClass("visible");
				$("[data-slider-info='" + slider + "'][data-slider-number='" + document.getElementById(this.htmlFor).value + "']").addClass("animated");


				$(sliderInnerElements).css({
					"animation-name": "fadeIn",
					"visibility": "visible"
				});
				$(sliderInnerElements).removeClass("animated");
				$(sliderInnerElements).addClass("animated");
			});
		}
	}

	for (var i = 0; i < controls.length; i++) {
		controls[i].lengthE = document.querySelectorAll("label[data-label='" + controls[i].getAttribute("data-slider-controls-info") + "']").length;
		controls[i].addEventListener("click", function() {
			var nowSlider = this.getAttribute("data-slider-controls-info"),
				nowInputValue = +document.querySelector("input[id*='" + nowSlider + "']:checked").getAttribute("value");

			if (this.getAttribute("data-slider-controls") === "left") {
				if(nowInputValue - 1 < 0) {
					var label = document.querySelector("label[for='" + nowSlider + "-" + (this.lengthE - 1) + "']");
				}

				else {
					var label = document.querySelector("label[for='" + nowSlider + "-" + (nowInputValue - 1) + "']");
				}

				$(label).trigger("click");
			}

			else {

				if((nowInputValue + 1) === this.lengthE) {
					var label = document.querySelector("label[for='" + nowSlider + "-" + 0 + "']");
				}

				else {
					var label = document.querySelector("label[for='" + nowSlider + "-" + (nowInputValue + 1) + "']");
				}

				$(label).trigger("click");
			}
		});
	}
});
