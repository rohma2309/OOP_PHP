<?php
// Menyisipkan link ke file CSS
echo '<link rel="stylesheet" type="text/css" href="1MHS.css">';

// Kelas dasar Mobil
class Mobil
{
    protected $nama;
    protected $merek;

    public function __construct($nama, $merek)
    {
        // Menyimpan informasi mobil
        $this->nama = $nama;
        $this->merek = $merek;
    }

    public function cetakInfo()
    {
        // Menampilkan informasi mobil dalam format HTML
        echo '<div class="mahasiswa-card">'; // Menggunakan class mahasiswa-card untuk CSS
        echo "<div class='info-item'><label>Nama &emsp; &emsp; &emsp; &emsp;&emsp;  : </label>" . $this->nama . "</div>";
        echo "<div class='info-item'><label>Merek &emsp; &emsp; &emsp;&emsp; &emsp; : </label>" . $this->merek . "</div>";
    }
}

// Kelas turunan MobilSport
class MobilSport extends Mobil
{
    private $speed;

    public function __construct($nama, $merek, $speed)
    {
        parent::__construct($nama, $merek);
        $this->speed = $speed;
    }

    public function cetakInfo()
    {
        // Menampilkan informasi mobil sport
        echo '<div class="mahasiswa-info">'; // Menggunakan class mahasiswa-info
        parent::cetakInfo(); // Memanggil informasi dari kelas parent
        // Menambahkan informasi kecepatan turbo ke dalam kartu mobil
        echo "<div class='info-item'><label>Kecepatan Turbo &emsp;: </label>Mobil Sport ini dapat melaju dengan kecepatan turbo hingga " . $this->speed . " km/jam.</div>";
        echo '</div></div>'; // Menutup div mahasiswa-info dan mahasiswa-card
    }
}

// Kelas turunan CityCar
class CityCar extends Mobil
{
    private $model;

    public function __construct($nama, $merek, $model)
    {
        parent::__construct($nama, $merek);
        $this->model = $model;
    }

    public function irit()
    {
        return "City Car ini sangat irit bahan bakar dengan model " . $this->model;
    }

    public function sensor()
    {
        return "City Car ini dilengkapi dengan sensor parkir.";
    }

    public function cetakInfo()
    {
        // Menampilkan informasi city car
        echo '<div class="mahasiswa-info">'; // Menggunakan class mahasiswa-info
        parent::cetakInfo(); // Memanggil informasi dari kelas parent
        echo '<div class="info-item">' . $this->irit() . '</div>'; // Menampilkan informasi irit
        echo '<div class="info-item">' . $this->sensor() . '</div>'; // Menampilkan informasi sensor
        echo '</div>'; // Menutup div mahasiswa-info
    }
}

// Judul
echo '<div class="container">'; // Menggunakan class container untuk styling
echo '<h1>Informasi Mobil</h1>';

// Membuat objek dari kelas MobilSport
$mobilSport = new MobilSport("Lamborghini Aventador", "Lamborghini", 350);
echo "<h2>Info Mobil Sport:</h2>";
$mobilSport->cetakInfo(); // Menampilkan informasi mobil sport

// Membuat objek dari kelas CityCar
$cityCar = new CityCar("Honda Brio Satya", "Honda", "Hatchback");
echo "<h2>Info City Car:</h2>";
$cityCar->cetakInfo(); // Menampilkan informasi city car

echo '</div>'; // Menutup div container
