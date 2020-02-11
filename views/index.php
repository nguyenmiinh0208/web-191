<!doctype html>
<html lang="en">

<head>
  <?php include "includes/include_head.php" ?>
</head>

<body>
  <?php include "includes/nav-bar.php" ?>

  <div class="body-content container">
    <div class="row">
      <div class="col-12 col-lg-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators" style="z-index: 0;">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href=""><img class="d-block w-100" src="/web-191/public/images/backgrounds/11.jpg"
                  alt="First slide"></a>
            </div>
            <div class="carousel-item">
              <a href=""><img class="d-block w-100" src="/web-191/public/images/backgrounds/22.jpg"
                  alt="Second slide"></a>
            </div>
            <div class="carousel-item">
              <a href=""><img class="d-block w-100" src="/web-191/public/images/backgrounds/33.jpg"
                  alt="Third slide"></a>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Hot category -->
          <div class="hot-category">
            <h3 style="margin-bottom: 10px;" class="title-name">Chủ Đề & Thể Loại > </h3>
            <div id="hotCategoryIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators" style="z-index: 0;">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row categories">
                    <!-- List First categories -->
                    <?php
                      $list_first = $data["categories"]["list_first"];
                      foreach ($list_first as $val) {
                        echo '
                        <div class="col-6 col-md-6 single-song col-sm-6 col-lg-3">
                            <div class="related_row">
                                <div class="related_component">
                                  <a href="../album/single?iC='.$val["id"].'"><img class="related_row_img" src="'.$val["urlimg"].'"
                                        alt="related1"></a>
                                </div>
                                <div class="name-singer">
                                    <div class="name">'.$val["name"].'</div>
                                </div>
                                <div class="icon-play">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                          </div>
                          ';
                      }
                    ?>
                    <!-- end -->
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row categories">
                    <!-- List Second categories -->
                    <?php
                      $list_second = $data["categories"]["list_second"];
                      foreach ($list_second as $val) {
                        echo '
                        <div class="col-6 col-md-6 single-song col-sm-6 col-lg-3">
                            <div class="related_row">
                                <div class="related_component">
                                <a href="../album/single?iC='.$val["id"].'"><img class="related_row_img" src="'.$val["urlimg"].'"
                                        alt="related1"></a>
                                </div>
                                <div class="name-singer">
                                    <div class="name">'.$val["name"].'</div>
                                </div>
                                <div class="icon-play">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                          </div>
                          ';
                      }
                    ?>
                    <!-- end -->
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#hotCategoryIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"
                  style="background-color: rgb(101, 80, 158); z-index: 0;"></span>

              </a>
              <a class="carousel-control-next" href="#hotCategoryIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"
                  style="background-color: rgb(101, 80, 158);"></span>

              </a>
            </div>
          </div>

          <!--hot singer-->
          <div class="hot-singer">
            <h3 style="margin-bottom: 10px;" class="title-name">Nghệ Sĩ > </h3>
            <div id="hotSingerIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators" style="z-index: 0;">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row singers">
                    <?php
                    $listSingers = $data["singers"]["results_active"];
                    foreach ($listSingers as $val) {
                      echo '
                      <div class="col-6 col-md-6 single-song col-sm-6 col-lg-3">
                          <div class="related_row">
                              <div class="related_component">
                              <a href="../album/single?iA='.$val["id"].'"><img class="related_row_img" src="'.$val["urlimg"].'"
                                      alt="related1"></a>
                              </div>
                              <div class="name-singer">
                                  <div class="name">'.$val["name"].'</div>
                              </div>
                              <div class="icon-play">
                                  <i class="fa fa-play-circle" aria-hidden="true"></i>
                              </div>
                          </div>
                        </div>
                        ';
                    }
                    ?>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row singers">
                    <?php
                      $listSingers = $data["singers"]["results_hide"];
                      foreach ($listSingers as $val) {
                        echo '
                        <div class="col-6 col-md-6 single-song col-sm-6 col-lg-3">
                            <div class="related_row">
                                <div class="related_component">
                                <a href="../album/single?iA='.$val["id"].'"><img class="related_row_img" src="'.$val["urlimg"].'"
                                        alt="related1"></a>
                                </div>
                                <div class="name-singer">
                                    <div class="name">'.$val["name"].'</div>
                                </div>
                                <div class="icon-play">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                          </div>
                          ';
                      }
                      ?>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#hotSingerIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"
                  style="background-color: rgb(101, 80, 158); z-index: 0;"></span>

              </a>
              <a class="carousel-control-next" href="#hotSingerIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"
                  style="background-color: rgb(101, 80, 158);"></span>
              </a>
            </div>
          </div>

        </div>

      </div>
      <div class="col-12 col-lg-4 right_content">
        <div class="image_VN">
          <a href="">
            <img class="anhXepHang" src="/web-191/public/images/categories/ca_si_viet_nam.jpg" />
          </a>
        </div>
        <div class="image_BaiHitMoi">
          <img class="anhXepHang" src="/web-191/public/images/categories/nhung_bai_hit_moi.jpg" />
        </div>
        <div class="image_NhacPhim">
          <img class="anhXepHang" src="/web-191/public/images/categories/nhac_phim.jpg" />
        </div>
        <div class="image_NhacHot">
          <img class="anhXepHang" src="/web-191/public/images/categories/nhac_hot.jpg" />
        </div>
        <h3 class="title-name">Bảng Xếp Hạng</h3>
        <div class="song-list"></div>
      </div>
      <div class="hot-album col-12">
        <h3 class="title-name">Album Hot > </h3>
        <div class="row albums">
          <!-- List Ablum Hot -->
          <?php
          $listAlbum = $data["listAlbums"];
          foreach ($listAlbum as $val) {
            echo '
              <div class="col-6 col-md-6 single-song col-sm-6 col-lg-2">
                <div class="related_row">
                    <div class="related_component">
                        <a href="../album/single?id='.$val["idAlbum"].'"><img class="related_row_img" data-albums="'.$val["idAlbum"].'" src="'.$val["urlimg"].'"
                            alt="related1"></a>
                    </div>
                    <div class="name-singer">
                        <div class="name">'.$val["nameAlbum"].'</div>
                        <div class="singer">'.$val["nameSinger"].'</div>
                    </div>
                    <div class="icon-play">
                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                    </div>
                </div>
              </div>
              ';
          }
          ?>
          <!-- End -->
        </div>
      </div>
    </div>
  </div>

  <script>
    var newPlaylist = <?php echo json_encode($data["listChart"]); ?>;
    $(document).ready(function() {
      $.ajax({
        async: false,
        url:"/web-191/models/ajax/getListSongChart.php",
        method: "POST",
        success: function(data) {
          data = JSON.parse(data);
          var result = '';
          for (i = 0; i < data.length; i++) {
            count = i+1;
            result += '<div class="music_component" id="'+data[i]['idSong']+'">'
                    + '<div class="music_numa_'+count+'">'+count+'</div>'
                    + '<div class="music_img_container">'
                    + '<img class="music_img" src="' + data[i]['urlimg'] + '" alt="music_img"></div>'
                    + '<div class="music_detail">'
                    + '<div class="music_name">' + data[i]['name'] +  '</div><div class="music_artist">' + data[i]['singerName']
                    + '</div></div><hr></div>';
          }
          $(".song-list").html(result);
        }
      });

      $(document).on('click','.music_component',function() {
        var idSong = $(this).attr('id');
        $('.playMusic').removeClass('d-none');
        console.log('index: ' + newPlaylist);
        setTrack(idSong,newPlaylist,true);
      });
    });
  </script>
  <div class="playMusic d-none">
    <?php include "includes/playSongIndex.php" ?>
  </div>

  <?php include "includes/footer.php" ?>
</body>

</html>