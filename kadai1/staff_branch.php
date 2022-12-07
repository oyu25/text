<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>個人情報</title>

</head>

<body>
    <?php

    if (isset($_POST["disp"]) == true) {
        if (isset($_POST["ID"]) == false) {


            header("Location:ng.php");
            exit();
        }
        $staff_ID = $_POST["ID"];
        header("Location:disp.php?ID=" . $staff_ID);
        exit();
    }

    if (isset($_POST["add"]) == true) {
        header("Location:add.php");
    }
    if (isset($_POST["edit"]) == true) {
        // print"修正ボタンが押されました。";

        if (isset($_POST["ID"]) == false) {
            header("Location:ng.php");
            exit();
        }
        $staff_ID = $_POST["ID"];
        header("Location:edit.php?ID=" . $staff_ID);
        exit();
    }

    if (isset($_POST["delete"]) == true) {
        // print"削除ボタンが押されました。";

        if (isset($_POST["ID"]) == false) {
            header("Location:ng.php");
            exit();
        }
        $staff_ID = $_POST["ID"];
        header("Location:delete.php?ID=" . $staff_ID);
        exit();
    }
    ?>

</body>

</html>