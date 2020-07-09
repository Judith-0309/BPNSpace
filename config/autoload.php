<?php
class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__,"autoload"));
    }
    static function autoload($class)
    {
       $jls = str_replace("\\","/", $class);
    
        $adn = str_replace("\\","/",__DIR__.$jls.".php");

        $samba = str_replace("config","",$adn);

    //     echo $samba;
    //    die();


        if (file_exists($samba)) {
            //   require_once "$samba";
             include_once "$samba";

        }
       //echo str_replace("\\","/" $class);
       
    // if(file_exists("model/".$class.".php"))
    //   {
    //     require_once "model/".$class.".php";  
    //    }
    // else if(file_exists("controller/".$class.".php"))
    // {
    //     require_once "controller/".$class.".php";
    // }
    //echo str_replace("\\","/", $class);

    //namespace
    // if(file_exists(str_replace("\\","/", $class.".php")))
    // {

    //     require_once str_replace("\\","/", $class.".php");
    // }
    // else
    // {
    //     die("Merci d'utliser le mot clé USE ".$class );
    // }    
}
}
Autoloader::register();

?>