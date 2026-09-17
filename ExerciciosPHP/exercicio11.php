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
Descritivo: Leia dois números inteiros e exiba o produto entre eles.

Explicação:
O programa recebe dois números inteiros e utiliza o operador *
para realizar a multiplicação entre eles.
******************************************************************************/

$numero1 = (int) readline("Digite o primeiro número: ");
$numero2 = (int) readline("Digite o segundo número: ");

$produto = $numero1 * $numero2;

echo "Produto: $produto \n";
?>