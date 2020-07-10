<?php
class Autoloader   //creer une classe Autoloader
{
    static function register()          //creer une fonction statique register
    {
        spl_autoload_register(array(__CLASS__,"autoload"));
    }
    static function autoload($class)
    {
       $jls = str_replace("\\","/", $class);     ///pour remplacer les "\\" par "/"
    
        $adn = str_replace("\\","/",__DIR__.$jls.".php");    //recuperation du chemin absolue à partir de la racine

        $samba = str_replace("config","",$adn);   // enlever le config du chemin absolue

    //     echo $samba;
    //    die();



        if (file_exists($samba)) {        //lui dire que si $samba existe de l'inclure
            //   require_once "$samba";
             include_once "$samba";

        }
        
}
}
Autoloader::register();

?>