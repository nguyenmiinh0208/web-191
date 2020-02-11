<?php 

class AlbumsModel extends Database {
  function getAlbumsVN() {
      $sql = "SELECT `albums`.`id` AS `idAlbum`, `albums`.`name` AS `nameAlbum`, `albums`.`urlimg` AS `imgAlbum`
      FROM `albums`
      WHERE `albums`.idCountry = 1
              ";
      $result = $this->getListItem($sql);
      return $result;
  }
  function getAlbumsUSUK() {
    $sql = "SELECT `albums`.`id` AS `idAlbum`, `albums`.`name` AS `nameAlbum`, `albums`.`urlimg` AS `imgAlbum`
    FROM `albums`
    WHERE `albums`.idCountry = 2
            ";
    $result = $this->getListItem($sql);
    return $result;
  }
function getAlbumsKPOP() {
  $sql = "SELECT `albums`.`id` AS `idAlbum`, `albums`.`name` AS `nameAlbum`, `albums`.`urlimg` AS `imgAlbum`
  FROM `albums`
  WHERE `albums`.idCountry = 3
          ";
  $result = $this->getListItem($sql);
  return $result;
  }

  function getAlbumInfo($idAlbum) {
    
  }
}


?>