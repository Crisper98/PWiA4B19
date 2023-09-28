<?php

$arr1 = [1,2,3,4,5,6];

var_dump($arr1);
echo "<br />";

$arr2 = [
    'k1' => 'v1',
    'k2' => 'v2',
    'papież' => 'kremówka',
    69 =>420,
    'jp2' => 2137,
];

var_dump($arr2);
echo "<br />";

$arr3 = [
    [1,2,3,4],
    [5,6,7,8]
];

var_dump($arr3);
echo "<br />";

for ($i = 0; $i < count($arr1); $i++){
    echo ("<li>$arr1[$i]</li>");
}
echo ("</ul>");
echo "<br />";

foreach ($arr1 as $item) {
    echo "<li>{$item}</li>";
}
echo ("</ul>");
echo "<br />";

echo ("</ul>");
foreach ($arr2 as $key => $item) {
    echo "<li>{$key}=>{$item}</li>";
}
echo ("</ul>");