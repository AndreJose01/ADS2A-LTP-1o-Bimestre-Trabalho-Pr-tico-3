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
Descritivo: Leia um número inteiro positivo e exiba o dobro dele.
Se o número for negativo, informe o erro.

Explicação:
O programa verifica se o número é negativo.
Se não for negativo, calcula o dobro multiplicando o número por 2.
Caso seja negativo, exibe uma mensagem de erro.
******************************************************************************/

$numero = (int) readline("Digite um número inteiro: ");

if ($numero < 0) {
    echo "Erro: o número não pode ser negativo. \n";
} else {
    $dobro = $numero * 2;

    echo "Dobro: $dobro \n";
}
?>