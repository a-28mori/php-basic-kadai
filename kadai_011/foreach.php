<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編11章課題</title>
</head>

<body>
   <p>
       <?php
        $personal_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

       //  配列$personal_dataのインデックスと値を1つずつ順番に出力する
        foreach ($personal_data as $index => $value) {
            echo "{$index}：{$value}<br>";
        }
       ?>
   </p>
</body>
</html>
