<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>ろくまる農業</title>

</head>

<body>

    <?php

    try {
        $code = $_POST["code"];
        $name = $_POST["name"];
        $pass = $_POST["pass"];

        $name = htmlspecialchars($name, ENT_QUOTES, "UTF-8");
        $pass = htmlspecialchars($pass, ENT_QUOTES, "UTF-8");

        $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
        $user = "root";
        $password = "";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE mst_staff SET name=?,password=? WHERE code=?";
        $stmt = $dbh->prepare($sql);
        $data[] = $name;
        $data[] = $pass;
        $data[] = $code;
        $stmt->execute($data);

        $dbh = null;
    } catch (Exception $e) {

        print "ただいま障害により大変ご迷惑をおかけしております。";
        exit();
    }
    ?>
    修正しました。<br />
    <br />

    <a href="list.php">戻る</a>



</body>

</html>