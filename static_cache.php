<?php
require_once 'vendor/autoload.php';

class StaticCache
{
    public function main()
    {
        $this->getVal();
        $this->getVal(true);
        $this->getVal();
    }

    private function getVal($clear = false)
    {
        static $val;
        if ($clear) {
            print 'clear' . PHP_EOL;
            $val = '';
            return;
        }
        if (isset($val)) {
            return $val;
        }
        print 'cached' . PHP_EOL;
        $val = str_repeat('Hello', 5000);
        return $val;
    }
}

var_dump(memory_get_usage());

$a = new StaticCache();
$a->main();

var_dump(memory_get_usage());

unset($a);

var_dump(memory_get_usage());
