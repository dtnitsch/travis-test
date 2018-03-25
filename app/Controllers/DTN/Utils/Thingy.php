<?php

namespace Controllers\DTN\Utils;

class Thingy
{
    public function helloWorld() {
        return "Hello World";
    }

    public function uppercase($val)
    {
        return strtoupper($val);
    }
}