<!DOCTYPE html>
<html lang="ja">

<head>
  <mate charset="utf-8">
    <title>削除</title>

</head>

<body>

  <?php

  try {
    $staff_code = $_POST['code'];

    $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
    $user = "root";
    $dbh = new PDO($dsn, $user);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM kojin WHERE ID=?";
    $stmt = $dbh->prepare($sql);
    $data[] = $staff_code;

    $stmt->execute($data);

    $dbh = null;
  } catch (Exception $e) {

  
  }
  ?>

  <!-- <button type="button" onclick="history.back()" href=" staff_list.php">戻る</button> -->

  削除しました。<br/>
  <br/>
  <a href="staff_list.php">戻る</a>



</body>

</html>