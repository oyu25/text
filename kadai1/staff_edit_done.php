<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>修正</title>

</head>

<body>

    <?php

    try {
        // $name = $_POST['name'];
        $kanji = $_POST['kanji'];
        // $code = $_POST['code'];
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
        // $data[] = $staff_ID;

        $stmt->execute($data);

        $dbh = null;
    } catch (Exception $e) {

        print "修正しました。";
        print $e->getMessage();
        exit();
    }
    ?>

    <!-- <button type="button" onclick="history.back()" href=" staff_list.php">戻る</button> -->

    <a href="staff_list.php">戻る</a>



</body>

</html>