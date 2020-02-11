<?php 
require_once ('../../core/Database.php');
$db = new Database();
if (isset($_POST["idAlbum"])) {
  
  $idAlbum = $_POST["idAlbum"];
  $sql = "SELECT `albums`.`name` AS `nameAlbum`, `albums`.`urlimg`, `artists`.`name` AS `nameSinger` 
          FROM `albums`,`artists` 
          WHERE `albums`.id = `artists`.id AND `albums`.id = '$idAlbum'";
  $album = $db->getListItem($sql);
  echo json_encode($album);
}else if (isset($_POST["idCa"])){
  
  $idAlbum = $_POST["idCa"];
  $sql = "SELECT `categories`.`name` AS `nameAlbum`, `categories`.`urlimg`
          FROM `categories` 
          WHERE `albums`.id = '$idAlbum'";
  $album = $db->getListItem($sql);
  echo json_encode($album);
}else if (isset($_POST['idAr'])){
  $idAlbum = $_POST["idAr"];
  $sql = "SELECT `artists`.`name` AS `nameAlbum`, `artists`.`urlimg`
          FROM `artists` 
          WHERE `artists`.id = '$idAlbum'";
  $album = $db->getListItem($sql);
  echo json_encode($album);
}
?>