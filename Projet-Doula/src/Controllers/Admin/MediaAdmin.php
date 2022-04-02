<?php

namespace Controllers\Admin;

class MediaAdmin extends \Controllers\Admin 
{
   protected $modelName = \Models\Media::class; 
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index()
    {
        
        // On part du principe qu'on ne possède pas de param "id"
       
        $media_id = null;
        // Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
        if (!empty($_GET['id']) && ctype_digit($_GET['id']))
        {
            $media_id = $_GET['id'];
            $medias = $this->model->find($media_id);
            
            //affichage
            \Renderer::showAdmin("mediaAdmin", compact('medias'));
        }
        else
        {
            $medias = null;
            $AllMedias = $this->model->findAll();
            
            //affichage
            \Renderer::showAdmin("mediaAdmin", compact('AllMedias', 'medias'));
        }
    }
    
    public function checkImg()
    {
        $allowed_file_types = ['image/png', 'image/jpeg', 'image/jpg', 'image/webp','image/gif','image/vnd.microsoft.icon'];

        //tester si le type MIME du fichier ($_FILES['image']['tmp_name'] est dans le tableau $allowed_file_types 
        if (!in_array(mime_content_type($_FILES["image"]["tmp_name"]), $allowed_file_types)) 
        {
            //le type de fichier n'est pas le bon
            \Session::addFlash('error', 'Mauvais format !');
             \Http::redirectBack();
        }
        
        $name = strtolower(htmlspecialchars($_POST['name']));
        
        switch(mime_content_type($_FILES["image"]["tmp_name"]))
        {
            case 'image/png':
                //construction du nom du fichier
                $name_file = $name.".png";
                break;
            case 'image/jpeg':
                //construction du nom du fichier
                $name_file = $name.".jpg";
                break;
            case 'image/jpg':
                //construction du nom du fichier
                $name_file = $name.".jpg";
                break;
            case 'image/webp':
                //construction du nom du fichier
                $name_file = $name.".webp";
                break;
            case 'image/gif':
                //construction du nom du fichier
                $name_file = $name.".gif";
                break;
            case 'image/vnd.microsoft.icon':
                //construction du nom du fichier
                $name_file = $name.".ico";
                break;
        }
        
    return $name_file;
    }
    
    public function updateImg()
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
        $medias = $this->model->find($id);
        if (!$medias) {
            die("L'article $id n'existe pas !");
        }
        
        $content =strtolower(htmlspecialchars($_POST['content']));
        
        if(empty($_POST['pages']))
        {
            //mise à jour de la base de données
            $data = [
            'Id' => $id,
            'Content' => $content
            ];
        }
        else
        {
            //mise à jour de la base de données
            $data = [
            'Id' => $id,
            'Page' => $_POST['pages'],
            'subPages' => $_POST['subPage'],
            'Category' => $_POST['category'],
            'Content' => $content
            ];   
        }
        $this->model->update($data);
        
        \Http::redirect(WWW_URL."index.php?controller=Admin\MediaAdmin&task=index");
    }

    public function uploadImg()
    {
        //tester si on a bien un fichier
        
        if ($_FILES['image']['error'] > 0)
        {
            //on a pas de fichier
            \Session::addFlash('error', 'Pas de fichier !');
             \Http::redirectBack();
        }
        
        $name_file = self::checkImg($_FILES);
        
        $type = htmlspecialchars($_POST['type']);
        
        switch($type)
        {
            case 'images':
                $path ='./assets/images/';
                break;
            case 'logo':
                $path ='./assets/images/logo/';
                if($_POST['category'] == 'logoHeader')
                {
                   $name ='logo Continuum Doula Header'; 
                }
                else
                {
                    $name ='logo Continuum Doula Footer';
                }
                $name_file = $name.".webp";
                break;
            case 'favicon':
                $path ='./assets/images/icon/';
                $name ='favicon';
                $name_file = $name.".ico";
                break;
        }

        //construire le nouveau nom du fichier (tjrs renommer les fichiers uploadés)
        $name_file =  str_replace(' ', '', $name_file);

        //déplacer le fichier de l'espace temporaire vers le dossier d'upload du projet
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$path.$name_file);
        //tester $resultat
        if (!$resultat) 
        {
            //le deplacement du fichier n'a pas abouti
            \Session::addFlash('error', 'Erreur upload !');
             \Http::redirectBack();
        }

        if($type == 'images')
        {
            if(empty($_POST['subPage']))
            {
                //mise à jour de la base de données
                $data = [
                'FilesPath' => $path,
                'Name' => $name_file,
                'Content' => $_POST['content'],
                'Page' => $_POST['pages'],
                'Category' => $_POST['category'],
                'Type' => $type
                ];
            }
            elseif(empty($_POST['category']))
            {
                //mise à jour de la base de données
                $data = [
                'FilesPath' => $path,
                'Name' => $name_file,
                'Content' => $_POST['content'],
                'Page' => $_POST['pages'],
                'Category' => $_POST['subPage'],
                'Type' => $type
                ];
            }
            
            //mise à jour de la base de données
            $data = [
            'FilesPath' => $path,
            'Name' => $name_file,
            'Content' => $_POST['content'],
            'Page' => $_POST['pages'],
            'subPages' => $_POST['subPage'],
            'Category' => $_POST['category'],
            'Type' => $type
            ];
            
            $this->model->insert($data);
        }
        
        \Http::redirect(WWW_URL."index.php?controller=Admin\MediaAdmin&task=index");
    }
}
?>