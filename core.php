<!DOCTYPE html>
<html lang="ja">
<head>
<title>sample</title>
<meta http-equiv="content-type" charset="utf-8">
</head>
<body>
<h1>cardsテーブルの全レコードを出力</h1>
<?php
require "config.php";
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

