<?php

namespace Controllers;

class Articles extends Controller 
{
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        
        //affichage
        \Renderer::render("articles");
        
    }

}