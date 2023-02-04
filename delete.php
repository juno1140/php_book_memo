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
    if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $statement = $db->prepare('DELETE FROM memos WHERE id=?');
        $statement->execute(array($id));
    }
    ?>

    <pre>
        <p>メモを削除しました</p>
    </pre>
<p>
    <a href="index.php">戻る</a>
</p>
</body>
</html>

