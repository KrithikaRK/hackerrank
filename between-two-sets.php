<?php

/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function getTotalX($a, $b) {
    // Write your code here
    $n = count($a);
    $m = count($b);
    array_walk($a, 'intval');
    array_walk($b, 'intval');
    $bMin=min($b); 
    $aMax=max($a); 
    $count=0;
    for ($i = $aMax; $i <= $bMin; $i++) {
        $is = true;
        for ($j = 0; $j < $n; $j++){ 
            if ($i%$a[$j]!=0) { 
                $is = false;
                break; 
            }
        }
        for ($j = 0; $j < $m; $j++){ 
            if ($b[$j]%$i!=0) { 
                $is = false; 
                break; 
            } 
        }
        if ($is == true) $count++;
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$brr_temp = rtrim(fgets(STDIN));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($arr, $brr);

fwrite($fptr, $total . "\n");

fclose($fptr);

