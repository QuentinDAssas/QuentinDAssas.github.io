<?php

namespace Controllers\Sub;

class Birth extends \Controllers\Controller
{
    protected $modelName = \Models\Articles::class;
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        $birthHeaders = $this->model->findAllBirthHeaders();

        $birthContents = $this->model->findAllBirthContents();

        $birthLists = $this->model->findAllBirthLists();

        $birthFooters = $this->model->findAllBirthFooters();

        $birthCitations = $this->model->findAllBirthCitations();
        
        //affichage
        \Renderer::subRender("birth", compact('birthHeaders','birthContents','birthLists','birthFooters','birthCitations'));
    }
}