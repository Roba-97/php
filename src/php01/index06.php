<?php
for ($i = 0; $i < 4; $i++) {
  echo $i;
}
echo "<br />";

for ($i = 2; $i <= 10; $i+=2) {
    echo $i;
}
echo "<br />";

for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . '<br />';
}

$count = 0;
while ($count < 20) {
    $count += 1;
    echo $count . '<br />';
}

//breakの使い方
$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $i;
  $i++;
}
echo "<br />";

//continueの使い方
$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}
echo "<br />";

$count = 0;
while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}
echo "<br />";

$i = 0;
do {
  echo $i . '<br />';
  $i++;
} while ($i < 5);
echo "<br />";

$num = 0;
do {
  echo "num=" . $num . '<br />';
  $num++;
} while ($num < 3);

//FizzBuzzゲーム
echo "<br />";
echo "FizzBuzzゲーム";
echo "<br />";

for ($num = 1; $num <= 50; $num++) {
    if ($num % 15 === 0) {
        echo "FizzBuzz" . '<br />';
    }
    elseif ($num % 3 === 0) {
        echo "Fizz" . '<br />';
    }
    elseif ($num % 5 === 0) {
        echo "Buzz" . '<br />';
    }
    else {
        echo $num . '<br />';

    }
}
echo "<br />";

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "●";
    }
    echo '<br />';
}
