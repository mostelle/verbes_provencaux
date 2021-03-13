<?php
namespace App;
use App\Verbe;

abstract class Temps implements Verbe
{
    protected $terminaisonVerbe = "";
    protected $radicalVerbe = "";
    public    $groupeVerbe = "";
    public    $nom = "";
    protected $terminaisons = [];
    public    $conjugaison = [];
    public static $terminaisons1 = [];
    public static $terminaisons2 = [];
    
    /**
     * Initialiser le verbe
     * 
     * @param string $verbe
     * @return void
     */
    protected function init( string $verbe ) {
        $this->setVerbe( $verbe );
        $this->conjuguer();
    }

    /**
     * Initialiser le verbe
     * 
     * @param string $verbe
     * @return void
     */
    public function setVerbe( string $verbe ) {
        $verbe_norm = (new class { use \App\Helpers; })::verb_ucfirst( $verbe );
        $this->nom = $verbe_norm;
        $this->radical( $verbe_norm );
        $this->terminaison( $verbe_norm );
        $this->groupe();
    }
    
    /**
     * Initialiser le radical du verbe
     * 
     * @param string $verbe
     * @return void
     */
    public function radical( string $verbe ) {
        $this->radicalVerbe = substr( $verbe, 0, -1 );
    }

    /**
     * Initialiser la terminaison du verbe
     * 
     * @param string $verbe
     * @return void
     */
    public function terminaison( string $verbe ) {
        $this->terminaisonVerbe = substr( $verbe, -1 );
    }
    
    /**
     * Conjuguer le verbe
     * 
     */
    private function conjuguer() {
        $this->conjugaison = preg_filter('/^/', $this->radicalVerbe, $this->terminaisons);
    }

    /**
     * Cherche le groupe et initialiser les terminaisons
     * et d'appartenance à un groupe
     * 
     * @return void
     */
    protected function groupe() {
        switch ($this->terminaisonVerbe) {
            case 'a':
                $this->terminaisons = static::$terminaisons1;
                $this->groupeVerbe = "1er";
                break;

            case 'i':
                $this->terminaisons = static::$terminaisons2;
                $this->groupeVerbe = "2ème";
                break;
            
            default:
                $this->groupeVerbe = "3ème";
                break;
        }
    }
}