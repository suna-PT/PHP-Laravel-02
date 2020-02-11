<?php
//課題１
function sum($rom){
    $result = $rom * 2;
    return $result;
}
echo sum(4);

?>    
<?php
//課題２
function f($a,$b){
    $result = $a + $b;
    return $result;
}
echo f(2,10);
?>
<?php
//課題３
function a($arr){
    $result = 1;
    foreach($arr as $value) {
        $result = $result * $value;
    }
    return $result;
}
$abc = array(1,3,5,7,9);
echo a($abc);
?>
<?php
//課題４
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}
$abc = array(1,3,5,7,9,);
echo max_array($abc);
?>

<?php
//課題５　strip_tags
//文字列から HTML および PHP タグを取り除く
$str = "<h1>おはよう</h1>"
       ."<p>ご飯</p>";
echo strip_tags($str);
?>

<?php
//array_push
//1つ以上の要素を配列の最後に追加する
$fruitu = ['apple','orange','melon'];
array_push ($fruitu,'banana','peach');
echo count($fruitu);
?>

<?php
//array_merge
//配列の要素の最後に配列を統合する
$name1 = array('hiroki','bob');
$name2 = array('kaz','hitosi'); 
$result = array_merge($name1,$name2);
echo $result;
?>

<?php
//time UNIXタイムスタンプを取得することができる関数
echo '現在のUnixタイムスタンプ：'.time();
?>

<?php
//mktime 指定した日時のUNIXタイムスタンプを取得する
$timestamp = mktime(5,0,0,7,4,2018);
echo $timestamp;
?>

<?php
//date指定された日時を任意の形式でフォーマットし、
//日付文字列を返す関数
echo date('Y/m/d');
echo '<br>';
echo date('Y年m月d日　H時i分s秒');
echo '<br>';
?>