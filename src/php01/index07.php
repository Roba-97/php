<?php
//引数と戻り値あり関数
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}
outputNumber(2);
echo "<br />";

//引数と戻り値なし関数
function outputHello()
{
  echo "Hello world";
}
outputHello();

echo "<br />";
function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}
$total = addNumber(2, 3);
print $total;

echo "<br />";
function exam($score1, $score2, $score3)
{
    $sum = $score1 + $score2 + $score3;
    if ($sum > 210) {
        echo "合計点は" .$sum ."なので合格です" ;
    }
    else {
        echo "合計点は" .$sum ."なので不合格です" ;
    }
}
exam(30,90,50);
echo "<br />";
echo (exam(80,90,90) . '<br />');

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}
echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);