<?php

namespace Controllers;

class Contact extends Controller 
{
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        
        //affichage
        \Renderer::render("contact");
        
    }
}