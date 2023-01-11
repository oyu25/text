<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>ろくまる農業</title>

</head>

<body>

    <?php

    try {

        $image_code = $_POST['code'];
        $image_title = $_POST["title"];
        $image_description = $_POST["description"];
        $image_file_name_old = $_POST['file_name_old'];
        $image_file_name = $_POST['file_name'];

        $image_code = htmlspecialchars($image_code, ENT_QUOTES, "UTF-8");
        $image_title = htmlspecialchars($image_title, ENT_QUOTES, "UTF-8");
        $image_description = htmlspecialchars($image_description, ENT_QUOTES, "UTF-8");

        $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
        $user = "root";
        $password = "";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = 'UPDATE image SET title=?,description=?,file=? WHERE code=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $image_title;
        $data[] = $image_description;
        $data[] = $image_file_name;
        $data[] = $image_code;
        $stmt->execute($data);

        if ($image_file_name_old != $image_file_name) {

            $dbh = null;

            if ($image_file_name_old != '') {
                unlink('./file/' . $image_file_name_old);
            }
        }
        print "修正しました。<br\>";
    } catch (Exception $e) {

        print "ただいま障害により大変ご迷惑をおかけしております。";
        exit();
    }
    ?>

    <a href="image_list.php">戻る</a>



</body>

</html>