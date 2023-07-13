<?php
    session_start();
        $dsn='mysql:dbname=reviewsite;charset=utf8';
        $user='root';
        $pass='yukino1371';
        $dbh = new PDO($dsn,$user,$pass);

        //フォームからの値をそれぞれ変数に代入
        if(isset($_POST['users'])) {
        $id = $_POST['user_id'];
        $name = $_POST['user_name'];
        $mail = $_POST['user_email'];
        password_hash($_POST['user_password'], PASSWORD_DEFAULT);

        $sql = "SELECT * FROM users WHERE user_email = :user_email";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':user_email', $mail);
        $stmt->execute();
        $member = $stmt->fetch();

        //指定したハッシュがパスワードにマッチしているかチェック
        if (!($member === false) && ($member['user_password'] === $password) ) {
            //DBのユーザー情報をセッションに保存
            $_SESSION['user_id'] = $member['user_id'];
            $_SESSION['user_name'] = $member['user_name'];
            $msg = 'ログインしました。';
            $link = '<a href="input.php">ホーム</a>';
        } else {
            $msg = 'メールアドレスもしくはパスワードが間違っています。';
            $link = '<a href="signupform.php">戻る</a>';
        }
    }
?>

<form action="input.php" method="post">
<p>メールアドレスを入力：<input type="text" name="user_email" required></p>
<p>パスワードを入力：<input type="password" name="user_password" required></p>
<p><input type="submit" value="ログイン"></p>
</form>