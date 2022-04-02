<?php

namespace Controllers\Admin;

class Account extends \Controllers\Admin
{
   protected $modelName = \Models\User::class;

   /**
     * construction page d'accueil
     *
     * 
     */
   public function index() {

            //liste des données
            $list = $this->model->findAll_Id_Admin_Fn_Ln();

            //afficher la liste 
            \Renderer::showAdmin("account", compact('list'));

        
    }
    
    
    public function updateRole(array $data=[])
    {
            //controler que $_GET['id'] existe bien 
        if (isset($_GET['id']) && ctype_digit($_GET['id']))
        {
            //récupérer le rôle existant
            if ($this->model->getRole(intval($_GET['id'])) == 1)
            {
                $data['Admin'] = NULL;
            }
            else 
            {
                $data['Admin'] = 1;
            }
            
            $data['Id'] = intval($_GET['id']);
            //si on arrive ici on va pouvoir insérer notre nouveau rayon
            $this->model->update($data);

            \Http::redirect(WWW_URL."index.php?controller=Admin\Account&task=index");   
        }
        else {
            throw new \Exception('Impossible de changer le rôle !');
        }
    }

    public function delete(array $data=[])
    {   
        //controler que $_GET['id'] existe bien 
        if (isset($_GET['id']) && ctype_digit($_GET['id']))
        {    
            $id = intval($_GET['id']);

            $this->model->delete($id);

            \Http::redirect(WWW_URL."index.php?controller=Admin\Account&task=index");
        }
        else {
            throw new \Exception('Impossible de supprimer l\'utilisateur !');
        }
    }
}