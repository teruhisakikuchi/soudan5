<?php
session_start();

require_once('funcs.php');
loginCheck();//require_once('funcs.php');の下に書く

$pdo = db_conn();

/**
 * １．PHP
 * [ここでやりたいこと]
 * まず、クエリパラメータの確認 = GETで取得している内容を確認する
 * イメージは、select.phpで取得しているデータを一つだけ取得できるようにする。
 * →select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * ※SQLとデータ取得の箇所を修正します。
 */

$id = $_GET["id"];

//SQLの準備
$stmt = $pdo->prepare('SELECT * FROM soudan_table WHERE id=:id;');

//SQLの安全性チェック
$stmt->bindValue(':id',$id,PDO::PARAM_INT);

//SQLを実行
$status = $stmt->execute();//成功？失敗？変数に入れる


$view = '';

if ($status === false) {
    sql_error($status);
} else {
    $result = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title><?= $title; ?>山鼻綜合法律事務所</title>
<link rel='stylesheet' href='css/reset.css'>
<link rel='stylesheet' href='css/style.css'>
</head>
<body>


    <div class='contents'>
        <h1 class='title'>法律相談の更新画面</h1>
    </div>

    <div class="icon">
    <a href= "select.php"><img src='img/logo.jpg' alt='相談内容一覧'></a>
    </div>

    <form action="update.php" method="post">
            名前：<br />
            <input type="text" name="name" size="50" value="<?= $result['name'] ?>" /><br />

            メールアドレス：<br />
            <input type="text" name="email" size="50" value="<?= $result['email'] ?>" /><br />

            相談内容：<br />
            <textarea name="naiyou" cols="50" rows="5"><?= $result['naiyou'] ?></textarea><br />

            <br />

            <input type='hidden' name="id" value="<?=$result["id"]?>">

            <input type="submit" value="送信" />
        </form>
        　
    </body>
</html>


