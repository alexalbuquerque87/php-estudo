<?php

$idade = 21;
$tipoIdade = gettype($idade);

$salario = 1000.30;
$tipoSalario = gettype($salario);

$olaMundo = "Olá mundo";
$tipoOlaMundo = gettype($olaMundo);

$verdadeiro = true;
$tipoVerdadeiro = gettype($verdadeiro);

echo "Tipo $idade é $tipoIdade\n";
echo "Tipo $salario é $tipoSalario\n";
echo "Tipo $olaMundo é $tipoOlaMundo\n";
echo "Tipo $verdadeiro é $tipoVerdadeiro\n";