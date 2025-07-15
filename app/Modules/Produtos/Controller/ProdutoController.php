<?php

namespace app\Modules\Produtos\Controller;

use app\View\View;

class ProdutoController 
{
    
    private $view;
    public function __construct() {
        $this->view = new View;
    }

    public function index() 
    {
        $this->view->render("Produtos/View/home/index.php");
    }

    public function delete()
    {
        $this->view->render("Produtos/View/produto/index.php");
    }

}