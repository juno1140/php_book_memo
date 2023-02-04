<?php require ('dbconnect.php')?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Practice</h2>

    <?php
    $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
    $memos->execute(array($_REQUEST['id']));
    $memo = $memos->fetch();
    ?>

<article>
    <pre><?php print ($memo['memo']); ?></pre>
    <a href="update.php?id=<?php print($memo['id']) ?>">編集する</a>
    <a href="delete.php?id=<?php print($memo['id']) ?>">削除する</a>
    <a href="index.php">戻る</a>
</article>
</body>
</html>

