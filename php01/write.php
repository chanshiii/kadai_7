<?php

// データの受け取り post.phpより
$name =$_POST["name"];
$mail =$_POST["mail"];
$hobby=$_POST["hobby"]; 
$form=$_POST["form"];
$c = ",";

//文字作成
$str = date("Y-m-d H:i:s");
$str .= $c.$name.$c.$mail.$c.$hobby.$c.$form; //.=はjsでは+=代入を意味する
//File書き込み
// $file = fopen("data/data.txt","a");	// ファイル読み込み aは追記モード
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n"); //phpは+ではなく.で接続する \nは改行コード
fclose($file);
// "Location:"ヘッダとURLを指定すると、指定したURLのブラウザを表示することができる。よって以下のHTML　書き込みしましたの表示なしでread.phpに移行する
header("Location: read.php");
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<div>
    <!-- ブラウザで確認用 -->
    <?= $str ?> 
</div>

<ul>
<li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>