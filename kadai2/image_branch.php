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


            header("Location:image_ng.php");
            exit();
        }
        $image_code = $_POST["procode"];
        header("Location:image_disp.php?procode=" . $image_code);
        exit();
    }

    if (isset($_POST["add"]) == true) {
        header("Location:image_add.php");
    }
    if (isset($_POST["edit"]) == true) {
        // print"修正ボタンが押されました。";

        if (isset($_POST["procode"]) == false) {
            header("Location:image_ng.php");
            exit();
        }
        $image_code = $_POST["procode"];
        header("Location:image_edit.php?procode=" . $image_code);
        exit();
    }

    if (isset($_POST["delete"]) == true) {
        // print"削除ボタンが押されました。";

        if (isset($_POST["procode"]) == false) {
            header("Location:image_ng.php");
            exit();
        }
        $image_code = $_POST["procode"];
        header("Location:image_delete.php?procode=" . $image_code);
        exit();
    }
    ?>

</body>

</html>