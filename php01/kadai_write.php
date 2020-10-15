<?php
// 受信確認
    $name = $_POST["name"];
    $goods = $_POST["goods"];
    $price = $_POST["price"];

// 時間取得
    $time = date ("Y/m/d-H:i:s");

// 記録用の文字配列作成
    $str = $time . ' ' . $name . ' ' . $goods . ' ' . $price;

// FILE操作書込
    $file = fopen("./data/data.txt","a");
    fwrite($file, $str. "\n");
    fclose($file);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>お店の名前：<?=$name?></p>
    <p>用途：<?=$goods?></p>
    <p>お会計：<?=$price?></p>
    <button id="rtn"><a href="kadai_post.php">戻る</a></button>

</body>
</html>