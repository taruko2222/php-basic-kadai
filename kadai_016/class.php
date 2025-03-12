<?php

    class Food {
    private $name;
    private $price;

    // price値出力 show_priceメソッド作成
    public function show_price() {
        echo $this->price . '<br>';
    }

    // プロパティに値を代入するコンストラクタ作成
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
    }

    class Animal {
    private $name;
    private $height;
    private $weight;

    // height値出力 show_heightメソッドを作成
    public function show_height() {
        echo $this->height . '<br>';
    } 

    // プロパティに値を代入するコンストラクタ作成
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    }

    // インスタンスを作成
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    // インスタンス$foodと$animalのプロパティ出力
    print_r($food);
    print_r($animal);

    // メソッド実行
    $food->show_price();
    $animal->show_height();
?>