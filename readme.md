# MODUL 3 DAN 4
# JOBSHEET 1
Object-Oriented Programming (OOP) adalah paradigma pemrograman yang memodelkan masalah dunia nyata menggunakan konsep objek, seperti class dan object. Prinsip

```php
<?
// class
// class termasuk template untuk objek yang mempiliki poperti
class Mahasiswa{
    // properti
    // didalam class mahasiswa terdapat nama, nim, jurusan
    // public artinya dapat dilihat oleh siapa saja yang memasuki halaman tersebut
    public $nama;
    public $nim;
    public $jurusan;
    //construct 
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    public function tampilkanData(){
        return "nama : $this->nama, nim : $this->nim, jurusan : $this->jurusan";
    }
}
$mahasiswa1 = new Mahasiswa('candra', '121314', 'Teknik Informatika');
echo $mahasiswa1->tampilkanData();
?>
```
## output
```bash
nama : Alissya Iklima Nur Ramadani, nim : 230302003, jurusan : Komputer Dan Bisnis
```
## Penjelasan Output
output yang ditampilkan nama, nim, jurusan karena apa?
karena didalam class mahasiswa menginputkan properti yang sudah dijelaskan diatas.
lalu membuat koneksi dengan metode construct yang didalamnya terdapat nama, nim, jurusan. dan tidak lupa membuat metode tampilkanData(). lalu memanggil kembali nama, nim, jurusan.
dan dibagian objekpun meng echo tampilkanData(); 
## Referensi Kode

[COM](https://www.warungbelajar.com/)
----------------------------------------
# JOBSHEET 2

Object-Oriented Programming (OOP) adalah paradigma pemrograman yang memodelkan masalah dunia nyata menggunakan konsep objek, seperti class dan object. Prinsip

```php
<?
<?php
// class termasuk template untuk objek yang mempiliki poperti
// didalam class Mahasiswa terdapat 3 properti yang diprivate
class Mahasiswa {
    // private artinya hanya mahasiswa saja yang dapat melihat
    Private $nama;
    Private $nim;
    Private $jurusan;
    // construct dipakai untuk koneksi
    // properti "$nama, $nim, $jurusan"
    // objek $this->....
    public function  __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    } 
    //  get mengambil value 
    public function getNama(){
        return $this->nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getJurusan(){
        return $this->jurusan;
    }
    //set memasukan value 
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}
// objek
// membuat objek baru dan menyimpan dalam variable mahasiswa
$mahasiswa1 = new Mahasiswa("Alissya Iklima Nur Ramadani", "230302003", "Komputer Dan Bisnis");
echo  $mahasiswa1-> getNama();
echo "<br>";
echo  $mahasiswa1-> getNim();
echo "<br>";
echo  $mahasiswa1-> getJurusan();
?>
?>
```
## output
```bash
Alissya Iklima Nur Ramadani
230302003
Komputer Dan Bisnis
```
## Penjelasan Output
dalam output kali ini menggunakan get dan set. get itu untuk mengambil value, sedangkan set itu sendiri untuk memasukan value. jadi hasil output yang ditampilkan itu nama, nim, jurusan karena, disebelumnya kita melakukan inputan metode get di class mahasiswa.
## Referensi Kode

[COM](https://www.warungbelajar.com/)

----------------------------------------
# JOBSHEET 3

Object-Oriented Programming (OOP) adalah paradigma pemrograman yang memodelkan masalah dunia nyata menggunakan konsep objek, seperti class dan object. Prinsip

```php
<?
<!-- pewarisan  -->
<?php
class Pengguna{
    // hanya bisa diakses oleh class itu sendiri dan class turunannya
    protected $nama;
    // merupakan fungsi khusus yang nanti akan memanggil objek yang dibuat
    public function __construct($nama){
        $this->nama = $nama;
    }
    //  get mengambil value 
    public function getNama(){
        return $this->nama;
    }
}
// extends yaitu sebuah pewarisan
// jadi bisa dikatakan  class Dosen mewarisi poperti Pengguna
class Dosen extends Pengguna{
    // jika privat berarti hanya dapat diakses oleh class itu sendiri dan class turunannya
    private $penulis;
    // construct dipakai untuk koneksi
    public function __construct($nama, $matakuliah){
        // memanggil dan memastikan kalau variable atau properti memiliki nilai
        parent::__construct($nama);
        // memastikan memiliki nilai
        $this->matakuliah = $matakuliah;
    }
    // berperan untuk mengambil nilai getPenulis
    public function getPenulis(){
        return $this->matakuliah;
    }
}
// objek
// membuat objek baru $pengguna1
$pengguna1 = new Pengguna("Alissya Iklima Nur Ramadani", "230302003", "Komputer Dan Bisnis");
echo $pengguna1->getNama();
?>
?>
```
## output
```bash
Alissya Iklima Nur Ramadani
```
## Penjelasan Output
kenapa pada output kali ini hanya menampilkan nama saja? 
dikarenakan saat membuat metode get di dalam class pengguna hanya menambahkan getNama lalu memanggilkembali dengan cara mereturn.
## Referensi Kode

[COM](https://www.warungbelajar.com/)

----------------------------------------
# JOBSHEET 4

Object-Oriented Programming (OOP) adalah paradigma pemrograman yang memodelkan masalah dunia nyata menggunakan konsep objek, seperti class dan object. Prinsip

```php
<?
<?php
// class
// class termasuk template untuk objek yang mempiliki poperti
class Pengguna{
    public function __construct(){

    }
    // dimana dapat mengakses fitur yang dapat mengembalikan "masuk ke web"
    public function aksesFitur(){
        return "Masuk ke web";
    }
}
// class mahasiswa mewarisi pengguna
class Mahasiswa extends Pengguna{
    public function __construct(){

    }
    // dimana dapat mengakses fitur yang dapat mengembalikan "lihat hasil"
    public function aksesFitur(){
        return "Lihat Hasil";
    }
}
// class dosen mewarisi pengguna
class Dosen extends Pengguna{
    public function __construct(){

    }
    // dimana dapat mengakses fitur yang dapat mengembalikan "edit halaman"
    public function aksesFitur(){
        return "Edit Halaman";
    }
}
// objek
// objek ini bersifat array
$lihat = [new pengguna(), new Mahasiswa(), new Dosen()];
// menggunakan perulangan foreach
// dimana objek $lihat diubah menjadi $akses
foreach ($lihat as $akses){
    // menampilkan aksesFitur
    echo $akses->aksesFitur();
    echo "<br>";
}
?>
?>
```
## output
```bash
Masuk ke web
Lihat Hasil
Edit Halaman
```
## Penjelasan Output
kenapa dibagian objek hanya menampilkan echo aksesFitur(), dikarenakan pada saat meng inputkan pada bagian class memiliki fungsi yang sama untuk dapat mengaksesfitur disetiap class nya.
## Referensi Kode

[COM](https://www.warungbelajar.com/)
----------------------------------------
# JOBSHEET 5

Object-Oriented Programming (OOP) adalah paradigma pemrograman yang memodelkan masalah dunia nyata menggunakan konsep objek, seperti class dan object. Prinsip

```php
<?php
// abstract class tidak dapat digunakan dalam pembuatan objek
// dalam membuat abstract class perlu menambahkan perintah di depan class
abstract class Pengguna{
    // di line 5 aksesFitur akan manampilkan aksesFitur yang ada di dalam
    // class dosen dan class mahasiwa
    abstract public function aksesFitur();
}
// class mahasiswa mewarisi pengguna
class Mahasiswa extends Pengguna{
    public function __construct(){

    }
    public function aksesFitur(){
        return "Lihat Hasil";
    }
}
// class dosen mewarisi pengguna
class Dosen extends Pengguna{
    public function __construct(){

    }
    public function aksesFitur(){
        return "Edit Halaman";
    }
}
// membuat objek baru dan menyimpan dalam variable mahasiswa
$mahasiswa = new Mahasiswa();
// membuat objek baru dan menyimpan dalam variable dosen
$dosen = new Dosen();
// menampilkan aksesFitur
echo $mahasiswa->aksesFitur(); 
echo "<br>";
// menampilkan aksesFitur
echo $dosen->aksesFitur(); 
?>
```
## output
```bash
Lihat Hasil
Edit Halaman
```
## Penjelasan Output
output yang ditampilkan echo aksesFitur() dimana aksesFitur() ini berada di setiap class dosen, mahsiswa, pengguna. jadi saat dipanggil atau ditampilkan hanya menampilkan aksesFitur yang sudah ada nilainya.
## Referensi Kode

[COM](https://www.warungbelajar.com/)
