<?php

use app\Modules\Produto\Controller\ProdutoController;

    return [
        [   
            "dir" => "Produto",
            "route" => "/produtos",
            "controller" => new ProdutoController,
            "method" => "index",
            "http" => ["GET", "POST"]
        ],
           [
            "dir" => "Produto",
            "route" => "/produtos/delete/{uuid}",
            "controller" => new ProdutoController,
            "method" => "delete",
            "http" => ["GET","POST"]
        ],
    ];