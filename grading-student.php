<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    // Write your code here
    $finalGrade = [];
    foreach($grades as $index => $grade){
        if($grade < 38){
            $finalGrade[$index] = $grade;
        }else{
            $rem = $grade%5;
            $nxt = $grade + (5-$rem);
            if(($nxt - $grade) < 3){
                $finalGrade[$index] = $nxt;
            }else{
                $finalGrade[$index] = $grade;
            }
        }
    }
    return $finalGrade;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);

