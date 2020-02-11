<?php 
// die("STOP");
require_once ('../models/LoginModel.php');
$username = $_POST["username"];
$password = $_POST["password"];
$loginModel = new LoginModel();
$result = $loginModel->checkLogin($username, $password);

if (count($result) > 0) {
  $_SESSION['username'] = $username;
  $_SESSION['name'] = $result[0]["name"];
  $_SESSION['id'] = $result[0]["id"];
  
  // setcookie('username', $username, time() + 3600);
  // setcookie('name', $result[0]["name"], time() + 3600);
  // setcookie('id', $result[0]["id"], time() + 3600);
  // header("Location: ../index/index");
  echo "1";
} else {
  echo "0";
}


?>