<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
        <title>個人情報</title>

</head>

<body>
    <?php

    if (isset($_POST["disp"]) == true) {
        if (isset($_POST["ID"]) == false) {


            header("Location:staff_ng.php");
            exit();
        }
        $staff_ID = $_POST["ID"];
        header("Location:staff_disp.php?ID=" . $staff_ID);
        exit();
    }

    if (isset($_POST["add"]) == true) {
        header("Location:staff_add.php");
    }
    if (isset($_POST["edit"]) == true) {
        // print"修正ボタンが押されました。";

        if (isset($_POST["ID"]) == false) {
            header("Location:staff_ng.php");
            exit();
        }
        $staff_ID = $_POST["ID"];
        header("Location:staff_edit.php?ID=" . $staff_ID);
        exit();
    }

    if (isset($_POST["delete"]) == true) {
        // print"削除ボタンが押されました。";

        if (isset($_POST["ID"]) == false) {
            header("Location:staff_ng.php");
            exit();
        }
        $staff_ID = $_POST["ID"];
        header("Location:staff_delete.php?ID=" . $staff_ID);
        exit();
    }
    ?>

</body>

</html>