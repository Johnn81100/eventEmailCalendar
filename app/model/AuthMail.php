<?php
   namespace app;
   /**
    * Classe  Authentification.
    * 
    * variable contenant le login le mdp  de l'expéditaire et le login de la personne qui reçoit le message .
    *
    *@var string $login destinataire 
    *@var string $mdp destinataire 
    *@var string $recipientLogin expéditeur
    */
   class AuthMail{
   
      // protected  car extend dans la classe PhpMail
      protected string $login;
      protected string $mdp;
      protected string $recipientLogin;
                        
      /**
       * Récupérer le mail du destinataire.
       *
       * @return string
       */
      public function getRecipientLogin():string
      {
            return $this->recipientLogin;
      }

      /**
       * Ajoute  le destinataire du mail.
       *
       * @return  string
       */ 
      public function setRecipientLogin(string $recipientLogin)
      {
            $this->recipientLogin = $recipientLogin;

            return $this;
      }

      /**
       * Récupérer le login de l'expéditeur.
       *
       * @return string
       */
      public function getLogin():string
      {
            return $this->login;
      }

      /**
       * Ajoute  l'expéditeur du mail.
       *
       * @return string
       */ 
      public function setLogin(string $login)
      {
            $this->login = $login;

            return $this->login;
      }

      /**
       * Récupérer le mdp  de l'expéditeur.
       *
       * @return string
       */
      public function getMdp():string
      {
            return $this->mdp;
      }

      /**
       * Ajoute  le mdp de l'expéditeur
       *
       * @return  string
       */ 
      public function setMdp($mdp)
      {
            $this->mdp = $mdp;

            return $this;
      }
   }
?>