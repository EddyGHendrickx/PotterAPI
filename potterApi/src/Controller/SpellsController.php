<?php

namespace App\Controller;

use App\Entity\API;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SpellsController extends AbstractController
{
    /**
     * @Route("/spells", name="spells")
     */
    public function index()
    {
        $api = new API();
        $content = $api->makeCall("spells");
        return $this->render('spells/index.html.twig', [
            'content' => $content
        ]);
    }
}
