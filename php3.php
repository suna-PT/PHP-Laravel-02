<?php
echo 'hello php!';

$name = "hiroki";
if($name == "hiroki") {
  echo "私は".$name."です";
} else {
  echo "あなたの名前ではありません";
}
//課題１で間違っていた箇所
//５行目で==を＝と入力していた
//nameの前の$を#とご入力していた
//6行目、"私は.$name.です";と入力していた

//課題２
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

//課題３
$fruits = array("apple,orange、banana,peach,cherry");

foreach($fruits as $fruit)
echo $fruit;

//課題４
$start = 1;
$end = 100;

 for ($i = $start; $i < $end; $i++) {
    if($i % 5 == 0)echo $i;
 
}
   
  