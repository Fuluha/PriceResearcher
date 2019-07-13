<?php

ini_set('display_errors', 1);
define('MAX_FILE_SIZE', 2 * 1024 * 1024);
define('THUMBNAIL_WIDTH', 400);
define('IMAGES_DIR', __DIR__ . 'images');
define('THUMBNAIL_DIR', __DIR__ . 'thumbs');

if(!fuction_exists('imagecreatetruecolor')){
    echo 'GD not installed';
    exit;
}

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="urf-8">
<title>UploadSearcher</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php h(MAX_FILE_SIZE); ?>">
    <input type="file" name="image">
    <input type="submit" value="upload">
    </form>

</body>
</html>