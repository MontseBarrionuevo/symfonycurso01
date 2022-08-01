<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PreguntaController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home(Environment $twigEnv){
        $view = $twigEnv->render( name: 'home.html.twig');
        return new Response($view);
        //return $this->render(view: 'home.html.twig');
    }

    /**
     * @Route("/preguntas/{slug}")
     */
    public function mostrar($slug){

        dump($slug, $this);
        $res = [
            'Respuesta 1',
            'Respuesta 2',
            'Respuesta 3'
        ];
        return $this->render( view: 'res.html.twig', parameters: [
            'pregunta' => sprintf('Hola %s', $slug),
            'res' => $res,
        ]);
    }
}