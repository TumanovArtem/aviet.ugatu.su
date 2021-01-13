'use strict'

jQuery(function() {

	//Кнопка Вверх
	function scrollToTop (elem) {
		elem.on("click", function () {
			jQuery("html, body").animate({scrollTop: 0}, 1000);
		});
	}
	scrollToTop(jQuery("footer .toTop"));

	//Скролл До Якоря
	setTimeout( function() {
		if (window.location.hash.slice(-6) === "anchor") {              
			var hash = window.location.hash.substr(1);  
			var scrollPos = jQuery("a[data-name='" + hash + "']").offset().top + 20;
			jQuery("html, body").animate({ scrollTop: scrollPos }, 1000);
		}
	}, 200);

	//Menu
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

	//Аккордион
	if(document.querySelector("[data-accordion-trigger]")) {
		var triggers = jQuery("[data-accordion-trigger]"),
			innerE = jQuery("[data-accordion]"),
			duration = 500;
		triggers.on("click", function() {
			var thisE = jQuery(this),
				nowN = thisE.attr("data-accordion-trigger"),
				nowE = jQuery("[data-accordion='" + nowN + "']");
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

	//Слайдер - используется для всех фич с лейблами

	if(document.querySelector("[data-slider]")) {
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
					jQuery("." + slider + "-wrapper.visible").removeClass("visible");
					jQuery("[data-slider-info='" + slider + "'][data-slider-number='" + document.getElementById(this.htmlFor).value + "']").addClass("visible");
					jQuery("[data-slider-info='" + slider + "'][data-slider-number='" + document.getElementById(this.htmlFor).value + "']").addClass("animated");
	
	
					jQuery(sliderInnerElements).css({
						"animation-name": "fadeIn",
						"visibility": "visible"
					});
					jQuery(sliderInnerElements).removeClass("animated");
					jQuery(sliderInnerElements).addClass("animated");
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
	
					jQuery(label).trigger("click");
				}
	
				else {
	
					if((nowInputValue + 1) === this.lengthE) {
						var label = document.querySelector("label[for='" + nowSlider + "-" + 0 + "']");
					}
	
					else {
						var label = document.querySelector("label[for='" + nowSlider + "-" + (nowInputValue + 1) + "']");
					}
	
					jQuery(label).trigger("click");
				}
			});
		}
	}

	//Новостные триггеры
	if(document.querySelector(".trigger-sm") || document.querySelector(".trigger-xs")) {
		var triggerSm  = jQuery(".trigger-sm"),
			triggerXs  = jQuery(".trigger-xs"),
			newsLabels = jQuery(".news-radio"),
			arrowDown  = jQuery(".trigger-sm div img:not(.hidden)"),
			arrowUp    = jQuery(".trigger-sm div img.hidden"),
			posts      = jQuery(".post"),
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
	}

});

//Анимация при переключении слайдов, функция активируется в инлайновом коде
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

//Модальные окна, подгрузка постов с кнопки
jQuery(function() {
	'use strict'

	var toLoad,
		nowOverway,
		iframe,
		nowWindow,
		body = jQuery("body"),
		hash;
	function createOverway(toLoad, body) {
		nowOverway = jQuery("<div class='overway-back' data-modal-window='" + toLoad + "'><div class='modal-window'><div class='c close'><div class='c close-1'></div><div class='c close-2'></div></div><div class='modal-wrap'><div class='cssload-container'><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><span>Загрузка...</span></div></div></div></div>").appendTo(jQuery("body"));
		nowOverway.children().hide();
		nowOverway.children().show();
		jQuery(nowOverway.children().children(".modal-wrap")).load(toLoad + " #content", function(res, stat, xhr) {
			if(stat === "error") {
				jQuery(nowOverway.children().children(".modal-wrap")).html("<p>Извините, произошла ошибка.<br>Возможно, запрашиваемый вами материал не существует.</p>");
			}
		});
		jQuery(".close, .overway-back, .close-1, .close-2").on("click", function(e) {
			if(!e.target.getAttribute("data-modal-window") && !e.target.classList.contains("c")) return;
			hideWindow(toLoad, body);
		});
		nowOverway.on("mouseover", function(e) {
			if(e.target.classList.contains("overway-back")) {
				this.classList.add("overway-back-active");
			}
		});
		nowOverway.on("mouseout", function(e) {
			if(e.target.classList.contains("overway-back")) {
				this.classList.remove("overway-back-active");
			}
		});
	}
	
	function showWindow(toLoad, body) {
		nowOverway.addClass("visible");
		showIframe(toLoad, body);
		nowOverway.children().css({
			"transform": "translate(0px)",
			"right": "0"
		});
		body.addClass("body-with-modal");
		window.location.hash = toLoad;
	}
	
	function hideWindow(toLoad, body) {
		nowOverway.removeClass("visible");
		hideIframe(toLoad);
		nowOverway.children().css({
			"transform": "translate(0, 5000px)",
			"right": "-16px"
		});
		body.removeClass("body-with-modal");
		window.location.hash = "none";
	}
	
	function showIframe(toLoad) {
		if((iframe = jQuery(".overway-back[data-modal-window='" + toLoad + "'] iframe")).length !== 0) {
			iframe.removeClass("hidden");
		}
	}
	
	function hideIframe(toLoad) {
		if((iframe = jQuery(".overway-back[data-modal-window='" + toLoad + "'] iframe")).length !== 0) {
			iframe.addClass("hidden");
		}
	}
	
	function addModalEventToMediaPost() {
		var newsImgCon = jQuery(".news-img-container:not(.event)");
		for( var i = 0, maxI = newsImgCon.length; i < maxI; i++) {
			newsImgCon.siblings("h2").addClass("media");
		}
		newsImgCon.addClass("event");
	}

	toLoad = window.location.hash.slice(1);
	if (toLoad && (toLoad !== "none") && (toLoad.slice(-6) !== "anchor")) {
		createOverway(toLoad, body);
		showWindow(toLoad, body);
	}

	addModalEventToMediaPost();

	jQuery("[data-modal-button]").on("click", function(e) {

		toLoad = this.getAttribute("data-modal-button");
		if((nowOverway = jQuery(".overway-back[data-modal-window='" + toLoad + "']")).length === 0) {
			createOverway(toLoad, body);
		}

		showWindow(toLoad, body);
	});
	//Для динамической подгрузки с кнопки
	function setModalEvent() {//назначает событие открытия модальных окон на новые посты
		jQuery("[data-modal-button]:not(.event)").on("click", function(e) {
			jQuery(this).addClass("event");
			toLoad = this.getAttribute("data-modal-button");
			if((nowOverway = jQuery(".overway-back[data-modal-window='" + toLoad + "']")).length === 0) {
				createOverway(toLoad);
			}
	
			showWindow();
		});
	}
	
	if(typeof ajaxurl !== "undefined") {
		jQuery(".load-more").on("click", function(){
			'use strict'
			var nowButton = jQuery(this),
				nowPostWrapper = nowButton.parent(),
				nowPage = +nowButton.attr("data-page") + 1,
				nowCat =  +nowButton.parent().attr("data-cat"),
				data;

				data = {
					"action":"loadmore",
					//"query": true_posts[+nowPostWrapper.attr("data-slider-number")],
					"page" : nowPage,
					"cat"  : nowCat
				};

				//console.log(true_posts);

			if(!jQuery('body').hasClass('loading')){
				//var loader;
				jQuery.ajax({
					url: ajaxurl,
					data: data,
					type: 'POST',
					beforeSend: function( xhr){
						jQuery('body').addClass('loading');
						nowButton.text("ЗАГРУЗКА...");
						//loader = jQuery("<div class='cssload-container'><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><span>Загрузка...</span></div>").appendTo(nowPostWrapper);
					},
					success:function(data){
	
						if( data ) { 
							jQuery(data).appendTo(nowPostWrapper);
							jQuery('body').removeClass('loading');
							addModalEventToMediaPost();
						}
						//loader.detach();
						if(nowPage === +nowButton.attr("data-max-page")) {
							nowButton.css("display", "none");
						}
						else {
							nowButton.attr("data-page", nowPage);
							nowButton.text("ЗАГРУЗИТЬ БОЛЬШЕ");
						}
						setModalEvent();
					}
				});
			}
		});
	}
});

//Смягчение скролла

(function (jQuery) {
    jQuery(document).ready(function () {

        // Scroll Variables (tweakable)
        var framerate = 150; // [Hz]    150
        var animtime  = 400; // [px]    400
        var stepsize  = 120; // [px]    120

        // Pulse (less tweakable)
        // ratio of "tail" to "acceleration"
        var pulseAlgorithm = true;
        var pulseScale     = 8;    //   8
        var pulseNormalize = 1;

        // Keyboard Settings
        var disableKeyboard = false;
        var arrowscroll     = 50; // [px]   50

        // Excluded pages
        var exclude = "";

        // Other Variables
        var frame = false;
        var direction = { x: 0, y: 0 };
        var initdone  = false;
        var fixedback = true;
        var activeElement;
        var root;

        var key = { left: 37, up: 38, right: 39, down: 40, spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36 };


        /***********************************************
         * INITIALIZE
         ***********************************************/

        /**
         * Tests if smooth scrolling is allowed. Shuts down everything if not.
         */
        function initTest() {

            // disable keys for google reader (spacebar conflict)
            if (document.URL.indexOf("google.com/reader/view") > -1) {
                disableKeyboard = true;
            }

            // disable everything if the page is blacklisted
            if (exclude) {
                var domains = exclude.split(/[,\n] ?/);
                for (var i = domains.length; i--;) {
                    if (document.URL.indexOf(domains[i]) > -1) {
                        removeEvent("mousewheel", wheel);
                        disableKeyboard = true;
                        break;
                    }
                }
            }
        }

        /**
         * Sets up scrolls array, determines if frames are involved.
         */
        function init() {

            if (!document.body) return;

            var body = document.body;
            var html = document.documentElement;
            var windowHeight = window.innerHeight;
            var scrollHeight = body.scrollHeight;

            // check compat mode for root element
            root = (document.compatMode.indexOf('CSS') >= 0) ? html : body;
            activeElement = body;

            initTest();
            initdone = true;

            // Checks if this script is running in a frame
            if (top != self) {
                frame = true;
            }

            /**
             * This fixes a bug where the areas left and right to
             * the content does not trigger the onmousewheel event
             * on some pages. e.g.: html, body { height: 100% }
             */
            else if (scrollHeight > windowHeight &&
                (body.offsetHeight <= windowHeight ||
                    html.offsetHeight <= windowHeight)) {
                root.style.height = "auto";
                if (root.offsetHeight <= windowHeight) {
                    var underlay = document.createElement("div");
                    underlay.style.clear = "both";
                    body.appendChild(underlay);
                }
            }

            if (document.URL.indexOf("mail.google.com") > -1) {
                var s = document.createElement("style");
                s.innerHTML = ".iu { visibility: hidden }";
                (document.getElementsByTagName("head")[0] || html).appendChild(s);
            }

            if (!fixedback) {
                body.style.backgroundAttachment = "scroll";
            }

            // disable keyboard support
            if (disableKeyboard) {
                removeEvent("keydown", keydown);
            }
        }


        /************************************************
         * SCROLLING
         ************************************************/

        var que = [];
        var pending = false;

        /**
         * Pushes scroll actions to the scrolling queue.
         */
        function scrollArray(elem, left, top, delay) {

            delay || (delay = 1000);
            directionCheck(left, top);

            // push a scroll command
            que.push({
                x: left,
                y: top,
                lastX: (left < 0) ? 0.99 : -0.99,
                lastY: (top  < 0) ? 0.99 : -0.99,
                start: +new Date
            });

            // don't act if there's a pending queue
            if (pending) {
                return;
            }

            var step = function() {

                var now = +new Date;
                var scrollX = 0;
                var scrollY = 0;

                for (var i = 0; i < que.length; i++) {

                    var item = que[i];
                    var elapsed  = now - item.start;
                    var finished = (elapsed >= animtime);

                    // scroll position: [0, 1]
                    var position = (finished) ? 1 : elapsed / animtime;

                    // easing [optional]
                    if (pulseAlgorithm) {
                        position = pulse(position);
                    }

                    // only need the difference
                    var x = (item.x * position - item.lastX) >> 0;
                    var y = (item.y * position - item.lastY) >> 0;

                    // add this to the total scrolling
                    scrollX += x;
                    scrollY += y;

                    // update last values
                    item.lastX += x;
                    item.lastY += y;

                    // delete and step back if it's over
                    if (finished) {
                        que.splice(i, 1); i--;
                    }
                }

                // scroll left
                if (left) {
                    var lastLeft = elem.scrollLeft;
                    elem.scrollLeft += scrollX;

                    // scroll left failed (edge)
                    if (scrollX && elem.scrollLeft === lastLeft) {
                        left = 0;
                    }
                }

                // scroll top
                if (top) {
                    var lastTop = elem.scrollTop;
                    elem.scrollTop += scrollY;

                    // scroll top failed (edge)
                    if (scrollY && elem.scrollTop === lastTop) {
                        top = 0;
                    }
                }

                // clean up if there's nothing left to do
                if (!left && !top) {
                    que = [];
                }

                if (que.length) {
                    setTimeout(step, delay / framerate + 1);
                } else {
                    pending = false;
                }
            }

            // start a new queue of actions
            setTimeout(step, 0);
            pending = true;
        }


        /***********************************************
         * EVENTS
         ***********************************************/

        /**
         * Mouse wheel handler.
         * @param {Object} event
         */
        function wheel(event) {

            if (!initdone) {
                init();
            }

            var target = event.target;
            var overflowing = overflowingAncestor(target);

            // use default if there's no overflowing
            // element or default action is prevented
            if (!overflowing || event.defaultPrevented ||
                isNodeName(activeElement, "embed") ||
                (isNodeName(target, "embed") && /\.pdf/i.test(target.src))) {
                return true;
            }

            var deltaX = event.wheelDeltaX || 0;
            var deltaY = event.wheelDeltaY || 0;

            // use wheelDelta if deltaX/Y is not available
            if (!deltaX && !deltaY) {
                deltaY = event.wheelDelta || 0;
            }

            // scale by step size
            // delta is 120 most of the time
            // synaptics seems to send 1 sometimes
            if (Math.abs(deltaX) > 1.2) {
                deltaX *= stepsize / 120;
            }
            if (Math.abs(deltaY) > 1.2) {
                deltaY *= stepsize / 120;
            }

            scrollArray(overflowing, -deltaX, -deltaY);
            event.preventDefault();
        }

        /**
         * Keydown event handler.
         * @param {Object} event
         */
        function keydown(event) {

            var target   = event.target;
            var modifier = event.ctrlKey || event.altKey || event.metaKey;

            // do nothing if user is editing text
            // or using a modifier key (except shift)
            if ( /input|textarea|embed/i.test(target.nodeName) ||
                target.isContentEditable ||
                event.defaultPrevented   ||
                modifier ) {
                return true;
            }
            // spacebar should trigger button press
            if (isNodeName(target, "button") &&
                event.keyCode === key.spacebar) {
                return true;
            }

            var shift, x = 0, y = 0;
            var elem = overflowingAncestor(activeElement);
            var clientHeight = elem.clientHeight;

            if (elem == document.body) {
                clientHeight = window.innerHeight;
            }

            switch (event.keyCode) {
                case key.up:
                    y = -arrowscroll;
                    break;
                case key.down:
                    y = arrowscroll;
                    break;
                case key.spacebar: // (+ shift)
                    shift = event.shiftKey ? 1 : -1;
                    y = -shift * clientHeight * 0.9;
                    break;
                case key.pageup:
                    y = -clientHeight * 0.9;
                    break;
                case key.pagedown:
                    y = clientHeight * 0.9;
                    break;
                case key.home:
                    y = -elem.scrollTop;
                    break;
                case key.end:
                    var damt = elem.scrollHeight - elem.scrollTop - clientHeight;
                    y = (damt > 0) ? damt+10 : 0;
                    break;
                case key.left:
                    x = -arrowscroll;
                    break;
                case key.right:
                    x = arrowscroll;
                    break;
                default:
                    return true; // a key we don't care about
            }

            scrollArray(elem, x, y);
            event.preventDefault();
        }

        /**
         * Mousedown event only for updating activeElement
         */
        function mousedown(event) {
            activeElement = event.target;
        }


        /***********************************************
         * OVERFLOW
         ***********************************************/

        var cache = {}; // cleared out every once in while
        setInterval(function(){ cache = {}; }, 10 * 1000);

        var uniqueID = (function() {
            var i = 0;
            return function (el) {
                return el.uniqueID || (el.uniqueID = i++);
            };
        })();

        function setCache(elems, overflowing) {
            for (var i = elems.length; i--;)
                cache[uniqueID(elems[i])] = overflowing;
            return overflowing;
        }

        function overflowingAncestor(el) {
            var elems = [];
            var rootScrollHeight = root.scrollHeight;
            do {
                var cached = cache[uniqueID(el)];
                if (cached) {
                    return setCache(elems, cached);
                }
                elems.push(el);
                if (rootScrollHeight === el.scrollHeight) {
                    if (!frame || root.clientHeight + 10 < rootScrollHeight) {
                        return setCache(elems, document.body); // scrolling root in WebKit
                    }
                } else if (el.clientHeight + 10 < el.scrollHeight) {
                    overflow = getComputedStyle(el, "").getPropertyValue("overflow");
                    if (overflow === "scroll" || overflow === "auto") {
                        return setCache(elems, el);
                    }
                }
            } while (el = el.parentNode);
        }


        /***********************************************
         * HELPERS
         ***********************************************/

        function addEvent(type, fn, bubble) {
            window.addEventListener(type, fn, (bubble||false));
        }

        function removeEvent(type, fn, bubble) {
            window.removeEventListener(type, fn, (bubble||false));
        }

        function isNodeName(el, tag) {
            return el.nodeName.toLowerCase() === tag.toLowerCase();
        }

        function directionCheck(x, y) {
            x = (x > 0) ? 1 : -1;
            y = (y > 0) ? 1 : -1;
            if (direction.x !== x || direction.y !== y) {
                direction.x = x;
                direction.y = y;
                que = [];
            }
        }

        /***********************************************
         * PULSE
         ***********************************************/

        /**
         * Viscous fluid with a pulse for part and decay for the rest.
         * - Applies a fixed force over an interval (a damped acceleration), and
         * - Lets the exponential bleed away the velocity over a longer interval
         * - Michael Herf, https://stereopsis.com/stopping/
         */
        function pulse_(x) {
            var val, start, expx;
            // test
            x = x * pulseScale;
            if (x < 1) { // acceleartion
                val = x - (1 - Math.exp(-x));
            } else {     // tail
                // the previous animation ended here:
                start = Math.exp(-1);
                // simple viscous drag
                x -= 1;
                expx = 1 - Math.exp(-x);
                val = start + (expx * (1 - start));
            }
            return val * pulseNormalize;
        }

        function pulse(x) {
            if (x >= 1) return 1;
            if (x <= 0) return 0;

            if (pulseNormalize == 1) {
                pulseNormalize /= pulse_(1);
            }
            return pulse_(x);
        }

        // only for Chrome
        if (/chrome/.test(navigator.userAgent.toLowerCase())) {
            addEvent("mousedown", mousedown);
            addEvent("mousewheel", wheel);
            addEvent("keydown", keydown);
            addEvent("load", init);
        }
    });
})(jQuery);