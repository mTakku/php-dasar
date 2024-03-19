<?php

function createName()
{
    $name = "Farel"; // local scope
}

createName();
echo $name . PHP_EOL;
