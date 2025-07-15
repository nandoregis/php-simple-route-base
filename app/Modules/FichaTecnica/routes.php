<?php

use app\Modules\FichaTecnica\Controller\FichaTecnicaController;

    return [
        [   
            "route" => "/",
            "controller" => new FichaTecnicaController,
            "method" => "index",
            "http" => ["GET", "POST"]
        ],
    ];