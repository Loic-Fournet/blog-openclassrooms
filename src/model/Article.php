<?php

namespace Blog\src\model;

class Article

{
    private $id;
    private $title;
    private $firstText;
    private $content;
    private $author;
    private $dateArticle;
    private $picture;
    private $category;



    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }



    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }



    public function getFirstText()
    {
        return $this->firstText;
    }
    public function setFirstText($firstText)
    {
        $this->firstText = $firstText;
    }



    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }



    public function getAuthor()
    {
        return $this->author;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }



    public function getDateArticle()
    {
        return $this->dateArticle;
    }
    public function setDateArticle($dateArticle)
    {
        $this->dateArticle = $dateArticle;
    }



    public function getPicture()
    {
        return $this->picture;
    }
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }



    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
}