<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>課題2</title>
</head>

<body>

    <form method="post" action="image_add_check.php" enctype="multipart/form-data">
        画像のタイトル
        <input type="text" name="title" style="width:200px"></br>
        画像の説明
        <input type="text" name="description" style="width:200px;"></br>
        画像ファイルの選択
        <input type="file" name="file" style="width: 400px"></br>

        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">ＯＫ</button>

    </form>

</body>

</html>