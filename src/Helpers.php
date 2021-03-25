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

    /**
     * Retourne le chemin du dossier de stockage du verbe
     * 
     * @param string $verbe
     * @return array [0]dir file [1]name file
     */
    public static function dirVerbe( string $verbe){
        $verbe_clean = self::sanitize_name_for_json( $verbe );
        $fl_1       = substr( $verbe_clean, 0, 1 );
        $fl_2       = substr( $verbe_clean, 1, 1 );
        // abc = a/ab/abc.json
        // fl_dir[0] = dir
        $fl_dir     = array( $fl_1.'/'.$fl_1.$fl_2 );
        // fl_dir[1] = name
        $fl_dir[]   = $verbe_clean.'.json';
        return $fl_dir;
    }

    /**
     * Passage en minuscule sans accent
     * 
     * @param string $filename
     * @return string
     */
    public static function sanitize_name_for_json( string $filename){
        
        /* Force the file name in UTF-8 (encoding Windows / OS X / Linux) */
        $filenam = mb_convert_encoding($filename, "UTF-8");
        $char_not_clean = array('/À/','/Á/','/Â/','/Ã/','/Ä/','/Å/','/Ç/','/È/','/É/','/Ê/','/Ë/','/Ì/','/Í/','/Î/','/Ï/','/Ò/','/Ó/','/Ô/','/Õ/','/Ö/','/Ù/','/Ú/','/Û/','/Ü/','/Ý/','/à/','/á/','/â/','/ã/','/ä/','/å/','/ç/','/è/','/é/','/ê/','/ë/','/ì/','/í/','/î/','/ï/','/ð/','/ò/','/ó/','/ô/','/õ/','/ö/','/ù/','/ú/','/û/','/ü/','/ý/','/ÿ/' );
        $clean = array('a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','o','o','o','o','o','u','u','u','u','y','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','o','o','o','o','o','o','u','u','u','u','y','y' );
        $friendly_filename = preg_replace($char_not_clean, $clean, $filenam);
        $friendly_filename = preg_replace($char_not_clean, $clean, $filename);

        /* After replacement, we destroy the last residues */
        $friendly_filename = utf8_decode($friendly_filename);
        $friendly_filename = preg_replace('/\?/', '', $friendly_filename);

        /* Lowercase */
        $verbe_clean = strtolower($friendly_filename);
        
        return $verbe_clean;
    }
}
