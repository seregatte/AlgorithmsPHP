<?php
namespace Seregatte\Algorithms;

final class ReverseString
{
    public static function run($string){
        return array_reduce(str_split($string), function($final, $it){
            return $it . $final;
        });
    }
}

/*
 * Solution 1:
 * return strrev($string);
 */

 /*
 * Solution 2:
 * 
 * $reversed = '';
 * foreach(str_split($string) as $ch) {
 *   $reversed = $ch . $reversed;
 * }
 * return $reversed;
 * 
 */

 /*
  * return array_reduce(str_split($string), function($final, $it){
  *   return $it . $final;
  * });
  */

// If is running by direct input via php
if(!count(debug_backtrace())) {
    echo ReverseString::run('abcd');
}