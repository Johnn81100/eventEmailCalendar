<?php
   
    include './smtp.php';
    include './manager/manager_php_mailer.php';

    if(isset($_POST['mail']))
    {
        $mailUtilisateur = cleanInput(($_POST["mail"]));

        if($_POST["mail"] !== '' )
        {
           echo 'ok';
            $contenu = $mailUtilisateur.' '.'participera  à l\'événement';
            $objet = utf8_decode('Confirmation de la participation à l\'événement');
            email($login, $mdp, $objet, $contenu, $mailUtilisateur, $responsable);
        }
    }


?>