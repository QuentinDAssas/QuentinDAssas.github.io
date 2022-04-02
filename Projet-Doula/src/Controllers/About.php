<?php

namespace Controllers;

class About extends Controller 
{
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        
        //affichage
        \Renderer::render("about");
        
    }
}