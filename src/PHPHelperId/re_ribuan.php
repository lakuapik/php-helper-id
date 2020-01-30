<?php

if (!function_exists('re_ribuan')) {
    /**
     * Ubah angka dari format ribuan ke angka biasa.
     *
     * Contoh:
     * 1.000 => 1000
     * 8.923.456 => 8923456
     * 28.495,24 => 28495.24
     *
     * @param string     $ribuan
     * @param int        $desimal jumlah desimal dibelakang koma
     *
     * @return int|float
     */
    function re_ribuan($ribuan, $desimal = 0)
    {
        // menurut saya pribadi, ini kurang efektif, tapi setidaknya jalan.
        // bagi kalian yang bisa menyederhanakan, silahkan submit pull request.

        $r1 = preg_replace('/[^0-9\.\,]/', '', $ribuan);

        $r2 = explode(',', $r1);

        $r3 = (int) str_replace('.', '', @$r2[0]);

        if ($desimal > 0) {
            $r3 += round(@$r2[1]/pow(10, strlen(@$r2[1])), $desimal);
        }

        return $desimal > 0 ? floatval($r3) : intval($r3);
    }
}
