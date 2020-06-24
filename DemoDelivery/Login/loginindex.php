<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>BigFamilyデリバリー</title>
	<meta name="description" content="東京宅配フードサイト">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
   <div id="wrapper">
    <header>
    	<img class="logo" src="../image/foodlogo.png" alt="delivery-logo">
    </header>
</div>

<div id="container">

	<form id="validationform" action="" method="post">


　      <label for="email">メールアドレス</label>
        <input  id="email" class="input-style input-width" type="email" name="email" placeholder="メールアドレスをご入力ください" value="<?php echo addslashes($_POST['email'])?>">

        <label for="pass">パスワード</label>
        <input id="pass" class="input-style input-width" input="input-width" type="password" name="password" placeholder="パスワードをご入力ください" value="<?php echo addslashes($_POST['password'])?>">


        <button id="submitButton" class="input-style" type="submit" name="submit">ユーザー登録</button>

    </form>
   
     <?php

     session_start();

       $link = mysqli_connect("localhost","root","root","memberusers");
   
  if(mysqli_connect_error()) {
    die  ("データベースへの接続に失敗しました");
  }
 

    if (array_key_exists('email',$_POST) OR array_key_exists('password',$_POST)) {
      if ($_POST['email'] == '') {
        echo "メールアドレスを入力ください。";
      } elseif ($_POST['password'] == '') {
        echo "パスワードを入力ください。";
      } else {


        $query = "SELECT * FROM users WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";

   
        $result = mysqli_query($link,$query);

        $row = mysqli_fetch_array($result);

    
        if ($row) {
            $_SESSION['USERID'] = $_POST['email'];
            header("Location:login.php");
        } else {
            echo "ログインに失敗しました。";
        }


      }
    }

    

    ?> 

        <div id="error">
        
        </div>
　　</div>　　
    <footer>
        <h3>copyright (C) 2019 BigFamily food Delivery. All Right Reserved.</h3>
    </footer>
</div>

</body>
</html>