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

descritivo:  Escreva um programa que leia um número inteiro e informe se ele é estritamente maior
que zero.
*/  

echo "digite um número : ";
$numero = (int) readline("Número: ");

if ($numero > 0) {
    echo "O número é maior que zero.\n";
} else {
    echo "O número não é maior que zero.\n";
}   

/* explicação:
    O programa recebe um número inteiro e usando if/else verifica se ele é maior que zero,  
    */
?>
