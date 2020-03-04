<?php

use PHPUnit\Framework\TestCase;

class TertanggalTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            tertanggal('2019-01-01'),
            'tanggal satu bulan januari tahun dua ribu sembilan belas'
        );

        $this->assertEquals(
            tertanggal('23 Feb 2016'),
            'tanggal dua puluh tiga bulan februari tahun dua ribu enam belas'
        );

        $this->assertEquals(
            tertanggal('1945/08/17'),
            'tanggal tujuh belas bulan agustus tahun seribu sembilan ratus empat puluh lima'
        );

        $this->assertEquals(
            tertanggal('2 Mei 2000'),
            'tanggal dua bulan mei tahun dua ribu'
        );

        $this->assertEquals(
            tertanggal('24 Okt 1800'),
            'tanggal dua puluh empat bulan oktober tahun seribu delapan ratus'
        );

        $this->assertEquals(
            tertanggal('1 June 2100'),
            'tanggal satu bulan juni tahun dua ribu seratus'
        );
    }
}
