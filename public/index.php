<?php
include '../app/config/database.php';
include '../public/view/header.php';
include '../app/functions/product.php';
?>

<div class="col-xs-12">
	<h2>体幹 スキンケア</h2>
	<p>これを使うと、美男子からモテます！すごい化粧水です！モテるだけじゃなく肌が健康にもなります！すごいです！</p>
	<a href="detail.php">&raquo; 口コミを見る</a>
	<br><br>
</div>
<div class="col-xs-12">
	<h2>薬用クリアローション</h2>
	<p>これを使うと、くすみ肌が明るくなります！すごい化粧水です！すごいです！</p>
	<a href="detail.php">&raquo; 口コミを見る</a>
	<br><br>
</div>
<div class="col-xs-12">
	<h2>クリアエッセンスマスク</h2>
	<p>これを使うと、肌に透明感が出ます！すごいフェイスマスクです！肌に透明感が出ると幸せですよね！すごいです！</p>
	<a href="detail.php">&raquo; 口コミを見る</a>
	<br><br>
</div>


<?php
// 商品一覧データを取得
$products_data = fetch_products($mysqli);
foreach ($products_data as $product_data ) {
?>

<div class="col-xs-12">
	<h2><?php echo $product_data['product_name']; ?></h2>
	<p><?php echo $product_data['product_description']; ?></p>
	<a href="detail.php?id=<?php echo $product_data['product_id'] ?>">&raquo; 口コミを見る</a>
	<br><br>
</div>

<?php  } // End of foreach ?>
<?php
include '../public/view/footer.php';