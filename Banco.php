<?php

echo "Digite o seu nome: \n";
$nome = trim(fgets(STDIN));

echo "Digite o seu saldo atual: \n";
$saldoAtual  = (int) fgets(STDIN);
echo ('************************' . "\n");

do {

echo "\n1. Consutar saldo atual\n";
echo "2. Sacar valor\n";
echo "3. Depositar valor\n";
echo "4. sair\n";

echo "Digite uma opção\n";
$opc = (int) fgets(STDIN);

if($opc < 1 || $opc > 4){
    echo("Valor inválido\n");
}

switch ($opc) {
    case 1:
        echo("$nome seu saldo: $saldoAtual\n");
        break;
    case 2:
        echo "Sacar:\n";
        $sacar = (int) fgets(STDIN);

        if($sacar < $saldoAtual){
            $saldoAtual -= $sacar;

        }else{
            echo "Não é possivel fazer essa operação\n";
        }
        break;
    case 3:
        echo "Depositar:\n";
        $saldo = (int) fgets(STDIN);
        $saldoAtual += $saldo;
        break;
    case 4:
        echo("finalizado\n");
        break;
}

    
}while($opc != 4 );




