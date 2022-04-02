<?php

namespace Controllers;

class Login extends Controller{
    //show n'est pas réécrite elle est unique pour chaques enfants
    public function index() 
    {
        
        
        //affichage
        \Renderer::show("login");
        
    }

    //traitement du formulaire de login
    public function login()
    {
        //vérifier les 2 champs
        if(!isset($_POST['email']) )
        {
            //rediriger l'utilisateur vers le formulaire de login
             //message d'erreur
             \Session::addFlash('error', 'Email obligatoire !');
             \Http::redirectBack();

        }
        
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        {
            //rediriger l'utilisateur vers le formulaire de login
             //message d'erreur
             \Session::addFlash('error', 'Mauvais format email !');
             \Http::redirectBack();
        }
        
        if(!isset($_POST['password']) )
        {
            //mot de passe inexistant
            \Session::addFlash('error', 'Mot de passe inexistant !');
             \Http::redirectBack();
        }
        
        if(empty($_POST['password']) )
        {
            //mot de passe vide 
            \Session::addFlash('error', 'Mot de passe obligatoire !');
             \Http::redirectBack();
        }
        
        //récupérer un utilisateur avec le même email
        //on va pouvoir lancer une requete pour trouver l'utilisateur
        //chercher un user qui possède l'email
        $existUser = $this->model->getUserByEmail($_POST['email']);
        
        //si rien en retour -> l'utilisateur n'existe pas
        if (!$existUser) //si $existUser est false -> on a pas trouvé de User
        {
            
            \Session::addFlash('error', 'Identification incorrect !');
             \Http::redirectBack();
        }
        //controler le mot de passe
        if (!password_verify($_POST['password'], $existUser['Password']))
        {
            \Session::addFlash('error', 'Identification impossible !');
             \Http::redirectBack();
        }
        
        //implémenter la session
        \Session::connect([
            'Id' => intVal($existUser['Id']),
            'Admin' => intVal($existUser['Admin']),
            'FirstName' => htmlspecialchars($existUser['FirstName'])
            ]);
        
        //mettre à jour Last_login
        $data = [
          'Id' => \Session::getId(),
          'Last_login' => date("Y-m-d H:i:s")
            ];
            
        $this->model->update($data);       
    }


} 