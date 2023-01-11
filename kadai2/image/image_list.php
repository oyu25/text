<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>課題２</title>

</head>

<body>

    <?php
    try {
        $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
        $user = "root";
        $password = "";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT id,title,description FROM image WHERE 1";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $dbh = null;

              print "<form method='post' action='image_branch.php'>";
        while (true) {
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($rec == false) {
                break;
            }
            print '<input type="radio" name="procode" value="' . $rec['code'] . '">';
            print $rec["name"].'---';
            print $rec['description'];
            print "<br/>";
        }
        print'<button type="submit" name="disp">参照</button>';
        print'<button type="submot" name="add">追加</button>';
        print '<button type="submit" name="edit">修正</button>';
        print '<button type="submit" name="delete">削除</button>';
        print "</form>";
    } catch (Exception $e) {

        print "ただいま障害により大変ご迷惑をおかけしております。";
        print"<br/>" .$e->getMessage();
        exit();
    }
    ?>

</body>

</html>