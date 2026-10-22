<?php
class Produk {
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    public function setProduk($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function pajak() {
        return $this->harga * self::PAJAK;
    }

    public function total() {
        return $this->harga + $this->pajak();
    }

    public function tampilkanProduk() {
        echo "Kode Produk: " . $this->kode;
        echo "<br>";
        echo "Nama Produk: " . $this->nama;
        echo "<br>";
        echo "Harga: Rp" . number_format($this->harga, 0, ',', '.');
        echo "<br>";
        echo "Stok: " . $this->stok;
        echo "<br>";
        echo "Pajak (11%): Rp" . number_format($this->pajak(), 0, ',', '.');
        echo "<br>";
        echo "Total Harga: Rp" . number_format($this->total(), 0, ',', '.');
    }
}

$produk = new Produk();

$produk->setProduk('A001', 'Laptop', 1000000, 5);

$produk->tampilkanProduk();

?>
