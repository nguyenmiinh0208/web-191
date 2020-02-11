<?php 

class SearchModel extends Database {
    function getSearchresult($key){
        $sql_songs= "SELECT songs.name, songs.id,songs.urlimg,artists.name AS artist_name FROM songs INNER JOIN artists ON artists.id= songs.idSingers WHERE songs.name LIKE '%".$key."%'" ;
        $sql_artists= "SELECT  artists.name,artists.id,artists.urlimg  FROM artists WHERE name LIKE '%".$key."%'" ;
        $sql_albums= "SELECT `albums`.name,`albums`.id ,`albums`.urlimg ,`artists`.name AS artist_name
        FROM `albums`,`artists` 
        WHERE `albums`.id = `artists`.id AND `albums`.name LIKE '%".$key."%' ORDER BY `albums`.`numberListen` DESC" ;
        $sql_categories= "SELECT  name,id FROM categories WHERE name LIKE '%".$key."%'" ;
        $obj_search = array();
        $data_songs = $this->getListItem($sql_songs);
        $data_artists = $this->getListItem($sql_artists);
        $data_albums = $this->getListItem($sql_albums);
        $data_categories = $this->getListItem($sql_categories);

        $obj_search['songs'] = $data_songs;
        $obj_search['artists'] = $data_artists;
        $obj_search['albums'] = $data_albums;
        $obj_search['categories'] = $data_categories;
        return $obj_search;
    }
    function getHotSinger() {
        $sql = "SELECT `name`, `urlimg` FROM `artists` ORDER BY `numberLike` DESC LIMIT 8";
        $result = $this->getListItem($sql);
        return $result;
    }
    function getSingers(){
        $sql = "SELECT artists.id,artists.name AS artist_name, countries.name AS country_name,artists.urlimg FROM artists INNER JOIN countries ON artists.country_id = countries.id";
        $result = $this->getListItem($sql);
        return $result;
    }
    function getSinger($id){
        $sql = "SELECT *  FROM artists WHERE id=".$id;
        $result = $this->getListItem($sql);
        return $result;
    }
}


?>