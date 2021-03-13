<p>Lou COUNJUGATOR</p>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$verbe="";
if( isset($_POST['verbe']) && !empty($_POST['verbe']) ){
    $verbe = $_POST['verbe'];
}
require  'vendor/autoload.php';

include 'modeLauncher.php';

if($verbe){
    echo $html;
}
