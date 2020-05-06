<?php

namespace App\Controller;

use App\Entity\API;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
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
        foreach ($content as $spells) {
            $spellsName[] = [
                'name' => $spells['spell'],
                'effect' => $spells['effect'],
            ];
        }
        shuffle($spellsName);
        $randomSpells = array_slice($spellsName, 0, 3);
        return $this->render('spells/index.html.twig', [
            'content' => $randomSpells
        ]);
    }
}
