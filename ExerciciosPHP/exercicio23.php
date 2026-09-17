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

descritivo: Escreva um programa que leia o valor da base e da altura de um triângulo e calcule e
exiba a sua área (Fórmula: Area = (Base * Altura) / 2).
*/

echo "digite a base do triângulo: ";
$base = (float) readline("Base: ");
echo "digite a altura do triângulo: ";
$altura = (float) readline("Altura: ");
$area = ($base * $altura) / 2;
echo "A área do triângulo é: " . $area;

/* explicação:
    O programa recebe a base e altura do triângulo, multiplica a base pela altura e divide por 2,
    mostrando o resultado na saída.
    */  
?>  
    