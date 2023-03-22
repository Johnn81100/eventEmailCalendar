<?php

namespace app;
require './smtp.php';
use app\CleanInput;

   class EmailControlleur extends PhpMail {

    public function __construct()
    {
        
    }
    
    public function  sendMail():void
    {
       
        print_r($this->getMdp());
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