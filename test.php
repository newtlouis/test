<?php



function positions($str, $n)
{
   $a = 30;
   $sum = 0;
   for ($i = 0; $i < $n; $i++) {
      $sum += ord($str[$i]) & ($a);
      // print((ord($str[$i]) & ($a)) ."\n");
   }
   // print("$sum\n");
}

$str = "Geeks";
$n = strlen($str);
positions($str, $n);


$str = "1243";
$sum = 0;
for ($i = 0; $i < strlen($str); $i++) {
   // print(var_dump((int)$str[$i]) . "\n");
   $sum += (int)$str[$i];
}
// var_dump((string)$sum);

$test = "louis";
$test[0] = strtoupper($test[0]);
// print($test);

// $sentence = ['John', 'Doe', 'has', 'a', 'car'];
// foreach ($sentence as $word) {
//     echo (function() use ($word) {
//         return $word;
//     }) () [2] ;
// }

function gen()
{
   yield 1;
   yield 2;
   return 3;
};

foreach (gen() as $value) {
   echo $value;
};

function void(): void
{
   return ;
};
void();

function test(?int $n)
{
   echo $n;
}

test(null);

// function foo(){
//    return array_sum(func_get_args());
// }
// $x = foo(1,2,3);
// echo($x ?? 'x');


// $x = "Louis";
// $y = "Lou";

// echo $x ?? $y ?? "l";
// echo 19 <=> 020;

// $s=1;

// echo ++$s;