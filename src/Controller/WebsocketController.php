<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WebsocketController extends AbstractController
{
    /**
     * @Route("/", name="websocket")
     */
    public function index()
    {
        return $this->render('websocket/index.html.twig', [
            'controller_name' => 'WebsocketController',
        ]);
    }
}
