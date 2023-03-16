<?php

namespace app;

    class CleanInput{

    /**
     * Passe la variable $input  et la nettoie. 
     * 
     * fonction htmlspecialchars : transforme les caractéres spéciaux  en string 
     * fonction strip_tags :  retourne que les strings 
     * fonction trim : Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
     * Suppression  de tous les caractéres de contrôle ASCII (de o à 31 inclusif).
     * 
     * @param  string $input
     * @return string
     */
    static  function cleanInput(string $input){
        return htmlspecialchars(strip_tags(trim($input,"\x00..\x1F")));
        }

    }
?>
