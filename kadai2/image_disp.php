<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>ろくまる農業</title>
</head>

<body>
    <?php
    try {
        $image_code=$_GET['imagecode'];

        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user = "root";
        $password = "";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT title,description,file FROM image WHERE code=?";
        $stmt = $dbh->prepare($sql);
        $data[] = $image_code;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $image_title=$rec['title'];
        $image_description=$rec['description'];
        $image_file_name=$rec['file'];

        $dbh = null;

        if($image_file_name==''){
            $disp_file='';
        }else{
            $disp_file='<img src="./file/'.$image_file_name.'">';
        }
    } catch (Exception $e) {
        print "ただいま障害により大変ご迷惑をお掛けしております。";
        exit();
    }
    ?>

    画像の表示<br />
    <br />
    【タイトル】<br />
    <?php print $image_title; ?>
    <br />
    【説明】<br />
    <?php print $image_description; ?>
    <br />
    <?php print $disp_file;?>
    <br>
    <?php print $image_description; ?>
    <form>

        <input type="button" onclick="history.back()" value="戻る">

    </form>

</body>

</html>