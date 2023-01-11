<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>ろくまる農業</title>

</head>

<body>
    <?php
    try {
        $image_code = $_GET["procode"];

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = "root";
        $password = "";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT title,description,file FROM image WHERE code=?";
        $stmt = $dbh->prepare($sql);
        $data[] = $image_code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $image_title = $rec["title"];
        $image_description = $rec["description"];
        $image_file_name_old = $rec['file'];

        $dbh = null;

        if ($image_file_name_old == '') {
            $disp_file = '';
        } else {
            $disp_file = '<img src="./file/' . $image_file_name_old . '">';
        }
    } catch (Exception $e) {
        print "ただいま障害により大変ご迷惑をお掛けしております。";
        exit();
    }
    ?>

    商品修正<br />
    <br />
    商品コード<br />
    <?php print $image_code; ?>
    <br />
    <form method="post" action="image_edit_check.php" enctype="multipart/form-data">
        <input type="hidden" name="code" value="<?php print $image_code; ?>">
        <input type="hidden" name="file_name_old" value="<?php print $image_file_name_old; ?>">
        商品名<br />
        <input type="text" name="title" style="width:200px" value="<?php print $image_title; ?>"><br />
        価格 <br />
        <input type="text" name="description" style="width:50px" value="<?php print $image_description; ?>">円<br />
        <br />
        <?php print $disp_file; ?>
        <br />
        画像を選んでください。<br />
        <input type="file" name="file" style="width:400px"><br />
        <input type="button" onclick="history.back()" value="戻る">
        <button type="submit">ＯＫ</button>
    </form>

</body>

</html>