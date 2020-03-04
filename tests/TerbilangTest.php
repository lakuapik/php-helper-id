<?php

use PHPUnit\Framework\TestCase;

class TerbilangTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            terbilang(0),
            'nol'
        );

        $this->assertEquals(
            terbilang(1),
            'satu'
        );

        $this->assertEquals(
            terbilang(2),
            'dua'
        );

        $this->assertEquals(
            terbilang(3),
            'tiga'
        );

        $this->assertEquals(
            terbilang(4),
            'empat'
        );

        $this->assertEquals(
            terbilang(5),
            'lima'
        );

        $this->assertEquals(
            terbilang(6),
            'enam'
        );

        $this->assertEquals(
            terbilang(7),
            'tujuh'
        );

        $this->assertEquals(
            terbilang(8),
            'delapan'
        );

        $this->assertEquals(
            terbilang(9),
            'sembilan'
        );

        $this->assertEquals(
            terbilang(10),
            'sepuluh'
        );

        $this->assertEquals(
            terbilang(11),
            'sebelas'
        );

        $this->assertEquals(
            terbilang(12),
            'dua belas'
        );

        $this->assertEquals(
            terbilang(13),
            'tiga belas'
        );

        $this->assertEquals(
            terbilang(14),
            'empat belas'
        );

        $this->assertEquals(
            terbilang(15),
            'lima belas'
        );

        $this->assertEquals(
            terbilang(16),
            'enam belas'
        );

        $this->assertEquals(
            terbilang(17),
            'tujuh belas'
        );

        $this->assertEquals(
            terbilang(18),
            'delapan belas'
        );

        $this->assertEquals(
            terbilang(19),
            'sembilan belas'
        );

        $this->assertEquals(
            terbilang(20),
            'dua puluh'
        );

        $this->assertEquals(
            terbilang(42),
            'empat puluh dua'
        );

        $this->assertEquals(
            terbilang(99),
            'sembilan puluh sembilan'
        );

        $this->assertEquals(
            terbilang(100),
            'seratus'
        );

        $this->assertEquals(
            terbilang(121),
            'seratus dua puluh satu'
        );

        $this->assertEquals(
            terbilang(504),
            'lima ratus empat'
        );

        $this->assertEquals(
            terbilang(554),
            'lima ratus lima puluh empat'
        );

        $this->assertEquals(
            terbilang(1000),
            'seribu'
        );

        $this->assertEquals(
            terbilang(20000),
            'dua puluh ribu'
        );

        $this->assertEquals(
            terbilang('1000000'),
            'satu juta'
        );

        $this->assertEquals(
            terbilang('1234567'),
            'satu juta dua ratus tiga puluh empat ribu lima ratus enam puluh tujuh'
        );

        $this->assertEquals(
            terbilang(10000000),
            'sepuluh juta'
        );

        $this->assertEquals(
            terbilang(100000000),
            'seratus juta'
        );

        $this->assertEquals(
            terbilang(1000000000),
            'satu milyar'
        );

        $this->assertEquals(
            terbilang(1000000000000),
            'satu triliun'
        );

        $this->assertEquals(
            terbilang(1000000000000000),
            'satu kuadriliun'
        );

        $this->assertEquals(
            terbilang('-1000000'),
            'minus satu juta'
        );

        $this->assertEquals(
            terbilang(-123),
            'minus seratus dua puluh tiga'
        );

        $this->assertEquals(
            terbilang(245.24),
            'dua ratus empat puluh lima koma dua puluh empat'
        );

        $this->assertEquals(
            terbilang(-1970.11),
            'minus seribu sembilan ratus tujuh puluh koma sebelas'
        );

    }
}
