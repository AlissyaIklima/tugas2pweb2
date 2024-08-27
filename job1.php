<?php
// class
// class termasuk template untuk objek yang mempiliki poperti
class Mahasiswa {
    // properti
    // didalam class mahasiswa terdapat nama, nim, jurusan
    // public artinya dapat dilihat oleh siapa saja yang memasuki halaman tersebut
    public $nama;
    public $nim;
    public $jurusan;
    // metode
    // construct dipakai untuk koneksi
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // tampilData digunakan untuk menampilkan data dari objek
    public function tampilkanData(){
        return "nama : $this->nama, nim : $this->nim, jurusan : $this->jurusan";
    }
}
// objek
$mahasiswa1 = new Mahasiswa("Alissya Iklima Nur Ramadani", "230302003", "Komputer Dan Bisnis");
// echo disini berguna menampilkan tampilkanData yang sudah diinput diatas
echo $mahasiswa1->tampilkanData();
?>