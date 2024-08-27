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