<?php

// 文字の置き換え
$s = "JS0_JS1_JS2";
// ターゲット文字、置き換え文字、元の文字列
$rep = str_replace("JS0", "J", $s);
var_dump($rep);

?>