<?php

namespace Controllers\Admin;

class RedTentAdmin extends \Controllers\Admin 
{
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        
        //affichage
        \Renderer::showAdmin("redTentAdmin");
        
    }
}