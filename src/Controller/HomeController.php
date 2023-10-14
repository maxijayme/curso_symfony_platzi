<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HomeController{
    #[Route('/')]
    public function home(Request $request): Response{
        $search = $request->get('search');
        return new Response('Estas ingresando a '. $search);
    }
}