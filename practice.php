<?php
echo 'hello php!';

$a = 3;
$b = 7;
echo $a + $b;

$array_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $array_month[9];

$hello ="Hello";
$name ="hiroki";
$world =" 's world";
echo $hello.$name.$world;


$tech_boost ="tech";
$tech_boost .="boost";
echo $tech_boost;

$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" =>"3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
//１０月が”で囲まれていない
//２月のカンマが入力ミス
//キーが数字から始まっている
//echoが”で囲まれていない
// 12月を表示する
echo $calendar["December"];

//PHP3 課題１
$name = "hiroki";
if($name = "hiroki") {
  echo "私は.#name.です";
} else {
  echo "あなたの名前ではありません";
}
//PHP3 課題２
for($i = 0; $i <1000; $i++){
  echo $i;
}
//PHP3 課題３
$fruits = array("apple,orange、banana,peach,cherry");

foreach($fruits as $fruit)
echo $fruit;

//PHP3 課題4
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = "start; $i <= $end $i++){
   // 5で割り切れたら{}内を実行する
  if($i % 5 == 0)
 echo $i
}
