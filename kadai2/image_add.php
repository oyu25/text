<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>課題2</title>
</head>
<link rel="stylesheet" href="image_add.css">

<body>
    <h1>画像の登録</h1>
    </br>
    <form method="post" action="image_add_check.php" enctype="multipart/form-data">
        <table solid="1">
            <tr>
                <th>画像のタイトル
                    <input type="text" name="title" style="width:200px"></br>
                </th>
            </tr>

            <tr>
                <th>画像の説明
                    <input type="text" name="description" style="width:200px;"></br>
                </th>
            </tr>
            <tr>
                <th>画像ファイルの選択
                    <input type="file" name="file" style="width: 400px"></br>
                </th>
            </tr>
        </table>

        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">ＯＫ</button>

    </form>

</body>

</html>