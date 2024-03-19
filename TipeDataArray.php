<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Farel", "Mercys", "Putra", "Thona"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Zeta";
var_dump($names);
unset($names[1]);
var_dump($names);
$names[] = "Vestia";
var_dump($names);
var_dump(count($names));

$eko = array(
    "id" => "farel",
    "name" => "Farel Mercys",
    "age" => 30,
    "address" => array(
        "city" => "Bogor",
        "country" => "Indonesia"
    )
);
var_dump($eko);

var_dump($eko["name"]);
var_dump($eko["address"]["country"]);

$zeta = [
    "id" => "007",
    "name" => "Vestia Zeta",
    "age" => 18,
    "address" => [
        "city" => "hololive",
        "country" => "Indonesia"
    ]
];
var_dump($zeta);