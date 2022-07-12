# php-helper-id

![Version](https://img.shields.io/packagist/v/lakuapik/php-helper-id)
![Downloads](https://img.shields.io/packagist/dt/lakuapik/php-helper-id)
![License](https://img.shields.io/packagist/l/lakuapik/php-helper-id)

Kumpulan fungsi bantuan PHP yang digunakan secara umum di Indonesia.

## Instalasi

```
composer require lakuapik/php-helper-id
```

## Fungsi
* [ribuan](#ribuan)
* [re_ribuan](#re_ribuan)
* [romawi](#romawi)
* [rupiah](#rupiah)
* [re_rupiah](#re_rupiah)
* [terbilang](#terbilang)
* [re_terbilang](#re_terbilang)
* [tertanggal](#tertanggal)
* [re_tertanggal](#re_tertanggal)

## Penggunaan

### ribuan

```php
/**
 * Ubah angka menjadi format ribuan.
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

### re_ribuan

```php
/**
 * Ubah angka dari format ribuan ke angka biasa.
 *
 * @param string $ribuan
 * @param int    $desimal jumlah desimal dibelakang koma
 *
 * @return int|float
 */

echo re_ribuan('100.000'); // 100000
echo re_ribuan('111.234.135', 2); // 111234135
echo re_ribuan('345,1111111111', 2); // 345.11
echo re_ribuan('$222.123,16', 1); // 222123.2
echo re_ribuan('Per 14.500,00 unit'); // 14500
```

### romawi

```php
/**
 * Ubah angka menjadi format romawi.
 *
 * @param int|string $angka
 * @param boolean    $kapital
 *
 * @return string
 */

echo romawi(1000); // M
echo romawi('1234'); // MCCXXXIV
echo romawi(1234, false); // mccxxxiv
```

### rupiah

```php
/**
 * Ubah angka menjadi format rupiah.
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

### re_rupiah

```php
 /**
 * Ubah angka dari format rupiah ke angka biasa.
 *
 * Contoh:
 *
 * @param string $rupiah
 * @param int    $desimal jumlah desimal dibelakang koma
 *
 * @return int|float
 */

echo re_rupiah('Rp. 100.000'); // 100000
echo re_rupiah('Rp. 525.000'); // 525000
echo re_rupiah('Rp. 178.245.123,01234', 2); // 178245123.01
echo re_rupiah('Rp. 212,20', 2); // 212.2
```

### terbilang

```php
/**
 * Ubah angka menjadi kalimat terbilang.
 *
 * @param int|string $angka
 *
 * @return string
 */

echo terbilang(99); // sembilan puluh sembilan
echo terbilang(-554); // minus lima ratus lima puluh empat
echo terbilang('1234567'); // satu juta dua ratus tiga puluh empat ribu lima ratus enam puluh tujuh
echo terbilang(333.3); // tiga ratus tiga puluh tiga koma tiga
echo terbilang(1000000000000000); // satu kuadriliun
```

### re_terbilang

```php
/**
 * Ubah angka dari format terbilang ke angka biasa.
 *
 * @param string $terb kalimat terbilang
 * @param int    $desimal jumlah desimal dibelakang koma
 *
 * @return int|float
 */

echo re_terbilang('sembilan puluh sembilan'); // 99
echo re_terbilang('minus lima ratus lima puluh empat'); // -554
echo re_terbilang('satu juta dua ratus tiga puluh empat ribu lima ratus enam puluh tujuh'); // 1234567
echo re_terbilang('tiga ratus tiga puluh tiga koma tiga'); // 333.3
echo re_terbilang('dua koma lima ratus dua puluh tiga', 1); // 2.5
echo re_terbilang('satu kuadriliun'); // 1000000000000000
```

### tertanggal

```php
/**
 * Ubah tanggal menjadi kalimat tertanggal.
 *
 * @param string $tanggal
 *
 * @return string
 */

echo tertanggal('2019-01-01'); // tanggal satu bulan januari tahun dua ribu sembilan belas
echo tertanggal('23 Feb 2016'); // tanggal dua puluh tiga bulan februari tahun dua ribu enam belas
echo tertanggal('1945/08/17'); // tanggal tujuh belas bulan agustus tahun seribu sembilan ratus empat puluh lima
echo tertanggal('2 Mei 2000'); // tanggal dua bulan mei tahun dua ribu
echo tertanggal('24 Okt 1800'); // tanggal dua puluh empat bulan oktober tahun seribu delapan ratus
echo tertanggal('1 June 2100'); // tanggal satu bulan juni tahun dua ribu seratus
```

### re_tertanggal

```php
/**
 * Ubah angka dari format tertanggal ke tanggal biasa sesuai format yang diberikan.
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

echo re_tertanggal('tanggal satu bulan januari tahun dua ribu sembilan belas'); // 2019-01-01
echo re_tertanggal('tanggal dua puluh tiga bulan februari tahun dua ribu enam belas', '%d %b %Y'); //  23 Feb 2016
echo re_tertanggal('tanggal tujuh belas bulan agustus tahun seribu sembilan ratus empat puluh lima', '%Y/%m/%d'); // 1945/08/17
echo re_tertanggal('tanggal dua bulan mei tahun dua ribu', '%e %B %Y'); // 2 Mei 2000
echo re_tertanggal('tanggal dua puluh empat bulan oktober tahun seribu delapan ratus', '%e %b %Y'); // 24 Okt 1800
echo re_tertanggal('tanggal satu bulan juni tahun dua ribu seratus', '%d %B %Y', false, 'en_US'); // 01 June 2100
```
