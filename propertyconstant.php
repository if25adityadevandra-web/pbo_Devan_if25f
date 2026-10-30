<?php

class Produk {
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

<<<<<<< HEAD
    // Constructor
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
=======
    public function pajak() {
        return self::PAJAK * 100;   
    }

    public function total(){
>>>>>>> db945f7f7cedbc117daa9edc56e47855eb288592
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

<<<<<<< HEAD
// Membuat objek sekaligus mengisi nilai property
$produk = new Produk('p0001', 'laptop', 10000000, 5);
=======
$produk = new Produk();

$produk->kode  = 'p0001';
$produk->nama  = 'laptop';
$produk->harga = 10000000;
$produk->stok  = 5;

>>>>>>> db945f7f7cedbc117daa9edc56e47855eb288592

echo "Produk: " . $produk->nama;
echo "<br/>";
echo "Harga: " . $produk->harga;
echo "<br/>";
echo "Stok: " . $produk->stok;
echo "<br/>";
echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";
<<<<<<< HEAD
echo "Total harga setelah pajak: Rp." . $produk->total();

?>
=======
echo "Total harga setelah pajak: Rp." . $produk->total();
>>>>>>> db945f7f7cedbc117daa9edc56e47855eb288592
