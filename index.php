<?php
// ===============================
// 1. CLASS INDUK (ENTITY)
// ===============================
class Kendaraan {
    // ENCAPSULATION: properti dibuat protected
    protected $id;
    protected $nama;

    // CONSTRUCTOR
    public function __construct($id, $nama) {
        $this->id = $id;
        $this->nama = $nama;
    }

    // GETTER & SETTER
    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    // METHOD UMUM
    public function displayInfo() {
        return "ID: {$this->id}, Nama Kendaraan: {$this->nama}";
    }
}

// ===============================
// 2. CLASS TURUNAN
// ===============================

// Class Mobil (inheritance dari Kendaraan)
class Mobil extends Kendaraan {
    private $jumlahPintu;

    public function __construct($id, $nama, $jumlahPintu) {
        parent::__construct($id, $nama); // panggil constructor induk
        $this->jumlahPintu = $jumlahPintu;
    }

    // Override (POLYMORPHISM)
    public function displayInfo() {
        return parent::displayInfo() . ", Jenis: Mobil, Jumlah Pintu: {$this->jumlahPintu}";
    }
}

// Class Motor (inheritance dari Kendaraan)
class Motor extends Kendaraan {
    private $tipe;

    public function __construct($id, $nama, $tipe) {
        parent::__construct($id, $nama);
        $this->tipe = $tipe;
    }

    // Override (POLYMORPHISM)
    public function displayInfo() {
        return parent::displayInfo() . ", Jenis: Motor, Tipe: {$this->tipe}";
    }
}

// ===============================
// 3. MEMBUAT OBJEK DAN TAMPILKAN
// ===============================

$mobil1 = new Mobil(1, "Toyota Avanza", 4);
$mobil2 = new Mobil(2, "Honda Civic", 2);

$motor1 = new Motor(3, "Yamaha NMAX", "Matic");
$motor2 = new Motor(4, "Kawasaki Ninja", "Sport");

// ===============================
// 4. TAMPILKAN DI BROWSER
// ===============================
echo "<h2>Sistem Manajemen Kendaraan di Parkiran</h2>";

echo "<p>" . $mobil1->displayInfo() . "</p>";
echo "<p>" . $mobil2->displayInfo() . "</p>";
echo "<p>" . $motor1->displayInfo() . "</p>";
echo "<p>" . $motor2->displayInfo() . "</p>";
?>
