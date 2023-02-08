<!DOCTYPE html>
<html lang="ja">

<link rel="stylesheet" href="image_disp.css">

<head>
    <meta charset="utf-8">
        <title>課題2</title>
        <h1>画像の表示</h1>
</head>

<body bgcolor="#f0ffff">
    <?php
    try {
        $image_code = $_GET['imagecode'];

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = "root";
        $password = "";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT title,description,file FROM image WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $data[] = $image_code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $image_title = $rec['title'];
        $image_description = $rec['description'];
        $image_file_name = $rec['file'];

        $dbh = null;

        if ($image_file_name == '') {
            $disp_file = '';
        } else {
            $disp_file = '<img src="./image/' . $image_file_name . '">';
        }
    } catch (Exception $e) {
        print "ただいま障害により大変ご迷惑をお掛けしております。";
        exit();
    }
    ?>

    <div class="body">

        <br />
        【タイトル】
        <?php print $image_title; ?>
        <br />
        【説明】<br />
        <div class="moji">
            <?php print $image_description; ?>
        </div>
        <br />
        <?php print $disp_file; ?>
        <br>
    </div>
    <form>

        <input type="button" onclick="history.back()" value="戻る">

    </form>

</body>

</html>