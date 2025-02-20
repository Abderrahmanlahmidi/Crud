<?php

require basePath('App/Models/Utilisateur.php');

class controllerUtilisateur
{
    private $modelUtilisateur;

    public function __construct(){
        $this -> modelUtilisateur = new Utilisateur();
    }

    public function createUtilisateurController(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nom = htmlspecialchars($_POST['nom']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $this -> modelUtilisateur->createUtilisateur($nom, $email, $password);
        }
            require basePath('App/Views/utilisateurView.php');

    }

}