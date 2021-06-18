<?php

namespace App\Controller;

use App\Entity\HistoricEvents;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HistoricMemoriesEvents extends AbstractController
{
    public function __invoke($data)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository(HistoricEvents::class);

        $date = new \DateTime('NOW');

         return $repository->findHistoricMemoriesEvent($date->format('d'), $date->format('m'));
    }
}