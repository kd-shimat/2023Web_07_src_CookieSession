<?php
if (isset($_COOKIE['cookie_name'])) {
	$cookie_name = $_COOKIE['cookie_name'];
	setcookie("cookie_name", '', time() - 10);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>Cookie3</title>
</head>

<body>
	<h3>Cookie3</h3>
	<?php
	if (isset($cookie_name)) {
		echo '<p>Cookieに保存されている名前は「' . $cookie_name . '」ですが、ここで破棄します。</p>';
		echo '<a href="cookie4.php">破棄後のクッキーデータを確認する</a>';
	} else {
		echo '<p>Cookieデータが保存されていません。</p>';
		echo '<a href="cookie1.php">cookie1.phpに戻る</a>';
	}
	?>
	<hr>
	0J0X0XX神戸電子
</body>

</html>