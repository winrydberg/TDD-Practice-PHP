<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(20, 5);

        $this->assertEquals(25, $result);
    }

    public function testSubtract()
    {
        $calculator = new Calculator();

        $result = $calculator->subtract(20, 5);

        $this->assertEquals("15", $result);
    }

    public function testMultiply()
    {
        $calculator = new Calculator();

        $result = $calculator->multiply(20, 5);

        $this->assertEquals("100", $result);
    }

    public function testDivide()
    {
        $calculator = new Calculator();

        $result = $calculator->divide(20, 5);

        $this->assertEquals("4", $result);
    }
}