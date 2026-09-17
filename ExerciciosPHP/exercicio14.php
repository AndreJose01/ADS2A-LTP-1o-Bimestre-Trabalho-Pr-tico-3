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
Descritivo: Leia o nome de um aluno e suas duas notas em avaliações,
calcule a média aritmética simples e exiba o nome do aluno seguido
de sua média final.

Explicação:
O programa recebe o nome do aluno e suas duas notas.
As notas são somadas e o resultado é dividido por 2 para
calcular a média final.
******************************************************************************/

$nome = readline("Digite o nome do aluno: ");
$nota1 = (float) readline("Digite a nota da AV1: ");
$nota2 = (float) readline("Digite a nota da AV2: ");

$media = ($nota1 + $nota2) / 2;

echo "Aluno: $nome\ n";
echo "Média final: $media \n";
?>