<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Step2. Foodクラスを作成する
        class Food {
            // プロパティ（属性）を定義
            private $name;
            private $price;

            // コンストラクタ（初期化の部屋）
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // priceの値を出力するメソッド（命令）
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        // Step2. Animalクラスを作成する
        class Animal {
            // プロパティ（属性）を定義
            private $name;
            private $height;
            private $weight;

            // コンストラクタ（初期化の部屋）
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // heightの値を出力するメソッド（命令）
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        // Step3. インスタンスを作成する（任意の値を渡す）
        $food = new Food('potato', 250);
        $animal = new Animal('dog', 60, 5000);

        // print_r関数を使ってそれぞれのインスタンスを出力する
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';

        // Step4. メソッドにアクセスして実行する
        $food->show_price();
        $animal->show_height();
        ?>
    </p>
</body>

</html>