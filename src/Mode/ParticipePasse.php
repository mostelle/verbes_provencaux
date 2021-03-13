<?php
namespace App\Mode;
use App\Temps;

/**
 * Conjugaison du 1er et 2ème groupe au Participe Passé
 * 
 * @param string $verbe
 */
class ParticipePasse extends Temps
{
    public static $temps = "Participe Passé";
    public static $terminaisons1 = ["a•ado"];
    public static $terminaisons2 = ["i•ido"];

    public function __construct( string $verbe ) {
        $this->init( $verbe );
    }
}