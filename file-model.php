<?php
include_once "file-book.php";

class model
{
    public function getData()
    {
        return array(
            new book('pemrograman php & mysql', 'Gladi', 'USM Press', '2020'),
            new book('pemrograman framework', 'Gilang', 'USM Press', '2019'),
            new book('pemrograman web', 'aji', 'USM Press', '2017'),
            new book('kecerdasan buatan', 'budi', 'USM Press', '2011')
        );
    }
}
