<?php

namespace yvvlib/inclineRuWord;

class CInclineRuWD
{
    public function __construct()
    {
        // nothing
    }
    
    public function GetInclineWord($number, $suffix) {
        $keys = array(2, 0, 1, 1, 1, 2);
        $mod = $number % 100;
        $suffix_key = ($mod > 7 && $mod < 20) ? 2: $keys[min($mod % 10, 5)];
        return $suffix[$suffix_key];
    }
}
