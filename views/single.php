<!DOCTYPE html>
<html lang="en">
<head>
<?php include "includes/include_head.php" ?>
<script>
  var fullLocation = window.location.href;
  fullLocation = decodeURIComponent(fullLocation);
  var mark = fullLocation.split('?'); // tách theo dấu ?
  
  var stringId = mark[1];//iC='52'
  var typeId = stringId.slice(0,2);
  var idAlbum = stringId.slice(3, stringId.length);
  var newPlaylist = [];
  $(document).ready(function() {
    if(typeId=='id'){
      $.ajax({
      async: false,//warning
      url: "/web-191/models/ajax/getSong.php",
      method: "POST",
      data: {idAlbum: idAlbum},
      success: function(data) {
        data = JSON.parse(data);
        var result = "";
        for(let i = 0; i < data.length; i++) {
          newPlaylist.push(data[i]['id']);
        }
        for (let i = 0; i < data.length; i++) {
          result += '<div class="music_row">'
          +'<div class="music_component" onclick="setTrack(\''+data[i]['id']+'\',newPlaylist,true)">'
          +'<div class="music_num">';
          result += i+1;
          result += '</div>' +
          '<div class="music_img_container">' + 
          '<img class="music_img" src="' + data[i]["urlimg"] + '" alt="music_img"></div>' +
          '<div class="music_detail">' +
          '<div class="music_name">' + data[i]["name"] +'</div></div>' +
          '<div class="fillingspace"></div>' + 
          '<img class="music_like_icon" src="/web-191/public/images/img/like.png" alt="share">' +
          '<div class="after"></div>' +
          '<hr></div><hr></div>'
        }
        $(".listSong").html(result);
      }
    });

    $.ajax({
      url: "http://localhost/web-191/models/ajax/getAlbumInfo.php",
      method: "POST",
      data: {idAlbum: idAlbum},
      success: function(data) {
        data = JSON.parse(data);
        console.log(data);
        $(".img_album").attr("src", data[0]["urlimg"]);
        $(".title_album").text(data[0]["nameAlbum"]);
        $(".right_title").text("Các bài hát của " + data[0]["nameSinger"] + " >");
      }
    });
    }
    else if(typeId=='iC'){
      $.ajax({
      url: "http://localhost/web-191/models/ajax/getSong.php",
      method: "POST",
      data: {idCa: idAlbum},
      success: function(data) {
        data = JSON.parse(data);
        var result = "";
        console.log(data);
        for(let i = 0; i < data.length; i++) {
          newPlaylist.push(data[i]['id']);
        }
        for (let i = 0; i < data.length; i++) {
          result += '<div class="music_row">'
          +'<div class="music_component" onclick="setTrack(\''+data[i]['id']+'\',newPlaylist,true)">'
          +'<div class="music_num">';
          result += i+1;
          result += '</div>' +
          '<div class="music_img_container">' + 
          '<img class="music_img" src="' + data[i]["urlimg"] + '" alt="music_img"></div>' +
          '<div class="music_detail">' +
          '<div class="music_name">' + data[i]["name"] +'</div></div>' +
          '<div class="fillingspace"></div>' + 
          '<img class="music_like_icon" src="/web-191/public/images/img/like.png" alt="share">' +
          '<div class="after"></div>' +
          '<hr></div><hr></div>'
        }
        $(".listSong").html(result);
      }
    });

    $.ajax({
      url: "http://localhost/web-191/models/ajax/getAlbumInfo.php",
      method: "POST",
      data: {idCa: idAlbum},
      success: function(data) {
        data = JSON.parse(data);
        console.log(data);
        $(".img_album").attr("src", data[0]["urlimg"]);
        $(".title_album").text(data[0]["nameAlbum"]);
        
      }
    });
    }else if (typeId=='iA'){
      $.ajax({
      url: "http://localhost/web-191/models/ajax/getSong.php",
      method: "POST",
      data: {idAr: idAlbum},
      success: function(data) {
        data = JSON.parse(data);
        console.log(data);
        var result = "";
        for(let i = 0; i < data.length; i++) {
          newPlaylist.push(data[i]['id']);
        }
        for (let i = 0; i < data.length; i++) {
          result += '<div class="music_row">'
          +'<div class="music_component" onclick="setTrack(\''+data[i]['id']+'\',newPlaylist,true)">'
          +'<div class="music_num">';
          result += i+1;
          result += '</div>' +
          '<div class="music_img_container">' + 
          '<img class="music_img" src="' + data[i]["urlimg"] + '" alt="music_img"></div>' +
          '<div class="music_detail">' +
          '<div class="music_name">' + data[i]["name"] +'</div></div>' +
          '<div class="fillingspace"></div>' + 
          '<img class="music_like_icon" src="/web-191/public/images/img/like.png" alt="share">' +
          '<div class="after"></div>' +
          '<hr></div><hr></div>'
        }
        $(".listSong").html(result);
      }
    });

    $.ajax({
      url: "http://localhost/web-191/models/ajax/getAlbumInfo.php",
      method: "POST",
      data: {idAr: idAlbum},
      success: function(data) {
        data = JSON.parse(data);
        console.log(data);
        $(".img_album").attr("src", data[0]["urlimg"]);
        $(".title_album").text(data[0]["nameAlbum"]);
        
      }
    });
    }
  });
  </script>
</head>
<body>
  <?php include "includes/nav-bar.php" ?>
  <div class="container singlepage">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="left_container">
          <img class="img_album" src="" alt="tropical">
          <div class="title_album"></div>
          <div class="group_button">
            <button type="button" class="btn">Play All</button>
            <img class="img_like" src="/web-191/public/images/img/like_music.svg" alt="like">
          </div>
          <!-- <div class="desc_album">Thể loại : US-UK</div> -->
        </div>
      </div>
      <div class="col-12 col-md-6">
      <p class="right_title"></p>
      <div class="listSong"></div>  
      </div>
    </div>
  </div>

  <div class="body-content container">
    <div class="row rowsingle">
      <div class="col-12 col-lg-8">
        <div class="hot-category">
          <h3 class="title-name">Các bài hát cùng thể loại</h3>
          <div class="row categories">
            <div class="col-6 col-md-6 single-song col-sm-6 col-lg-3">
              <div class="related_row related_rowsingle">
                <div class="related_component">
                  <a href="#"><img class="related_row_img" src="/web-191/public/images/categories/nhactre.jpg"
                      alt="related1"></a>
                  <div class="name-single">
                    <div class="name">Young Music</div>
                    <div class="singer">Various Artist</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-6 single-song col-sm-6 col-lg-3">
              <div class="related_row related_rowsingle">
                <div class="related_component">
                  <a href="#"><img class="related_row_img" src="/web-191/public/images/categories/nhacaumi.jpg"
                      alt="related1"></a>
                  <div class="name-single">
                    <div class="name">Young Music</div>
                    <div class="singer">Various Artist</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-6 single-song col-sm-6 col-lg-3">
              <div class="related_row related_rowsingle">
                <div class="related_component">
                  <a href="#"><img class="related_row_img" src="/web-191/public/images/categories/nhachan.jpg"
                      alt="related1"></a>
                  <div class="name-single">
                    <div class="name">Young Music</div>
                    <div class="singer">Various Artist</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-6 single-song col-sm-6 col-lg-3">
              <div class="related_row related_rowsingle">
                <div class="related_component">
                  <a href="#"><img class="related_row_img" src="/web-191/public/images/categories/bolero.jpg"
                      alt="related1"></a>
                  <div class="name-single">
                    <div class="name">Young Music</div>
                    <div class="singer">Various Artist</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "includes/play_media.php" ?>
  
  <?php include "includes/footer.php" ?>

</body>

</html>