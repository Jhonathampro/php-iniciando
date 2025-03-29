<?php 

$filme = "Vingadores";
$ano = 0;
$cont = 1;

echo "para começar o jogo digite a quantindade de tentativas";
$tentativaFixa = (int) fgets(STDIN);

while($cont <= $tentativaFixa && $ano != 2012 ){
    echo "Quando foi feito o primeiro filme Vingadores" . "\n";
    $ano = (int) fgets(STDIN);
    $cont++;

    if ($ano == 2012 ){
        echo "Você acertou" . "\n";
        
    } else if($cont > $tentativaFixa){
        echo "Acabou suas tentativas" . "\n";
        
    }   else {
        $tentativa = $tentativaFixa - 1;
        if($tentativa > 1){
           $chance = "tentativa";
        } else {
            $chance = "tentativas";
        }
        echo "Você errou, tem " . ( 3 - $tentativa ) ." $chance "."\n" ;
    }

}