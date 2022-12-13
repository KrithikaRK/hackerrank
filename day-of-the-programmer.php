<?php

/*
 * Complete the 'dayOfProgrammer' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts INTEGER year as parameter.
 */

function dayOfProgrammer($year) {
    // Write your code here
    //if leap year, either (divisible by 4 and not 100) or (divisible by 400) > 1918
    //if leap year, divisible by 4 < 1918

    if($year >=1700 && $year <=1917){
        $feb = ($year%4 == 0) ? 29: 28;
    }elseif($year == 1918){
        $feb = (($year%4 == 0 && $year%100 !=0 ) || $year%400 ==0) ? 29 : 28;
        $feb = $feb - 13;
    }
    else{
        $feb = (($year%4 == 0 && $year%100 !=0 ) || $year%400 ==0) ? 29 : 28;
    }
    $sum = 256 -(31 + $feb + 31 + 30 + 31 + 30 + 31 + 31);
    return $sum .".09.". $year;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$year = intval(trim(fgets(STDIN)));

$result = dayOfProgrammer($year);

fwrite($fptr, $result . "\n");

fclose($fptr);

