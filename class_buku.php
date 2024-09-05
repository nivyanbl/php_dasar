<?php
// Object
class Buku {
    public $judul;
    public $penulis; 

    // Constructor
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
}

// Membuat objek buku
$bukuSaya = new Buku("PHP untuk pemula", "Jane Doe");

// Mencetak properti objek
echo "Buku: " . $bukuSaya->judul . " oleh " . $bukuSaya->penulis . "<br>";
?>
