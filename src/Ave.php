<?php
namespace App;
use App\Auxiliaire;

class Ave extends Auxiliaire
{
    public $nom = "avé";

    /**
     * Initialiser le verbe
     * 
     * @param string $verbe
     * @return void
     */
    public function __construct() {
        $this->conjuguer();
    }

    /**
     * Conjugaison au présent
     */
    public function present(){
        $terminaisons=[];
        $terminaisons[]= "ai";
        $terminaisons[]= "as";
        $terminaisons[]= "a";
        $terminaisons[]= "avèn";
        $terminaisons[]= "avès";
        $terminaisons[]= "an";
        return $terminaisons;
    }
    /**
     * Conjugaison à l'imparfait
     */
    public function imparfait(){
        $terminaisons=[];
        $terminaisons[]= "aviéu";
        $terminaisons[]= "aviés";
        $terminaisons[]= "avié";
        $terminaisons[]= "avian";
        $terminaisons[]= "avias";
        $terminaisons[]= "avien";
        return $terminaisons;
    }
    /**
     * Conjugaison au passé simple
     */
    public function passeSimple(){
        $terminaisons=[];
        $terminaisons[]= "aguère";
        $terminaisons[]= "aguères";
        $terminaisons[]= "aguè";
        $terminaisons[]= "aguerian";
        $terminaisons[]= "aguerias";
        $terminaisons[]= "aguèron";
        return $terminaisons;
    }
    /**
     * Conjugaison au futur
     */
    public function futur(){
        $terminaisons=[];
        $terminaisons[]= "aurai";	
        $terminaisons[]= "auras";	
        $terminaisons[]= "aura";	
        $terminaisons[]= "auren";	
        $terminaisons[]= "aurés";	
        $terminaisons[]= "auran";
        return $terminaisons;
    }
    /**
     * Conjugaison à l'impératif
     */
    public function imperatif(){
        $terminaisons=[];
        $terminaisons[]= "agues";
        $terminaisons[]= "agués";
        $terminaisons[]= "aguen";
        return $terminaisons;
    }
    /**
     * Conjugaison au conditionnel présent
     */
    public function conditionnelPresent(){
        $terminaisons=[];
        $terminaisons[]= "auriéu";
        $terminaisons[]= "auriés";
        $terminaisons[]= "aurié";
        $terminaisons[]= "aurian";
        $terminaisons[]= "aurias";
        $terminaisons[]= "aurien";
        return $terminaisons;
    }
    /**
     * Conjugaison au subjonctif présent
     */
    public function subjonctifPresent(){
        $terminaisons=[];
        $terminaisons[]= "ague";
        $terminaisons[]= "agues";
        $terminaisons[]= "ague";
        $terminaisons[]= "aguen";
        $terminaisons[]= "agués";
        $terminaisons[]= "agon";
        return $terminaisons;
    }
    /**
     * Conjugaison au subjonctif imparfait
     */
    public function subjonctifImparfait(){
        $terminaisons=[];
        $terminaisons[]= "aguèsse";
        $terminaisons[]= "aguèsses";
        $terminaisons[]= "aguèsse";
        $terminaisons[]= "aguessian";
        $terminaisons[]= "aguessias";
        $terminaisons[]= "aguèsson";
        return $terminaisons;
    }
    /**
     * Conjugaison au participe présent
     */
    public function participePresent(){
        $terminaisons=[];
        $terminaisons[]= "aguènt";
        return $terminaisons;
    }
    /**
     * Conjugaison au participe passé
     */
    public function participePasse(){
        $terminaisons=[];
        $terminaisons[]= "agu•udo";
        return $terminaisons;
    }

}