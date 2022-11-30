<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>個人情報</title>

</head>

<body>

    <?php

    try {
        $staff_name = $_POST['name'];
        $staff_kanji = $_POST['kanji'];
        //$staff_ID = $_POST['ID'];
        $staff_hurigana = $_POST['hurigana'];
        $staff_yubin = $_POST['yubin'];
        $staff_jusho = $_POST['jusho'];
        $staff_denwa = $_POST['denwa'];
        $staff_Emaile = $_POST['Emaile'];

        // $staff_ID = htmlspecialchars($staff_ID, ENT_QUOTES, 'UTF-8');
        $staff_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
        $staff_kanji = htmlspecialchars($staff_kanji, ENT_QUOTES, 'UTF-8');
        $staff_hurigana = htmlspecialchars($staff_hurigana, ENT_QUOTES, 'UTF-8');
        $staff_yubin = htmlspecialchars($staff_yubin, ENT_QUOTES, 'UTF-8');
        $staff_jusho = htmlspecialchars($staff_jusho, ENT_QUOTES, 'UTF-8');
        $staff_denwa = htmlspecialchars($staff_denwa, ENT_QUOTES, 'UTF-8');
        $staff_Emaile = htmlspecialchars($staff_Emaile, ENT_QUOTES, 'UTF-8');


        $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
        $user = "root";
        $dbh = new PDO($dsn, $user);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "INSERT INTO kojin(ID,shimei,hurigana,yubinbangou,jusho,denwabangou,emaire) VALUE(?,?,?,?,?,?,?)";
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_name;
        $data[] = $staff_kanji;
        //$data[] =$staff_ID ;
        $data[] = $staff_hurigana;
        $data[] = $staff_yubin;
        $data[] = $staff_jusho;
        $data[] = $staff_denwa;
        $data[] = $staff_Emaile;
        $stmt->execute($data);

        $dbh = null;

        print $staff_name;
        print $staff_kanji;
        print $staff_ID;
        print $staff_hurigana;
        print $staff_yubin;
        print $staff_jusho;
        print $staff_denwa;
        print $staff_Emaile;
        print "を追加しました。<br\>";
    } catch (Exception $e) {

        print "ただいま障害により大変ご迷惑をおかけしております。";
        print $e->getMessage();
        exit();
    }
    ?>

    <a href="kojin.php">戻る</a>



</body>

</html>