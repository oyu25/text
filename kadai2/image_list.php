<!DOCTYPE html>
<html lang="ja">

<head>
    <link rel="stylesheet" href="image_list.css">
    <meta charset="utf-8">

    <title>課題２</title>
    <h1>画像一覧</h1>
</head>


<body bgcolor="#f0ffff">
    <div class="font">
        <table border="1" style="border-collapse: collapse" cellpadding="10" align="center">

            <td></td>
            <td>ID</td>
            <td>タイトル</td>
            <td>サムネタイトル</td>
    </div>



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
    ?>
            <div>
                <tr>
                    <td><?php print '<input type="radio" name="imagecode" value="' . $rec['id'] . '">'; ?></td>
                    <td><?php print $rec['id'] . '<br\>'; ?></td>
                    <td><?php print $rec['title'] . '<br\>'; ?></td>

                    <td><?php print '<img class="images" src="./image/' . $rec['file'] . '">'; ?></td>

                </tr>
            </div>
    <?php
        }
    } catch (Exception $e) {

        print "ただいま障害により大変ご迷惑をおかけしております。";
        print "<br/>" . $e->getMessage();
        exit();
    }
    ?>
    </table>

    <?php
    echo "<div align='center'>";
    print '<button type="submit" name="disp">参照</button>';
    print '<button type="submit" name="add">追加</button>';
    print '<button type="submit" name="delete">削除</button>';
    print "</form>";
    echo "<div/>"
    ?>

</body>


</html>