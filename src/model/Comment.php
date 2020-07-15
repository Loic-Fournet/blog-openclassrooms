<?php
namespace Blog\src\model;

class Comment

{
    private $id;
    private $author;
    private $content;
    private $dateComment;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }


    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }


    public function getDateComment()
    {
        return $this->dateComment;
    }

    public function setDateComment($dateComment)
    {
        $this->dateComment = $dateComment;
    }
}

