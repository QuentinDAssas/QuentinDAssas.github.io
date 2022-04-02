<?php

namespace Controllers;

class Home extends Controller 
{
protected $modelName = \Models\Home::class;

   /**
     * construction page d'accueil
     */
    public function index() 
    {
        /**
         * 2. Récupération des articles
         */
        $intros = $this->model->findAllIntro();

        $accueils = $this->model->findAllAccueil();

        $announcements = $this->model->findAllAnnouncement();

        $conclusions = $this->model->findAllConclusion();

        $citations = $this->model->findAllCitation();

        //affichage
        \Renderer::render("home", compact('intros','accueils','announcements','conclusions','citations'));
        
    }
}