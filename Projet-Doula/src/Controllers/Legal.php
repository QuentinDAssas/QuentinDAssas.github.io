<?php

namespace Controllers;

class Legal extends Controller 
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
        $identitys = $this->model->findAllIdentity();

        $morals = $this->model->findAllMoral();

        $terms = $this->model->findAllTerms();
        
        $links = $this->model->findAllLink();
        
        $confidentialities = $this->model->findAllConfidentiality();
        
        $otherLegals = $this->model->findAllOthersLegals();
        //affichage
        \Renderer::render("legal", compact('identitys','morals','terms','links','confidentialities','otherLegals'));
        
    }
}