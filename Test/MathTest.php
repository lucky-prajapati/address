<?php

use Laravel\Address\Math;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;
final class MathTest extends TestCase{
    public function testFactorialOfFive(){
        assertEquals(120, Math::factorial(5));
    }
}