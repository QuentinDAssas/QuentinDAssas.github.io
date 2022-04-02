<?php

namespace Controllers\Admin\SubAdmin;

class BirthAdmin extends \Controllers\Admin
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
        \Renderer::showSubAdmin("birthAdmin", compact('birthHeaders','birthContents','birthLists','birthFooters','birthCitations'));
        
    }
}