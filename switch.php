<?php

/**
 * Retorna o texto representativo do dia da semana (de 1 - Seg a 7 - Dom)
 *
 * @param int $dia Dia da Semana (1–7)
 * @return string Dia da semana em texto
 */
function diaDaSemana(int $dia): string
{
    switch ($dia) {
        case 1:
            return 'Segunda-feira';
        case 2:
            return 'Terça-feira';
        case 3:
            return 'Quarta-feira';
        case 4:
            return 'Quinta-feira';
        case 5:
            return 'Sexta-feira';
        case 6:
            return 'Sábado';
        case 7:
            return 'Domingo';
        default:
            return 'Dia inválido';
    }
}
    //echo  'dia da semana: ' . diaDaSemana(1);
function diaSemanaSwitch(int $dia): string
{
    switch ($dia) {
        case 1:
            return 'segunda-feira';
        case 2:
            return 'terça-feira';
        case 3:
            return 'quarta-feira';
        case 4:
            return 'quinta-feira';
        case 5:
            return 'sexta-feira';
        case 6:
            return 'sábado';
        case 7:
            return 'domingo';
        default:
            return 'dia inválido';
    }
}
    echo 'dia da semana: ' . diaSemanaSwitch(3);
?>