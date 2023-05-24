<?php

$num = rand(1,3);

if($num==1){
    echo "当たり".$num;
}
if($num==2){
    echo "はずれ".$num;
}
if($num==3){
    echo "エラー".$num;
}

?>