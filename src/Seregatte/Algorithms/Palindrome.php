<?php
namespace Seregatte\Algorithms;

final class Palindrome
{
    public static function run($string){
        return \strrev($string) === $string;
    }
}

/*
 * Solution 1:
 * return strrev($string);
 */

// If is running by direct input via php
if(!count(debug_backtrace())) {
    echo Palindrome::run('ana');
}