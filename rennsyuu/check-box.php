<!-- 231004 チェックボックス　foreachループ -->

<p>ご興味のある商品ジャンルを全て選んでください。</p>
<form action="check-box-output.php" method="post">
<?php
$genre=array(
    0=>'カメラ',
    1=>'パソコン', 
    2=>'時計', 
    3=>'家電', 
    4=>'書籍', 
    5=>'文房具', 
    6=>'食品');
foreach ($genre as $key => $item) {
	echo '<p>';
	echo '<input type="checkbox" name="genre[]" value="', $item, '">';
	echo $item;
	echo '</p>';
}
?>
<p><input type="submit" value="確定"></p>
</form>