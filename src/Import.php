<?php
namespace App;
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

die();