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
Descritivo: Leia um número inteiro de três algarismos e exiba
o algarismo correspondente à casa das dezenas.

Explicação:
O programa verifica se o número está entre 100 e 999.
O operador % 100 elimina a casa das centenas.
Depois, intdiv() por 10 obtém o algarismo das dezenas.
******************************************************************************/

$numero = (int) readline("Digite um número entre 100 e 999: ");

if ($numero < 100 || $numero > 999) {
    echo "Erro: o número deve estar entre 100 e 999. \n";
} else {
    $dezenas = intdiv($numero % 100, 10);

    echo "Algarismo das dezenas: $dezenas \n";
}
?>