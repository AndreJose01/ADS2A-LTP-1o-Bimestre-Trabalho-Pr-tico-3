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
Descritivo: Escreva um programa que leia dois números inteiros, calcule a soma deles e exiba o
resultado precedido pela palavra 'Soma: '.
*******************************************************************************/

//exercicio 10 - soma de dois numeros

    echo "Digite o primeiro numero: ";
    $n1 = (int) readline();
    echo "Digite o segundo numero: ";
    $n2 = (int) readline();

    $soma = (int) ($n1 + $n2);

    echo "Soma: " . $soma;

/*
exibe a soma dos valores informados
*/

?>