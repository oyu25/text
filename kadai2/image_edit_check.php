<!DOCTYPE html>
<html lang="ja">

<head>
  <mate charset="utf-8">
    <title>ろくまる農業</title>

</head>
<?php

$image_code = $_POST['code'];
$image_title = $_POST['title'];
$image_description = $_POST['discription'];
$image_file_name_old = $_POST['file_name_old'];
$image_file = $_FILES['file'];

$image_code = htmlspecialchars($image_code, ENT_QUOTES, 'UTF-8');
$image_title = htmlspecialchars($image_title, ENT_QUOTES, 'UTF-8');
$image_description = htmlspecialchars($image_description, ENT_QUOTES, 'UTF-8');

if ($image_title == '') {
  print '商品名が入力されていません。<br/>';
} else {
  print '商品名:';
  print $image_title;
  print '<br\>';
}

if (preg_match('/\A[0-9]+\z/', $image_description) == 0) {
  print '価格をきちんと入力てください。<br\/>';
} else {
  print '価格';
  print $image_description;
  print '円<br/>';
}

if ($image_file['size'] > 0) {
  if ($image_file['size'] > 1000000) {
    print '画像サイズが大き過ぎます';
  } else {
    move_uploaded_file($image_file['tmp_name'], './file/' . $image_file['name']);
    print '<img src="./file/' . $image_file['name'] . '">';
    print '<br/>';
  }
}

if ($image_title == '' || preg_match('/\A[0-9]+\z/', $image_description) == 0 || $image_file['size'] > 1000000) {
  print '<form>';
  print '<button type="button" onclick="history.back()">戻る</button>';
  print '</form>';
} else {
  print '上記のように変更します。<br/>';
  print '<form method="post" action="image_edit_done.php">';
  print '<input type="hidden" name="code" value="' . $image_code . '">';
  print '<input type="hidden" name="name" value="' . $image_title . '">';
  print '<input type="hidden" name="price" value="' . $image_description . '">';
  print '<input type="hidden" name="file_name_old" value="' . $image_file_name_old . '">';
  print '<input type="hidden" name="file_name" value="' . $image_file['file'] . '">';
  print '<br/>';
  print '<button type="button" onclick="history.back()">戻る</button>';
  print '<button type="submit">OK</button>';
  print '</form>';
}
?>

<body>

</body>

</html>