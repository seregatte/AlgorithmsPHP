<?php

use PHPUnit\Framework\TestCase;
use Seregatte\Algorithms\Palindrome;

/**
 * @covers Palindrome
 */
final class PalindromeTest extends TestCase
{

    public function testIsPalindrome()
    {
        $this->assertTrue(
            Palindrome::run('abccba')
        );
    }

    public function testIsNotPalindrome()
    {
        $this->assertFalse(
            Palindrome::run('abcqwcba')
        );
    }
}
