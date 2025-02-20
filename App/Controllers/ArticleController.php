<?php

class ArticleController {

 private Article $articleController;

 public function __construct()
 {
    return $this->articleController = new Article();
 }

 public function addArticle()
 {
    
 }


 public function createArticle($titre, $contenu, $datePublication){
     $query = 'insert into Articles (titre,contenu,datePublication)'
 }



}