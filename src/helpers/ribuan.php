<?php

if (! function_exists('ribuan')) {
    /**
     * Ubah angka menjadi format ribuan.
     *
     * Contoh:
     * 1000 => 1.000
     * 8923456 => 8.923.456
     * 28495.24 => 28.495,24
     *
     * @param int|string $angka
     * @param int        $desimal jumlah desimal dibelakang koma
     * @param string     $prefix
     * @param string     $suffix
     *
     * @return string
     */
    function ribuan($angka, $desimal = 0, $prefix = '', $suffix = '')
    {
        $ribuan = number_format((float) $angka, $desimal, ',', '.');

        return $prefix.$ribuan.$suffix;
    }
}
