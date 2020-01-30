<?php

use PHPUnit\Framework\TestCase;

class ReRibuanTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            100000,
            re_ribuan('100.000')
        );

        $this->assertEquals(
            111234135,
            re_ribuan('111.234.135', 2)
        );

        $this->assertEquals(
            345.11,
            re_ribuan('345,1111111111', 2)
        );

        $this->assertEquals(
            222123.2,
            re_ribuan('$222.123,16', 1)
        );

        $this->assertEquals(
            14500,
            re_ribuan('Per 14.500,00 unit')
        );
    }
}
