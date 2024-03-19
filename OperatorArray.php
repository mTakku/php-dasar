<?php

$first = [
    "first_name" => "Farel"
];

$last = [
    "first_name" => "Farel",
    "last_name" => "Mercys"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Farel",
    "last_name" => "Mercys"
];

$b = [
    "last_name" => "Farel",
    "first_name" => "Mercys"
];

var_dump($a == $b);
var_dump($a === $b);

