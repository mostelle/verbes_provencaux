<?php
namespace App;

abstract class Auxiliaire
{
    public $groupeVerbe = "3ème";
    public $nom ;
    private static $temps = ["Présent","Imparfait","Passé Simple","Futur","Impératif","Conditionnel Présent","Subjonctif Présent","Subjonctif Imparfait","Participe Passé","Participe Présent"];
    public $conjugaison = [];

    abstract protected function present();
    abstract protected function imparfait();
    abstract protected function passeSimple();
    abstract protected function futur();
    abstract protected function imperatif();
    abstract protected function conditionnelPresent();
    abstract protected function subjonctifPresent();
    abstract protected function subjonctifImparfait();
    abstract protected function participePresent();
    abstract protected function participePasse();

     /**
     * Conjuguer le verbe
     * 
     */
    protected function conjuguer(){
        foreach (self::$temps as $nomTemps) {
            $this->conjugaison[ $nomTemps ] = $this->terminaisons( $nomTemps );
        }
    }
    /**
     * Elaborer les conjugaisons
     * 
     * @param string $verbe
     * @return array
     */
    protected function terminaisons( string $temps ){
        $conjTemps = [];
        switch ($temps) {
            case 'Présent':
                $conjTemps = $this->present();
                break;
            case 'Imparfait':
                $conjTemps = $this->imparfait();
                break;
            case 'Passé Simple':
                $conjTemps = $this->passeSimple();
                break;
            case 'Futur':
                $conjTemps = $this->futur();
                break;
            case 'Impératif':
                $conjTemps = $this->imperatif();
                break;
            case 'Conditionnel Présent':
                $conjTemps = $this->conditionnelPresent();
                break;
            case 'Subjonctif Présent':
                $conjTemps = $this->subjonctifPresent();
                break;
            case 'Subjonctif Imparfait':
                $conjTemps = $this->subjonctifImparfait();
                break;
            case 'Participe Présent':
                $conjTemps = $this->participePresent();
                break;
            case 'Participe Passé':
                $conjTemps = $this->participePasse();
                break;
            
            default:
                $conjTemps = "ERREUR";
                break;
        }
        return $conjTemps;
    }
}
    