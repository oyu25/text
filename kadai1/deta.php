<!DOCTYPE html>
<html lang="ja">

<head>
  <mate charset="utf-8">
    <title>個人情報</title>

</head>

<body>
  <?php

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

  /*if (＄name == '') {
    print '個人情報<br/>';
  } else {
    print $name;

    print '<br/>';
  }


  if ($ID == '') {
    print 'IDが入力されていません。<br/>';
  } else {
    print $ID;
    print '<br/>';
  }*/

  if ($kanji == '') {
    print '氏名（漢字）が入力されていません。<br/>';
  } else {
    print $kanji;
    print '<br/>';
  }

  if ($hurigana == '') {
    print 'ふりがなが入力されていません。<br/>';
  } else {
    print $hurigana;
    print '<br/>';
  }

  if ($yubin == '') {
    print '郵便番号が入力されていません。<br/>';
  } else {
    print $yubin;
    print '<br/>';
  }

  if ($jusho == '') {
    print '住所が入力されていません。<br/>';
  } else {
    print $jusho;
    print '<br/>';
  }

  if ($denwa == '') {
    print '電話番号が入力されていません。<br/>';
  } else {
    print $denwa;
    print '<br/>';
  }

  if ($Emaile == '') {
    print 'Eメールアドレスが入力されていません。<br/>';
  } else {
    print $Emaile;
    print '<br/>';
  }


  if (/*$_name == "" || $ID == '' ||*/$kanji == '' || $hurigana == '' || $yubin == '' || $jusho == '' || $denwa == '' || $Emaile == '') {
    print '<form>';
    print '<button type="button" onclick="history.back()">戻る</button>';
    print '</form>';
  } else {


    
    print '<form method="post" action="tuika.php">';
    // print '<input type="hidden" name="name"value="' . $name . '">';
    //print '<input type="hidden" name="ID"value="' . $ID . '">';
    print '<input type="hidden" name="kanji"value="' . $kanji . '">';
    print '<input type="hidden" name="hurigana"value="' . $hurigana . '">';
    print '<input type="hidden" name="yubin"value="' . $yubin . '">';
    print '<input type="hidden" name="jusho"value="' . $jusho . '">';
    print '<input type="hidden" name="denwa"value="' . $denwa . '">';
    print '<input type="hidden" name="Emaile"value="' . $Emaile . '">';
    print '<br/>';
    print '<button type="button" onclick="history.back()">戻る</button>';
    print '<button type="submit">ＯＫ</button>';
    print '</form>';
  }
  ?>

</body>

</html>