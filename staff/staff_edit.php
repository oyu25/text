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

    スタッフ修正<br />
    <br />
    スタッフコード<br />
    <?php print $code; ?>
    <br />
    <br />
    <form method="post" action="edit_check.php">
        <input type="hidden" name="code" value="<?php print $code; ?>">
        スタッフ名<br />
        <input type="text" name="name" style="width:200px" value="<?php print $name; ?>"><br />

        パスワードを入力してください。<br />
        <input type="password" name="pass" style="width:100px"><br />
        パスワードをもう1度入力してください。<br />
        <input type="password" name="pass2" style="width:100px"><br />
        <br />
        <input type="button" onclick="history.back()" value="戻る">
        <button type="submit">ＯＫ</button>
    </form>

</body>

</html>