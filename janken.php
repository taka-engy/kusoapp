<!-- 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 -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo "Helloworld<br>";
  echo "じゃんけんしよう<br>";
  $a = rand(1,3);
  if($a == 1){
    echo "<img src='/gu-choki-pa/gu.png'>";
  } elseif($a == 2){
    echo "<img src='/gu-choki-pa/choki.png'>";
  } else {
    echo "<img src='/gu-choki-pa/pa.png'>";
  }
  ?>
</body>
</html>