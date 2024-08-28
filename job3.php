<!-- pewarisan  -->
 <!-- enkapsuliasi adalah sebuah teknik -->
  <!-- instansiasi adalah membuat sebuah objek dari kelas itu -->
   <!-- inisialisasi adalah mengakses metode  -->
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
// membuat objek baru(instansiasi) $pengguna1
$pengguna1 = new Pengguna("Alissya Iklima Nur Ramadani", "230302003", "Komputer Dan Bisnis");
echo $pengguna1->getNama();
?>