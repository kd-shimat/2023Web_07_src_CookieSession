<?php
session_start();
session_destroy();
setcookie('PHPSESSID', '', time() - 10, '/');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>セッション５</title>
</head>

<body>
	<h3>セッション５</h3>
	<?php
	echo '<p>Session ID:' . $_COOKIE['PHPSESSID'] . '</p>';
	echo '<p>名前：' . $_SESSION['name'] . '</p>';
	echo '<p>職業：' . $_SESSION['job'] . '</p>';
	echo '<p>年齢：' . $_SESSION['age'] . '</p>';
	$oldsessid = $_COOKIE['PHPSESSID'];
	echo '<a href="session6.php?oldsessid=' . $oldsessid . '">次へ（全てのセッションデータを削除済み）</a>';
	?>
	<hr>
	0J0X0XX神戸電子
</body>

</html>