<?php
$dsn      = 'mysql:dbname=mysql_test;host=mysql';
$user     = 'docker';
$password = 'docker';

// DBへ接続
try{
    $dbh = new PDO($dsn, $user, $password);

    // クエリの実行
    $query = "SELECT * FROM users";
    $stmt = $dbh->query($query);

    // 表示処理
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row["name"] . "\n";
    }

}catch(PDOException $e){
    print("データベースの接続に失敗しました".$e->getMessage());
    die();
}