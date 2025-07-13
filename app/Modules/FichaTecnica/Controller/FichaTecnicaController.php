<?php

namespace app\Modules\FichaTecnica\Controller;

use app\View\View;

class FichaTecnicaController
{
    
    private $view;
    private $dirView;
    public function __construct() {
        $this->view = new View;
        $this->dirView  = "FichaTecnica/View/";
    }

    public function index() 
    {
        $this->view->render($this->dirView."home/index.php");
    }


}