<?php
if (!function_exists('getVariation')) {
    function getVariation($a, $b)
    {
        if ($a != 0 && $b != 0) {
            return ($b / $a);
        }
    }
}

if (!function_exists('translateDiff')) {
    function translateDiff($string)
    {
        $string = str_replace(' ago', '', $string);
        $string = str_replace('seconds', 'segundos', $string);
        $string = str_replace('second', 'segundo', $string);
        $string = str_replace('minutes', 'minutos', $string);
        $string = str_replace('minute', 'minuto', $string);
        $string = str_replace('hours', 'horas', $string);
        $string = str_replace('hour', 'hora', $string);
        $string = str_replace('days', 'días', $string);
        $string = str_replace('day', 'día', $string);
        $string = str_replace('weeks', 'semanas', $string);
        $string = str_replace('week', 'semana', $string);
        $string = str_replace('months', 'meses', $string);
        $string = str_replace('month', 'mes', $string);
        $string = str_replace('years', 'años', $string);
        $string = str_replace('year', 'año', $string);

        return 'hace ' . $string;
    }
}
