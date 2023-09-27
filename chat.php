<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>何かお話ししてください</p>
    <form  method="post">
      <input type="text" name="a">
      <input type="submit" value="送信するよ">
    </form>
    <?php
    $f = fopen("chat.txt","at");
    fwrite($f,$_POST["a"]."\n");
    fclose($f);
    readfile("chat.txt");
    ?>
    <img src="neko.png">
</body>
</html>