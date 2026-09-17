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

descritivo: Escreva um programa que leia um número real e, se ele for maior do que 20, exiba a
metade deste número.
*/  

echo "digite um número: ";
$numero = (int) readline("Número: ");
if ($numero > 20) {
    echo "A metade do número é: " . ($numero / 2) . "\n";
} else {
    echo "O número não é maior que 20.\n";
}

/* explicação:
    O programa recebe um número e usando if verifica se ele é maior que 20, 
    caso seja, divide por 2 e mostra o resultado.
    */
?>