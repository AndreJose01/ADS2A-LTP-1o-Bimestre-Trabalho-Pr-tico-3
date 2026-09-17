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

descritivo: Escreva um programa que leia o valor do saldo de uma aplicação bancária e exiba o novo
saldo reajustado com um acréscimo de 2%
*/

echo "digite o saldo atual: ";
$saldo = (float) readline("Saldo atual: ");
$acrescimo = $saldo * 0.02;
$saldo_final = $saldo + $acrescimo;

echo "O novo saldo reajustado é: " . $saldo_final;

/* explicação:
    O programa recebe o saldo atual, soma com mais 2% e mostra o saldo final na saída.
    */ 
?>
