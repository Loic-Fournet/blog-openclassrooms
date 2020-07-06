<?php

class Article extends Database
{
    public function getArticles()
    {
        $sql = 'SELECT id, title, first_text, content, author, date_post, category FROM post ORDER BY id DESC';
        return $this->createQuery($sql);
    }

    public function getArticle($articleId)
    {
        $sql = 'SELECT id, title, first_text, content, author, date_post, category FROM post WHERE id = ?';
        return $this->createQuery($sql,[$articleId]);
    }
}