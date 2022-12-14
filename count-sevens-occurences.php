<?php

/*
 * Complete the 'countSevensOccurencesInRange' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. ARRAY arr - range of intergers
 */

function countSevensOccurencesInRange($arr) {
    // Write your code here
	//$arr = range(1,100); Dummy array
	//Find the number of sevens in a range.
    $count = 0;
    for($i=0; $i< count($arr); $i++){ //i is array indexes
	    $l = strlen($arr[$i]); //l is the length of $arr[$i];
        for($j=0; $j<$l; $j++){
            $d = substr($arr[$i], $j, 1);
            if($d % 7 == 0 && $d!=0){ //0 mod n == 0 hence checking for $d!=0
                $count ++;
            }
        }
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$steps = intval(trim(fgets(STDIN)));

$path = rtrim(fgets(STDIN), "\r\n");

$result = countSevensOccurencesInRange($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
