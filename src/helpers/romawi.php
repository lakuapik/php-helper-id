<?php

if (! function_exists('romawi')) {
    /**
     * Ubah angka menjadi format romawi.
     *
     * Contoh:
     * 8 => VIII
     * 1234 => MCCXXXIV
     *
     * @param int|string $angka
     * @param bool    $kapital
     *
     * @return string
     */
    function romawi($angka, $kapital = true)
    {
        $n = (int) $angka;
        $hasil = '';

        $romawi = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        ];

        foreach ($romawi as $rom => $ang) {
            $v = intval($n / $ang);
            $hasil .= str_repeat($rom, $v);
            $n = $n % $ang;
        }

        if (! $kapital) {
            $hasil = strtolower($hasil);
        }

        return $hasil;
    }
}
