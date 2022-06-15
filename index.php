<?php
require_once __DIR__ . "/Cibo.php";

$cibo_cani = new Cibo("Crocchette", "Frisky", 10, "Manzo", 300, 2024);

var_dump($cibo_cani);

echo $cibo_cani->mostraDettagliArticolo();





?>