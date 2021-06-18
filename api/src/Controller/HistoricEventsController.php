<?php


namespace App\Controller;
use App\Entity\HistoricEvents;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class HistoricEventsController extends AbstractController
{
    public function __invoke($data, $id)
    {
        $repository = $this->getDoctrine()
            ->getRepository(HistoricValues::class);
        $data = $repository->findOneBy([
            'idHistoric' => $id,
        ]);
        return $data;
    }
}