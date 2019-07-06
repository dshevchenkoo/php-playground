<?php

function binarySum ($binStr1st, $binStr2nd)
{
    $bin1st =  bindec($binStr1st);
    $bin2nd = bindec($binStr2nd);

    $resultSum = $bin1st + $bin2nd;
    
    return decbin($resultSum);
}
