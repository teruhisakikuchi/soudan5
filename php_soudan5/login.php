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
    <h1 class='title'>Login</h1>
    </div>

    <div class="icon">
    <a href= "index.php"><img src='img/logo.jpg' alt='登録画面'></a>
    </div>

    <form name="form1" action="login_act.php" method="post">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>
        　

    <div class='contents'>
    <h1 class='title'>新規登録</h1>
    </div>

    <form name="form1" action="insert2.php" method="post">
    名前:<input type="text" name="name"><br>
    ID:<input type="text" name="lid">
    PW:<input type="password" name="lpw"><br>
    <input type="submit" value="登録" />
    </from>





    </body>
</html>

