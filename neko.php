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
    $moji = htmlspecialchars($_POST["a"],ENT_QUOTES);
    print isset($_POST["a"])&&$_POST["a"]!=""?$moji."にゃあ":"なにかしゃべって";
    ?>
    <img src="neko.png">
</body>
</html>