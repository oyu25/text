<!DOCTYPE html>
<html lang="ja">

<head>
  <mate charset="utf-8">
    <title>個人表示</title>

</head>

<body>
  個人情報<br />
  <br />
  <form method="post" action="deta.php">
    個人情報を入力してください。<br />
    <input type="text" name="name" style="width: 200px;"> <br />
    <!--IDを入力してください。<br />
    <input type="text" name="ID" style="width: 200px"><br /> -->
    氏名（漢字）を入力してください。<br />
    <input type="text" name="kanji" style="width: 200px"><br />
    ふりがなを入力してください。<br />
    <input type="text" name="hurigana" style="width: 200px"><br />
    郵便番号を入力してください。<br />
    <input type="text" name="yubin" style="width: 200px"><br />
    住所を入力してください。<br />
    <input type="text" name="jusho" style="width: 200px"><br />
    電話番号を入力してください。<br />
    <input type="text" name="denwa" style="width: 200px"><br />
    Eメールアドレスを入力してください。<br />
    <input type="text" name="Emaile" style="width: 200px"><br />
    <br />
    <button type="button" onclick="history.back()">戻る</button>
    <button type="submit">ＯＫ</button>
  </form>

</body>

</html>