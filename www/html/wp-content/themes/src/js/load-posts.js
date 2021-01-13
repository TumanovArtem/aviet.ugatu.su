$(function() {
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

	toLoad = window.location.hash.slice(1);
	if (toLoad && toLoad !== "none") {
		createOverway(toLoad);
		showWindow();
	};
	
	if(typeof ajaxurl !== "undefined") {
		$(".load-more").on("click", function(){
			console.log("click");
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