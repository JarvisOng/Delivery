<?php

session_start();

$link = mysqli_connect("localhost","root","root","memberusers");


if (!isset($_SESSION["USERID"])) {
  header("Location: logout.php");
}

?>


<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>
  </head>
  <body>
  <h1>ユーザーログイン</h1>
  <p>ようこそ</p>
  <ul>
  <li><a href="logout.php">ログアウト</a></li>
  </ul>
  </body>
</html>