<?php

namespace Controllers\Sub;

class Perinatal extends \Controllers\Controller
{
    protected $modelName = \Models\Articles::class;
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        $perinatalHeaders = $this->model->findAllPerinatalHeaders();

        $perinatalContents = $this->model->findAllPerinatalContents();

        $perinatalLists = $this->model->findAllPerinatalLists();

        $perinatalFooters = $this->model->findAllPerinatalFooters();

        $perinatalCitations = $this->model->findAllPerinatalCitations();
        
        //affichage
        \Renderer::subRender("perinatal", compact('perinatalHeaders','perinatalContents','perinatalLists','perinatalFooters','perinatalCitations'));
    }
}