<?php
include 'Aluno.php';
include 'Professor.php';
$aluno1 = new Aluno();
$aluno1->setNome("maria ");
echo $aluno1->getNome();

$p1 = new Professor("João", 1234 );
echo $p1->getNome() . " ganha " . $p1->getSalario();
