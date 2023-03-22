<?php
    
    // use app\AuthMail;
    // use app\PhpMail;
    use app\EmailControlleur;
    require_once './app/model/AuthMail.php';
    require_once './app/utils/PhpMail.php';
    require_once './app/controller/EmailControlleur.php';
   
    // include ' ./app/utils/connectBdd.php';
    // include './app/model/AuthMail.php';
    // include  './app/controller/EmailControlleur.php';

    $controlleurEmail= new EmailControlleur();

    //utilisation de session_start(pour gérer la connexion au serveur)
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //routeur
    switch ($path) {
        case '/event/':
            include './app/view/view_send_email.php';
            break;
        case '/event/requete':
            $controlleurEmail->sendMail();
            break;
        default:
            include './error.php';
            break;
    }
?>
