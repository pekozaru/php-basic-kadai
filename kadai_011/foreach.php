<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>foreach文を使って連想配列の値とキーを出力しよう</title>
</head>

<body>
    <?php
    $products = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    // 連想配列$productsのキーと値を1つずつ順番に出力する
    foreach ($products as $key => $value) {
        echo "{$key}：{$value}<br>";
    }
    ?>
</body>

</html>