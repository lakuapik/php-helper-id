<?php

use PHPUnit\Framework\TestCase;

class ReTerbilangTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            0,
            re_terbilang('nol')
        );

        $this->assertEquals(
            1,
            re_terbilang('satu')
        );

        $this->assertEquals(
            2,
            re_terbilang('dua')
        );

        $this->assertEquals(
            3,
            re_terbilang('tiga')
        );

        $this->assertEquals(
            4,
            re_terbilang('empat')
        );

        $this->assertEquals(
            5,
            re_terbilang('lima')
        );

        $this->assertEquals(
            6,
            re_terbilang('enam')
        );

        $this->assertEquals(
            7,
            re_terbilang('tujuh')
        );

        $this->assertEquals(
            8,
            re_terbilang('delapan')
        );

        $this->assertEquals(
            9,
            re_terbilang('sembilan')
        );

        $this->assertEquals(
            10,
            re_terbilang('sepuluh')
        );

        $this->assertEquals(
            11,
            re_terbilang('sebelas')
        );

        $this->assertEquals(
            12,
            re_terbilang('dua belas')
        );

        $this->assertEquals(
            13,
            re_terbilang('tiga belas')
        );

        $this->assertEquals(
            14,
            re_terbilang('empat belas')
        );

        $this->assertEquals(
            15,
            re_terbilang('lima belas')
        );

        $this->assertEquals(
            16,
            re_terbilang('enam belas')
        );

        $this->assertEquals(
            17,
            re_terbilang('tujuh belas')
        );

        $this->assertEquals(
            18,
            re_terbilang('delapan belas')
        );

        $this->assertEquals(
            19,
            re_terbilang('sembilan belas')
        );

        $this->assertEquals(
            20,
            re_terbilang('dua puluh')
        );

        $this->assertEquals(
            42,
            re_terbilang('empat puluh dua')
        );

        $this->assertEquals(
            99,
            re_terbilang('sembilan puluh sembilan')
        );

        $this->assertEquals(
            100,
            re_terbilang('seratus')
        );

        $this->assertEquals(
            121,
            re_terbilang('seratus dua puluh satu')
        );

        $this->assertEquals(
            504,
            re_terbilang('lima ratus empat')
        );

        $this->assertEquals(
            554,
            re_terbilang('lima ratus lima puluh empat')
        );

        $this->assertEquals(
            1000,
            re_terbilang('seribu')
        );

        $this->assertEquals(
            20000,
            re_terbilang('dua puluh ribu')
        );

        $this->assertEquals(
            1000000,
            re_terbilang('satu juta')
        );

        $this->assertEquals(
            1234567,
            re_terbilang('satu juta dua ratus tiga puluh empat ribu lima ratus enam puluh tujuh')
        );

        $this->assertEquals(
            10000000,
            re_terbilang('sepuluh juta')
        );

        $this->assertEquals(
            100000000,
            re_terbilang('seratus juta')
        );

        $this->assertEquals(
            1000000000,
            re_terbilang('satu milyar')
        );

        $this->assertEquals(
            1000000000000,
            re_terbilang('satu triliun')
        );

        $this->assertEquals(
            1000000000000000,
            re_terbilang('satu kuadriliun')
        );

        $this->assertEquals(
            999999999999999,
            re_terbilang('sembilan ratus sembilan puluh sembilan triliun sembilan ratus sembilan puluh sembilan milyar sembilan ratus sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan')
        );

        $this->assertEquals(
            -1000000,
            re_terbilang('minus satu juta')
        );

        $this->assertEquals(
            -123,
            re_terbilang('minus seratus dua puluh tiga')
        );

        $this->assertEquals(
            245.24,
            re_terbilang('dua ratus empat puluh lima koma dua puluh empat')
        );

        $this->assertEquals(
            -1970.11,
            re_terbilang('minus seribu sembilan ratus tujuh puluh koma sebelas')
        );

        $this->assertEquals(
            9003.3,
            re_terbilang('sembilan ribu tiga koma tiga ratus tujuh', 1)
        );
    }
}
