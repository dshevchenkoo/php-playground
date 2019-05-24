<?php

function lineSearch($array, $searchNum)
{
    foreach($array as $key => $value) {
        if ($value === $searchNum){
            return $key;
        }
    }
    return null;
};
