<!DOCTYPE html>
<html lang="en">
<head>
<?php include "includes/include_head.php" ?>
<style>
    .button-like{
        padding-right : 3px;
        color : gray;
    }
    .button-like:hover{
        color : purple;
        transition : 1s;
    }
</style>
</head>
<body>
    <?php include "includes/nav-bar.php" ?>

    <div class="container containerchart">

        <div class="row chartrow">
            <div class="col-sm-8">

                <p class="chart-title">MUSIC CHART</p>
                <p>Ranking is updated every Monday based on actual statistics on desktop and mobile NhacCuaTui. In
                    which the important factors that determine the TOP 20 ranking are as follows: Listen, Like, Comment,
                    Share.</p>

                <div class="chart-nav">
                    <div class="chart-nav-time">Top 6 Music Song</div>
                    <img class="chart-nav-icon" src="/web-191/public/images/img/calendar_ic.png" alt="calendar">
                    <div class="chart-nav-play">PLAY ALL</div>
                </div>
                <?php
                    $chart = $data['chart'];
                    $count = 1;
                ?>
                <div class="music-chart-row">
                    <?php
                        foreach($chart as $val){
                            echo '
                            <div class="music_component">
                            <div class="music_num_'.$count.'">'.$count.'</div>
                            <div class="music_img_container">
                                <img class="music_img" src="'.$val['urlimg'].'" alt="music_img">
                            </div>
                            <div class="music_detail">
                                <div class="music_name">'.$val['name'].'</div>
                                <div class="music_artist">'.$val['singerName'].'</div>
                            </div>
    
                            <div class="fillingspacechart"></div>
                            <i class="fas fa-heart button-like"></i>
                            <hr>
                        </div>                            
                            ';
                            $count++;
                        }
                    ?>

                    
                    <hr>
                </div>

            </div>

            <div class="col-sm-4">
                <div class="hot-topic">HOT TOPIC</div>
                <img class="related-chart-component" src="/web-191/public/images/img/remix.jpg" alt="alt">
                <img class="related-chart-component" src="/web-191/public/images/img/party.png" alt="alt">
                <img class="related-chart-component" src="/web-191/public/images/img/haingoai.jpg" alt="alt">
                <img class="related-chart-component" src="/web-191/public/images/img/nonstop.jpg" alt="alt">
                <img class="related-chart-component" src="/web-191/public/images/img/piano.jpg" alt="alt">
            </div>
        </div>
    </div>
    
    
    <?php include "includes/play_media.php" ?>
    <?php include "includes/footer.php" ?>

</body>

</html>