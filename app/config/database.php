<?php
//mysqlアカウント
$DB['host'] = 'localhost';
$DB['user'] = 'root';
$DB['pass'] = 'yukino1371';
$DB['name'] = 'kuchikomi_new';

//接続
$dsn = "mysql:dbname={$DB['name']};host={$DB['host']}";
$pdo = new PDO($dsn,$DB['user'],$DB['pass']);
$pdo->query('SET NAMES utf8');



/*
//SQL文をリセット
$stmt = $pdo ->prepare('SELECT * FROM users');

//SQL文を実行
$stmt->execute();

//ループして1レコードずつ取得
foreach ($stmt as $row){
    var_dump($row);
}*/

?>
