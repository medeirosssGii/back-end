<?php

function analisarVenda ($produto, $custo, $venda){
$lucro = $venda - $custo;
 if ($lucro <= 0){
    $mensagem= "PREJUÍZO!!";
}
elseif($lucro<=20){
 $mensagem = "Lucro baixo mas vale a pena";
}
else{
    $mensagem = "Lucro alto, investe!!";
}

echo "produto,  $produto <br>";
echo "lucro, $lucro <br>";
echo "analise, $mensagem <br>";
}


?>