<?php

namespace Models;

class Articles extends Model
{
    //pour utiliser Model, on doit définir une propriété protected $table
    //qui contient le nom de la table principale
    protected $table = T_ARTI;
    
// Find all articles from home page.    
    public function findAllIntro(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'Home' AND `Category`= 'Intro'");
        
        $query->execute();

        $intros = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $intros;
    } 
    public function findAllAccueil(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'Home' AND `Category`= 'Accueil'");
        
        $query->execute();

        $accueils = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $accueils;
    }
    public function findAllAnnouncement(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table WHERE `Page`= 'Home' AND `Category`= 'announcement'");
        
        $query->execute();

        $announcements = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $announcements;
    } 
    public function findAllConclusion(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'Home' AND `Category`= 'conclusion'");
        
        $query->execute();

        $conclusions = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $conclusions;
    } 
    public function findAllCitation(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'Home' AND `Category`= 'citation'");
        
        $query->execute();

        $citations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $citations;
    }

// Find all articles from services page.

// Find all articles from price page.  
    public function findAllRebozoRitual(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'rebozoRitual'");
        
        $query->execute();

        $rebozoRituals = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $rebozoRituals;
    }
    public function findAllBlessingWayPrice(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'blessingWayPrice'");
        
        $query->execute();

        $blessingPrices = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $blessingPrices;
    }
    public function findAllRedTentePrice(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'redTentPrice'");
        
        $query->execute();

        $redTentePrices = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $redTentePrices;
    }
    public function findAllPackageSession(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'packageSession'");
        
        $query->execute();

        $packageSessions = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $packageSessions;
    }
    public function findAllIndividualSession(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'individualSession'");
        
        $query->execute();

        $individualSessions = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $individualSessions;
    }
    public function findAllFirstMeet(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'firstMeet'");
        
        $query->execute();

        $firstMeets = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $firstMeets;
    }
    public function findAllTimeYourself(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Packages' AND `Category`= 'timeYourself'");
        
        $query->execute();

        $timeYourselfs = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $timeYourselfs;
    }
    public function findAllContinuousSupport(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Packages' AND `Category`= 'continuousSupport'");
        
        $query->execute();

        $continuousSupports = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $continuousSupports;
    }        
    public function findAllChildbirth(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Packages' AND `Category`= 'childbirth'");
        
        $query->execute();

        $childbirths = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $childbirths;
    }
    public function findAllPackageRules(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Packages' AND `Category`= 'packageRules'");
        
        $query->execute();

        $packageRules = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $packageRules;
    }
    public function findAllRules(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Modalities' AND `Category`= 'rules'");
        
        $query->execute();

        $rules = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $rules;
    }        
    public function findAllPaiements(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Modalities' AND `Category`= 'paiements'");
        
        $query->execute();

        $paiements = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $paiements;
    }        
    public function findAllArrengements(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `subPages`, `Category`, `Content` FROM $this->table  WHERE `subPages`= 'Modalities' AND `Category`= 'arrangement'");
        
        $query->execute();

        $arrangements = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $arrangements;
    }

// Find all articles from who page.
    public function findAllPresentationCol1(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `subPages`, `Category`, `Content`  FROM $this->table  WHERE `Page`= 'Who' AND `Category`= 'Column1'");
        
        $query->execute();

        $presentationsCol1 = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $presentationsCol1;
    }
    public function findAllPresentationCol2(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `subPages`, `Category`, `Content`  FROM $this->table  WHERE `Page`= 'Who' AND `Category`= 'Column2'");
        
        $query->execute();

        $presentationsCol2 = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $presentationsCol2;
    }
    public function findAllFigcaptions(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content`  FROM $this->table  WHERE `Page`= 'Who' AND `Category`= 'figcaption'");
        
        $query->execute();

        $legends = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $legends;
    }
    public function findAllWhoCitation(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content`  `Content` FROM $this->table  WHERE `Page`= 'Who' AND `Category`= 'Citation'");
        
        $query->execute();

        $whoCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $whoCitations;
    }
    public function findAllFormation(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content`  FROM $this->table  WHERE `Page`= 'Who' AND `Category`= 'formation'");
        
        $query->execute();

        $formations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $formations;
    }
    public function findAllConf(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content`  FROM $this->table  WHERE `Page`= 'Who' AND `Category`= 'conf'");
        
        $query->execute();

        $confs = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $confs;
    }

// Find all articles from contact page.
    public function findAllWelcome(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content`  FROM $this->table  WHERE `Page`= 'contact' AND `Category`= 'welcome'");
        
        $query->execute();

        $welcomes = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $welcomes;
    }
    public function findAllPhone(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content`  FROM $this->table  WHERE `Page`= 'contact' AND `Category`= 'phone'");
        
        $query->execute();

        $phones = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $phones;
    }
    public function findAllMail(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content`  FROM $this->table  WHERE `Page`= 'contact' AND `Category`= 'mail'");
        
        $query->execute();

        $mails = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mails;
    }

// Find all articles from resources page.  
    public function findAllLoiret(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'loiret'");
        
        $query->execute();

        $loirets = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $loirets;
    }
    public function findAllOther(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'others'");
        
        $query->execute();

        $others = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $others;
    }
    public function findAllLibrarie(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'libraries'");
        
        $query->execute();

        $libraries = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $libraries;
    }
    public function findAllPregnancy(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'pregnancy'");
        
        $query->execute();

        $pregnancys = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $pregnancys;
    }
    public function findAllFeminism(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'feminism'");
        
        $query->execute();

        $feminisms = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $feminisms;
    }
    public function findAllPostnatalLibraries(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'postnatal'");
        
        $query->execute();

        $postnatalLibraries = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $postnatalLibraries;
    }
    public function findAllYouth(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'Youth'");
        
        $query->execute();

        $youths = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $youths;
    }

// Find all articles from legal page.
    public function findAllIdentity(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content`  FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'Identity'");
        
        $query->execute();

        $identitys = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $identitys;
    }
    public function findAllMoral(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content`  FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'Moral'");
        
        $query->execute();

        $morals = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $morals;
    }
    public function findAllTerms(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'Terms'");
        
        $query->execute();

        $terms = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $terms;
    }
    public function findAllLink(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'Links'");
        
        $query->execute();

        $links = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $links;
    }
    public function findAllConfidentiality(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'Confidentiality'");
        
        $query->execute();

        $confidentialities = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $confidentialities;
    }
    public function findAllOthersLegals(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Page`, `Category`, `Content` FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'OthersLegals'");
        
        $query->execute();

        $otherLegals = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $otherLegals;
    }
    
// Find all articles from services page and birth sub page.
    public function findAllBirthHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'birth' AND `Category`= 'birthHeader'");
        
        $query->execute();
    
        $birthHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $birthHeaders;
    }
    public function findAllBirthContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'birth' AND `Category`= 'birthContents'");
        
        $query->execute();
    
        $birthContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $birthContents;
    }
    public function findAllBirthLists():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'birth' AND `Category`= 'birthList'");
        
        $query->execute();
    
        $birthLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $birthLists;
    }
    public function findAllBirthFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'birth' AND `Category`= 'birthFooter'");
        
        $query->execute();
    
        $birthFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $birthFooters;
    }
    public function findAllBirthCitations():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'birth' AND `Category`= 'birthCitation'");
        
        $query->execute();
    
        $birthCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $birthCitations;
    }

// Find all articles from services page and post-natal sub page.
    public function findAllPostnatalHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'postnatal' AND `Category`= 'postnatalHeader'");
        
        $query->execute();
    
        $postnatalHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $postnatalHeaders;
    }
    public function findAllPostnatalContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'postnatal' AND `Category`= 'postnatalContents'");
        
        $query->execute();
    
       $postnatalContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $postnatalContents;
    }
    public function findAllPostnatalLists():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'postnatal' AND `Category`= 'postnatalList'");
        
        $query->execute();
    
        $postnatalLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $postnatalLists;
    }
    public function findAllPostnatalFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'postnatal' AND `Category`= 'postnatalFooter'");
        
        $query->execute();
    
        $postnatalFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $postnatalFooters;
    }
    public function findAllPostnatalCitations():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'postnatal' AND `Category`= 'postnatalCitation'");
        
        $query->execute();
    
        $birthCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $birthCitations;
    }

// Find all articles from services page and perinatal sub page.
    public function findAllPerinatalHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'perinatal' AND `Category`= 'perinatalHeader'");
        
        $query->execute();
    
        $perinatalHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $perinatalHeaders;
    }
    public function findAllPerinatalContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'perinatal' AND `Category`= 'perinatalContents'");
        
        $query->execute();
    
        $perinatalContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $perinatalContents;
    }
    public function findAllPerinatalLists():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'perinatal' AND `Category`= 'perinatalList'");
        
        $query->execute();
    
        $perinatalLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $perinatalLists;
    }
    public function findAllPerinatalFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'perinatal' AND `Category`= 'perinatalFooter'");
        
        $query->execute();
    
        $perinatalFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $perinatalFooters;
    }
    public function findAllPerinatalCitations():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'perinatal' AND `Category`= 'perinatalCitation'");
        
        $query->execute();
    
        $perinatalCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $perinatalCitations;
    }

// Find all articles from services page and blessing way sub page.
    public function findAllBlessingWayHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'blessingWay' AND `Category`= 'blessingWayHeader'");
        
        $query->execute();
    
        $blessingWayHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $blessingWayHeaders;
    }
    public function findAllBlessingWayContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'blessingWayWay' AND `Category`= 'blessingWayContents'");
        
        $query->execute();
    
        $blessingWayContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $blessingWayContents;
    }
    public function findAllBlessingWayLists():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'blessingWay' AND `Category`= 'blessingWayList'");
        
        $query->execute();
    
        $blessingWayLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $blessingWayLists;
    }
    public function findAllBlessingWayFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'blessingWay' AND `Category`= 'blessingWayFooter'");
        
        $query->execute();
    
        $blessingWayFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $blessingWayFooters;
    }
    public function findAllBlessingWayCitations():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'blessingWay' AND `Category`= 'blessingWayCitation'");
        
        $query->execute();
    
        $blessingWayCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $blessingWayCitations;
    }
    
// Find all articles from services page and rebozo sub page.
    public function findAllRebozoHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'rebozo' AND `Category`= 'rebozoHeader'");
        
        $query->execute();
    
        $rebozoHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $rebozoHeaders;
    }
    public function findAllRebozoContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'rebozo' AND `Category`= 'rebozoContents'");
        
        $query->execute();
    
        $rebozoContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $rebozoContents;
    }
    public function findAllRebozoLists():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'rebozo' AND `Category`= 'rebozoList'");
        
        $query->execute();
    
        $rebozoLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $rebozoLists;
    }
    public function findAllRebozoFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'rebozo' AND `Category`= 'rebozoFooter'");
        
        $query->execute();
    
        $perinatalFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $perinatalFooters;
    }
    public function findAllRebozoFAQs():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'rebozo' AND `Category`= 'rebozoFAQ'");
        
        $query->execute();
    
        $rebozoFAQs = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $rebozoFAQs;
    }
// Find all articles from services page and red tent sub page.
    public function findAllRedTentHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'redTent' AND `Category`= 'redTentHeader'");
        
        $query->execute();
    
        $redTentHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $redTentHeaders;
    }
    public function findAllRedTentContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'redTent' AND `Category`= 'redTentContents'");
        
        $query->execute();
    
        $redTentContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $redTentContents;
    }
    public function findAllRedTentDates():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'redTent' AND `Category`= 'redTentDate'");
        
        $query->execute();
    
        $redTentLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $redTentLists;
    }
    public function findAllRedTentFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'redTent' AND `Category`= 'redTentFooter'");
        
        $query->execute();
    
        $redTentFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $redTentFooters;
    }
    public function findAllRedTentCitations():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`Content` FROM $this->table WHERE `subPages`= 'redTent' AND `Category`= 'redTentCitation'");
        
        $query->execute();
    
        $redTentCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $redTentCitations;
    }
}
?>