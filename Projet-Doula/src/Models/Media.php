<?php

namespace Models;

class Media extends Model
{
    //pour utiliser Model, on doit définir une propriété protected $table
    //qui contient le nom de la table principale
    protected $table = T_MED;

    
// Find all articles from home page
    public function findAllMediaIntro(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `Page`= 'Home' AND `Category`= 'Intro'");
        
        $query->execute();

        $mediaIntros = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaIntros;
    } 
    public function findAllMediaAccueil(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `Page`= 'Home' AND `Category`= 'Accueil'");
        
        $query->execute();

        $mediaAccueils = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaAccueils;
    }
    public function findAllMediaAnnouncement(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `Page`= 'Home' AND `Category`= 'announcement'");
        
        $query->execute();

        $mediaAnnouncements = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaAnnouncements;
    } 
    public function findAllMediaConclusion(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `Page`= 'Home' AND `Category`= 'conclusion'");
        
        $query->execute();

        $mediaAonclusions = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaAonclusions;
    } 
    public function findAllMediaCitation(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `Page`= 'Home' AND `Category`= 'citation'");
        
        $query->execute();

        $mediaCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaCitations;
    }

// Find all articles from services page.
    public function findAllSummaryBirth(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'summary' AND `Category`= 'summaryBirth'");
        
        $query->execute();

        $summaryBirths = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $summaryBirths;
    } 
    public function findAllSummaryPostnatal(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'summary' AND `Category`= 'summaryPostnatal'");
        
        $query->execute();

        $summaryPostnatals = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $summaryPostnatals;
    } 
    public function findAllSummaryPerinatal(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'summary' AND `Category`= 'summaryPerinatal'");
        
        $query->execute();

        $summaryPerinatals = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $summaryPerinatals;
    } 
    public function findAllSummaryBlessingWay(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'summary' AND `Category`= 'summaryBlessingWay'");
        
        $query->execute();

        $summaryBlessingWays = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $summaryBlessingWays;
    } 
    public function findAllSummaryRebozo(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'summary' AND `Category`= 'summaryRebozo'");
        
        $query->execute();

        $summaryRebozos = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $summaryRebozos;
    } 
    public function findAllSummaryRedTent(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'summary' AND `Category`= 'summaryRedTent'");
        
        $query->execute();

        $summaryRedTents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $summaryRedTents;
    } 

// Find all articles from price page.  
    public function findAllMediaRebozoRitual(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'rebozoRitual'");
        
        $query->execute();

        $mediaRebozoRituals = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRebozoRituals;
    }
    public function findAllMediaBlessingWayPrice(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'blessingWayPrice'");
        
        $query->execute();

        $mediaBlessingPrices = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBlessingPrices;
    }
    public function findAllMediaRedTentePrice(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'redTentePrice'");
        
        $query->execute();

        $mediaRedTentePrices = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRedTentePrices;
    }
    public function findAllMediaPackageSession(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'packageSession'");
        
        $query->execute();

        $mediaPackageSessions = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPackageSessions;
    }
    public function findAllMediaIndividualSession(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'individualSession'");
        
        $query->execute();

        $mediaIndividualSessions = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaIndividualSessions;
    }
    public function findAllMediaFirstMeet(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Pricing' AND `Category`= 'firstMeet'");
        
        $query->execute();

        $mediaFirstMeets = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaFirstMeets;
    }
    public function findAllMediaTimeYourself(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Packages' AND `Category`= 'timeYourself'");
        
        $query->execute();

        $mediaTimeYourselfs = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaTimeYourselfs;
    }
    public function findAllMediaContinuousSupport(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Packages' AND `Category`= 'continuousSupport'");
        
        $query->execute();

        $mediaContinuousSupports = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaContinuousSupports;
    }        
    public function findAllMediaChildbirth(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Packages' AND `Category`= 'childbirth'");
        
        $query->execute();

        $mediaChildbirths = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaChildbirths;
    }        
    public function findAllMediaRules(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Modalities' AND `Category`= 'rules'");
        
        $query->execute();

        $mediaRules = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRules;
    }        
    public function findAllMediaPaiements(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Modalities' AND `Category`= 'paiements'");
        
        $query->execute();

        $mediaPaiements = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPaiements;
    }        
    public function findAllMediaArrengements(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `subPages`= 'Modalities' AND `Category`= 'arrangement'");
        
        $query->execute();

        $mediaArrangements = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaArrangements;
    }

// Find all articles from who page.
    public function findAllMediaPresentation(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content`  FROM $this->table  WHERE `Page`= 'Who' AND `Category`= 'présentation'");
        
        $query->execute();

        $mediaPresentations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPresentations;
    }
    public function findAllMediaFigcaptions(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content`  FROM $this->table  WHERE `Page`= 'Who' AND `Category`= 'figcaption'");
        
        $query->execute();

        $mediaFigcaptions = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaFigcaptions;
    }
    public function findAllMediaWhoCitation(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content`  `Content` FROM $this->table  WHERE `Page`= 'Who' AND `Category`= 'Citation'");
        
        $query->execute();

        $mediaWhoCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaWhoCitations;
    }
    public function findAllMediaFormations(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content`  FROM $this->table  WHERE `Page`= 'Who' AND `Category`= 'formation'");
        
        $query->execute();

        $mediaFormations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaFormations;
    }
    public function findAllMediaConf(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content`  FROM $this->table  WHERE `Page`= 'Who' AND `Category`= 'conf'");
        
        $query->execute();

        $mediaConfs = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaConfs;
    }

// Find all articles from contact page.
    public function findAllMediaWelcome(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content`  FROM $this->table  WHERE `Page`= 'contact' AND `Category`= 'welcome'");
        
        $query->execute();

        $mediaWelcomes = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaWelcomes;
    }
    public function findAllMediaPhone(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content`  FROM $this->table  WHERE `Page`= 'contact' AND `Category`= 'phone'");
        
        $query->execute();

        $mediaPhones = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPhones;
    }
    public function findAllMediaMail(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content`  FROM $this->table  WHERE `Page`= 'contact' AND `Category`= 'mail'");
        
        $query->execute();

        $mediaMails = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaMails;
    }

// Find all articles from resources page.  
    public function findAllMediaLoiret(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'ResourcesPerinatal'");
        
        $query->execute();

        $mediaLoirets = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaLoirets;
    }
    public function findAllMediaLibrarie(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'libraries'");
        
        $query->execute();

        $mediaLibraries = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaLibraries;
    }

// Find all articles from legal page.
    public function findAllMediaIdentity(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content`  FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'Identity'");
        
        $query->execute();

        $mediaIdentitys = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaIdentitys;
    }
    public function findAllMediaMoral(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content`  FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'Moral'");
        
        $query->execute();

        $mediaMorals = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaMorals;
    }
    public function findAllMediaTerms(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'Terms'");
        
        $query->execute();

        $mediaTerms = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaTerms;
    }
    public function findAllMediaLink(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'Links'");
        
        $query->execute();

        $mediaLinks = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaLinks;
    }
    public function findAllMediaConfidentiality(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'Confidentiality'");
        
        $query->execute();

        $mediaConfidentialities = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaConfidentialities;
    }
    public function findAllMediaOthersLegals(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table  WHERE `Page`= 'legals' AND `Category`= 'OthersLegals'");
        
        $query->execute();

        $mediaOtherLegals = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaOtherLegals;
    }
    
// Find all articles from services page and birth sub page.
    public function findAllMediaBirthHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'birth' AND `Category`= 'birthHeader'");
        
        $query->execute();
    
        $mediaBirthHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBirthHeaders;
    }
    public function findAllMediaBirthContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'birth' AND `Category`= 'birthContents'");
        
        $query->execute();
    
        $mediaBirthContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBirthContents;
    }
    public function findAllMediaBirthLists():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'birth' AND `Category`= 'birthList'");
        
        $query->execute();
    
        $mediaBirthLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBirthLists;
    }
    public function findAllMediaBirthFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'birth' AND `Category`= 'birthFooter'");
        
        $query->execute();
    
        $mediaBirthFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBirthFooters;
    }
    public function findAllMediaBirthCitations():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'birth' AND `Category`= 'birthCitation'");
        
        $query->execute();
    
        $mediaBirthCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBirthCitations;
    }

// Find all articles from services page and post-natal sub page.
    public function findAllMediaPostnatalHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'postnatal' AND `Category`= 'postnatalHeader'");
        
        $query->execute();
    
        $mediaPostnatalHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPostnatalHeaders;
    }
    public function findAllMediaPostnatalContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'postnatal' AND `Category`= 'postnatalContents'");
        
        $query->execute();
    
       $mediaPostnatalContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPostnatalContents;
    }
    public function findAllMediaPostnatalLists():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'postnatal' AND `Category`= 'postnatalList'");
        
        $query->execute();
    
        $mediaPostnatalLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPostnatalLists;
    }
    public function findAllMediaPostnatalFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'postnatal' AND `Category`= 'postnatalFooter'");
        
        $query->execute();
    
        $mediaPostnatalFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPostnatalFooters;
    }
    public function findAllMediaPostnatalCitations():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'postnatal' AND `Category`= 'postnatalCitation'");
        
        $query->execute();
    
        $mediaBirthCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBirthCitations;
    }

// Find all articles from services page and perinatal sub page.
    public function findAllMediaPerinatalHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'perinatal' AND `Category`= 'perinatalHeader'");
        
        $query->execute();
    
        $mediaPerinatalHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPerinatalHeaders;
    }
    public function findAllMediaPerinatalContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'perinatal' AND `Category`= 'perinatalContents'");
        
        $query->execute();
    
        $mediaPerinatalContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPerinatalContents;
    }
    public function findAllMediaPerinatalLists():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'perinatal' AND `Category`= 'perinatalList'");
        
        $query->execute();
    
        $mediaPerinatalLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPerinatalLists;
    }
    public function findAllMediaPerinatalFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'perinatal' AND `Category`= 'perinatalFooter'");
        
        $query->execute();
    
        $mediaPerinatalFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPerinatalFooters;
    }
    public function findAllMediaPerinatalCitations():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'perinatal' AND `Category`= 'perinatalCitation'");
        
        $query->execute();
    
        $mediaPerinatalCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPerinatalCitations;
    }

// Find all articles from services page and blessing way sub page.
    public function findAllMediaBlessingWayHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'blessingWay' AND `Category`= 'blessingWayHeader'");
        
        $query->execute();
    
        $mediaBlessingWayHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBlessingWayHeaders;
    }
    public function findAllMediaBlessingWayContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'blessingWayWay' AND `Category`= 'blessingWayContents'");
        
        $query->execute();
    
        $mediaBlessingWayContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBlessingWayContents;
    }
    public function findAllMediaBlessingWayLists():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'blessingWay' AND `Category`= 'blessingWayList'");
        
        $query->execute();
    
        $mediaBlessingWayLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBlessingWayLists;
    }
    public function findAllMediaBlessingWayFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'blessingWay' AND `Category`= 'blessingWayFooter'");
        
        $query->execute();
    
        $mediaBlessingWayFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBlessingWayFooters;
    }
    public function findAllMediaBlessingWayCitations():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'blessingWay' AND `Category`= 'blessingWayCitation'");
        
        $query->execute();
    
        $mediaBlessingWayCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaBlessingWayCitations;
    }
    
// Find all articles from services page and rebozo sub page.
    public function findAllMediaRebozoHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'rebozo' AND `Category`= 'rebozoHeader'");
        
        $query->execute();
    
        $mediaRebozoHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRebozoHeaders;
    }
    public function findAllMediaRebozoContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'rebozo' AND `Category`= 'rebozoContents'");
        
        $query->execute();
    
        $mediaRebozoContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRebozoContents;
    }
    public function findAllMediaRebozoLists():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'rebozo' AND `Category`= 'rebozoList'");
        
        $query->execute();
    
        $mediaRebozoLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRebozoLists;
    }
    public function findAllMediaRebozoFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'rebozo' AND `Category`= 'rebozoFooter'");
        
        $query->execute();
    
        $mediaPerinatalFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaPerinatalFooters;
    }
    public function findAllMediaRebozoFAQs():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'rebozo' AND `Category`= 'rebozoFAQ'");
        
        $query->execute();
    
        $mediaRebozoFAQs = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRebozoFAQs;
    }
// Find all articles from services page and red tent sub page.
    public function findAllMediaRedTentHeaders():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'redTent' AND `Category`= 'redTentHeader'");
        
        $query->execute();
    
        $mediaRedTentHeaders = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRedTentHeaders;
    }
    public function findAllMediaRedTentContents():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'redTent' AND `Category`= 'redTentContents'");
        
        $query->execute();
    
        $mediaRedTentContents = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRedTentContents;
    }
    public function findAllMediaRedTentDates():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'redTent' AND `Category`= 'redTentDate'");
        
        $query->execute();
    
        $mediaRedTentLists = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRedTentLists;
    }
    public function findAllMediaRedTentFooters():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'redTent' AND `Category`= 'redTentFooter'");
        
        $query->execute();
    
        $mediaRedTentFooters = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRedTentFooters;
    }
    public function findAllMediaRedTentCitations():array
    {
        $query = $this->pdo->prepare("SELECT `Id`,`FilesPath`,`Name`,`Content`,`Content` FROM $this->table WHERE `subPages`= 'redTent' AND `Category`= 'redTentCitation'");
        
        $query->execute();
    
        $mediaRedTentCitations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $mediaRedTentCitations;
    }

}
?>