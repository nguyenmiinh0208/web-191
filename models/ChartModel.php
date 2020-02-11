
<?php 

class ChartModel extends Database {
  function getChart() {
      $sql = "SELECT `songs`.`id` AS `idSong`, `songs`.`name` AS `name`, `songs`.`urlimg` AS `urlimg`,`songs`.`idSingers` AS `idSinger` ,`artists`.`name` AS `singerName` FROM songs INNER JOIN artists ON songs.idSingers = artists.id ORDER BY numberlisten DESC LIMIT 6";
      $result = $this->getListItem($sql);      
      return $result;
  }
  
}


?>