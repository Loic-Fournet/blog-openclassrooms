<?php

namespace Blog\src\controller;

class FrontController
{
    public function blog()
    {
        require '../templates/blog.php';
    }
}