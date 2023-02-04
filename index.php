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

    <form action="input_do.php" method="post">
        <textarea name="memo" id="" cols="50" rows="10" placeholder="自由に入力"></textarea><br>
        <button type="submit">登録する</button>
    </form>
        <?php
//        $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="ばなな", price=110, keyword="缶詰,黄色,甘い", sales=20, created="2018-01-23", modeified="2018-01-23"');
        //        $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="ばなな", price=110, keyword="缶詰,黄色,甘い", sales=20, created="2018-01-23", modeified="2018-01-23"');
        if(isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])){
            $page = $_REQUEST['page'];
        } else {
            $page = 1;
        }
        $start = 5 * ($page - 1);
        $memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ? ,5');
        $memos->bindParam(1, $start, PDO::PARAM_INT);
        $memos->execute();
        ?>

<article>
    <?php while ($memo = $memos->fetch()): ?>
    <p>
        <a href="memo.php?id=<?php print($memo['id']); ?>">
            <?php print(mb_substr($memo['memo'], 0, 20)); ?>
        </a>
    </p>
    <time><?php print($memo['created']); ?></time>
        <br>
    <?php endwhile; ?>
    <?php if($page>=2): ?>
    <a href="index.php?page=<?php print($page+-1); ?>"><?php print ($page-1)?>ページ目へ</a>
    <?php endif; ?>

    <?php
        $counts = $db->query('SELECT COUNT(*) AS cnt FROM memos');
        $count = $counts->fetch();
        $max_page = ceil($count['cnt'] / 5);
        if ($page < $max_page):
    ?>

    <a href="index.php?page=<?php print($page+1); ?>"><?php print ($page+1)?>ページ目へ</a>

    <?php endif; ?>
</article>
</body>
</html>

