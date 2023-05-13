<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>セッション７</title>
</head>

<body>
	<h3>セッション７</h3>
	<?php
	echo '<p>Old Session ID：' . $_GET['oldsessid'] . '</p>';
	echo '<p>New Session ID：' . $_COOKIE['PHPSESSID'] . '</p>';
	?>
	<a href="session1.php">最初に戻る</a>
	<hr>
	0J0X0XX神戸電子
</body>

</html>