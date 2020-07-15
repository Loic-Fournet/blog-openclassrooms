<?php

namespace Blog\config;
use Blog\src\controller\BackController;
use Blog\src\controller\ErrorController;
use Blog\src\controller\FrontController;
use Exception;

class Router
{
    private $frontController;
    private $backController;
    private $errorController;

    public function __construct()
    {
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'article'){
                    $this->frontController->article($_GET['articleId']);
                }
                elseif($_GET['route'] === 'addArticle'){
                    $this->backController->addArticle($_POST);
                }
                else{
                    $this->errorController->errorNotFound();
                }
            }
            else{
                $this->frontController->blog();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->errorServer();
        }
    }
}