<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.11.2017
 * Time: 09:08
 */
namespace HTL3R\KungFuMovies;

abstract class movie extends AbstractKungFuMovie implements IKungFuMovie {
}
$film1 = new AbstractKungFuMovie(
    "<<Bruce Lee - Der Mann mit der Todeskralle>>",
    5,
    "https://www.youtube.com/watch?v=80wXmIcyZwk"
);

$a = "Filminfo als JSON";
$b = "Filminfo als QR Code";

if($a == true) {
    $_GETname = "json";
}

echo "Der Mann mit der Todeskralle";
echo a;
echo b;