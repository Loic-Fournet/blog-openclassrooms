<?php

namespace Blog\src\controller;
use Blog\src\DAO\PostDAO;
use Blog\src\DAO\CommentDAO;

class FrontController
{
    private $postDAO;
    private $commentDAO;

    public function __construct()
    {
        $this->postDAO = new PostDAO();
        $this->commentDAO = new CommentDAO();
    }

    public function blog()
    {
        $posts = $this->postDAO->getPosts();
        require '../templates/blog.php';
    }

    public function post($postId)
    {
        $posts = $this->postDAO->getPost($postId);
        $comments = $this->commentDAO->getCommentsFromPost($postId);
        require '../templates/single.php';
    }
}