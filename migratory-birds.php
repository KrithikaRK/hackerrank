<?php

/*
 * Complete the 'migratoryBirds' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function migratoryBirds($arr) {
    // Write your code here
    $count = array_count_values($arr);
    $maxVal = max($count);
    $maxCounter = 0;
    foreach($count as $key => $a){
        if($count[$key] == $maxVal){
            $maxCounter++;
        }
    }
    if($maxCounter > 1){
        ksort($count);
        $final = array_search($maxVal, $count);
    }else{
        $final = array_search($maxVal, $count);
    }
    
    return $final;
    
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr_count = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);

