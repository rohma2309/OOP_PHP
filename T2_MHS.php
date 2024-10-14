<?php
echo '<link rel="stylesheet" type="text/css" href="1MHS.css">';

// Parent class Mahasiswa
class Mahasiswa
{
    // Properties
    public $nama;
    public $nim;
    public $jurusan;

    function __construct($nama, $nim, $jurusan)
    {
        echo '<div class="container">';
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Function untuk menampilkan informasi mahasiswa
    public function tampilkanInfo()
    {
        //echo "Nama: " . $this->nama . "<br>";
        //echo "NIM: " . $this->nim . "<br>";
        //echo "Jurusan: " . $this->jurusan . "<br>";

        echo '<div class="mahasiswa-info">';
        echo '<div class="mahasiswa-card">';
        echo "<div><label>Nama &ensp; &emsp;: </label>" . $this->nama . "</div>";
        echo "<div><strong>NIM &emsp; &emsp; : </label> " . $this->nim . "</div>";
        echo "<div><strong>Jurusan &ensp;: </label> " . $this->jurusan . "</div>";
        echo '</div>';
        echo '</div>';
    }
}

// Child class MahasiswaSkripsi
class MahasiswaSkripsi extends Mahasiswa
{
    // Properties tambahan
    public $judulSkripsi;

    // Constructor
    public function __construct($nama, $nim, $jurusan, $judulSkripsi)
    {
        // Memanggil constructor parent class
        parent::__construct($nama, $nim, $jurusan);
        $this->judulSkripsi = $judulSkripsi;
    }

    // Function untuk menampilkan informasi mahasiswa skripsi
    public function tampilkanInfo()
    {
        echo '<div class="mahasiswa-card">';
        parent::tampilkanInfo();
        echo "Judul Skripsi: " . $this->judulSkripsi . "<br>";
    }
}

// Child class MahasiswaTransfer
class MahasiswaTransfer extends Mahasiswa
{
    // Properties tambahan
    public $universitasAsal;

    // Constructor
    public function __construct($nama, $nim, $jurusan, $universitasAsal)
    {
        // Memanggil constructor parent class
        parent::__construct($nama, $nim, $jurusan);
        $this->universitasAsal = $universitasAsal;
    }

    // Function untuk menampilkan informasi mahasiswa transfer
    public function tampilkanInfo()
    {
        parent::tampilkanInfo();
        echo "Universitas Asal: " . $this->universitasAsal . "<br>";
    }
}
echo '<h1>Informasi Mahasiswa IWIMA</h1>';
// Membuat objek mahasiswa skripsi
$mahasiswaSkripsi = new MahasiswaSkripsi("Rohmanisah", "23.230.0009", "Sistem Informasi", "Pengembangan Aplikasi");
$mahasiswaSkripsi->tampilkanInfo();

echo "<br>";

// Membuat objek mahasiswa transfer
$mahasiswaTransfer = new MahasiswaTransfer("RohmaIrama", "23.230.0008", "Sistem Informasi", "Universitas Gajah Mada");
$mahasiswaTransfer->tampilkanInfo();

?>

</html>