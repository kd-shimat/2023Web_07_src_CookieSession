<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>セッション２</title>
</head>

<body>
	<h4>セッション２</h4>
	<?php
	echo '<p>Session ID:' . $_COOKIE['PHPSESSID'] . '</p>';
	$_SESSION['name'] = $_POST['user_name'];
	echo '<p>名前：' . $_POST['user_name'] . '</p>';
	?>
	<form method="POST" action="session3.php">
		職業：<input type="text" name="job"><br>
		<input type="submit" value="送信">
	</form>
	<hr>
	0J0X0XX神戸電子
</body>

</html>