<?php

use PHPUnit\Framework\TestCase;
use Seregatte\Algorithms\ReverseString;

/**
 * @covers ReverseString
 */
final class ReverseStringTest extends TestCase
{

    public function testIsStringReversed()
    {
        $this->assertEquals(
            'abcd',
            ReverseString::run('dcba')
        );
    }
}
