<?php
/**
 * @param $string
 * @param $startString
 * @return bool
 */
function startsWith($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}
