<?php

use app\CleanInput;
namespace app;

   class EmailControlleur extends PhpMail {

    public function __construct()
    {
        
    }
    
    public function  sendMail():void
    {
        
        if(isset($_POST['mail']))
        {
            $mailUtilisateur = CleanInput::cleanInput(($_POST["mail"])); 

            if(!empty($_POST["mail"]) )
            {
                $contenu = $mailUtilisateur.' '.'participera  à l\'événement';
                $objet = utf8_decode('Confirmation de la participation à l\'événement');
                $this->sendMail( $objet, $contenu, $mailUtilisateur);
            }
        
        }
    }
   }

?>