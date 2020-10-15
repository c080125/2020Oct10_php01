<?php
// ファイルを開く
    $openFile = fopen("./data/data.txt","r");

// テーブルセット
    echo '<table border=1px solid gray table-layout=200px>';
    echo '<tr>';
        echo '<td>' . '日時' . '</td>';
        echo '<td>' . 'お店の名前' . '</td>';
        echo '<td>' . '用途' . '</td>';
        echo '<td>' . 'お会計' . '</td>';
    echo '</tr>';

// ファイルから1行ずつ読み込む必要あり
    while ($str = fgets($openFile)){
        // echo nl2br($str);
        $arr = explode(" ",rtrim($str)); // rtrim??
        // echo ($str_base);
        // var_dump($arr);
        if ($arr != '') {
            echo '<tr>';
            foreach ($arr as $key => $value){
                echo '<td>' . $arr[$key] . '</td>';
            };
            echo '</tr>';
            //echo '</table>';
        };
    };

// $arrの4番目のpriceの合計値を出したい。けど、文字列になっている？
// 各配列からpriceだけを抽出（配列の3番目）→ 数値に置き直して → 合計して → テーブルに1行追加して、指定の位置に挿入
    // $str = fgets($openFile);
    // $arr = explode(" ",rtrim($str));
    // var_dump($arr);
    // echo ($arr);


    fclose($openFile);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>家計簿</h1>
    <button id="rtn"><a href="kadai_post.php">戻る</a></button>
</body>
</html>