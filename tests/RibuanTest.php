<?php

use PHPUnit\Framework\TestCase;

class RibuanTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            '100.000',
            ribuan(100000)
        );

        $this->assertEquals(
            '111.234.135',
            ribuan('111234135.22')
        );

        $this->assertEquals(
            '345,1',
            ribuan(345.1111111111, 1)
        );

        $this->assertEquals(
            '$222.123,2',
            ribuan(222123.16, 1, '$')
        );

        $this->assertEquals(
            'Per 14.500,00 unit',
            ribuan(14500, 2, 'Per ', ' unit')
        );
    }
}
