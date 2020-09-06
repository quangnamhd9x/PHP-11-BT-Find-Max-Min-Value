<?php
function findMin($arr){
    $min = $arr[0];
    for ($i = 1; $i < count($arr); ++$i){
        if ($arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    return $min;
}

function findMax($arr){
    $max = $arr[0];
    for ($i = 1; $i < count($arr); ++$i){
        if ($arr[$i] > $max){
            $max = $arr[$i];
        }
    }
    return $max;
}

$arrayNum = [];
for ($i = 0; $i < 100; ++$i){
    $arrayNum[$i] = rand(1, 101);
}
foreach ($arrayNum as $num){
    echo  $num . ' ';
}
$minValue = findMin($arrayNum);
$maxValue = findMax($arrayNum);
echo '<br>';
echo "The minium value is: " . $minValue;
echo '<br>';
echo "The minium value is: " . $maxValue;