<?php

use PHPUnit\Framework\TestCase;

class RomawiTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            'I',
            romawi(1)
        );

        $this->assertEquals(
            'IV',
            romawi(4)
        );

        $this->assertEquals(
            'V',
            romawi(5)
        );

        $this->assertEquals(
            'IX',
            romawi(9)
        );

        $this->assertEquals(
            'X',
            romawi(10)
        );

        $this->assertEquals(
            'XL',
            romawi(40)
        );

        $this->assertEquals(
            'L',
            romawi(50)
        );

        $this->assertEquals(
            'XC',
            romawi(90)
        );

        $this->assertEquals(
            'C',
            romawi(100)
        );

        $this->assertEquals(
            'CD',
            romawi(400)
        );

        $this->assertEquals(
            'D',
            romawi(500)
        );

        $this->assertEquals(
            'CM',
            romawi(900)
        );

        $this->assertEquals(
            'M',
            romawi(1000)
        );

        $this->assertEquals(
            'MCCXXXIV',
            romawi(1234)
        );

        $this->assertEquals(
            'mccxxxiv',
            romawi(1234, false)
        );
    }
}
