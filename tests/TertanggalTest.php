<?php

use PHPUnit\Framework\TestCase;

class TertanggalTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            'tanggal satu bulan januari tahun dua ribu sembilan belas',
            tertanggal('2019-01-01')
        );

        $this->assertEquals(
            'tanggal dua puluh tiga bulan februari tahun dua ribu enam belas',
            tertanggal('23 Feb 2016')
        );

        $this->assertEquals(
            'tanggal tujuh belas bulan agustus tahun seribu sembilan ratus empat puluh lima',
            tertanggal('1945/08/17')
        );

        $this->assertEquals(
            'tanggal dua bulan mei tahun dua ribu',
            tertanggal('2 Mei 2000')
        );

        $this->assertEquals(
            'tanggal dua puluh empat bulan oktober tahun seribu delapan ratus',
            tertanggal('24 Okt 1800')
        );

        $this->assertEquals(
            'tanggal satu bulan juni tahun dua ribu seratus',
            tertanggal('1 June 2100')
        );
    }
}
