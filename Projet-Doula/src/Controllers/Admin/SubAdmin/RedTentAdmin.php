<?php

namespace Controllers\Admin\SubAdmin;

class RedTentAdmin extends \Controllers\Admin
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
        \Renderer::showSubAdmin("redTentAdmin", compact('redTentHeaders','redTentContents','redTentDates','redTentFooters','redTentCitations'));
        
    }
}