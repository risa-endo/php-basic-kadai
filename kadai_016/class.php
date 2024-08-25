<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price(int $price) {
        $this->price = $price;
      }

      public function getPrice() {
        return $this->price;
      }
    }

    $food = new Food('potato', 250);

    print_r($food);
    echo '<br>';
    ?>
  </p>
  <p>
    <?php
    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height(int $height) {
        $this->height = $height;
      }

      public function getHeight() {
        return $this->height;
      }
    }

    $animal = new Animal('dog', 60, 5000);

    print_r($animal);


    echo '<br>';
    echo $food->getPrice(). '<br>';
    echo $animal->getHeight();
    ?>
  </p>
  
</body>
</html>