<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
        <title>修正</title>

</head>

<body>
 
    <?php
    try {
        $staff_ID = $_GET["ID"];
        $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
        $user = "root";
        $dbh = new PDO($dsn, $user);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "SELECT simei,hurigana,yubinbangou,jushou,denwabangou,emeiru FROM kojin WHERE ID=?";
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_ID;
        $stmt->execute($data);

        // $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        // $staff_simei=$rec['simei'];
        // $staff_hurigana=$rec['hurigana'];
        // $staff_yubinbangou=$rec['yubinbangou'];
        // $staff_jushou=$rec['jushou'];
        // $staff_denwabangou=$rec['denwabangou'];
        // $staff_emeiru=$rec['emeiru'];
         

        $dbh = null;
    } catch (Exception $e) {
        print "ただいま障害により大変ご迷惑をお掛けしております。";
        exit();
    }
    ?>

    個人情報修正<br />
    <br />
    個人情報コード<br />
    <?php print $staff_ID; ?>
    <br />
    <br />
    <form method="post" action="staff_edit_check.php">
        <input type="hidden" name="code" value="<?php print $staff_ID; ?>">

        個人情報を入力してください。<br />
        <!-- <input type="text" name="name" style="width: 200px;"> <br /> -->
        氏名（漢字）を入力してください。<br />
        <input type="text" name="kanji" style="width: 200px"><br />
        ふりがなを入力してください。<br />
        <input type="text" name="hurigana" style="width: 200px"><br />
        郵便番号を入力してください。<br />
        <input type="text" name="yubin" style="width: 200px"><br />
        住所を入力してください。<br />
        <input type="text" name="jusho" style="width: 200px"><br />
        電話番号を入力してください。<br />
        <input type="text" name="denwa" style="width: 200px"><br />
        Eメールアドレスを入力してください。<br />
        <input type="text" name="Emaile" style="width: 200px"><br />
        <br />
        <input type="button" onclick="history.back()" value="戻る">
        <button type="submit">ＯＫ</button>
    </form>

</body>

</html>