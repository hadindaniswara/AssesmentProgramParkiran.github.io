Proyek ini adalah implementasi dasar Object-Oriented Programming (OOP) menggunakan PHP untuk membuat sistem manajemen data kendaraan, yang disimulasikan sebagai data kendaraan di sebuah parkiran
Sistem Manajemen Kendaraan ini adalah contoh implementasi dasar dari Object-Oriented Programming (OOP) dalam PHP, mensimulasikan pengelolaan data kendaraan sederhana di suatu area parkiran. Program ini secara eksplisit menunjukkan empat pilar utama OOP
Program terdiri dari tiga class utama:

Kendaraan

Properti: $id, $nama.

Metode: __construct(), getId(), getNama(), setNama(), displayInfo().

Mobil (Extends Kendaraan)

Properti Tambahan: $jumlahPintu.

Metode: __construct(), displayInfo() (Override).

Motor (Extends Kendaraan)

Properti Tambahan: $tipe.

Metode: __construct(), displayInfo() (Override).
