<?php

/*
 * Complete the 'pageCount' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER p
 */

function pageCount($n, $p) {
    // Write your code here
    
    $totalFlips = $n/2;
    $fromStart = 0;
    $fromEnd = 0;
    $p = ($p % 2 == 0) ? $p : $p-1;
    
    $fromStart = $p/2;
    $fromEnd = $totalFlips - $fromStart;
    
    return $fromStart >= $fromEnd ? floor($fromEnd) : floor($fromStart);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$p = intval(trim(fgets(STDIN)));

$result = pageCount($n, $p);

fwrite($fptr, $result . "\n");

fclose($fptr);

