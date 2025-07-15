<?php

namespace app\View;

use Exception;

class View

{
    private $dir; // diretorio principal app/...
    public function __construct() 
    {
       $this->dir = str_replace('View','',__DIR__);
    }

    public function render(String $view)
    {   

        $dirView = $this->dir . "Modules" . DIRECTORY_SEPARATOR . str_replace('/','\\',$view);
        
        try {

            if(!file_exists($dirView)) {
                throw new Exception("File not found", 1);
                
            }

            include_once($dirView);
         
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

}