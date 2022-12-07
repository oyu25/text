<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>個人情報</title>

</head>

<body>

    <?php
    try {

        $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
        $user = "root";
        $dbh = new PDO($dsn, $user);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT ID,simei,hurigana FROM kojin WHERE 1";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $dbh = null;

        print "個人情報一覧<br/><br/>";

        print "<form method='post' action='staff_branch.php'>";
        while (true) {
            $rec = $stmt->fetch(PDO::FETCH_BOTH);

            if ($rec == false) {
                break;
            }
            print '<input type="radio" name="ID" value="' . $rec['ID'] . '">';
            print $rec["ID"];
            print $rec["simei"];
            print "<br/>";
            // print $rec["hurigana"];
            print "<br/>";
        }
        print '<button type="submit" name="disp">個人表示</button>';
        print '<button type="submot" name="add">新規登録</button>';
        print '<button type="submit" name="edit">データ修正</button>';
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