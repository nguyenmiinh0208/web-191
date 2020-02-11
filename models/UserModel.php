<?php

class UserModel extends Database {
    function selectAll() {
        return "aaaa";
    }


    function getYourMusic(){
        // $sql = "SELECT * FROM `songs` WHERE album_id = 999" ;
        // $sql = "SELECT songs.name as song_name, artists.name, songs.id as song_id as artist_name FROM songs INNER JOIN artists ON songs.idSingers = artists.id AND songs.album_id = 999";
        $sql = "SELECT songs.name as song_name, artists.name as artists_name, songs.id as song_id, songs.urlimg as url_img FROM songs INNER JOIN artists ON songs.idSingers = artists.id AND songs.album_id = 999";
        $result = $this->getListItem($sql);
        return $result;
    
    }
}

?>