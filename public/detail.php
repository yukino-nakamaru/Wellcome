<?php
include '../app/config/database.php';
include '../public/view/header.php';
include '../app//functions/review.php';
?>

<div class="col-xs-12">
	<h2>体幹 スキンケア</h2>
	<p>これを使うと、美男子からモテます！すごい化粧水です！モテるだけじゃなく肌が健康にもなります！すごいです！</p>
	<hr>
</div>

<?php

$query =  "SELECT 
				product_name, 
				product_id 
			FROM 
				products 
			WHERE 
				product_id";

$result = $pdo->quote($query);

// クエリの実行と結果の取得
$query = "SELECT * FROM users";
$stmt = $pdo->query($query);

// 口コミデータをそのデータに紐づくユーザー情報を取得する
$product_id = $_GET['product_id'];


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

<div class="container">
	<div class="row">
		 <div class="col-xs-12">
		 	<h3>口コミを投稿する</h3>
			<form action="GET">
				<textarea name="add_review" class="form-control" placeholder="口コミを記入してください。"></textarea>
				<button type="submit" class="btn btn-default">投稿する</button>
			</form>
		 </div>
	</div>
</div>

<?php
include '../public/view/footer.php';