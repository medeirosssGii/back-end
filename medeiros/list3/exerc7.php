<?php

$nomecompleto = "Giovanna";
$senha = 2969;
$confirmaSenha = 2969;
$idade = 17;
$contador = 0;

if($nomecompleto == ""){
    echo"Coloque seu nome";
}
else{
    echo"Nome registrado.";
    $contador = $contador + 1 ;
}
echo"<br>";
if($senha == $confirmaSenha){
    echo "Senha registrada.";
    $contador = $contador + 1 ;
}
else{
    echo "Senha diferente.";
}
echo"<br>";
if($idade >= 18){
    echo "Maior de idade registrado.";
    $contador = $contador + 1 ;
}
else{
    echo "Menor de idade registrado";
}
echo"<br>";
if($contador == 3){
    echo "Cadastro liberado!";
}
else{
    echo "Cadastro bloqueado";
}
?>