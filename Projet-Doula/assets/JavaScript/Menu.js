'use strict';
// Menu selection filter


//Functions Main Menu
  function PageShow()
  {
    const pages = document.getElementById('selectorPages');
    pages.innerHTML=('<label for="pages">Quelle page?</label><select id="pagesSelect" name="pages" required><option value="">Choisie la page</option><option value="Home">Accueil</option><option value="Services">Mes services</option><option value="Price">Tarifs, Forfaits et Modalités</option><option value="Who">Qui suis-je ?</option><option value="Contact">Contact</option><option value="Resources">Ressources</option>option value="Legals">Mentions légales</option></select>');
  }
  function HomeShow()
  {
    const home = document.getElementById('selectorCat');
    home.innerHTML=('<label for="Home">Quelle catégorie ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="Intro">Introduction</option><option value="Accueil">Accueil</option><option value="Announcement">Announcement</option><option value="Conclusion">Conclusion</option><option value="Citation">Citation</option></select>');
  }
  function ServiceShow()
  {
    const services = document.getElementById('selectorCat');
    services.innerHTML=('<label for="ServicesPages">Quelle pages services ? </label><select id="subServices" name="subPage" required><option value="">Choisie la page des services</option><option value="summary">Sommaire des services</option><option value="birth">Accompagnement à la naissance</option><option value="postnatal">Accompagnement post-natal</option><option value="perinatal">Soutien périnatal</option><option value="blessingWay">Blessing way</option><option value="rebozo">Soin Rebozo</option><option value="redTent">Tente rouge</option></select><div id="subSelector"</div>');
  }
  function PriceShow()
  {
    const price = document.getElementById('selectorCat');
    price.innerHTML=('<label for="Price">Quelle prix ? </label><select id="subPrice" name="subPage" required><option value="">Choisie le type de prix</option><option value="Pricing">Tarifs</option><option value="Packages">Forfaits</option><option value="Modalities">Modalités</option></select><div id="subSelector"</div>');
  }
  function WhoShow()
  {
    const who = document.getElementById('selectorCat');
    who.innerHTML=('<label for="Who">Quelle catégorie ? </label><select id="subWho" name="category" required><option value="">Choisie la catégorie</option><option value="presentation">Présentation</option><option value="figcaption">légende photo</option><option value="Citation">Citation</option><option value="formation">Formations</option><option value="conf">Conférences, Séminaires et Ateliers</option></select><div id="subSelector"</div>');
  }
  function ContactShow()
  {
    const contact = document.getElementById('selectorCat');
    contact.innerHTML=('<label for="contact">Quelle catégorie ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="welcome">Message de contact</option><option value="phone">Numéro de téléphone</option><option value="mail">Adresse mail</option></select>');
  }
  function ResourcesShow()
  {
    const resource = document.getElementById('selectorCat');
    resource.innerHTML=('<label for="Resources">Quelle catégorie ? </label><select id="subResources" name="subPage" required><option value="">Choisie la catégorie</option><option value="ResourcesPerinatal">Ressources autour de la périnatalité</option><option value="resourcesLibraries">Bibliothèque</option></select><div id="subSelector"</div>');
  }
  function LegalsShow()
  {
    const legal = document.getElementById('selectorCat');
    legal.innerHTML=('<label for="Legals">Quelle catégorie ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="identity">Identité</option><option value="Moral">Personne morale</option><option value="Terms">Conditions d\'utilisation</option><option value="Links">Liens</option><option value="Confidentiality">Confidentialité</option><option value="OthersLegals">Autres</option></select>');
  }
  function LogoShow()
  {
    const selectorPages = document.getElementById('selectorPages');
    selectorPages.innerHTML=('<div id="selectorPages"></div>');
    const textarea = document.getElementById('description');
    textarea.innerHTML=('<label for="LogosCategory">Quel logo ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="logoHeader">Logo du header</option><option value="logoFooter">Logo du footer</option></select>');
  }
  function FaviconShow()
  {
    const selectorPages = document.getElementById('selectorPages');
    selectorPages.innerHTML=('<div id="selectorPages"></div>');
    const textarea = document.getElementById('description');
    textarea.innerHTML=('<div id="textarea"></div>');
  }

//Function Sub Menu
  //Sub services categories
    function SummaryShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="summaryCategory">Quelle service du sommaire ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="summaryBirth">Accompagnement à la naissance</option><option value="summaryPostnatal">Accompagnement post-natal</option><option value="summaryPerinatal">Soutien périnatal</option><option value="summaryBlessingWay">Blessing Way</option><option value="summaryRebozo">Soin Rebozo</option><option value="summaryRedTent">Tente rouge</option></select>');
    }
    function BirthShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="BirthCategory">Quelle categorie de services ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="birthHeader">Entête</option><option value="birthContents">Contenus</option><option value="birthList">Listes d\'accompagnement à la naissance</option><option value="birthFooter">Les bénéfices de l\'accompagnement à la naissance</option><option value="birthCitation">Citation</option></select>');
    }
    function PostnatalShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="PostnatalCategory">Quelle categorie de services ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="postnatalHeader">Entête</option><option value="postnatalContents">Contenus</option><option value="postnatalList">Listes d\'accompagnement post-natal</option><option value="postnatalFooter">Les bénéfices de l\'accompagnement post-natal</option><option value="postnatalCitation">Citation</option></select>');
    }
    function PerinatalShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="PerinatalCategory">Quelle categorie de services ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="perinatalHeader">Entête</option><option value="perinatalContents">Contenus</option><option value="perinatalList">Listes des soutiens perinatal</option><option value="perinatalFooter">Les bénéfices du soutien perinatal</option><option value="perinatalCitation">Citation</option></select>');
    }
    function BlessingWayShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="BlessingWayCategory">Quelle categorie de services ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="blessingWayHeader">Entête</option><option value="blessingWayContents">Contenus</option><option value="blessingWayList">Listes de blessing way</option><option value="blessingWayFooter">Les bénéfices du blessing way</option><option value="blessingWayCitation">Citation</option></select>');
    }
    function RebozoShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="RebozoCategory">Quelle categorie de services ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="rebozoHeader">Entête</option><option value="rebozoList">Listes des soins rebozo</option><option value="rebozoContents">Contenus</option><option value="rebozoFooter">Les origines du Rebozo</option><option value="rebozoFAQ">FAQ</option></select>');
    }
    function RedTentShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="RedTentCategory">Quelle categorie de services ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="redTentHeader">Entête</option><option value="redTentContents">Contenus</option><option value="redTentdate">Dates des tentes rouge</option><option value="redTentFooter">Les origines de la tente rouge</option><option value="redTentCitation">Citation</option></select>');
    }

  //Sub price categories
    function PricingShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="PricingCategory">Quelle categorie de services ? </label><select name="category" required><option value="">Choisie la catégorie</option><option value="firstMeet">Première recontre</option><option value="individualSession">Séance individuelle, soutien périnatal</option><option value="packageSession">Séance inclue dans un forfait</option><option value="redTentPrice">Tente Rouge</option><option value="blessingWayPrice">Blessing Way</option><option value="rebozoRitual">Soin Rituel Rebozo</option></select>');
    }
    function PackagesShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="PackagesCategory">Quelle categorie de services ? </label><select name="category" required><option value="">Choisie la catégorie</option></option><option value="timeYourself">Un temps pour soi</option><option value="continuousSupport">Un accompagnement en continuité</option><option value="childbirth">Présence à l\'accouchement</option><option value="packageRules">Informations forfait</option></select>');
    }
    function ModalitiesShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="ModalitiesCategory">Quelle categorie de services ? </label><select name="category" required><option value="">Choisie la catégorie</option></option><option value="rules">Règles</option><option value="paiements">Paiements</option><option value="arrangement">Arrangement</option></select>');
    }
    
  //Sub Who categories
    function PresentationsColShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="PresentationColumn">Quelle colonnes ? </label><select name="category" required><option value="">Choisie la colonne</option></option><option value="Column1">Colonne 1</option><option value="Column2">Colonne 2</option></select>');
    }

    //Sub Resources categories
    function ResourcesPerinatalShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="ResourcesPerinatal">Quelle ressource autour de la périnatalité ? </label><select id="linkResources" name="linkResources" required><option value="">Choisie la ressource autour de la périnatalité</option></option><option value="loiret">Dans le Loiret</option><option value="other">Autres que Loiret</option></select><div id="linkSelector"></div>');
    }
    function LibrariesShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<label for="Libraries">Quelle bibliothèque ? </label><select name="category" required><option value="">Choisie la bibliothèque</option><option value="libraries">Informations</option><option value="pregnancy">Grossesse et Accouchement</option><option value="feminism">Autour du féminin et du féminisme</option><option value="postnatal">Post-Natal et Parentalité</option><option value="Youth">Jeunesse</option></select>');
    }
    function linkSelectorShow()
    {
      const services = document.getElementById('linkSelector');
      services.innerHTML=('<label for="LinkLoiret">Quelle lien du Loiret ? </label><select name="category" required><option value="">Choisie le lien du Loiret</option><option value="associations">Associations Loirétaines</option></option><option value="maternity">Maternité du Loiret</option><option value="other">Autres</option></select>');
    }
    function LinksShow()
    {
      const textarea = document.getElementById('description');
      textarea.innerHTML=('<div><label for="name" required>Nom du lien</label><input type="text" name="name"/></div><div><label for="link">adresse du lien</label><input type="text" name="link" required/></div>');
    }
    //default function
    function NoSelectorShow()
    {
      const services = document.getElementById('subSelector');
      services.innerHTML=('<div id="subSelector"</div>');
    }
    function DescriptionShow()
    {
      const textarea = document.getElementById('description');
      textarea.innerHTML=('<div id="textarea"><label for="content">Description:</label><textarea id="description" name="content" rows="5" cols="35" required></textarea></div>');
    }
      
//Activate the category according to the selected page
if(document.getElementById('type').value == 'media')
{
  document.getElementById('type').addEventListener('change', function() {
      switch(this.value)
      {
      case 'images':
        PageShow();
        DescriptionShow();
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
                      case 'summary':
                          SummaryShow();
                          break;
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
      break;
      case 'logo':
        LogoShow();
        alert('Attention cela remplacera le logo actuelle.');
        break;
      case'favicon':
        FaviconShow();
        alert('Attention cela remplacera le favicon actuelle.');
        break; 
      }
  });
}else{
  document.getElementById('pagesSelect').addEventListener('change', function() {
          DescriptionShow();
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
                document.getElementById('subWho').addEventListener('change', function() {
                    switch(this.value)
                    {
                      case 'presentation':
                          PresentationsColShow();
                          break;
                      default:
                          NoSelectorShow();
                          break;
                    }
                });
                break;
            case 'Contact':
                ContactShow();
                break;
            case 'Resources':
                ResourcesShow();
                document.getElementById('subResources').addEventListener('change', function() {
                    switch(this.value)
                    {
                      case 'ResourcesPerinatal':
                          LinksShow();
                          ResourcesPerinatalShow();
                          document.getElementById('linkResources').addEventListener('change', function() {
                            switch(this.value)
                            {
                              case 'loiret':
                                linkSelectorShow();
                                break;
                            }
                          });
                          break;
                      case 'resourcesLibraries':
                          DescriptionShow();
                          LibrariesShow();
                          break;
                    }
                });
                break;
            case 'Legals':
                LegalsShow();
                break;
          }
      });  
}