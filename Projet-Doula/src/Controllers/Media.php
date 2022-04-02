<?php

namespace Controllers;

class Media extends Controller 
{
   protected $modelName = \Models\Media::class; 
   /**
     * construction page d'accueil
     *
     * 
     */
    public function index()
    {
        $AllMedias = $this->model->findAll();
        
        //affichage
        \Renderer::render("media", compact('AllMedias'));
        
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
        
        $category = htmlspecialchars($_POST['categories']);
        $name = strtolower(htmlspecialchars($_POST['name']));
        var_dump($name);
        var_dump($category);
        
        switch($category)
        {
            case 'images':
                $path ='./assets/images/';
                break;
            case 'logo':
                $allowed_file_types = ['image/webp'];
                
                //tester si le type MIME du fichier ($_FILES['image']['tmp_name'] est dans le tableau $allowed_file_types 
                if (!in_array(mime_content_type($_FILES["image"]["tmp_name"]), $allowed_file_types)) 
                {
                    //le type de fichier n'est pas le bon
                    \Session::addFlash('error', 'Mauvais format !');
                     \Http::redirectBack();
                }
                $path ='./assets/images/logo/';
                $name ='logo';
                break;
            case 'icon':
                $allowed_file_types = ['image/ico'];
                
                //tester si le type MIME du fichier ($_FILES['image']['tmp_name'] est dans le tableau $allowed_file_types 
                if (!in_array(mime_content_type($_FILES["image"]["tmp_name"]), $allowed_file_types)) 
                {
                    //le type de fichier n'est pas le bon
                    \Session::addFlash('error', 'Mauvais format !');
                     \Http::redirectBack();
                }
        
                $path ='./assets/images/icon/';
                $name ='favicon';
                break;
        }
                
        
        //tester le format du fichier
        //extensions autorisées
        $allowed_file_types = ['image/png', 'image/jpeg', 'image/jpg', 'image/webp','gif','image/ico'];
        
        //tester si le type MIME du fichier ($_FILES['image']['tmp_name'] est dans le tableau $allowed_file_types 
        if (!in_array(mime_content_type($_FILES["image"]["tmp_name"]), $allowed_file_types)) 
        {
            //le type de fichier n'est pas le bon
            \Session::addFlash('error', 'Mauvais format !');
             \Http::redirectBack();
        }
        
        var_dump((mime_content_type($_FILES["image"]["tmp_name"])));
        //construire le nouveau nom du fichier (tjrs renommer les fichiers uploadés)
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
            case 'image/ico':
                //construction du nom du fichier
                $name_file = $name.".ico";
                break;
        }
        $name_file =  str_replace(' ', '', $str);
        var_dump($name_file);
        

        var_dump($path);  
        
        //déplacer le fichier de l'espace temporaire vers le dossier d'upload du projet
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],"$path/$name_file");
        var_dump($resultat);

        //tester $resultat
        if (!$resultat) 
        {
            //le deplacement du fichier n'a pas abouti
            \Session::addFlash('error', 'Erreur upload !');
             \Http::redirectBack();
        }
        
        //mise à jour de la base de données
        $data = [
        'FilesPath' => $path,
        'Categories' => $category,
        'Alt' => $name_file,
        'Name' => $name
        ];
        var_dump($data);
        
        $this->model->insert($data); 
    
        \Http::redirect(WWW_URL."index.php?controller=Media&task=index");
    }
    
}
?>