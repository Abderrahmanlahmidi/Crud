<?php
class ArticleController
{

    private Article $articleModel;

    public function __construct()
    {
        $this->articleModel = new Article();
    }

    public function addArticle()
    {
        if (isset($_POST['submit'])) {
            $titre = $_POST['titre'];
            $contenu = $_POST['contenu'];
            $dateDePublication = $_POST['dateDePublication'];
        }
        try {
            $article =  new Article();
            $article->setTitre($titre);
            $article->setContenu($contenu);
            $article->setDateDePublication($dateDePublication);
        } catch (PDOException $e) {
            error_log('eror to add article' . $e->getMessage());
        }
    }

    
}
