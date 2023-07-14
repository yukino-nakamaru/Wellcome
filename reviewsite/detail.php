<?php
    session_start();
     $dsn='mysql:dbname=reviewsite;charset=utf8';
     $user='root';
     $pass='yukino1371';
     $dbh = new PDO($dsn,$user,$pass);

    if(isset($_POST['users'])) {
        $id = $_POST['user_id'];
        $name = $_POST['user_name'];
        $mail = $_POST['user_email'];
        $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

        if(isset($_POST['products'])) {
            $id = $_POST['product_id'];
            $name = $_POST['product_name'];
            $description = $_POST['product_description'];
            $cat = $_POST['product_cat'];

            if(isset($_POST['reviews'])) {
                $id = $_POST['review_id'];
                $comment = $_POST['review_comment'];
                $date = $_POST['review_date'];
                $product_id = $_POST['review_product_id'];
                $user_id = $_POST['review_user_id'];

                $sql = "SELECT * FROM users ";
                $stmt = $dbh->prepare($sql);
                $stmt->bindValue(':user_id', $id);
                $stmt->bindValue(':user_name', $name);
                $stmt->bindValue(':user_email', $mail);
                $stmt->bindValue(':user_password', $password);
                $stmt->execute();
                $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $sql = "SELECT * FROM products ";
                $stmt = $dbh->prepare($sql);
                $stmt->bindValue(':product_id', $id);
                $stmt->bindValue(':product_name', $name);
                $stmt->bindValue(':product_description', $description);
                $stmt->bindValue(':product_cat', $cat);
                $stmt->execute();
                $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

                $sql = "SELECT * FROM reviews ";
                $stmt = $dbh->prepare($sql);
                $stmt->bindValue(':review_id', $id);
                $stmt->bindValue(':review_comment', $comment);
                $stmt->bindValue(':review_date', $date);
                $stmt->bindValue(':review_product_id', $product_id);
                $stmt->bindValue(':review_user_id', $user_id);
                $stmt->execute();
                $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

            }
        }
    }
?>

<div class="col-xs-12">
		<h4>
			名前：<?php echo $name['user_name']; ?>さん
			（<?php echo $date['review_date']; ?>）
		</h4>
		<p><?php echo $date['review_comment']; ?></p>
	</div>
