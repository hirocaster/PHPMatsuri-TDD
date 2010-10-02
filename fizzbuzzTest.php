<?php
require_once 'fizzbuzz.php';
require_once 'lime.php';

$test = new lime_test(2,new lime_output_color(true));

$fizzbuzz = new fizzbuzz();
$test->is($fizzbuzz->say(2), 2,'2のとき2');
$test->is($fizzbuzz->say(1), 1, '1のとき1');
?>
