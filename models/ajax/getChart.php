<?php
require_once ('../../core/Database.php');

$idAlbum = $_POST['idAlbum'];
$db = new Database();

$sql = "SELECT * FROM `songs` WHERE `album_id`='$idAlbum'";
$listSong = $db->getListItem($sql);

echo json_encode($listSong);

?>