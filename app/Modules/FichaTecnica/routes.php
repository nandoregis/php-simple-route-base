<?php

use app\Modules\FichaTecnica\Controller\FichaTecnicaController;

    return [
        [   
            "dir" => "FichaTecnica",
            "route" => "/ficha-tecnica",
            "controller" => new FichaTecnicaController,
            "method" => "index",
            "http" => ["GET", "POST"]
        ],
    ];