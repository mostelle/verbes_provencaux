<?php
namespace App\Mode;
use App\Temps;

/**
 * Conjugaison du 1er et 2ème groupe à l'imparfait de l'indicatif
 * 
 * @param string $verbe
 */
class Imparfait extends Temps
{
    public static $temps = "Imparfait";
    public static $terminaisons1 = ["ave", "aves", "avo", "avian", "avias", "avon"];
    public static $terminaisons2 = ["issiéu", "issiés", "issié", "issian", "issias", "issien"];

    public function __construct( string $verbe ) {
        $this->init( $verbe );
    }
}