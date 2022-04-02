<?php

namespace Controllers\Admin;

class ContactAdmin extends \Controllers\Admin 
{
    protected $modelName = \Models\Articles::class;
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        /**
         * 2. Récupération des articles
         */
        $welcomes = $this->model->findAllWelcome();

        $phones = $this->model->findAllPhone();
        
        $mails = $this->model->findAllMail();

        //affichage
        \Renderer::showAdmin("contactAdmin", compact('welcomes','phones','mails'));
        
    }
}