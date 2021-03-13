<?php
namespace App\Mode;
use App\Temps;

/**
 * Conjugaison du 1er et 2ème groupe au Futur de l'indicatif
 * 
 * @param string $verbe
 */
class Futur extends Temps
{
    public static $temps = "Futur";
    public static $terminaisons1 = ["arai","aras","ara","aren","arés","aran"];
    public static $terminaisons2 = ["irai","iras","ira","iren","irés","iran"];

    public function __construct( string $verbe ) {
        $this->init( $verbe );
    }
}