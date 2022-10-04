<?php
class book
{
    public $judul, $pengarang, $penerbit, $tahun;

    public function __construct($title, $author, $publisher, $year)
    {
        $this->judul = $title;
        $this->pengarang = $author;
        $this->penerbit = $publisher;
        $this->tahun = $year;
    }
}
