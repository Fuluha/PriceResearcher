<?php
ini_set('display_errors', "On");
function connect(){
    try {
        $dsn = 'mysql:host=localhost:8889; dbname=cards_development; charset=utf8';
        $user = 'root';
        $password = 'root';
        $dbh = new PDO($dsn, $user, $password);
        echo "接続に成功しました\n";
        return $dbh;
    } catch (PDOException $e) {
     echo "接続に失敗しました: " . $e -> getMessage() . "\n";
        exit();
    }
}
$dbh = connect();
require_once(dirname(__FILE__)."/phpQuery.php");
$html = file_get_contents("https://shuffle-cards.com/wcq-french-national-championship-2019-bf/");

$sql = "INSERT INTO test ('見出し2', '見出し3') VALUES (;
". phpQuery::newDocument($html)->find("h2")->text().", ".phpQuery::newDocument($html)->find("h3")->text().")";

$stmt = $dbh->query($sql);

?>