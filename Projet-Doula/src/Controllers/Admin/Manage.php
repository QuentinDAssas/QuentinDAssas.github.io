<?php

namespace Controllers\Admin;

class Manage extends \Controllers\Admin
{
    protected $modelName = \Models\Articles::class;
    
        /**
         * Récupération des articles
         */
    public function show ()
    {
        /**
         * 1. Récupération du param "id" et vérification de celui-ci
         */
        // On part du principe qu'on ne possède pas de param "id"
        $article_id = null;
        $empty = null;

        // Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
        if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
            $article_id = $_GET['id'];
            
        $article = $this->model->find($article_id);

        //affichage
        \Renderer::showAdmin("manage", compact('article','empty'));
        }else{
            $article = null;
            $empty = null;
            //affichage
        \Renderer::showAdmin("manage", compact('article','empty'));
        }
    }
    
    public function return()
    {
        \Http::redirectBack();
    }
        
    public function delete ()
    {
        // $table = $_GET('table');
        //   if($table="media")
        if(array_key_exists('table', $_GET))
        {
            $table = $_GET['table'];
            if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
                die("Ho ?! Tu n'as pas précisé l'id de l'article !");
            }
    
            $id = $_GET['id'];

            switch($table)
            {
                case 'article':
                     /**
                     * 3. Vérification que l'id existe bel et bien
                     */
                    $check = $this->model->find($id);
            
                    if (!$check) {
                        die("L'article $id n'existe pas, vous ne pouvez donc pas le supprimer !");
                    }    
                    /**
                     * 4. Réelle suppression de l'article
                     */
                    $this->model->delete($id);
                    break;
                case 'media':
                    $mediaModel = new \Models\Media();
                    /**
                     * 3. Vérification que l'id existe bel et bien
                     */
                    $check = $mediaModel->find($id);
            
                    if (!$check) {
                        die("L'article $id n'existe pas, vous ne pouvez donc pas le supprimer !");
                    }else{
                        $deletePath = $check['FilesPath'];
                        $deleteAlt = $check['Name'];
                        unlink($deletePath.$deleteAlt);
                    };
                    /**
                     * 4. Réelle suppression de l'article
                     */
                    $mediaModel->delete($id);
                    break;
                case 'link':
                    $linksModel = new \Models\Links();
                     /**
                     * 3. Vérification que l'id existe bel et bien
                     */
                    $check = $linksModel->find($id);
            
                    if (!$check) {
                        die("L'article $id n'existe pas, vous ne pouvez donc pas le supprimer !");
                    }    
                    /**
                     * 4. Réelle suppression de l'article
                     */
                    $linksModel->delete($id);
                    break;
            }
        }
        \Http::redirectBack();
    }
    
    public function update ()
    {
        /**
         * 1. On vérifie que le GET possède bien un paramètre "id" (delete.php?id=202) et que c'est bien un nombre
         */
        if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
            die("Ho ?! Tu n'as pas précisé l'id de l'article !");
        }

        $id = $_GET['id'];

        /**
         * 3. Vérification que l'article existe bel et bien
         */
        $article = $this->model->find($id);
        if (!$article) {
            die("L'article $id n'existe pas !");
        }
        
        $data['Content'] = $_POST['content'];
        $data['Id'] = $id;

        /**
         * 4. Update de l'article
         */
        $this->model->update($data);
    
        \Http::redirect(WWW_URL."index.php?controller=Admin\Manage&task=show");
    }
    
    public function insert ()
    {
        if (empty($_POST['pages'])) 
        {
            //affichage
            \Http::redirect(WWW_URL."index.php?controller=Admin\Manage&task=show");
        }else if(empty($_POST['content']))
                {
                $linksModel = new \Models\Links();
                    
                $data['Page'] = $_POST['pages'];
                $data['subPages'] = $_POST['subPage'];
                $data['Category'] = $_POST['category'];
                $data['Name'] = $_POST['name'];
                $data['Link'] = $_POST['link'];
                
                 $linksModel->insert($data);
                }else{
                    $data['Page'] = $_POST['pages'];
                    $data['subPages'] = $_POST['subPage'];
                    $data['Category'] = $_POST['category'];
                    $data['Content'] = $_POST['content'];
                    
                    $this->model->insert($data);
                    }
        //affichage
        \Http::redirect(WWW_URL."index.php?controller=Admin\Manage&task=show");
    }
    
}