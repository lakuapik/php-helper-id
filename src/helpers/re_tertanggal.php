<?php

if (! function_exists('re_tertanggal')) {
    /**
     * Ubah angka dari format tertanggal ke tanggal biasa sesuai format yang diberikan.
     *
     * Contoh:
     * tanggal dua puluh tiga bulan februari tahun dua ribu lima belas => 2015-02-23
     * tanggal dua puluh lima bulan februari tahun dua ribu dua puluh => 25 Feb 2020
     *
     * Format mengacu ke: @link https://www.php.net/manual/en/function.strftime
     * Menggunakan strftime karena mengubah format tanggal ke lokal indonesia.
     *
     * @param string $tertanggal kalimat tertanggal
     * @param string $format format tanggal
     * @param bool   $asDate apakah return sebagai php date
     *
     * @return string|\DateTime
     */
    function re_tertanggal($tertanggal, $format = '%Y-%m-%d', $asDate = false, $locale = 'id_ID.utf8')
    {
        setlocale(LC_TIME, $locale, 'id_ID.UTF-8', 'id_ID', 'id');

        $tg = strtolower(trim($tertanggal));
        $tg = preg_replace('/januari/i', 1, $tg);
        $tg = preg_replace('/februari|febuari|pebruari|pebuari|peb/i', 2, $tg);
        $tg = preg_replace('/maret/i', 3, $tg);
        $tg = preg_replace('/april/i', 4, $tg);
        $tg = preg_replace('/mei/i', 5, $tg);
        $tg = preg_replace('/juni/i', 6, $tg);
        $tg = preg_replace('/juli/i', 7, $tg);
        $tg = preg_replace('/agustus|ags|agu/i', 8, $tg);
        $tg = preg_replace('/september/i', 9, $tg);
        $tg = preg_replace('/oktober|okt/i', 10, $tg);
        $tg = preg_replace('/november/i', 11, $tg);
        $tg = preg_replace('/desember|des/i', 12, $tg);
        $tg2 = preg_split('/(\d+)/', $tg);
        $tg3 = preg_match('/(\d+)/', $tg, $bulan);

        $tanggal = preg_replace('/tanggal/', '', @$tg2[0]);
        $tahun = preg_replace('/tahun/', '', @$tg2[1]);

        $ymd = implode('-', [
            re_terbilang($tahun),
            end($bulan),
            re_terbilang($tanggal),
        ]);

        if ($asDate) {
            return new DateTime($ymd);
        }

        $hasil = strftime($format, (new DateTime($ymd))->getTimestamp());

        // bentuk bakunya ada februari, bukan pebruari
        // https://kbbi.kemdikbud.go.id/entri/februari
        $pPattern = '/(p)(ebruari|ebuari|eb)/i';
        preg_match($pPattern, $hasil, $pMatch);
        if (count($pMatch) > 0) {
            $pStart = ctype_upper($pMatch[1]) ? 'F' : 'f';
            $pEnd = $pMatch[2] == 'eb' ? 'eb' : 'ebruari';
            $hasil = preg_replace($pPattern, $pStart.$pEnd, $hasil);
        }

        return trim($hasil);
    }
}
