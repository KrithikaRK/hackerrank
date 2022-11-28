<?php

/*
 * Complete the 'breakingRecords' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY scores as parameter.
 */

function breakingRecords($scores) {
    // Write your code here
    $n = count($scores);
    $best = 0;
    $worst = 0;
    $max = $scores[0];
    $min = $scores[0];
    for($i=1; $i<$n; $i++){
        if($scores[$i] > $scores[$i-1]){
            if($scores[$i] > $max){
                $max = $scores[$i];
                //echo $scores[$i] ." ".$i."\n";
                $best++;
            }
        }elseif($scores[$i] < $scores[$i-1]){
            if($scores[$i] < $min){
                $min= $scores[$i];
                $worst++;
            }
        }
    }
    return [$best,$worst];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$scores_temp = rtrim(fgets(STDIN));

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);

