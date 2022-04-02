<?php

namespace Models;

class Links extends Model
{
    //pour utiliser Model, on doit définir une propriété protected $table
    //qui contient le nom de la table principale
    protected $table = T_LINK;
    
    // Find all links from resources page.    
    public function findAllLinksLoiret(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Name`, `Link` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'loiret'");
        
        $query->execute();

        $linksLoiret = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $linksLoiret;
    }
        public function findAllLinksMaternity(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Name`, `Link` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'maternity'");
        
        $query->execute();

        $linksMaternity = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $linksMaternity;
    }
        public function findAllLinksAssociations(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Name`, `Link` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'associations'");
        
        $query->execute();

        $linksAssociations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $linksAssociations;
    }
    public function findAllLinksOther(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT `Id`, `Name`, `Link` FROM $this->table  WHERE `Page`= 'Resources' AND `Category`= 'other'");
        
        $query->execute();

        $linksOther = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $linksOther;
    }
}
?>    