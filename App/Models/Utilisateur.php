<?php

require basePath('App/Database/DatabaseConnection.php');
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

    public function createUtilisateur($nom, $email, $password){
        $query = "INSERT INTO utilisateur(nom, email, password) VALUES(:nom, :email, :password)";
        $stmt = DatabaseConnection::getInstance()->prepare($query);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    }

    public function deleteUtilisateur(int $id){
        $query = "DELETE FROM utilisateur WHERE id = :id";
        $stmt = DatabaseConnection::getInstance()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function updateUtilistaur(Utilisateur $user): bool
    {
        try {
            $query = "UPDATE users SET nom = :nom,password = :lastname, email = :email,WHERE id = :id";

            $stmt = DatabaseConnection::getInstance()->prepare($query);
            return $stmt->execute([
                'nom' => $user->getNom(),
                'password' => $user->getPassword(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),

            ]);
        } catch (PDOException $e) {
            error_log("eroror: " . $e->getMessage());

            return fsele;
        }
    }


}
