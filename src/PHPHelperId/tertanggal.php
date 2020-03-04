<?php

if (!function_exists('tertanggal')) {
    /**
     * Ubah tanggal menjadi kalimat tertanggal.
     *
     * Contoh:
     * 23 Feb 2015 => tanggal dua puluh tiga bulan februari tahun dua ribu lima belas
     * 2020-02-25 => tanggal dua puluh lima bulan februari tahun dua ribu dua puluh
     *
     * @param int|string $tanggal
     *
     * @return string
     */
    function tertanggal($tanggal)
    {
        setlocale(LC_TIME, 'id', 'id_ID');

        $tanggal = preg_replace('/januari/i', 'jan', $tanggal);
        $tanggal = preg_replace('/febuari|februari/i', 'feb', $tanggal);
        $tanggal = preg_replace('/maret/i', 'mar', $tanggal);
        $tanggal = preg_replace('/april/i', 'apr', $tanggal);
        $tanggal = preg_replace('/mei/i', 'may', $tanggal);
        $tanggal = preg_replace('/juni/i', 'jun', $tanggal);
        $tanggal = preg_replace('/juli/i', 'jul', $tanggal);
        $tanggal = preg_replace('/agustus|ags|agu/i', 'aug', $tanggal);
        $tanggal = preg_replace('/oktober|okt/i', 'oct', $tanggal);
        $tanggal = preg_replace('/desember|des/i', 'dec', $tanggal);

        $d = new DateTime($tanggal);

        $hasil = 'tanggal ' . terbilang($d->format('d'));
        $hasil .= ' bulan ' . strftime('%B', $d->getTimestamp());
        $hasil .= ' tahun ' . terbilang($d->format('Y'));

        return strtolower($hasil);
    }
}
