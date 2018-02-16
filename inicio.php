<?php
/**
 * Created by PhpStorm.
 * User: 00925473200
 * Date: 15/02/2018
 * Time: 19:34
 */
echo "<h1>Ola mundo</h1>";
echo date("d/m/y");

$nome = "João";
$sexo = 'M';
$idade = 25;
$salario = 1200.55;

echo "<br>";
echo "O funcionario " . $nome . " tem " . $idade . "anos";
echo "<br>";
echo "O funcionario {$nome} tem {$idade} anos";

if ($idade >= 18){
    echo " é maior de idade";
} else{
    echo " é menor de idade";
}

