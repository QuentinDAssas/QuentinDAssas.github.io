<?php

namespace Models;

class Resources extends Model
{
    //pour utiliser Model, on doit définir une propriété protected $table
    //qui contient le nom de la table principale
    protected $table = T_ARTI;

    public function findAllIntro(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT * FROM $this->table  WHERE `Title`= 'Intro'");
        
        $query->execute();

        $intros = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $intros;
    } 

    public function findAllAccueil(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT * FROM $this->table  WHERE `Title`= 'Accueil'");
        
        $query->execute();

        $accueils = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $accueils;
    }
    
    public function findAllAnnouncement(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT * FROM $this->table  WHERE `Title`= 'announcement'");
        
        $query->execute();

        $announcements = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $announcements;
    } 

    public function findAllConclusion(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT * FROM $this->table  WHERE `Title`= 'conclusion'");
        
        $query->execute();

        $conclusions = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $conclusions;
    } 
    
    public function findAllCitation(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT * FROM $this->table  WHERE `Title`= 'citation'");
        
        $query->execute();

        $citations = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $citations;
    }
}

?>