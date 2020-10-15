<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="kadai_write.php" method="post">
        <p>お店の名前：<input type="text" name="name" id="name" size="20"></p>
        <p>用途：<input type="text" name="goods" id="goods" size="20"</p>
        <p>お会計：<input type="text" name="price" id="price" size="20"</p>
        <!-- <p>Email：<input type="email" name="mail" id="mail" size="20"</p>
        <p>出身地：<input type="text" name="pref" id="pref" size="20"</p> -->
        <p><input type="submit" value="送信"></p>
        <p><input type="submit" value="100件登録" id="auto"></p>
    </form>
    
    

</body>

<!-- 以下php -->

<?php
// autoの設定を作る=>サーバーから呼び出してくるようにしないといけない？あるいはphp上でjsっぽく動作させるには？
    // $i = 1;
    // while($i=100){
    //     echo 'hello';
    //     $i += 1;
    // };




?>

<!-- 以上php -->

</html>