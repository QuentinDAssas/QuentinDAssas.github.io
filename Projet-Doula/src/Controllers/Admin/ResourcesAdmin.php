<?php

namespace Controllers\Admin;

class ResourcesAdmin extends \Controllers\Admin 
{
    protected $modelName = \Models\Articles::class;
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        $imagesModel = new \Models\Media();
        $linksModel = new \Models\Links();
        /**
         * 2. Récupération des articles
         */
        $libraries = $this->model->findAllLibrarie();
        
        $pregnancys = $this->model->findAllPregnancy();
        
        $feminisms = $this->model->findAllFeminism();
        
        $postnatalLibraries = $this->model->findAllPostnatalLibraries();
        
        $youths = $this->model->findAllYouth();
        
        $mediaLoirets = $imagesModel->findAllMediaLoiret();
        
        $mediaLibraries = $imagesModel->findAllMediaLibrarie();
        
        $linksLoiret = $linksModel->findAllLinksLoiret();
        
        $linksMaternity = $linksModel->findAllLinksMaternity();
        
        $linksAssociations = $linksModel->findAllLinksAssociations();
        
        $linksOther = $linksModel->findAllLinksOther();

        //affichage
        \Renderer::showAdmin("ResourcesAdmin", compact('libraries','mediaLibraries','mediaLoirets','linksLoiret','linksMaternity','linksAssociations','linksOther','pregnancys','feminisms','postnatalLibraries','youths'));
        
    }
}