<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>セッション３</title>
</head>

<body>
	<h4>セッション３</h4>
	<?php
	echo '<p>Session ID:' . $_COOKIE['PHPSESSID'] . '</p>';
	echo '<p>名前：' . $_SESSION['name'] . '</p>';
	$_SESSION['job'] = $_POST['job'];
	echo '<p>職業：' . $_POST['job'] . '</p>';
	?>
	<form method="POST" action="session4.php">
		年齢：<input type="text" name="age"><br>
		<input type="submit" value="送信">
	</form>
	<hr>
	0J0X0XX神戸電子
</body>

</html>