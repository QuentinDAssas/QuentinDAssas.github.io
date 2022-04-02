<?php

namespace Controllers\Sub;

class RedTent extends \Controllers\Controller
{
    protected $modelName = \Models\Articles::class;
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        $redTentHeaders = $this->model->findAllRedTentHeaders();

        $redTentContents = $this->model->findAllRedTentContents();

        $redTentDates = $this->model->findAllRedTentDates();

        $redTentFooters = $this->model->findAllRedTentFooters();

        $redTentCitations = $this->model->findAllRedTentCitations();
        
        //affichage
        \Renderer::subRender("redTent", compact('redTentHeaders','redTentContents','redTentDates','redTentFooters','redTentCitations'));
    }
}