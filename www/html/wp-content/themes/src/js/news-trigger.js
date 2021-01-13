'use strict'
document.addEventListener("DOMContentLoaded", function() {
	/*FOR SM TRIGGER*/
	var triggerSm  = $(".trigger-sm"),
		triggerXs  = $(".trigger-xs"),
		newsLabels = $(".news-radio"),
		arrowDown  = $(".trigger-sm div img:not(.hidden)"),
		arrowUp    = $(".trigger-sm div img.hidden"),
		posts      = $(".post"),
		newsLabelsDisplayFlag = false;
		
	triggerSm.on("click", function() {

		if(!newsLabelsDisplayFlag) {
			newsLabels.addClass("labels-active");
			arrowDown.addClass("hidden");
			triggerXs.removeClass("trigger-xs-passive");
			triggerXs.addClass("trigger-xs-active");
			arrowUp.removeClass("hidden");
			newsLabelsDisplayFlag = true;
		}
	
		else {
			newsLabels.removeClass("labels-active");
			triggerXs.removeClass("trigger-xs-active");
			triggerXs.addClass("trigger-xs-passive");
			arrowDown.removeClass("hidden");
			arrowUp.addClass("hidden");
			newsLabelsDisplayFlag = false;
		}
	});
	/*END OF SM TRIGGER*/

	/*FOR XS TRIGGER*/
	triggerXs.on("click", function() {
		if(!newsLabelsDisplayFlag) {
			triggerXs.removeClass("trigger-xs-passive");
			triggerXs.addClass("trigger-xs-active");
			newsLabels.addClass("labels-active");
			newsLabelsDisplayFlag = true;
		}

		else {
			triggerXs.removeClass("trigger-xs-active");
			triggerXs.addClass("trigger-xs-passive");
			newsLabels.removeClass("labels-active");
			newsLabelsDisplayFlag = false;
		}

	});
	/*END OF XS TRIGGER*/
});