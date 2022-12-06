<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>ろくまる農業</title>

</head>

<body>
    <?php

    if (isset($_POST["disp"]) == true) {
        if (isset($_POST["staffcode"]) == false) {


            header("Location:ng.php");
            exit();
        }
        $code = $_POST["staffcode"];
        header("Location:disp.php?staffcode=" . $code);
        exit();
    }

    if (isset($_POST["add"]) == true) {
        header("Location:add.php");
    }
    if (isset($_POST["edit"]) == true) {
        // print"修正ボタンが押されました。";

        if (isset($_POST["staffcode"]) == false) {
            header("Location:ng.php");
            exit();
        }
        $code = $_POST["staffcode"];
        header("Location:edit.php?staffcode=" . $code);
        exit();
    }

    if (isset($_POST["delete"]) == true) {
        // print"削除ボタンが押されました。";

        if (isset($_POST["staffcode"]) == false) {
            header("Location:ng.php");
            exit();
        }
        $code = $_POST["staffcode"];
        header("Location:delete.php?staffcode=" . $code);
        exit();
    }
    ?>

</body>

</html>