<?php
require_once 'fizzbuzz.php';
require_once 'lime.php';

$test = new lime_test(null,new lime_output_color(true));

$fuzzbuzz = new fizzbuzz();
$test->fail('initial fail');

?>
