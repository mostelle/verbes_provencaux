<?php
use App\Mode as Mode;
use App\Ave;
use App\Estre;

$html = '';

$ave = new Ave();
$html .= '<p>'.$ave->nom. ' | Verbe du ' . $ave->groupeVerbe . ' groupe <em>Auxiliaire</em> <p/>';
foreach ($ave->conjugaison as $temps => $conjugaison) {
    $html .= '<div style="float:left; margin-right:2%">';
    $html .= '<p><strong>' . $temps . '</strong></p>';
    $html .= implode( '<br>', $conjugaison ) ;
    $html .= '</div>';
}
$html.= '<hr style="clear:both">';

$ave = new Estre();
$html .= '<p>'.$ave->nom. ' | Verbe du ' . $ave->groupeVerbe . ' groupe <em>Auxiliaire</em> <p/>';
foreach ($ave->conjugaison as $temps => $conjugaison) {
    $html .= '<div style="float:left; margin-right:2%">';
    $html .= '<p><strong>' . $temps . '</strong></p>';
    $html .= implode( '<br>', $conjugaison ) ;
    $html .= '</div>';
}
$html.= '<hr style="clear:both">';


if( isset($_POST) ){

    if ( isset($_POST['seeverbe']) && isset($_POST['verbetosee']) ){

        $verbe = $_POST['verbetosee'];

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

        $html .= '<p>'.$verbeCjg[0]->nom . ' | Verbe du ' . $verbeCjg[0]->groupeVerbe . ' groupe<p/>';
        foreach ($verbeCjg as $temps) {
            $html .= '<div style="float:left; margin-right:2%">';
            $html .= '<p><strong>'.$temps::$temps . '</strong></p>';
            $html .= implode( '<br>', $temps->conjugaison ) ;
            $html .= '</div>';
        }
    }

    if( isset($_POST['submitseekverbe']) && isset($_POST['seekverbe']) ){

        $verbe 		= $_POST['seekverbe'];
        $dirVerbe   = (new class { use \App\Helpers; })::dirVerbe( $verbe );
        $dir_file  = 'save/'.$dirVerbe[0];
        $name_file = $dirVerbe[1];
        $file = $dir_file.'/'.$name_file;

        if( file_exists($file) ){
            $content 	= file_get_contents( $file );
            $json 		= json_decode( $content , true );
            // $values 	= json_decode( $json[$verbe] , true );
            var_dump($json);
        }else{
            $html .= "<strong>verbe non enregistré</strong>";
        }

    }
}

?>
<p>Voir une conjugaison d'un verbe du premier ou deuxième groupe</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" value="" name="verbetosee">
    <input type="submit" value="OK" name="seeverbe">
</form>

<p>Chercher Verbe</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" value="" name="seekverbe">
    <input type="submit" value="OK" name="submitseekverbe">
</form>

<hr>
<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$seek       = 'index.php';
$link_arr   = explode($seek, $actual_link);
$good_link  = $link_arr[0]; 
?>
<p>Créer une conjugaison d'un verbe du premier ou deuxième groupe</p>
<form method="post" action="<?php echo $good_link.'src/Save.php'; ?>">
    <input type="text" value="" name="createverbe">
    <input type="submit" value="OK" name="submitcreateverbe">
</form>
<hr>