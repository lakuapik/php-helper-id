<?php

use PHPUnit\Framework\TestCase;

class ReTertanggalTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            '2019-01-01',
            re_tertanggal('tanggal satu bulan januari tahun dua ribu sembilan belas')
        );

        $this->assertEquals(
            '23 Feb 2016',
            re_tertanggal('tanggal dua puluh tiga bulan februari tahun dua ribu enam belas', '%d %b %Y')
        );

        $this->assertEquals(
            '1945/08/17',
            re_tertanggal('tanggal tujuh belas bulan agustus tahun seribu sembilan ratus empat puluh lima', '%Y/%m/%d')
        );

        $this->assertEquals(
            '2 Mei 2000',
            re_tertanggal('tanggal dua bulan mei tahun dua ribu', '%e %B %Y')
        );

        $this->assertEquals(
            '24 Okt 1800',
            re_tertanggal('tanggal dua puluh empat bulan oktober tahun seribu delapan ratus', '%e %b %Y')
        );

        $this->assertEquals(
            get_class(new DateTime()),
            get_class(re_tertanggal('tanggal tiga januari bulan agustus tahun dua ribu', '', true))
        );

        $this->assertEquals(
            '01 June 2100',
            re_tertanggal('tanggal satu bulan juni tahun dua ribu seratus', '%d %B %Y', false, 'en_US.utf8')
        );
    }
}
