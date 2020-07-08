<?php

namespace Blog\config;
use Blog\src\controller\FrontController;
use Exception;

class Router
{
    private $frontController;

    public function __construct()
    {
        $this->frontController = new FrontController();
    }

    public function run()
    {
        try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'post'){
                    $this->frontController->post($_GET['postId']);
                }
                else{
                    echo 'page inconnue';
                }
            }
            else{
                $this->frontController->blog();
            }
        }
        catch (Exception $e)
        {
            echo 'Erreur';
        }
    }
}