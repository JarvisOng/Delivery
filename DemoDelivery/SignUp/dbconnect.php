<?php


require_once('config.php');


$mysqli = new mysqli($host,$username,$password,$dbname);
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;
}

// if(!$link) {
//   	die  ("データベースへの接続に失敗しました");
//   }


 // $query = "SELECT * FROM `users` ";

 // if($result = mysqli_query($connection,$query)) {
 // 	echo "クエリの発行に成功しました。";
 // } else {
 // 	echo "クエリの発行に失敗しました。";
 // }
//  $row = mysqli_fetch_array($result);

//  print_r($row);


?>