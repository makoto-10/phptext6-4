<?php
require_once('array.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>問い合わせ内容確認</h1>
    <label>名前：<?=$_POST['name'] ?></label><BR>
    <label>フリガナ：<?=$_POST['kana'] ?></label><BR>
    <label>ID：<?=$_POST['id'] ?></label><BR>  
    <label>PASS：<?=$_POST['pass'] ?></label><BR>
    <label>都道府県：<?=$areas[$_POST['area']] ?></label><BR>
    <label>問い合わせ内容：<?=$_POST['text'] ?></label><BR>
</body>
</html>