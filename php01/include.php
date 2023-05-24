<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include/読み込み関数</title>
</head>
<body>
    <?php
    // 時間によって色を変える
$a =  date("H");
if($a >= 9 && $a<=13){ //9~13時の間はifを出力する
    echo '<div style="background:#000;">aaaa</div>';
}else{
    echo '<div style="background:#F00;">BBBB</div>';
}
// 時間の取得
echo date("Y年m月d日 H:i:"); //YHは大文字
// echo date("Y-m-d H:i:s"); //YHは大文字
// echo date("Y🐈m🐶d H:i:s"); //YHは大文字

?>
<?php include("inc/head.html");?>
<?php include("inc/menu.html");?>
<?php include("inc/foot.html");?>
</body>
</html>