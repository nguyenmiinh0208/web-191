

<!doctype html>
<html lang="en">

<head>
  <?php include "includes/include_head.php" ?>
</head>

<body>
  <?php include "includes/nav-bar.php" ?>

  <div class="body-content container">
    <div class="wrap-music">
      <div class="music">
      </div>
    </div>
    <div class="wrap-album">
      <div class="hot-album hot-album-page-album col-12">
        <div class="row albums page-albums">
        </div>
      </div>
    </div>
    <div class="wrap-singer">
      <div class="wrapper-singers row  singerrr">
      </div>
    </div>
    </div>
  
  
  <script>
    $(document).on("click", ".related_row_img", function(){
      // $.ajax()
    });
  </script>
<script type="text/javascript" src="/web-191/public/js/play.js"></script>
<script>
  $( document ).ready(function(){
    $(".playMusic").hide();
    obj = JSON.parse('<?php echo $data['json_str'] ?>')
    console.log(obj)
    if(obj.songs.length)
      $('.wrap-music').prepend('<h2 class="title pt-2">Song</h2>')
    if(obj.albums.length)
      $('.wrap-album').prepend('<h2 class="title pt-2">Album</h2>')
    if(obj.artists.length)
      $('.wrap-singer').prepend('<h2 class="title pt-2">Singer</h2>')
    obj.songs.forEach(function(item,index){
      $('.music').append('<div class="music_component" id="'+item.id+'"><div class="music_img_container"><img class="music_img" src="'+item.urlimg+'" alt="music_img">'+'</div><div class="music_detail"><div class="music_name">'+item.name+'</div><div class="music_artist">'+item.artist_name+'</div></div><div class="fillingspacechart"></div><img class="button-like" src="/web-191/public/images/img/like.png" alt="like"></div><hr>')     
    })  
    obj.albums.forEach(function(item,index){
      $('.albums').append('<div class="col-6 col-md-6 col-sm-6 col-lg-2 single-song" id="'+item.id+'"><div class="related_row"><div class="related_component"><img class="related_row_img" src="'+item.urlimg+'" alt="related1"></div><div class="name-singer"><div class="name">'+item.name+'</div><div class="singer">'+item.artist_name+'</div></div><div class="icon-play"><i class="fa fa-play-circle" aria-hidden="true"></i></div></div></div>')

    })
    obj.artists.forEach(function(item,index){
      $('.singerrr').append('<div class="col-12 col-md-4 col-lg-3"><div class="card-singer" id="'+item.id+'"><img class="img-singer" src="'+item.urlimg+'" style="height: 150px;"><div class="singer-name">'+item.name+'</div></div></div></div>')
    })
    $('.img-singer').click(function(){
      location.href = '../singers/show?id=' + $(this).parent().attr('id')
    })
    $('.related_row_img').click(function(){
      location.href = '../album/single?id=' + $(this).parents('.single-song').attr('id')
    })
    $('.music_component').click(function(){
      var id =$(this).attr('id')
      $('#nowPlayingBarContainer').remove();
      $('body').append('<div id="nowPlayingBarContainer"><div id="nowPlayingBar"><div id="nowPlayingLeft"><div class="content"><span class="albumLink"><img role="link" tabindex="0" src="" class="albumArtwork"></span><div class="trackInfo"><span class="trackName"><span role="link" tabindex="0"></span></span><span class="artistName"><span role="link" tabindex="0"></span></span></div></div></div><div id="nowPlayingCenter"><div class="content playerControls"><div class="buttons"><button class="controlButton shuffle" title="Shuffle button" onclick="setShuffle()"><img src="/web-191/public/images/icons/shuffle.png" alt="Shuffle"></button><button class="controlButton previous" title="Previous button" onclick="prevSong()"><img src="/web-191/public/images/icons/previous.png" alt="Previous"></button><button class="controlButton play" title="Play button" onclick="playSong()"><img src="/web-191/public/images/icons/play.png" alt="Play"></button><button class="controlButton pause" title="Pause button" style="display: none;" onclick="pauseSong()"><img src="/web-191/public/images/icons/pause.png" alt="Pause"></button><button class="controlButton next" title="Next button" onclick="nextSong()"><img src="/web-191/public/images/icons/next.png" alt="Next"></button><button class="controlButton repeat" title="Repeat button" onclick="setRepeat()"><img src="/web-191/public/images/icons/repeat.png" alt="Repeat"></button></div><div class="playbackBar"><span class="progressTime current">0.00</span><div class="progressBar"><div class="progressBarBg"><div class="progress"></div></div></div><span class="progressTime remaining">0.00</span></div></div></div><div id="nowPlayingRight"><div class="volumeBar"><button class="controlButton volume" title="Volume button" onclick="setMute()"><img src="/web-191/public/images/icons/volume.png" alt="Volume"></button><div class="progressBar"><div class="progressBarBg"><div class="progress"></div></div></div></div></div></div></div>')      
      var newPlaylist = [id];
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

    })
  })
  function timeFromOffset(mouse, progressBar) {
	var percentage = mouse.offsetX / $(progressBar).width() * 100;
	var seconds = audioElement.audio.duration * (percentage / 100);
	audioElement.setTime(seconds);
}

    </script>

  
  <?php include "includes/footer.php" ?>
</body>

</html>