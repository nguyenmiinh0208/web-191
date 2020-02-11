<!doctype html>
<html lang="en">
<head><?php include "includes/include_head.php" ?></head>
<body>
<?php include "includes/nav-bar.php" ?>
<?php
                    $VNalbum = $data['listSongVN'];
                    $USUKalbum = $data['listSongUSUK'];
                    $KPOPalbum = $data['listSongKPOP'];
                ?>
    <div class="body-content container">
        <div class="row">
            <div class="hot-album hot-album-page-album col-12">
                
                <h3 class="title-name">Việt Nam</h3>                
                <div class="row albums page-albums">
                <?php
                    foreach($VNalbum as $val){
                        echo '
                        <div class="col-6 col-md-6 col-sm-6 col-lg-2 single-song">
                        <div class="related_row" style="margin-top:20px;margin-bottom: 20px;">
                            <div class="related_component">
                                <a href="../album/single?id='.$val["idAlbum"].'"><img class="related_row_img" src="'.$val["imgAlbum"].'"
                                        alt="related1"></a>
                            </div>
                            <div class="name-singer">
                                <div class="name" style="font-size:15px;">'.$val["nameAlbum"].'</div>
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
    </div>

    <div class="body-content container">
            <div class="row">
                <div class="hot-album hot-album-page-album col-12">
                    
                    <h3 class="title-name">Âu Mỹ</h3>                
                    <div class="row albums page-albums">
                    <?php
                        foreach($USUKalbum as $val){
                            echo '
                            <div class="col-6 col-md-6 col-sm-6 col-lg-2 single-song">
                            <div class="related_row" style="margin-top:20px;margin-bottom: 20px;">
                                <div class="related_component">
                                <a href="../album/single?id='.$val["idAlbum"].'"><img class="related_row_img" src="'.$val["imgAlbum"].'"
                                            alt="related1"></a>
                                </div>
                                <div class="name-singer">
                                    <div class="name" style="font-size:15px;">'.$val["nameAlbum"].'</div>
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
        </div>

        <div class="body-content container">
                <div class="row">
                    <div class="hot-album hot-album-page-album col-12">
                        
                        <h3 class="title-name">Hàn Quốc</h3>                
                        <div class="row albums page-albums">
                        <?php
                            foreach($KPOPalbum as $val){
                                echo '
                                <div class="col-6 col-md-6 col-sm-6 col-lg-2 single-song">
                                <div class="related_row" style="margin-top:20px;margin-bottom: 20px;">
                                    <div class="related_component">
                                    <a href="../album/single?id='.$val["idAlbum"].'"><img class="related_row_img" src="'.$val["imgAlbum"].'"
                                                alt="related1"></a>
                                    </div>
                                    <div class="name-singer">
                                        <div class="name" style="font-size:15px;">'.$val["nameAlbum"].'</div>
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
            </div>
    <?php include "includes/play_media.php" ?>
    <?php include "includes/footer.php" ?>
</body>
</html>