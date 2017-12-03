<?php
namespace Seregatte\Algorithms;

final class ReverseString
{
    public static function run($string){
        return strrev($string);
    }
}

/*
 * Solution 1:
 * return strrev($string);
 */

// If is running by direct input via php
if(!count(debug_backtrace())) {
    echo ReverseString::run('abcd');
}