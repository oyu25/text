<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
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

    個人情報削除<br />
    <br />
    個人情報コード<br />
    <?php print $staff_ID; ?>
    <br />
    この個人情報を削除してもよろしいですか？</br>
    <br />
    <form method="post" action="staff_delete_done.php">
        <input type="hidden" name="code" value="<?php print $code; ?>">
        <input type="button" onclick="history.back()" value="戻る">
        <button type="submit">ＯＫ</button>
    </form>

</body>

</html>