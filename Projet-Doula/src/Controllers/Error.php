<?php

namespace Controllers;


class Error {
    // propriétés de la class :
    private const ERRORS = [
            '0' => 'Tous les feux sont au vert',
            '1' => 'Le prénom n\'est pas renseignés',
            '2' => 'Le nom n\'est pas renseignés',
            '3' => 'Le pseudo n\'est pas renseignés',
            '4' => 'L\'adressse mail n\'est pas renseignés',
            '5' => 'Le mot de passe n\'est pas renseignés',
            '6' => 'Le mot de passe 2 n\'est pas renseignés',
            '7' => 'Aucune photo n\'est renseignés',
            '8' => ' n\'est pas renseignés',
            '9' => 'Acune session n\'est ouverte'
            
            
        ];
    private $post = [];
    private $tabErrors = [];
    
    
    // construct :
    public function __construct($post){
        
        $this->post = $post;
    }
        
    // methods :
    public function errorsTraitment (): void {
        // prénom absent :
        if (isset($this->post['name']) && empty(trim($this->post['name']))){
            array_push($this->tabErrors, '1');    
        }
        // nom absent :
        if (isset($this->post['lastName']) && empty(trim($this->post['lastName']))){
            array_push($this->tabErrors,'2');
        }
        // pseudo absent :
        if (isset($this->post['nickName']) && empty(trim($this->post['nickName']))){
            array_push($this->tabErrors,'3');   
        }
        // mot de passe absent :
        if (isset($this->post['password']) && empty(trim($this->post['password']))){
            array_push($this->tabErrors,'5');
        }
        // mot de passe 2 absent :
        if (isset($this->post['password2']) && empty(trim($this->post['password2']))){
            array_push($this->tabErrors,'6');
        }
        // aucune session active :
        if (!isset($_SESSION)){
            array_push($this->tabErrors,'9');
        }
        var_dump($this->tabErrors);
        //redirection selon les données reçu dans this->tabErrors
        //$this->errorsRedirect(); 
    }
    
    // On transforme le tableau des erreurs en chaine de caractères
    public function errorsRedirect($noMistake, $mistake) : string {
        //si $this->tabErrors est vide -> profile.phtml
        if (empty($this->tabErrors)){
            
            // créer une variable $_SESSION via instance de la class Session
            
            header ("Location: ?page=$noMistake");
            exit();
        }
        // transformer le tableau d'erreurs en chaine de caractère
        
        $error = implode($this->tabErrors);
        // envoyer erreurs en GET
        header ("Location: ?page=$mistake&error=$error");
        exit();
    }
    
    // Affichage des erreurs dans le template
    public static function displayNotif ($nbError) {
    // methode static pour ne pas devoir créer une instance d'Error avant de l'utiliser
        $tab = str_split($nbError);
        var_dump($tab);
        foreach ($tab as $error) {
            echo '<p style=\'color:red\'>' . self::ERRORS[$error] . '</p>';
        }
    }
    public function __get($proprety) {
        return $this->$proprety;
    }
    
}