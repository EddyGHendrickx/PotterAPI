<?php

namespace App\Controller;

use App\Entity\API;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Tests\Matcher\TestCompiledRedirectableUrlMatcher;

class PotterController extends AbstractController
{
    /**
     * @Route("/potter", name="potter")
     */
    public function index()
    {
        $api = new API();
        $content = $api->makeCall("characters");
        return $this->render('potter/index.html.twig', [
            'content' => $content,
        ]);
    }
}
