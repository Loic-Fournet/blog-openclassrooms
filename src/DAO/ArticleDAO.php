<?php
namespace Blog\src\DAO;
use Blog\src\model\Article;
use Blog\config\Parameter;

class ArticleDAO extends DAO
{
    private function buildObject($row)
    {
        $article = new Article();
        $article->setId($row['id']);
        $article->setTitle($row['title']);
        $article->setFirstText($row['first_text']);
        $article->setContent($row['content']);
        $article->setAuthor($row['author']);
        $article->setPicture($row['picture']);
        $article->setCategory($row['category']);
        $article->setDateArticle($row['date_article']);
        return $article;
    }

    public function getArticles()
    {
        $sql = 'SELECT id , title , first_text , content, author, date_article, picture, category FROM article ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row)
        {
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }

    public function getArticle($articleId)
    {
        $sql = 'SELECT id , title , first_text , content , author  , picture , category , date_article  FROM article WHERE id = ?';
        $result = $this->createQuery($sql, [$articleId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
    }

    public function addArticle(Parameter $post)
    {
        $sql = 'INSERT INTO article (id , title , first_text , content , author , picture , category, date_article) VALUES (?, ?, ?, ?, ?, ?,? , NOW())';
        $this->createQuery($sql, [$post->get('title'),$post->get('first_text'), $post->get('content'),$post->get('author'),$post->get('picture'), $post->get('category')]);
    }
}