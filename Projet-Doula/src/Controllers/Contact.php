<?php

namespace Controllers;

class Contact extends Controller 
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
        \Renderer::render("contact", compact('welcomes','phones','mails'));
    }
}