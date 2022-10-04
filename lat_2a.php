<?php
class mahasiswa
{
    public $nama, $nim, $matkul;

    function __construct($a, $b, $c)
    {
        $this->nama = $a;
        $this->nim = $b;
        $this->matkul = $c;
        echo "Kelas telah dibuat<br/><br/>";
    }

    function __construct()
    {
    }

    function cetak()
    {
        echo $this->nama . "<br/>" . $this->nim . "<br/>" . $this->matkul . "<br/><br/>";

        function __destruct()
        {
            echo "kelas telah dihancurkan";
        }
    }
}
