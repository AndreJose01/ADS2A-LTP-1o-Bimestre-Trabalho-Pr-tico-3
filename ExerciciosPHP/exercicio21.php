<?php
/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2A
Componentes:
 26014395-2 - Alison José de Oliveira
 26013429-2 - Andre Jose Rosa Neto
 26014141-2 - Brenda Isabela Banderas
 26011811-2 - Caio Eduardo Matos Mendonça
 26013857-2 - Pedro Leonardo de Assis Barbosa
Data: 23 de Setembro de 2026

descritivo: Escreva um programa que leia quatro números inteiros e calcule a média ponderada
deles, considerando que os pesos associados a cada número são, respectivamente, 1, 2, 3 e
4.
*/

echo "digite o número 1: ";
$num1 = (int) readline("Número 1: ");
echo "digite o número 2: ";
$num2 = (int) readline("Número 2: ");
echo "digite o número 3: ";
$num3 = (int) readline("Número 3: ");
echo "digite o número 4: ";
$num4 = (int) readline("Número 4: ");

$peso1 = 1;
$peso2 = 2;
$peso3 = 3;
$peso4 = 4;

$media = (($num1 * $peso1) +
          ($num2 * $peso2) +
          ($num3 * $peso3) +
          ($num4 * $peso4))
          / ($peso1 + $peso2 + $peso3 + $peso4);

echo "A média ponderada é: " . $media;

/* explicação:
    O programa recebe 4 números inteiros, multiplica cada número pelo seu peso 
    e soma o resultado, dividindo pelo total do peso. 
    */
?>  
