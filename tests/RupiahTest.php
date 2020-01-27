<?php

use PHPUnit\Framework\TestCase;

class RupiahTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            'Rp. 100.000',
            rupiah(100000)
        );

        $this->assertEquals(
            'Rp. 525.000',
            rupiah('525000')
        );

        $this->assertEquals(
            'Rp. 178.245.123,01',
            rupiah(178245123.01234, 2)
        );

        $this->assertEquals(
            'Rp. 212,20',
            rupiah('212.2', 2)
        );
    }
}
