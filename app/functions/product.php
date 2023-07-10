<?php

function fetch_products($pdo) {

	// productsのDBを選択する
	 $query = "SELECT
					 product_id,
					 product_name,
					 product_description
	 			FROM
	 				products";

	$result = $pdo->quote($query);

	// クエリの実行と結果の取得
	$query = "SELECT * FROM products";
	$stmt = $pdo->query($query);

	if( !$result ) {
		// エラーが発生した場合
		exit;
	} else {
		// カテゴリーが存在しない場合
		if($row = $stmt->fetch(PDO::FETCH_ASSOC) == 0 ){
			exit;
		}else {

			// エラーがない場合
			// 連想配列にデータを格納する
			$products_data = array();
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				$products_data[] = $row;
			}

			return $products_data;
		}
	}

}

// 口コミを投稿する
function add_review($product_id, $add_review, $pdo) {
	$product_id = $pdo->quote($product_id);
	$add_review = $pdo->quote($add_review);
	$user_id = $_SESSION['user'];

	$query = "INSERT INTO
					reviews(
						review_comment,
						review_date,
						review_product_id,
						review_user_id
					)
				VALUES (
					'$add_review',
					NOW(),
					$product_id,
					$user_id
				)";

	$result = $pdo->quote($query);

	if(!$result) {
		echo 'エラーが発生しました。';
	} else {
		echo "口コミを投稿しました。";
	}

}