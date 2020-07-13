<?php

namespace Blog\src\controller;
use Blog\src\DAO\PostDAO;
use Blog\src\DAO\CommentDAO;
use Blog\src\model\View;

class FrontController
{
    private $postDAO;
    private $commentDAO;
    private $view;

    public function __construct()
    {
        $this->postDAO = new PostDAO();
        $this->commentDAO = new CommentDAO();
        $this->view = new View();
    }

    public function Blog()
    {
        $posts = $this->postDAO->getPosts();
        return $this->view->render('blog', [
            'posts' => $posts
        ]);
    }

    public function post($postId)
    {
        $post = $this->postDAO->getPost($postId);
        $comments = $this->commentDAO->getCommentsFromPost($postId);
        return $this->view->render('single', [
            'post' => $post,
            'comments' => $comments
        ]);
    }
}