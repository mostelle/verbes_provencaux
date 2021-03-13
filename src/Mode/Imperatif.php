<?php
namespace App\Mode;
use App\Temps;

/**
 * Conjugaison du 1er et 2ème groupe au Impératif de l'indicatif
 * 
 * @param string $verbe
 */
class Imperatif extends Temps
{
    public static $temps = "Impératif";
    public static $terminaisons1 = ["o", "en", "as"];
    public static $terminaisons2 = ["isse","issen","issès"];

    public function __construct( string $verbe ) {
        $this->init( $verbe );
    }
}