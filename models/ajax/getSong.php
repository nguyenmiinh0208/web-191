<?php
require_once ('../../core/Database.php');
$db = new Database();
if(isset($_POST['idAlbum'])) {
  $idAlbum = $_POST['idAlbum'];
  

  $sql = "SELECT * FROM `songs` WHERE `album_id`='$idAlbum'";
  $listSong = $db->getListItem($sql);

  echo json_encode($listSong);
}else if(isset($_POST['idCa'])){
  $idAlbum = $_POST['idCa'];
  

  $sql = "SELECT * FROM `songs` WHERE `idCategories`='$idAlbum'";
  $listSong = $db->getListItem($sql);
  echo json_encode($listSong);

}else{
  $idAlbum = $_POST['idAr'];
  

  $sql = "SELECT * FROM `songs` WHERE `idSingers`='$idAlbum'";
  $listSong = $db->getListItem($sql);
  echo json_encode($listSong);
}


?>