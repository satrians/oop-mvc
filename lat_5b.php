<?php
require_once("lat_5a.php");

$s = new sarjana;
$s->getProgram("mahasiswa") . "<br>";
$s->tugasAkhir();

$n = new magister;
$n->getProgram("Mahasiswa") . "<br>";
$n->tugasAkhir();
