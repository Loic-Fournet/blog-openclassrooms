<?php

namespace Blog\config;
use Blog\src\controller\BackController;
use Blog\src\controller\ErrorController;
use Blog\src\controller\FrontController;
use Exception;

class Router
{
    //Member data attributes
    private $frontController;
    private $backController;
    private $errorController;
    private $request;

    //call methods whith controller class
    public function __construct()
    {
        $this->request = new Request();
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        $route = $this->request->getGet()->get('route');
        try {
                if(isset($route))
                {
                    $this->request->getSession()->set('test', 'Pine d\'huitre');
                    var_dump($this->request->getSession()->get('test'));
                    if($route === 'article'){
                        $this->frontController->article($this->request->getGet()->get('articleId'));
                    }
                    elseif($_GET[$route] === 'addArticle'){
                        $this->backController->addArticle($this->request->getPost());
                    }
                    else{
                        $this->errorController->errorNotFound();
                    }
                }
                else {;
                    $this->frontController->blog();
                }
            }
            catch (Exception $e)
            {
                $this->errorController->errorServer();
            }
    }
}