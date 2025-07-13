<?php

namespace app\Modules\Produto\Controller;

use app\View\View;

class ProdutoController 
{
    
    private $view;

    public function __construct() {
        $this->view = new View;
        
    }

    public function index() 
    {
        $this->view->render("Produto/View/home/index.php");
    }

    public function delete()
    {
        $this->view->render("Produto/View/delete/index.php");
    }

}