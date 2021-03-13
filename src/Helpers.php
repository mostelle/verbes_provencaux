<?php
namespace App;

/**
 * Helpers
 */
trait Helpers
{
    /**
     * Normaliser l'écriture d'un verbe
     * 
     * @param string $verbe
     * @return string
     */
    public static function verb_ucfirst( $verbe ) {
        return mb_strtolower($verbe);
    }
}
