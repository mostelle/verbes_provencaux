<?php
namespace App\Mode;
use App\Temps;

/**
 * Conjugaison du 1er et 2ème groupe au Subjonctif Imparfait
 * 
 * @param string $verbe
 */
class SubjonctifImparfait extends Temps
{
    public static $temps = "Subjonctif Imparfait";
    public static $terminaisons1 = ["èsse","èsses","èsse","essian","essias","èsson"];
    public static $terminaisons2 = ["iguèsse","iguèsses","iguèsse","iguessian","iguessias","iguèsson"];

    public function __construct( string $verbe ) {
        $this->init( $verbe );
    }
}