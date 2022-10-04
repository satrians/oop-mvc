<?php
class mobil
{
    public $nama, $merk;

    function getInfo()
    {
        echo "Nama mobil : " . $this->nama . "<br/>";
        echo "merk:" . $this->merk . "<br/>";
        echo "huruf:" . $this->a . "<br/>";
    }

    public function __call($name, $a)
    {
        // Note: value dari $name adalah case sensitive.  
        echo "Memanggil method '$name' " . implode(', ', $a) . "<br/>";
    }

    public static function __callStatic($name, $a)
    {
        // Note: value dari $name adalah case sensitive.  
        echo "Memanggil method '$name' " . implode(', ', $a) . "<br/>";
    }
}

$obj = new MethodTest;

$obj->Jalankan('->pada konteks Object');
MethodTest::Jalankan('->pada konteks Static');




//bagian main
$ferrari = new Mobil();
$ferrari->nama = "xxx";
$ferrari->merk = "aaa";

$ferrari->getInfo();
