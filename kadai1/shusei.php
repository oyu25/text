<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>修正</title>

</head>

<body>
    
    <?php
    try {
        $code = $_GET["staffcode"];
        $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
        $user = "root";
        $dbh = new PDO($dsn, $user);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "SELECT name FROM kojin WHERE code=?";
        $stmt = $dbh->prepare($sql);
        $data[] = $code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $name = $rec["kanji"];

        $dbh = null;
    } catch (Exception $e) {
        print "ただいま障害により大変ご迷惑をお掛けしております。";
        exit();
    }
    ?>

    個人情報修正<br />
    <br />
    個人情報コード<br />

    <?php print $code; ?>
    <br />
    <br />
    <form method="post" action="edit_check.php">
        <input type="hidden" name="code" value="<?php print $code; ?>">

        個人情報を入力してください。<br />
        <!-- <input type="text" name="name" style="width: 200px;"> <br /> -->

        氏名（漢字）を入力してください。<br />
        <input type="text" name="kanji" style="width: 200px"><br />
        ふりがなを入力してください。<br />
        <input type="text" name="hurigana" style="width: 200px"><br />
        郵便番号を入力してください。<br />
        <input type="text" name="yubin" style="width: 200px"><br />
        住所を入力してください。<br />
        <input type="text" name="jusho" style="width: 200px"><br />
        電話番号を入力してください。<br />
        <input type="text" name="denwa" style="width: 200px"><br />
        Eメールアドレスを入力してください。<br />
        <input type="text" name="Emaile" style="width: 200px"><br />
        <br />
        <input type="button" onclick="history.back()" value="戻る">
        <button type="submit">ＯＫ</button>
    </form>

</body>

</html>