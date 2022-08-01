<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ResVotoController extends AbstractController
{

    /**
     * @Route("/respuestas/{id}/like/{likes<like|dislike>}", methods={"POST"})
     */
    public function resVotacion($id, $likes){
        if($likes === 'like'){
            $totalLikes = rand(20, 100);
        }else{
            $totalLikes = rand(0, 15);
        }
        return $this->json(['likes' => $totalLikes]);
    }
}