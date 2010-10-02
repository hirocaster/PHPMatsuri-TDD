<?php
require_once 'fizzbuzz.php';
require_once 'lime.php';

$test = new lime_test(null,new lime_output_color(true));

$fizzbuzz = new fizzbuzz();
$test->is($fizzbuzz->say(2), 2,'2のとき2');
$test->is($fizzbuzz->say(1), 1, '1のとき1');
$test->is($fizzbuzz->say(3), 'Fizz', '3のときFizz');
$test->is($fizzbuzz->say(6), 'Fizz', '6のときFizz');
?>
