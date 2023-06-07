<?php
class Produk {
    public $cireng;
    public $cilok;
    public $cimol;
    public $cilung;
    public $jmlcireng;
    public $jmlcilok;
    public $jmlcilung;
    public $hargacireng;
    public $hargacilok;
    public $totalSeluruh;
    public $totalHargacireng;
    public $totalHargacilok;
 

    public function __construct() {
        $this->hargacireng = 1000;
        $this->hargacilok = 5000;
    }
}

class Jumlah extends Produk {
    public function getJumlah($jmlcireng, $jmlcilok){
        $this->jmlcireng = $jmlcireng;
        $this->jmlcilok = $jmlcilok;
    }

    public function setHarga() {
        $this->totalHargacireng = $this->hargacireng * $this->jmlcireng;
        $this->totalHargacilok = $this->hargacilok * $this->jmlcilok;
        $this->totalSeluruh = $this->totalHargacireng + $this->totalHargacilok;
    }

    public function cetakStruk() {
        echo "******* <b>iKantin Wikrama</b> *******";
        echo "<br>";
        echo "Cireng : $this->jmlcireng x Rp. $this->hargacireng : <b>$this->totalHargacireng</b>";
        echo "<br>";
        echo "Cilok : $this->jmlcilok x Rp. $this->hargacilok : <b>$this->totalHargacilok</b>"; 
        echo "<br>";
        echo "Total Bayar : Rp. <b>$this->totalSeluruh</b>";
        echo "<br>";
        echo "Terima Kasih Telah Memesan Pesanan :)";
        echo "<br>";
        echo "****************************************";
    }
}


?>
