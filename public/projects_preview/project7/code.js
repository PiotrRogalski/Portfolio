var btn_audio = new Audio('data/sounds/btn-click-sound.mp3');
function btn_sound() {
	btn_audio.play();
	setTimeout(btn_stop_play, 120);
}

function btn_stop_play(){
	btn_audio.pause();
	btn_audio.currentTime = 0.0;
}