<?php

class Utilisateur
{

    private int $id;
    private string $nom;
    private string $email;
    private string $password;

    public function __construct() {}

    public function getId(): int
    {
        return $this->id;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setId(int $id):void
    {
        $this->id = $id;
    }
    public function setNom(string $nom):void
    {
        $this->nom = $nom;
    }
    public function setEmail(string $email):void
    {
        $this->email = $email;
    }
    public function setPassword(string $password):void
    {
        $this->password = $password;
    }
}
