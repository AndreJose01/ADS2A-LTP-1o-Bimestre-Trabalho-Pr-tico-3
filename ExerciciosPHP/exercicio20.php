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
Descritivo: Leia uma data no formato ddmmaa e exiba a mesma
data reorganizada no formato mmddaa.

Explicação:
O programa recebe a data no formato ddmmaa e separa o dia,
mês e ano utilizando substr(). Depois, concatena as partes
na ordem mês, dia e ano, formando o formato mmddaa.
******************************************************************************/

$data = readline("Digite a data no formato ddmmaa: ");

if (strlen($data) != 6 || !ctype_digit($data)) {
    echo "Erro: digite exatamente 6 números. \n";
} else {
    $dia = substr($data, 0, 2);
    $mes = substr($data, 2, 2);
    $ano = substr($data, 4, 2);

    $novaData = $mes . $dia . $ano;

    echo "Data reorganizada: $novaData \n";
}
?>