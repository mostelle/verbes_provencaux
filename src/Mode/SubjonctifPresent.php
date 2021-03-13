<?php
namespace App\Mode;
use App\Temps;

/**
 * Conjugaison du 1er et 2ème groupe au Subjonctif Présent
 * 
 * @param string $verbe
 */
class SubjonctifPresent extends Temps
{
    public static $temps = "Subjonctif Présent";
    public static $terminaisons1 = ["e","es","e","en","és","on"];
    public static $terminaisons2 = ["igue","igues","igue","iguen","igués","igon"];

    public function __construct( string $verbe ) {
        $this->init( $verbe );
    }
}