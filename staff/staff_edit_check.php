<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>ろくまる農業</title>

</head>

<body>
    <?php

    $code = $_POST['code'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $pass = htmlspecialchars($pass, ENT_QUOTES, 'UTF-8');
    $pass2 = htmlspecialchars($pass2, ENT_QUOTES, 'UTF-8');

    if ($name == '') {
        print 'スタッフ名が入力されていません。<br/>';
    } else {
        print 'スタッフ名:';
        print $name;
        print '<br/>';
    }

    if ($pass == '') {
        print 'パスワードが入力されていません。<br/>';
    }

    if ($pass != $pass2) {
        print 'パスワードが一致しません。<br/>';
    }

    if ($name == '' || $pass == '' || $pass !== $pass2) {
        print '<form>';
        print '<button type="button" onclick="history.back()戻る</button>';
        print '</form>';
    } else {
        $pass = md5($pass);
        print '<form method="post" action="edit_done.php">';
        print '<input type="hidden" name="code"value="' . $code . '">';
        print '<input type="hidden" name="name"value="' . $name . '">';
        print '<input type="hidden" name="pass"value="' . $pass . '">';
        print '<br/>';
        print '<button type="button" onclick="history.back()">戻る</button>';
        print '<button type="submit">ＯＫ</button>';
        print '</form>';
    }
    ?>

</body>

</html>