<?php

namespace Controllers;

class services extends Controller 
{
    protected $modelName = \Models\Media::class;
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        /**
         * 2. Récupération des articles
         */
        $summaryBirths = $this->model->findAllSummaryBirth();
        
        $summaryPostnatals = $this->model->findAllSummaryPostnatal();
        
        $summaryPerinatals = $this->model->findAllSummaryPerinatal();
        
        $summaryBlessingWays = $this->model->findAllSummaryBlessingWay();
        
        $summaryRebozos = $this->model->findAllSummaryRebozo();
        
        $summaryRedTents = $this->model->findAllSummaryRedTent();
        
        //affichage
        \Renderer::render("services", compact('summaryBirths','summaryPostnatals','summaryPerinatals','summaryBlessingWays','summaryRebozos','summaryRedTents'));
        
    }
}