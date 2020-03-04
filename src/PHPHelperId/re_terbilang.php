<?php

if (!function_exists('re_terbilang')) {
    /**
     * Ubah angka dari format terbilang ke angka biasa.
     *
     * Contoh:
     * seribu => 1000
     * minus sembilan puluh dua => -92
     * tiga juta koma dua => 3000000,2
     *
     * @param string $terb kalimat terbilang
     * @param int    $desimal jumlah desimal dibelakang koma
     *
     * @return int|float
     */
    function re_terbilang($terbilang, $desimal = 0)
    {
        $bilangan = [
            'satu'     => 1,
            'dua'      => 2,
            'tiga'     => 3,
            'empat'    => 4,
            'lima'     => 5,
            'enam'     => 6,
            'tujuh'    => 7,
            'delapan'  => 8,
            'sembilan' => 9,
        ];

        $basis = [
            'kuadriliun' => pow(10, 15),
            'triliun'    => pow(10, 12),
            'biliun'     => pow(10, 12),
            'milyar'     => pow(10, 9),
            'juta'       => pow(10, 6),
            'ribu'       => pow(10, 3),
            'ratus'      => pow(10, 2),
            'puluh'      => pow(10, 1),
        ];

        $tb = strtolower(trim($terbilang));
        $tb = preg_replace('/se(ribu|ratus|puluh|belas)/', 'satu \1', $tb);
        $tb = preg_replace('/(\w+) belas/', 'satu puluh \1', $tb);

        $hasil = 0;
        $minus = 1;
        $koma  = 0;

        preg_match('/minus/', $tb, $m1);
        if (count($m1) > 0) {
            $tb = preg_replace('/minus/', '', $tb);
            $minus = -1;
        }

        preg_match('/koma(.*\w)/', $tb, $m2);
        if (count($m2) > 1) {
            $koma = re_terbilang($m2[1]);
            $koma = $koma / pow(10, strlen($koma));
            $tb = preg_replace('/koma.*\w/', '', $tb);
        }

        $ex = explode(' ', $tb);

        for ($i = 0; $i < count($ex); $i++) {
            $bl = @$bilangan[$ex[$i]];

            if (in_array(@$ex[$i+1], array_keys($basis))) {
                $bl *= $basis[@$ex[$i+1]];

                if (in_array(@$ex[$i+1], ['ratus', 'puluh'])) {
                    foreach (array_slice($basis, 0, 6) as $x => $y) {
                        if (in_array($x, array_slice($ex, $i+1))) {
                            $bl *= $y;
                            break;
                        }
                    }
                }

                $i  += 1;
            }

            $hasil += $bl;
        }

        $akhir = $minus * ($hasil + $koma);

        return $desimal ? round($akhir, $desimal) : $akhir;
    }
}