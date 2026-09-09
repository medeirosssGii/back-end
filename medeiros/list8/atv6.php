<?php
$qtd=0;
for($num=1; $num <=50; $num++){
    if($num%3==0){
        echo "Múçtiplo de 3: $num <br>";
        $qtd=$qtd+1;
    }
}
echo "<br> Total de múltiplo de 3:", $qtd;
