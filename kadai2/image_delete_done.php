<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>課題2</title>
</head>

<body bgcolor="#f0ffff">
    <?php
    try {
        $image_code = $_POST["code"];
        $image_file_name = $_POST['file_name'];
        $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
        $user = "root";
        $password = "";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM image WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $data[] = $image_code;
        $stmt->execute($data);
        $dbh = null;

        if ($image_file_name != '') {
            unlink('./image/' . $image_file_name);
        }
    } catch (Exception $e) {

        print "ただいま障害により大変ご迷惑をおかけしております。";
        exit();
    }
    ?>
    削除しました。<br />
    <br />

    <a href="image_list.php">戻る</a>



</body>

</html>