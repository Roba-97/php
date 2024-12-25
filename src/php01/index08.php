<?php
$people1 = array('Taro', 'Jiro', 'Saburo');
var_dump($people1);
echo "<br />";
echo $people1[0];

//連想配列の作成
$people2 = array(
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
);
var_dump($people2);
echo "<br />";
echo $people2['person1'];

/* これでも同様に連想配列の作成が可能
$people = [
  'person1' => 'taro',
  'person2' => 'jiro',
];
*/

$people3 = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];
echo "<br />";
echo $people3[0]["last_name"];
echo "<br />";

$people = array('Taro', 'Jiro', 'Saburo');
foreach ($people as $person) {
  echo $person;
  echo '<br />';
}

$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);
foreach ($people as $person => $name) {
    print $person . "は" . $name . "です" . '<br />';
}


$people = [
    [
    'name' => 'Taro',
    'age' => '25歳',
    'gender' => 'men'
    ],
    [
    'name' => 'Jiro',
    'age' => '20歳',
    'gender' => 'men'       
    ],
    [
    'name' => 'hanako',
    'age' => '16歳',
    'gender' => 'women'
    ]
];
foreach ($people as $person) {
    print $person["name"] . "(" . $person["age"] . $person["gender"] .")" . '<br />';
}

//回答サンプル
$people = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['hanako', 16, 'women']
];
  
foreach ($people as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}

