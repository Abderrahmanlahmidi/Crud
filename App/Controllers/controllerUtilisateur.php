<?php

basePath('App/Models/Utilisateur.php');

class controllerUtilisateur
{
    private $modelUtilisateur;

    public function __construct(){
        $this -> modelUtilisateur = new Utilisateur();
    }

    public function createUtilisateur($nom, $email, $password){
        $this -> modelUtilisateur->createUtilisateur($nom, $email, $password);




    }

}