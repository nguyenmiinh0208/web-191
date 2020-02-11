<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Center the loader */
        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0px;
                opacity: 1
            }
        }

        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        #myDiv {
            display: none;
            text-align: center;
        }
    </style>
</head>

<body onload="myFunction()" style="margin:0;">

        <?php
        if ( isset( $_POST['save_audio'] ) && $_POST['save_audio'] == 'Upload' ) {
            $dir = './public/songs/';
            $audio_path = $dir.basename( $_FILES['audio_file']['name'] );
            $img_path = $dir.basename( $_FILES['img_file']['name'] );
        
            if ( move_uploaded_file( $_FILES['audio_file']['tmp_name'], $audio_path ) ) {
                if (
                    isset($img_path)){
                    move_uploaded_file( $_FILES['img_file']['tmp_name'], $img_path );
                }
                echo 'upload successfully';
                insertAudio( $audio_path );
            }
        }
        
        function insertAudio( $filename ) {
            $conn = mysqli_connect( 'localhost', 'root', '', 'zingmp3' );
            if ( !$conn ) {
                die( 'server not connected' );
            }
            //insert artist
            $artist = $_POST['insert_artist'];
            mysqli_query( $conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'" );
            $sql_insert_artist = "INSERT INTO artists (id, name, urlimg, description, numberLike) VALUES (999, '$artist', 'url', '', 0)";
            mysqli_query( $conn, $sql_insert_artist );
        
            //insert songs name
            $songs = $_POST['insert_artist'];
            $type = $_POST['type_list'];
            $type_code = -1;
            if ( $type == 'VN' ) {
                $type_code = 1;
            } else if ( $type == 'US' ) {
                $type_code = 2;
            } else {
                $type_code = 3;
            }
            $sql_insert_song = "INSERT INTO songs (name, idSingers, urlmp3, urlimg, country_id, album_id, numberlisten, numberLiked, lastUpdateTime) 
                                VALUES ('$songs', '999', '${filename}', 'https://data.chiasenhac.com/data/cover/92/91590.jpg', $type_code , 999, 0, 0, '2019-12-09 09:38:31')";
            mysqli_query( $conn, $sql_insert_song );
            mysqli_close( $conn );
        }
    ?>

    <div id="loader"></div>

    <div style="display:none;" id="myDiv" class="animate-bottom">
        <h2>Tada!</h2>
        <p>Your music has been uploaded..</p>
    </div>

    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 2000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
    </script>

</body>

</html>