<?php

namespace Controllers;

class User extends Controller 
{
   //contruction du nom du modele à utiliser
   protected $modelName = \Models\User::class;
   
   public function loginForm() 
   {
        //affichage
        \Renderer::render("login"); 
   }
   
   //méthode de deconnection
   public function out() {
       \Session::disconnect();
       
       \Http::redirect(WWW_URL);
       
   }
   
    /**
     * traitement formulaire de login
     */
     
   public function login() {
       //est-ce que j'ai les champs email et password
       if (empty($_POST['email'])  || 
       empty($_POST['password']))
       {
           //au moins un des 2 champs est vide
           \Session::addFlash('error', 'champs obligatoires non remplis !');
            //rediriger l'utilisateur vers le formulaire de login
            \Http::redirectBack();
       }
              
       //tester si le couple email/password existe bien
       if (!$this->model->verifEmailPwd($_POST['email'], $_POST['password']))
       {
          //identification impossible
           \Session::addFlash('error', 'identification impossible !');
            //rediriger l'utilisateur vers le formulaire de login
            \Http::redirectBack();
       }

       \Http::redirect(WWW_URL."index.php?controller=Admin\HomeAdmin&task=index"); 

   }
   
   /**
     * formulaire création de compte
     *
     * 
     */
   public function index() 
   {       
        //affichage
        \Renderer::showAdmin("newUserAdmin");
        
    }
    
    /**
     * traitement formulaire création de compte
     *
     * 
     */
    public function create()
    {
        
        
        //quels controle on doit faire avant de lancer une insertion dans la base ?
        
        //vérifier la présence des champs obligatoire
          
        if (empty($_POST['firstname']) ||
          empty($_POST['lastname']) ||
          empty($_POST['email']) ||
          empty($_POST['password']) ||
          empty($_POST['password2']))
        {
            //au moins un des champs obligatoires non rempli
            \Session::addFlash('error', 'au moins un des champs obligatoires non rempli !');
            //rediriger l'utilisateur vers le formulaire
            \Http::redirectBack();
        }
        
        
        //test firstname et lastname non numérique
        if (ctype_digit($_POST['firstname']) || ctype_digit($_POST['lastname']))
        {
            //au moins le nom ou le prénom est numérique
            \Session::addFlash('error', 'nom et prénom ne peuvent pas être numérique !');
            //rediriger l'utilisateur vers le formulaire
            \Http::redirectBack();
        }
        
        //vérifier le format de l'email
        //utiliser filter_var('bob@example.com', FILTER_VALIDATE_EMAIL)
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            //l'email n'est pas au bon format
            \Session::addFlash('error', 'l\'email n\'est pas au bon format !');
            //rediriger l'utilisateur vers le formulaire
           \Http::redirectBack();
        }
        
        //s'assurer que les 2 valeurs de mot de passe sont identiques
        if ($_POST['password'] !== $_POST['password2'])
        {
            //les 2 mots de passe ne sont pas identiques
            \Session::addFlash('error','les 2 mots de passe ne sont pas identiques !');
            //rediriger l'utilisateur vers le formulaire
            \Http::redirectBack();
        }
        
        //bonus : verifier que le mot de passe est complexe

        
        if(
            preg_match("#[A-Z]#", $_POST['password']) 
            + preg_match("#[a-z]#", $_POST['password']) 
            + preg_match("#[0-9]#", $_POST['password']) != 3)
        {
         //mot de passe pas assez complexe
          \Session::addFlash('error','mot de passe pas assez complexe !');
          //rediriger l'utilisateur vers le formulaire
          \Http::redirectBack();
        }
        
        
        //besoin d'une requete SQL vérifier si l'email existe déjà dans la base de données
        //"SELECT Id FROM Users WHERE Email LIKE monemail@gmail.com"
        
        if($this->model->is_exist_user($_POST['email']))
        {
            //l'email est déjà présent
            \Session::addFlash('error','l\'email existe déjà !');
            //rediriger l'utilisateur vers le formulaire
            \Http::redirectBack();
        }
        
        //si on arrive ici on va pouvoir insérer notre nouvel utilisateur
        if ($this->model->create($_POST))
        {
            //le compte a bien été créé
            \Session::addFlash('success','Création du compte réussie !');
            
            
            //rediriger l'utilisateur vers la page d'accueil
            \Http::redirect(WWW_URL."index.php?controller=Admin\Account&task=index");
        }
        else {
            //l'insertion a échouée
            \Session::addFlash('error','la création du compte a échouée !');
            //rediriger l'utilisateur vers le formulaire
            \Http::redirectBack();
        }
        
        
        
    }
}