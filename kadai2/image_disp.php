<!DOCTYPE html>
<html lang="ja">

<head>
    <mate charset="utf-8">
        <title>ろくまる農業</title>
</head>

<body>
    <?php
    try {
        $image_code=$_GET['procode'];

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

    商品情報参照<br />
    <br />
    商品コード<br />
    <?php print $image_code; ?>
    <br />
    商品名<br />
    <?php print $image_title; ?>
    <br />
    価格<br />
    <?php print $disp_file;?>
    <br>
    <?php print $image_description; ?>円
    <form>

        <input type="button" onclick="history.back()" value="戻る">

    </form>

</body>

</html>