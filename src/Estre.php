<?php
namespace App;
use App\Auxiliaire;

class Estre extends Auxiliaire
{
    public $nom = "èstre";

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
    protected function present(){
        $terminaisons=[];
        $terminaisons[]= "siéu";
        $terminaisons[]= "siés";
        $terminaisons[]= "es";
        $terminaisons[]= "sian";
        $terminaisons[]= "sias";
        $terminaisons[]= "soun";
        return $terminaisons;
    }
    /**
     * Conjugaison à l'imparfait
     */
    protected function imparfait(){
        $terminaisons=[];
        $terminaisons[]= "ère";
        $terminaisons[]= "ères";
        $terminaisons[]= "èro";
        $terminaisons[]= "erian";
        $terminaisons[]= "erias";
        $terminaisons[]= "èron";
        return $terminaisons;
    }
    /**
     * Conjugaison au passé simple
     */
    protected function passeSimple(){
        $terminaisons=[];
        $terminaisons[]= "fuguère";
        $terminaisons[]= "fuguères";
        $terminaisons[]= "fuguè";
        $terminaisons[]= "fuguerian";
        $terminaisons[]= "fuguerias";
        $terminaisons[]= "fuguèron";
        return $terminaisons;
    }
    /**
     * Conjugaison au futur
     */
    protected function futur(){
        $terminaisons=[];
        $terminaisons[]= "sarai";
        $terminaisons[]= "saras";
        $terminaisons[]= "sara";
        $terminaisons[]= "saren";
        $terminaisons[]= "sarés";
        $terminaisons[]= "saran";
        return $terminaisons;
    }
    /**
     * Conjugaison à l'impératif
     */
    protected function imperatif(){
        $terminaisons=[];
        $terminaisons[]= "fugues";
        $terminaisons[]= "fuguen";
        $terminaisons[]= "fugués";
        return $terminaisons;
    }
    /**
     * Conjugaison au conditionnel présent
     */
    protected function conditionnelPresent(){
        $terminaisons=[];
        $terminaisons[]= "sariéu";
        $terminaisons[]= "sariés";
        $terminaisons[]= "sarié";
        $terminaisons[]= "sarian";
        $terminaisons[]= "sarias";
        $terminaisons[]= "sarien";
        return $terminaisons;
    }
    /**
     * Conjugaison au subjonctif présent
     */
    protected function subjonctifPresent(){
        $terminaisons=[];
        $terminaisons[]= "fugue";
        $terminaisons[]= "fugues";
        $terminaisons[]= "fugue";
        $terminaisons[]= "fuguen";
        $terminaisons[]= "fugués";
        $terminaisons[]= "fugon";
        return $terminaisons;
    }
    /**
     * Conjugaison au subjonctif imparfait
     */
    protected function subjonctifImparfait(){
        $terminaisons=[];
        $terminaisons[]= "fuguèsse";
        $terminaisons[]= "fuguèsses";
        $terminaisons[]= "fuguèsse";
        $terminaisons[]= "fuguessian";
        $terminaisons[]= "fuguessias";
        $terminaisons[]= "fuguèsson";
        return $terminaisons;
    }
    /**
     * Conjugaison au participe présent
     */
    protected function participePresent(){
        $terminaisons=[];
        $terminaisons[]= "estènt";
        return $terminaisons;
    }
    /**
     * Conjugaison au participe passé
     */
    protected function participePasse(){
        $terminaisons=[];
        $terminaisons[]= "esta•ado";
        return $terminaisons;
    }

}