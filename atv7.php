<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
if($email == "giovanna.f@edu.senai.br" && $senha == 12345678){
        echo "login bem sucedido!";
    }else{
        echo "login ou senha incorreto!";
    }
?>