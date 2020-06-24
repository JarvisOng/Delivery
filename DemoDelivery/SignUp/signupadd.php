<?php
session_start();

include_once 'dbconnect.php';

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>BigFamilyデリバリー</title>
  <meta name="description" content="東京宅配フードサイト">
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<div id="wrapper">
    <header>
      <img class="logo" src="../image/foodlogo.png" alt="delivery-logo">
    </header>
</div>
　

<div id="container">

  <form id="validationform" method="post" action="">
    <label for="name">名前</label>
    <input id="name" class="input-style input-width" type="username" name="username" placeholder="名前をご入力ください" value="<?php print (htmlspecialchars($_POST['username'],ENT_QUOTES)); ?>">

　      <label for="email">メールアドレス</label>
        <input  id="email" class="input-style input-width" type="email" name="email" placeholder="メールアドレスをご入力ください" value="<?php print (htmlspecialchars($_POST['email'],ENT_QUOTES)); ?>">

        <label for="pass1">パスワード</label>
        <input id="pass1" class="input-style input-width" input="input-width" type="password" name="password" placeholder="パスワードをご入力ください" value="<?php print (htmlspecialchars($_POST['pass1'],ENT_QUOTES)); ?>">

        <button id="submitButton" class="input-style" type="submit" name="submit">新規登録</button> 

        <br>


        <?php

         $link = mysqli_connect("localhost","root","root","memberusers");
   
  if(mysqli_connect_error()) {
    die  ("データベースへの接続に失敗しました");
  }
 

    if (array_key_exists('email',$_POST) OR array_key_exists('password',$_POST)) {
        if ($_POST['username'] == '') {
        echo "お名前を入力ください。";
      } elseif ($_POST['email'] == '') {
        echo "メールアドレスを入力ください。";
      } elseif ($_POST['password'] == '') {
        echo "パスワードを入力ください。";
      } else {
        $query = "SELECT `user_id` FROM `users` WHERE email = '".mysqli_real_escape_string($link,$_POST['email'])."'";
        $result = mysqli_query($link,$query);
        if (mysqli_num_rows($result) > 0) {
          echo "すでにそのメールアドレスは使用されています。";
        } else {

            $username = $mysqli->real_escape_string($_POST['username']);
            $email = $mysqli->real_escape_string($_POST['email']);
            $password = $mysqli->real_escape_string($_POST['password']);


            $query = "INSERT INTO `users`(`username`,`email`,`password`) VALUES ('$username','$email','$password')";

            if (mysqli_query($link,$query)) {
              echo "登録されました。";
            } else {
              echo "登録に失敗しました。";
            }

        }

    }
}

?>

       

    </form>   
       
        <div id="error">
        
        </div>
   
　　</div>　
    <footer>
        <h3>copyright (C) 2019 BigFamily food Delivery. All Right Reserved.</h3>
    </footer>
</div>

</body>
</html>