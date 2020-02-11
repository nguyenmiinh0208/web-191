<?php
require_once ('./core/Database.php');
$db = new Database();
// if (isset($_POST['listSongChart'])) {
	// $idAlbum = $_POST['id'];
  $sql = "SELECT `songs`.`id` AS `idSong`, `songs`.`name` AS `name`, `songs`.`urlimg` AS `urlimg`,`songs`.`idSingers` AS `idSinger` ,`artists`.`name` AS `singerName` FROM songs INNER JOIN artists ON songs.idSingers = artists.id ORDER BY numberlisten DESC LIMIT 6";
	$resultArray = $db->getListItem($sql);
  $jsonArray = json_encode($resultArray);
// }

?>
<script type="text/javascript" src="/web-191/public/js/play.js"></script>
<script>

function setTrack(trackId, newPlaylist, play) {
		if(newPlaylist != currentPlaylist) {
			currentPlaylist = newPlaylist;
			shufflePlaylist = currentPlaylist.slice();
			shuffleArray(shufflePlaylist)
		}

		if(shuffle == true) {
			currentIndex = shufflePlaylist.indexOf(trackId);
		}
		else {
			currentIndex = currentPlaylist.indexOf(trackId);
		}
		pauseSong();

	$.post("/web-191/models/ajax/getSongJson.php", {songId: trackId }, function(data) {
		var track = JSON.parse(data);
		$(".trackName span").text(track.name);
		$(".content .albumLink img").attr("src", track.urlimg);
		$(".trackInfo .artistName span").text(track.nameSinger);
		audioElement.setTrack(track);
		if(play == true) {
			playSong();
		}
	});
}

$(document).ready(function() {
	var playlist = <?php echo $jsonArray; ?>;
	var newPlaylist = [];
	for(let i = 0; i < playlist.length; i++) {
		newPlaylist.push(playlist[i]['idSong']);
	}
	audioElement = new Audio();
	setTrack(newPlaylist[0], newPlaylist, false);
	updateVolumeProgressBar(audioElement.audio);

	$("#nowPlayingBarContainer").on("mousedown touchstart mousemove touchmove", function(e) {
		e.preventDefault();
	});

	$(".playbackBar .progressBar").mousedown(function() {
		mouseDown = true;
	});

	$(".playbackBar .progressBar").mousemove(function(e) {
		if(mouseDown == true) {
			//set time of song depending on the position of mouse
			timeFromOffset(e, this);
		}
	});

	$(".playbackBar .progressBar").mouseup(function(e){
			timeFromOffset(e, this);
		
	});


	$(".volumeBar .progressBar").mousedown(function() {
		mouseDown = true;
	});

	$(".volumeBar .progressBar").mousemove(function(e) {
		if(mouseDown == true) {
			var percentage = e.offsetX / $(this).width();
			if(percentage >= 0 && percentage <= 1) {
			audioElement.audio.volume = percentage;
			}
		}
	});

	$(".volumeBar .progressBar").mouseup(function(e){
			var percentage = e.offsetX / $(this).width();
			audioElement.audio.volume = percentage;
		
	});
	$(document).mouseup(function() {
		mouseDown = false;
	});


});

</script>
<div id="nowPlayingBarContainer">
	<div id="nowPlayingBar">
		<div id="nowPlayingLeft">
			<div class="content">
				<span class="albumLink">
					<img role="link" tabindex="0" src="" class="albumArtwork">
				</span>
				<div class="trackInfo">
					<span class="trackName">
						<span role="link" tabindex="0"></span>
					</span>
					<span class="artistName">
						<span role="link" tabindex="0"></span>
					</span>
				</div>
			</div>
		</div>
		<div id="nowPlayingCenter">
			<div class="content playerControls">
				<div class="buttons">
					<button class="controlButton shuffle" title="Shuffle button" onclick="setShuffle()">
						<img src="/web-191/public/images/icons/shuffle.png" alt="Shuffle">
					</button>
					<button class="controlButton previous" title="Previous button" onclick="prevSong()">
						<img src="/web-191/public/images/icons/previous.png" alt="Previous">
					</button>
					<button class="controlButton play" title="Play button" onclick="playSong()">
						<img src="/web-191/public/images/icons/play.png" alt="Play">
					</button>
					<button class="controlButton pause" title="Pause button" style="display: none;" onclick="pauseSong()">
						<img src="/web-191/public/images/icons/pause.png" alt="Pause">
					</button>
					<button class="controlButton next" title="Next button" onclick="nextSong()">
						<img src="/web-191/public/images/icons/next.png" alt="Next">
					</button>
					<button class="controlButton repeat" title="Repeat button" onclick="setRepeat()">
						<img src="/web-191/public/images/icons/repeat.png" alt="Repeat">
					</button>
				</div>
				<div class="playbackBar">
					<span class="progressTime current">0.00</span>
					<div class="progressBar">
						<div class="progressBarBg">
							<div class="progress"></div>
						</div>
					</div>
					<span class="progressTime remaining">0.00</span>
				</div>
			</div>
		</div>
		<div id="nowPlayingRight">
			<div class="volumeBar">
				<button class="controlButton volume" title="Volume button" onclick="setMute()">
					<img src="/web-191/public/images/icons/volume.png" alt="Volume">
				</button>
				<div class="progressBar">
					<div class="progressBarBg">
						<div class="progress"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>