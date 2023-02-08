<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
        <title>課題2</title>

</head>

<body bgcolor="#f0ffff">
    <?php

    if (isset($_POST["disp"]) == true) {
        if (isset($_POST["imagecode"]) == false) {


            header("Location:image_ng.php");
            exit();
        }
        $image_code = $_POST["imagecode"];
        header("Location:image_disp.php?imagecode=" . $image_code);
        exit();
    }

    if (isset($_POST["add"]) == true) {
        header("Location:image_add.php");
    }
    //  if (isset($_POST["edit"]) == true) {
    //     print"修正ボタンが押されました。";

    //     if (isset($_POST["imagecode"]) == false) {
    //         header("Location:image_ng.php");
    //         exit();
    //     }
    //      $image_code = $_POST["imagecode"];
    //      header("Location:image_edit.php?imagecode=" . $image_code);
    //      exit();
    //  }

    if (isset($_POST["delete"]) == true) {
        // print"削除ボタンが押されました。";

        if (isset($_POST["imagecode"]) == false) {
            header("Location:image_ng.php");
            exit();
        }
        $image_code = $_POST["imagecode"];
        header("Location:image_delete.php?imagecode=" . $image_code);
        exit();
    }
    ?>

</body>

</html>