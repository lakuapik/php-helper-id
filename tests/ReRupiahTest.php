<?php

use PHPUnit\Framework\TestCase;

class ReRupiahTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            100000,
            re_rupiah('Rp. 100.000')
        );

        $this->assertEquals(
            525000,
            re_rupiah('Rp. 525.000')
        );

        $this->assertEquals(
            178245123.01,
            re_rupiah('Rp. 178.245.123,01234', 2)
        );

        $this->assertEquals(
            212.2,
            re_rupiah('Rp. 212,20', 2)
        );

    }
}
