<?php 
require_once('../core/Database.php');
class LoginModel extends Database {
  function checkLogin($username, $password) {
    $sql = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
    $result = $this->getListItem($sql);      
    return $result;
  }
}
?>