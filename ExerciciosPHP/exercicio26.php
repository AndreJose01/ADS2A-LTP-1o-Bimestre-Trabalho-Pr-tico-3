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

descritivo: Escreva um programa que leia duas variáveis inteiras (A e B) e efetue a troca de conteúdo
entre elas de forma que A passe a valer B, e B passe a valer A. Exiba os valores antes e
depois da troca.
*/  

echo "digite o valor A: ";
$a = (int) readline("A: ");
echo "digite o valor B: ";
$b = (int) readline("B: ");

echo "Valores antes da troca - A: $a, B: $b\n";

$temporaria = $a;
$a = $b;
$b = $temporaria;

echo "Valores depois da troca - A: $a, B: $b\n";

/* explicação:
    O programa recebe dois números inteiros, armazena o valor de A em uma variável temporáriae, 
    em seguida, atribui o valor da variável temporária a B,
    mostrando os valores antes e depois da troca.
    */
?>
