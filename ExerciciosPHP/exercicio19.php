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
Descritivo: Leia uma data no formato ddmmaa e exiba o dia,
mês e ano separadamente.

Explicação:
A data é recebida como texto. A função substr() é utilizada
para separar os dois primeiros caracteres como dia, os dois
seguintes como mês e os dois últimos como ano.
******************************************************************************/

$data = readline("Digite a data no formato ddmmaa: ");

if (strlen($data) != 6 || !ctype_digit($data)) {
    echo "Erro: digite exatamente 6 números. \n";
} else {
    $dia = substr($data, 0, 2);
    $mes = substr($data, 2, 2);
    $ano = substr($data, 4, 2);

    echo "Dia: $dia \n";
    echo "Mês: $mes \n";
    echo "Ano: $ano \n";
}
?>