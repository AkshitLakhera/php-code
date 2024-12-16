<?php
//marks sum function rohan
function processmarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $i) {
        $sum += $i;
    }
    echo "$sum";
}
$papu = [20, 30, 40, 40, 50];
processmarks($papu);
