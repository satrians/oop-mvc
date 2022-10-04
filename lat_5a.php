<?php

use mahasiswa as GlobalMahasiswa;

abstract class mahasiswa
{
    abstract protected function getTugasAkhir();
    abstract protected function getProgram($postfix);

    public function tugasAkhir()
    {
        print $this->getTugasAkhir() . "<br>";
    }
}

class sarjana extends mahasiswa
{
    protected function getTugasAkhir()
    {
        return " skripsi";
    }

    public function getProgram($postfix)
    {
        print "{$postfix} S1";
    }
}
class magister extends mahasiswa
{
    // public function getTugasAkhir()
    // {
    //     return " Tesis";
    // }

    public function getProgram($postfix)
    {
        print "{$postfix} S2";
    }
}
