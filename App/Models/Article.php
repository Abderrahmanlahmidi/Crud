<?php

class Article
{

    private int $id;
    private string $titre;
    private string $contenu;
    private string $dateDePublication;
    private int $utilisateur_id;

    public function __construct() {}

    public function getId(): int
    {
        return $this->id;
    }
    public function getTitre(): string
    {
        return $this->titre;
    }
    public function getContenu(): string
    {
        return $this->contenu;
    }
    public function getDateDePublication(): string
    {
        return $this->dateDePublication;
    }
    public function getUserId(): int
    {
        return $this->utilisateur_id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }
    public function setContenu(string $contenu): void
    {
        $this->contenu = $contenu;
    }
    public function setDateDePublication(string $dateDePublication): void
    {
        $this->dateDePublication = $dateDePublication;
    }
    public function setUserId(int $utilisateur_id): void
    {
        $this->utilisateur_id = $utilisateur_id;
    }

    public function createArticle(Article $article)
    {
        $query = "INSERT INTO Articles (titre, contenu, date, Utilisateur_id) VALUES (:titre, :contenu, :date)";
        $stmt = DatabaseConnection::getInstance()->prepare($query);
        $stmt->execute([
            'titre' => $article->getTitre(),
            'contenu' => $article->getContenu(),
            'Utilisateur_id' => $article->getUserId()
        ]);
        return $article;
    }
    
}
