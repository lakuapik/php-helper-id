# php-helper-id

[![Build Status](https://travis-ci.com/lakuapik/php-helper-id.svg?branch=master)](https://travis-ci.com/lakuapik/php-helper-id)

Kumpulan fungsi bantuan PHP yang digunakan secara umum di Indonesia.

## Fungsi

* ribuan

```php
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

echo ribuan(20000); // 20.000
echo ribuan(48951.22, 1); // 48.951,2
echo ribuan(9014555.9245); // 9.014.556
echo ribuan(222123.16, 1, '$'); // $222.123,2
echo ribuan(14500, 2, 'Per ', ' unit'); // 'Per 14.500,00 unit',
```

* re_ribuan

```php
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

echo re_ribuan('100.000'); // 100000
echo re_ribuan('111.234.135', 2); // 111234135
echo re_ribuan('345,1111111111', 2); // 345.11
echo re_ribuan('$222.123,16', 1); // 222123.2
echo re_ribuan('Per 14.500,00 unit'); // 14500
```

* romawi

```php
/**
 * Ubah angka biasa menjadi angka romawi.
 *
 * Contoh:
 * 8 => VIII
 * 1234 => MCCXXXIV
 *
 * @param int|string $angka
 * @param boolean $kapital
 *
 * @return string
 */

echo romawi(1000); // M
echo romawi(1234); // MCCXXXIV
echo romawi(1234, false); // mccxxxiv
```

* rupiah

```php
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

echo rupiah(100000); // Rp. 100.000
echo rupiah('525000'); // Rp. 525.000
echo rupiah(178245123.01234, 2); // Rp. 178.245.123,01
echo rupiah('212.2', 2); // Rp. 212,20
```

* terbilang

```php
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

echo terbilang(99); // sembilan puluh sembilan
echo terbilang(554); // lima ratus lima puluh empat
echo terbilang('1234567'); // satu juta dua ratus tiga puluh empat ribu lima ratus enam puluh tujuh
echo terbilang(1000000000000000); // satu kuadriliun
```