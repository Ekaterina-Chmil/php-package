<?php

use PHPUnit\Framework\TestCase;

function reverseString($string)
{
    return implode(array_reverse(str_split($string)));
}

class ReverseStringTest extends TestCase
{
    public function testReverseString()
    {
	$inputPath = realpath(__DIR__ . '/fixtures/input.txt');
	$expectedPath = realpath(__DIR__ . '/fixtures/expected.txt');

	$input = trim(file_get_contents($inputPath));
	$expected = trim(file_get_contents($expectedPath));

	$this->assertEquals($expected, reverseString($input));
    }
} 
