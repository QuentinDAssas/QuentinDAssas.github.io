<?php

namespace Controllers\Sub;

class Postnatal extends \Controllers\Controller
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
        \Renderer::subRender("postnatal", compact('postnatalHeaders','postnatalContents','postnatalLists','postnatalFooters','postnatalCitations'));
    }
}