<?php

if (!function_exists('terbilang')) {
    /**
     * Ubah angka menjadi kalimat terbilang.
     *
     * Contoh:
     * 17 => tujuh belas
     * 1230000 => satu juta dua ratus tiga puluh ribu
     *
     * @param int|string $angka
     *
     * @return string
     */
    function terbilang($angka)
    {
        $n = (int) $angka;

        if ($n == 0) {
            return 'nol';
        }

        $bilangan = [
            'nol', 'satu', 'dua', 'tiga', 'empat', 'lima',
            'enam', 'tujuh', 'delapan', 'sembilan'
        ];
        $basis = [
            1000000000000000, 1000000000000, 1000000000000,
            1000000000, 1000000, 1000, 100, 10, 1
        ];
        $unit = [
            'kuadriliun', 'triliun', 'biliun', 'milyar',
            'juta', 'ribu', 'ratus', 'puluh', ''
        ];

        $i = 0;
        $hasil = '';

        while ($n != 0) {
            $hasilBagi = intval($n / $basis[$i]);

            if ($hasilBagi >= 10) {
                $hasil .= terbilang($hasilBagi) . ' ' . $unit[$i] . ' ';
            } elseif ($hasilBagi > 0 && $hasilBagi < 10) {
                $hasil .= $bilangan[$hasilBagi] . ' ' . $unit[$i] . ' ';
            }

            $n -= $basis[$i] * $hasilBagi;
            $i++;
        }

        $hasil = preg_replace('/satu puluh (\w+)/i', '\1 belas', $hasil);
        $hasil = preg_replace('/satu (ribu|ratus|puluh|belas)/', 'se\1', $hasil);
        $hasil = preg_replace('/\s{2,}/', ' ', trim($hasil));

        return $hasil;
    }
}
