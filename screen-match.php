<?php

echo "Bem vindo ao screen match!\n";

$nomeFilme = "Top Gun - Mavarick";
$anoLancamento = 2022;
$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}


$notaFilme = array_sum($notas) / $quantidadeDeNotas;

$incluidoNoPlano = true;

echo $nomeFilme . ": " . $anoLancamento . "\n"; // concatenação
echo "Nota do filme: $notaFilme\n";

if ($anoLancamento > 2022) {
    echo "Esse filme é lançamento";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022){
          echo "Esse filme ainda é novo\n";
}else {
    echo "Esse filme não é lançamento\n" ; 
}

$genero = match ($nomeFilme) {
    "Top Gun - Mavarick" => "acão",
    "Thor" => "Super-heroi",
    "Gorde e magro" => "cómedia",
    default => " desconhecido",
};

echo "O genero do filme é: $genero\n ";

// array associativo
$filme = [
    "Nome" => "Avatar",
    "Ano" => 2021,
    "Nota" => 7.9,
    "genero" => "Ação",

];

echo $filme["Nome"] . "\n";