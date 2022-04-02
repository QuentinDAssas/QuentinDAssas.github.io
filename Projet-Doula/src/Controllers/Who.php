<?php

namespace Controllers;

class Who extends Controller 
{
    protected $modelName = \Models\Articles::class;
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() 
    {
        $mediaModel = new \Models\Media();
        /**
         * 2. Récupération des articles
         */
        $presentationsCol1 = $this->model->findAllPresentationCol1();
        
        $presentationsCol2 = $this->model->findAllPresentationCol2();
        
        $legends = $this->model->findAllFigcaptions();
        
        $mediaFigcaptions = $mediaModel->findAllMediaFigcaptions();

        $whoCitations = $this->model->findAllWhoCitation();

        $formations = $this->model->findAllFormation();
        
        $mediaFormations = $mediaModel->findAllMediaFormations();
        
        $confs = $this->model->findAllConf();

        //affichage
        \Renderer::render("who", compact('presentationsCol1','presentationsCol2','legends','whoCitations','formations','mediaFormations','confs','mediaFigcaptions'));
        
    }
}