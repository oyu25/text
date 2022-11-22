<!DOCTYPE html>
<html lang="ja">

<head>
  <mate charset="utf-8">
    <title>個人情報</title>

</head>

<body>
  <?php
  $staff_ID = $_POST['ID'];
  $staff_name = $_POST['name'];
  $staff_kanji = $_POST['kanji'];
  $staff_hurigana = $_POST['hurigana'];
  $staff_yubin = $_POST['yubin'];
  $staff_jusho = $_POST['jusho'];
  $staff_denwa = $_POST['denwa'];
  $staff_Emaile = $_POST['Emaile'];

  $staff_ID = htmlspecialchars($staff_ID, ENT_QUOTES, 'UTF-8');
  $staff_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
  $staff_kanji = htmlspecialchars($staff_kanji, ENT_QUOTES, 'UTF-8');
  $staff_hurigana = htmlspecialchars($staff_hurigana, ENT_QUOTES, 'UTF-8');
  $staff_yubin = htmlspecialchars($staff_yubin, ENT_QUOTES, 'UTF-8');
  $staff_jusho = htmlspecialchars($staff_jusho, ENT_QUOTES, 'UTF-8');
  $staff_denwa = htmlspecialchars($staff_denwa, ENT_QUOTES, 'UTF-8');
  $staff_Emaile = htmlspecialchars($staff_Emaile, ENT_QUOTES, 'UTF-8');

  if ($staff_name == '') {
    print '個人情報が入力されていません。<br/>';
  } else {
    print '個人情報:';
    print $staff_name;
    print '<br/>';
  }

  if ($staff_ID == '') {
    print 'IDが入力されていません。<br/>';
  }

  if ($staff_kanji =='') {
    print '氏名（漢字）が入力されていません。<br/>';
  }

  if ($staff_hurigana== '') {
    print 'ふりがなが入力されていません。<br/>';
  }

  if ($staff_yubin == '') {
    print '郵便番号が入力されていません。<br/>';
  }

  if ($staff_jusho == '') {
    print '住所が入力されていません。<br/>';
  }

  if ($staff_denwa == '') {
    print '電話番号が入力されていません。<br/>';
  }

  if ($staff_Emaile == '') {
    print 'Eメールアドレスが入力されていません。<br/>';
  }


  if ($staff_name == '' || $staff_ID == '' || $staff_kanji == '' ||$staff_hurigana == '' ||$staff_yubin == '' ||$staff_jusho == '' ||$staff_denwa == ''|| $staff_Emaile == '' ) {
    print '<form>';
    print '<button type="button" onclick="history.back()戻る</button>';
    print '</form>';
  } else {

    //ここから
    $staff_pass = md5($staff_pass);
    print '<form method="post" action="shinki.php">';
    print '<input type="hidden" name="name"value="' . $staff_name . '">';
    print '<input type="hidden" name="pass"value="' . $staff_pass . '">';
    print '<br/>';
    print '<button type="button" onclick="history.back()">戻る</button>';
    print '<button type="submit">ＯＫ</button>';
    print '</form>';
  }
  ?>

</body>

</html>