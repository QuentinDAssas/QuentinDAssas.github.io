<?php

namespace Controllers;

class Resources extends Controller 
{
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        
        //affichage
        \Renderer::render("Resources");
        
    }
}