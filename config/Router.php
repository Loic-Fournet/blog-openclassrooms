<?php

namespace Blog\config;
use Blog\src\controller\FrontController;
use Blog\src\controller\ErrorController;
use Exception;

class Router
{
    private $frontController;
    private $errorController;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        try {
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'post'){
                    $this->frontController->post($_GET['postId']);
                }
                else {
                    $this->errorController->errorNotFound();
                }
            }
            else {
                $this->frontController->blog();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->errorServer();
        }
    }
}