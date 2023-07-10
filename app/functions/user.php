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
?>

function login_user($user_email, $user_password,$pdo) {

	$user_email = $pdo->quote($user_email);
	$user_password = $pdo->quote($user_password);

	$query = "SELECT INTO
					user_email,
					user_password
				FROM
					users
				WHERE
					user_email = '$user_email'";

	$result = $pdo->quote($query);

	

	// パスワード(暗号化済み）とユーザーIDの取り出し
	while ($row = $result->pdo::fetch()) {
		$db_hashed_pwd = $row['user_password'];
		$user_id = $row['user_id'];
	}

	// ハッシュ化されたパスワードがマッチするかどうかを確認
	if (password_verify($user_password, $db_hashed_pwd)) {
		$_SESSION['user'] = $user_id;
		echo "<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				ログインが完了しました</div>";
	} else {
		echo "エラーが発生しました";
	}

}
?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
