<?php

namespace Controllers\Admin;

class ServicesAdmin extends \Controllers\Admin 
{
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        
        //affichage
        \Renderer::showAdmin("servicesAdmin");
        
    }
}