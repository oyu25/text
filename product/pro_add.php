<?php
session_start();
session_regenerate_id(true);
if (isset($_SESSION['login']) == false) {
    print 'ログインされていません。<br/>';
    print '<a href="../staff_login/staff_login.html">ログイン画面へ<a/>';
    exit();
} else {
    print $_SESSION['staff_name'];
    print 'さんログイン中<br/>';
    print '<br/>';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ろくまる農業</title>
</head>

<body>
    商品追加<br />
    <br />
    <form method="post" action="pro_add_check.php" enctype="multipart/form-data">
        商品名を入力してください。<br />
        <input type="text" name="name" style="width:200px"><br />
        価格を入力してください。<br />
        <input type="text" name="price" style="width:50px;"><br />
        <br />
        画像を選んでください。<br />
        <input type="file" name="gazou" style="width: 400px"><br />
        <br />
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">ＯＫ</button>

    </form>

</body>

</html>