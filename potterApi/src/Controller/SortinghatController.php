<?php

namespace App\Controller;

use App\Entity\API;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Annotation\Route;

class SortinghatController extends AbstractController
{
    /**
     * @Route("/sortinghat", name="sortinghat")
     */
    public function index()
    {
        $api = new API();
        $content = $api->makeCall("sortinghat");
        return $this->render('sortinghat/index.html.twig', [
            'content' => $content
        ]);
    }

}
