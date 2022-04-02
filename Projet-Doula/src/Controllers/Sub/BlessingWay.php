<?php

namespace Controllers\Sub;

class BlessingWay extends \Controllers\Controller
{
    protected $modelName = \Models\Articles::class;
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        $blessingWayHeaders = $this->model->findAllBlessingWayHeaders();

        $blessingWayContents = $this->model->findAllBlessingWayContents();

        $blessingWayLists = $this->model->findAllBlessingWayLists();

        $blessingWayFooters = $this->model->findAllBlessingWayFooters();

        $blessingWayCitations = $this->model->findAllBlessingWayCitations();
        
        //affichage
        \Renderer::subRender("blessingWay", compact('blessingWayHeaders','blessingWayContents','blessingWayLists','blessingWayFooters','blessingWayCitations'));
    }
}