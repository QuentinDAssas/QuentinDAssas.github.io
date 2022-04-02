<?php
/**
     * controller principal du crud admin
     *
     * 
     */
namespace Controllers;

class Admin extends Controller 
{

    public function __construct()
    {
        //tester si l'utilisateur est bien admin
        \Session::redirectIfNotAdmin();
        
        //appel du constructeur du parent
        parent::__construct();
        
    }
}