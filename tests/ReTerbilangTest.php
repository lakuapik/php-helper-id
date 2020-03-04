<?php

use PHPUnit\Framework\TestCase;

class ReTerbilangTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            re_terbilang('nol'),
            0
        );

        $this->assertEquals(
            re_terbilang('satu'),
            1
        );

        $this->assertEquals(
            re_terbilang('dua'),
            2
        );

        $this->assertEquals(
            re_terbilang('tiga'),
            3
        );

        $this->assertEquals(
            re_terbilang('empat'),
            4
        );

        $this->assertEquals(
            re_terbilang('lima'),
            5
        );

        $this->assertEquals(
            re_terbilang('enam'),
            6
        );

        $this->assertEquals(
            re_terbilang('tujuh'),
            7
        );

        $this->assertEquals(
            re_terbilang('delapan'),
            8
        );

        $this->assertEquals(
            re_terbilang('sembilan'),
            9
        );

        $this->assertEquals(
            re_terbilang('sepuluh'),
            10
        );

        $this->assertEquals(
            re_terbilang('sebelas'),
            11
        );

        $this->assertEquals(
            re_terbilang('dua belas'),
            12
        );

        $this->assertEquals(
            re_terbilang('tiga belas'),
            13
        );

        $this->assertEquals(
            re_terbilang('empat belas'),
            14
        );

        $this->assertEquals(
            re_terbilang('lima belas'),
            15
        );

        $this->assertEquals(
            re_terbilang('enam belas'),
            16
        );

        $this->assertEquals(
            re_terbilang('tujuh belas'),
            17
        );

        $this->assertEquals(
            re_terbilang('delapan belas'),
            18
        );

        $this->assertEquals(
            re_terbilang('sembilan belas'),
            19
        );

        $this->assertEquals(
            re_terbilang('dua puluh'),
            20
        );

        $this->assertEquals(
            re_terbilang('empat puluh dua'),
            42
        );

        $this->assertEquals(
            re_terbilang('sembilan puluh sembilan'),
            99
        );

        $this->assertEquals(
            re_terbilang('seratus'),
            100
        );

        $this->assertEquals(
            re_terbilang('seratus dua puluh satu'),
            121
        );

        $this->assertEquals(
            re_terbilang('lima ratus empat'),
            504
        );

        $this->assertEquals(
            re_terbilang('lima ratus lima puluh empat'),
            554
        );

        $this->assertEquals(
            re_terbilang('seribu'),
            1000
        );

        $this->assertEquals(
            re_terbilang('dua puluh ribu'),
            20000
        );

        $this->assertEquals(
            re_terbilang('satu juta'),
            1000000
        );

        $this->assertEquals(
            re_terbilang('satu juta dua ratus tiga puluh empat ribu lima ratus enam puluh tujuh'),
            1234567
        );

        $this->assertEquals(
            re_terbilang('sepuluh juta'),
            10000000
        );

        $this->assertEquals(
            re_terbilang('seratus juta'),
            100000000
        );

        $this->assertEquals(
            re_terbilang('satu milyar'),
            1000000000
        );

        $this->assertEquals(
            re_terbilang('satu triliun'),
            1000000000000
        );

        $this->assertEquals(
            re_terbilang('satu kuadriliun'),
            1000000000000000
        );

        $this->assertEquals(
            re_terbilang('sembilan ratus sembilan puluh sembilan triliun sembilan ratus sembilan puluh sembilan milyar sembilan ratus sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan'),
            999999999999999
        );

        $this->assertEquals(
            re_terbilang('minus satu juta'),
            -1000000
        );

        $this->assertEquals(
            re_terbilang('minus seratus dua puluh tiga'),
            -123
        );

        $this->assertEquals(
            re_terbilang('dua ratus empat puluh lima koma dua puluh empat'),
            245.24
        );

        $this->assertEquals(
            re_terbilang('minus seribu sembilan ratus tujuh puluh koma sebelas'),
            -1970.11
        );

        $this->assertEquals(
            re_terbilang('sembilan ribu tiga koma tiga ratus tujuh', 1),
            9003.3
        );
    }
}
