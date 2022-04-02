<?php

namespace Controllers;

class Home extends Controller 
{
    protected $modelName = \Models\Articles::class;

   /**
     * construction page d'accueil
     */
    public function index() 
    {
        $mediaModel = new \Models\Media();
        /**
         * 2. Récupération des articles
         */
        $intros = $this->model->findAllIntro();

        $accueils = $this->model->findAllAccueil();

        $announcements = $this->model->findAllAnnouncement();

        $conclusions = $this->model->findAllConclusion();

        $citations = $this->model->findAllCitation();
        
        $mediaIntros = $mediaModel->findAllMediaIntro();

        $mediaAccueils = $mediaModel->findAllMediaAccueil();

        $mediaAnnouncements = $mediaModel->findAllMediaAnnouncement();

        $mediaConclusions = $mediaModel->findAllMediaConclusion();

        $mediaCitations = $mediaModel->findAllMediaCitation();

        //affichage
        \Renderer::render("home", compact('intros','accueils','announcements','conclusions','citations','mediaIntros','mediaAccueils','mediaAnnouncements','mediaConclusions','mediaCitations'));
        
    }
}