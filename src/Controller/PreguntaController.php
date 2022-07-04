<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PreguntaController
{
    /**
     * @Route("/")
     */
    public function home(){
        return new Response( content: 'Bienvenido a la portada!');
    }

    /**
     * @Route("/preguntas/{slug}")
     */
    public function mostrar($slug){
        return new Response( sprintf('Hola %s', $slug));
    }
}