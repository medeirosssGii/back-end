<?php

function verificarIdade ($idade){
    if($idade<16){
        return "não pode votar";
    }
    elseif($idade<18){
        return "voto opcional";
    }
    else
        return "Voto obrigaório";
}
echo verificarIdade (17);


?>