<!DOCTYPE html>
<html lang="ja">

<head>
  <mate charset="utf-8">
    <title>参照</title>

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

  個人情報参照<br />
  <br />
  スタッフコード<br />
  <?php print $staff_ID;
  ?>
  <br />
  <br />
  <form>
    <input type="button" onclick="history.back()" value="戻る">

  </form>

</body>

</html>