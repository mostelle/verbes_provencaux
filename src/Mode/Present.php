<?php
namespace App\Mode;
use App\Temps;

/**
 * Conjugaison du 1er et 2ème groupe au présent de l'indicatif
 * 
 * @param string $verbe
 */
class Present extends Temps
{
    public static $temps = "Présent";
    public static $terminaisons1 = ["e","es","o","an","as","on"];
    public static $terminaisons2 = ["isse" , "isses", "is", "issèn", "issès", "isson"];

    public function __construct( string $verbe ) {
        $this->init( $verbe );
    }
}