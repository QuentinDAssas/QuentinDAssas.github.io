<?php

namespace Controllers\Sub;

class Rebozo extends \Controllers\Controller
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
        \Renderer::subRender("rebozo", compact('rebozoHeaders','rebozoContents','rebozoLists','rebozoFooters','rebozoFAQs'));
    }
}