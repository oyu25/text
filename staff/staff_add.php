<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>ろくまる農業</title>
</head>

<body>
    スタッフ追加<br />
    <br />
    <form method="post" action="staff_add_check.php">
        スタッフ名を入力してください。<br />
        <input type="text" name="name" style="width:200px"><br />
        パスワードを入力してください。<br />
        <input type="password" name="pass" style="width:100px"><br />
        パスワードをもう一度入力してください。<br />
        <input type="password" name="pass2" style="width:100px"><br />
        <br />
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">ＯＫ</button>

    </form>

</body>

</html>