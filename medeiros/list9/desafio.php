<?php 

$songs = ["Tempo de Paz", "Me Chamando de Paixão", "Fórmula Mágica da Paz", "Wish you Roses", "Moonlight On The River", "A New Kind of Love"];
$qtd= count($songs);
echo "Total de músicas", $qtd, "<br>";
foreach($songs as $n)
    echo $n, "<br>"
?>