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
        $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=? ');
        $statement->execute(array($_POST['memo'], $_POST['id']));
        ?>
        <p>メモの内容を変更しました</p>
        <a href="index.php">戻る</a>
    </pre>
</body>
</html>

