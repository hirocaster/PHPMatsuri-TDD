<?php
include_once 'fizzbuzz.php';
include_once 'lime.php';

$test = new lime_test(null,new lime_output_color(true));

$fuzzbuzz = new fizzbuzz();
$test->is('fizzbuzz', $fuzzbuzz->fizzbuzz());

?>
