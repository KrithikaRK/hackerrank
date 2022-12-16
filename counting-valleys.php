<?php

/*
 * Complete the 'countingValleys' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER steps
 *  2. STRING path
 */

function countingValleys($steps, $path) {
    // Write your code here
    $path = str_split($path);
    $count = 0;
    $v = 0;
    for($i=0; $i<$steps; $i++){
        $temp=$count;
        if($path[$i]=='U'){
            $count += 1;
        }else{
             $count -= 1;
        }
        if($count == 0){
            if($count -1 == $temp){
                $v++;
            }
            
        }
    }
    return $v;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$steps = intval(trim(fgets(STDIN)));

$path = rtrim(fgets(STDIN), "\r\n");

$result = countingValleys($steps, $path);

fwrite($fptr, $result . "\n");

fclose($fptr);

