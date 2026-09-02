<?php

$nota1=9;
$nota2=8;
$media = ($nota1+$nota2)/2;
if($media >=7){
    echo "aprovado";
}elseif ($media>=5 && $media <= 6.9){
    echo "Em recuperação";
}else{
    echo"reprovado";
}
?>