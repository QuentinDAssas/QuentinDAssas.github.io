'use strict';
// Menu selection filter

//Functions Main Menue
  function HomeShow()
  {
    let home = document.getElementById('selectorCat');
    home.innerHTML=('<label for="categoryHome">Quelle catégorie ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="Intro">Introduction</option><option value="Accueil">Accueil</option><option value="Announcement">Announcement</option><option value="Conclusion">Conclusion</option><option value="Citation">Citation</option></select>');
  }
  
  function ServiceShow()
  {
    let services = document.getElementById('selectorCat');
    services.innerHTML=('<label for="ServicesPages">Quelle pages services ? </label><select id="subServices" name="subPage"><option value="">Choisie la page des services</option><option value="birth">Accompagnement à la naissance</option><option value="postnatal">Accompagnement post-natal</option><option value="perinatal">Soutien périnatal</option><option value="blessingWay">Blessing way</option><option value="rebozo">Soin Rebozo</option><option value="redTent">Tente rouge</option></select><div id="subSelector"</div>');
  }
  
  function PriceShow()
  {
    let price = document.getElementById('selectorCat');
    price.innerHTML=('<label for="Price">Quelle prix ? </label><select id="subPrice" name="subPage"><option value="">Choisie le type de prix</option><option value="Pricing">Tarifs</option><option value="Packages">Forfaits</option><option value="Modalities">Modalités</option></select><div id="subSelector"</div>');
  }
  
  function WhoShow()
  {
    let who = document.getElementById('selectorCat');
    who.innerHTML=('<label for="categoryWho">Quelle catégorie ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="présentation">Présentation</option><option value="Citation">Citation</option><option value="formation">Formations</option><option value="conf">Conférences, Séminaires et Ateliers</option></select>');
  }
  
    function ContactShow()
  {
    let who = document.getElementById('selectorCat');
    who.innerHTML=('<label for="contact">Quelle catégorie ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="welcome">Message de contact</option><option value="phone">Numéro de téléphone</option><option value="mail">Adresse mail</option></select>');
  }
  
  function ResourcesShow()
  {
    let resource = document.getElementById('selectorCat');
    resource.innerHTML=('<label for="categoryResources">Quelle catégorie ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="Loiret">Dans le Loiret</option><option value="Others">Autres</option><option value="Libraries">Bibliothèque</option></select>');
  }
  
    function LegalsShow()
  {
    let resource = document.getElementById('selectorCat');
    resource.innerHTML=('<label for="categoryLegals">Quelle catégorie ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="identity">Identité</option><option value="Moral">Personne morale</option><option value="Terms">Conditions d\'utilisation</option><option value="Links">Liens</option><option value="Confidentiality">Confidentialité</option><option value="OthersLegals">Autres</option></select>');
  }

//Function Sub Menue
  //Sub services categories
    function BirthShow()
    {
      let services = document.getElementById('subSelector');
      services.innerHTML=('<label for="ServicesCategory">Quelle categorie de services ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="serviceCategory0">serviceCategory 0</option><option value="serviceCategory1">serviceCategory 1</option><option value="serviceCategory2">ServiceCategory 2</option><option value="serviceCategory3">serviceCategory 3</option><option value="serviceCategory4">serviceCategory 4</option><option value="serviceCategory5">serviceCategory 5</option></select>');
    }
    
    function PostnatalShow()
    {
      let services = document.getElementById('subSelector');
      services.innerHTML=('<label for="ServicesCategory">Quelle categorie de services ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="serviceCategory0">serviceCategory 0</option><option value="serviceCategory1">serviceCategory 1</option><option value="serviceCategory2">ServiceCategory 2</option><option value="serviceCategory3">serviceCategory 3</option><option value="serviceCategory4">serviceCategory 4</option><option value="serviceCategory5">serviceCategory 5</option></select>');
    }
    
    function PerinatalShow()
    {
      let services = document.getElementById('subSelector');
      services.innerHTML=('<label for="ServicesCategory">Quelle categorie de services ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="serviceCategory0">serviceCategory 0</option><option value="serviceCategory1">serviceCategory 1</option><option value="serviceCategory2">ServiceCategory 2</option><option value="serviceCategory3">serviceCategory 3</option><option value="serviceCategory4">serviceCategory 4</option><option value="serviceCategory5">serviceCategory 5</option></select>');
    }
    
    function BlessingWayShow()
    {
      let services = document.getElementById('subSelector');
      services.innerHTML=('<label for="ServicesCategory">Quelle categorie de services ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="serviceCategory0">serviceCategory 0</option><option value="serviceCategory1">serviceCategory 1</option><option value="serviceCategory2">ServiceCategory 2</option><option value="serviceCategory3">serviceCategory 3</option><option value="serviceCategory4">serviceCategory 4</option><option value="serviceCategory5">serviceCategory 5</option></select>');
    }
    
    function RebozoShow()
    {
      let services = document.getElementById('subSelector');
      services.innerHTML=('<label for="ServicesCategory">Quelle categorie de services ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="serviceCategory0">serviceCategory 0</option><option value="serviceCategory1">serviceCategory 1</option><option value="serviceCategory2">ServiceCategory 2</option><option value="serviceCategory3">serviceCategory 3</option><option value="serviceCategory4">serviceCategory 4</option><option value="serviceCategory5">serviceCategory 5</option></select>');
    }
    
    function RedTentShow()
    {
      let services = document.getElementById('subSelector');
      services.innerHTML=('<label for="ServicesCategory">Quelle categorie de services ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="serviceCategory0">serviceCategory 0</option><option value="serviceCategory1">serviceCategory 1</option><option value="serviceCategory2">ServiceCategory 2</option><option value="serviceCategory3">serviceCategory 3</option><option value="serviceCategory4">serviceCategory 4</option><option value="serviceCategory5">serviceCategory 5</option></select>');
    }
  
  //Sub price categories
    function PricingShow()
    {
      let services = document.getElementById('subSelector');
      services.innerHTML=('<label for="PriceCategory">Quelle categorie de services ? </label><select name="category"><option value="">Choisie la catégorie</option><option value="firstMeet">Première recontre</option><option value="individualSession">Séance individuelle, soutien périnatal</option><option value="packageSession">Séance inclue dans un forfait</option><option value="redTentPrice">Tente Rouge</option><option value="blessingWayPrice">Blessing Way</option><option value="rebozoRitual">Soin Rituel Rebozo</option></select>');
    }
    
    function PackagesShow()
    {
      let services = document.getElementById('subSelector');
      services.innerHTML=('<label for="PriceCategory">Quelle categorie de services ? </label><select name="category"><option value="">Choisie la catégorie</option></option><option value="timeYourself">Un temps pour soi</option><option value="continuousSupport">Un accompagnement en continuité</option><option value="childbirth">Présence à l\'accouchement</option></select>');
    }
    
    function ModalitiesShow()
    {
      let services = document.getElementById('subSelector');
      services.innerHTML=('<label for="PriceCategory">Quelle categorie de services ? </label><select name="category"><option value="">Choisie la catégorie</option></option><option value="rules">Règles</option><option value="paiements">Paiements</option><option value="arrangement">Arrangement</option></select>');
    }
    
//Activate the category according to the selected page
document.getElementById('pagesSelect').addEventListener('change', function() {
    switch(this.value)
    {
      case 'Home':
          HomeShow();
          break;
      case 'Services':
          ServiceShow();
          document.getElementById('subServices').addEventListener('change', function() {
              switch(this.value)
              {
                case 'birth':
                    BirthShow();
                    break;
                case 'postnatal':
                    PostnatalShow();
                    break;
                case 'perinatal':
                    PerinatalShow();
                    break;
                case 'blessingWay':
                    BlessingWayShow();
                    break;
                case 'rebozo':
                    RebozoShow();
                    break;
                case 'redTent':
                    RedTentShow();
                    break;
              }
          });
          break;
      case 'Price':
          PriceShow();
          document.getElementById('subPrice').addEventListener('change', function() {
              switch(this.value)
              {
                case 'Pricing':
                    PricingShow();
                    break;
                case 'Packages':
                    PackagesShow();
                    break;
                case 'Modalities':
                    ModalitiesShow();
                    break;
              }
          });
        break;
      case 'Who':
          WhoShow();
          break;
      case 'Contact':
          ContactShow();
          break;
      case 'Resources':
          ResourcesShow();
          break;
      case 'Legals':
          LegalsShow();
          break;
    }
});
