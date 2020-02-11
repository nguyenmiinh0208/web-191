<?php 
require_once ('../core/Database.php');
$database  = new Database();
$obj_search = array();
$sql_songs= "SELECT  name, id FROM songs WHERE name LIKE '%".$_POST['key']."%' LIMIT 4" ;
$sql_artists= "SELECT  name, id FROM artists WHERE name LIKE '%".$_POST['key']."%' LIMIT 2" ;
$sql_albums= "SELECT  name, id FROM albums WHERE name LIKE '%".$_POST['key']."%' LIMIT 2" ;
$sql_categories= "SELECT  name, id FROM categories WHERE name LIKE '%".$_POST['key']."%' LIMIT 2" ;
$data_songs = $database->getListItem($sql_songs);
$data_artists = $database->getListItem($sql_artists);
$data_albums = $database->getListItem($sql_albums);
$data_categories = $database->getListItem($sql_categories);

$obj_search['songs'] = $data_songs;
$obj_search['artists'] = $data_artists;
$obj_search['albums'] = $data_albums;
$obj_search['categories'] = $data_categories;

echo json_encode( $obj_search)
?>