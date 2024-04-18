<?php

require_once "./Base/Animal.php";
require_once "./Derivados/Gato.php";
require_once "./Derivados/Cachorro.php";
require_once "./Derivados/Passaro.php";

$obj;

if ($_GET["a"] == "gato") {
    $obj = new Gato("Fritz");
} elseif ($_GET["a"] == "cachorro") {
    $obj = new Cachorro("Toinho");
} elseif ($_GET["a"] == "passaro") {
    $obj = new Passaro("Frajola");
} else {
    echo "ERRO <br>";
}

$obj->fazerBarulho();