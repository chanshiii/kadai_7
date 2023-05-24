<?php

// ini_set("display_errors", 1); エラーの場所を教えてくれる

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

$name = $_POST["name"];
$mail = $_POST["mail"];


?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
    <!-- 省略形はechoと;を省くことができる -->
お名前：<?= h($name) ?>  
EMAIL： <?= h($mail) ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>