<?php

namespace Controllers;

class Price extends Controller 
{
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        //affichage
        \Renderer::render("price");
        
    }
}