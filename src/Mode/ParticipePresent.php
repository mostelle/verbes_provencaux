<?php
namespace App\Mode;
use App\Temps;

/**
 * Conjugaison du 1er et 2ème groupe au Participe Présent
 * 
 * @param string $verbe
 */
class ParticipePresent extends Temps
{
    public static $temps = "Participe Présent";
    public static $terminaisons1 = ["ant"];
    public static $terminaisons2 = ["issènt"];

    public function __construct( string $verbe ) {
        $this->init( $verbe );
    }
}