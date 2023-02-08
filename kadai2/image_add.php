<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
        <title>課題2</title>
</head>
<link rel="stylesheet" href="image_add.css">

<body bgcolor="#f0ffff">
    <h1>画像の登録</h1>
    </br>
    <form method="post" action="image_add_check.php" enctype="multipart/form-data">
        <table border="1" style="border-collapse: collapse" height="200" cellpadding="10" align="center">
            <tr>
                <th>画像のタイトル</th>
                <th><input type="text" name="title" style="width:400px "></br></th>
            </tr>
            <tr>
                <th>画像の説明</th>
                <th><textarea cols="50" rows="5" name="description" style="width:400px"></textarea></th>
            </tr>
            <tr>
                <th>画像ファイルの選択</th>
                <th><input type="file" name="file" style="width: 400px"></br></th>
            </tr>
        </table>
        <div align="center">
            <div class="bu">
                <button type="button" onclick="history.back()">戻る</button>
                <button type="submit">ＯＫ</button>
            </div>
        </div>

    </form>

</body>

</html>