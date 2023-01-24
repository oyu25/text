<!DOCTYPE html>
<html lang="ja">

<head>

    <mate charset="utf-8">

        <title>課題２</title>
        <h1>画像一覧</h1>
</head>

<body>

    <link rel="stylesheet" href="image_list.css">

    <?php
    try {
        $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
        $user = "root";
        $password = "";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT id,title,description,file FROM image WHERE 1";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $dbh = null;

        print "<form method='post' action='image_branch.php'>";
        while (true) {
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($rec == false) {
                break;
            }
            echo '<table border="1" style="border-collapse: collapse" align="center">';

            echo '<tr>';
            echo '<th>';
            print '<input type="radio" name="imagecode" value="'  . $rec["id"] .   '">';
            echo '</th>';

            echo '<th>';
            print $rec["id"];
            echo '</th>';

            echo '<th>';
            print $rec["title"];
            echo '</th>';
            echo '</tr>';
            echo '</table>';


            print "<br/>";
        } ?>
        
        <img src="$disp_file" >

    <?php
        print '<button type="submit" name="disp">参照</button>';
        print '<button type="submit" name="add">追加</button>';
        print '<button type="submit" name="delete">削除</button>';
        print "</form>";
    } catch (Exception $e) {

        print "ただいま障害により大変ご迷惑をおかけしております。";
        print "<br/>" . $e->getMessage();
        exit();
    }
    ?>

</body>

</html>