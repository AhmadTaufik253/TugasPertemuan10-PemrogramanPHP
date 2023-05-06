<?php
class Pesanan{
    private $koneksi;
    public function __construct(){
        global $dbh; //instance obj dbkoneksi.php
        $this->koneksi = $dbh;
    }
    // member3 method CEUD
    public function pesanan(){
        $sql = "SELECT pesanan.*, pelanggan.nama_pelanggan FROM pesanan JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id;";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}


?>