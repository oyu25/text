<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
        <title>個人情報</title>

</head>
<link rel="stylesheet" href="add.CSS">

<body style="background:#f0fff0;">

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
        
        echo "<div class=kojin>";
        print "個人情報一覧<br/><br/>";
        echo"</div>";
        
        print "<form method='post' action='staff_branch.php'>";
        while (true) {
            $rec = $stmt->fetch(PDO::FETCH_BOTH);

            if ($rec == false) {
                break;
            }
            echo "<div class=ID>";
            print '<input type="radio" name="ID" value="' . $rec['ID'] . '">';
            print $rec["ID"];
            print "&nbsp";
            print $rec["simei"];
            print "<br/>";
            print "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            print $rec["hurigana"];
            print "<br/>";
            echo"</div>";
        }

        print '<button type="submit" name="disp">個人表示</button>';
        print '<button type="submit" name="add">新規登録</button>';
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