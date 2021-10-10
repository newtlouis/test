<?php
$string = "C";
$characters = str_split($string);

$binary = [];
foreach ($characters as $character) {
    $data = unpack('H*', $character);
    $binary[] = base_convert($data[1], 16, 2);
}

$bin = implode('', $binary);
$bin_list = str_split($bin);

$chuck = [];

$number = $bin_list[0] == 0 ? "00 " : "0 ";

$chuck[] = $number;
$chuck[] = "0";


$k = 0;
for ($i = 0; $i < strlen($bin); $i++) {
    if ($i + 1 < strlen($bin)) {
        if ($bin_list[$i] == $bin_list[$i + 1]) {
            $k++;
        } else {
            for ($j = 1; $j <= $k; $j++) {
                $chuck[] = "0";
            }
            $number = $bin_list[$i + 1] == 0 ? " 00 " : " 0 ";
            $chuck[] = $number;
            $chuck[] = "0";
            $k = 0;
        }
    }
    else{
        for ($j = 1; $j <= $k; $j++) {
            $chuck[] = "0";
        }
    }
};
array_pop($chuck);

$chuck_str = implode('', $chuck);
// echo "\n $chuck_str";


function closestToZero(array $ts)
{
    $closest = $ts[0];

    for($i = 0; $i < count($ts); $i++){
        if (abs($closest) > abs($ts[$i])) {
            $closest = $ts[$i];            
        }
        elseif (abs($closest) === abs($ts[$i])){
            $closest = abs($ts[$i]); 
        }
    }
return $closest;
}

function closestTroZero(array $ts)
{
    $closest = $ts[0];

    foreach($ts as $num){
        if($closest != $num){
            $closest = (abs($closest) === abs($num)) ? abs($num) : $closest;
            $closest = (abs($closest) > abs($num)) ? $num : $closest;
        }
    }
return $closest;
}

$a= [4,10,-3];
// echo closeeestToZero($a);


$a =[];
$a[10] ='ten';
print_r($a);




$n=1;
$n.=1;
// echo $n;
$encoded = md5('my test string');
echo 0001 & 0001;