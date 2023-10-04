<!-- 231004 チェックボックス　foreachループ if文とisset文-->

<?php
if (isset($_REQUEST['genre']) ) { {
	echo '<p>', $item, '</p>';
}
echo 'に関するお買い得情報をお送りさせて頂きます。';
} else {
    echo '';
}
?>


// if (isset($_REQUEST['mail'])) {
	// echo 'お買い得情報のメールをお送りさせて頂きます。';
// } else {
	// echo 'お買い得情報のメールはお送りさせて頂きません。';
// }
// 