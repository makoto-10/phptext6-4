<?php
require_once('array.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="confirm.php" method="post">
        <label>名前</label>
        <input type="text" name="name"><BR>
        <label>フリガナ</label>
        <input type="text" name="kana"><BR>
        <label>ID</label>
        <input type="text" name="id"><BR>
        <label>パスワード</label>
        <input type="password" name="pass"><BR>
        <label>都道府県</label>
        <select name="area">
            <?php foreach($areas as $key =>$val): ?>
            <option value="<?= $key ?>"><?=$val ?></option>
            <?php endforeach; ?>
        </select><BR>
        <label>問い合わせ内容</label>
        <textarea name="text"></textarea><BR>
        <input type="submit" name="send" value="送信">
    </form>
</body>
</html>