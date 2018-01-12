# Steganologer v1

Pada Steganologer versi 1 memanfaatkan exif metadata untuk menyisipkan script loger.
untuk membaca metadata suatu gambar anda bisa memakai function [exif_read_data()](http://php.net/manual/en/function.exif-read-data.php) dan [read_exif_data()](http://php.net/manual/en/function.read-exif-data.php) pada php.

Untuk memanipulasi exif metadata anda bisa menggunakan pothoshop,exifpilot dll pada sistem operasi windows, sedangkan pada linux anda bisa menggunakan exiftool.
Anda bisa menyisipkannya di logo atau icon pada website.

```
exiftool -Comment="scriptloger" filegambar.jpg
```

### Reader


```php
$steganologer = exif_read_data("bunglon.jpg");
echo $steganologer['COMMENT'][0];
```