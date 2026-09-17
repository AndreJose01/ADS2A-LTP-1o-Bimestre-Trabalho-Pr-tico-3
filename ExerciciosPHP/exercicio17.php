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
Descritivo: Leia dois números inteiros e exiba o dividendo, divisor,
quociente inteiro e resto da divisão.

Explicação:
O primeiro número representa o dividendo e o segundo representa
o divisor. A função intdiv() calcula o quociente inteiro e o
operador % calcula o resto da divisão.
******************************************************************************/

$dividendo = (int) readline("Digite o dividendo: ");
$divisor = (int) readline("Digite o divisor: ");

if ($divisor == 0) {
    echo "Erro: não é possível dividir por zero. \n";
} else {
    $quociente = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;

    echo "Dividendo: $dividendo \n";
    echo "Divisor: $divisor \n";
    echo "Quociente: $quociente \n";
    echo "Resto: $resto \n";
}
?>