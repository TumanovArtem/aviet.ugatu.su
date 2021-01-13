'use strict'

document.addEventListener("DOMContentLoaded", function() {
	var menuDisplayFlag = false,
		menu = document.getElementsByClassName("dropdown")[0];

		document.querySelector(".burger").addEventListener("click", function() {
			if(!menu.classList.contains("dropdown-active")) {
				menu.classList.add("dropdown-active");
				this.classList.add("burger-active");
			}
			else {
				menu.classList.remove("dropdown-active");
				this.classList.remove("burger-active");
			}
		});
});