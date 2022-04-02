<?php

namespace Controllers\Admin\SubAdmin;

class PostnatalAdmin extends \Controllers\Admin
{
    protected $modelName = \Models\Articles::class;
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        $postnatalHeaders = $this->model->findAllPostnatalHeaders();

        $postnatalContents = $this->model->findAllPostnatalContents();

        $postnatalLists = $this->model->findAllPostnatalLists();

        $postnatalFooters = $this->model->findAllPostnatalFooters();

        $postnatalCitations = $this->model->findAllPostnatalCitations();

        //affichage
        \Renderer::showSubAdmin("postnatalAdmin", compact('postnatalHeaders','postnatalContents','postnatalLists','postnatalFooters','postnatalCitations'));
        
    }
}