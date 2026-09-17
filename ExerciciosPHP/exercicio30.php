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

descritivo: Escreva um programa que leia um número inteiro e exiba se ele é divisível por 3 
(múltiplo de 3).
*/

echo "digite um número: ";
$numero = (int) readline("Número: ");
if ($numero % 3 == 0) {
    echo "O número é divisível por 3.\n";
} else {
    echo "O número não é divisível por 3.\n";
}
/* explicação:
    O programa recebe um número inteiro e usando if/else verifica se ele é divisível por 3,  
    */