<?php


namespace App\Controller;

use App\Entity\HistoricValues;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HistoricValuesController extends AbstractController
{
    public function __invoke($data, $id)
    {
        $repository = $this->getDoctrine()
            ->getRepository(HistoricValues::class);
        $data = $repository->findHistoricbyValue( $id );
        return $data;
    }
}