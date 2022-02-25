<?php
try {
    //ID:'root', Password: 'root'
    $pdo = new PDO('mysql:dbname=soudan_db;charset=utf8;host=localhost:3307','root','root');

    //SQL文を実行して、結果を$stmtに代入する。
    $stmt = $pdo->prepare(" SELECT * FROM soudan_table WHERE name LIKE '%" . $_POST["search_name"] . "%' "); 

    //実行する
    $stmt->execute();
    //echo "OK";
    //echo "<br>";

    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    }
?>

<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>山鼻綜合法律事務所</title>
<link rel='stylesheet' href='css/reset.css'>
<link rel='stylesheet' href='css/style.css'>
</head>

<body>
<div class='contents'>
    <h1 class='title'>検索結果</h1>
</div>

    <body>
        <table style="margin: 0 auto">
            <tr><th>ID</th><th>名前</th><th>Ｅメール</th><th>相談内容</th></tr>
            <!-- ここでPHPのforeachを使って結果をループさせる -->
            <?php foreach ($stmt as $row): ?>
            <tr>
                <td><?php echo $row[0]?>　</td>
                <td><?php echo $row[1]?>　</td>
                <td><?php echo $row[2]?>　</td>
                <td><?php echo $row[3]?></td>               
            </tr>

                <?php endforeach; ?>
        </table>
    </body>
</html>
