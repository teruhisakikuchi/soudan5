<?php
session_start();

require_once('funcs.php');

loginCheck();//require_once('funcs.php');の下に書く


$message = '相談受付中！　'.date('Y/m/d/l');
$title = '相談受付／';



function get_json( $type = null ){
  $city = "Sapporo,jp";
  $appid = "6bc820162c1d3f5f8645679bdf4eccde";
  $url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&units=metric&APPID=" . $appid;

  $json = file_get_contents( $url );
  $json = mb_convert_encoding( $json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN' );
  $json_decode = json_decode( $json );

  //現在の天気
  if( $type  === "weather" ):
    $out = $json_decode->weather[0]->main;

  //現在の天気アイコン
  elseif( $type === "icon" ):
    $out = "<img src='https://openweathermap.org/img/wn/" . $json_decode->weather[0]->icon . "@2x.png'>";

  //現在の気温
  elseif( $type  === "temp" ):
    $out = $json_decode->main->temp;

  //パラメータがないときは配列を出力
  else:
    $out = $json_decode;

  endif;

  return $out;
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
    <h1 class='title'>検索画面</h1>
    <div class='nitiji'><?php echo $message; ?></div>
  </div>

<div class="icon">
<a href= "index.php"><img src='img/shikaru.jpg' alt='申込画面'></a>
</div>

　

<div style="text-align:center">現在の札幌市の天気</div>

<table class="ta1">
<tr>
  <th>天気</th>
  <th>気温</th>
</tr>
<tr>
  <th>
    <?php echo get_json("icon"); ?><br>
    <?php echo get_json("weather"); ?>
  </th>
  <th><?php echo get_json("temp"); ?>℃</th>
</tr>
</table>
　

<div class='contents'>
  <h1 class='title'>名前検索</h1>
</div>
<form action="search.php" method="post">
    <!-- 任意の<input>要素＝入力欄などを用意する -->
    <input type="text" name="search_name">
    <!-- 送信ボタンを用意する -->
    <input type="submit" name="submit" value="名前で検索する">
</form>
　


</body>
    
</html>