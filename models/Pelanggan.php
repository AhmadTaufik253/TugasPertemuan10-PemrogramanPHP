<?php
class Pelanggan{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function Pelanggan(){
        $sql = "SELECT pelanggan.*, kartu.nama AS kartu FROM pelanggan JOIN kartu ON pelanggan.kartu_id = kartu.id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}


?>