<?php

if (!function_exists('rupiah')) {
    /**
     * Ubah angka menjadi format rupiah.
     *
     * Contoh:
     * 10000 => Rp. 10.000
     * 8934544 => Rp. 8.934.544
     * 2994.11 => Rp. 2.994,11
     *
     * @param int|string $angka
     * @param int        $desimal jumlah desimal dibelakang koma
     *
     * @return string
     */
    function rupiah($angka, $desimal = 0)
    {
        return ribuan($angka, $desimal, 'Rp. ');
    }
}
