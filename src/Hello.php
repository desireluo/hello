<?php
declare(strict_types=1);

namespace Desireluo\Hello;

class Hello
{
    public static function handle()
    {
        echo __METHOD__, PHP_EOL;
    }

    public function say()
    {
        echo __METHOD__, PHP_EOL;
    }
}