<?php

namespace Controllers\Admin;

class ArticlesAdmin extends \Controllers\Admin 
{
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        
        //affichage
        \Renderer::showAdmin("articlesAdmin");
        
    }

}