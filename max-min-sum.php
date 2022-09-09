<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
    sort($arr);
    //print_r($arr);
    $j=count($arr)-1;
    $min = 0;
    $max = 0;
    for($i=0; $i<$j; $i++){
        $min += $arr[$i];
    }
    for($k=$j; $k>0; $k--){
        $max += $arr[$k];
    }
    print_r($min." ".$max);
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

