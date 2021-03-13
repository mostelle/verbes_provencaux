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


?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" value="<?php echo $verbe ?>" name="verbe">
    <input type="submit" value="OK" name="submitVerbe">
</form>