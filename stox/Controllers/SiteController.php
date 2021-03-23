<?php

namespace Stox\Controllers;

use Silex\Application;
use Stox\Models\Fornecedor;


class SiteController
{
    public function index()
    {
        // Acesso ao model Fornecedor
        $fornecedor = new Fornecedor;
        $fornecedores = $fornecedor->all();
        return view()->render('fornecedores.twig', [
            'fornecedores' => $fornecedores,
            'titulo' => 'Visualizar todos os fornecedores'
        ]);
    }
    
    public function hello($nome)
    {
        return "<h1>HELLO  $nome </h1>";
    }

    public function form()
    {
        return view()->render('site/form.twig');
    }

    public function logar(Application $app)
    {
        $req = $app['request']->request;
        echo $req->get('login');
        echo $req->get('senha');
        var_dump($req->all());
        return '';

        // return $app->redirect(URL_BASE . '/form');
    }
}

