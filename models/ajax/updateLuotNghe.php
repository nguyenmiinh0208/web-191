<?php
require_once ('../../core/Database.php');
$db = new Database();
if(isset($_POST['songId'])) {
	$songId = $_POST['songId'];
  $sql = "UPDATE `songs` SET numberlisten = numberlisten + 1 WHERE id ='$songId'";
  $db->update($sql);
}
?>