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

descritivo: Escreva um programa que leia um número real e, se for positivo, exiba seu inverso (1/x);
caso contrário, exiba o seu valor absoluto (número multiplicado por -1).
*/

echo "digite um número: ";
$num = (float) readline("Número: ");
if ($num > 0) {
    echo "O inverso do número é: " . (1 / $num) . "\n";
} else {
    echo "O valor absoluto do número é: " . ($num * -1) . "\n";
}

/* explicação:
    O programa recebe um número real e usando if verifica se ele é positivo, 
    caso seja, calcula o inverso do número e mostra o resultado.
    se contrário, calcula o valor *-1
    */  
?>    