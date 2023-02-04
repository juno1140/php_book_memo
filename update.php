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
    $id = $_REQUEST['id'];
    $memos = $db->prepare('SELECT * FROM memos WHERE id=?');
    $memos->execute(array($id));
    $memo = $memos->fetch();
    ?>

    <form action="update_do.php" method="post">
        <input type="hidden" name="id" value="<?php print($id) ?>">
        <textarea name="memo" id="" cols="50" rows="10" placeholder="自由に入力"><?php print($memo['memo']) ?></textarea><br>
        <button type="submit">登録する</button>
    </form>
</body>
</html>

