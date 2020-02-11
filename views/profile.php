<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/include_head.php" ?>
    <script>
        var fullLocation = window.location.href;
        fullLocation = decodeURIComponent(fullLocation);
        var mark = fullLocation.split('?'); // tách theo dấu ?
        var stringId = mark[1]; //idU=value
        var idUser = stringId.slice(4, stringId.length);
        $(document).ready(function() {
            $.ajax({
                url: "/web-191/models/ajax/getMySong.php",
                method: "POST",
                data: {
                    idUser: idUser
                },
                success: function(data) {
                    data = JSON.parse(data);
                    var resultData = "";
                    for (let i = 0; i < data.length; i++) {
                        resultData += '<div class="music-chart-row custom-chart">' +
                            '<div class="music_component">' +
                            '<div class="music_img_container">' +
                            '<img class="music_img" src="' + data[i]["urlimg"] + '" alt="music_img"></div>' +
                            '<div class="music_detail">' +
                            '<div class="music_name">' + data[i]["name"] + '</div>' +
                            '<div class="music_artist">' + data[i]["nameSinger"] + '</div></div><i class="fa fa-trash" aria-hidden="true"></i></div><hr></div>';
                    }
                    $(".contentData").html(resultData);
                }
            });
        });
    </script>
</head>

<body>

    <?php include "includes/nav-bar.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-4">
                <ul class="left-menu fixed-menu">
                    <li><a class="left-menu-item active" href="#music-header">Thư viện</a></li>
                    <li><a class="left-menu-item" href="index.php">Bài hát</a></li>
                    <li><a class="left-menu-item" href="#upload-area">Tải lên</a></li>
                    <li><a class="left-menu-item" href="#upload-area">Bài Hát Đã Tải Lên</a></li>
                    <li><a class="left-menu-item" data-toggle="modal" data-target="#modalSettingForm">Chỉnh sửa</a>
                    </li>
                </ul>

            </div>
            <div class="col-md-9 col-8">
                <div class="row" style="padding:0px;">
                    <div class="col-8">
                        <div class="music-header-brand">
                            Bài hát yêu thích >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="music-header-icon">
                            <button class="btn"><i class="fa fa-play"></i> Nghe tất cả</button>
                        </div>
                    </div>

                </div>
                <div class="music-chart-row custom-chart">
                    <div class="music_component">
                        <div class="music_img_container">
                            <img class="music_img" src="/web-191/public/images/img/music1.jpg" alt="music_img">
                        </div>
                        <div class="music_detail">
                            <div class="music_name">Jakamin Tak</div>
                            <div class="music_artist">Kim Join</div>
                        </div>
                    </div>
                    <hr>

                    <div class="music_component">
                        <div class="music_img_container">
                            <img class="music_img" src="/web-191/public/images/img/music2.jpg" alt="music_img">
                        </div>
                        <div class="music_detail">
                            <div class="music_name">Hello</div>
                            <div class="music_artist">Andele</div>
                        </div>

                    </div>
                    <hr>

                    <div class="music_component">
                        <div class="music_img_container">
                            <img class="music_img" src="/web-191/public/images/img/music3.jpg" alt="music_img">
                        </div>
                        <div class="music_detail">
                            <div class="music_name">Give Up Now</div>
                            <div class="music_artist">Justin Lake</div>
                        </div>

                    </div>
                    <hr>
                </div>

                <div class="row" style="padding:0px;">
                    <div class="col-8">
                        <div class="music-header-brand">
                            Bài hát Mới Tải lên >
                        </div>
                    </div>
                </div>
                <?php
                $list = $data["data"]["results"];
                foreach ($list as $val) {
                    echo '
                    <div class="music-chart-row custom-chart">
                    <div class="music_component">
                        <div class="music_img_container">
                            <img class="music_img" src="'.$val["url_img"].'" alt="music_img">
                        </div>
                        <div class="music_detail">
                            <div class="music_name">' . $val["song_name"] . '</div>
                            <div class="music_artist">' . $val["artists_name"] . '</div>
                        </div>
                    </div> 
                    <hr>
                    ';
                }
                ?>

<!-- <i class="fa fa-trash" aria-hidden="true"></i> -->

                <!-- <div class="contentData">
                    <div class="music-chart-row custom-chart">
                        <div class="music_component">
                            <div class="music_img_container">
                                <img class="music_img" src="/web-191/public/images/img/music1.jpg" alt="music_img">
                            </div>
                            <div class="music_detail">
                                <div class="music_name">Jakamin Tak</div>
                                <div class="music_artist">Kim Join</div>
                            </div>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </div> 
                        <hr>
                    </div>
                </div> -->

            </div>
            <!--music upload-->
            <div id="upload-area">
                <div class="upload-header-brand">
                    <b>Tải nhạc lên</b> >>>
                </div>
                <br>
                <div class="music-upload ">
                    <form action="../public/upload.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên Ca Sĩ</label>
                            <input name="insert_artist" type="text" class="form-control" id="insert_artist" placeholder="Artist Name" required="required">
                            <label>Tên Nhạc</label>
                            <input name="insert_music" type="text" class="form-control" id="insert_music" placeholder="Music Name" required="required">
                            <br>
                            <label>Thể Loại</label>
                        </div>
                        <select name="type_list">
                            <option value="VN">VN</option>
                            <option value="US">US-UK</option>
                            <option value="KPOP">KPOP</option>
                        </select>
                        <label>Music File</label>
                        <input type="file" name="audio_file" id="audio_file" required>
                        <label>Image File</label>
                        <input type="file" name="img_file" id="img_file" required>
                        <input class="btn" type="submit" value="Upload" name="save_audio" required="required"><i class="fas fa-upload"></i>
                        </input>
                    </form>
                </div>
            </div>
            <!--music upload-->
        </div>
    </div>
    <div class="modal fade" id="modalSettingForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="font-size: 1.5rem;">Setting</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" class="form-control validate orangeForm-name" placeholder="Your name">
                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="orangeForm-email" class="form-control validate" placeholder="Your email">
                    </div>

                    <div class="md-form mb-5">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" id="orangeForm-cur-pass" class="form-control validate" placeholder="Current password">
                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" class="form-control validate orangeForm-new-pass" placeholder="New password">
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- <script>
    $(document).ready(function()){
        $()
    }
</script> -->

</body>


</html>