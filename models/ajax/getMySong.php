<?php 

require_once ('../../core/Database.php');

if(isset($_POST['idUser'])) {
  $idUser = $_POST['idUser'];
  $db = new Database();

  $sql = "SELECT `songs`.`name`, `songs`.`urlimg`, `songs`.`urlmp3`, `artists`.`name` AS `nameSinger` 
  FROM `songs` INNER JOIN `artists` ON `songs`.`idSingers` =`artists`.`id` WHERE `songs`.`user_upload`='$idUser'";

  // $sql = "SELECT * FROM `songs` WHERE `user_upload`='$idUser'";
  $listSong = $db->getListItem($sql);

  echo json_encode($listSong);
}

?>