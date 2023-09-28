<?php

$variable = 'aaaaaaa';

echo $variable . '<br />';

$variable = 'bbbbbbbb';

echo $variable . '<br />';

function a() {
    $variable = 'ccccc';
}
a();

echo $variable . '<br />';

function b() {
 global $variable;
 $variable = 'dddddd';
}
b();

echo $variable . '<br />';

function c() {
    global $new;
    $new = 'new';
}
c();

echo $new . '<br />';

include ("2.php");
global $otherVariable;

echo  $otherVariable . "<br />";

d();

$a = 5;
echo $a . "<br />";
function e(){
    $a = 10;
}

e($a);

echo $a . "<br />";

function f(&$a){
 $a = 10;
}
f($a);

echo $a . "<br />";

