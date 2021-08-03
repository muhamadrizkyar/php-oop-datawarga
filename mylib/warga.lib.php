<?php
class warga{
    //Variable Global
    var $nama;
    var $alamat;
    //tahap 1 
    public function personAwal(){
        echo $nama_lengkap = "Adi Supriadi"; //Mengisi Langsung Dari Function
        echo $alamat = "Bogor"; //Mengisi Langsung Dari Function
    }
    //Tahap 2 
    public function person(){
        echo $nama_lengkap=$this->nama; //Mengambil Dari Variable Global 
        echo "<br>";
        echo $alamat=$this->alamat; //Mengambil Dari Variable Global 
    }
    public function setPerson(){
        //Menggunakan Varible Global
        $this->nama="Nama 1";
        echo "<br>";
        $this->alamat="Alamat 1";
    }
    public function person3($nama,$alamat){
        //Mengisi Variable Dari yang namanya parameter
        echo $nama_lengkap=$nama;
        echo "<br>";
        echo $alamat=$alamat;
    }
}
?>