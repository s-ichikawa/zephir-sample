<?php

use Utils\Greeting;

$start = microtime(true);

$array = range(1, 10000);
for ($i = 0; $i < 10000; $i++) {
    $v = Greeting::inArray(100, $array);
}

echo microtime(true) - $start;
