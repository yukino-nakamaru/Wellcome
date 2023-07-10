<?php

function save_user($user_name, $user_email, $user_password, $pdo) {

	$user_name = $pdo->quote($user_name);
	$user_email = $pdo->quote($user_email);
	$user_password = password_hash($user_password, PASSWORD_DEFAULT);

	$query = "INSERT INTO
					users(
						user_name,
						user_email,
						user_password
					)
				VALUES(
					$user_name,
					$user_email,
					'$user_password'
				)";


	$result = $pdo->quote($query);
	echo "<div class='alert alert-success'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			会員登録が完了しました</div>";
}

function login_user($user_email, $user_password, $pdo){

$user_email = $_POST['user_email'];;
$user_password = $_POST['user_password'];;

	$sql = "SELECT * FROM users WHERE user_email = :user_email";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':user_email', $user_email);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
//指定したハッシュがパスワードにマッチしているかチェック
if (password_verify($_POST['user_password'], $result['user_password'])) {
    //DBのユーザー情報をセッションに保存
    $_SESSION['user_id'] = $result['user_id'];
    $_SESSION['user_name'] = $result['user_name'];
    $msg = 'ログインしました。';
    $link = '<a href="index.php">ホーム</a>';
} else {
	$msg = 'エラーがあります。';
    $link = '<a href="login.php">戻る</a>';
}
}
?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
