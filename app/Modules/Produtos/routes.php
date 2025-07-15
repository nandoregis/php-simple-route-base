<?php

use app\Modules\Produtos\Controller\ProdutoController;

    return [
        [   
            "route" => "/",
            "controller" => new ProdutoController,
            "method" => "index",
            "http" => ["GET", "POST"]
        ],
           [
            "route" => "/{uuid}",
            "controller" => new ProdutoController,
            "method" => "delete",
            "http" => ["GET","POST"]
        ],
    ];

