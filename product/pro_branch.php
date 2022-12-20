<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>ろくまる農業</title>

</head>

<body>
    <?php

    if (isset($_POST["disp"]) == true) {
        if (isset($_POST["procode"]) == false) {


            header("Location:pro_ng.php");
            exit();
        }
        $code = $_POST["procode"];
        header("Location:pro_disp.php?procode=" . $pro_code);
        exit();
    }

    if (isset($_POST["add"]) == true) {
        header("Location:pro_add.php");
    }
    if (isset($_POST["edit"]) == true) {
        // print"修正ボタンが押されました。";

        if (isset($_POST["procode"]) == false) {
            header("Location:pro_ng.php");
            exit();
        }
        $pro_code = $_POST["procode"];
        header("Location:pro_edit.php?procode=" . $pro_code);
        exit();
    }

    if (isset($_POST["delete"]) == true) {
        // print"削除ボタンが押されました。";

        if (isset($_POST["procode"]) == false) {
            header("Location:pro_ng.php");
            exit();
        }
        $pro_code = $_POST["procode"];
        header("Location:pro_delete.php?procode=" . $pro_code);
        exit();
    }
    ?>

</body>

</html>