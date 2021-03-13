<?php
namespace App\Mode;
use App\Temps;

/**
 * Conjugaison du 1er et 2ème groupe au Conditionnel Présent
 * 
 * @param string $verbe
 */
class ConditionnelPresent extends Temps
{
    public static $temps = "Conditionnel Présent";
    public static $terminaisons1 = ["ariéu","ariés","arié","arian","arias","arien"];
    public static $terminaisons2 = ["iriéu","iriés","irié","irian","irias","irien"];

    public function __construct( string $verbe ) {
        $this->init( $verbe );
    }
}