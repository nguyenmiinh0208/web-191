<?php 

class SongModel extends Database {
  function getCategories() {
      $sql = "SELECT * FROM `categories` ORDER BY RAND() LIMIT 8";
      $result = $this->getListItem($sql);
      return $result;
  }

  function getAlbums() {
    $sql = "SELECT `albums`.`id` AS `idAlbum`, `albums`.`name` AS `nameAlbum`, `albums`.`urlimg`, `artists`.`name` AS `nameSinger` 
            FROM `albums`,`artists` 
            WHERE `albums`.id = `artists`.id 
            ORDER BY `albums`.`numberListen` DESC LIMIT 6";
    $result = $this->getListItem($sql);
    return $result;
  }

  function getAlbumOrderCountry() {
   
  }
}


?>