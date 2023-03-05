<?php
    include './utils/connectBdd.php';
    include './smtp.php';
    // include './model/model_utilisateur.php';
    // include './manager/manager_utilisateur.php';
    include './view/view_send_email.php';


    var_dump($_POST);
    if(isset($_POST["createEvent"]))
    {
        if($_POST["mail"] !== '' )
        {
            $mailEvent = cleanInput(($_POST["mail"]));
        }
    }


?>