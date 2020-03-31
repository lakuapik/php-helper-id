<?php

use PHPUnit\Framework\TestCase;

class TerbilangTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            'nol',
            terbilang(0)
        );

        $this->assertEquals(
            'satu',
            terbilang(1)
        );

        $this->assertEquals(
            'dua',
            terbilang(2)
        );

        $this->assertEquals(
            'tiga',
            terbilang(3)
        );

        $this->assertEquals(
            'empat',
            terbilang(4)
        );

        $this->assertEquals(
            'lima',
            terbilang(5)
        );

        $this->assertEquals(
            'enam',
            terbilang(6)
        );

        $this->assertEquals(
            'tujuh',
            terbilang(7)
        );

        $this->assertEquals(
            'delapan',
            terbilang(8)
        );

        $this->assertEquals(
            'sembilan',
            terbilang(9)
        );

        $this->assertEquals(
            'sepuluh',
            terbilang(10)
        );

        $this->assertEquals(
            'sebelas',
            terbilang(11)
        );

        $this->assertEquals(
            'dua belas',
            terbilang(12)
        );

        $this->assertEquals(
            'tiga belas',
            terbilang(13)
        );

        $this->assertEquals(
            'empat belas',
            terbilang(14)
        );

        $this->assertEquals(
            'lima belas',
            terbilang(15)
        );

        $this->assertEquals(
            'enam belas',
            terbilang(16)
        );

        $this->assertEquals(
            'tujuh belas',
            terbilang(17)
        );

        $this->assertEquals(
            'delapan belas',
            terbilang(18)
        );

        $this->assertEquals(
            'sembilan belas',
            terbilang(19)
        );

        $this->assertEquals(
            'dua puluh',
            terbilang(20)
        );

        $this->assertEquals(
            'empat puluh dua',
            terbilang(42)
        );

        $this->assertEquals(
            'sembilan puluh sembilan',
            terbilang(99)
        );

        $this->assertEquals(
            'seratus',
            terbilang(100)
        );

        $this->assertEquals(
            'seratus dua puluh satu',
            terbilang(121)
        );

        $this->assertEquals(
            'lima ratus empat',
            terbilang(504)
        );

        $this->assertEquals(
            'lima ratus lima puluh empat',
            terbilang(554)
        );

        $this->assertEquals(
            'seribu',
            terbilang(1000)
        );

        $this->assertEquals(
            'dua puluh ribu',
            terbilang(20000)
        );

        $this->assertEquals(
            'satu juta',
            terbilang('1000000')
        );

        $this->assertEquals(
            'satu juta dua ratus tiga puluh empat ribu lima ratus enam puluh tujuh',
            terbilang('1234567')
        );

        $this->assertEquals(
            'sepuluh juta',
            terbilang(10000000)
        );

        $this->assertEquals(
            'seratus juta',
            terbilang(100000000)
        );

        $this->assertEquals(
            'satu milyar',
            terbilang(1000000000)
        );

        $this->assertEquals(
            'satu triliun',
            terbilang(1000000000000)
        );

        $this->assertEquals(
            'satu kuadriliun',
            terbilang(1000000000000000)
        );

        $this->assertEquals(
            'minus satu juta',
            terbilang('-1000000')
        );

        $this->assertEquals(
            'minus seratus dua puluh tiga',
            terbilang(-123)
        );

        $this->assertEquals(
            'dua ratus empat puluh lima koma dua puluh empat',
            terbilang(245.24)
        );

        $this->assertEquals(
            'minus seribu sembilan ratus tujuh puluh koma sebelas',
            terbilang(-1970.11)
        );
    }
}
