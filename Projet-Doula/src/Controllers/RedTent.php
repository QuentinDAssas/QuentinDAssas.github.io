<?php

namespace Controllers;

class RedTent extends Controller 
{
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        
        //affichage
        \Renderer::render("redTent");
        
    }
}