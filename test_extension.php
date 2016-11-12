<?php

use Utils\Greeting;

$start = microtime(true);

$array = [];
for ($i = 0; $i < 100; $i++) {
    $array[] = random_bytes(100);
}

//foreach ($array as $value) {
//    echo $value;
//}

Greeting::array_echo($array);

echo PHP_EOL . PHP_EOL . microtime(true) - $start;
