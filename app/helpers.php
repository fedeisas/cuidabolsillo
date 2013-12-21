<?php
if (!function_exists('getVariation')) {
    function getVariation($a, $b)
    {
        if ($a != 0 && $b != 0) {
            return ($b / $a);
        }
    }
}
