<?php

//constante définissant le chemin vers le projet
define('WWW_URL', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));

//fichier contenant toutes les constantes de configuration (acces base de données, ....)
require_once("src/configuration.php");


//essaie de l'action, si erreur, interception de celle-ci avec catch
try {
    
    //chargement automatique des fichiers contenant les objects necessaires dans le script
    require_once("src/autoload.php");
    
    //création de l'instance du controller et appel de la méthode principale
    \Application::process();


    } catch (Exception $e) {
    // Si il y a eu la moindre erreur :
                //affichage
                \Renderer::showError([
                    'code' => $e->getCode(),
                    'message' => $e->getMessage()
                ]);    
 
}