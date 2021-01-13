
 // Load the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
// YouTube player after the API code downloads.
var player;
function onYouTubePlayerAPIReady() {
  player = new YT.Player(document.querySelector(".player"), {
    videoId: 'gAxdPqYdSAQ',
    playerVars: {
    	controls: '0',
    	modestbranding: '1',
    	showinfo: '0'      }
  });
}