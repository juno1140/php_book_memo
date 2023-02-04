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

    <pre>
        <?php
//        $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="ばなな", price=110, keyword="缶詰,黄色,甘い", sales=20, created="2018-01-23", modeified="2018-01-23"');
        $statement = $db->prepare('INSERT INTO memos SET memo=?, created=NOW()');
        $statement->execute(array($_POST['memo']));
        ?>
    </pre>
    <a href="index.php">戻る</a>
</body>
</html>

