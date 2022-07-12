<?php

if (! function_exists('re_rupiah')) {
    /**
     * Ubah angka dari format rupiah ke angka biasa.
     *
     * Contoh:
     * Rp. 1.000 => 1000
     * Rp. 8.923.456 => 8923456
     * Rp. 28.495,24 => 28495.24
     *
     * @param string $rupiah
     * @param int    $desimal jumlah desimal dibelakang koma
     *
     * @return int|float
     */
    function re_rupiah($rupiah, $desimal = 0)
    {
        return re_ribuan($rupiah, $desimal);
    }
}
