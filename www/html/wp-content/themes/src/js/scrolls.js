'use strict'
document.addEventListener("DOMContentLoaded", function() {

	function scrollToTop (elem) {
		elem.on("click", function () {
			$("html, body").animate({scrollTop: 0}, 1000);
		});
	}

	scrollToTop($("footer .toTop"));

	setTimeout( function() {
		if (window.location.hash.slice(-6) === "anchor") {              
			var hash = window.location.hash.substr(1);  
			var scrollPos = $("a[data-name='" + hash + "']").offset().top + 20;
			$("html, body").animate({ scrollTop: scrollPos }, 1000);
		}
	}, 200);

});
