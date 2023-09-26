 <?php
    session_start();
     $dsn='mysql:dbname=reviewsite;charset=utf8';
     $user='root';
     $pass='yukino1371';
     $dbh = new PDO($dsn,$user,$pass);

	 $sql =  "SELECT 
					 product_name
				 FROM 
					 products
				 WHERE 
					 product_id =  'product_name'";
	 
	$stmt = $dbh->prepare($sql);
    $stmt->bindValue(':user_email', $mail);
    $stmt->execute();
    $member = $stmt->fetch();

	 // クエリの実行と結果の取得
	 $query = "SELECT * FROM  products";
	 $stmt = $pdo->query($query);
	 
	 // 口コミデータをそのデータに紐づくユーザー情報を取得する
	 $product_id = $_POST['product_name'];
	 $reviews_data = fetch_reviews($product_id, $pdo);
	 // 口コミがある場合はループ処理を実行する
	 if ( $reviews_data !== false ) {
		 foreach ($reviews_data as $review_data ) {
		 ?>
	 
		 <div class="col-xs-12">
			 <h4>
				 名前：<?php echo $review_data['user_name']; ?>さん
				 （<?php echo $review_data['review_date']; ?>）
			 </h4>
			 <p><?php echo $review_data['review_comment']; ?></p>
		 </div>
	 
		 <?php } // End of foreach ?>
	 
	 <?php } // End of if ?>
	 
	 <?php
	 // 口コミの投稿
	 if ($_POST) {
	 
		 // 必須項目に情報が入っているかを確認する
		 if ( !empty( $_POST['add_review'] )) {
			 $add_review = $_POST['add_review'];
			 add_review($product_id, $add_review, $pdo);
		 } else {
			 echo "口コミを入力してください";
		 }
	  }
	 ?> 
?>


    <div class="container">
	<div class="row">
		 <div class="col-xs-12">
		 	<h3>口コミを投稿する</h3>
			<form action="input.php" method="post">
				<textarea name="review_comment" class="form-control" placeholder="口コミを記入してください。"></textarea>
				<button type="submit" class="btn btn-default">投稿する</button>
			</form>
		 </div>
	</div>
</div>