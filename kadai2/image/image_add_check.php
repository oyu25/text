<!DOCTYPE html>
<html lang="ja">

<head>
  <mate charset="utf-8">
    <title>課題２</title>

</head>
<?php

$image_title = $_POST['title'];
$image_description = $_POST['description'];
// $image_gazou = $_FILES['gazou'];

$image_title = htmlspecialchars($image_title, ENT_QUOTES, 'UTF-8');
$image_description = htmlspecialchars($image_description, ENT_QUOTES, 'UTF-8');

if ($image_title == '') {
  print 'タイトルが入力されていません。<br/>';
} else {
  print 'タイトル:';
  print $image_title;
  print '<br\>';
}

if (preg_match('/\A[0-9]+\z/', $image_description) == 0) {
  print '説明を入力てください。<br\/>';
} else {
  print '説明:';
  print $image_description;
  print '<br/>';
}

// if ($image_gazou['size'] > 0) {
//   if ($image_gazou['size'] > 1000000) {
//     print '画像が大きすぎます';
//   } else {
//     move_uploaded_file($image_gazou['tmp_name'], './gazou/' . $image_gazou['name']);
//     print '<img src="./gazou/' . $image_gazou['name'] . '">';
//     print '<br/>';
//   }
// }

if ($image_title == '' || preg_match('/\A[0-9]+\z/', $image_description) == 0 || $image_gazou['size'] > 1000000) {
  print '<form>';
  print '<button type="button" onclick="history.back()">戻る</button>';
  print '</form>';
} else {
  print '上記の商品を追加します。<br/>';
  print '<form method="post" action="image_add_done.php">';
  print '<input type="hidden" name="title" value="' . $image_title . '">';
  print '<input type="hidden" name="description" value="' . $image_description . '">';
  // print '<input type="hidden" name="gazou_name" value="' . $image_gazou['name'] . '">';
  print '<br/>';
  print '<button type="button" onclick="history.back()">戻る</button>';
  print '<button type="submit">OK</button>';
  print '</form>';
}
?>

<body>

</body>

</html>