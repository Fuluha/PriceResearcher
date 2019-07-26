<?php
$dsn = 'mysql:host=localhost:8889; dbname=cards_development; charset=utf8';

$user = 'root';

$password = 'root';

try {
    $dbh = new PDO($dsn,$user,$password);
    echo "接続に成功しました\n";
    $sql = 'SELECT * FROM cards';
    $stmt = $dbh->query($sql);
} catch (PDOException $e){
    echo "接続に失敗しました: " . $e -> getMessage() . "\n";
    exit();
}
?>