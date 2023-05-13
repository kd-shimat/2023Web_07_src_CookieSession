<?php
if (isset($_POST['user_name'])  &&  $_POST['user_name']  !=  '') {
	$user_name  =  $_POST['user_name'];
	setcookie("cookie_name",  $user_name,  time() + 10);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>Cookie2</title>
</head>

<body>
	<h3>Cookie2</h3>
	<?php
	if (isset($user_name)) {
		echo '<p>' . $user_name . 'さん、ようこそ！</p>';
		echo '<a href="cookie3.php">クッキーデータを確認する</a>';
	} else {
		echo '<p>名前が入力されていません。</p>';
		echo '<a href="cookie1.php">cookie1.phpに戻る</a>';
	}
	?>
	<hr>
	0J0X0XX神戸電子
</body>

</html>