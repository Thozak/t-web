<?php                               //http://localhost/github/t-web/pokusi.php
require_once "php/stranky/Stranka.php";
$s = new Stranka();


$s->setId("ahoj");

echo $s->getId();
echo "<br>";

echo $s->__toString();

echo "<br>";

require "php/stranky/Stranky.php";
$s = new Stranky();
echo $s->vyhledejStranku("testovaci id");
?>