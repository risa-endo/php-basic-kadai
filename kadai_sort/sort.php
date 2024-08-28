<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    $array = [15, 4, 18, 23, 10];

    function sort_2way($array, $order) {
      if($order === 'asc') {
        sort($array);
        echo '昇順にソートします。<br>';

      } elseif ($order === 'desc') {
        rsort($array);
        echo '降順にソートします。<br>';
      }
      
      foreach($array as $num) {
          echo "{$num}<br>";
        }
      }
    sort_2way($array, 'asc');
    sort_2way($array, 'desc');
    ?>
  </p>
  
</body>
</html>