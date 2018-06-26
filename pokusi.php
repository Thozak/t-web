<?php
require "php/stranky/Stranka.php";
$s = new Stranka();


     
echo "<br>";
$s->setId("ahoj");





echo $s->getId();
echo "<br>";

echo $s->__toString();
?>