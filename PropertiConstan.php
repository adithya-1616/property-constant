
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

        echo "Objek Produk berhasil dibuat.<br><br>";
    }

    // Destructor
    public function __destruct() {
        echo "<br><br>Objek Produk telah dihancurkan.";
    }

    public function pajak() {
        return $this->harga * self::PAJAK;
    }

    public function total() {
        return $this->harga + $this->pajak();
    }

    public function tampilkanProduk() {
        echo "Kode Produk: " . $this->kode . "<br>";
        echo "Nama Produk: " . $this->nama . "<br>";
        echo "Harga: Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";
        echo "Pajak (11%): Rp" . number_format($this->pajak(), 0, ',', '.') . "<br>";
        echo "Total Harga: Rp" . number_format($this->total(), 0, ',', '.');
    }
}

// Membuat objek
$produk = new Produk('A001', 'Laptop', 1000000, 5);

// Menampilkan produk
$produk->tampilkanProduk();

?>
