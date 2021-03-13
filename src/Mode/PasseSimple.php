<?php
namespace App\Mode;
use App\Temps;

/**
 * Conjugaison du 1er et 2ème groupe au passé simple de l'indicatif
 * 
 * @param string $verbe
 */
class PasseSimple extends Temps
{
    public static $temps = "Passé Simple";
    public static $terminaisons1 = ["ère", "ères", "è", "erian", "erias", "èron"];
    public static $terminaisons2 = ["iguère", "iguères", "iguè", "iguerian", "iguerias", "iguèron"];

    public function __construct( string $verbe ) {
        $this->init( $verbe );
    }
}
