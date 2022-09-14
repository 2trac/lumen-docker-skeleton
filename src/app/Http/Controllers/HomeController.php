<?php

namespace App\Http\Controllers;


use Laravel\Lumen\Routing\Controller as BaseController;

use App\Libraries\Conteudo;


class HomeController extends BaseController
{
    function show()
    {
        die('home');
        return view('home-show', [
            'destaques' => [],
            'recentes'  => [],
            'populares' => [],
        ]);
    }
}
