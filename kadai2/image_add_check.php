<!DOCTYPE html>
<html lang="ja">

<link rel="stylesheet" href="image_add_check.css">

<head>
  <mate charset="utf-8">
    <title>課題２</title>
</head>

<body bgcolor="#f0ffff">
  <h1>確認</h1>
  <div class="body2">
    <table border="1" style="border-collapse: collapse" cellpadding="10">
      <?php

      $image_title = $_POST['title'];
      $image_description = $_POST['description'];
      $image_file = $_FILES['file'];

      $image_title = htmlspecialchars($image_title, ENT_QUOTES, 'UTF-8');
      $image_description = htmlspecialchars($image_description, ENT_QUOTES, 'UTF-8');

      if ($image_title == '') {
        print 'タイトルが入力されていません。<br/>';
      } else {
        echo '<tr>';
        echo '<td>';
        print 'タイトル ';
        echo '</td>';
        echo '<td>';
        print $image_title;
        echo '</td>';
        echo '</tr>';
        print '<br\>';
      }

      if ($image_description == '') {
        print '説明を入力てください。<br/>';
      } else {
        print '<br/>';
        echo '<tr>';
        echo '<td>';
        print '説明 ';
        echo '</td>';
        echo '<td>';
        print $image_description;
        echo '</td>';
        echo '</tr>';
        print '<br/>';
      }

      if ($image_file['size'] > 0) {
        if ($image_file['size'] > 1000000) {
          print '画像が大きすぎます';
        } else {
          echo '<tr>';
          echo '<td>';
          print '画像 ';
          echo '</td>';
          move_uploaded_file($image_file['tmp_name'], './image/' . $image_file['name']);
          echo '<td>';
          print '<img src="./image/' . $image_file['name'] . '">';
          echo '</td>';
          echo '</tr>';
          print '<br/>';
        }
      }

      if ($image_title == '' ||  $image_description == '' || $image_file['size'] > 1000000) {
        print '<form>';
        print '<button type="button" onclick="history.back()">戻る</button>';
        print '</form>';
      } else {
        print '上記の商品を追加します。<br/>';
        print '<form method="post" action="image_add_done.php">';
        print '<input type="hidden" name="title" value="' . $image_title . '">';
        print '<input type="hidden" name="description" value="' . $image_description . '">';
        print '<input type="hidden" name="file_name" value="' . $image_file['name'] . '">';
        print '<br/>';
        echo '<div class="bu">';
        print '<button type="button" onclick="history.back()">戻る</button>';
        print '<button type="submit">ＯＫ</button>';
        echo '<div>';
        print '</form>';
      }
      ?>
      </body2>


</body>

</html>