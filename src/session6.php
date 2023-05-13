<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>セッション６</title>
</head>

<body>
	<h3>セッション６</h3>
	<?php
	echo '<p>Session ID:' . $_COOKIE['PHPSESSID'] . '</p>';
	echo '<p>名前：' . $_SESSION['name'] . '</p>';
	echo '<p>職業：' . $_SESSION['job'] . '</p>';
	echo '<p>年齢：' . $_SESSION['age'] . '</p>';
	$oldsessid = $_GET['oldsessid'];
	echo '<a href="session7.php?oldsessid=' . $oldsessid . '">新しいセッション開始</a>';
	?>
	<hr>
	0J0X0XX神戸電子
</body>

</html>