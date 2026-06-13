<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Step3. 独自のソート関数を作る
        function sort_2way($array, $order) {
            // $orderがTRUE（昇順）かFALSE（降順）かで処理を分岐する
            if ($order === true) {
                echo '昇順にソートします。<br>';
                sort($array); // PHPの標準関数で昇順ソート
            } else {
                echo '降順にソートします。<br>';
                rsort($array); // PHPの標準関数で降順ソート
            }

            // foreach文で配列の要素を1つずつ表示する
            foreach ($array as $num) {
                echo "{$num}<br>";
            }
        }

        // Step4. ソート対象の配列を用意する
        $nums = [15, 4, 18, 23, 10];

        // Step5. 独自のソート関数を呼び出す（昇順）
        sort_2way($nums, true);

        // 分かりやすくするために改行を入れる
        echo '<br>';

        // 独自のソート関数を呼び出す（降順）
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>