<?php
$message = '相談受付中！　'.date('Y/m/d/l');
$title = '相談受付／';
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
      <h1 class='title'>相談内容の事前連絡</h1>
    <div class='nitiji'><?php echo $message; ?><br><br>
    <div class="sample">
    <a href="login.php">Login</a>　
    <a href="logout.php">Logout</a></div>
    </div>
    </div>



    <div class="icon">
    <a href= "select.php"><img src='img/logo.jpg' alt='相談内容一覧'></a>
    </div>

    <form action="insert.php" method="post">
            名前：<br />
            <input type="text" name="name" size="50" value="" /><br />

            メールアドレス：<br />
            <input type="text" name="email" size="50" value="" /><br />

            相談内容：<br />
            <textarea name="content" cols="50" rows="5"></textarea><br />

            <br />

            <input type="submit" value="送信" />
        </form>
        　
    </body>
</html>

