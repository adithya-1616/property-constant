<?php

class Produk {
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    // Constructor
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Static Method
    public static function pajak($harga) {
        return $harga * self::PAJAK;
    }

    public static function total($harga) {
        return $harga + self::pajak($harga);
    }

    public function tampilkanProduk() {
        echo "Kode Produk: " . $this->kode . "<br>";
        echo "Nama Produk: " . $this->nama . "<br>";
        echo "Harga: Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";
        echo "Pajak (11%): Rp" . number_format(self::pajak($this->harga), 0, ',', '.') . "<br>";
        echo "Total Harga: Rp" . number_format(self::total($this->harga), 0, ',', '.');
    }
}

// Membuat objek
$produk = new Produk('A001', 'Laptop', 1000000, 5);

// Menampilkan produk
$produk->tampilkanProduk();

// Memanggil static method langsung dari class
echo "<br><br>Pajak melalui Static Method: Rp" . number_format(Produk::pajak(1000000), 0, ',', '.');

?>
