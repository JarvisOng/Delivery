<?php 

// require_once('$dbconnect.php');


if (isset($_POST['submit'])) {
	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['pass1'])) {
		header("location:signupindex.php?Empty= Please fill in the Blanks");
	} else {
		$query = "SELECT * FROM users WHERE email='".$_POST['name']."' and pass'".$_POST['pass1']."'";
	}
}



// $my_query = "select * from users where email = '$email'";

// $result = mysqli_query($connection,$my_query);

// if(mysqli_num_rows($result) > 0) {
// 	echo 'このメールアドレスはすでに登録されています';
// }else {
// 	$my_query = INSERT INTO users (name,email,pass1) VALUES ('$name','$email','$pass1');
// 	echo "<br>";
// 	$result = mysqli_query($connection,$my_query);

// 	if ($result) {
// 		echo "登録に成功しました。";
// 	} else {
// 		echo "登録に失敗しました。";
// 	}
// }

// mysqli_close();



?>