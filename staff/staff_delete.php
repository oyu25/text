<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>ろくまる農業</title>

</head>

<body>
    <?php
    try {
        $code = $_GET["staffcode"];

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = "root";
        $password = "";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT name FROM mst_staff WHERE code=?";
        $stmt = $dbh->prepare($sql);
        $data[] = $code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $name = $rec["name"];

        $dbh = null;
    } catch (Exception $e) {
        print "ただいま障害により大変ご迷惑をお掛けしております。";
        exit();
    }
    ?>

    スタッフ削除<br />
    <br />
    スタッフコード<br />
    <?php print $code; ?>
    <br />
    スタッフ名<br/>
    <?php print $name;?>
    <br/>
    このスタッフは削除してよろしいですか?<br/>
    <br />
    <form method="post" action="delete_done.php">
        <input type="hidden" name="code" value="<?php print $code ?>">
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">ＯＫ</button>
    </form>

</body>

</html>