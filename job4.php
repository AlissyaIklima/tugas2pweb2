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