<?php 
require_once ('../../core/Database.php');
$db = new Database();
if (isset($_POST["songId"])) {
  $songId = $_POST['songId'];
  $sql = "SELECT `songs`.`name`, `songs`.`urlimg`, `songs`.`urlmp3`, `artists`.`name` AS `nameSinger` 
        FROM `songs` INNER JOIN `artists` ON `songs`.`idSingers` =`artists`.`id` WHERE `songs`.`id` = '$songId'";
  $song = $db->getRow($sql);
  echo json_encode($song);
}

?>