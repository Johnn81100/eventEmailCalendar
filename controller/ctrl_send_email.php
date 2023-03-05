<?php
    include './utils/connectBdd.php';
    include './smtp.php';
    // include './model/model_utilisateur.php';
    include './manager/manager_php_mailer.php';
    include './view/view_send_email.php';

    if(isset($_POST["createEvent"]))
    {
        if($_POST["mail"] !== '' )
        {
            $mailUtilisateur = cleanInput(($_POST["mail"]));
            $contenu = $mailUtilisateur.' '.'participera  à l\'événement';
            $objet = utf8_decode('Confirmation de la participation à l\'événement');
            email($login, $mdp, $objet, $contenu, $mailUtilisateur, $responsable);
        }
    }


?>