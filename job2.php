
<?php
// class termasuk template untuk objek yang mempiliki poperti
// didalam class Mahasiswa terdapat 3 properti yang diprivate
class Mahasiswa {
    // private artinya hanya mahasiswa saja yang dapat melihat
    // private dapat diakses dengan cara set dan get jika tidak menggunakan set dan get maka private tidak bisa dipanggil
    // private dapat diakses oleh class itu sendiri
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