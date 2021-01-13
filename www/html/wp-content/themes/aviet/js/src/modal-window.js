$(function() {
	var toLoad,
		nowOverway,
		iframe,
		nowWindow,
		body = $("body"),
		hash;
	function createOverway(toLoad, body) {
		nowOverway = $("<div class='overway-back' data-modal-window='" + toLoad + "'><div class='modal-window'><div class='c close'><div class='c close-1'></div><div class='c close-2'></div></div><div class='modal-wrap'><div class='cssload-container'><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><span>Загрузка...</span></div></div></div></div>").appendTo($("body"));
		nowOverway.children().hide();
		nowOverway.children().show();
		$(nowOverway.children().children(".modal-wrap")).load(toLoad + " #content", function(res, stat, xhr) {
			if(stat === "error") {
				$(nowOverway.children().children(".modal-wrap")).html("<p>Извините, произошла ошибка.<br>Возможно, запрашиваемый вами материал не существует.</p>");
			}
		});
		$(".close, .overway-back, .close-1, .close-2").on("click", function(e) {
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
		if((iframe = $(".overway-back[data-modal-window='" + toLoad + "'] iframe")).length !== 0) {
			iframe.removeClass("hidden");
		}
	}
	
	function hideIframe(toLoad) {
		if((iframe = $(".overway-back[data-modal-window='" + toLoad + "'] iframe")).length !== 0) {
			iframe.addClass("hidden");
		}
	}
	
	function addModalEventToMediaPost() {
		var newsImgCon = $(".news-img-container:not(.event)");
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

	$("[data-modal-button]").on("click", function(e) {

		toLoad = this.getAttribute("data-modal-button");
		if((nowOverway = $(".overway-back[data-modal-window='" + toLoad + "']")).length === 0) {
			createOverway(toLoad, body);
		}

		showWindow(toLoad, body);
	});
//Для динамической подгрузки с кнопки
	function setModalEvent() {//назначает событие открытия модальных окон на новые посты
		$("[data-modal-button]:not(.event)").on("click", function(e) {
			$(this).addClass("event");
			toLoad = this.getAttribute("data-modal-button");
			if((nowOverway = $(".overway-back[data-modal-window='" + toLoad + "']")).length === 0) {
				createOverway(toLoad);
			}
	
			showWindow();
		});
	}
	
	if(typeof ajaxurl !== "undefined") {
		$(".load-more").on("click", function(){
			var nowButton = $(this),
				nowPostWrapper = nowButton.parent(),
				nowPage = +nowButton.attr("data-page") + 1,
				nowCat =  +nowButton.parent().attr("data-cat");

				data = {
					"action":"loadmore",
					//"query": true_posts[+nowPostWrapper.attr("data-slider-number")],
					"page" : nowPage,
					"cat"  : nowCat
				};

				//console.log(true_posts);

			if(!$('body').hasClass('loading')){
				//var loader;
				$.ajax({
					url: ajaxurl,
					data: data,
					type: 'POST',
					beforeSend: function( xhr){
						$('body').addClass('loading');
						nowButton.text("ЗАГРУЗКА...");
						//loader = $("<div class='cssload-container'><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><div class='cssload-thing'></div><span>Загрузка...</span></div>").appendTo(nowPostWrapper);
					},
					success:function(data){
	
						if( data ) { 
							$(data).appendTo(nowPostWrapper);
							$('body').removeClass('loading');
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