<?php

function isPowerOfThree($num)
{
    $log = log($num, 3);
    if ($num === 1 || floor($log) == $log ) {
        return true;
    } else {
        return false;
    }
}
