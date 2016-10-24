<?php

$start = microtime(true);

$array = range(1, 10000);
for ($i = 0; $i < 10000; $i++) {
    in_array(1000, $array);
}

echo microtime(true) - $start;
