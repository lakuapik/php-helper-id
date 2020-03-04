<?php

use PHPUnit\Framework\TestCase;

class ReTertanggalTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            re_tertanggal('tanggal satu bulan januari tahun dua ribu sembilan belas'),
            '2019-01-01'
        );

        $this->assertEquals(
            re_tertanggal('tanggal dua puluh tiga bulan februari tahun dua ribu enam belas', '%d %b %Y'),
            '23 Feb 2016'
        );

        $this->assertEquals(
            re_tertanggal('tanggal tujuh belas bulan agustus tahun seribu sembilan ratus empat puluh lima', '%Y/%m/%d'),
            '1945/08/17'
        );

        $this->assertEquals(
            re_tertanggal('tanggal dua bulan mei tahun dua ribu', '%e %B %Y'),
            '2 Mei 2000'
        );

        $this->assertEquals(
            re_tertanggal('tanggal dua puluh empat bulan oktober tahun seribu delapan ratus', '%e %b %Y'),
            '24 Okt 1800'
        );

        $this->assertInstanceOf(
            get_class(re_tertanggal('tanggal tiga januari bulan agustus tahun dua ribu', '', true)),
            (new DateTime())
        );

        $this->assertEquals(
            re_tertanggal('tanggal satu bulan juni tahun dua ribu seratus', '%d %B %Y', false, 'en_US'),
            '01 June 2100'
        );
    }
}
