<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$num = htmlspecialchars($_POST['num'], ENT_QUOTES);

echo "私の名前は、" .$name .'<br />';
echo "ご希望商品は、" .$item .'<br />';
echo "注文数は、" .$num .'<br />';
