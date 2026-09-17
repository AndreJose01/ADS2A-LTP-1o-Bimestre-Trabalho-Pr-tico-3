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

descritivo: Escreva um programa que calcule e exiba o comprimento de uma circunferência com
base em seu raio fornecido pelo usuário. Defina PI como uma constante com valor 3.1415
(Fórmula: C = 2 * PI * Raio).
*/

echo "digite o raio: ";
$raio = (float) readline("Raio: ");
define("PI", 3.1415);
$comprimento = 2 * PI * $raio;
echo "O comprimento da circunferência é: " . $comprimento;

/* explicação:
    O programa recebe o raio da circunferência, define PI como uma 
    constante e calcula o comprimento mostrando o resultado.
    */
?>  
    