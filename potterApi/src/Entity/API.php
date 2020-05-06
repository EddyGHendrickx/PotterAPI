<?php

namespace App\Entity;

use App\Repository\APIRepository;
use Symfony\Component\HttpClient\HttpClient;


class API
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    private $key = "$2a$10$.LWsor7mQdv7tNeuf0B8.OusCcMLb7g6YVFHfBW8mqTlHmqQJl.gi";


    public function getId(): ?int
    {
        return $this->id;
    }

    public function makeCall()
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://www.potterapi.com/v1/characters/?key='. $this->key);

        return $response->getContent();
    }
}
//$2a$10$.LWsor7mQdv7tNeuf0B8.OusCcMLb7g6YVFHfBW8mqTlHmqQJl.gi
