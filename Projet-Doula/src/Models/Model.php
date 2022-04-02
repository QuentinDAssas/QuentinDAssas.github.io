<?php

namespace Models;



/**
 * Classe abstraite représentant toutes les intéractions possibles avec une table :
 *
 * On ne veut pas qu'un développeur puisse se dire "Tiens, je vais créer un objet de la classe Model", ça ne veut rien dire car le Model de base ne sait pas à quelle table il s'intéresse.
 *
 * On obligera donc le développeur à hériter de cette classe et à préciser le nom de la table concernée !
 *
 * Pour préciser, il faudra que la classe enfant (par exemple User) définisse bien la propriété : protected $table = "user"
 *
 * LES PROPRIETES :
 * -----------------
 * - $pdo est un objet de la classe PDO qui représente la connexion à la base de données
 * - $table  est une chaine de caractère qui indique au model à quelle table il s'intéresse !
 *
 * LES METHODES :
 * -----------------
 * - findAll() : selection de toutes les lignes de la table
 * - find($id) : selection d'une seule ligne via l'identifiant
 * - insert($array) : insertion d'une nouvelle ligne dans la table
 * - update($array) : mise à jour d'une ligne dans la table
 * - delete($id) : suppression d'une ligne dans la table grâce à son identifiant
 */
abstract class Model
{
    /**
     * Représente la connexion à la base de données. Elle sera créée dès la construction de
     * n'importe quel objet Model qui héritera de cette classe.
     *
     * Ainsi, $this->pdo est une connexion à la base de données qui est disponible dans toutes les méthodes de nos models !
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Représente la table que l'on veut traiter. Comme cette classe Model a plein de méthodes "génériques" (qui marchent sur toutes les tables), il suffit de renseigner
     * le nom de la table qui nous intéresse pour avoir dans n'importe quelle fonction $this->table qui représente bel et bien la table à attaquer :D
     *
     * @var string
     */
    protected $table;

    /**
     * Constructeur qui vérifie que la table est bien précisée
     * et qui met en place la connexion à la base de données
     */
    public function __construct()
    {
        // 1. On vérifie que le nom de la table est bien précisé !
        if (empty($this->table)) {
            // Si le développeur a zappé cette étape, on la lui rappelle avec une bonne grosse erreur !
            throw new \Exception('Vous devez absolument spécifier une propriété <em>protected $table</em> dans votre classe ' . get_called_class() . ' qui hérite de Model et qui contient le nom de la table à attaquer.');
        }

        // 2. Si tout est bon, on créé l'objet PDO en utilisant les données du fichier de configuration
       $this->pdo =\Database::getPdo();
        //$this->pdo = getInstance();
    }

    /**
     * Permet de retrouver un enregistrement grâce à son identifiant
     *
     * @param integer $id
     * @return array|bool|null
     */
    public function find(int $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");

        // On exécute la requête en précisant le paramètre :id 
        $query->execute(['id' => $id]);

        // On fouille le résultat pour en extraire les données réelles de l'item
        $item = $query->fetch();

        return $item;
    }
    
    /**
     * Permet de supprimer un enregistrement
     */
    public function delete(int $id) : void 
    {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE Id = :Id");
        $query->execute(['Id' => $id]);
    }


    public function findAll(): array
    {
        // Retourner tous les articles
        
        $query = $this->pdo->prepare("SELECT * FROM $this->table");
        
        $query->execute();

        $articles = $query->fetchAll(\PDO::FETCH_ASSOC);
        
        return $articles;
    }
    /**
     * Permet d'insérer un nouvel enregistrement et retourne l'identifiant
     *
     * @param array $data
     * @return integer
     */
    public function insert(array $data): int
    {
        $sql = "INSERT INTO $this->table SET ";

        $columns = array_keys($data);
        $sqlColumns = [];

        foreach ($columns as $column) {
            $sqlColumns[] = "$column = :$column";
        }

        $sql .= implode(",", $sqlColumns);

        $query = $this->pdo->prepare($sql);

        $query->execute($data);

        return $this->pdo->lastInsertId();
    }
    

    /**
     * Permet de mettre à jour un enregistrement
     *
     * @param array $data
     * @return void
     */
    public function update(array $data)
    {
        if (!array_key_exists('Id', $data)) {
            throw new Exception("Vous ne pouvez pas appeler la fonction update sans préciser dans votre tableau un champ `id` !");
        }

        $sql = "UPDATE $this->table SET ";

        $columns = array_keys($data);
        $sqlColumns = [];

        foreach ($columns as $column) {
            if ($column != 'Id') {
            $sqlColumns[] = "$column = :$column";
            }
        }

        $sql .= implode(",", $sqlColumns);

        $sql .= " WHERE Id = :Id";

        $query = $this->pdo->prepare($sql);
        
        return $query->execute($data);
    }
    
}