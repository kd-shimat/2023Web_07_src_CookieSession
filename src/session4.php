<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>セッション４</title>
</head>

<body>
	<h3>セッション４</h3>
	<?php
	echo '<p>Session ID:' . $_COOKIE['PHPSESSID'] . '</p>';
	echo '<p>名前：' . $_SESSION['name'] . '</p>';
	echo '<p>職業：' . $_SESSION['job'] . '</p>';
	unset($_SESSION['job']);
	$_SESSION['age'] = $_POST['age'];
	echo '<p>年齢：' . $_POST['age'] . '</p>';
	?>
	<a href='session5.php'>次へ（職業のセッションデータ削除済み）</a>
	<hr>
	0J0X0XX神戸電子
</body>

</html>