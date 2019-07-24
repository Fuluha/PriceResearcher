<?php

$dsn = 'mysql:host=localhost:8889; dbname=cards_development; charset=utf8';

$user = 'root';

$password = 'root';

try {
  // SQL作成	
  $sql = "INSERT INTO cards (name,attack,defense,serial_number) VALUES ('セイクリッド・ポルクス', '1700', '600'	,'78364470')";

  $dbh = new PDO($dsn,$user,$password);
  
  echo "接続に成功しました\n";
  
  $stmt = $dbh->query($sql);
  
  echo '登録完了しました';

} catch (PDOException $e){
    echo "接続に失敗しました: " . $e -> getMessage() . "\n";
    exit();
}

?>
