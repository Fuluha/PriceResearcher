<!DOCTYPE html>
<html lang="ja">
<head>
<title>sample</title>
<meta http-equiv="content-type" charset="utf-8">
</head>
<body>
<h1>cardsテーブルの全レコードを出力</h1>
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
<table>
<tr><td>name</td><td>attack</td><td>defense</td><td>serial_number</td></tr>
<?php 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
<tr> 
	<td><?php print $row['name']; ?></td> 
	<td><?php print $row['attack']; ?></td>
    <td><?php print $row['defense']; ?></td>
    <td><?php print $row['serial_number']; ?></td>
</tr> 
<?php
    }
    $pdo = null;
?>
</table>
</body>
</html>

