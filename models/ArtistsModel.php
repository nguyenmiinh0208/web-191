<?php 

class ArtistsModel extends Database {
    function getHotSinger() {
        $sql = "SELECT `id`,`name`, `urlimg` FROM `artists` ORDER BY `numberLike` DESC LIMIT 8";
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