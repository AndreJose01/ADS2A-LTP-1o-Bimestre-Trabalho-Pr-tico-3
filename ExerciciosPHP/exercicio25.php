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

descritivo: Escreva um programa que leia uma temperatura dada na escala Fahrenheit e exiba o
equivalente convertido em graus Celsius (Fórmula de conversão: C = 5/9 * (F – 32)).
*/

echo "digite a temperatura em Fahrenheit: ";
$fah = (float) readline("Temperatura em Fahrenheit: ");
$cel = 5 / 9 * ($fah - 32);
echo "A temperatura em Celsius é: " . $cel;

/* explicação:
    O programa recebe a temperatura em Fahrenheit, aplica a fórmula de conversão para Celsius
    e mostra o resultado final.
    */
?>