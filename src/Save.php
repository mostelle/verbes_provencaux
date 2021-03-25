<?php
namespace App;
require  './../vendor/autoload.php';

if( !isset($_POST) ){ return; }

if ( !isset($_POST['createverbe']) || !isset($_POST['submitcreateverbe']) ){ return; }

$verbe = $_POST['createverbe'];

$verbeCjg = [];
$verbeCjg[] = new Mode\Present($verbe);
$verbeCjg[] = new Mode\Imparfait($verbe);
$verbeCjg[] = new Mode\PasseSimple($verbe);
$verbeCjg[] = new Mode\Futur($verbe);
$verbeCjg[] = new Mode\Imperatif($verbe);
$verbeCjg[] = new Mode\ConditionnelPresent($verbe);
$verbeCjg[] = new Mode\SubjonctifPresent($verbe);
$verbeCjg[] = new Mode\SubjonctifImparfait($verbe);
$verbeCjg[] = new Mode\ParticipePasse($verbe);
$verbeCjg[] = new Mode\ParticipePresent($verbe);

$to_save = [];
$to_save['nom'] = $verbeCjg[0]->nom;
$to_save['groupe'] = $verbeCjg[0]->groupeVerbe;
foreach ($verbeCjg as $temps) {
    $to_save[$temps::$temps]=$temps->conjugaison;
}

/* = = = = = */
$dirVerbe   = (new class { use \App\Helpers; })::dirVerbe( $verbe );
$dir_file  = './../save/'.$dirVerbe[0];
$name_file = $dirVerbe[1];
$file = $dir_file.'/'.$name_file;
if (!is_dir($dir_file)) {
    if (!mkdir($dir_file, 0777, true)) {
        die('Echec lors de la création des répertoires...');
    }
}
// write into file
if( file_put_contents($file, json_encode($to_save)) !== false ){
    echo "Fichier {$name_file} créé : VERBE ENREGISTRE AVEC SUCCES !";
}else{
    echo "ERREUR : VERBE NON ENREGISTRE !";
}

die();