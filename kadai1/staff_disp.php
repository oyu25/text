<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
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

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    $simei = $rec['simei'];
    $hurigana = $rec['hurigana'];
    $yubinbangou = $rec['yubinbangou'];
    $jushou = $rec['jushou'];
    $denwabangou = $rec['denwabangou'];
    $emeiru = $rec['emeiru'];


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
  echo "<br/>";
  print $simei;
  echo "<br/>";
  print $hurigana;
  echo "<br/>";
  print $yubinbangou;
  echo "<br/>";
  print $jushou;
  echo "<br/>";
  print $denwabangou;
  echo "<br/>";
  print  $emeiru;
  ?>


  <br />
  <br />
  <form>
    <input type="button" onclick="history.back()" value="戻る">

  </form>

</body>

</html>