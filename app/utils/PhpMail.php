<?php
namespace app;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

 //Load Composer's autoloader
 
    class  PhpMail extends AuthMail{
    
        /**
         * Affecte les variables login mdp recipientLogin depuis la  class AuthMail.
         *
         * @param  object  $authMail
         * @return void
         */
        function __construct()
        {
          
        }
                  
        /**
         * Envoie un email 
         *
         * @param  string $login
         * @param  string $mdp
         * @param  string $objet
         * @param  string $contenu
         * @param  object $mail
         * @param  string $mailUtilisateur
         * @return void
         * @throws Exception indique que le mail n'est pas envoyé
         */
        function Sendemail( string $objet, string $contenu, object $mail)
        {
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_OFF;                 //Enable verbose debug output
                $mail->isSMTP();                                    //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';               //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                           //Enable SMTP authentication
                $mail->Username   =  $this->getLogin();             //SMTP username
                $mail->Password   = $this->getMdp();                //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    //Enable implicit TLS encryption
                $mail->Port       = 465;                            //TCP port to connect to; use 587 if you have set `SMTPSecure = 
                                                                                                    //   PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($this->getLogin() , 'Mailer');
                $mail->addAddress( $this->getRecipientLogin() , 'Mailer');     //Add a recipient

                //Content
                $mail->isHTML(true);                                            //Set email format to HTML
                $mail->Subject = $objet;
                $mail->Body    = $contenu;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                // echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
}
?>