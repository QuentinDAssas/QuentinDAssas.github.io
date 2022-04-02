<?php

namespace Controllers\Admin\SubAdmin;

class RebozoAdmin extends \Controllers\Admin
{
    protected $modelName = \Models\Articles::class;
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        $rebozoHeaders = $this->model->findAllRebozoHeaders();

        $rebozoContents = $this->model->findAllRebozoContents();

        $rebozoLists = $this->model->findAllRebozoLists();

        $rebozoFooters = $this->model->findAllRebozoFooters();

        $rebozoFAQs = $this->model->findAllRebozoFAQs();

        //affichage
        \Renderer::showSubAdmin("rebozoAdmin", compact('rebozoHeaders','rebozoContents','rebozoLists','rebozoFooters','rebozoFAQs'));
        
    }
}