<?php

namespace Controllers;

class Price extends Controller 
{
   protected $modelName = \Models\Articles::class;
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index() {
        
        /**
         * 2. Récupération des articles
         */
        $firstMeets = $this->model->findAllFirstMeet();

        $individualSessions = $this->model->findAllIndividualSession();

        $packageSessions = $this->model->findAllPackageSession();
        
        $redTentePrices = $this->model->findAllRedTentePrice();
        
        $blessingPrices = $this->model->findAllBlessingWayPrice();
        
        $rebozoRituals = $this->model->findAllRebozoRitual();

        $timeYourselfs = $this->model->findAllTimeYourself();

        $continuousSupports = $this->model->findAllContinuousSupport();
        
        $childbirths = $this->model->findAllChildbirth();
        
        $packageRules = $this->model->findAllPackageRules();
        
        $rules = $this->model->findAllRules();
        
        $paiements = $this->model->findAllPaiements();
        
        $arrangements = $this->model->findAllArrengements();

        //affichage
        \Renderer::render("price", compact('firstMeets','individualSessions','packageSessions','redTentePrices','blessingPrices','rebozoRituals','timeYourselfs','continuousSupports','childbirths','packageRules','rules','paiements','arrangements'));

    }
}