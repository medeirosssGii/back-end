<?php

$valorPedido= 40;
$valorEntrega=15;
$idadeMinimaBebAlcoolica= 18;
$estoque= 25;
$quantidadepediada= 20;


 if ($valorPedido >= $valorEntrega){
    echo "Entrega grátis";
 }
 else{
    echo "Frete: ", $valorEntrega;
 }
"<br>";


 if ($idadeMinimaBebAlcoolica >=18){
    echo "bebida alcoolica liberada!";
 }
 else{
    echo "Acesso à bebida alcoolica bloquado!";
 }
"<br>";

if ($quantidadepediada<=$estoque){
    echo "Seu pedido oi enviado!";
}
else{
    echo "Pedido indisponível no estoque!";
}
"<br>";




