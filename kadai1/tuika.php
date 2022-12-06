<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>追加</title>

</head>

<body>

    <?php

    try {
        // $name = $_POST['name'];
        $kanji = $_POST['kanji'];
        //$ID = $_POST['ID'];
        $hurigana = $_POST['hurigana'];
        $yubin = $_POST['yubin'];
        $jusho = $_POST['jusho'];
        $denwa = $_POST['denwa'];
        $Emaile = $_POST['Emaile'];

        // $ID = htmlspecialchars(ID, ENT_QUOTES, 'UTF-8');
        // $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $kanji = htmlspecialchars($kanji, ENT_QUOTES, 'UTF-8');
        $hurigana = htmlspecialchars($hurigana, ENT_QUOTES, 'UTF-8');
        $yubin = htmlspecialchars($yubin, ENT_QUOTES, 'UTF-8');
        $jusho = htmlspecialchars($jusho, ENT_QUOTES, 'UTF-8');
        $denwa = htmlspecialchars($denwa, ENT_QUOTES, 'UTF-8');
        $Emaile = htmlspecialchars($Emaile, ENT_QUOTES, 'UTF-8');


        $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
        $user = "root";
        $dbh = new PDO($dsn, $user);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "INSERT INTO kojin(simei,hurigana,yubinbangou,jushou,denwabangou,emeiru) VALUE(?,?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        // $data[] = $name;
        $data[] = $kanji;
        $data[] = $hurigana;
        $data[] = $yubin;
        $data[] = $jusho;
        $data[] = $denwa;
        $data[] = $Emaile;
        $stmt->execute($data);

        $dbh = null;

        // print $name;
        print $kanji;
        print "<br/>";
        // print $ID;
        print $hurigana;
        print "<br/>";
        print $yubin;
        print "<br/>";
        print $jusho;
        print "<br/>";
        print $denwa;
        print "<br/>";
        print $Emaile;
        print "<br/>";
        print "を追加しました。<br\>";
        print "<br/><br/>";
    } catch (Exception $e) {

        print "ただいま障害により大変ご迷惑をおかけしております。";
        print $e->getMessage();
        exit();
    }
    ?>
    <button type="button" onclick="history.back()" href=" kojinlist.php">戻る</button>
    <!-- <a href="kojin.php">戻る</a> -->



</body>

</html>